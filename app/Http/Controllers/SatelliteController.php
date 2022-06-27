<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;

class SatelliteController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'Map';
    }
    public function index()
    {
        return view('satelliteStart',
        [
            'layout'=>'satellite'
        ]);
    }

    public function map()
    {
        return view('satelliteMap',
        [
            'layout'=>'satellite'
        ]);
    }

    public function saveCoordinate(Request $request)
    {
        $geoDataRec= '';
        $geoDataRec= $request->geoData;

        for($i = 0; $i<count($geoDataRec);$i++)
        {
            $geoDataRec[$i] = array_map('floatVal',$geoDataRec[$i]);
        }
        $this->validate($request,
        [
            'land'=>'required',
            'cropType'=>'required',
            'harvestTime'=>'required'
        ]);

        $client = new Client(['base_uri' => 'http://api.agromonitoring.com/agro/1.0/polygons?appid=155d972869de7dbd371856df24a1abe9']);
        $response = $client->request('POST','',
        [
            'json'=>
            [
                'name' =>$request->land,
                'geo_json'=>[
                    'type'=>'Feature',
                    'properties'=>[
                        'name'=>'hi'
                    ],
                    'geometry'=>[
                        'type'=>'Polygon',
                        'coordinates'=>
                        [
                            $geoDataRec
                        ]
                    ]
                ]
            ]

        ]);
        $recivedData = json_decode($response->getBody());
        $id = $recivedData->id;

        $mapData=
        [
            'name' => $request->land,
            'cropType' => $request->cropType,
            'harvestTime' =>$request->harvestTime,
            'coordinations'=>$request->coordinations,
            'id'=>$id

        ];
        $userRef = $this->database->getReference('User')->getChild(Cookie::get('id'))->getChild('Map')->push($mapData);
        return response()->json();
    }

    public function landShow()
    {
        $lands = $this->database->getReference('User')->getChild(Cookie::get('id'))->getChild('Map')->getSnapShot()->getValue();

        return view('lands',
        [
            'lands'=>$lands,
            'layout'=>'satellite',
            'layout' => 'fields'
        ]);
    }

    public function landDetail($id)
    {
        $land = $this->database->getReference('User')->getChild(Cookie::get('id'))->getChild('Map')->getChild($id)->getSnapShot()->getValue();
        $url = "https://api.agromonitoring.com/agro/1.0/ndvi/history?polyid=".$land['id']."&start=1530336000&end=1534976000&appid=155d972869de7dbd371856df24a1abe9";
        $imgUrl = "http://api.agromonitoring.com/agro/1.0/image/search?start=1483260631&end=1514796631&polyid=".$land['id']."&appid=155d972869de7dbd371856df24a1abe9";
        $imgResponse = Http::get($imgUrl);
        $response = Http::get($url);
        $imgs = json_decode($imgResponse);
        $NDVI = json_decode($response);
        $lastDay=max($NDVI);
        // foreach($NVI as $date)
        // {
        //    echo date('Y/m/d H:i:s', $date->dt) .'</br>';
        // }
        //return date('Y/m/d H:i:s',  '1648119031') .'</br>';
        $soilResponse = HTTP::get('http://api.agromonitoring.com/agro/1.0/soil?polyid='.$land['id'].'&appid=155d972869de7dbd371856df24a1abe9');
        $coordinates = json_encode($land['coordinations'],JSON_NUMERIC_CHECK);
        $firstPoint =  json_encode($land['coordinations'][0],JSON_NUMERIC_CHECK);


        return view('landDetail',
        [
            'firstPoint'=> $firstPoint,
            'coordinates'=> $coordinates,
            'layout'=>'satellite',
            'lastDay'=> $lastDay,
            'soilResponse'=>$soilResponse,
            'images'=>$imgs['0']->image
        ]);

    }

    public function test()
    {
        $worker = $this->database->getReference('User')->getChild(Cookie::get('id'))->getChild('Workers')->set();

    }

}

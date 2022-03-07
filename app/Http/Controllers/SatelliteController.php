<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class SatelliteController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'Map';
    }
    public function index()
    {
        return view('satelliteStart');
    }

    public function map()
    {
        return view('satelliteMap');
    }

    public function saveCoordinate(Request $request)
    {
        $this->validate($request,
        [
            'land'=>'required',
            'cropType'=>'required',
            'harvestTime'=>'required'
        ]);

        $mapData=
        [
            'name' => $request->land,
            'cropType' => $request->cropType,
            'harvestTime' =>$request->harvestTime,
            'coordinations'=>$request->coordinations

        ];
        $userRef = $this->database->getReference($this->tablename)->push($mapData);
    }

    public function landShow()
    {
        $lands = $this->database->getReference($this->tablename)->getSnapShot()->getValue();

        return view('lands',
        [
            'lands'=>$lands
        ]);
    }

    public function landDetail($id)
    {
        $land = $this->database->getReference($this->tablename)->getChild($id)->getSnapShot()->getValue();
        $coordinates = json_encode($land['coordinations'],JSON_NUMERIC_CHECK);
        $firstPoint =  json_encode($land['coordinations'][0],JSON_NUMERIC_CHECK);

        return view('landDetail',
        [
            'firstPoint'=> $firstPoint,
            'coordinates'=> $coordinates
        ]);
    }

}

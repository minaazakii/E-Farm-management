<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'HardWare';
    }
    public function index()
    {
        $user = session('user');

        //********************************Temperature Chart Data **********************************//

        $tempData = $this->database->getReference($this->tablename)->getChild('Temperature')->getSnapShot()->getvalue();
        $tempDates = [];
        $temps = [];
        $last4DatesTemp = [];
        $last4Temps = [];
        $dateAndTemps = [];
        //strtok($x, " "); to Remove After text Space

        //To Seprate Date and Temprature
        foreach ($tempData as $date => $temp)
        {
            $tempDates[] = strtok($date, " ");
            foreach($temp as $actualValue)
            {
                $temps[]= strtok($actualValue, "°");
            }
        }

        //To Put Dates and Temp in Same Array
        for ($i=0; $i <count($tempDates) ; $i++)
        {
            $dateAndTemps[$tempDates[$i]] = $temps[$i];
        }

        //To get Last 4 Dates and Temps
        foreach(array_reverse($dateAndTemps) as $date => $temp)
        {
            if(count($last4DatesTemp) < 4 && count($last4Temps)<4)
            {
                $last4DatesTemp[] = $date;
                $last4Temps[] = $temp;
            }
        }
        // dd($dateAndTemps,$tempDates,$temps, $last4Dates,$last4Temps);

       $xValues = $last4DatesTemp;
       $yValues = $last4Temps;


       //******************************************************End Temperature Chart**********************************************************//

        //******************************************************Humidity Chart**********************************************************//

       $humidityData = $this->database->getReference($this->tablename)->getChild('Humidity')->getSnapShot()->getvalue();
       $humidity ='';
       $humidityRemain ='';
       foreach(end($humidityData) as $humi)
       {
        $humidity = strtok($humi,'%') ;
       }

       $humidityRemain = 100 - $humidity;

       //******************************************************End Humidity Chart**********************************************************//

       //******************************************************Soil Moisture Chart**********************************************************//
       $soilData = $humidityData = $this->database->getReference($this->tablename)->getChild('SoilMoisture')->getSnapShot()->getvalue();
       $soil = '';
       $soilRemain = '' ;

       foreach(end($soilData) as $soilMoist)
       {
           $soil = strtok($soilMoist,'%');
       }

       $soilRemain = 100 - $soil ;

       //****************************************************** End Soil Moisture Chart**********************************************************//

       //****************************************************** API Weather Data **********************************************************//

       $response = Http::get('http://api.openweathermap.org/data/2.5/weather?q=alexandria&units=celsius&appid=f6698169bddf08cb2d772b7da17d943c');
       $icon = $response->json('weather.0.icon');
       $img = 'http://openweathermap.org/img/wn/'.$icon.'@2x.png';
       $currentTemp ='Failed To Get Tempreature';
       $maxTemp = 'Failed To Get Tempreature';
       $minTemp = 'Failed To Get Tempreature';
       $feelsLikeTemp = 'Failed To Get Tempreature';
       $weatherDisc ='Failed To Get Description';
       if($response->successful())
       {
        $currentTemp = round($response->json('main.temp')-273.15) ;
        $maxTemp =  round($response->json('main.temp_max')-273.15);
        $minTemp = round($response->json('main.temp_min')-273.15);
        $feelsLikeTemp = round($response->json('main.feels_like')-273.15);
        $weatherDisc = $response->json('weather.0.description');
       }

       //****************************************************** End API Weather Data **********************************************************//

        return view('dashboard',
        [
            'user'=>$user,
            'xValues'=>json_encode($xValues),
            'yValues'=>json_encode($yValues),
            'humidity'=> json_encode($humidity),
            'humidityRemain'=>json_encode($humidityRemain),
            'soil'=> json_encode($soil),
            'soilRemain'=> json_encode($soilRemain),
            'currentTemp'=>$currentTemp,
            'maxTemp'=>$maxTemp,
            'minTemp'=>$minTemp,
            'feelsLikeTemp'=>$feelsLikeTemp,
            'weatherDisc' => $weatherDisc,
            'img'=>$img

        ]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;
use Stevebauman\Location\Location;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;

class DashboardController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'HardWare';
    }
    public function index()
    {


        //********************************Temperature Chart Data **********************************//

        $tempData = $this->database->getReference($this->tablename)->getChild('Temperature')->getSnapShot()->getvalue();
        $tempDates = [];
        $temps = [];
        $last4DatesTemp = [];
        $last4Temps = [];
        $dateAndTemps = [];
        //strtok($x, " "); to Remove After text Space

        //To Seprate Date and Temprature And Remove Time
        foreach ($tempData as $date => $temp)
        {
            $tempDates[] = strtok($date, " ");
            foreach($temp as $actualValue)
            {
                $temps[]= strtok($actualValue, "°");
            }
        }

        //To Put Unique Dates and Last Temp For Each Day
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
       $ip = "24,177,756";
       $data = \Location::get($ip);
       $response = Http::get('https://api.openweathermap.org/data/2.5/onecall?lat='.$data->latitude.'&lon='.$data->longitude.'&exclude=minutely,hourly&appid=f6698169bddf08cb2d772b7da17d943c');
      // $response = Http::get('https://api.openweathermap.org/data/2.5/weather?q=Egypt&units=celsius&appid=f6698169bddf08cb2d772b7da17d943c');
       $currentTemp ='Failed To Get Tempreature';
       $icon = $response->json('current.weather.0.icon');
       $img = 'http://openweathermap.org/img/wn/'.$icon.'@2x.png';
       $weatherDisc ='Failed To Get Description';
       $day1Temp = 'Failed To Get Tempreature';
       $day1Icon = '';
       $day1Img = 'Failed To Get Image';
       $day1Disc = 'Failed To Get Description';
       $day2Temp = 'Failed To Get Tempreature';
       $day2Icon = '';
       $day2Img = 'Failed To Get Image';
       $day2Disc = 'Failed To Get Description';
       $day3Temp = 'Failed To Get Tempreature';
       $day3Icon = '';
       $day3Img = 'Failed To Get Image';
       $day3Disc = 'Failed To Get Description';
       if($response->successful())
       {
        $currentTemp = intval($response->json('current.temp')-273.15) ;
        $icon = $response->json('current.weather.0.icon');
        $img = 'http://openweathermap.org/img/wn/'.$icon.'@2x.png';
        $weatherDisc = $response->json('current.weather.0.description');
        $day1Temp = intval($response->json('daily.0.temp.day')-273.15);
        $day1Icon = $response->json('daily.0.weather.0.icon');
        $day1Img = 'http://openweathermap.org/img/wn/'.$day1Icon.'@2x.png';
        $day1Disc = $response->json('daily.0.weather.0.description');
        $day2Temp = intval($response->json('daily.1.temp.day')-273.15);
        $day2Icon = $response->json('daily.1.weather.0.icon');
        $day2Img = 'http://openweathermap.org/img/wn/'.$day2Icon.'@2x.png';
        $day2Disc = $response->json('daily.1.weather.0.description');
        $day3Temp = intval($response->json('daily.2.temp.day')-273.15);
        $day3Icon = $response->json('daily.2.weather.0.icon');
        $day3Img = 'http://openweathermap.org/img/wn/'.$day3Icon.'@2x.png';
        $day3Disc = $response->json('daily.2.weather.0.description');
       }

       //****************************************************** End API Weather Data **********************************************************//
        return view('dashboard',
        [
            'xValues'=>json_encode($xValues),
            'yValues'=>json_encode($yValues),
            'humidity'=> json_encode($humidity),
            'humidityRemain'=>json_encode($humidityRemain),
            'soil'=> json_encode($soil),
            'soilRemain'=> json_encode($soilRemain),
            'currentTemp'=>$currentTemp,
            'weatherDisc' => $weatherDisc,
            'img'=>$img,
            'day1Temp'=>$day1Temp,
            'day1Img' =>$day1Img,
            'day1Disc'=> $day1Disc,
            'day2Temp'=>$day2Temp,
            'day2Img' =>$day2Img,
            'day2Disc'=> $day2Disc,
            'day3Temp'=>$day3Temp,
            'day3Img' =>$day3Img,
            'day3Disc'=> $day3Disc,
            'layout'=>'dashboard'

        ]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;

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

       $humidityData = $this->database->getReference($this->tablename)->getChild('Humidity')->getSnapShot()->getvalue();
       $humidity ='';
       $humidityRemain ='';
       foreach(end($humidityData) as $humi)
       {
        $humidity = strtok($humi,'%') ;
       }

       $humidityRemain = 100 - $humidity;

        return view('dashboard',
        [
            'user'=>$user,
            'xValues'=>json_encode($xValues),
            'yValues'=>json_encode($yValues),
            'humidity'=> json_encode($humidity),
            'humidityRemain'=>json_encode($humidityRemain)
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Database;

class SensorController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'HardWare';
    }
    public function index()
    {
        //**********************************  Tempreture Data *********************************************************************************/

        $tempData = $this->database->getReference($this->tablename)->getChild('Temperature')->getSnapShot()->getvalue();
        $tempDates = [];
        $temps = [];
        $tempAllDays = [];
        $xValues = [];
        $yValues = [];

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
            $tempAllDays[$tempDates[$i]] = $temps[$i];
        }

        //To Last 7 Days (Week)
        foreach(array_reverse($tempAllDays) as $date =>  $temp)
        {
            $xValues[] = $date;
            $yValues[] = $temp;
            if(count($xValues) == 7 && count($yValues) ==7)
            {
                break;
            }
        }

        //********************************** End Tempreture Data *********************************************************************************/

        //**********************************  Soil Moisture Data *********************************************************************************/
        $soilData = $this->database->getReference($this->tablename)->getChild('SoilMoisture')->getSnapShot()->getvalue();
        $soilDates = [];
        $soilTemps = [];
        $soilAllDays = [];
        $weekSoilTemp = [];
        $weekSoilDate = [];
         //To Seprate Date and Temprature And Remove Time
        foreach ($soilData as $date => $temp)
        {
            $soilDates[] = strtok($date, " ");
            foreach($temp as $actualValue)
            {
                $soilTemps[]= strtok($actualValue, "°");
            }
        }

        //To Put Unique Dates and Last Temp For Each Day
        for ($i=0; $i <count($soilDates) ; $i++)
        {
            $soilAllDays[$soilDates[$i]] = $soilTemps[$i];
        }

        //To Last 7 Days (Week)
        foreach(array_reverse($soilAllDays) as $date =>  $temp)
        {
            $weekSoilDate[] = $date;
            $weekSoilTemp[] = $temp;
            if(count($weekSoilDate) == 7 && count($weekSoilTemp) ==7)
            {
                break;
            }
        }

        //**********************************  End Soil Moisture Data *********************************************************************************/


        //**********************************  Humidity Data *********************************************************************************/
        $humidityData = $this->database->getReference($this->tablename)->getChild('Humidity')->getSnapShot()->getvalue();
        $humidityDates = [];
        $humidityTemps = [];
        $humidityAllDays = [];
        $weekHumidityTemp = [];
        $weekHumidityDate = [];

        //To Seprate Date and Temprature And Remove Time
        foreach ($humidityData as $date => $temp)
        {
            $humidityDates[] = strtok($date, " ");
            foreach($temp as $actualValue)
            {
                $humidityTemps[]= strtok($actualValue, "°");
            }
        }

        //To Put Unique Dates and Last Temp For Each Day
        for ($i=0; $i <count($humidityDates) ; $i++)
        {
            $humidityAllDays[$humidityDates[$i]] = $humidityTemps[$i];
        }

        //To Last 7 Days (Week)
        foreach(array_reverse($humidityAllDays) as $date =>  $temp)
        {
            $weekHumidityDate[] = $date;
            $weekHumidityTemp[] = $temp;
            if(count($weekSoilDate) == 7 && count($weekSoilTemp) ==7)
            {
                break;
            }
        }


        //********************************** End Humidity Data *********************************************************************************/
        return view('sensors',
        [
            'xValues' => array_reverse($xValues),
            'yValues' => array_reverse($yValues),
            'weekSoilDate' => array_reverse($weekSoilDate),
            'weekSoilTemp' => array_reverse($weekSoilTemp),
            'weekHumidityDate' => array_reverse($weekHumidityDate),
            'weekHumidityTemp' => array_reverse($weekHumidityTemp),
        ]);
    }
}

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
        return view('sensors',
        [
            'xValues' => array_reverse($xValues),
            'yValues' => array_reverse($yValues)
        ]);
    }
}

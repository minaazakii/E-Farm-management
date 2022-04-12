<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Kreait\Firebase\Database;

class TaskController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'Tasks';
    }

    public function index()
    {
        $empty = false;
        $months = ["January","February","March","April","May","June","July","August","September","October","Novemeber","December"];
        $tasks = $this->database->getReference('User')->getChild(Cookie::get('id'))->getChild('Tasks')->getSnapShot()->getValue();
        if($tasks == "")
        {
            $empty = true;
        }
        return view('tasks',
        [
            'tasks'=>collect($tasks),
            'months'=>$months,
            'empty' =>$empty,
            'layout'=>'task'
        ]);
    }

    public function taskDetailsIndex($id)
    {
        $task= $this->database->getReference('User')->getChild(Cookie::get('id'))->getChild('Tasks')->getChild($id)->getSnapShot()->getvalue();
        $today = Carbon::now() ;
        $addedTasks = [];
        $addedInterval =[];
        $addedRemainigDays=[];
        $addedSdate=[];
        $addedEdate=[];
        $addedPercentage = [];
        //added Tasks from Detals Page
        foreach($task as $addedTask)
        {
            if(is_array($addedTask))
            {
                $addedTasks[] = $addedTask;
                $addedSdate[] = new DateTime($addedTask['startDate']);
                $addedEdate[] = new DateTime($addedTask['endDate']);

            }
        }

        for ($i=0; $i <count($addedSdate) ; $i++)
        {
            $addedInterval[$i] = $addedSdate[$i]->diff($addedEdate[$i]);
            $addedRemainigDays[$i] = $today->diff($addedTasks[$i]['endDate']);
            $addedPercentage[$i] =  round((($addedInterval[$i]->days - $addedRemainigDays[$i]->days)/$addedInterval[$i]->days)*100);
        }
        $sDate = new DateTime($task['startDate']);
        $eDate = new DateTime($task['endDate']);
        $interval = $sDate->diff($eDate);
        $remainigDays = $today->diff($task['endDate']);
        $day = Carbon::createFromFormat('Y-m-d',$task['startDate'])->format('l');
        if($interval->days != 0)
        {

            $percentage = (($interval->days - $remainigDays->days)/$interval->days)*100;
        }
        else
        {
            $percentage = 100 ;
        }


        return view('taskDetails',
        [
            'task' =>$task,
            'interval'=>$interval,
            'day'=>$day,
            'id'=> $id,
            'percentage' => round($percentage),
            'addedTasks' =>$addedTasks,
            'addedInterval' =>$addedInterval,
            'addedPercentage' =>$addedPercentage,
            'layout'=>'task'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request,
        [
            'corp' =>'required',
            'startDate' => 'required',
            'endDate' => 'required|after:startDate',
            'notes' => 'required'
        ]);

        $today = now()->format('d/m/Y');
        $carbon = Carbon::createFromFormat('d/m/Y', $today);
        $day = substr($carbon->format('l'),0,3);
        $month = substr($carbon->format('F'),0,3);
        $time = now()->format('H:i:s');
        $fullDate = $day.','.' '.$carbon->format('d').' '.$month.' '.$carbon->format('Y').' '.$time;

        $taskData=
        [
            'corp' => $request->corp,
            'startDate' => str_replace('-','/',$request->startDate),
            'endDate' =>str_replace('-','/',$request->endDate) ,
            'notes'=>$request->notes,
        ];

        $taskRef = $this->database->getReference('User')->getChild(Cookie::get('id'))->getChild('Tasks')->getChild($fullDate)->set($taskData);

        //return response()->json();
        return redirect()->route('task.index');

    }

    public function storeTaskDetail(Request $request,$id)
    {
        $this->validate($request,
        [
            'corp' =>'required',
            'startDate' => 'required',
            'endDate' => 'required|after:startDate',
            'notes' => 'required'
        ]);
        $taskData=
        [
            'corp' => $request->corp,
            'startDate' => $request->startDate,
            'endDate' =>'-','/',$request->endDate ,
            'notes'=>$request->notes,
            'userEmail'=>Cookie::get('email'),
        ];

        $taskRef = $this->database->getReference($this->tablename)->getChild($id)->push($taskData);

        //return response()->json();
        return redirect()->route('task.index');

    }
}

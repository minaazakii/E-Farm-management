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
        $duration = Carbon::parse($task['startDate'])->diff(Carbon::parse($task['endDate']));
        $totalDays = $duration->days;
        $nowToEndDuration = Carbon::now()->diff(Carbon::parse($task['endDate']));
        $percentage =100 - Round(($nowToEndDuration->days/$totalDays)*100) ;
        return view('taskDetails',
        [
            'task' =>$task,
            'duration'=>$duration,
            'percentage'=>$percentage,
            'daysLeft' =>$nowToEndDuration,
            'layout'=>'task'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request,
        [
            'corp' =>'required',
            'startDate' => 'required|after_or_equal:today',
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

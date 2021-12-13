<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'User';
    }

    public function store(Request $request)
    {

        $this->validate($request,
        [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|confirmed'
        ]);

        $userData=
        [
            'name' => $request->name,
            'email' => $request->email,
            'password' =>$request->password,
        ];

        $userRef = $this->database->getReference($this->tablename)->push($userData);

        return response()->json();
    }

    public function login(Request $request)
    {
        $attributes = request()->validate([

            'email'=>'required',
            'password'=>'required'
        ]);

        $users=$this->database->getReference($this->tablename)->getSnapShot()->getvalue();
        $loggedUser =[];
        foreach($users as $user)
        {
           if($user['email'] == $request->email && $user['password'] == $request->password)
           {
               $loggedUser['email'] = $user['email'];
               $loggedUser['password'] = $user['password'];
           }

        }

        if(!empty($loggedUser))
        {
            return view('dashboard',
            [
                'user'=>$loggedUser
            ]);
        }
        return redirect()->route('index')->with('error','Wrong Email or Password');



       //throw  ValidationException::withMessages(['error'=>'Wrong E-mail or Password'] );
    }



}

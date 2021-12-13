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
        
        $users=$this->database->getReference($this->tablename)->getvalue();

        //ddd($request->all());


        $logedinuser=[];
        
        foreach($users as $user)
        {
            if($user['email'] ="marwa.mamm79@gmail.com" && $user['password'] == "12345" )
            {  
                 ddd('sucess');
                $logedinuser['email'] = $user['email'];
                $logedinuser['password'] = $user['password'];

                //return view('test',compact('logedinuser'));
               
            }else
            {   //ddd('failed');
                return view('test',compact('logedinuser'));
            }
        }

    

       //throw  ValidationException::withMessages(['error'=>'Wrong E-mail or Password'] );
    }
   


}

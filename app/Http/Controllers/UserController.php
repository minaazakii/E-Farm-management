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
            'email'=>'required|unique:App\Models\User,email',
            'password'=>'required|confirmed'
        ]);

        $userData=
        [
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
        ];

        $userRef = $this->database->getReference($this->tablename)->push($userData);

        return response()->json();
    }
    public function login(Request $request)
    {
        $attributes = request()->validate([

            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(auth()->attempt($attributes))
        {
           return view('dashboard');
        }

        throw  ValidationException::withMessages(['error'=>'Wrong E-mail or Password'] );
    }




}

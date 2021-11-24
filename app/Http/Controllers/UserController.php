<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'required',
            'email'=>'required|unique:App\Models\User,email',
            'password'=>'required|confirmed'
        ]);
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return response()->json();
    }
    public function login( Request $request )
    {
        $attributes=request()->validate([
        
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(auth()->attempt($attributes))
        {
           return view('/test'); 
        }
       
         throw  ValidationException::withMessages(['password'=>'Please Make Sure of your E-mail and Password '] );
      
    }

   

}

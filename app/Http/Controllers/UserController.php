<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\DashboardController;

class UserController extends Controller
{

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'User';

    }

    public function store(Request $request)
    {
        $auth = app('firebase.auth');
        $this->validate($request,
        [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|confirmed|min:6'
        ]);

        $userData=
        [
            'name' => $request->name,
            'email' => $request->email,
            'password' =>$request->password,

        ];

        // $userRef = $this->database->getReference($this->tablename)->push($userData);
        $createdUser = $auth->createUser($userData);
        return response()->json();
    }

    public function login(Request $request)
    {
        $dashboard = new DashboardController($this->database);
        $auth = app('firebase.auth');
        $this->validate($request,
        [
            'email'=>'required',
            'password'=>'required'
        ]);

        try
        {
            $userSigninResult = $auth->signInWithEmailAndPassword($request->email, $request->password);
            $user = $auth->getUser($userSigninResult->data()['localId']);
            return redirect()->route('dashboard.index')
            ->withCookie('id',$user->uid)
            ->withCookie('email',$user->email);


        }
        catch(Exception $e)
        {
            // dd($e);
            if($e)
            {
                return back()->with('error','Wrong Email or Password');
            }
        }


       //throw  ValidationException::withMessages(['error'=>'Wrong E-mail or Password'] );
    }

    public function Test(Request $request)
    {
        $auth = app('firebase.auth');

        // $userProperties = [
        //     'email' => $request->testemail,
        //     'password' => $request->testpassword,
        // ];
        // $createdUser = $auth->createUser($userProperties);

        try{
            $signInResult = $auth->signInWithEmailAndPassword('mina@mail.com', '123456');
        }
        catch(Exception $e)
        {
            if($e)
            {
                dd('no no');
            }
        }



    }


}

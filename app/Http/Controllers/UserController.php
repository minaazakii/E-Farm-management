<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\DashboardController;
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
        $auth = app('firebase.auth');
        $this->validate($request,
        [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|confirmed|min:6'
        ]);

        $userData=
        [
            'email' => $request->email,
            'password' =>$request->password,

        ];

        $authUserData =
        [
            'email'=>$request->email,
            'name'=>$request->name
        ];

        $authCreatedUser = $auth->createUser($userData);
        $userRef = $this->database->getReference($this->tablename)->getChild($authCreatedUser->uid)->set($authUserData);
        return response()->json();
    }

    public function login(Request $request)
    {
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
            $name = $this->database->getReference($this->tablename)->getChild($user->uid)->getValue()['name'];
            return redirect()->route('dashboard.index')
            ->withCookie('id',$user->uid)
            ->withCookie('name',$name)
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

    public function googleLogin(Request $request)
    {
        $auth = app('firebase.auth');
        $userData=
        [
            'email' => $request->email,
            'name' =>$request->name,

        ];
        $userRef = $this->database->getReference($this->tablename)->getChild($request->id)->set($userData);
         return response()->json()
            ->withCookie('id',$request->id)
            ->withCookie('email',$request->email)
            ->withCookie('name',$request->name);
    }

    public function logout()
    {
        Cookie::forget('id');
        Cookie::forget('email');
        Cookie::forget('name');
        return redirect()->route('login.index');

    }

    public function Test(Request $request)
    {
        $data =
        [
            'name' =>'hi',
            'geo_json'=>[
                'type'=>'Feature',
                'properties'=>[
                    'name'=>'hi'

                ],
                'geometry'=>[
                    'type'=>'Polygon',
                    'coordinates'=>
                    [
                        [
                            [-121.1958,37.6683],
                            [-121.1779,37.6687],
                            [-121.1773,37.6792],
                            [-121.1958,37.6792],
                            [-121.1958,37.6683]
                        ]
                    ]
                ]
            ]
        ];
        // return json_encode($data);
        $client = new Client(['base_uri' => 'http://api.agromonitoring.com/agro/1.0/polygons?appid=4ff9914288c431e66d4954be31a9c21d']);
        $response = $client->request('POST','',
        [
            'json'=>
            [
                'name' =>'hi2',
                'geo_json'=>[
                    'type'=>'Feature',
                    'properties'=>[
                        'name'=>'hi'
                    ],
                    'geometry'=>[
                        'type'=>'Polygon',
                        'coordinates'=>
                        [
                            [
                                [-121.1958,37.6681],
                                [-121.1779,37.6687],
                                [-121.1773,37.6792],
                                [-121.1958,37.6792],
                                [-121.1958,37.6681]
                            ]
                        ]
                    ]
                ]
            ]

        ]);
        $test = json_decode($response->getBody());
       return $test->id;
    }


}

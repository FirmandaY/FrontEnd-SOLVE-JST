<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        // $auth = app('App\Http\Controllers\Auth\LoginController')->loginAPI($data);

        $client = new Client();
        $url = "http://solve.technow.id/api/collager/login";
        $response = $client->post($url,[
            'json' => [
                'email' => $user['email'],
                // 'password' => $user['password'],
                'password' => Crypt::decryptString($user['pass_for_api']),
            ]
        ]);
        $json = $response->getBody();
        $user_data_log = json_decode($json, true);


        // return view('home');

        // echo $user['password'];
        //echo $user_data_log['password'];

        // echo $response->getBody();
        // return dd($response, compact('response'));

        return view('home', compact('user','user_data_log'));
    }
}

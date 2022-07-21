<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginAPI(array $data){
        //Mengirim data Login ke API SOLVE http://solve.technow.id/api/collager/login

        $client = new Client();
        $url = "http://solve.technow.id/api/collager/login";
        $response = $client->post($url,[
            'json' => [
                'email' => $data['email'],
                'password' => $data['password'],
            ]
        ]);
        $json = $response->getBody();
        $user_data_log = json_decode($json, true);
        // return view('home');

        echo $response->getBody();
        return dd($response, compact('response'));
    }
    
}

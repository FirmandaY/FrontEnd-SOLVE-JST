<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Crypt;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'school_id' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    protected function create(array $data)
    {

        //Mengirim data ke API SOLVE http://solve.technow.id/api/collager/register

        //dump(request()->all());
        //$request_data = $this->mapData();

        $client = new Client();
        $url = "http://solve.technow.id/api/collager/register";
        $response = $client->post($url,[
            'headers' => [
                'Content-type' => 'application/json',
                'Accept' => 'application/json'
            ],
            'json' => [
                'email' => $data['email'],
                'username' => $data['username'],
                'password' => $data['password'],
                'name' => $data['name'],
                'school_id' => $data['school_id'],
                'phone_number' => $data['phone_number'],
            ],
        ]);

        // return view('authAPI.login');
        echo $response->getBody();

        // MENYIMPAN DATA USER KE DATABASE LOKAL
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'school_id' => $data['school_id'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'pass_for_api' => Crypt::encryptString($data['password']),

        ]);
    }
}

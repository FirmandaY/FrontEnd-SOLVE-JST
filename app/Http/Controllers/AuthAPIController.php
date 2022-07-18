<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class AuthAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    // ----------------- CONTROLLER UNTUK POST DATA REGISTER USER DARI LARAVEL KE API SOLVE -----------------
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAccount()
    {
        return view('authAPI.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRegister(Request $request)
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
                'email' => $request->email,
                'username' => $request->username,
                'password' => $request->password,
                'name' => $request->name,
                'school_id' => $request->school_id,
                'phone_number' => $request->phone_number
            ],
        ]);

        // return view('authAPI.login');
        echo $response->getBody();


        // $response = Http::withHeaders([
        //     'Content-Type' => 'application/json',
        //     'Accept' => 'application/json'
        // ])->post('http://solve.technow.id/api/collager/register', [
        //     'email' => '$request->email',
        //     'username' => '$request->username',
        //     'password' => '$request->password',
        //     'name' => '$request->name',
        //     'school_id' => '$request->school_id',
        //     'phone_number' => '$request->phone_number'
        // ]);

        // return dd($response);
    }


    // ----------------- CONTROLLER UNTUK POST DATA LOGIN USER DARI LARAVEL KE API SOLVE -----------------
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginAccount()
    {
        return view('authAPI.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeLogin(Request $request)
    {
        //Mengirim data Login ke API SOLVE http://solve.technow.id/api/collager/login

        $client = new Client();
        $url = "http://solve.technow.id/api/collager/login";
        $response = $client->post($url,[
            'json' => [
                'email' => $request->email,
                'password' => $request->password,
            ]
        ]);
        // return view('home');

        echo $response->getBody();
        return dd($response);

    }

    public function forgotPassword(){
        return view('authAPI.resetPassword.email');
    }

    public function storeForgotenPassword(Request $request){

        //Mengirim data Forgot Password ke API SOLVE http://solve.technow.id/api/collager/forgot-password

        $client = new Client();
        $url = "http://solve.technow.id/api/collager/forgot-password";
        $response = $client->post($url,[
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'Accept' => 'application/json'
            ],
            'json' => [
                'email' => $request->email
            ]
        ]);
        // return view('authAPI.resetPassword.verify');
        echo $response->getBody();
        return dd($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

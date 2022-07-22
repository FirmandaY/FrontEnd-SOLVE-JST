<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

// UNTUK MEMANGGIL FUNGSI PADA (GetTokenAPIServiceProvider.php)
use App\Helpers\GetTokenAPI\UserToken;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexProfile()
    {
        //Mengirim data ke API SOLVE http://solve.technow.id/api/collager/register
        //Untuk meminta data user.

        // $auth = app('App\Http\Controllers\HomeController')->universalAcc();
        $keyToken = UserToken::universalAcc();

        $client = new Client();
        $url = "http://solve.technow.id/api/collager/detail";
        $response = $client->get($url,[
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer '.$keyToken,
                'Content-type' => 'application/x-www-form-urlencoded',
            ]
        ]);
        $json = $response->getBody();
        $user_data_log = json_decode($json, true); //untuk mendecode data json

        // echo $response->getBody();
        // return dd($response, compact('response'));

        return view('profile.profileIndex', compact('user_data_log'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

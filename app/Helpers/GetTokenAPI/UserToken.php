<?php

namespace App\Helpers\GetTokenAPI;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
 
class UserToken {
    /**
     * @param int $user_id User-id
     * 
     * @return string
     */
    // public static function get_username($user_id) {
    //     $user = DB::table('users')->where('userid', $user_id)->first();
         
    //     return (isset($user->username) ? $user->username : '');
    // }

    public static function universalAcc()
    {
        $user = Auth::user();
    
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

        return (isset($user_data_log['user']['token']) ? $user_data_log['user']['token'] : 'None');
        // return view('home');

        // echo $user['password'];
        //echo $user_data_log['password'];

        // echo $response->getBody();
        // return dd($response, compact('response'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use lib\Pusher;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        // Change the following with your app details:
        // Create your own pusher account @ https://app.pusher.com
        $app_id = '309483'; // App ID
        $app_key = '1699db0a3a3aec4d93c6'; // App Key
        $app_secret = '17a8b609741fa2891df9'; // App Secret
        $pusher = new Pusher($app_key, $app_secret, $app_id);

        dd($pusher);
        return view('usuarios.home');
    }

}

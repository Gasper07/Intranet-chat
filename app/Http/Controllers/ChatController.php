<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as facedesrequest;
use Illuminate\Support\Facades\Redirect;

class ChatController extends Controller
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

    
    public function index(Request $request)
    {
        $data = facedesrequest::all();
        // dd($data);
        // Change the following with your app details:
        // Create your own pusher account @ https://app.pusher.com
        require('http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/lib/Pusher.php');
        $app_id = '309483'; // App ID
        $app_key = '1699db0a3a3aec4d93c6'; // App Key
        $app_secret = '17a8b609741fa2891df9'; // App Secret
        $pusher = new Pusher($app_key, $app_secret, $app_id);

        dd($pusher);
        return view('usuarios.home');
    }

}

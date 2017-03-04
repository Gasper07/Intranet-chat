<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ChatController extends Controller
{
    var $pusher;
    var $chatChannel;
 
    public function __construct()
    {
        $this->pusher       =   App::make('pusher');
        $this->chatChannel  =   'chat';
    }
    
    /**
     * Mostrar la vista de chats
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chatChannel = $this->chatChannel;
 
        return view('chat.index', compact('chatChannel'));
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
     * Generar el nuevo mensaje
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'message'   => e($request->message),
            'username'  => 'normeno',
            'avatar'    => 'http://lorempixel.com/100/100/',
            'timestamp' => date('Y-m-d H:i:s')
        ];


 
        try {
            $this->pusher->trigger($this->chatChannel, 'new-message', $message);
            return response()->json(['status' => '1']);
            print_r('esatus one');
        } catch (\Exception $e) {
            return response()->json(['status' => '0']);
            print_r('esatus cero');
        }
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

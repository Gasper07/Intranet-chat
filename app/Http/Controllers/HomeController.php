<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Chats;

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
     * @return \Illuminate\Http\Response
     */

    public function AllUsers(){
        $Users = User::all();
        return $Users;
    }
    
    public function index()
    {
        return view('usuarios.home');
    }

    public function profile()
    {
        return view('usuarios.profile');
    }

    public function profileOfUser()
    {
        return view('usuarios.profile-of-user');
    }

    public function RankingEmpleados()
    {
        return view('usuarios.ranking-empleados');
    }

    public function ChatEmpleados()
    {
        // $ChatWithUsers = User::all();
        $getUsers = $this->AllUsers();

        return view('usuarios.chatUsers', compact('getUsers'));
    }

    public function storeChat(Request $request){
        if($request->ajax()) {
            $arrayCOnversation = array();
            $arrayFechas = array();
            $arrayMensages = array();
            $arrayMensagesFechas = array();
            $arrayVerifiFechas = array();

            $id_ForChat = $request->idForChat;
            $idUserLogin = Auth::user()->id;

            $queryConversationUser = User::findOrFail($id_ForChat);
            // $ConversationBetwwenUser = Chats::where('id_user','=',$idUserLogin)->where('id_user_conversation','=',$id_ForChat);

            $ConversationBetwwenUser = Chats::where('id_user','=',$idUserLogin)->get();

            foreach ($ConversationBetwwenUser as $keyConversationBetwwenUser) {
                if($keyConversationBetwwenUser->id_user_conversation == $id_ForChat){
                    $date = new \Carbon\Carbon($keyConversationBetwwenUser->created_at);                    
                    $Fechas = $date->format('d-m-Y');
                    
                    if($bande == 0){
                        print_r('proband');
                        $getMensages = $keyConversationBetwwenUser->conversations;
                        array_push($arrayMensages,$getMensages);
                        $newFechaConversation = array('fecha_conver' => $Fechas,'mensages' => $arrayMensages);
                        array_push($arrayMensagesFechas,$newFechaConversation);
                        $bande = $bande+1;
                    }elseif($bande == 1) {
                        // array_pop($arrayMensagesFechas)
                        foreach ($arrayMensagesFechas as $keyarrayMensagesFechas) {
                            array_push($arrayVerifiFechas,$keyarrayMensagesFechas);
                            
                        };   
                        print_r($arrayVerifiFechas);

                        // $bande = $bande+1;                   
                       
                    }
                    // elseif($bande == 2) {     
                    //     $getMensages = $keyConversationBetwwenUser->conversations;
                    //     array_push($arrayMensages,$getMensages);
                    //     $newFechaConversation = array('fecha_conver' => $Fechas,'mensages' => $arrayMensages);
                    //     array_push($arrayMensagesFechas,$newFechaConversation);
                    // }          
                    
                    // $cosntructCoversation = array($keyConversationBetwwenUser->conversations);
                }
                // array_push($arrayCOnversation, $cosntructCoversation);
            }

            dd($arrayMensagesFechas);

            print_r($arrayCOnversation);


            // echo json_encode($queryConversationUser);
            echo json_encode($arrayCOnversation);
            // echo json_encode(array('result1'=>$queryConversationUser,'result2'=>$ConversationBetwwenUser));  
            // $arraysCOnversations = array('data_user' => $queryConversationUser,'data_user_Between_user' => $ConversationBetwwenUser );

            // echo json_encode($arraysCOnversations);     
        }
    }

    public function Calendar()
    {
        return view('usuarios.calendario');
    }

    public function SolicitudPermiso()
    {
        return view('usuarios.solicitud-permiso');
    }

    public function SolicitudPermisoEmergencia()
    {
        return view('usuarios.motivo-emergencia');
    }

    public function BuzonSugerencias()
    {
        return view('usuarios.buzon-sugerencias');
    }

    public function EvaluationToPersonal()
    {
        return view('usuarios.evaluaciones-a-personal');
    }

    public function EvaluationToPersonalDetall($id)
    {
        return view('usuarios.evaluaciones-a-personal-detall');
    }

    public function EvaluationToPersonalEvaluados()
    {
        return view('usuarios.evaluaciones-a-personal-evaluados');
    }

    public function FinishEvaluation()
    {
        return view('usuarios.finish-evaluaction');
    }
}

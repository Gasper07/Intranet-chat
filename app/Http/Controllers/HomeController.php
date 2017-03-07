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
            $arrayGetDates = array();
            $arrayVerifiFechas = array();
            $newGruopMensages = array();
            $bande = 0;

            $id_ForChat = $request->idForChat;
            $idUserLogin = Auth::user()->id;

            $queryConversationUser = User::findOrFail($id_ForChat);
            // $ConversationBetwwenUser = Chats::where('id_user','=',$idUserLogin)->where('id_user_conversation','=',$id_ForChat);

            $ConversationBetwwenUser = Chats::where('id_user','=',$idUserLogin)->orWhere('id_user_conversation', $idUserLogin)->get();

            foreach ($ConversationBetwwenUser as $keyConversationBetwwenUser) {
                if($keyConversationBetwwenUser->id_user_conversation == $id_ForChat or $keyConversationBetwwenUser->id_user_conversation == $idUserLogin){
                    /*Convertimos fechas*/
                    $date = new \Carbon\Carbon($keyConversationBetwwenUser->created_at);                    
                    $Fechas = $date->format('d-m-Y');
                    /*Creamos primer array para iniciar*/
                    if($bande == 0){
                        /*Guardamos el mensaje en el array*/
                        $getMensages = $keyConversationBetwwenUser->conversations;
                        array_push($arrayMensages,$getMensages);
                        /*Guardamos la fechas en el array*/
                        $getDates = $Fechas;
                        array_push($arrayGetDates,$getDates);
                        /*Creamos nuestro bloque de fecha y mensajes enviados*/
                        $newFechaConversation = array('fecha_conver' => $Fechas,'mensages' => $arrayMensages);
                        array_push($arrayMensagesFechas,$newFechaConversation);
                        $bande = $bande+1;
                    }elseif($bande == 1) {     
                        /*** 
                        Busca dentro del array de fechas, si dentro del array de fechas, la fecha que viene esta 
                        repetida entonces, entonces vas a agrupar le mensaje dentro del bloque de fecha existente
                        ***/
                        if(in_array($Fechas, $arrayGetDates)){     
                            foreach ($arrayMensagesFechas as $keyarrayMensagesFechas => $value) {
                                /* Si del array de mensajes y fechas la fecha es igual, entonces  descomponeme el array*/
                               if($value['fecha_conver'] == $Fechas){
                                  $newGruopMensages = array();
                                  $positionOfArray =$keyarrayMensagesFechas;
                                  $mensagesAnterior = $value['mensages'];
                                  foreach ($mensagesAnterior as $keymensagesAnterior) {
                                      array_push($newGruopMensages,$keymensagesAnterior);
                                  }
                                  $getMensages = $keyConversationBetwwenUser->conversations;
                                  array_push($newGruopMensages,$getMensages);
                                  unset($arrayMensagesFechas[$positionOfArray]);
                                  $newFechaConversation = array('fecha_conver' => $Fechas,'mensages' => $newGruopMensages);
                                  array_push($arrayMensagesFechas,$newFechaConversation);

                               }
                            }
                        }else{
                            $arrayMensages = array();
                            $getMensages = $keyConversationBetwwenUser->conversations;
                            array_push($arrayMensages,$getMensages);
                            $getDates = $Fechas;
                            array_push($arrayGetDates,$getDates);
                            $newFechaConversation = array('fecha_conver' => $Fechas,'mensages' => $arrayMensages);
                            array_push($arrayMensagesFechas,$newFechaConversation);
                        }                                 
                    }
                }
            }
            echo json_encode($arrayMensagesFechas);
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

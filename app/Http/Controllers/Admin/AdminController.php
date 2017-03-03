<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
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

    public function Home()
    {
        return view('admin.home');
    }
    
    public function Board()
    {
        return view('admin.board');
    }

    public function ChatAdmin()
    {
        return view('admin.chatAdmin');
    }

    public function Sugerencias()
    {
        return view('admin.sugerencias');
    }

    public function Emergencias()
    {
        return view('admin.emergencias');
    }

    public function SolicitudPermisos()
    {
        return view('admin.solicitud-permisos');
    }

    public function Calendar()
    {
        return view('admin.calendario');
    }

    public function Documentos()
    {
        return view('admin.documentos');
    }

    public function Ranking()
    {
        return view('admin.ranking');
    }

    public function UsersAll()
    {
        return view('admin.usuarios');
    }

    public function HistoryUsers()
    {
        return view('admin.historial-usuarios');
    }

    public function HistoryEntradaSalidaUsers($id)
    {
        return view('admin.historial-entrada-salida');
    }

    public function HistoryEntradaSalidaUsersAlls()
    {
        return view('admin.historial-entrada-salida-all');
    }

    public function EditUser($id)
    {
        return view('admin.Edit-usuarios');
    }

    public function EditUserGrupos()
    {
        return view('admin.Edit-usuarios-grupos');
    }

    public function MonthlyEvaluations()
    {
        return view('admin.evaluciones-mensuales');
    }

    public function MonthlyEvaluationsDetall($id)
    {
        return view('admin.evaluciones-mensuales-detall');
    }

    public function Demo()
    {
        $db_ext = \DB::connection('mysql2');
        $countries = $db_ext->table('appac_lista_empleados')->get();
        dd($countries);
        return view('demoDB');
    }
}

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


/*
|--------------------------------------------------------------------------
| lllamar routas de login y registro
|--------------------------------------------------------------------------
|
*/
	Route::get('/', function () {
	    return view('auth.login');
	});
	Auth::routes();

	// Route::get('/chat', function () {
	//     return view('chat');
	// });

	// Route::get('/chatdemo', 'ChatController@index');

/*
|--------------------------------------------------------------------------
| Home Users
|--------------------------------------------------------------------------
|
*/
	Route::get('/home', 'HomeController@index');

/*
|--------------------------------------------------------------------------
| Profile Users
|--------------------------------------------------------------------------
|
*/
	Route::get('/profile', 'HomeController@profile');
/*
|--------------------------------------------------------------------------
| Profile Del usuario
|--------------------------------------------------------------------------
|
*/
	Route::get('/profile-users', 'HomeController@profileOfUser');

/*
|--------------------------------------------------------------------------
| Ranking de Empleados
|--------------------------------------------------------------------------
|
*/
	Route::get('/ranking-empleados', 'HomeController@RankingEmpleados');


/*
|--------------------------------------------------------------------------
| Chat entre Empleados
|--------------------------------------------------------------------------
|
*/
	Route::get('/chatUsers', 'HomeController@ChatEmpleados');
	Route::post('/chatUsers', 'HomeController@storeChat');


/*
|--------------------------------------------------------------------------
| Calendario
|--------------------------------------------------------------------------
|
*/
	Route::get('/calendario', 'HomeController@Calendar');


/*
|--------------------------------------------------------------------------
| Solicitud de permiso
|--------------------------------------------------------------------------
|
*/
	Route::get('/solicitud-permiso', 'HomeController@SolicitudPermiso');

/*
|--------------------------------------------------------------------------
| Permiso Emergencia
|--------------------------------------------------------------------------
|
*/
	Route::get('/emergencia', 'HomeController@SolicitudPermisoEmergencia');

/*
|--------------------------------------------------------------------------
| Permiso Emergencia
|--------------------------------------------------------------------------
|
*/
	Route::get('/buzon-sugerencias', 'HomeController@BuzonSugerencias');

/*
|--------------------------------------------------------------------------
| Evaluacion a personal
|--------------------------------------------------------------------------
|
*/
	Route::get('/evaluacion-a-personal', 'HomeController@EvaluationToPersonal');

/*
|--------------------------------------------------------------------------
| Evaluacion a personal detall 
|--------------------------------------------------------------------------
|
*/
	Route::get('/evaluacion-a-personal/{id}', 'HomeController@EvaluationToPersonalDetall');

/*
|--------------------------------------------------------------------------
| Fin Evaluacion
|--------------------------------------------------------------------------
|
*/
	Route::get('/finish-evaluation', 'HomeController@FinishEvaluation');


/*
|--------------------------------------------------------------------------
| Evaluacion a personal evaluados 
|--------------------------------------------------------------------------
|
*/
	Route::get('/evaluacion-a-personal-evaluados', 'HomeController@EvaluationToPersonalEvaluados');



/*
|--------------------------------------------------------------------------
| ADMMINISTRADOR GENERAL
|--------------------------------------------------------------------------
| Si el usuario no es Admin no puede accesder a las siguiente rutas
| 
*/


	Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
	{
	    Route::get('/produ', function()
	    {
	        return view('welcome');
	    });

	    Route::get('/admin/home', 'Admin\AdminController@Home');
	    Route::get('/admin/board', 'Admin\AdminController@Board');
	    Route::get('/admin/chat', 'Admin\AdminController@ChatAdmin');
	    Route::get('/admin/sugerencias', 'Admin\AdminController@Sugerencias');
	    Route::get('/admin/emergencias', 'Admin\AdminController@Emergencias');
	    Route::get('/admin/solicitud-permisos', 'Admin\AdminController@SolicitudPermisos');
	    Route::get('/admin/calendario', 'Admin\AdminController@Calendar');
	    Route::get('/admin/documentos', 'Admin\AdminController@Documentos');
	    Route::get('/admin/ranking', 'Admin\AdminController@Ranking');
	    Route::get('/admin/usuarios', 'Admin\AdminController@UsersAll');
	    Route::get('/admin/history', 'Admin\AdminController@HistoryUsers');
	    Route::get('/admin/history/{id}', 'Admin\AdminController@HistoryEntradaSalidaUsers');
	    Route::get('/admin/historys/allUsers', 'Admin\AdminController@HistoryEntradaSalidaUsersAlls');
	    Route::get('/admin/usuarios/edit/{id}', 'Admin\AdminController@EditUser');
	    Route::get('/admin/usuarios/grupos/edit', 'Admin\AdminController@EditUserGrupos');
	    Route::get('/admin/evaluaciones-mensuales', 'Admin\AdminController@MonthlyEvaluations');
	    Route::get('/admin/evaluaciones-mensuales/{id}', 'Admin\AdminController@MonthlyEvaluationsDetall');


	    Route::get('/demoRecive', 'Admin\AdminController@Demo');


	});

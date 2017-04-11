<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Post;
use App\LikesPosts;
use App\ComentariosPost;
use App\PostPersonalizados;

class LikeAndComentController extends Controller
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

    public function StoreLikeUserPost(Request $request){
      if($request->ajax()) {
        $idUserLike = $request->idLikeUser;
        $idPostLike = $request->idLikePost;
        $idPostDisLike = $request->idDislikePost;

        $allLikes = LikesPosts::where('id_publicacion','=', $idPostLike)->get();

        if(count($allLikes)==0) { 
          $dataLikePost = array(
            'id_publicacion' => $idPostLike,
            'id_usuarios_likes' => $idUserLike,
            'total_likes' => '1',
          );
          $createNewLikePost = new LikesPosts($dataLikePost);
          $createNewLikePost->save();
          $totalLikes = $createNewLikePost->total_likes;
          echo json_encode($totalLikes);
         
        }else{ 

          if($idPostDisLike != ''){

            $UpdateLikePost = LikesPosts::where('id_publicacion', '=',$idPostLike)->get();

            foreach ($UpdateLikePost as $keyUpdateLikePost) {
              $updateLikes = $keyUpdateLikePost->total_likes -1;            
              $updateUsersLikes = $keyUpdateLikePost->id_usuarios_likes;   
              $DescomponerUserLikes = explode(",", $keyUpdateLikePost->id_usuarios_likes);
              $contador;
              $posicion = -1;
              // Busco la pociion del usuario que quito el like a la publicacion
              for( $contador=0; $contador < count($DescomponerUserLikes); $contador++ )
              {
                 if( $DescomponerUserLikes[$contador] == $idPostDisLike ) {
                     $posicion = $contador;
                     break;
                }
              }
              // Eliminando pocion encontrada
              unset($DescomponerUserLikes[$posicion]);
              $gurdadndoLikeSeparadoPorCOma = implode(",", $DescomponerUserLikes);

              $UpdateLikePost = \DB::table('likes_posts')
                ->where('id_publicacion', '=', $idPostLike)
                ->update(['id_usuarios_likes' => $gurdadndoLikeSeparadoPorCOma, 'total_likes' => $updateLikes]);

              $totalLikes = $keyUpdateLikePost->total_likes-1;
              echo json_encode($totalLikes);
            }

          }else{            
            $UpdateLikePost = LikesPosts::where('id_publicacion', '=',$idPostLike)->get();

            foreach ($UpdateLikePost as $keyUpdateLikePost) {
              $updateLikes = $keyUpdateLikePost->total_likes +1;            
              $updateUsersLikes = $keyUpdateLikePost->id_usuarios_likes;   

              $UnionAllUsersLikes =   $updateUsersLikes.','.$idUserLike; 

              $UpdateLikePost = \DB::table('likes_posts')
                ->where('id_publicacion', '=', $idPostLike)
                ->update(['id_usuarios_likes' => $UnionAllUsersLikes, 'total_likes' => $updateLikes]);

              $totalLikes = $keyUpdateLikePost->total_likes+1;
              echo json_encode($totalLikes);
            }
          }

          
        }

      }
    }



    public function ComentariosPosts(Request $request){

      if($request->ajax()){
        $idComentarioUser = $request->idComentUser;
        $ComentarioUser = $request->ComentPost;
        $IdPost = $request->idDtasPost;
        $NewComents = array();

        $dataComentPost = array(
          'comentarios' => $ComentarioUser,
          'id_usuario' => $idComentarioUser,
          'id_publicacion' => $IdPost,
        );

        $createNewComentPost = new ComentariosPost($dataComentPost);
        $createNewComentPost->save();
        $UserPotComent = $createNewComentPost->comentarios;

        $JoinTableUserPostsComents =  \DB::table('users')
        ->join('datos_personales', 'users.id', '=', 'datos_personales.id_usuario')
        ->select('users.name','datos_personales.foto','datos_personales.id_usuario')
        ->where('users.id', '=',$idComentarioUser)
        ->get();

        foreach ($JoinTableUserPostsComents as $keyJoinTableUserPostsComents) {
          $NewComents = array('name' => $keyJoinTableUserPostsComents->name,'foto' => $keyJoinTableUserPostsComents->foto,'id_usuario' => $keyJoinTableUserPostsComents->id_usuario,'comentario' => $UserPotComent);
        }
    
        echo json_encode($NewComents);

      }


    }


    public function PostPersonalizadoUser(Request $request){
      if($request->ajax()){

        $idUserPostPersonalizado = $request->idPostPersonalizadoUser;
        $idUPostPersonalizado = $request->idDataPostpersona;

        $dataPostPersonalizado = array(
          'id_posts' => $idUPostPersonalizado,
          'id_usuario' => $idUserPostPersonalizado,
        );

        $createNewPostPersonalizado = new PostPersonalizados($dataPostPersonalizado);
        $createNewPostPersonalizado->save();

        echo json_encode('Creado');

      }
    }


}

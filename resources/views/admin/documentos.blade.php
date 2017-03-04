@extends('layouts.Template-admin')

@section('content')
<div class="container continerWithSite">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionAdminContain">
    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
      
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 sectionCenterContenido secCetTitleS">
      <h1>Documentos</h1>
      <h3>Meybelline</h3>
      <h4>gerente.funanciero@grupovaldez.com</h4>

      <form action="home_submit" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formSearch" method="get" accept-charset="utf-8">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <i class="fa fa-search" aria-hidden="true"></i>
          <input type="text" placeholder="Buscar">
        </div>
      </form>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
      <ul class="nav navbar-nav navbar-right navulRIght">
          <!-- Authentication Links -->
          @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
          @else
            <li>
               <a href="{{ url('/logout') }}"
                 onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                 Salir
               </a>
               <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                   {{ csrf_field() }}
               </form>
             </li>
          @endif
      </ul>
    </div>
  </div>
</div>

{{-- SECTION MENU INTERNO HOME --}}
<section class="container-fluid">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionMenuInterno">
    <ul class="listActionDocuemntps">
        <li class="active"><a href="">Crear carpeta</a></li>
        <li><a href="">Subir</a></li>
        <li><a href="">Descargar</a></li>
        <li class="dreopDocument">
          <div class="dropdown dwropOptionMensgae">
            <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dLabel">
              <li>
                <a href="#!">Eliminar</a>        
              </li>
              <li>
                <form action="home_submit" method="get" accept-charset="utf-8" class="removeMensage">
                  <input type="submit" value="Mover a">
                </form>         
              </li>
            </ul>          
          </div>
        </li>
    </ul>
  </div>
</section>


{{-- SECTION BLOQUE NOTIFICACION Y MENSAJES --}}
<section class="container-fluid sectionAdminNotifiMensa">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
      
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 sectionCenterContenido">

     {{-- notificaciones --}}
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bloquesAdjuntoArchives">
      
        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">          
          <form action="home_submit" method="get" accept-charset="utf-8" class="removeMensage">
            <i class="fa fa-times" aria-hidden="true"></i>
          </form>
          <img class="img-responsive" id="contenedor" ondrop="drop(this, event)" ondragenter="return false" ondragover="return false" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/icons/carpetaVacia.png" alt="">
          <p>Carpeta vacía</p>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
          <form action="home_submit" method="get" accept-charset="utf-8" class="removeMensage">
            <i class="fa fa-times" aria-hidden="true"></i>
          </form>
          <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/icons/carpetaLLena.png" alt="">
          <p>Carpeta llena</p>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2" id="parrafo" draggable="true" ondragstart="drag(this, event)">
          <form action="home_submit" method="get" accept-charset="utf-8" class="removeMensage">
            <i class="fa fa-times" aria-hidden="true"></i>
          </form>
          <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/icons/dcumento.png" alt="">
          <p>Politicas</p>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
          <form action="home_submit" method="get" accept-charset="utf-8" class="removeMensage">
            <i class="fa fa-times" aria-hidden="true"></i>
          </form>
          <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/icons/dcumento.png" alt="">
          <p>Politicas</p>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
          <form action="home_submit" method="get" accept-charset="utf-8" class="removeMensage">
            <i class="fa fa-times" aria-hidden="true"></i>
          </form>
          <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/icons/addFile.png" alt="">
          <p>Politicas</p>
        </div>
      </div>

      {{-- end section notificaciones --}}
      

    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">

    </div>
    <div class="col-md-12 datPublich publishChatAdmin publichDocuemnts">
      <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/addpubliImgae.png" alt="" data-toggle="modal" data-target="#myModal">
      <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/AnuncioPublicAdmin.png" alt="">
    </div>
  </div>
</section>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog contPusblishDialogo" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="col-xs-12 col-sm-12 col-md-12 continPublish">
          <form action="home_submit" method="get" class="sectionPublichUser" accept-charset="utf-8">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <textarea name="" placeholder="Escribe un comentario"></textarea>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 bloquesActions">
              <div class="col-md-6 actionpuBlish">
                <div class="col-md-2 Adjuntar">
                  <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/adjuntarIco.png" alt="">
                </div>
                <div class="col-md-2 AdjuntarFoto">
                  <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/adjuntarFoto.png" alt="">
                </div>
                <div class="col-md-2 DestacarPuslish">
                  <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/destacarIco.png" alt="">
                </div>
                <div class="col-md-2 AlertPublish">
                  <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/alertIco.png" alt="">
                </div>
              </div>
              <div class="col-md-6 ButtinPublish">
                <input type="submit" value="Enviar"></input>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
  
@endsection

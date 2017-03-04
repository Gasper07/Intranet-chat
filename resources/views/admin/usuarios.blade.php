@extends('layouts.Template-admin')

@section('content')
<div class="container continerWithSite">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionAdminContain">
    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
      
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 sectionCenterContenido secCetTitleS">
      <h1>50 Usuarios</h1>
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
        <li ><a href="">Home</a></li>
        <li><a href="">Board</a></li>
        <li class="active"><a href="">Usuarios</a></li>
        <li class="dreopDocument">
          <div class="dropdown dwropOptionMensgae">
            <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dLabel">
              <li class="selecEdit">
                <a href="#!">Seleccionar y editar</a>        
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
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 sectionCenterContenido centerContentAllUSer">

     {{-- Users --}}
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bloqueUsersAll">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 allDatasUserTitles">
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
            <p>Todos los contatos <span>(50)</span> </p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <p>Correo</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-1 col-lg-1">
            <p>Celular</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-1 col-lg-1">
            <p>Ext.</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
            <p>Ranking</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-1 col-lg-1">
            <p>ADP</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-1 col-lg-1">
            <p>Nota</p>
          </div>
        </div>

        {{-- DATAS OF USERS --}}

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 allDatasUser">
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 imgAndNameUser">
            <div class="dropdown DropOptinUsersD">
              <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dLabel">
                <li>
                  <a href="#!">Editar información</a>        
                </li>
                <li>
                  <a href="#!">Editar horario</a>        
                </li>
                <li>
                  <form action="home_submit" method="get" accept-charset="utf-8" class="removeUsers">
                    <input type="submit" value="Eliminar">
                  </form>         
                </li>
              </ul>          
            </div>
            <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
            <p class="fontMiriamProSemiBold">Lissette Rivas</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 EmailUser topDatasUser">
            <p>yanixia@valdezmobile.com</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-1 col-lg-1 CelUsers topDatasUser">
            <p>7877-8057</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-1 col-lg-1 ExtUsers topDatasUser">
            <p>3030</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 RankinUsers topDatasUser">
             <div class="ui star rating" data-rating="5"></div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-1 col-lg-1 AdpUsers topDatasUser">
            <p>2</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-1 col-lg-1 NotUses topDatasUser">
            <p>7.5</p>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 allDatasUser">
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 imgAndNameUser">
            <div class="dropdown DropOptinUsersD">
              <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dLabel">
                <li>
                  <a href="#!">Editar información</a>        
                </li>
                <li>
                  <a href="#!">Editar horario</a>        
                </li>
                <li>
                  <form action="home_submit" method="get" accept-charset="utf-8" class="removeUsers">
                    <input type="submit" value="Eliminar">
                  </form>         
                </li>
              </ul>          
            </div>
            <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/yaniImage.png" alt="">
            <p class="fontMiriamProSemiBold">Lissette Rivas</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 EmailUser topDatasUser">
            <p>yanixia@valdezmobile.com</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-1 col-lg-1 CelUsers topDatasUser">
            <p>7877-8057</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-1 col-lg-1 ExtUsers topDatasUser">
            <p>3030</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 RankinUsers topDatasUser">
             <div class="ui star rating" data-rating="5"></div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-1 col-lg-1 AdpUsers topDatasUser">
            <p>2</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-1 col-lg-1 NotUses topDatasUser">
            <p>7.5</p>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 allDatasUser">
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 imgAndNameUser">
            <div class="dropdown DropOptinUsersD">
              <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dLabel">
                <li>
                  <a href="#!">Editar información</a>        
                </li>
                <li>
                  <a href="#!">Editar horario</a>        
                </li>
                <li>
                  <form action="home_submit" method="get" accept-charset="utf-8" class="removeUsers">
                    <input type="submit" value="Eliminar">
                  </form>         
                </li>
              </ul>          
            </div>
            <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/userManImage.png" alt="">
            <p class="fontMiriamProSemiBold">Lissette Rivas</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 EmailUser topDatasUser">
            <p>yanixia@valdezmobile.com</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-1 col-lg-1 CelUsers topDatasUser">
            <p>7877-8057</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-1 col-lg-1 ExtUsers topDatasUser">
            <p>3030</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 RankinUsers topDatasUser">
             <div class="ui star rating" data-rating="5"></div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-1 col-lg-1 AdpUsers topDatasUser">
            <p>2</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-1 col-lg-1 NotUses topDatasUser">
            <p>7.5</p>
          </div>
        </div>

        {{-- END DATAS OF USERS --}}
        
      </div>

      {{-- end section Users --}}
      

    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 actionAllUsers">
      <a href="">
        <p>
          Nuevo usuario
        </p>
      </a>
      <a href="">
        <p>
          Editar
        </p>
      </a>
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

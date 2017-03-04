@extends('layouts.Template-admin')

@section('content')
<div class="container continerWithSite wirhSiteRankikng">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionAdminContain">
    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
      
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 sectionCenterContenido secCetTitleS">
      <h1>Historial de llegadas</h1>
      <h3>Meybelline</h3>
      <h4>gerente.funanciero@grupovaldez.com</h4>

      <form action="home_submit" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formSearch formSearchRanking" method="get" accept-charset="utf-8">
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



{{-- SECTION BLOQUE NOTIFICACION Y MENSAJES --}}
<section class="container-fluid sectionAdminNotifiMensa secNotifiRanking">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 sectionCenterContenido conteniRanking">

     {{-- rankings --}}
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bloquesRankins">
        {{-- Bloque Subtitles sections --}}
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bloqueactionsTitles">
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <h3>Todos los contatos (50)</h3>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <h3>Hora de entrada</h3>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <h3>Hora de salida</h3>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <h3>Ranking</h3>
          </div>
        </div>
        {{-- END Bloque Subtitles sections --}}

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bloqueUserRankings">
        
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 DataUserRankings DataUserRankingsHistory">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bloqueactionsRankingsSz">
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 UserImgData">
                <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                <p class="fontMiriamProSemiBold">Lissette Rivas</p>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 horaEntrada">
                <p class="llegadaTarde">8:50 a.m.</p>
                <p class="coloADP">Colocar ADP</p>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 CountADP horaSalida">
                <h3>6:00 p.m.</h3>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 starRankinHistiry">
                <div class="ui star rating" data-rating="5"></div>
                <div class="dropdown drowOptionHistriaul">
                  <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dLabel">
                    <li class="selecEdit">
                      <a href="#!">Ver historial</a>        
                      <a href="#!">Enviar mensaje</a>        
                    </li>
                  </ul>          
                </div>
              </div>
            </div>
          </div>
        
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 DataUserRankings DataUserRankingsHistory">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bloqueactionsRankingsSz">
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 UserImgData">
                <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                <p class="fontMiriamProSemiBold">Lissette Rivas</p>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 horaEntrada">
                <p>8:50 a.m.</p>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 CountADP horaSalida">
                <h3 class="horaSalidaAntes">6:00 p.m.</h3>
                <p class="coloADP">Colocar ADP</p>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 starRankinHistiry">
                <div class="ui star rating" data-rating="5"></div>
                <div class="dropdown drowOptionHistriaul">
                  <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dLabel">
                    <li class="selecEdit">
                      <a href="#!">Ver historial</a>        
                      <a href="#!">Enviar mensaje</a>        
                    </li>
                  </ul>          
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 DataUserRankings DataUserRankingsHistory">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bloqueactionsRankingsSz">
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 UserImgData">
                <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                <p class="fontMiriamProSemiBold">Lissette Rivas</p>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 horaEntrada">
                <p>8:50 a.m.</p>
                <p class="coloADP">Colocar ADP</p>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 CountADP horaSalida">
                <h3>6:00 p.m.</h3>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 starRankinHistiry">
                <div class="ui star rating" data-rating="5"></div>
                <div class="dropdown drowOptionHistriaul">
                  <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dLabel">
                    <li class="selecEdit">
                      <a href="#!">Ver historial</a>        
                      <a href="#!">Enviar mensaje</a>        
                    </li>
                  </ul>          
                </div>
              </div>
            </div>
          </div>



      </div>

      {{-- end section rankings --}}
      

    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 ">

    </div>
  </div>
</section>
  <div class="col-md-12 datPublich publishChatAdmin publishRanking">
    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/addpubliImgae.png" alt="" data-toggle="modal" data-target="#myModal">
    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/AnuncioPublicAdmin.png" alt="">
  </div>


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

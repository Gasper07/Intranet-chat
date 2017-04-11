@extends('layouts.Template-admin-edit-users')

@section('content')
<div class="container continerWithSite">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionAdminContain">
    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
      
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 sectionCenterContenido secCetTitleS">
      <h1>Evaluaciones mensuales</h1>

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


{{-- SECTION EVALUCIONES ALL FOR AREA --}}
<section class="container-fluid sectionAdminNotifiMensa">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
    @if(Session::has('Evaluacion'))
      <p class="alert alert-success">{{Session::get('Evaluacion')}}</p>
    @endif

    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 OtherUserEdit lateEdiEvalution">
      
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 sectionCenterContenido sectionCenEdituse sectionEvalutionUSer">
      {{-- ALL AREAS --}}
      @foreach($EncargadosOfAreas as $encargados)
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 forAreaEvalua">
          <h3>Área de {{ $encargados->area }}</h3>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 foreareaCandidatos">
            @foreach($UsersAlls as $users)
              @if($encargados->id_encargardo == $users->id_usuario)
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 lineDIvider">
                  <h3>Encargado de área</h3>
                  <a href="#!">
                    <div class="label dataPrubeIm dataProfileEvaluaciones" style="background-image: url('http://127.0.0.1/Sites/Intranet-chat/public/assets/profiles/{{ $users->foto }}')"></div>
                    {{-- <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt=""> --}}
                    <p class="fontMiriamProSemiBold">{{ $users->nombre }} {{ $users->apellidos }}</p>
                    @foreach ($RankingGeneral as $keyRankingGeneral => $valueRankingGeneral) 
                      @if($users->id_usuario == $valueRankingGeneral['id_user'])
                        @if($valueRankingGeneral['puntosRanking'] <= 15)
                          <div class="ui star rating" data-rating="1"></div>
                        @elseif ($valueRankingGeneral['puntosRanking'] > 15 && $valueRankingGeneral['puntosRanking'] <= 30) 
                          <div class="ui star rating" data-rating="2"></div>
                        @elseif ($valueRankingGeneral['puntosRanking'] > 30 && $valueRankingGeneral['puntosRanking'] <= 45) 
                          <div class="ui star rating" data-rating="3"></div>
                        @elseif ($valueRankingGeneral['puntosRanking'] > 45 && $valueRankingGeneral['puntosRanking'] < 75) 
                          <div class="ui star rating" data-rating="4"></div>
                        @elseif ($valueRankingGeneral['puntosRanking'] >= 75) 
                          <div class="ui star rating" data-rating="5"></div>
                        @endif
                      @endif
                    @endforeach
                  </a>            
                </div>
              @endif
            @endforeach
            

            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 UserOfArea">
              @foreach($JoinTableUserDatas as $users)
                @if($users->jefe_inmediato == $encargados->id_encargardo)
                  <p class="gasper"> {{ $validaIdUser = '' }} </p>
                  @foreach($HistorialEvaluaciones as $evaluaciones)
                    @if($evaluaciones->id_usuario == $users->id_usuario)                      
                      <p class="gasper">{{ $carbon = new \Carbon\Carbon() }}</p>
                      <p class="gasper">{{ $MesActual = $carbon->now()->format('m') }}</p>
                      @if($evaluaciones->proxima_evaluacion > $MesActual)
                        @if($evaluaciones->mes_evaluacion == $MesActual)
                          <p class="gasper"> {{ $validaIdUser = $users->id_usuario }} </p>
                          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 othersUsersEstadis UserYarealizo">
                            <a href="evaluaciones-mensuales/{{ $encargados->id_encargardo }}/{{ $users->id_usuario }}">
                              <div class="label dataPrubeIm dataProfileEvaluaciones" style="background-image: url('http://127.0.0.1/Sites/Intranet-chat/public/assets/profiles/{{ $users->foto }}')"></div>
                              <p class="fontMiriamProSemiBold">{{ $users->nombre }} {{ $users->apellidos }}</p>
                              <div class="ui star rating" data-rating="5"></div>
                            </a>              
                          </div>
                        @endif
                      @endif
                    @endif
                  @endforeach
                  @if($validaIdUser != $users->id_usuario)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 othersUsersEstadis">
                      <a href="evaluaciones-mensuales/{{ $encargados->id_encargardo }}/{{ $users->id_usuario }}">
                        <div class="label dataPrubeIm dataProfileEvaluaciones" style="background-image: url('http://127.0.0.1/Sites/Intranet-chat/public/assets/profiles/{{ $users->foto }}')"></div>
                        <p class="fontMiriamProSemiBold">{{ $users->nombre }} {{ $users->apellidos }}</p>
                        <div class="ui star rating" data-rating="5"></div>
                      </a>              
                    </div>
                  @endif                  
                @endif
              @endforeach
              
            </div>
          </div>
        </div>
      @endforeach

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

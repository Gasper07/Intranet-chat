@extends('layouts.Template-home')

@section('content')
<div class="container continerWithSite">
    <div class="row">
      @if(Session::has('Create_Event'))
        <p class="alert alert-success">{{Session::get('Create_Event')}}</p>
      @endif
      <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 captionPosteos">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            @foreach($DataArrayPostImpar as $dataArrPostImpar => $PostImpar)
              @if($PostImpar['id_tipo_publicacion'] == 1 or $PostImpar['id_tipo_publicacion'] == 2 && $PostImpar['imagen'] != '')
                @include('usuarios.partials.posts.fields-tipo-posnormal-impar')

                @elseif($PostImpar['id_tipo_publicacion'] == 1 or $PostImpar['id_tipo_publicacion'] == 2 && $PostImpar['documentos'] != '')
                  @include('usuarios.partials.posts.fields-tipo-posnormal-impar-with-document-impar')
                  
                  
                @elseif($PostImpar['id_tipo_publicacion'] == 1 or $PostImpar['id_tipo_publicacion'] == 2 && $PostImpar['imagen'] == '' && $PostImpar['documentos'] == '')
                 @include('usuarios.partials.posts.fields-tipo-posnormal-impar-with-document-imagen-impar')
                
              {{-- Si el post es tipo vacaciones --}}
              @elseif($PostImpar['id_tipo_publicacion'] == 4)
                @include('usuarios.partials.posts.fields-tipo-vacaciones-impar')
                
                {{-- Si el post es tipo EVENTO --}}
                @elseif($PostImpar['id_tipo_publicacion'] == 6)
                  @include('usuarios.partials.posts.fields-tipo-Eventos-IMPAR')

              @elseif($PostImpar['id_tipo_publicacion'] == 5)
                @include('usuarios.partials.posts.fields-tipo-cumple-impar')
                  
              @endif
            @endforeach
          </div>

          {{-- BLOQUE LATERAL --}}
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          
            @foreach($DataArrayPostPar as $dataArrPostPar => $PostPar)
              @if($PostPar['id_tipo_publicacion'] == 1 or $PostPar['id_tipo_publicacion'] == 2 && $PostPar['imagen'] != '')
                @include('usuarios.partials.posts.fields-tipo-posnormal-PAR')

                @elseif($PostPar['id_tipo_publicacion'] == 1 or $PostPar['id_tipo_publicacion'] == 2 && $PostPar['documentos'] != '')
                  @include('usuarios.partials.posts.fields-tipo-posnormal-par-with-document-PAR')

                @elseif($PostPar['id_tipo_publicacion'] == 1 or $PostPar['id_tipo_publicacion'] == 2 && $PostPar['imagen'] == '' && $PostPar['documentos'] == '')
                  @include('usuarios.partials.posts.fields-tipo-posnormal-par-with-document-imagen-PAR')
                  
              {{-- Si el post es tipo vacaciones --}}
              @elseif($PostPar['id_tipo_publicacion'] == 4)
                @include('usuarios.partials.posts.fields-tipo-vacaciones-PAR')
                
              {{-- Si el post es tipo EVENTO --}}
              @elseif($PostPar['id_tipo_publicacion'] == 6)
                @include('usuarios.partials.posts.fields-tipo-Eventos-PAR')

              @elseif($PostPar['id_tipo_publicacion'] == 5)
                @include('usuarios.partials.posts.fields-tipo-cumple-PAR')
              @endif
            @endforeach
        </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 captionRecordNotas">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 bloqueRecordatorios">
          <h1 class="fontMiriamProRegular">Recordatorios</h1> 
          <div class="captionAvisos">
            <h1 class="fontMiriamProSemiBold">Avisos</h1>
            <p class="fontMiriamProRegular">Oportunidad de empleo para asesores. Interesados contactarse con Lic. Marta Hercúles</p>
          </div>
          <div class="captionPromos">
            <p class="fontMiriamProSemiBold">Promociones de hoy</p>
            <img class="img-responsive" src="http://127.0.0.1/Sites/Intranet-chat/public/assets/images/promo-public.jpg">
            <img class="img-responsive" src="http://127.0.0.1/Sites/Intranet-chat/public/assets/images/promo-public.jpg">
          </div>

          <div class="captionPostGuardadosText">
            <p class="fontMiriamProRegular">Post personalizados</p>
          </div>
          <div class="captionPostGuardados">
            @include('usuarios.partials.Field-post-personalizados')
          </div>
        </div>

        {{-- BLOQUE CALENDAR --}}
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

          {{-- SECTION CALENDAR AND ADD EVENT CALENDAR --}}
          @include('usuarios.partials.fields-lateral-calendar')

          {{-- SECTION RANKING USERS --}}

          <div class="captionRankingUser">
            <h3 class="fontMiriamProSemiBold">Ranking de empleados</h3>
            <div id="carousel-example-genericRan" class="carousel slide" data-ride="carousel" data-interval="false">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-genericRan" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-genericRan" data-slide-to="1"></li>
                <li data-target="#carousel-example-genericRan" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <p class="gasper">{{ $RabkingUser = 0 }}</p>
                
                <div class="item active">
                  @foreach($JoinTableUserDatosPersonalesDatosEmpleado as $DatosPersonalesDatosEmpleado)
                    <p class="gasper">{{ $RabkingUser = $RabkingUser + 1 }}</p>
                    @if($RabkingUser <= '4')
                      <div class="col-md-6">
                        <a href="">
                          <img class="img-responsive" src="http://127.0.0.1/Sites/Intranet-chat/public/assets/images/profile-user-circle.png" alt="">
                          <p class="fontMiriamProSemiBold">{{ $DatosPersonalesDatosEmpleado->nombre }} {{ $DatosPersonalesDatosEmpleado->apellidos }}</p>
                          @foreach ($RankingGeneral as $keyRankingGeneral => $valueRankingGeneral) 
                            @if($DatosPersonalesDatosEmpleado->id_usuario == $valueRankingGeneral['id_user'])
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
                       @if($RabkingUser == '4')
                       </div> 
                       @endif
                       @endif
                       @if($RabkingUser == '5')
                         <div class="item ">
                       @endif
                       
                       @if($RabkingUser >= '5' && $RabkingUser < '8')
                        <div class="col-md-6">
                          <a href="">
                            <img class="img-responsive" src="http://127.0.0.1/Sites/Intranet-chat/public/assets/images/profile-user-circle.png" alt="">
                            <p class="fontMiriamProSemiBold">{{ $DatosPersonalesDatosEmpleado->nombre }} {{ $DatosPersonalesDatosEmpleado->apellidos }}</p>
                            @foreach ($RankingGeneral as $keyRankingGeneral => $valueRankingGeneral) 
                              @if($DatosPersonalesDatosEmpleado->id_usuario == $valueRankingGeneral['id_user'])
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
                      @if($RabkingUser == '8')
                      </div>
                      <p class="gasper">{{ $RabkingUser = 4 }}</p>
                      @endif
                  @endforeach     
              </div>

              <!-- Controls -->
              <a class="left carousel-control carouselRank" href="#carousel-example-genericRan" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control carouselRank" href="#carousel-example-genericRan" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            
            
            <div class="col-md-12 capInteRankingSube">
              <a href="ranking-empleados">
               <h2 class="fontCovered">¡Sube de Ranking!</h2>                
              </a>
            </div>
          </div>

        {{-- CAPTION USER LIVES --}}
        @include('usuarios.partials.fields-users-all-chat')
        @include('usuarios.partials.fields-actividades-recientes')

          {{-- <div class="captionGaleriFotos">
            <h3 class="fontMiriamProSemiBold">Galería de fotos</h3>
            <img class="img-responsive" src="http://127.0.0.1/Sites/Intranet-chat/public/assets/images/galeriFotos.jpg" alt="">
            <img class="img-responsive" src="http://127.0.0.1/Sites/Intranet-chat/public/assets/images/galeriFotos.jpg" alt="">
          </div> --}}

        </div>
        
      </div>
    </div>

     <div class="col-md-12 datPublich">
       <img class="img-responsive" src="http://127.0.0.1/Sites/Intranet-chat/public/assets/images/avatar/IcoPublich.png" alt="" data-toggle="modal" data-target="#myModal">
     </div>

    </div>

    @include('usuarios.partials.field-public-post')
</div>


<div class="alert alert-info dataClMoPosPEr" role="alert">¡Publicacion Agregada!</div>
{{-- Mensajes entrada salida --}}
@include('usuarios.partials.fields-entrada-salida-mensajes')



<!-- Modal Post Personalizado -->
{{-- <div class="modal fade" id="myModalswPostPersonalizado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog dialoPostSuccess" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="alert alert-info" role="alert">¡Publicacion Agregada!</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> --}}

{{-- WINDOWS CHAT --}}
@include('usuarios.partials.fields-windows-chat')

@endsection

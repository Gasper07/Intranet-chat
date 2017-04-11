@extends('layouts.Template-home')

@section('content')
<div class="container continerWithSite">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 captionPosteos captionRabkinEmpleados">
        @foreach($JoinTableUserDatosPersonalesDatosEmpleado as $UsersEmpleados)
          @if($UsersEmpleados->id_usuario == $UserMejorRanking['id_user'])
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 profilesRabking">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ProfileFotosStarts">
                 <div class="label dataPrubeIm dataProfileRankingUser" style="background-image: url('http://127.0.0.1/Sites/Intranet-chat/public/assets/profiles/{{ $UsersEmpleados->foto }}')"></div>
                 <p class="colorBlack fontMiriamProSemiBold">{{ $UsersEmpleados->nombre }} {{ $UsersEmpleados->apellidos }}</p>
                 {{-- <p class="PuntuancionRanlinkNumber">4.5</p> --}}
                 @foreach ($RankingGeneral as $keyRankingGeneral => $valueRankingGeneral) 
                   @if($UsersEmpleados->id_usuario == $valueRankingGeneral['id_user'])
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
               </div>
            </div>
          @endif
        @endforeach
        

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 profilesRabking profileMoreUSaer">
          @foreach($JoinTableUserDatosPersonalesDatosEmpleado as $UsersEmpleados)
            @if($UsersEmpleados->id_usuario != $idMejorRanking)
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ProfileFotosStartsMoreUser">
                 <div class="label dataPrubeIm dataProfileRankingUserOthers" style="background-image: url('http://127.0.0.1/Sites/Intranet-chat/public/assets/profiles/{{ $UsersEmpleados->foto }}')"></div>
                 <p class="colorBlack fontMiriamProSemiBold">{{ $UsersEmpleados->nombre }} {{ $UsersEmpleados->apellidos }}</p>
                 @foreach ($RankingGeneral as $keyRankingGeneral => $valueRankingGeneral) 
                  @if($UsersEmpleados->id_usuario == $valueRankingGeneral['id_user'])
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
              </div>
            @endif
          @endforeach
          
        </div>

      </div>

      <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 captionRecordNotas captionRanKingDats">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 bloqueRecordatorios SuirRanking">
          <h1>¿Cómo puedes </br> subir de ranking?</h1>
          <ul>
              <li>Debes procurar seguir el reglamento de Grupo Valdez, para mayor infomración lee el el Manual de empleado y politicas de la empresa</li>
              <li>Ser proactivo y propósitivo en tu trabajo</li>
          </ul>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 Manuales">
            <a href="">
              <p>Ver Manual de Empleado</p>
            </a>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 Manuales PoliTi">
            <a href="">
              <p>Ver políticas de la empresa</p>
            </a>
          </div>
          <h2>¡Los mejores empleados </br> recibiran excelentes regalos! </h2>
        </div>

        {{-- BLOQUE CALENDAR --}}
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 listConection">
          <div class="col-xs-12 col-sm-12 col-md-12 backReturn">
            <a href="home">
              <p>Regresar a Board de trabajo</p>
            </a>
          </div>
        {{-- CAPTION USER LIVES --}}
          @include('usuarios.partials.fields-user-online')

        {{--ALL USERS --}}
          @include('usuarios.partials.fields-users-all-chat')


          <div class="captionActivitiesRecientes activitisInRanking">
            <h3 class="fontMiriamProSemiBold">Actividades recientes</h3>
            <div class="notficiActivitie">
              <div class="ui relaxed divided list">
                <div class="item PublicatiOn">
                  <i class="large github middle aligned icoPubli"></i>
                  <div class="content">
                    <a class="header"><strong class="nameUserNotifique">Juan Carlos Valdez </strong> tiene una nueva <span class="typeAccionNotifi">publicación</span></a>
                  </div>
                </div>
                <div class="item NewFotos">
                  <i class="large github middle aligned icoFotos"></i>
                  <div class="content">
                    <a class="header"><strong class="nameUserNotifique">Janixia </strong> ha publicado <span class="typeAccionNotifi">nuevas fotos</span></a>
                  </div>
                </div>
                <div class="item ActivitiPago">
                  <i class="large github middle aligned icoPagos"></i>
                  <div class="content">
                    <a class="header">¡Se ha realizado el pago a las 7:00 P.M.!</a>
                  </div>
                </div>
                <div class="item Profilesa">
                  <i class="large github middle aligned icoProFile"></i>
                  <div class="content">
                    <a class="header"><strong class="nameUserNotifique">Edgardo </strong> actualizó su perfil</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- SOLICITUD DE PERMISO --}}
          <div class="col-xs-12 col-sm-12 col-md-12 LinksForEmpleados ForEmpleadoRnakin">
            <ul>
                <li>
                  <a href="">
                   Manual de empleado
                  </a>
                </li>
                <li>
                  <a href="">
                   Reglamento institucional
                  </a>
                </li>
                <li>
                  <a href="">
                   Ayuda
                  </a>
                </li>
            </ul>
          </div>

          {{-- <div class="captionGaleriFotos">
            <h3 class="fontMiriamProSemiBold">Galería de fotos</h3>
            <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/galeriFotos.jpg" alt="">
            <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/galeriFotos.jpg" alt="">
          </div> --}}

        </div>
        
      </div>
    </div>

     <div class="col-md-12 datPublich">
       <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/IcoPublich.png" alt="" data-toggle="modal" data-target="#myModal">
     </div>

    </div>

    @include('usuarios.partials.field-public-post')
</div>

<div class="alert alert-info dataClMoPosPEr" role="alert">¡Publicacion Agregada!</div>
{{-- Mensajes entrada salida --}}
@include('usuarios.partials.fields-entrada-salida-mensajes')

{{-- WINDOWS CHAT --}}
@include('usuarios.partials.fields-windows-chat')
@endsection

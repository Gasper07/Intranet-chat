@extends('layouts.Template-admin')

@section('content')
<div class="container continerWithSite">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionAdminContain">
    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
      
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 sectionCenterContenido secCetTitleS">
      <h1>89 Sugerencias</h1>
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


{{-- containe Sugerencias --}}
<section class="container-fluid sectionAdminNotifiMensa containSugerencias">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionSugerenciasData">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 menssagesBloques">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 allTextMensages">
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 chexAllsMensages dataSguerenciaDCheck">
          
          <form action="home_submit" method="get" accept-charset="utf-8" class="formCheallmensage">
            <input type="checkbox">                
          </form>
        </div>
        <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 textAllsMensages dataSguerenciaD">
         <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 setionMensgaeAllSugere">
          <a href=""><span>89</span> Sugerencias nuevas</a>
         </div>
         
          <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 dropsetionMensgae">
            <p><span>1</span>-5</p>
            <div class="dropdown dwropOptionMensgae">
              <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dLabel">
                <li>
                  <form action="home_submit" method="get" accept-charset="utf-8" class="removeMensage">
                    <input type="submit" value="Eliminar">
                  </form>         
                </li>
                <li>
                  <form action="home_submit" method="get" accept-charset="utf-8" class="removeMensage">
                    <input type="submit" value="Marca como leído">
                  </form>         
                </li>
              </ul>          
            </div>
          </div>
          
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contectAllMenssages">
        <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 checkMEnsagge">
          <form action="home_submit" method="get" accept-charset="utf-8" class="selectMensage">
            <input type="checkbox">                 
          </form>
        </div>
        <div class="col-xs-12 col-sm-11 col-md-11 col-lg-11 textAllsMensages">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fchaUisersMensage">
            <p>29 de Diciembre de 2016 a las 7:30 p.m.</p>
          </div>
          <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 secFotoUser">
            <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
          </div>
          <div class="col-xs-12 col-sm-7 col-md-11 col-lg-11 sectioForMEnsagen secdataTextMensage">
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nameUisersMensage">
              <h3>Lisseth Rivas <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/adjuntarIco.png" alt=""></h3>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 typeUisersMensage">
              <p>Oportunidades de empleo, pagos, inicio de proyectos,   apertura de sucursales, días feriados, actividades internas, etc.</p>

              <div class="dataClicDEsplace">
                <div class="ui accordion">
                  <div class="title">
                    <i class="fa fa-angle-down " aria-hidden="true"></i>
                  </div>
                  <div class="content conFormularioReturnMenSage">
                    <p>Responder</p>
                    <form action="sugerencias_submit" class="formReturnMennsage" method="get" accept-charset="utf-8">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 textAreaReturn">
                          <textarea name=""></textarea>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 submitSendSugerencia">
                          <input type="submit" value="Enviar">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bloqueImageretu">
                          <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/adjuntarFoto.png" alt="">
                          <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/adjuntarIco.png" alt="">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

              </div>
            </div>
            
          </div>     
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contectAllMenssages">
        <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 checkMEnsagge">
          <form action="home_submit" method="get" accept-charset="utf-8" class="selectMensage">
            <input type="checkbox">                 
          </form>
        </div>
        <div class="col-xs-12 col-sm-11 col-md-11 col-lg-11 textAllsMensages">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fchaUisersMensage">
            <p>29 de Diciembre de 2016 a las 7:30 p.m.</p>
          </div>
          <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 secFotoUser">
            <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
          </div>
          <div class="col-xs-12 col-sm-7 col-md-11 col-lg-11 sectioForMEnsagen secdataTextMensage">
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nameUisersMensage">
              <h3>Lisseth Rivas </h3>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 typeUisersMensage">
              <p>Oportunidades de empleo, pagos, inicio de proyectos,   apertura de sucursales, días feriados, actividades internas, etc.</p>

              <div class="dataClicDEsplace">
                <div class="ui accordion">
                  <div class="title">
                    <i class="fa fa-angle-down " aria-hidden="true"></i>
                  </div>
                  <div class="content conFormularioReturnMenSage">
                    <p>Responder</p>
                    <form action="sugerencias_submit" class="formReturnMennsage" method="get" accept-charset="utf-8">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 textAreaReturn">
                          <textarea name=""></textarea>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 submitSendSugerencia">
                          <input type="submit" value="Enviar">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bloqueImageretu">
                          <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/adjuntarFoto.png" alt="">
                          <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/adjuntarIco.png" alt="">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

              </div>
            </div>
            
          </div>     
        </div>
      </div>
      
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contectAllMenssages">
        <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 checkMEnsagge">
          <form action="home_submit" method="get" accept-charset="utf-8" class="selectMensage">
            <input type="checkbox">                 
          </form>
        </div>
        <div class="col-xs-12 col-sm-11 col-md-11 col-lg-11 textAllsMensages">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fchaUisersMensage">
            <p>29 de Diciembre de 2016 a las 7:30 p.m.</p>
          </div>
          <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 secFotoUser">
            <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
          </div>
          <div class="col-xs-12 col-sm-7 col-md-11 col-lg-11 sectioForMEnsagen secdataTextMensage">
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nameUisersMensage">
              <h3>Lisseth Rivas </h3>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 typeUisersMensage">
              <p>Oportunidades de empleo, pagos, inicio de proyectos,   apertura de sucursales, días feriados, actividades internas, etc.</p>

              <div class="dataClicDEsplace">
                <div class="ui accordion">
                  <div class="title">
                    <i class="fa fa-angle-down " aria-hidden="true"></i>
                  </div>
                  <div class="content conFormularioReturnMenSage">
                    <p>Responder</p>
                    <form action="sugerencias_submit" class="formReturnMennsage" method="get" accept-charset="utf-8">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 textAreaReturn">
                          <textarea name=""></textarea>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 submitSendSugerencia">
                          <input type="submit" value="Enviar">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bloqueImageretu">
                          <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/adjuntarFoto.png" alt="">
                          <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/adjuntarIco.png" alt="">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

              </div>
            </div>
            
          </div>     
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-12 datPublich publishChatAdmin publishSugerencias">
    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/addpubliImgae.png" alt="" data-toggle="modal" data-target="#myModal">
    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/AnuncioPublicAdmin.png" alt="">
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

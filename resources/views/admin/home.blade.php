@extends('layouts.Template-admin')

@section('content')
<div class="container continerWithSite">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionAdminContain">
    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
      
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 sectionCenterContenido">
      <h1>Hola!</h1>
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
    <ul>
        <li class="active"><a href="">Home</a></li>
        <li><a href="">Board</a></li>
        <li><a href="">Usuarios</a></li>
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
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bloquesNotification">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 daatNotifis">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 notifis">
            <form action="" class="formNotifisDetall">
              <li class="dropdown uSerLogue colorBlackSuave fontMiriamProRegular">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      Hoy <i class="fa fa-caret-down" aria-hidden="true"></i>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="">
                           Hoy
                          </a>
                      </li>
                      <li>
                          <a href="">
                           Ayer
                          </a>
                      </li>
                      <li>
                          <a href="">
                           Ver historial
                          </a>
                      </li>
                  </ul>
              </li>
            </form>

            <div class="dropdown">
              <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dLabel">
                <li>
                  <a href="">Detalles</a>              
                </li>
              </ul>          
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 countNumber">
              <h1>40</h1>
            </div>

          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 notifitext">
            <h3>Notificaciones</h3>
          </div>
          
        </div>

        {{-- llegadas tarde --}}
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 daatNotifis">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 notifis">
            <form action="" class="formNotifisDetall">
              <li class="dropdown uSerLogue colorBlackSuave fontMiriamProRegular">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      Hoy <i class="fa fa-caret-down" aria-hidden="true"></i>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="">
                           Hoy
                          </a>
                      </li>
                      <li>
                          <a href="">
                           Ayer
                          </a>
                      </li>
                      <li>
                          <a href="">
                           Ver historial
                          </a>
                      </li>
                  </ul>
              </li>
            </form>

            <div class="dropdown">
              <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dLabel">
                <li>
                  <a href="">Detalles</a>              
                </li>
              </ul>          
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 countNumber">
              <h1>0</h1>
            </div>

          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 notifitext">
            <h3>Llegadas tarde</h3>
          </div>        
        </div>

        {{-- Emergencias --}}
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 daatNotifis">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 notifis">
            <form action="" class="formNotifisDetall">
              <li class="dropdown uSerLogue colorBlackSuave fontMiriamProRegular">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      Hoy <i class="fa fa-caret-down" aria-hidden="true"></i>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="">
                           Hoy
                          </a>
                      </li>
                      <li>
                          <a href="">
                           Ayer
                          </a>
                      </li>
                      <li>
                          <a href="">
                           Ver historial
                          </a>
                      </li>
                  </ul>
              </li>
            </form>

            <div class="dropdown">
              <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dLabel">
                <li>
                  <a href="">Detalles</a>              
                </li>
              </ul>          
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 countNumber">
              <h1 class="emergenciRed">4</h1>
            </div>

          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 notifitext">
            <h3>Emergencias</h3>
          </div>        
        </div>


        {{-- Permisos --}}
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 daatNotifis">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 notifis">
            <form action="" class="formNotifisDetall">
              <li class="dropdown uSerLogue colorBlackSuave fontMiriamProRegular">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      Hoy <i class="fa fa-caret-down" aria-hidden="true"></i>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="">
                           Hoy
                          </a>
                      </li>
                      <li>
                          <a href="">
                           Ayer
                          </a>
                      </li>
                      <li>
                          <a href="">
                           Ver historial
                          </a>
                      </li>
                  </ul>
              </li>
            </form>

            <div class="dropdown">
              <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dLabel">
                <li>
                  <a href="">Detalles</a>              
                </li>
              </ul>          
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 countNumber">
              <h1 class="permisosOrange">1</h1>
            </div>

          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 notifitext">
            <h3>Permisos</h3>
          </div>        
        </div>
      </div>

      {{-- end section notificaciones --}}

      {{-- section mensajes --}}
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 menssagesBloques">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 allTextMensages">
            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 chexAllsMensages">
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
              <form action="home_submit" method="get" accept-charset="utf-8" class="formCheallmensage">
                <input type="checkbox">                
              </form>
            </div>
            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 textAllsMensages">
              <a href=""><span>15</span> Mensajes nuevos</a><span><span>1</span>-5</span>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contectAllMenssages">
            <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 checkMEnsagge">
              <form action="home_submit" method="get" accept-charset="utf-8" class="selectMensage">
                <input type="checkbox">                 
              </form>
            </div>
            <div class="col-xs-12 col-sm-11 col-md-11 col-lg-11 textAllsMensages">
              <form action="home_submit" method="get" accept-charset="utf-8" class="mensageOne">
                <a href="">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fchaUisersMensage">
                    <p>29 de Diciembre de 2016 a las 7:30 p.m.</p>
                  </div>
                  <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 secFotoUser">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                  </div>
                  <div class="col-xs-12 col-sm-7 col-md-11 col-lg-11 sectioForMEnsagen">
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nameUisersMensage">
                      <h3>Lisseth Rivas <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/adjuntarIco.png" alt=""></h3>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 typeUisersMensage">
                      <p>Oportunidades de empleo, pagos, inicio de proyectos,   apertura de sucursales, días feriados, actividades internas, etc.</p>
                    </div>
                    
                  </div>
                </a>                
              </form>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contectAllMenssages">
            <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 checkMEnsagge">
              <form action="home_submit" method="get" accept-charset="utf-8" class="selectMensage">
                <input type="checkbox">                 
              </form>
            </div>
            <div class="col-xs-12 col-sm-11 col-md-11 col-lg-11 textAllsMensages">
              <form action="home_submit" method="get" accept-charset="utf-8" class="mensageOne">
                <a href="">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fchaUisersMensage">
                    <p>29 de Diciembre de 2016 a las 7:30 p.m.</p>
                  </div>
                  <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 secFotoUser">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                  </div>
                  <div class="col-xs-12 col-sm-7 col-md-11 col-lg-11 sectioForMEnsagen">
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nameUisersMensage">
                      <h3>Lisseth Rivas </h3>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 typeUisersMensage">
                      <p>Oportunidades de empleo, pagos, inicio de proyectos,   apertura de sucursales, días feriados, actividades internas, etc.</p>
                    </div>
                    
                  </div>
                </a>                
              </form>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contectAllMenssages">
            <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 checkMEnsagge">
              <form action="home_submit" method="get" accept-charset="utf-8" class="selectMensage">
                <input type="checkbox">                 
              </form>
            </div>
            <div class="col-xs-12 col-sm-11 col-md-11 col-lg-11 textAllsMensages">
              <form action="home_submit" method="get" accept-charset="utf-8" class="mensageOne">
                <a href="">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fchaUisersMensage">
                    <p>29 de Diciembre de 2016 a las 7:30 p.m.</p>
                  </div>
                  <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 secFotoUser">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                  </div>
                  <div class="col-xs-12 col-sm-7 col-md-11 col-lg-11 sectioForMEnsagen">
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nameUisersMensage">
                      <h3 class="vieCandidate">Lisseth Rivas </h3>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 typeUisersMensage">
                      <p>Oportunidades de empleo, pagos, inicio de proyectos,   apertura de sucursales, días feriados, actividades internas, etc.</p>
                    </div>
                    
                  </div>
                </a>                
              </form>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contectAllMenssages">
            <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 checkMEnsagge">
              <form action="home_submit" method="get" accept-charset="utf-8" class="selectMensage">
                <input type="checkbox">                 
              </form>
            </div>
            <div class="col-xs-12 col-sm-11 col-md-11 col-lg-11 textAllsMensages">
              <form action="home_submit" method="get" accept-charset="utf-8" class="mensageOne">
                <a href="">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fchaUisersMensage">
                    <p>29 de Diciembre de 2016 a las 7:30 p.m.</p>
                  </div>
                  <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 secFotoUser">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                  </div>
                  <div class="col-xs-12 col-sm-7 col-md-11 col-lg-11 sectioForMEnsagen">
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nameUisersMensage">
                      <h3>Lisseth Rivas </h3>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 typeUisersMensage">
                      <p>Oportunidades de empleo, pagos, inicio de proyectos,   apertura de sucursales, días feriados, actividades internas, etc.</p>
                    </div>
                    
                  </div>
                </a>                
              </form>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contectAllMenssages">
            <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1 checkMEnsagge">
              <form action="home_submit" method="get" accept-charset="utf-8" class="selectMensage">
                <input type="checkbox">                 
              </form>
            </div>
            <div class="col-xs-12 col-sm-11 col-md-11 col-lg-11 textAllsMensages">
              <form action="home_submit" method="get" accept-charset="utf-8" class="mensageOne">
                <a href="">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fchaUisersMensage">
                    <p>29 de Diciembre de 2016 a las 7:30 p.m.</p>
                  </div>
                  <div class="col-xs-12 col-sm-2 col-md-1 col-lg-1 secFotoUser">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                  </div>
                  <div class="col-xs-12 col-sm-7 col-md-11 col-lg-11 sectioForMEnsagen">
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nameUisersMensage">
                      <h3>Lisseth Rivas </h3>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 typeUisersMensage">
                      <p>Oportunidades de empleo, pagos, inicio de proyectos,   apertura de sucursales, días feriados, actividades internas, etc.</p>
                    </div>
                    
                  </div>
                </a>                
              </form>
            </div>
          </div>
        </div>
      {{-- emd section mensajes --}}
      

    </div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 calendarAdmin">
      {{-- CALENDAR --}}

      <div class="captionCalendar">
        <div class="dayMonth">
          <p class="fontMiriamProSemiBold">Agenda</p>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 fechaData">
            <p class="DayAgenda">Lunes</p>
            <p class="DayNumberAgenda">4</p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 fechaData fechType">
            <p class="typEEvento">Hoy capacitación </br>para técnicos</p>
          </div>
        </div>
        <div class="calendarDatas">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner carouselWithMeses" role="listbox">
              <div class="item active nameMonth">
                 <h3>January</h3>
                 <div class="daysCalendar">
                   <div class="dataDays">s</div>
                   <div class="dataDays">m</div>
                   <div class="dataDays">t</div>
                   <div class="dataDays">w</div>
                   <div class="dataDays">t</div>
                   <div class="dataDays">f</div>
                   <div class="dataDays">s</div>
                 </div>
                 <div class="daysNumberCalendar">
                   <div class="dataDays dayDomingo">    
                   </div>
                   <div class="dataDays">                         
                   </div>
                   <div class="dataDays">                         
                   </div>
                   <div class="dataDays">                         
                   </div>
                   <div class="dataDays">                         
                   </div>
                   <div class="dataDays">1</div>
                   <div class="dataDays">2</div>
                   <div class="dataDays dayDomingo">3</div>
                   <div class="dataDays">4</div>
                   <div class="dataDays">5</div>
                   <div class="dataDays">6</div>
                   <div class="dataDays">7</div>
                   <div class="dataDays">8</div>
                   <div class="dataDays">9</div>
                   <div class="dataDays dayDomingo">10</div>
                   <div class="dataDays">11</div>
                   <div class="dataDays">12</div>
                   <div class="dataDays">13</div>
                   <div class="dataDays">14</div>
                   <div class="dataDays dayEvento">                        
                    <div class="ui button">15</div>
                    <div class="ui special popup">
                      <div class="header">Día de pago</div>
                    </div>
                   </div>
                   <div class="dataDays">16</div>
                   <div class="dataDays dayDomingo">17</div>
                   <div class="dataDays">18</div>
                   <div class="dataDays">19</div>
                   <div class="dataDays">20</div>
                   <div class="dataDays">21</div>
                   <div class="dataDays">22</div>
                   <div class="dataDays">23</div>
                   <div class="dataDays dayDomingo">24</div>
                   <div class="dataDays">25</div>
                   <div class="dataDays">26</div>
                   <div class="dataDays">27</div>
                   <div class="dataDays">28</div>
                   <div class="dataDays">29</div>
                   <div class="dataDays">30</div>
                   <div class="dataDays dayEvento">31</div>
                   <div class="dataDays">
                   </div>
                   <div class="dataDays">
                   </div>
                   <div class="dataDays">
                   </div>
                   <div class="dataDays">
                   </div>
                   <div class="dataDays">
                   </div>
                   <div class="dataDays">
                   </div>
                 </div>

              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>

      {{-- END CALENDAR --}}

      {{-- SECTION ADD EVENT CALENDAR --}}
      
      <div class="captionAddEvento captionAddEventoHome">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation"><a href="#profile" class="fontMiriamProRegular" aria-controls="profile" role="tab" data-toggle="tab">Agregar evento a calendario</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content tabconteAddComent">
          <div role="tabpanel" class="tab-pane fade" id="profile">
            <form action="">
              <textarea name="" id="" cols="30" rows="10" placeholder="Escribe el evento"></textarea>
              <div id='sandbox-container'>                    
                <div class="input-daterange input-group" id="datepicker">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 captioNFehcIni">     
                    <input type="text" class="input-sm form-control" name="fecha-start" />
                  </div>                 
                </div>
                <h4 class="colorGrisMediumSuave fontMiriamProRegular">Seleccionar fecha</h4>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 captioNFehcFina">
                  <input type="submit" class="form-control Submit" name="end"  value='Aceptar'/>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      {{-- END SECTION ADD EVENTO --}}

      {{-- REXCORDATORIOS --}}
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 caption Addrecordatorio">
        <h2>¡Recordar!</h2>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionRecordatorios">
          <p>No olvidar enviar notificación de día festivo</p>
          <form action="home_submit" method="get" class="formHEchoRecordar" accept-charset="utf-8">
            <input type="submit" class="submitHecho">
          </form>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 AddRcordadotior">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="#AddRcordatorio" class="fontMiriamProRegular" aria-controls="AddRcordatorio" role="tab" data-toggle="tab">Agregar recordatorio</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content tabconteAddComent">
            <div role="tabpanel" class="tab-pane fade" id="AddRcordatorio">
              <form action="">
                <textarea name="" id="" cols="30" rows="10" placeholder="Escribe el recordatorio"></textarea>
                <div id='sandbox-container'>     
                  <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 captioNFehcFina">
                    <input type="submit" class="form-control Submit" name="end"  value='Aceptar'/>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>        
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionPublichIcos">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">          
          <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/AnuncioPublicAdmin.png" alt="">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/addpubliImgae.png" alt="">
        </div>
      </div>
      {{-- END RECORDATORIOS --}}

    </div>
  </div>
</section>
  
@endsection

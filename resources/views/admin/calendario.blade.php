@extends('layouts.Template-admin')

@section('content')
<div class="container continerWithSite">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionAdminContain">
    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
      
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 sectionCenterContenido secCetTitleS">
      <h1>Calendario</h1>
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
<section class="container-fluid sectionAdminNotifiMensa containSugerencias containCalendare">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mesCalendars mesCalendarAdmin">

      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 DaysCalendars">
        {{-- BLOQUE CALENDAR --}}
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="captionCalendar">
            <div class="dayMonth">
              <p class="fontMiriamProSemiBold dyaGeneralClanedar">Lunes</p>
              <h1 class="DayNumberAgenda">4</h1>
            </div>
          </div>

          {{-- SECTION ADD EVENT CALENDAR --}}
          
          <div class="captionAddEvento addEventeGenral">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#profile" class="fontMiriamProRegular" aria-controls="profile" role="tab" data-toggle="tab">Agregar evento a calendario</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content tabconteAddComent addComentCalendarAdmins">
              <div role="tabpanel" class="tab-pane fade active in" id="profile">
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

        </div>
      </div>

        {{-- calendario carousel --}}
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 CarouselDataCalendar">
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
                     <div class="dataDays dayEvento">15</div>                        
                     {{-- <div class="dataDays dayEvento">
                      <div class="ui button">15</div>
                      <div class="ui special popup">
                        <div class="header">Día de pago</div>
                      </div>
                     </div> --}}
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

                <div class="item nameMonth">
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
                     <div class="dataDays dayEvento">15</div>
                     {{-- <div class="dataDays dayEvento">                        
                      <div class="ui button">15</div>
                      <div class="ui special popup">
                        <div class="header">Día de pago</div>
                      </div>
                     </div> --}}
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
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 EventsCalendars evenCalendarAdmin">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 v">
         <h1 >Enero</h1>
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 vTypeEvento">
            <h2>Calendario de actividades</h2>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 vDataPublic">
            <h2>Publicado por:</h2>
         </div>
      </div>
      

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionCalendarType">
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 vDataPublicType">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fechasEventos">
             <span>4</span>
             <p class="DayPubliEvent"> Apertura de Antiguo</p>
            </div>             
         </div>
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ChatWithUserDatas vDataPublicTypeUSer">
            <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
            <p class="colorBlack fontMiriamProSemiBold">Lissette Rivas</p>
         </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionCalendarType">
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 vDataPublicType">
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fechasEventos">
            <span>15</span>
            <p class="DayPubliEvent"> Día de pago </p>
           </div>             
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ChatWithUserDatas vDataPublicTypeUSer">
           <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
           <p class="colorBlack fontMiriamProSemiBold">Lissette Rivas</p>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionCalendarType">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 vDataPublicType">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fechasEventos">
           <span>21</span>
           <p class="DayPubliEvent"> Día Asueto pago </p>
          </div>             
       </div>
       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ChatWithUserDatas vDataPublicTypeUSer">
           <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
           <p class="colorBlack fontMiriamProSemiBold">Lissette Rivas</p>
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionCalendarType">
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 vDataPublicType">
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 fechasEventos">
            <span>15</span>
            <p class="DayPubliEvent"> Día de pago </p>
           </div>             
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ChatWithUserDatas vDataPublicTypeUSer">
           <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
           <p class="colorBlack fontMiriamProSemiBold">Lissette Rivas</p>
        </div>
      </div>

      <div class="col-md-12 datPublich publishChatAdmin publichCalndar">
        <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/addpubliImgae.png" alt="" data-toggle="modal" data-target="#myModal">
        <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/AnuncioPublicAdmin.png" alt="">
      </div>
     
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

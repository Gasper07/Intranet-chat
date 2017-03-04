@extends('layouts.Template-home')

@section('content')
<div class="container continerWithSite">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 captionPosteos captionProfiles">

        {{-- CAPTION USER LIVES --}}
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="captionUsersInLive">
            <div class="ui accordion">
              <h3 class="fontMiriamProRegular">Usuarios</h3>
              <div class="title">
                
                <div class="captionCircleUser">
                  <a href="" class="userLive">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/user-leo.png" alt="">            
                  </a>
                </div>
                <div class="captionCircleUser">
                  <a href="" class="userLive">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/user-donald.png" alt="">            
                  </a>
                </div>
                <div class="captionCircleUser">
                  <a href="" class="userLive">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/user-lise.png" alt="">            
                  </a>
                </div>
                <div class="captionCircleUser">
                  <a href="" class="userLive">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/user-leo.png" alt="">            
                  </a>
                </div>
                <div class="captionCircleUser">
                  <i class="fa fa-angle-down" aria-hidden="true"></i>
                </div>              
              </div>
              <div class="content">
                <div class="captionCircleUser">
                  <a href="" class="userLive">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/user-leo.png" alt="">            
                  </a>
                </div>
                <div class="captionCircleUser">
                  <a href="" class="userLive">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/user-donald.png" alt="">            
                  </a>
                </div>
                <div class="captionCircleUser">
                  <a href="" class="userLive">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/user-lise.png" alt="">            
                  </a>
                </div>
                <div class="captionCircleUser">
                  <a href="" class="userLive">
                    <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/user-leo.png" alt="">            
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        {{-- SOLICITUD EN PROCESO --}}
        <div class="col-xs-12 col-sm-12 col-md-12 ProcessSolicitud">
          <a href="">
            <p>Solicitud en proceso (1)</p>
          </a>
        </div>

        {{-- HORARRIOS DE USURIOS --}}

        <div class="col-xs-12 col-sm-12 col-md-12 HorariosUser">
          <div class="col-xs-12 col-sm-12 col-md-12 sectionHorarios">
            <p id='titleHorrarios'>Horarios</p>

            <div class="col-xs-12 col-sm-12 col-md-12">
              <p class="ListDays fontMiriamProSemiBold">Lunes, Martes, Miercoles</p>
              <p class="ListHours fontMiriamProRegular">8:00 a.m. a 6:00 p.m.</p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
              <p class="ListDays fontMiriamProSemiBold">Sábado</p>
              <p class="ListHours fontMiriamProRegular">8:00 a.m. a 1:00 p.m.</p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
              <p class="ListDays fontMiriamProSemiBold">Días de descanso</p>
              <p class="ListHours fontMiriamProRegular DayDescans">Sábado</p>
              <p class="ListHours fontMiriamProRegular DayDescans">Domingo</p>
            </div>
          </div>          
        </div>

        {{-- BUZON DE SUGERENCIAS --}}
        <div class="col-xs-12 col-sm-12 col-md-12 BuzonSgenerencias">
          <a href="">
            <p>Buzón de sugerencias</p>
          </a>
        </div>

        {{-- Emergenica/ imprevisto --}}
        <div class="col-xs-12 col-sm-12 col-md-12 BuzonSgenerencias">
          <a href="">
            <p>Emergenica/ imprevisto</p>
          </a>
        </div>

        {{-- SOLICITUD DE PERMISO --}}
        <div class="col-xs-12 col-sm-12 col-md-12 BuzonSgenerencias">
          <a href="">
            <p>Solicitar permisos</p>
          </a>
        </div>

        {{-- Dias disponibles --}}
        <div class="col-xs-12 col-sm-12 col-md-12 BuzonSgenerencias DayDisponibles">
          <p>Usted tiene</p>
          <div class="col-xs-12 col-sm-12 col-md-12 sectionSelectDay">
            <div class="col-xs-12 col-sm-6 col-md-6 bgWrapDas">
              <p>1</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 bgWrapDas">
              <p>2</p>
            </div>
          </div>
          <p>de vacaciones pendientes</p>
        </div>

        {{-- SOLICITUD DE PERMISO --}}
        <div class="col-xs-12 col-sm-12 col-md-12 LinksForEmpleados">
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

     </div>

     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 sectionProfiles sectionPermissionRequest">
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 motioEmergency">
         <h3>Estamos abiertos a escucharte</h3>
         <h5>Cuéntanos tu opinión</h5>
         <div class="col-xs-12 col-sm-12 col-md-12 continPublish">
           <form action="home_submit" method="get" class="sectionPublichUser" accept-charset="utf-8">
             <div class="col-xs-12 col-sm-12 col-md-12">
               <textarea name="" placeholder="Escribe un comentario"></textarea>
             </div>
             <div class="col-xs-12 col-sm-12 col-md-12 bloquesActions actionINEmergency">
               <div class="col-md-6 actionpuBlish">
                 <div class="col-md-2 AdjuntarFoto AdjuntarFotoEmergency">
                   <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/adjuntarFoto.png" alt="">
                 </div>
               </div>
               <div class="col-md-6 ButtinPublish">
                 <input type="submit" value="Enviar">
               </div>
             </div>
           </form>
         </div>
       </div>

      {{-- MENSAJE SOLICTUD ENVIADA --}}
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 SendSolicitud">
        <h1>Fue enviado con exito</h1>
       </div>


     </div>

      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 captionRecordNotas SecCalendar">

        {{-- BLOQUE CALENDAR --}}
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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

          {{-- SECTION ADD EVENT CALENDAR --}}
          
          <div class="captionAddEvento">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#profile" class="fontMiriamProRegular" aria-controls="profile" role="tab" data-toggle="tab">Agregar evento a calendario</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content tabconteAddComent">
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
    </div>

     <div class="col-md-12 datPublich">
       <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/IcoPublich.png" alt="" data-toggle="modal" data-target="#myModal">
     </div>

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
</div>
@endsection

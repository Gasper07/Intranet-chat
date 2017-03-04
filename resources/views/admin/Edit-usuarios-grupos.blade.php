@extends('layouts.Template-admin-edit-users')

@section('content')
<div class="container continerWithSite">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionAdminContain">
    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
      
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 sectionCenterContenido secCetTitleS">
      <h1>Editar usuario</h1>
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


{{-- SECTION BLOQUE NOTIFICACION Y MENSAJES --}}
<section class="container-fluid sectionAdminNotifiMensa">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">

    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 OtherUserEdit">
      
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 sectionCenterContenido sectionCenEdituser">
      
      <form action="Edit-usuarios_submit" method="get" accept-charset="utf-8" class="formEditUser">
        {{-- BLOCK EDIT USER --}}
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 dataBloquesForEdit">
          <h3 class="editAs">Editar todos los usuarios</h3>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 dataImgAndranking datarankingGropu">
            <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 imgProfiEdit">
              <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
              <div class="rectangle">                
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 imgProfiEdit">
              <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
              <div class="rectangle">                
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 imgProfiEdit">
              <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
              <div class="rectangle">                
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 imgProfiEdit">
              <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
              <div class="rectangle">                
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 imgProfiEdit">
              <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
              <div class="rectangle">                
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 DataformPersonales">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formInputsDats">
              <label for="">Departamento al que pertenece</label>
              <input type="text">            
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formInputsDats">
              <label for="">Cargo</label>
              <input type="text">            
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formInputsDats">
              <label for="">Jefe Inmediato</label>
              <input type="text">            
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 DataformPersonales dataInformationPersonal">
            <h3>Información personal</h3>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formInputsDats">
              <label for="">Género</label>
              <select name="" >
                <option value="">Masculino</option>
                <option value="">Femenino</option>              
              </select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formInputsDats">
              <label for="">Estado civil</label>
              <input type="text">            
            </div>

          </div>
        </div>

        {{-- END BLOCK EDIT USER --}}

        {{-- BLOCK CLOCK --}}
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 databLoquOclock">

          {{-- HORARIOS DIAS COMPLETOS --}}
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 databLoquOclockDetallDiasCompleto">
            <h3>Horario</h3>
            <h4>Días completos</h4>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 daataEntrada">
              <div class="form-group">
                  <h4>Entrada</h4>
                  <div class="clearfix">
                      <div class="input-group clockpicker pull-center" data-placement="left" data-align="top" data-autoclose="true">
                          <input type="text" class="form-control" value="13:14">
                          <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                          </span>
                      </div>
                  </div>
              </div>              
           </div>     
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 daataSalida">
              <div class="form-group">
                  <h4>Salida</h4>
                  <div class="clearfix">
                      <div class="input-group clockpicker pull-center" data-placement="left" data-align="top" data-autoclose="true">
                          <input type="text" class="form-control" value="13:14">
                          <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                          </span>
                      </div>
                  </div>
              </div>
           </div>   
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 DaysOfSelect">
             <div class="form-group formSelectDays">
                 <h4>Repetir</h4>
                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  bloqueDayss">
                   <div class='DayForDay'>
                     d
                   </div>
                   <div class='DayForDay'>
                     l
                   </div>
                   <div class='DayForDay'>
                     m
                   </div>
                   <div class='DayForDay'>
                     m
                   </div>
                   <div class='DayForDay'>
                     j
                   </div>
                   <div class='DayForDay'>
                     v
                   </div>
                   <div class='DayForDay'>
                     s
                   </div>
                 </div>
             </div>                    
            </div>       
          </div>  
          {{-- END HORARIOS DIAS COMPLETOS --}}

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 databLoquOclockDetallMedioDia">
            <h4>Medio día</h4>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 daataEntrada">
              <div class="form-group">
                  <h4>Entrada</h4>
                  <div class="clearfix">
                      <div class="input-group clockpicker pull-center" data-placement="left" data-align="top" data-autoclose="true">
                          <input type="text" class="form-control" value="13:14">
                          <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                          </span>
                      </div>
                  </div>
              </div>              
           </div>     
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 daataSalida">
              <div class="form-group">
                  <h4>Salida</h4>
                  <div class="clearfix">
                      <div class="input-group clockpicker pull-center" data-placement="left" data-align="top" data-autoclose="true">
                          <input type="text" class="form-control" value="13:14">
                          <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                          </span>
                      </div>
                  </div>
              </div>
           </div>   
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 DaysOfSelect">
             <div class="form-group formSelectDays">
                 <h4>Repetir</h4>
                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  bloqueDayss">
                   <div class='DayForDay'>
                     d
                   </div>
                   <div class='DayForDay'>
                     l
                   </div>
                   <div class='DayForDay'>
                     m
                   </div>
                   <div class='DayForDay'>
                     m
                   </div>
                   <div class='DayForDay'>
                     j
                   </div>
                   <div class='DayForDay'>
                     v
                   </div>
                   <div class='DayForDay'>
                     s
                   </div>
                 </div>
             </div>                    
            </div>       
          </div> 
        </div>

        {{-- END BLOCK CLOCK --}}
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 submitEditU">
          <input type="submit" value='Aceptar'>
        </div>
            

      </form>
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

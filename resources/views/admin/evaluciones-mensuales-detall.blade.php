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

    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 OtherUserEdit lateEdiEvalution">
      
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 sectionCenterContenido sectionCenEdituse sectionEvalutionUSer evaluationDetyasll">
      {{-- ALL AREAS detall --}}
      <h3>Área de Preventa</h3>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 typeEncargado">
        <h3>Encargado de área</h3>
        <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 detallImgProfile">
          <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">              
        </div>   
        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 detallNameProfile">
          <p class="colorBlack fontMiriamProSemiBold">Lissette Rivas</p>
          <div class="ui star rating" data-rating="5"></div>
        </div> 
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 EvaluationPersonal evaluationDetallQuestion">
         <h3>Evaluación de: <span> Lisseth Rivas </span> </h3>

         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ProfileFotosStarts profilesForDetall">
           <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 detallImgProfile">
             <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">              
           </div>   
           <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 detallNameProfile">
             <p class="colorBlack fontMiriamProSemiBold">Lissette Rivas</p>
             <div class="ui star rating" data-rating="5"></div>
           </div>  
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 textConesta TitleLISt">
               <p>Contesta según nivel de desempeño, siendo malo el peor y excelente el mejor</p>    
           </div>  

           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 textConesta bgQuesdtions">
             <p>1. ¿cómo califica el orden y limpieza del área de trabajo?</p>
             <ul class="Redconocistes">
                <li class="cssIILim">
                  <a href="#!">
                    <img class="img-responsive excelenteSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-06.png" alt="excelente">
                    <p>EXCELENTE</p>  
                    <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">                
                  </a>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/icons/selectActiveAdmin.png" alt=/icons"selectActiveAdmin">
                  </div>
                </li>
                <li class="cssIILim2">
                  <a href="#!">
                    <img class="img-responsive muybuenoSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-01.png" alt="muybueno">
                     <p>MUY BUENO</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>
                <li class="cssIILim3">
                  <a href="#!">
                    <img class="img-responsive regularSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-53.png" alt="regular">
                    <p>REGULAR</p>
                    <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>
                <li class="cssIILim4">
                  <a href="#!">
                    <img class="img-responsive maloSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-35.png" alt="malo">
                     <p>MALO</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>

              </ul>
           </div>      

           {{-- 2DA PREGUNTA --}}

           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 textConesta bgQuesdtions">
             <p>2. ¿Cómo califica el trabajo en equipo de Edgardo?</p>
             <ul class="Redconocistes">
                <li class="cssIILim">
                  <a href="#!">
                    <img class="img-responsive excelenteSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-06.png" alt="excelente">
                    <p>EXCELENTE</p>  
                    <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">                
                  </a>
                </li>
                <li class="cssIILim2">
                  <a href="#!">
                    <img class="img-responsive muybuenoSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-01.png" alt="muybueno">
                     <p>MUY BUENO</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/icons/selectActiveAdmin.png" alt=/icons"selectActiveAdmin">
                   </div>
                </li>
                <li class="cssIILim3">
                  <a href="#!">
                    <img class="img-responsive regularSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-53.png" alt="regular">
                    <p>REGULAR</p>
                    <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>
                <li class="cssIILim4">
                  <a href="#!">
                    <img class="img-responsive maloSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-35.png" alt="malo">
                     <p>MALO</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>

              </ul>
           </div> 

           {{-- 3 PREGUNTA --}}

           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 textConesta bgQuesdtions">
             <p>3. ¿Cumple con los tiempos establecidos en la entrega de proyectos?</p>
             <ul class="Redconocistes">
                <li class="cssIILim">
                  <a href="#!">
                    <img class="img-responsive excelenteSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-06.png" alt="excelente">
                    <p>EXCELENTE</p>  
                    <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">                
                  </a>
                </li>
                <li class="cssIILim2">
                  <a href="#!">
                    <img class="img-responsive muybuenoSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-01.png" alt="muybueno">
                     <p>MUY BUENO</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>
                <li class="cssIILim3">
                  <a href="#!">
                    <img class="img-responsive regularSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-53.png" alt="regular">
                    <p>REGULAR</p>
                    <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/icons/selectActiveAdmin.png" alt=/icons"selectActiveAdmin">
                  </div>
                </li>
                <li class="cssIILim4">
                  <a href="#!">
                    <img class="img-responsive maloSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-35.png" alt="malo">
                     <p>MALO</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>

              </ul>
           </div> 

           {{-- 4YA PREGUNTA --}}
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 textConesta bgQuesdtions">
             <p>4. ¿Cómo considera la proactividad de Edgardo?</p>
             <ul class="Redconocistes">
                <li class="cssIILim">
                  <a href="#!">
                    <img class="img-responsive excelenteSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-06.png" alt="excelente">
                    <p>EXCELENTE</p>  
                    <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">                
                  </a>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/icons/selectActiveAdmin.png" alt=/icons"selectActiveAdmin">
                  </div>
                </li>
                <li class="cssIILim2">
                  <a href="#!">
                    <img class="img-responsive muybuenoSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-01.png" alt="muybueno">
                     <p>MUY BUENO</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>
                <li class="cssIILim3">
                  <a href="#!">
                    <img class="img-responsive regularSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-53.png" alt="regular">
                    <p>REGULAR</p>
                    <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>
                <li class="cssIILim4">
                  <a href="#!">
                    <img class="img-responsive maloSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-35.png" alt="malo">
                     <p>MALO</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>

              </ul>
           </div> 
           
           {{-- 5tA PREGUNTA --}}
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 textConesta bgQuesdtions">
             <p>4. ¿Cómo considera la proactividad de Edgardo?</p>
             <ul class="Redconocistes">
                <li class="cssIILim">
                  <a href="#!">
                    <img class="img-responsive excelenteSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-06.png" alt="excelente">
                    <p>EXCELENTE</p>  
                    <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">                
                  </a>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/icons/selectActiveAdmin.png" alt=/icons"selectActiveAdmin">
                  </div>
                </li>
                <li class="cssIILim2">
                  <a href="#!">
                    <img class="img-responsive muybuenoSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-01.png" alt="muybueno">
                     <p>MUY BUENO</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>
                <li class="cssIILim3">
                  <a href="#!">
                    <img class="img-responsive regularSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-53.png" alt="regular">
                    <p>REGULAR</p>
                    <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>
                <li class="cssIILim4">
                  <a href="#!">
                    <img class="img-responsive maloSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-35.png" alt="malo">
                     <p>MALO</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>

              </ul>
           </div> 

           {{-- 6tA PREGUNTA --}}
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 textConesta bgQuesdtions">
             <p>4. ¿Cómo considera la proactividad de Edgardo?</p>
             <ul class="Redconocistes">
                <li class="cssIILim">
                  <a href="#!">
                    <img class="img-responsive excelenteSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-06.png" alt="excelente">
                    <p>EXCELENTE</p>  
                    <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">
                  </a>
                </li>
                <li class="cssIILim2">
                  <a href="#!">
                    <img class="img-responsive muybuenoSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-01.png" alt="muybueno">
                     <p>MUY BUENO</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>
                <li class="cssIILim3">
                  <a href="#!">
                    <img class="img-responsive regularSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-53.png" alt="regular">
                    <p>REGULAR</p>
                    <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>
                <li class="cssIILim4">
                  <a href="#!">
                    <img class="img-responsive maloSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-35.png" alt="malo">
                     <p>MALO</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/icons/selectActiveAdmin.png" alt=/icons"selectActiveAdmin">
                  </div>
                </li>

              </ul>
           </div> 

           {{-- 7tA PREGUNTA --}}
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 textConesta bgQuesdtions">
             <p>4. ¿Cómo considera la proactividad de Edgardo?</p>
             <ul class="Redconocistes">
                <li class="cssIILim">
                  <a href="#!">
                    <img class="img-responsive excelenteSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-06.png" alt="excelente">
                    <p>EXCELENTE</p>  
                    <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">                
                  </a>
                </li>
                <li class="cssIILim2">
                  <a href="#!">
                    <img class="img-responsive muybuenoSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-01.png" alt="muybueno">
                     <p>MUY BUENO</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/icons/selectActiveAdmin.png" alt=/icons"selectActiveAdmin">
                   </div>
                </li>
                <li class="cssIILim3">
                  <a href="#!">
                    <img class="img-responsive regularSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-53.png" alt="regular">
                    <p>REGULAR</p>
                    <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>
                <li class="cssIILim4">
                  <a href="#!">
                    <img class="img-responsive maloSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-35.png" alt="malo">
                     <p>MALO</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>

              </ul>
           </div> 

           {{-- 8tA PREGUNTA --}}
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 textConesta bgQuesdtions">
             <p>4. ¿Cómo considera la proactividad de Edgardo?</p>
             <ul class="Redconocistes">
                <li class="cssIILim">
                  <a href="#!">
                    <img class="img-responsive excelenteSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-06.png" alt="excelente">
                    <p>EXCELENTE</p>  
                    <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">                
                  </a>
                </li>
                <li class="cssIILim2">
                  <a href="#!">
                    <img class="img-responsive muybuenoSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-01.png" alt="muybueno">
                     <p>MUY BUENO</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>
                <li class="cssIILim3">
                  <a href="#!">
                    <img class="img-responsive regularSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-53.png" alt="regular">
                    <p>REGULAR</p>
                    <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/icons/selectActiveAdmin.png" alt=/icons"selectActiveAdmin">
                  </div>
                </li>
                <li class="cssIILim4">
                  <a href="#!">
                    <img class="img-responsive maloSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-35.png" alt="malo">
                     <p>MALO</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>

              </ul>
           </div> 

           {{-- 9tA PREGUNTA --}}
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 textConesta bgQuesdtions">
             <p>4. ¿Cómo considera la proactividad de Edgardo?</p>
             <ul class="Redconocistes">
                <li class="cssIILim">
                  <a href="#!">
                    <img class="img-responsive excelenteSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-06.png" alt="excelente">
                    <p>EXCELENTE</p>  
                    <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">                
                  </a>
                </li>
                <li class="cssIILim2">
                  <a href="#!">
                    <img class="img-responsive muybuenoSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-01.png" alt="muybueno">
                     <p>MUY BUENO</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>
                <li class="cssIILim3">
                  <a href="#!">
                    <img class="img-responsive regularSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-53.png" alt="regular">
                    <p>REGULAR</p>
                    <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>
                <li class="cssIILim4">
                  <a href="#!">
                    <img class="img-responsive maloSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-35.png" alt="malo">
                     <p>MALO</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/icons/selectActiveAdmin.png" alt=/icons"selectActiveAdmin">
                  </div>
                </li>

              </ul>
           </div> 

           {{-- 10A PREGUNTA --}}
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 textConesta bgQuesdtions">
             <p>4. ¿Cómo considera la proactividad de Edgardo?</p>
             <ul class="Redconocistes">
                <li class="cssIILim">
                  <a href="#!">
                    <img class="img-responsive excelenteSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-06.png" alt="excelente">
                    <p>EXCELENTE</p>  
                    <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">                
                  </a>
                </li>
                <li class="cssIILim2">
                  <a href="#!">
                    <img class="img-responsive muybuenoSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-01.png" alt="muybueno">
                     <p>MUY BUENO</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                  <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/icons/selectActiveAdmin.png" alt=/icons"selectActiveAdmin">
                   </div>
                </li>
                <li class="cssIILim3">
                  <a href="#!">
                    <img class="img-responsive regularSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-53.png" alt="regular">
                    <p>REGULAR</p>
                    <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>
                <li class="cssIILim4">
                  <a href="#!">
                    <img class="img-responsive maloSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-35.png" alt="malo">
                     <p>MALO</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                  </a>
                </li>

              </ul>
           </div> 
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 SendFormDataRes">
             <input type="submit" value="Enviar evaluación">
           </div>

         </div>
      </div>
    </div>
    <div class="col-md-12 datPublich publishChatAdmin publichDocuemnts">
      <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/addpubliImgae.png" alt="" data-toggle="modal" data-target="#myModal">
      <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/AnuncioPublicAdmin.png" alt=""  data-toggle="modal" data-target="#myModalNotifications">
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


<!-- Modal NOTIFICACIONES -->
<div class="modal fade" id="myModalNotifications" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog contPusblishDialogo" role="document">
    <div class="modal-content">
      <div class="modal-body contpublishNotifs">
        <div class="col-xs-12 col-sm-12 col-md-12 continPublish">
        
        {{-- FORM ADD NOTIFI --}}
          <form action="home_submit" method="get" class="sectionPublichUser sectionPubliNotifis" accept-charset="utf-8">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <select name="">
                <option value="">Seleccione notificación</option>
                <option value="Tu pago fue realizado a las 7:00 P.M." class="typeColorGreen">Tu pago fue realizado a las 7:00 P.M.</option>
                <option value="Capacitación. La próxima semana se habrá capacitación para asesores" class="typeColorAcua">Capacitación. La próxima semana se habrá capacitación para asesores</option>
                <option value="Capacitación. La próxima semana se habrá capacitación para asesores" class="typeColorRed">Reporte. Un gay ha estado husmeando en la tienda, tener cuidado</option>
              </select>
            </div>
            <div class="col-md-6 ButtinPublish butPulchNotfi">
              <input type="submit" value="Enviar"></input>
            </div>
          </form>
          {{-- FORM ADD NOTIFI --}}

          {{-- FORM CREATE NOTIFI --}}
          <form action="evaluciones-mensuales-detall_submit" method="get" accept-charset="utf-8">
            <div class="col-xs-12 col-sm-12 col-md-12 bloquesActions bloqueActionAddNodui">
              <div class="ui accordion">
                <div class="title">
                  Agregar nueva notificación +
                </div>
                <div class="content contentAddNotify">
                  <input type="text" placeholder="Titulo de Notificación">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contAreaSelectColro">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 bloQUeAReDes">
                      <textarea name="" placeholder="Escriba notificación"></textarea>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 bloQUeAReDes bloquESelcPicker">
                      <input type='text' id="showPaletteOnly"/>
                      <br />
                      <span class='label'>Choose a color</span>
                    </div>                    
                  </div>
                  <h4>Recuerda no repetir el color, para no confundir las notificaciones*</h4> 
                  <input type="submit" class="submitForCreateNotifi" value="Crear Notificación">               
                </div>
              </div>            
            </div>
          </form>
          {{-- END FORM CREATE NOTIFI --}}
        </div>
      </div>
    </div>
  </div>
</div>
  
@endsection

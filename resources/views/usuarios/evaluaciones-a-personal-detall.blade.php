@extends('layouts.Template-home')

@section('content')
<div class="container continerWithSite">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 captionPosteos captionProfiles">
        {{-- Manuales DE PERMISO --}}
        <div class="col-xs-12 col-sm-12 col-md-12 LinksForEmpleados manualitiEvaluation evaluationEwstionMa">
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

     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 sectionProfiles sectionPermissionRequest sectionEvalutionToPersonal">
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 EvaluationPersonal evaluationDetallQuestion">
          <h3>Encargado de área: <span> Lisseth Rivas </span> </h3>

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
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
                 </li>
                 <li class="cssIILim2">
                   <a href="#!">
                     <img class="img-responsive muybuenoSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-01.png" alt="muybueno">
                      <p>MUY BUENO</p>
                      <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                    </div>
                 </li>
                 <li class="cssIILim3">
                   <a href="#!">
                     <img class="img-responsive regularSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-53.png" alt="regular">
                     <p>REGULAR</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
                 </li>
                 <li class="cssIILim4">
                   <a href="#!">
                     <img class="img-responsive maloSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-35.png" alt="malo">
                      <p>MALO</p>
                      <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
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
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
                 </li>
                 <li class="cssIILim2">
                   <a href="#!">
                     <img class="img-responsive muybuenoSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-01.png" alt="muybueno">
                      <p>MUY BUENO</p>
                      <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                    </div>
                 </li>
                 <li class="cssIILim3">
                   <a href="#!">
                     <img class="img-responsive regularSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-53.png" alt="regular">
                     <p>REGULAR</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
                 </li>
                 <li class="cssIILim4">
                   <a href="#!">
                     <img class="img-responsive maloSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-35.png" alt="malo">
                      <p>MALO</p>
                      <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
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
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
                 </li>
                 <li class="cssIILim2">
                   <a href="#!">
                     <img class="img-responsive muybuenoSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-01.png" alt="muybueno">
                      <p>MUY BUENO</p>
                      <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                    </div>
                 </li>
                 <li class="cssIILim3">
                   <a href="#!">
                     <img class="img-responsive regularSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-53.png" alt="regular">
                     <p>REGULAR</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
                 </li>
                 <li class="cssIILim4">
                   <a href="#!">
                     <img class="img-responsive maloSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-35.png" alt="malo">
                      <p>MALO</p>
                      <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
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
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
                 </li>
                 <li class="cssIILim2">
                   <a href="#!">
                     <img class="img-responsive muybuenoSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-01.png" alt="muybueno">
                      <p>MUY BUENO</p>
                      <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                    </div>
                 </li>
                 <li class="cssIILim3">
                   <a href="#!">
                     <img class="img-responsive regularSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-53.png" alt="regular">
                     <p>REGULAR</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
                 </li>
                 <li class="cssIILim4">
                   <a href="#!">
                     <img class="img-responsive maloSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-35.png" alt="malo">
                      <p>MALO</p>
                      <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
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
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
                 </li>
                 <li class="cssIILim2">
                   <a href="#!">
                     <img class="img-responsive muybuenoSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-01.png" alt="muybueno">
                      <p>MUY BUENO</p>
                      <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                    </div>
                 </li>
                 <li class="cssIILim3">
                   <a href="#!">
                     <img class="img-responsive regularSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-53.png" alt="regular">
                     <p>REGULAR</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
                 </li>
                 <li class="cssIILim4">
                   <a href="#!">
                     <img class="img-responsive maloSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-35.png" alt="malo">
                      <p>MALO</p>
                      <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
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
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
                 </li>
                 <li class="cssIILim2">
                   <a href="#!">
                     <img class="img-responsive muybuenoSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-01.png" alt="muybueno">
                      <p>MUY BUENO</p>
                      <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                    </div>
                 </li>
                 <li class="cssIILim3">
                   <a href="#!">
                     <img class="img-responsive regularSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-53.png" alt="regular">
                     <p>REGULAR</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
                 </li>
                 <li class="cssIILim4">
                   <a href="#!">
                     <img class="img-responsive maloSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-35.png" alt="malo">
                      <p>MALO</p>
                      <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
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
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
                 </li>
                 <li class="cssIILim2">
                   <a href="#!">
                     <img class="img-responsive muybuenoSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-01.png" alt="muybueno">
                      <p>MUY BUENO</p>
                      <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                    </div>
                 </li>
                 <li class="cssIILim3">
                   <a href="#!">
                     <img class="img-responsive regularSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-53.png" alt="regular">
                     <p>REGULAR</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
                 </li>
                 <li class="cssIILim4">
                   <a href="#!">
                     <img class="img-responsive maloSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-35.png" alt="malo">
                      <p>MALO</p>
                      <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
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
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
                 </li>
                 <li class="cssIILim2">
                   <a href="#!">
                     <img class="img-responsive muybuenoSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-01.png" alt="muybueno">
                      <p>MUY BUENO</p>
                      <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                    </div>
                 </li>
                 <li class="cssIILim3">
                   <a href="#!">
                     <img class="img-responsive regularSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-53.png" alt="regular">
                     <p>REGULAR</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
                 </li>
                 <li class="cssIILim4">
                   <a href="#!">
                     <img class="img-responsive maloSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-35.png" alt="malo">
                      <p>MALO</p>
                      <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
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
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
                 </li>
                 <li class="cssIILim2">
                   <a href="#!">
                     <img class="img-responsive muybuenoSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-01.png" alt="muybueno">
                      <p>MUY BUENO</p>
                      <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                    </div>
                 </li>
                 <li class="cssIILim3">
                   <a href="#!">
                     <img class="img-responsive regularSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-53.png" alt="regular">
                     <p>REGULAR</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
                 </li>
                 <li class="cssIILim4">
                   <a href="#!">
                     <img class="img-responsive maloSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-35.png" alt="malo">
                      <p>MALO</p>
                      <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
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
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
                 </li>
                 <li class="cssIILim2">
                   <a href="#!">
                     <img class="img-responsive muybuenoSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-01.png" alt="muybueno">
                      <p>MUY BUENO</p>
                      <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                      <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                    </div>
                 </li>
                 <li class="cssIILim3">
                   <a href="#!">
                     <img class="img-responsive regularSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-53.png" alt="regular">
                     <p>REGULAR</p>
                     <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
                 </li>
                 <li class="cssIILim4">
                   <a href="#!">
                     <img class="img-responsive maloSu" src="https://www.valdezmobile.com/public/assets/images/appac/Emoji-Smiley-35.png" alt="malo">
                      <p>MALO</p>
                      <input type="hidden" class="CCOL" data-id="orden_limpieza" value="" name="COL">   
                   </a>
                   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                     <img class="img-responsive activeSeleccionCarita" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/selectActive.png" alt="selectActive">
                   </div>
                 </li>

               </ul>
            </div> 
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 SendFormDataRes">
              <input type="submit" value="Enviar evaluación">
            </div>

          </div>
       </div>
     </div>

      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 captionRecordNotas SecCalendar">
         <div class="col-xs-12 col-sm-12 col-md-12 imagEvaluition ">
          <img class="img-responsive evaluationEwstionMa" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/IcoPublich.png" alt="" data-toggle="modal" data-target="#myModal">
         </div>
      </div>
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

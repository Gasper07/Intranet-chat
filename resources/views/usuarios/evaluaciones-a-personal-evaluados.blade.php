@extends('layouts.Template-home')

@section('content')
<div class="container continerWithSite">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 captionPosteos captionProfiles">
        {{-- Manuales DE PERMISO --}}
        <div class="col-xs-12 col-sm-12 col-md-12 LinksForEmpleados manualitiEvaluation">
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
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 EvaluationPersonal">
          <h3>Encargado de área: <span> Lisseth Rivas </span> </h3>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ProfileFotosStarts profilesUsersFinish">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 dataEvaluatioNFIna">
             <h3>La evaluación de Edgardo Rivas ha finalizado</h3>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              
            </div>   
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">              
              <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">              
            </div>   
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 dataNamesUsers">
              <p class="colorBlack fontMiriamProSemiBold">Lissette Rivas</p>
              <div class="ui star rating" data-rating="5"></div>
            </div>            
          </div>
          
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 NextEvalue">
            <p>Seguir evaluando:</p>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ProfileFotosStarts">
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                <p class="colorBlack fontMiriamProSemiBold">Lissette Rivas</p>
                <div class="ui star rating" data-rating="5"></div>
              </div>   
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                <p class="colorBlack fontMiriamProSemiBold">Lissette Rivas</p>
                <div class="ui star rating" data-rating="5"></div>
              </div>   
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                <p class="colorBlack fontMiriamProSemiBold">Lissette Rivas</p>
                <div class="ui star rating" data-rating="5"></div>
              </div>            
            </div>
          </div>
          

       </div>
     </div>

      <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 captionRecordNotas SecCalendar">
         <div class="col-xs-12 col-sm-12 col-md-12 imagEvaluition">
          <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/IcoPublich.png" alt="" data-toggle="modal" data-target="#myModal">
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

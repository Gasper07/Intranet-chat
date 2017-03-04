@extends('layouts.Template-admin')

@section('content')
<div class="container continerWithSite wirhSiteChatr">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionAdminContain">
    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1">
      
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 sectionCenterContenido">
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
<section class="container-fluid sectionAdminNotifiMensa continChatAdmins">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 captionPosteos captionChat">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ChatWithUser">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ChatWithUserDatas">
             <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
             <p class="colorBlack fontMiriamProSemiBold">Lissette Rivas</p>
           </div>
        </div>
        {{-- bloque chat --}}
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ChatCOntentUsers">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 userCOntentChat">
            
          </div>
        </div>
        {{-- bloque enviar Mensaje --}}
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ChatSendUsers">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 userCOntentSend">
            <form action="chatUsers_submit" method="get" accept-charset="utf-8">
              <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 contenTexaArea">
                 <textarea name="" placeholder="Escribe aquí"></textarea>           
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 contentActionSend">
                 <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/adjuntarIco.png" alt="">
                 <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/adjuntarFoto.png" alt="">
                 <input type="submit" value="Enviar">
              </div>
            </form>
            
          </div>
        </div>

      </div>

      <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 captionRecordNotas captionAllMessage aldeAdminChat">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 dataShoWmensajes">

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 FriendWithChat">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 vloqImageUser">
              <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 blqueDatasUser">
              <p class="colorBlack fontMiriamProSemiBold TitleUserMen">Lissette <span> dice: </span></p>
              <p class="cont_previwMenSage">no se te olvide llevar...</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 TimeSendMenssage">
             <p>6H</p>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 FriendWithChat">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 vloqImageUser">
              <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 blqueDatasUser">
              <p class="colorBlack fontMiriamProSemiBold TitleUserMen">Lissette <span> dice: </span></p>
              <p class="cont_previwMenSage">no se te olvide llevar...</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 TimeSendMenssage">
             <p>6H</p>
            </div>
          </div>

        </div>

        {{-- BLOQUE CALENDAR --}}
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 listConection lineChat">
        {{-- CAPTION USER LIVES --}}
          <div class="captionUsersInLive">
            <div class="ui accordion">
              <h3 class="fontMiriamProRegular"><span class='estusLive'>•</span>En Linea</h3>
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

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ChatListAllUser">
            {{-- FILTAR BUISQUEDA --}}
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 SearchSection">
              <form action="" class="formSearchChat">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="input-group">
                      <input type="text" class="form-control" >
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                      </span>
                    </div><!-- /input-group -->
                  </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
              </form>
            </div>

              {{-- CHATS ALLS --}}
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 AlluserReegitrados">

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 AlluserReegitradosPorBloque">
                <a href="">
                  <form action="chatUsers_submit" method="get" accept-charset="utf-8">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 vloqImageUser">
                      <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 blqueDatasUser">
                      <p class="colorBlack fontMiriamProSemiBold TitleUserMen">Lissette Rivas</p>
                    </div>
                  </form>                  
                </a>                
              </div>  
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 AlluserReegitradosPorBloque">
                <a href="">
                  <form action="chatUsers_submit" method="get" accept-charset="utf-8">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 vloqImageUser">
                      <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 blqueDatasUser">
                      <p class="colorBlack fontMiriamProSemiBold TitleUserMen">Lissette Rivas</p>
                    </div>
                  </form>                  
                </a>                
              </div>   
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 AlluserReegitradosPorBloque">
                <a href="">
                  <form action="chatUsers_submit" method="get" accept-charset="utf-8">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 vloqImageUser">
                      <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 blqueDatasUser">
                      <p class="colorBlack fontMiriamProSemiBold TitleUserMen">Lissette Rivas</p>
                    </div>
                  </form>                  
                </a>                
              </div>   
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 AlluserReegitradosPorBloque">
                <a href="">
                  <form action="chatUsers_submit" method="get" accept-charset="utf-8">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 vloqImageUser">
                      <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 blqueDatasUser">
                      <p class="colorBlack fontMiriamProSemiBold TitleUserMen">Lissette Rivas</p>
                    </div>
                  </form>                  
                </a>                
              </div>   
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 AlluserReegitradosPorBloque">
                <a href="">
                  <form action="chatUsers_submit" method="get" accept-charset="utf-8">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 vloqImageUser">
                      <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 blqueDatasUser">
                      <p class="colorBlack fontMiriamProSemiBold TitleUserMen">Lissette Rivas</p>
                    </div>
                  </form>                  
                </a>                
              </div>   
              
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 AlluserReegitradosPorBloque">
                <a href="">
                  <form action="chatUsers_submit" method="get" accept-charset="utf-8">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 vloqImageUser">
                      <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 blqueDatasUser">
                      <p class="colorBlack fontMiriamProSemiBold TitleUserMen">Lissette Rivas</p>
                    </div>
                  </form>                  
                </a>                
              </div>   

              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 AlluserReegitradosPorBloque">
                <a href="">
                  <form action="chatUsers_submit" method="get" accept-charset="utf-8">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 vloqImageUser">
                      <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 blqueDatasUser">
                      <p class="colorBlack fontMiriamProSemiBold TitleUserMen">Lissette Rivas</p>
                    </div>
                  </form>                  
                </a>                
              </div>   

            </div>
          </div>

          <div class="col-md-12 datPublich publishChatAdmin">
            <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/chatGrupo.png" alt="" data-toggle="modal" data-target="#myModalCHat">
            <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/addpubliImgae.png" alt="" data-toggle="modal" data-target="#myModal">
            <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/AnuncioPublicAdmin.png" alt="">
          </div>


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


    <!-- Modal chat -->
    <div class="modal fade" id="myModalCHat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog contPusblishDialogo" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="col-xs-12 col-sm-12 col-md-12 continPublish publichChat">
              <form action="home_submit" method="get" class="sectionPublichUser" accept-charset="utf-8">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionCreateCHat">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 selectActtions max example">
                    <select name="skills" multiple="" class="ui fluid dropdown">
                      <option value="">Agregar usuarios +</option>
                      <option value="angular">Angular</option>
                      <option value="css">CSS</option>
                      <option value="design">Graphic Design</option>
                      <option value="ember">Ember</option>
                      <option value="html">HTML</option>
                      <option value="ia">Information Architecture</option>
                      <option value="javascript">Javascript</option>
                      <option value="mech">Mechanical Engineering</option>
                      <option value="meteor">Meteor</option>
                      <option value="node">NodeJS</option>
                      <option value="plumbing">Plumbing</option>
                      <option value="python">Python</option>
                      <option value="rails">Rails</option>
                      <option value="react">React</option>
                      <option value="repair">Kitchen Repair</option>
                      <option value="ruby">Ruby</option>
                      <option value="ui">UI Design</option>
                      <option value="ux">User Experience</option>
                    </select>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 selectActtions max example">
                    <select name="skills" multiple="" class="ui fluid dropdown">
                      <option value="">Agregar por áreas</option>
                      <option value="angular">Angular</option>
                      <option value="css">CSS</option>
                      <option value="design">Graphic Design</option>
                      <option value="ember">Ember</option>
                      <option value="html">HTML</option>
                      <option value="ia">Information Architecture</option>
                      <option value="javascript">Javascript</option>
                      <option value="mech">Mechanical Engineering</option>
                      <option value="meteor">Meteor</option>
                      <option value="node">NodeJS</option>
                      <option value="plumbing">Plumbing</option>
                      <option value="python">Python</option>
                      <option value="rails">Rails</option>
                      <option value="react">React</option>
                      <option value="repair">Kitchen Repair</option>
                      <option value="ruby">Ruby</option>
                      <option value="ui">UI Design</option>
                      <option value="ux">User Experience</option>
                    </select>
                  </div>
                </div>

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
</section>
  
@endsection

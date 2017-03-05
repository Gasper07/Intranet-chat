@extends('layouts.Template-chat-users')

@section('content')
<div class="container continerWithSite">
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
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 userCOntentChat chat_box">    
            <div class="form-control messages_display">
              
            </div>    
          </div>
        </div>
        {{-- bloque enviar Mensaje --}}
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ChatSendUsers">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 userCOntentSend">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 contenTexaArea">
               <textarea name="" class="input_message form-control"  placeholder="Escribe aquí"></textarea>  
               {{-- <input type="text" class="input_name form-control" placeholder="Name" />            --}}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 contentActionSend">
               <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/adjuntarIco.png" alt="">
               <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/adjuntarFoto.png" alt="">
               <input type="submit" value="Enviar" class="input_send">
            </div>            
          </div>
        </div>

      </div>

      <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 captionRecordNotas captionAllMessage">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 dataShoWmensajes">

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 FriendWithChat">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 RemoveChatWithUser">
             <form action="chatUsers_submit" method="get" accept-charset="utf-8">
               <i class="fa fa-times" aria-hidden="true"></i>
             </form>
            </div>
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
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 RemoveChatWithUser">
             <form action="chatUsers_submit" method="get" accept-charset="utf-8">
               <i class="fa fa-times" aria-hidden="true"></i>
             </form>
            </div>
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

          <div class="col-md-12 datPublich">
            <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/IcoPublich.png" alt="" data-toggle="modal" data-target="#myModal">
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
</div>
@endsection

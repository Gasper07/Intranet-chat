@extends('layouts.Template-admin')

@section('content')

{{-- SECTION MENU INTERNO HOME --}}
<section class="container-fluid">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionMenuInterno menuInernoBoard">
    <ul>
        <li><a href="">Home</a></li>
        <li class="active"><a href="">Board</a></li>
        <li><a href="">Usuarios</a></li>
    </ul>
  </div>
</section>
<section class="container-fluid containernavNotifis">
  <nav class="navbar navbar-default navbar-static-top navbarHome BgYellow">
      <div class="container">
          <div class="navbar-header">

              <!-- Collapsed Hamburger -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>

              <!-- Branding Image -->
              {{-- <a class="navbar-brand" href="{{ url('/') }}">
                  {{ config('app.name', 'Laravel') }}
              </a> --}}
          </div>

          <div class="collapse navbar-collapse collapseMenuUser" id="app-navbar-collapse">
              <!-- Left Side Of Navbar -->
              <img class="paletaAdminBoard" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/ico-paleta.png" alt="Paleta-Colores">
              <ul class="centerNameUserMenu">
                  <li class="colorBlack fontMiriamProRegular">¡Hola! Lisseth</li>
              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right navulRIght">
                  <!-- Authentication Links -->
                  @if (Auth::guest())
                      <li><a href="{{ url('/login') }}">Login</a></li>
                      <li><a href="{{ url('/register') }}">Register</a></li>
                  @else
                      <li class="icosMenus">
                          <a href="#!">
                              <img src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/homeNotifiAdmin.png" class="img-responsive" alt="">                                    
                          </a>
                      </li>
                      <div class="ui dropdown dropdownSemantic notifiICos fontMiriamProRegular">
                        <a href="#!">
                            <img src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/campaniNotifiAdmin.png" class="img-responsive" alt="">
                            <div class="notifiCount">
                                <p>3</p>
                            </div>
                        </a>
                        <div class="menu">
                          <div class="item">New</div>
                          <div class="item">
                            <span class="description">ctrl + o</span>
                            Open...
                          </div>
                          <div class="item">
                            <span class="description">ctrl + s</span>
                            Save as...
                          </div>
                          <div class="item">
                            <span class="description">ctrl + r</span>
                            Rename
                          </div>
                          <div class="item">E-mail Collaborators</div>
                        </div>
                      </div>
                      <li class="dropdown uSerLogue colorBlackSuave fontMiriamProRegular">
                          <a href="#" class="dropdown-toggle colorBlackSuave" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu" role="menu">
                              <li>
                                  <a href="{{ url('/logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                          </ul>
                      </li>
                  @endif
              </ul>
          </div>
      </div>
  </nav>
</section>


{{-- SECTION BLOQUE NOTIFICACION Y MENSAJES --}}
<section class="container-fluid sectionAdminNotifiMensa sectionPostDats">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionBoard">
     <div class="container continerWithSite">
         <div class="row">
           <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7 captionPosteos">
               <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                   <div class="col-md-12">
                       <div class="ui feed uifeedAvatar">
                         <div class="event">
                           <div class="label">
                             <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/rostro-ico.jpg">
                           </div>
                           <div class="content">
                             <div class="summary">
                               <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                                 Leonardo
                               </a>
                               <div class="date fontMiriamProRegular colorGrisMediumSuave">
                                 1 Hour
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                       <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/bg-post.jpg" alt="post-user">
                       <div class="ui feed uifeedActions">
                         <div class="event">
                           <div class="label">
                             <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/etiqueta-ico.png">
                           </div>
                           <div class="content contLike">
                             <div class="summary">
                               <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                                 45 Valdecitos
                               </a>
                               <div class="date datePint fontMiriamProRegular colorGrisMediumSuave">
                                 <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/pines-ico.png">
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>

                       <div class="ui feed uifeedComnetUser">
                         <div class="event">
                           <div class="label">
                             <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/rostro-ico.jpg">
                           </div>
                           <div class="content">
                             <div class="summary">
                               <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                                 Leonardo
                               </a>
                               <div class="date fontMiriamProRegular colorGrisMediumSuave comentUser">
                                 Awww que bonito
                               </div>                           
                             </div>
                           </div>
                         </div>
                       </div>
                       <form class="ui form formComentUser">
                         <div class="field">
                           <input type="text" name="first-name" placeholder="Comentario">
                         </div>
                         {{-- <button class="ui button" type="submit">Submit</button> --}}
                       </form>
                   </div>

                   {{-- 2BLOQUE VACIONES --}}

                  <div class="col-md-12 typeEventEspecial">
                     <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/ico-vacaciones.jpg">
                     <h4 class="fontCovered">¡Felices vacaciones!</h4>
                     <h5 class="fontMiriamProRegular">Te desea Valdez Mobile</h5>
                     <div class="ui feed uifeedActions">
                       <div class="event">
                         <div class="label">
                           <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/etiqueta-ico.png">
                         </div>
                         <div class="content contLike">
                           <div class="summary">
                             <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                               45 Valdecitos
                             </a>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="ui feed uifeedComnetUser">
                       <div class="event">
                         <div class="label">
                           <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/rostro-ico.jpg">
                         </div>
                         <div class="content">
                           <div class="summary">
                             <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                               Leonardo
                             </a>
                             <div class="date fontMiriamProRegular colorGrisMediumSuave comentUser">
                              Hey que genial por fin se vienen las vaciones. Vamos todos a la playa!!
                             </div>                                                    
                           </div>
                         </div>
                         <a href="" class="removeComent">
                           <i class="fa fa-times" aria-hidden="true"></i>
                         </a>   
                       </div>
                     </div>
                     <form class="ui form formComentUser">
                       <div class="field">
                         <input type="text" name="first-name" placeholder="Comentario">
                       </div>
                       {{-- <button class="ui button" type="submit">Submit</button> --}}
                     </form>
                  </div>
                   
                   {{-- BLOCK TEXT --}}
                  <div class="col-md-12">
                      <div class="ui feed uifeedAvatar">
                        <div class="event">
                          <div class="label">
                            <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/rostro-ico.jpg">
                          </div>
                          <div class="content">
                            <div class="summary">
                              <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                                Leonardo
                              </a>
                              <div class="date fontMiriamProRegular colorGrisMediumSuave">
                                1 Hour
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="textCOment fontMiriamProRegular colorGrisMediumSuave">Awww que bonito loremp imsum loremp imsum loremp imsum loremp imsum</p>
                      <div class="ui feed uifeedActions">
                        <div class="event">
                          <div class="label">
                            <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/etiqueta-ico.png">
                          </div>
                          <div class="content contLike">
                            <div class="summary">
                              <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                                45 Valdecitos
                              </a>
                              <div class="date datePint fontMiriamProRegular colorGrisMediumSuave">
                                <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/pines-ico.png">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="ui feed uifeedComnetUser">
                        <div class="event">
                          <div class="label">
                            <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/rostro-ico.jpg">
                          </div>
                          <div class="content">
                            <div class="summary">
                              <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                                Leonardo
                              </a>
                              <div class="date fontMiriamProRegular colorGrisMediumSuave comentUser">
                                Awww que bonito
                              </div>                           
                            </div>
                          </div>
                        </div>
                      </div>
                      <form class="ui form formComentUser">
                        <div class="field">
                          <input type="text" name="first-name" placeholder="Comentario">
                        </div>
                        {{-- <button class="ui button" type="submit">Submit</button> --}}
                      </form>
                  </div>
               </div>

               {{-- BLOQUE LATERAL --}}
               <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                 <div class="col-md-12 typeAvisosPost">
                   <div class="ui icon message">
                     <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/ico-oportunidades.png">
                     <div class="content">
                       <p class="fontMiriamProRegular">Oportunidades de empleo, pagos, inicio de proyectos, apertura de sucursales, </p>
                     </div>
                   </div>
                 </div>

                 <div class="col-md-12 typeEventCumpleanos">
                   <a href="" class="removeComent">
                     <i class="fa fa-times" aria-hidden="true"></i>
                   </a> 
                   <div class="bgHappy">
                     <img class="img-responsive PeopleHappy" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png">
                   </div>
                   <h4 class="fontCovered">¡Feliz cumpleaños Miriam!</h4>
                   <h5 class="fontMiriamProRegular">Te desea Valdez Mobile</h5>
                   <div class="ui feed uifeedActions">
                     <div class="event">
                       <div class="label">
                         <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/etiqueta-ico.png">
                       </div>
                       <div class="content contLike">
                         <div class="summary">
                           <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                             45 Valdecitos
                           </a>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="ui feed uifeedComnetUser">
                     <div class="event">
                       <div class="label">
                         <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/rostro-ico.jpg">
                       </div>
                       <div class="content">
                         <div class="summary">
                           <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                             Leonardo
                           </a>
                           <div class="date fontMiriamProRegular colorGrisMediumSuave comentUser">
                            Hey que genial por fin se vienen las vaciones. Vamos todos a la playa!!
                           </div>                                                    
                         </div>
                       </div>
                       <a href="" class="removeComent">
                         <i class="fa fa-times" aria-hidden="true"></i>
                       </a>   
                     </div>
                   </div>
                   <form class="ui form formComentUser">
                     <div class="field">
                       <input type="text" name="first-name" placeholder="Comentario">
                     </div>
                     {{-- <button class="ui button" type="submit">Submit</button> --}}
                   </form>
               </div>

               <div class="col-md-12">
                   <div class="ui feed uifeedAvatar">
                     <div class="event">
                       <div class="label">
                         <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/rostro-ico.jpg">
                       </div>
                       <div class="content">
                         <div class="summary">
                           <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                             Leonardo
                           </a>
                           <div class="date fontMiriamProRegular colorGrisMediumSuave">
                             1 Hour
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                   <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/bg-post.jpg" alt="post-user">
                   <div class="ui feed uifeedActions">
                     <div class="event">
                       <div class="label">
                         <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/etiqueta-ico.png">
                       </div>
                       <div class="content contLike">
                         <div class="summary">
                           <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                             45 Valdecitos
                           </a>
                           <div class="date datePint fontMiriamProRegular colorGrisMediumSuave">
                             <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/pines-ico.png">
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>

                   <div class="ui feed uifeedComnetUser">
                     <div class="event">
                       <div class="label">
                         <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/rostro-ico.jpg">
                       </div>
                       <div class="content">
                         <div class="summary">
                           <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                             Leonardo
                           </a>
                           <div class="date fontMiriamProRegular colorGrisMediumSuave comentUser">
                             Awww que bonito
                           </div>                           
                         </div>
                       </div>
                     </div>
                   </div>
                   <form class="ui form formComentUser">
                     <div class="field">
                       <input type="text" name="first-name" placeholder="Comentario">
                     </div>
                     {{-- <button class="ui button" type="submit">Submit</button> --}}
                   </form>
               </div>
             </div>
            </div>

           <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5 captionRecordNotas">
             <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 bloqueRecordatorios">
               <h1 class="fontMiriamProRegular">Recordatorios</h1> 
               <div class="captionAvisos">
                 <h1 class="fontMiriamProSemiBold">Avisos</h1>
                 <p class="fontMiriamProRegular">Oportunidad de empleo para asesores. Interesados contactarse con Lic. Marta Hercúles</p>
               </div>
               <div class="captionPromos">
                 <p class="fontMiriamProSemiBold">Promociones de hoy</p>
                 <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/promo-public.jpg">
                 <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/promo-public.jpg">
               </div>

               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sectionPublichIcos publichBoard">
                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">          
                   <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/AnuncioPublicAdmin.png" alt="">
                 </div>
                 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                   <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/avatar/addpubliImgae.png" alt="" data-toggle="modal" data-target="#myModal">
                 </div>
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

    </div>

  </div>
</section>
  
@endsection

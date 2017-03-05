<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {!! Html::style('public/css/app.css') !!}
    <!-- Bootstrap CSS-->
    {!! Html::style('public/assets/css/bootstrap.css') !!}
    {{-- Style Menu Desplace --}}
    {!! Html::style('public/assets/css/menu/component.css') !!}
    <!-- Semantic Ui CSS -->
    {!! Html::style('public/assets/css/semantic.css') !!}
    <!-- STYLE FONT AWESOME -->
    {!! Html::style('public/assets/css/font-awesome.css') !!}

    <!-- Datepicker Files -->
    {!! Html::style('public/assets/datePicker/css/bootstrap-datepicker3.css') !!}
    {!! Html::style('public/assets/css/bootstrap-datetimepicker.min.css') !!}

    {{-- Main style --}}
    {!! Html::style('public/assets/css/main.css') !!}

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript" ></script> 
    <script src="//js.pusher.com/2.2/pusher.min.js" type="text/javascript" type="text/javascript" ></script>  
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.3.0/bootbox.min.js" type="text/javascript" ></script>    
    <script type="text/javascript"> 
    // Enable pusher logging - don't include this in production //Pusher.log=function(message) {  
    //if (window.console && window.console.log) {     
    //window.console.log(message);    
    //} //};    
    </script>   
    
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="bgUser">
    <div id="app">
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
                    <img src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/ico-paleta.png" alt="Paleta-Colores">
                    <ul id="gn-menu" class="nav navbar-nav gn-menu-main">
                        <li class="gn-trigger">
                            <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
                            <nav class="gn-menu-wrapper">
                                <div class="gn-scroller">
                                    <ul class="gn-menu">
                                        <li class="gn-search-item">
                                            <a href="">
                                             <img class="img-responsive" src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/profile-user-circle.png" alt="">
                                             <p class="colorBlack fontMiriamProSemiBold">Lissette Rivas</p>                            
                                            </a>
                                        </li>
                                        <li class="bloquesMarca marEntrada">
                                            <a class="BgYellow fontMiriamProSemiBold colorBlackSuave">Marcar entrada</a>
                                        </li>
                                        <li class="bloquesMarca marSalida">
                                            <a class="BgYellow fontMiriamProSemiBold colorBlackSuave">Marcar salida</a>
                                        </li>
                                        <li class="bloquesMarca accionesPerfil">
                                            <a class="fontMiriamProRegular colorGrisMediumSuave lineJustify">Editar perfil</a>
                                        </li>
                                        <li class="bloquesMarca accionesPerfil">
                                            <a class="fontMiriamProRegular colorGrisMediumSuave lineJustify">Mensajes privados</a>
                                        </li>
                                        <li class="bloquesMarca accionesPerfil">
                                            <a class="fontMiriamProRegular colorGrisMediumSuave lineJustify borderLineGris">Ver galerias</a>
                                        </li>
                                        <li class="bloquesMarca accionesPerfil accionesBussines">
                                            <a class="fontMiriamProRegular colorGrisSuave lineJustify">Manual de empleado</a>
                                        </li>
                                        <li class="bloquesMarca accionesPerfil accionesBussines">
                                            <a class="fontMiriamProRegular colorGrisSuave lineJustify">Reglamento institucional</a>
                                        </li>
                                        <li class="bloquesMarca accionesPerfil accionesBussines">
                                            <a class="fontMiriamProRegular colorGrisSuave lineJustify">Ayuda</a>
                                        </li>
                                    </ul>
                                </div><!-- /gn-scroller -->
                            </nav>
                        </li>
                    </ul>
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
                                    <img src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/house-ido.png" class="img-responsive" alt="">                                    
                                </a>
                            </li>
                            <div class="ui dropdown dropdownSemantic notifiICos fontMiriamProRegular">
                              <a href="#!">
                                  <img src="http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/public/assets/images/notify-ico.png" class="img-responsive" alt="">
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

        @yield('content')
    </div>

    <!-- Scripts -->
    {!! Html::script('public/js/app.js') !!}
    {!! Html::script('public/assets/js/menu/classie.js') !!}
    {!! Html::script('public/assets/js/menu/gnmenu.js') !!}

    <script>
        new gnMenu( document.getElementById( 'gn-menu' ) );
    </script>

    <!-- Semantic Ui CSS -->
    {!! Html::script('public/assets/js/semantic.js') !!}

    <script>
        $('.dropdownSemantic')
          .dropdown({
            transition: 'drop'
          });

   </script>
   <script>
      $('.button')
        .popup({
          inline: true
        });

      $('.rating')
        .rating({
          maxRating: 5,
          disable: false,
        });
      $('.rating')
       .rating('disable')
      ;

      $('.accordion')
        .accordion({
          selector: {
            trigger: '.title div .fa-angle-down'
          }
        })
      ;
   </script>

   {!! Html::script('public/assets/js/jquery-1.11.1.min.js') !!}
   {!! Html::script('public/assets/js/moment.js') !!}
   {!! Html::script('public/assets/js/bootstrap-datetimepicker.min.js') !!}
   <script type="text/javascript">
       $(function () {
           $('#datetimepicker12').datetimepicker({
               inline: true,
               sideBySide: true
           });
       });
   </script>

   {!! Html::script('public/assets/datePicker/js/bootstrap-datepicker.js') !!}
   <script type="text/javascript">
      $('#sandbox-container .input-daterange').datepicker({
          format: "yyyy-mm-dd",
          autoclose: true
      });
   </script>

   <script type="text/javascript">      
     // Enter your own Pusher App key
      var pusher=new Pusher('1699db0a3a3aec4d93c6');
      // Enter a unique channel you wish your users to be subscribed in.
      var channel=pusher.subscribe('test_channel');
      channel.bind('my_event', function(data) {
        // Add the new message to the container
        $('.messages_display').append('<p class="message_item">' + data.message + '</p>');
        // Display the send button
        $('.input_send_holder').html('<input type="submit" value="Send" class="btn btn-primary input_send" />');
        // Scroll to the bottom of the container when a new message becomes available
        $(".messages_display").scrollTop($(".messages_display")[0].scrollHeight);
      });
     
     // AJAX request
     function ajaxCall(ajax_url, ajax_data) {
      $.ajax({
        type: "POST",
        url: ajax_url,
        dataType: "json",
        data: ajax_data,
        success: function(response, textStatus, jqXHR) {
          console.log(jqXHR.responseText);
        },
        error: function(msg) {}
      });
     }
   
     // Trigger for the Enter key when clicked.
     $.fn.enterKey=function(fnc) {
      return this.each(function() {
        $(this).keypress(function(ev) {
          var keycode=(ev.keyCode ? ev.keyCode : ev.which);
          if (keycode == '13') {
            fnc.call(this, ev);
          }
        });
      });
     }
   
     // Send the Message
     $('body').on('click', '.chat_box .input_send', function(e) {
      e.preventDefault();
      
      var message=$('.chat_box .input_message').val();
      var name=$('.chat_box .input_name').val();
      
      // Validate Name field
      if (name === '') {
        bootbox.alert('<br /><p class="bg-danger">Please enter a Name.</p>');
      
      } else if (message !== '') {
        // Define ajax data
        var chat_message={
          name: $('.chat_box .input_name').val(),
          message: '<strong>' + $('.chat_box .input_name').val() + '</strong>: ' + message
        }
        // Send the message to the server
        ajaxCall('message_relay.php', chat_message);
        
        // Clear the message input field
        $('.chat_box .input_message').val('');
        // Show a loading image while sending
        $('.input_send_holder').html('<input type="submit" value="Send" class="btn btn-primary" disabled /> &nbsp;<img src="loading.gif" />');
      }
     });
     
     // Send the message when enter key is clicked
     $('.chat_box .input_message').enterKey(function(e) {
      e.preventDefault();
      $('.chat_box .input_send').click();
     });
   </script>
</body>
</html>

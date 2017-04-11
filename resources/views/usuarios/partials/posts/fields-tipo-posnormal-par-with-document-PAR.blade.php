@foreach($JoinTableUserPosts as $dataUSe)
  @if($PostPar['id_usuario'] == $dataUSe->id_usuario)
    <div class="col-md-12">
        <div class="ui feed uifeedAvatar">
          <div class="event">
            <div class="label dataPrubeIm" style="background-image: url('http://127.0.0.1/Sites/Intranet-chat/public/assets/profiles/{{ $dataUSe->foto }}')">
            </div>
            <div class="content">
              <div class="summary postPosss">
                <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                  {{ $dataUSe->name }}
                </a>
                <div class="date fontMiriamProRegular colorGrisMediumSuave">
                  @if($PostPar['id_tipo_publicacion'] == 2)
                    <img class="img-responsve alertPost" src="http://127.0.0.1/Sites/Intranet-chat/public/assets/images/icons/alertico.png" alt="">
                  @endif
                  <p class="gasper">{{ $carbon = new \Carbon\Carbon() }}</p>
                  <p class="gasper">{{ $fechaActual = $carbon->now()->format('Y-m-d') }}</p>
                  <p class="gasper">{{ $horaActual = $carbon->now()->format('H:i:s') }}</p>
                  <p class="gasper">{{ $date = new \Carbon\Carbon($PostImpar['created_at']) }}</p>
                  <p class="gasper">{{ $dayPost = $date->format('Y-m-d') }}</p>
                  <p class="gasper">{{ $HoraPost = $date->format('H:i:s') }}</p>
                  @if($fechaActual == $dayPost)
                     {{ date('H:i',strtotime($horaActual) - strtotime($HoraPost)) }}
                   @else
                     {{ $dayPost }}
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <p class="textCOment fontMiriamProRegular colorGrisMediumSuave">{{ $PostPar['descripcion'] }}</p>
        @foreach($PostPar['documentos'] as $docume)
          <a href="http://127.0.0.1/Sites/Intranet-chat/public/assets/images/documents/{{ $docume }}" class="dataDpcuCl" download="{{ $docume }}">
            <img class="img-responsive claa__cupo" src="http://127.0.0.1/Sites/Intranet-chat/public/assets/images/bogIcoDocuments.png" />
          </a>
        @endforeach
        <div class="ui feed uifeedActions">
          <div class="event">
            <div class="label">
              <img class="img-responsive" src="http://127.0.0.1/Sites/Intranet-chat/public/assets/images/etiqueta-ico.png">
            </div>
            <div class="content contLike">
              <div class="summary">
                <p class="gasper"> {{$banderaLikes7 = 0}}</p>
                @foreach($Likes as $keyLikes => $likes)
                  @if( $PostPar['id'] == $likes['id_publicacion'])
                    <p class="gasper"> {{ $banderaLikes7 = $banderaLikes7+1}}</p>
                    <a class="user colorGrisMediumSuave fontMiriamProSemiBold clkLike">
                      @if(in_array(Auth::user()->id, $likes['id_usuarios_likes']))
                        Atí y a {{ $likes['total_likes']-1 }} les gusta
                        <input type="hidden" class="dislike" name="dislike_action_id" value="{{ Auth::user()->id }}">
                      @else
                        {{ $likes['total_likes']}} Me gusta
                      @endif    
                      <input type="hidden" class="dislike" name="dislike_action_id" value="">
                      <input type="hidden" class="idUseLike" name="like_action_id" value="{{ Auth::user()->id }}">
                      <input type="hidden" class="idPubliLike" name="like_publicacion_id" value="{{ $PostPar['id'] }}">
                    </a>
                  @endif
                @endforeach
                @if($banderaLikes7 == 0)
                  <a class="user colorGrisMediumSuave fontMiriamProSemiBold clkLike">
                    0 Me gusta
                    <input type="hidden" class="idUseLike" name="like_action_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" class="idPubliLike" name="like_publicacion_id" value="{{ $PostPar['id'] }}">
                  </a>
                @endif
                <div class="date datePint fontMiriamProRegular colorGrisMediumSuave clickPostPerson">
                  <img class="img-responsive" src="http://127.0.0.1/Sites/Intranet-chat/public/assets/images/pines-ico.png">
                  <input type="hidden" class="idUserPostPersona" name="like_action_id" value="{{ Auth::user()->id }}">
                  <input type="hidden" class="idPostPersona" name="like_publicacion_id" value="{{ $PostPar['id'] }}">
                </div>
                                                
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 captionlokComen">
          @foreach($Coments as $datComents)
            @if($PostPar['id'] == $datComents->id_publicacion)
              <div class="ui feed uifeedComnetUser">
                <div class="event">
                  <div class="label dataPrubeIm" style="background-image: url('http://127.0.0.1/Sites/Intranet-chat/public/assets/profiles/{{ $datComents->foto }}')">
                  </div>
                  <div class="content">
                    <div class="summary">
                      <a class="user colorGrisMediumSuave fontMiriamProSemiBold">
                        {{ $datComents->name }}
                      </a>
                      <div class="date fontMiriamProRegular colorGrisMediumSuave comentUser">
                        {{ $datComents->comentarios }}
                      </div>                           
                    </div>
                  </div>
                </div>
              </div>
            @endif
          @endforeach
        </div>
        <form class="ui form formComentUser">
          <div class="field">
            <textarea name="comentario_post" required></textarea>
            <input type="hidden" class="iduserComent" name="coment_action_id" value="{{ Auth::user()->id }}">
            <input type="hidden" class="idDataPost" name="data_id_post" value="{{ $PostPar['id'] }}">
          </div>
          <a href="" class="dataComenyt"><p>Comentar</p></a>
        </form>
    </div>
  @endif
@endforeach
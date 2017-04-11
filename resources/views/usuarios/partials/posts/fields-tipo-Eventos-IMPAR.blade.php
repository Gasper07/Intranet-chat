@foreach($JoinTableUserPosts as $dataUSe)
  @if($PostImpar['id_usuario'] == $dataUSe->id_usuario)
  @foreach ($eventosNOtify as $keyeventosNOtify) 
    @if($PostImpar['id_tipo_evento'] == $keyeventosNOtify->id)
      <div class="col-md-12 typeAvisosPost">
        <div class="ui icon message" style="background: {{ $keyeventosNOtify->color_evento }} !important;border-color: {{ $keyeventosNOtify->color_evento }} !important;">
          <img class="img-responsive" src="http://127.0.0.1/Sites/Intranet-chat/public/assets/images/{{ $keyeventosNOtify->img_notify }}">
          <div class="content">
            <p class="fontMiriamProRegular">{{ $keyeventosNOtify->descripcion_evento }}</p>
          </div>
        </div>
      </div>
    @endif
  @endforeach
    
  @endif
@endforeach
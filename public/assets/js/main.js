
//******* Action selec user for chat
// *********
jQuery(document).ready(function($) {
	$('.columnChatss>.AlluserReegitradosPorBloque>a').click(function(event) {
		// Get data user select
		var dataIdUser = $(this).data('iduserchat');
		var dataNameUser = $(this).find('.blqueDatasUser>p.TitleUserMen').text();
		var dataFotoUser = $(this).find('.vloqImageUser>img').attr('src');

		// Asigana valor para chat, del user seleccionado
		$('.ChatWithUser>.ChatWithUserDatas>img').attr('src',dataFotoUser);
		$('.ChatWithUser>.ChatWithUserDatas>p').text(dataNameUser);
		$('.DatIdUserChat').val(dataIdUser);

		$.ajaxSetup({
		    headers: { 'X-CSRF-Token': $('input[name=_token]').attr('value') }
		});

		$.ajax({
		    url: '/chatUsers',
		    type: 'POST',
		    headers: { 'X-CSRF-Token': $('input[name=_tokens]').attr('value') },
		    data: "idForChat="+dataIdUser+"&_tokens=YIIXEDMNztyGoKqDrX7B9V20THP2hP0fAZFeiK3L",
		    dataType: 'json',
		    success: function(result, index, value, data) {
		    	// Iniciamos contador
	    		var elem = 1;
		    	$.each(result, function(index, element) {
		    		// Obtenemos los datos
		    		elem = elem+1;
		    		var dataFecha = element.fecha_conver;
		    		var dataWithUserSend = element.userSend;
		    		var dataWithUserReceive = element.userReceive;
		    		var arrayMensagge = element.mensages;
		    		var mensages = '';
		    		/**** si son mensajes que el user envio, lo coloca en un extremo, si no lo coloca al otro
		    		extremo****/
    			    $('.form-control.messages_display.col-xs-12.col-sm-6.col-md-6.col-lg-6.chatOfUser').append('<div class="col-lg-12 MensaGedate getUserSend getSenMenIds'+elem+'"><div class="col-lg-12 GetAllMensage">'+dataFecha+'</div></div>');	
	    			if(dataWithUserSend == 1){
		  	    		$.each(arrayMensagge, function(index, element) {
		  	    			mensages = element;
		  	    			$('.getSenMenIds'+elem+'>.GetAllMensage').append('<div class="col-lg-12 wrapMensage envMensga'+elem+'"><p>'+mensages+'</p></div>');
		      			});
	    			}else{    				  
			    	  $.each(arrayMensagge, function(index, element) {
			    	    mensages = element;
			    		$('.getSenMenIds'+elem+'>.GetAllMensage').append('<div class="col-lg-12 wrapMensage envMensgaRce'+elem+'"><p>'+mensages+'</p></div>');
		    		  });
	    			}
		    		
		    	});

		        console.log('almacenado');
		    },
		    error: function() {
		        console.log('Error');
		    }
		}); 

	});
});
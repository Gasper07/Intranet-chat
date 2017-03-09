
//******* Action selec user for chat
// *********
jQuery(document).ready(function($) {
	$('.columnChatss>.AlluserReegitradosPorBloque>a, .col-xs-12.col-sm-12.col-md-12.col-lg-12.FriendWithChat>a').click(function(event) {
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
		    url: 'http://app-fd8d1fda-4b1b-423f-aa23-358cd43f64b3.cleverapps.io/chatUsers',
		    type: 'POST',
		    headers: { 'X-CSRF-Token': $('input[name=_tokens]').attr('value') },
		    data: "idForChat="+dataIdUser+"&_tokens=YIIXEDMNztyGoKqDrX7B9V20THP2hP0fAZFeiK3L",
		    dataType: 'json',
		    success: function(result, index, value, data) {
		    	// Iniciamos contador
	    		var elem = 1;
	    		$('.col-xs-12.col-sm-12.col-md-12.col-lg-12.userCOntentChat.chat_box>div').remove();
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
    			    
	    			if(dataWithUserSend == 1){
	    			  $('.col-xs-12.col-sm-12.col-md-12.col-lg-12.userCOntentChat.chat_box').append('<div class="col-lg-12 MensaGedate getUserSend getSenMenIds'+elem+'">'+dataFecha+'</div>');	
		  	    		$.each(arrayMensagge, function(index, element) {
		  	    			mensages = element;
		  	    			$('.getSenMenIds'+elem+'').append('<div class="col-lg-12 wrapMensage envMensga'+elem+'"><p>'+mensages+'</p></div>');
		      			});
	    			}else{
					  $('.col-xs-12.col-sm-12.col-md-12.col-lg-12.userCOntentChat.chat_box').append('<div class="col-lg-12 MensaGedate getUserReceive getSenMenIds'+elem+'">'+dataFecha+'</div>');	
			    	  $.each(arrayMensagge, function(index, element) {
			    	    mensages = element;
			    		$('.getSenMenIds'+elem+'').append('<div class="col-lg-12 wrapMensage envMensgaRce'+elem+'"><p>'+mensages+'</p></div>');
		    		  });
	    			}
		    		
		    	});

		        console.log('almacenado3');
		    },
		    error: function() {
		        console.log('Error');
		    }
		}); 

	});
});

// FILTER BUSQUEDA CANDIDATE CHAT

$(document).ready(function () {
    (function ($) {
        $('#filtrar').keyup(function () {
            var rex = new RegExp($(this).val(), 'i');
            $('.AlluserReegitradosPorBloque>a').hide();
            $('.AlluserReegitradosPorBloque>a').filter(function () {
                return rex.test($(this).text());
            }).show();
        })
    }(jQuery));
});
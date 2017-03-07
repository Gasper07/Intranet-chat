
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
	    		var elem = result.length;
		    	$.each(result, function(index, element) {
		    		var dataFecha = element.fecha_conver;
		    		var dataWithUserSend = element.userSend;
		    		var dataWithUserReceive = element.userReceive;
		    		var arrayMensagge = element.mensages;
		    		var mensages = '';
	    			if(dataWithUserSend == 1){
	    			  // $('.form-control.messages_display.col-xs-12.col-sm-6.col-md-6.col-lg-6.chatMy').append('<div class="col-lg-12 MensaGedate getUserSend getSenMenIds'+elem+'"><div class="col-lg-12 GetAllMensage"></div></div>');	
	    			  
	    			}else{
    				  // $('.form-control.messages_display.col-xs-12.col-sm-6.col-md-6.col-lg-6.chatOfUser').append('<div class="col-lg-12 MensaGedate getUserSend"><div class="col-lg-12 GetAllMensage"><div class="col-lg-12 wrapMensage"><p>'+mensages+'</p></div></div></div>');	
	    			}
		    		$.each(arrayMensagge, function(index, element) {
		    			mensages = element;
		    			
		    			console.log(mensages);
	    			});
		    		console.log(elem);
		    		console.log(dataFecha);
		    		console.log(arrayMensagge);
		    	});

		        console.log('almacenado');
		    	// $.each(result, function(index, element) {
		    	// 	var data = jQuery.parseJSON(element);
		    	// 	var dateMensagge = data.fecha_conver;
		    	// 	console.log(dateMensagge);
		    	// });
		    },
		    error: function() {
		        console.log('Error');
		    }
		}); 

	});
});
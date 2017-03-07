
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
		    	$.each(result, function(index, element) {
		    		var dataFecha = element.fecha_conver;
		    		var arrayMensagge = element.mensages;
		    		var mensages = '';
		    		$.each(arrayMensagge, function(index, element) {
		    			mensages = element;
	    			});
		    		console.log(dataFecha);
		    		console.log(arrayMensagge);
		    		console.log(mensages);
		    	});

		        console.log('almacenado dea');

    	    	$.each(result, function(index, element) {
    	    		var dataFecha2 = element.fecha_conver;
    	    		var arrayMensagge2 = element.mensages;
    	    		var mensages2 = '';
    	    		$.each(arrayMensagge2, function(index, element) {
    	    			mensages2 = element;
        			});
    	    		console.log(dataFecha2);
    	    		console.log(arrayMensagge2);
    	    		console.log(mensages2);
    	    	});
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
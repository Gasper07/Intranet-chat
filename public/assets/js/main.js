
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
		    	var columns_array=jQuery.parseJSON(result);
		    	columns=columns_array[0];
		    	columns1=columns_array[0];
		    	$.each(result, function(i, item){
	              var data21 = item.result1;
	              var data22 = item.result2;
	              console.log(data21);
	              console.log(data22);
	            });

		    	// $.each(result, function(index, element) {
		    	// 	var vieElname = element;
		    	// 	var vieIn = index;
		    	// 	console.log(vieElname);
		    	// 	console.log(vieIn);
		    	// });
		        console.log(columns);
		        console.log(columns1);
		    },
		    error: function() {
		        console.log('Error');
		    }
		}); 

	});
});
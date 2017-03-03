// For Admin Home
jQuery(document).ready(function($) {
	$('.col-xs-12.col-sm-1.col-md-1.col-lg-1.checkMEnsagge>form>input').click(function(event) {
		var parent = $(this).parent().parent().parent();
		$(parent).addClass('bg-selectMensage');
		$('.col-xs-12.col-sm-2.col-md-2.col-lg-2.chexAllsMensages>div.dwropOptionMensgae').addClass('dwropOptionMensgaeActive');
	});
});

// For Admin Sugerencias

jQuery(document).ready(function($) {
	$('.col-xs-12.col-sm-1.col-md-1.col-lg-1.checkMEnsagge>form>input').click(function(event) {
		var parent = $(this).parent().parent().parent();
		$(parent).addClass('bg-selectMensage');
		$('.col-xs-12.col-sm-10.col-md-10.col-lg-10.textAllsMensages.dataSguerenciaD>.col-xs-12.col-sm-4.col-md-6.col-lg-6.dropsetionMensgae>.dropdown.dwropOptionMensgae').addClass('dwropOptionMensgaeActive');
	});
});


// Events Drap & Drop Seccion Docuemnts

function drag(parrafo, evento) {
	evento.dataTransfer.setData('Text', parrafo.id);
	console.log(evento.srcElement.currentSrc); // obtengo el nombre del archivo
}

function drop(contenedor, evento) {
	var id = evento.dataTransfer.getData('Text');
	contenedor.appendChild(document.getElementById(id));
	evento.preventDefault();
}


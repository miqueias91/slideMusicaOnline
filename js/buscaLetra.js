var key = "5e8ef503810fa95cab986fdbd7605c04";
$(".buscar_1").click(function(){
	if ($('#pesquisa').val() !== '') {
    	    $.ajax({
                url: "https://api.vagalume.com.br/search.excerpt?apikey="+key+"&q="+$('#pesquisa').val()+"&limit=100",
                dataType: 'JSON', // TIPO DE RETORNO
                type: 'GET', // TIPO DE ENVIO POST OU GET
                data: {
                    'apikey': key,
                    'q': $('#pesquisa').val()
                },

                beforeSend: function(a) {
                    a.overrideMimeType("text/plain;charset=\"UTF-8\"");

                },
                error: function() {
                    alert("Não foi possível realizar essa busca.");
                    // window.location.reload();
                },
                success: function(result) {
	                for (var i = 0; i < result.response.docs.length; i++) {
		      			$('#resultado_busca').append(
			        		"| <a href='apresentacao.php?artist="+result.response.docs[i]['band']+"&song="+result.response.docs[i]['title']+"' class='apresentacao' titulo='"+result.response.docs[i]['title']+"' autor='"+result.response.docs[i]['band']+"'>"+result.response.docs[i]['title']+" - "+result.response.docs[i]['band']+"</a> "
			        	);
	      			}
					// $(".apresentacao").click(function(){
					// 	var artist = $(this).attr('autor');
					// 	var song = $(this).attr('titulo');

				 //    	window.open('apresentacao.php?artist='+artist+'&song='+song, '_blank');
					// });
                },
            });
	}
});

$(".buscar_2").click(function(){
	if ($('#musica').val() !== '' && $('#cantor').val() !== '') {	
		var artist = $('#cantor').val();
		var song = $('#musica').val();
    	window.open('apresentacao.php?artist='+artist+'&song='+song, '_blank');
	}
	else{
		alert('Para usar essa busca o nome da música e cantor precisam estar preenchidos.');
	}
});
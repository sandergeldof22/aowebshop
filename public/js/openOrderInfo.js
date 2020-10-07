	/*
	*Onderstaande Jquery funcie is voor de Orders pagina.
	*na klikken op de naam van een bestelling dan opent hij voor meer gegevens, of sluit hij
	*Dit gebeurt door middel van een display van none naar display te zetten en vice versa
	*Door middel van de extra informatie weg te halen door subtract te gebruiken blijft er een ID over.
	*Hij vergelijkt het ID van het klikbare element met het bestelling id.
	*Als deze gelijk zijn toggle dan tussen display none en block.
	*/

	$(document).ready(function(){
		$('.bestelling-klik').each(function() {
			$(this).css('display', 'none');
		});

		$('[id^="informatie-"]').click(function() {
			infoId = ($(this).attr('id').substr('11'));	
			$('.bestelling-klik').each(function(i){
				if ($(this).attr('id').substr('11') == infoId) {
					$(this).toggle();
				}
			});
		});
	});
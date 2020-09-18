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
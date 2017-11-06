/*ovdje se nalaze funcije za javascript/jquery*/

$(document).ready(function() { 

	$('.gallery').each(function() {
	    $(this).magnificPopup({
	      delegate: 'a',
	      type: 'image',
	      tLoading: 'Loading image #%curr%...',
	      mainClass: 'mfp-img-mobile gallery-img',
	      gallery: {
	      enabled: true,
	      navigateByImgClick: true,
	      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
	      }
	    });
	});

	$('#toggle').click(function(){
	    $(this).next().slideToggle();
	});
		
	var aktivni_gumb = "";
	$('.tab-holder > a').click(function(){

		var tabId = $(this).attr("id");
		
		$(".tabs-container").slideUp(500); // sakrij sve hidden desc divove
		$("#"+ tabId + "-container li a").removeClass("active-tab");

		if ($(this).hasClass("aktivni")){
	   		$(".tab-holder > a").removeClass("aktivni");
	   	} else {
	   		$(".tab-holder > a").removeClass("aktivni");
	   		$(this).addClass("aktivni");
	   	}

	   	if (aktivni_gumb != tabId) {

	   		$("#"+ tabId + "-container").slideDown(500); // prikazi onaj na kojeg je kliknuti

	   		aktivni_gumb = tabId;
		} else {
			aktivni_gumb = "";
		}
	});
});


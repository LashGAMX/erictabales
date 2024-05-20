var mySwiper 
$(document).ready(function () {
    $('#btnIntroduccion').click(function(){
		window.location.href = base_url+"/introduccion";
	});
    mySwiper = new Swiper('.swiper-container', {
        // Configuración de Swiper
    });
});

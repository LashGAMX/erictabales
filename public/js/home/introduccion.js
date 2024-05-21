var mySwiper
$(document).ready(function () {
  $('#btnIntroduccion').click(function(){
      window.location.href = base_url + "/introduccion";
  });

  // Inicializar Swiper cuando el documento esté listo
  mySwiper = new Swiper('.swiper', {
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
  },
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
  scrollbar: {
      el: '.swiper-scrollbar',
  },
  on: {
      init: function () {
          console.log('Swiper initialized');
      },
  },
  });

  $('#menu').click(function () {
    mySwiper.slideTo(2)
  });
  $('#menu7').click(function () {
    window.location.href = base_url+"/obras";
  });
  $('.homeIcon').click(function () {
    mySwiper.slideTo(0)
  });
});

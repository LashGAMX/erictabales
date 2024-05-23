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
    retrunSlider(2)
  });
  $('#menu2').click(function () {
    retrunSlider(4)
  });
  $('#menu3').click(function () {
    retrunSlider(12)
  });
  $('#menu4').click(function () {
    retrunSlider(32)
  });
  $('#menu7').click(function () {
    window.location.href = base_url+"/obras";
  });
  // $('#homeIcon').click(function () {
  //   retrunSlider(0)
  // });
  $('.homeIcon').click(function () {
    retrunSlider(0)
  });


});
function retrunSlider(id){
  const swiperEl = document.querySelector('swiper-container');
  // const buttonEl = document.querySelector('button');

  swiperEl.swiper.slideTo(id);
}

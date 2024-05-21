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
  $('#menu2').click(function () {
    mySwiper.slideTo(5)
  });
  $('#menu7').click(function () {
    window.location.href = base_url+"/obras";
  });
  $('.homeIcon').click(function () {
    mySwiper.slideTo(0)
  });


});

  // script.js
  document.addEventListener('DOMContentLoaded', (event) => {
    const modal = document.getElementById("myModal");
    const btn = document.getElementById("btnVideo");
    const span = document.getElementsByClassName("close")[0];
  
    btn.onclick = function() {
        modal.style.display = "flex";
    }
  
    span.onclick = function() {
        modal.style.display = "none";
    }
  
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    });
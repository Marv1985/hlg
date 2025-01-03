/*--------------------------------------------------------------*\
      MOUSE HOVER FUNCTION IN JS/GLOBAL/MOUSE_ANIMATION.JS
\*--------------------------------------------------------------*/

const swiper_with_hover_cursor = () => {

    const swiper_with_hover_cursors = document.querySelectorAll('.swiper_with_hover_cursor .swiper');
  
    if(!swiper_with_hover_cursors) {
        return
    };
    
  /*------------------------------------*\
      SWIPER WITH HOVER CURSOR
  \*------------------------------------*/

  swiper_with_hover_cursors.forEach(swiper_with_hover_cursor => {
    
    const prevButton = swiper_with_hover_cursor.querySelector('.swiper-button-prev');
    const nextButton = swiper_with_hover_cursor.querySelector('.swiper-button-next');

    const hover_swiper = new Swiper(swiper_with_hover_cursor, {
      spaceBetween: 30,
      loop: true,
      speed: 1000,                                                              
      slidesPerView: 'auto',
      centeredSlides: true,
      updateOnWindowResize: true,
      navigation: {
        nextEl: nextButton,
        prevEl: prevButton,
      },
      autoplay: {
        delay: 3000,
      },
      breakpoints: {
        650: {
          slidesPerView: '1.4',
          spaceBetween: 50
        },
      }
    });
  });
};
  
  // window.addEventListener("DOMContentLoaded", swiper_with_hover_cursor);
  // for acf blocks
  window.addEventListener("load", swiper_with_hover_cursor);
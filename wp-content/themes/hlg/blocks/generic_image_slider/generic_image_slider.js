const generic_image_slider = () => {

  const generic_image_slider = document.querySelector('.generic_image_slider');

  if(!generic_image_slider) {
      return
  };

  const team_swiper = new Swiper(generic_image_slider, {
      spaceBetween: 20,
      loop: true,
      speed: 5000,                                                              
      slidesPerView: 'auto',
      updateOnWindowResize: true,
      // centeredSlides: true,
      autoplay: {
        delay: 0
      },
      breakpoints: {
        600: {
          spaceBetween: 50,
          speed: 8000, 
        },
      },
      allowTouchMove: false
    });
};

window.addEventListener("DOMContentLoaded", generic_image_slider);
// for acf blocks
window.addEventListener("load", generic_image_slider);
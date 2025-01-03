const team_slider = () => {
  const team_slider = document.querySelector('.team_slider_parent')

  if (!team_slider) return

  const swiper = team_slider.querySelector(".team_swiper")
  const swiper_wrapper = swiper.querySelector(".swiper-wrapper")

  const team_swiper = new Swiper(swiper, {
    grabCursor: true,
    spaceBetween: 10,
    loop: true,
    speed: 4000,
    slidesPerView: 'auto',
    centeredSlides: true,
    updateOnWindowResize: true,
    autoplay: {
      delay: 1, 
      disableOnInteraction: false,
    },
    breakpoints: {
      600: {
        spaceBetween: 20,
        speed: 5000,
      },
    }
  });

}

window.addEventListener("DOMContentLoaded", team_slider);

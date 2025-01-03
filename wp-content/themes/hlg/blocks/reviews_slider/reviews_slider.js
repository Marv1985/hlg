const reviews_slider = () => {

    const reviews_slider = document.querySelectorAll('.reviews_slider_parent');
  
    if(!reviews_slider) {
        return
    };

  /*--------------------------------------------------*\
      REMOVE GOOGLE REVIEWS SVG PATH FILL ATTRIBUTES
  \*--------------------------------------------------*/

  const stars = document.querySelectorAll('.wp-star svg path')

  stars.forEach(star => {
    // Remove the fill attribute
    star.removeAttribute('fill');
  });
  
    
  /*------------------------------------*\
      REVIEWS SLIDER
  \*------------------------------------*/
  reviews_slider.forEach(sliderParent => {

    const prevButton = sliderParent.querySelector('.swiper-button-prev');
    const nextButton = sliderParent.querySelector('.swiper-button-next');
    const pagination = sliderParent.querySelector('.swiper-pagination');

    const team_swiper = new Swiper(sliderParent.querySelector(".reviews_slider"), {
      grabCursor: true,
      spaceBetween: 15,
      speed: 1000,                                                              
      slidesPerView: 'auto',
      navigation: {
        nextEl: nextButton,
        prevEl: prevButton,
      },
      pagination: {
        el: pagination,
        type: "fraction",
        formatFractionCurrent: function (number) {
          return ('0' + number).slice(-2); // Adding leading zero for the first part
        },
        formatFractionTotal: function (number) {
          return ('0' + number).slice(-2); // Adding leading zero for the second part
        }
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: true,
      },
      breakpoints: {
        600: {
          spaceBetween: 40
        },
      }
    });
  })
};



  
  window.addEventListener("DOMContentLoaded", reviews_slider);

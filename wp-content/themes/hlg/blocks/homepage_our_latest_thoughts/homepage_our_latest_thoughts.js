const homepage_our_latest_thoughts = () => {

    const homepage_our_latest_thoughts_parent = document.querySelector('.homepage_our_latest_thoughts_parent');

    if(!homepage_our_latest_thoughts_parent){
        return
    }

    const prevButton = homepage_our_latest_thoughts_parent.querySelector('.swiper-button-prev');
    const nextButton = homepage_our_latest_thoughts_parent.querySelector('.swiper-button-next');

    const homepage_our_latest_thoughts_slider = new Swiper(homepage_our_latest_thoughts_parent.querySelector(".swiper"), {
        speed: 1000,
        spaceBetween: 40,
        slidesPerView: 1,
        updateOnWindowResize: true,
        navigation: {
            nextEl: nextButton,
            prevEl: prevButton,
          },
        autoplay: {
          delay: 4000,
          disableOnInteraction: true
        },
        breakpoints: {
            700: {
              spaceBetween: 50,
              slidesPerView: 2
            },
            1200: {
              spaceBetween: 70,
              slidesPerView: 3
            },
          }
      });

}

window.addEventListener("DOMContentLoaded", homepage_our_latest_thoughts);
// for acf blocks
window.addEventListener("load", homepage_our_latest_thoughts);
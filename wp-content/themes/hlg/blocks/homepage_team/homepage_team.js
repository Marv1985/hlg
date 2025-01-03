const homepage_team = () => {

    const homepage_team_parent = document.querySelector('.homepage_team_parent');

    if(!homepage_team_parent) {
        return
    };


   const text_slider = new Swiper(".text_slider", {
    spaceBetween: 3,
    loop: true,
    speed: 200,
    slidesPerView: 1,
    direction: 'vertical',
    autoplay: {
      delay: 500,
    },
    allowTouchMove: false
  });

};

window.addEventListener("DOMContentLoaded", homepage_team);
window.addEventListener("load", homepage_team);
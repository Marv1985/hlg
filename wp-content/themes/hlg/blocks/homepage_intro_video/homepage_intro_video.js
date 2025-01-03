/*---------------------------------------------*\
   MOUSE ANIMATION FUNCTION IN JS/GLOBAL
\*---------------------------------------------*/

/*---------------------------------------------*\
      GSAP
\*---------------------------------------------*/
const homepage_intro_video = () => {

  const homepage_intro_video = document.querySelector('.homepage_intro_parent');

  if(!homepage_intro_video) {
      return;
  };

  // grow
   let tl = gsap.timeline({
    scrollTrigger: {
      trigger: ".header_video",
      start: "top-=350px top+=30px",
      end: "top-=0px top+=0px",
      scrub: 0,
      ease: "linear",
      invalidateOnRefresh: true,
    },
  });
  tl.from(".header_video video", { borderRadius: "50%", marginTop: "0.1rem"})
    .to(".header_video video", { duration: 1, borderRadius: "20px", marginTop: "0"})
    .to(".header_video video",{ duration: 1, width: "100%", height: "calc(100% - 60px)"},"-=1");

    let tl_anchor_tag = gsap.timeline({
      scrollTrigger: {
        trigger: ".header_video",
        start: "top-=350px top+=30px",
        end: "top-=0px top+=0px",
        scrub: 0,
        ease: "linear",
        invalidateOnRefresh: true
      },
    });
    tl_anchor_tag.from(".header_video .web_link", { borderRadius: "50%"})
      .to(".header_video .web_link", { duration: 1, borderRadius: "20px"})
      .to(".header_video .web_link",{ duration: 1, width: "100%", height: "calc(100% - 60px)"},"-=1");

    let view_project_web = gsap.timeline({
      scrollTrigger: {
        trigger: ".header_video",
        start: "top-=350px top+=30px",
        end: "top-=0px top+=0px",
        scrub: 0,
        ease: "linear",
        invalidateOnRefresh: true
      },
    });
    view_project_web.from(".header_video .view_project_web", { borderRadius: "50%"})
      .to(".header_video .view_project_web", { duration: 1, borderRadius: "20px"})
      .to(".header_video .view_project_web",{ duration: 1, width: "100%", height: "100%"},"-=1");
  
  // pin
  let tlTwo = gsap.timeline({
      scrollTrigger: {
        trigger: ".header_video",
        start: "top top+=30px",
        end: "bottom bottom-=50%",
        scrub: 0,
        pin: true,
        ease: "ease",
        invalidateOnRefresh: true
      },
    });
    tlTwo.from(".homepage_intro_parent", { duration: 1, backgroundColor: '#e59727'})
    .to(".homepage_intro_parent", { duration: 1, backgroundColor: '#fff'});
};

window.addEventListener("orientationchange", () => {
  ScrollTrigger.refresh(); 
});
window.addEventListener("resize", () => {
  ScrollTrigger.refresh(); 
});

window.addEventListener("DOMContentLoaded", homepage_intro_video);




const navbar = () => {
  const navbar = document.querySelector('.navbar');

  if(!navbar){
    return
  } 

/*------------------------------------*\
    HOVER DROPDOWN EFFECT
\*------------------------------------*/
const container = document.querySelector('.services_dropdown');
const services_dropdown_tags = document.querySelectorAll('.services_dropdown a');
const hover_div = document.querySelector('.hover_div');

services_dropdown_tags.forEach(tag => {
  tag.addEventListener('mouseenter', (event) => {
    const target = event.currentTarget;
    const containerRect = container.getBoundingClientRect();
    const targetRect = target.getBoundingClientRect();
    
    hover_div.style.top = `${targetRect.top - containerRect.top}px`;
    hover_div.style.left = `${targetRect.left - containerRect.left}px`;
    hover_div.style.width = `${targetRect.width}px`;
    hover_div.style.height = `${targetRect.height}px`;
  });
});

container.addEventListener('mouseenter', () => {
  hover_div.style.display = 'block';
})
container.addEventListener('mouseleave', () => {
  hover_div.style.display = 'none';
})


  const service_dropdown = navbar.querySelector('.services_dropdown');

/*------------------------------------*\
    SCROLL AND CHANGE NAV STATE
\*------------------------------------*/

// Previous scroll position
let prevScrollPos = window.scrollY;
let ticking = false;

const handleScroll = () => {
  // Current scroll position
  let currentScrollPos = window.scrollY;

  // Handle navbar visibility on scroll
  if (prevScrollPos > currentScrollPos) {
    // Scrolling up
    navbar.classList.remove("is_active");
    hover_div.style.pointerEvents = 'auto';
    service_dropdown.style.pointerEvents = 'auto';
  } else if (currentScrollPos > prevScrollPos) {
    // Scrolling down
    navbar.classList.add("is_active");
    hover_div.style.pointerEvents = 'none';
    service_dropdown.style.pointerEvents = 'none';
  }

  // Handle navbar state change based on scroll position
  if (currentScrollPos > 80) {
    navbar.classList.add('white');
    hover_div.style.backgroundColor = '#0b131b';
  } else {
    hover_div.style.backgroundColor = 'rgba(22, 38, 53, .04)';
    navbar.classList.remove('white');
  }

  // Update the previous scroll position to the current scroll position
  prevScrollPos = currentScrollPos;

  ticking = false;
}

// Whilst ticking is true the function wont be called again. Ensuring that the function is called at most once per frame
const onScroll = () => {
  if (!ticking) {
    // Smooth animations and frequent UI updates because it synchronizes the function execution with the browser's repaint cycle
    window.requestAnimationFrame(handleScroll);
    ticking = true;
  }
}

window.addEventListener("scroll", onScroll);

   

    /*------------------------------------*\
        MOBILE BUTTON
    \*------------------------------------*/
    const mobile_button = navbar.querySelector('.mobile_button');
    const button = mobile_button.querySelector('button');
    const nav_svgs = navbar.querySelectorAll('.logo a');
    const mobile_menu = navbar.querySelector('.mobile_menu');
    const html = document.querySelector('html');

    button.addEventListener('click', () => {
      mobile_button.classList.toggle('is_active');
      mobile_menu.classList.toggle('is_active');
      navbar.classList.toggle('fix_navbar');
      html.classList.toggle('is_active');
      nav_svgs.forEach(nav_svg => {
        nav_svg.classList.toggle('is_active');
      })
    });

  
    /*-------------------------------------------*\
        MUTATION OBSERVER TO REMOVE CLICK EVENT
    \*-------------------------------------------*/
    // If click not in menu then remove class
    function handleClickOutside(e) {
      if (!e.target.closest('.navbar .fixed_width')) {
        mobile_button.classList.remove('is_active');
        mobile_menu.classList.remove('is_active');
        navbar.classList.remove('fix_navbar');
        html.classList.remove('is_active');
        nav_svgs.forEach(nav_svg => {
          nav_svg.classList.remove('is_active');
        });
      }
    }

    // Function to add or remove the event listener based on class presence
    function toggleEventListener() {
      if (mobile_menu.classList.contains('is_active')) {
        document.addEventListener('click', handleClickOutside);
      } else {
        document.removeEventListener('click', handleClickOutside);
      }
    }
    
    // Create a MutationObserver to watch for class changes
    const observer = new MutationObserver(toggleEventListener);
    // Start observing the mobile_menu for class changes
    observer.observe(mobile_menu, { attributes: true, attributeFilter: ['class'] });
    // Initial check to add or remove the event listener based on the initial class state
    toggleEventListener();

  };

  window.addEventListener("DOMContentLoaded", navbar);
  
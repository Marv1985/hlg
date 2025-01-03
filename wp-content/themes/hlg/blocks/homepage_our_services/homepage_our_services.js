/*------------------------------------*\
    MOUSE ANIMATION IN JS/GLOBAL
\*------------------------------------*/

/*-----------------------------------------------------------*\
    REFERENCE ANCHOR TAG AND MAKE WHOLE CONTAINER CLICKABLE
\*-----------------------------------------------------------*/
const homepage_our_services_links = () => {

    const homepage_our_services_parent = document.querySelector('.homepage_our_services_parent');

    if(!homepage_our_services_parent) {
        return
    }

    const service_parents = homepage_our_services_parent.querySelectorAll('.service_parent');
            
        service_parents.forEach(function(container) {
            container.addEventListener("click", function() {
                let serviceLink = this.querySelector('.service_link');
                if (serviceLink) {
                    let url = serviceLink.getAttribute('href');
                    if (url) {
                        window.location.href = url;
                    }
                }
            });
        });

};

window.addEventListener("DOMContentLoaded", homepage_our_services_links);


/*----------------------------------------*\
      REMOVE CURSOR ON TOUCH DEVICES
\*----------------------------------------*/
function is_touch_enabled() {
    return ('ontouchstart' in window) || (navigator.maxTouchPoints > 0) || (navigator.msMaxTouchPoints > 0);
  }
  
  const remove_cursor_from_our_services = () => {
    if (is_touch_enabled()) {
        const cursor = document.querySelector('.homepage_our_services_parent .right_side .learn_more_cursor');

        if(!cursor){
            return
          }
    
        cursor.style.display = "none";
    }
  };
  
  window.addEventListener("DOMContentLoaded", remove_cursor_from_our_services);
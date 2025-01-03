/*-----------------------------------------------*\
      MOUSE ANIMATION function IN JS/GLOBAL
\*-----------------------------------------------*/


/*----------------------------------------*\
      REMOVE CURSOR ON TOUCH DEVICES
\*----------------------------------------*/
function is_touch_enabled() {
      return ('ontouchstart' in window) || (navigator.maxTouchPoints > 0) || (navigator.msMaxTouchPoints > 0);
  }
  
  const remove_cursor = () => {
      if (is_touch_enabled()) {
          const cursor_containers = document.querySelectorAll('.projects_repeater_parent .project_container a');

          if(!cursor_containers){
            return
          }
    
          cursor_containers.forEach(container => {
              const cursor = container.querySelector('.cursor');
              cursor.style.display = "none";
          });
      }
  };
  

window.addEventListener("DOMContentLoaded", remove_cursor);
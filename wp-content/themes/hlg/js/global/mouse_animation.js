const cursorPosition = {
    mouseX: 0,
    mouseY: 0
};

/*---------------------------------------------*\
      DIV FOLLOWS MOUSE WHEN HOVERING
\*---------------------------------------------*/
const createCursorFollower = (cursorFollower, parentDiv) => {
      // Check if the device supports touch
      const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;

      if (isTouchDevice) {
          // If it's a touch device, do not proceed
          return;
      }

    const mousemoveListener = (e) => {
        // Get the bounding rectangle of the parent div
        const parentRect = parentDiv.getBoundingClientRect();
    
        // Update the cursor position with the current mouse coordinates
        cursorPosition.mouseX = e.clientX;
        cursorPosition.mouseY = e.clientY;
    
        // Get the width and height of the cursor follower element
        const followerWidth = cursorFollower.offsetWidth;
        const followerHeight = cursorFollower.offsetHeight;
    
        // Calculate the adjusted mouse X and Y coordinates relative to the parent div
        // This centers the cursor follower on the mouse position
        const adjustedMouseX = cursorPosition.mouseX - parentRect.left - followerWidth / 2;
        const adjustedMouseY = cursorPosition.mouseY - parentRect.top - followerHeight / 2;
    
        // Update the cursor follower's position to the adjusted coordinates
        cursorFollower.style.left = adjustedMouseX + "px";
        cursorFollower.style.top = adjustedMouseY + "px";
    
        // Check if the mouse cursor is inside the boundaries of the parent div
        const isInside = (
            cursorPosition.mouseX >= parentRect.left &&
            cursorPosition.mouseX <= parentRect.right &&
            cursorPosition.mouseY >= parentRect.top &&
            cursorPosition.mouseY <= parentRect.bottom
        );
    
        // Add or remove the 'hover' class based on whether the cursor is inside the parent div
        if (isInside) {
            cursorFollower.classList.add('hover');
        } else {
            cursorFollower.classList.remove('hover');
        }
    };

    const mouseoverListener = () => {
        cursorFollower.classList.add('hover');
    };

    const mouseoutListener = () => {
        cursorFollower.classList.remove('hover');
    };

    // Add the event listeners
    parentDiv.addEventListener("mousemove", mousemoveListener);
    parentDiv.addEventListener("mouseover", mouseoverListener);
    parentDiv.addEventListener("mouseout", mouseoutListener);
};


/*---------------------------------------------*\
      DIV FOLLOWS MOUSE WHEN SCROLLING
\*---------------------------------------------*/

const update_on_scroll = (cursorFollower, parentDiv) => {
      // Check if the device supports touch
      const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;

      if (isTouchDevice) {
          // If it's a touch device, do not proceed
          return;
      }

      
   // Define the mousemove event listener to update cursor position
    const mouseMoveListener = (event) => {
        // Update the cursor position with the current mouse coordinates
        cursorPosition.mouseX = event.clientX;
        cursorPosition.mouseY = event.clientY;
    };

    // Flagging for requestAnimationFrame
    let ticking = false;

    // Define the scroll event listener
    const scrollListener = () => {
        // Get the bounding rectangle of the parent div
        const parentRect = parentDiv.getBoundingClientRect();

        // Get the width and height of the cursor follower element
        const followerWidth = cursorFollower.offsetWidth;
        const followerHeight = cursorFollower.offsetHeight;
        
        // Calculate the adjusted mouse X and Y coordinates relative to the parent div
        // This centers the cursor follower on the mouse position
        const adjustedMouseX = cursorPosition.mouseX - parentRect.left - followerWidth / 2;
        const adjustedMouseY = cursorPosition.mouseY - parentRect.top - followerHeight / 2;

        // Update the cursor follower's position to the adjusted coordinates
        cursorFollower.style.left = adjustedMouseX + "px";
        cursorFollower.style.top = adjustedMouseY + "px";

        // Check if the mouse cursor is inside the boundaries of the parent div
        const cursorInsideParent = 
            cursorPosition.mouseX >= parentRect.left &&
            cursorPosition.mouseX <= parentRect.right &&
            cursorPosition.mouseY >= parentRect.top &&
            cursorPosition.mouseY <= parentRect.bottom;

        // Add or remove the 'hover' class based on whether the cursor is inside the parent div
        if (cursorInsideParent) {
            cursorFollower.classList.add('hover');
        } else {
            cursorFollower.classList.remove('hover');
        }

        ticking = false;
    };

    // Add the scroll and mousemove event listeners
    const onScroll = () => {
        if (!ticking) {
          requestAnimationFrame(scrollListener);
          ticking = true; // Set the flag to prevent multiple requests
        }
      };

    window.addEventListener('scroll', onScroll);
    window.addEventListener('mousemove', mouseMoveListener);
};


/*---------------------------------------------*\
      CURSOR ANIMATION FOR HOMEPAGE VIDEO
\*---------------------------------------------*/
const mouse_animation = () => {
    const parentDiv = document.querySelector(".header_video .web_link");

    if (!parentDiv) {
        return;
    }

    const cursorFollower = document.querySelector(".view_projects");
    createCursorFollower(cursorFollower, parentDiv);
    update_on_scroll(cursorFollower, parentDiv);
};
window.addEventListener("DOMContentLoaded", mouse_animation);

/*----------------------------------------------*\
      CURSOR ANIMATION FOR PROJECTS REPEATER
\*----------------------------------------------*/
const projects_mouse_animation = () => {
    const projects_repeater_parent = document.querySelector(".projects_repeater_parent");

    if (!projects_repeater_parent) {
        return;
    }

    const cursorFollowers = projects_repeater_parent.querySelectorAll(".cursor");
   
    cursorFollowers.forEach(cursorFollower => {
        createCursorFollower(cursorFollower, cursorFollower.parentElement);
        update_on_scroll(cursorFollower, cursorFollower.parentElement);
    });

};
window.addEventListener("DOMContentLoaded", projects_mouse_animation);

/*---------------------------------------------*\
      CURSOR ANIMATION FOR OUR SERVICES
\*---------------------------------------------*/
const services_mouse_animation = () => {
    const homepage_our_services_parent = document.querySelector(".homepage_our_services_parent");

    if (!homepage_our_services_parent) {
        return;
    }

    const cursorFollower = document.querySelector(".learn_more_cursor");
    const parentDiv = document.querySelector(".right_side");
    createCursorFollower(cursorFollower, parentDiv);
    update_on_scroll(cursorFollower, parentDiv);

};
window.addEventListener("DOMContentLoaded", services_mouse_animation);

/*---------------------------------------------*\
      SWIPER WITH HOVER CURSOR
\*---------------------------------------------*/
const swiper_hover_cursor = () => {
    const swiper_with_hover_cursors = document.querySelectorAll(".swiper_with_hover_cursor");

    if (!swiper_with_hover_cursors) {
        return;
    }

    swiper_with_hover_cursors.forEach(swiper_with_hover_cursor => {
        const cursorFollower_left = swiper_with_hover_cursor.querySelector(".swiper_left_cursor");
        const parentDiv_left = swiper_with_hover_cursor.querySelector(".swiper-button-prev");
        createCursorFollower(cursorFollower_left, parentDiv_left);
        update_on_scroll(cursorFollower_left, parentDiv_left);
        
        const cursorFollower_right = swiper_with_hover_cursor.querySelector(".swiper_right_cursor");
        const parentDiv_right = swiper_with_hover_cursor.querySelector(".swiper-button-next");
        createCursorFollower(cursorFollower_right, parentDiv_right);
        update_on_scroll(cursorFollower_right, parentDiv_right);
    })

};
window.addEventListener("DOMContentLoaded", swiper_hover_cursor);
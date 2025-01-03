const footer = () => {
    const footer_container = document.querySelector("footer");

    if (!footer_container) {
        return;
    }

    const footer_overlay = footer_container.querySelector('.footer_overlay');

    // Initialize variables to keep track of the last known scroll position and whether the scroll handler is already running
    let lastKnownScrollPosition = 0;
    let ticking = false;

    const handleScroll = () => {
        // Get the current scroll position
        let scrollPosition = window.scrollY;
        // Get the total height of the document
        let documentHeight = document.documentElement.scrollHeight;
        // Get the height of the viewport
        let viewportHeight = window.innerHeight;
        // Calculate the distance from the bottom of the document to the bottom of the viewport
        let distanceFromBottom = documentHeight - (scrollPosition + viewportHeight);
        // Define a scaling factor for the translateY transformation
        let translateYScalingFactor = 3;
        // Calculate the translateY value based on the distance from the bottom
        let translateYValue = Math.max(0, distanceFromBottom - 0) / translateYScalingFactor;
        // Blur becoms clear approx 50px from full visibility
        let blurScalingFactor = 50;
        // Calculate the blur value based on the distance from the bottom
        let blurValue = Math.max(0, distanceFromBottom - 50) / blurScalingFactor;
        // Limit the blur value to a maximum of 5 pixels
        blurValue = Math.min(blurValue, 5);
        // Select the parent element of the footer
        let footerParent = document.querySelector('.footer_parent');
        // Apply the calculated blur value to the footer overlay's backdrop filter
        footer_overlay.style.backdropFilter = 'blur(' + blurValue + 'px)';
        
        // Check if the device is touch enabled
        let isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;
        if(!isTouchDevice) {
            // If the device is not touch-enabled, apply the translateY transformation to the footer parent element
            footerParent.style.transform = 'translateY(' + translateYValue + 'px)';   
        }
    };

    window.addEventListener('scroll', () => {
        // Update the last known scroll position
        lastKnownScrollPosition = window.scrollY;

        // If the scroll handler is not already running, request an animation frame to handle the scroll
        if (!ticking) {
            window.requestAnimationFrame(() => {
                // Call the scroll handler
                handleScroll();
                // Reset the ticking flag
                ticking = false;
            });

            // Set the ticking flag to true to indicate that the scroll handler is running
            ticking = true;
        }
    });
};

window.addEventListener("DOMContentLoaded", footer);

const our_story = () => {
    const aboutInfoContainers = document.querySelectorAll('.our_story_parent .about_info_container');

    if (!aboutInfoContainers.length) {
        return;
    }

    const onScroll = () => {
        aboutInfoContainers.forEach(container => {
            const rect = container.getBoundingClientRect();
            const viewportHeight = window.innerHeight;
            
            if (rect.top <= viewportHeight * 0.4 && rect.bottom >= viewportHeight * 0.4) {
                container.classList.add('is_active');
            } else {
                container.classList.remove('is_active');
            }
        });
    };

    window.addEventListener('scroll', onScroll);
    // Initial check in case elements are already in position
    onScroll();
};

window.addEventListener('DOMContentLoaded', our_story);

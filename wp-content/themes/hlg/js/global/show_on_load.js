const show_on_load = () => {
     // Show projects on load
     const showOnload = () => {
        const projects = document.querySelectorAll('.project_container'); 

        if(!projects){
            return
        }

        projects.forEach((project) => {
            project.classList.add('show_onload');
        })
    };
    window.onload = showOnload();
};

window.addEventListener('DOMContentLoaded', show_on_load);
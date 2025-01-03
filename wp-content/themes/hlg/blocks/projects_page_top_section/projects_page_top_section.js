/*---------------------------------------------------------------------------------------------*\
    Show projects onload without the animation is in function in '/js/global/show_on_load.js'
\*---------------------------------------------------------------------------------------------*/
const filter_projects = () => {
    const filter = document.querySelector('.projects_page_top_section .filter_container');
    
    if (!filter) {
        return;
    }
    
    const projectsContainer = document.querySelector('.projects_repeater_parent .fixed_width');
    const originalProjects = Array.from(projectsContainer.querySelectorAll('.project_container')); // Convert NodeList to array
    const filter_options = filter.querySelectorAll('button');

    // Function to append removed projects back
    const appendRemovedProjects = () => {
        let counter = -1;
        originalProjects.forEach((project) => {
            projectsContainer.appendChild(project); // Append the removed project back
            project.style.display = 'block'; // Make sure it's displayed
            project.style.transitionDelay = `0.${++counter}s`;
        });
    };

    // Projects with categories removal
    const projects_classList_removal = (optionValue) => {
        if (optionValue === 'View_All') {
            appendRemovedProjects(); // Append all removed projects back
        } else {
            let counter = -1;
            originalProjects.forEach((project) => {
                if (project.classList.contains(optionValue)) {
                    projectsContainer.appendChild(project); // Append the removed project back
                    project.style.display = 'block'; // Make sure it's displayed
                    project.style.transitionDelay = `0.${++counter}s`;
                } else {
                    project.remove();
                }
            });
        }
    };

    // add class (translateY) to each project
    const addTranslateY = (items) => {
        items.forEach((item) => {
            //fade out
            item.classList.add('translateY');
            //fade in
            item.classList.remove('is_active');
        })
    };
    
    // remove class (translateY) to each project
    const removeTranslateY = (items) => {
        items.forEach((item) => {
            //fade out
            item.classList.remove('translateY');
            //fade in
            item.classList.add('is_active');
        })
    };

    // Run on each button click below
    const show_relavent_projects = (e) => {
        addTranslateY(originalProjects);
         // restore projects to the DOM
         setTimeout(() => {
            const optionValue = e.innerHTML;
            const modifiedOptionValue = optionValue.includes(' ') ? optionValue.split(' ').join('_') : optionValue;
            projects_classList_removal(modifiedOptionValue);
        }, 200); 
        // show restored projects in the DOM
        setTimeout(() => {
            removeTranslateY(originalProjects);
        }, 300)
    }


    // filter options button click events
    filter.addEventListener('click', (e) => {
        const clicked_button = e.target.closest('button');

        if(!clicked_button) return;
        
        // Add or remove button class and run funciton to show relavent projects
        filter_options.forEach(button => {
            if (button !== clicked_button) {
                button.classList.remove('selected');
                show_relavent_projects(e.target)
            } else {
                button.classList.add('selected');
                show_relavent_projects(e.target)
            }
        });
    })

    // Search for cookie called PageTitle that was set from individual service page
    const getCookie = (name) => {
        let cookieArr = document.cookie.split(";");
        for(let i = 0; i < cookieArr.length; i++) {
            let cookiePair = cookieArr[i].split("=");
            // Remove whitespace at the beginning of the cookie name and compare it with the given name
            if(name === cookiePair[0].trim()) {
                // Decode the cookie value and return it
                return decodeURIComponent(cookiePair[1]);
            }
        }
        return null;
    }

    // delete cookie function
    const deleteCookie = (name) => {
        document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    }

    const pageTitleCookie = getCookie("pageTitle");
    const buttons = document.querySelectorAll('.projects_page_top_section .fixed_width .filter_container button');
    
    const setButtonBasedOnCookie = () => {
        if(pageTitleCookie) {
            buttons.forEach((button) => {
                if(button.innerHTML.toLowerCase() === pageTitleCookie.toLowerCase()) {
                    let clickEvent = new Event('click');
                    button.dispatchEvent(clickEvent);
                    button.classList.add('selected');
                    show_relavent_projects(button);
                    deleteCookie("pageTitle");
                }
            });
        } else {
            buttons[0].classList.add('selected')
        }    
    }
   
    setButtonBasedOnCookie();
    
};


document.addEventListener("DOMContentLoaded", filter_projects);

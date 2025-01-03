const start_your_project = () => {

// Select service through clicking
const parentContainer = document.querySelector('#checkbox-1');

if(!parentContainer){
    return
}

// Attach a single event listener to the parent container
parentContainer.addEventListener('click', (e) => {
    if (e.target.closest('.forminator-checkbox-box~span')) {
        e.target.closest('.forminator-checkbox-box~span').classList.toggle('is_active');
    }
});


// Select service through tabbing
const form = document.querySelector('#checkbox-1');

form.addEventListener('keypress', (e) => {
    if (e.target.matches('.forminator-checkbox input') && e.key === 'Enter') {
        e.preventDefault();
        e.target.click(); 
        const title = e.target.nextElementSibling.nextElementSibling;
        title.classList.toggle('is_active');
    }
});

   
};

window.addEventListener('DOMContentLoaded', start_your_project);

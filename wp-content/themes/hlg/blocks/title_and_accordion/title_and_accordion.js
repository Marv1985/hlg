const faqs = () => {
    const title_and_accordion = document.querySelector('.title_and_accordion');

    if(!title_and_accordion){
        return
    }

    const accordionContainer = title_and_accordion.querySelector('.accordion_container');

    accordionContainer.addEventListener('click', (e) => {
        // This one gets clicked
        const clickedDetail = e.target.closest('details');
       
        if (!clickedDetail) return; 
    
        // Close all other 'details' elements
        const allDetails = accordionContainer.querySelectorAll('details');
        // Manage the state of multiple elements
        allDetails.forEach(detail => {
            if (detail !== clickedDetail) {
                detail.removeAttribute('open');
            }
        });
    });
 
 }
 
 window.addEventListener("DOMContentLoaded", faqs);
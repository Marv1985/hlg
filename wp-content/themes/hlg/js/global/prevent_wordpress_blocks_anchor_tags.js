const prevent_wordpress_blocks_anchor_tags = () => {
    const anchors = document.querySelectorAll('.block-editor-block-list__block a');
    
    anchors.forEach(function(anchor) {
        anchor.addEventListener('click', function(event) {
            event.preventDefault();
        });
    });
}

window.addEventListener('load', prevent_wordpress_blocks_anchor_tags);
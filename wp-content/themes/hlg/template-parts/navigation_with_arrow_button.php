<?php
    // PROPS
    $button_url = $args['button_url'];
    $button_text = $args['button_text'];
?>

<a href="<?php echo esc_html($button_url); ?>" class="navigation_with_arrow_button">
    <p><?php echo esc_html($button_text); ?></p>
    <div class="button_arrow">
    <span class="material-symbols-outlined"> arrow_right_alt </span>
    </div>
</a>

<?php
    // PROPS
    $button_url = $args['button_url'];
    $button_text = $args['button_text'];
?>

<a href="<?php echo esc_html($button_url); ?>" class="navigation_button_template">
    <?php echo esc_html($button_text); ?>
    <div class="animation_slide"></div>
</a>

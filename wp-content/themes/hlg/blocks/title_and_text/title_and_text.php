<?php 
/**
 * Title And Text Block template.
 *
 * @param array $block The block settings and attributes.
 */

 // VARS
$title = esc_html(get_field('title'));
$text = esc_html(get_field('text'));
?>

<section>
    <div class="title_and_text full_width">
        <div class="fixed_width">
            <div class="title">
                <h1><?php echo $title; ?></h1>
            </div>
            <div class="text">
                <p><?php echo $text; ?></p>
            </div>
        </div>
    </div>
</section>
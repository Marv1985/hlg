<?php 
/**
 * Title and Wysiwyg Block template.
 *
 * @param array $block The block settings and attributes.
 */

 // VARS
 $title = esc_html(get_field('title'));
 $wysiwyg = get_field('wysiwyg');
 $filtered_content = wp_kses_post($wysiwyg);
?>

<section>
    <div class="title_and_wysiwyg full_width">
        <div class="fixed_width">
            <div class="left_side">
                <h3><?php echo $title; ?></h3>
            </div>
            <div class="right_side">
                <div>
                    <?php echo $filtered_content; ?>
                </div>
            </div>
        </div>
    </div>
</section>

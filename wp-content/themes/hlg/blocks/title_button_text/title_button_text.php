<?php 
/**
 * Title Button Text Block template.
 *
 * @param array $block The block settings and attributes.
 */

 // VARS
 $title = get_field('title');
 $paragraph = esc_html(get_field('paragraph'));
 $allowed_html = array('br' => array());
 $filtered_title = wp_kses($title, $allowed_html);
?>

<section>
    <div class="title_button_text_parent full_width">
        <div class="fixed_width">
            <div class="left_side">
                <h2><?php echo $filtered_title; ?></h2>
                <?php get_template_part('template-parts/start_project_button'); ?>
            </div>
            <div class="right_side">
                <p><?php echo $paragraph; ?></p>
            </div>
        </div>
    </div>
</section>

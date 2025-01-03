<?php 
/**
 * Homepage Projects Title Block template.
 *
 * @param array $block The block settings and attributes.
 */

 // VARS
 $allowed_html = array('br' => array());
 $header = get_field('header');
 $filtered_header = wp_kses($header, $allowed_html);
 $left_or_right = esc_html(get_field('left_or_right'));
 $button_url = esc_html(get_field('projects_url', 'option'));
 $button_text = esc_html(get_field('button_text'));
?>

<section>
    <?php if($left_or_right): ?>
    <div class="homepage_projects_title_parent left full_width">
    <?php else: ?>
    <div class="homepage_projects_title_parent full_width">
    <?php endif; ?>
        <div class="fixed_width">
            <div class="title">
                <h2><?php echo $filtered_header; ?></h2>
                <?php get_template_part('template-parts/navigation_with_arrow_button', null, array('button_url' => get_home_url() . '/' . $button_url, 'button_text' => $button_text)); ?>
                <!-- < ?php get_template_part('template-parts/navigation_button', null, array('button_url' => get_home_url() . '/' . $button_url, 'button_text' => $button_text)); ?> -->
            </div>
        </div>
    </div>
</section>



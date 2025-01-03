<?php 
/**
 * Text and Button template.
 *
 * @param array $block The block settings and attributes.
 */

 // VARS
 $text = get_field('text');
 $button_url = esc_url(get_field('button_url'));
 $button_text = esc_html(get_field('button_text'));
?>

<section>
    <div class="text_and_button_parent full_width">
        <div class="fixed_width">
            <div class="left_side">
                <p><?php echo $text; ?></p>
            </div>
            <div class="right_side">
            <?php if($button_text): ?>
                <?php get_template_part('template-parts/navigation_with_arrow_button', null, array('button_url' => get_home_url() . '/' . $button_url, 'button_text' => $button_text)); ?>
                <!-- < ?php get_template_part('template-parts/navigation_button', null, array('button_url' => $button_url, 'button_text' => $button_text)); ?> -->
            <?php else: ?>
                <?php get_template_part('template-parts/start_project_button'); ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</section>

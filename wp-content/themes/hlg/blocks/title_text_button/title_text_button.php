<?php 
/**
 * Title Text Button Block template.
 *
 * @param array $block The block settings and attributes.
 */

 // VARS
 $allowed_html = array('br' => array());
 $text = esc_html(get_field('text'));
 $title = esc_html(get_field('title'));
 $paragraph = get_field('paragraph');
 $filtered_paragraph = wp_kses($paragraph, $allowed_html);
 $button_text = esc_html(get_field('button_text'));
 $button_url = esc_html(get_field('button_url'));
 $show_top_small_title = get_field('show_top_small_title');
?>

<section>
    <div class="title_text_button_parent full_width">
        <div class="fixed_width">
            <div class="sides_container">
                <div class="left_side">
                    <?php if($show_top_small_title): ?>
                        <strong><?php echo $text; ?></strong>
                    <?php endif; ?>
                    <h1><?php echo $title; ?></h1>
                </div>
                <div class="right_side">
                    <div class="container">
                        <p><?php echo $filtered_paragraph; ?></p>
                        <?php get_template_part('template-parts/navigation_with_arrow_button', null, array('button_url' => get_home_url() . '/' . $button_url, 'button_text' => $button_text)); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

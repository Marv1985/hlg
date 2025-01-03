<?php 
/**
 * Our Story Block template.
 *
 * @param array $block The block settings and attributes.
 */

 // VARS
 $title = esc_html(get_field('title'));
 $button_url = esc_html(get_field('start_your_project_url', 'option'));
 $button_text = esc_html(get_field('start_your_project_text', 'option'));
?>

<section>
    <div class="our_story_parent full_width">
        <div class="fixed_width">
            <div class="our_story_container">
                <div class="title">
                    <strong><?php echo $title; ?></strong>
                </div>
                <div class="about_section">
                    <?php if( have_rows('about') ): ?>
                    <?php while( have_rows('about') ): the_row(); 
                        $title = get_sub_field('title');
                        $allowed_tags = array('br' => array());
                        $paragraph = get_sub_field('paragraph');
                        $filtered_paragraph = wp_kses($paragraph, $allowed_tags);
                        ?>

                    <div class="about_info_container">
                        <div class="left_side">
                            <h2><?php echo $title; ?></h2>
                        </div>
                        <div class="right_side">
                            <p><?php echo $filtered_paragraph; ?></p>
                        </div>
                    </div>
                        
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="button_section">
                    <?php get_template_part('template-parts/navigation_button', null, array('button_url' => $button_url, 'button_text' => $button_text)); ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php 
/**
 * Homepage Team Block template.
 * @param array $block The block settings and attributes.
 */
?>

<?php
    //VARS
    $title = esc_html(get_field('title'));
    $paragraph = esc_html(get_field('paragraph'));
    $button_url = esc_html(get_field('about_url', 'option'));
    $button_text = esc_html(get_field('button_text'));
?>

<section>
    <div class="homepage_team_parent full_width">
        <div class="fixed_width">
            <div class="top_half">
                <div class="left">
                    <h2><?php echo $title; ?></h2>
                    <!-- job roles animation -->
                    <div class="container_parent">
                        <div class="container">
                            <div class="job_roles_animation">
                                <div class="swiper text_slider">
                                    <div class="swiper-wrapper">
                                        <?php if( have_rows('text_slider') ): ?>
                                            <?php while( have_rows('text_slider') ): the_row(); 
                                                $text = esc_html(get_sub_field('text'));
                                                ?>
                                                <div class="swiper-slide">
                                                    <div class="text_container">
                                                        <p><?php echo $text; ?></p>
                                                    </div> 
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="container">
                        <p><?php echo $paragraph; ?></p>
                        <?php get_template_part('template-parts/navigation_with_arrow_button', null, array('button_url' => get_home_url() . '/' . $button_url, 'button_text' => $button_text)); ?>

                        <!-- < ?php get_template_part('template-parts/navigation_button', null, array('button_url' => get_home_url() . '/' . $button_url, 'button_text' => $button_text)); ?> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
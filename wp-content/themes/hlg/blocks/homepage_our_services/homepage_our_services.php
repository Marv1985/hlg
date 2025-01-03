<?php 
/**
 * Homepage Our Services Block template.
 *
 * @param array $block The block settings and attributes.
 */

 // VARS
 $title = esc_html(get_field('title'));
 $sub_title = esc_html(get_field('sub_title'));
 $button_url = esc_html(get_field('services_url', 'option'));
 $button_text = esc_html(get_field('button_text'));
?>

<?php 

$services_page_padding = '';

if(is_page('730')) {
$services_page_padding = 'services_page_padding';
}

?>

<section>
    <div class="homepage_our_services_parent full_width <?php echo $services_page_padding; ?>">
        <div class="fixed_width">
            <div class="left_side">
                <div class="sticky_container">
                    <strong><?php echo $title; ?></strong>
                    <h3><?php echo $sub_title; ?></h3>
                    <?php if($button_text): ?>
                        <?php get_template_part('template-parts/navigation_with_arrow_button', null, array('button_url' => get_home_url() . '/' . $button_url, 'button_text' => $button_text)); ?>

                    <!-- < ?php get_template_part('template-parts/navigation_button', null, array('button_url' => get_home_url() . '/' . $button_url, 'button_text' => $button_text)); ?> -->
                    <?php endif; ?>
                </div>
            </div>
            <div class="right_side">
                <div class="learn_more_cursor">
                    <p>LEARN<br>MORE</p>
                    <?php get_template_part( 'img/video_hover_glasses' ); ?>
                </div>
                <!-- services repeater -->
                <?php if( have_rows('services') ): ?>
                    <?php while( have_rows('services') ): the_row();
                        $service_url = esc_url(get_sub_field('service_url'));
                        $title = esc_html(get_sub_field('title'));
                        $summary = esc_html(get_sub_field('summary'));
                        $page_links = get_sub_field('page');
                        ?>

                        <div class="service_parent">
                            <div class="service_container">
                                <a href="<?php echo $page_links; ?>" class="service_link">
                                    <h2><?php echo $title; ?></h2>
                                </a> 
                                <p><?php echo $summary; ?></p>
                                <div class="arrow"><span class="material-symbols-outlined"> arrow_right_alt </span></div>
                            </div>
                        </div>

                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
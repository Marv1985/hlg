<?php 
/**
 * Generic Image Slider Block template.
 *
 * @param array $block The block settings and attributes.
 */
?>

<section>
    <div class="generic_image_slider_parent full_width">
        <div class="swiper generic_image_slider">
            <div class="swiper-wrapper">
                <?php if( have_rows('generic_image_slider') ): ?>
                    <?php while( have_rows('generic_image_slider') ): the_row(); 
                        $image = esc_url(get_sub_field('image'));
                        $portrait_or_landscape = get_sub_field('portrait_or_landscape');
                        $top_or_center = get_sub_field('top_or_center');
                        ?>
                            
                                <?php if($portrait_or_landscape): ?>
                                    <div class="swiper-slide portrait">
                                        <img class="<?php echo $top_or_center ? 'top' : ''; ?>" src="<?php echo $image; ?>" alt="Content from User Gallery">
                                    </div>
                                <?php else: ?>
                                    <div class="swiper-slide landscape">
                                        <img class="<?php echo $top_or_center ? 'top' : ''; ?>" src="<?php echo $image; ?>" alt="Content from User Gallery">
                                    </div>
                                <?php endif; ?>
                            
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
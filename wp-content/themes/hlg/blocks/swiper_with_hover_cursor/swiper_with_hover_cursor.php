<?php 
/**
 * Swiper With Hover Cursor Block template.
 *
 * @param array $block The block settings and attributes.
 */
?>

<section>
    <div class="swiper_with_hover_cursor full_width">
        <div class="fixed_width">
            <div class="swiper">
                <div class="swiper-button-prev"><div class="swiper_left_cursor cursor"><span class="material-symbols-outlined"> arrow_back </span></div></div>
                <div class="swiper-button-next"><div class="swiper_right_cursor cursor"><span class="material-symbols-outlined"> arrow_forward </span></div></div>
                <div class="swiper-wrapper">
                    <?php if( have_rows('swiper_with_hover_cursor') ): ?>
                    <?php while( have_rows('swiper_with_hover_cursor') ): the_row(); 
                        $image = esc_url(get_sub_field('image'));
                        ?>
                        <div class="swiper-slide"><img src="<?php echo $image; ?>" alt=""></div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

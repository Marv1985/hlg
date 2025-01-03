<?php 
/**
 * Reviews Slider Block template.
 *
 * @param array $block The block settings and attributes.
 */

 // VARS
 $header = esc_html(get_field('header'));
 $google_icon = esc_url(get_field('google_icon'));
?>

<section>
    <div class="reviews_slider_parent full_width">
        <div class="fixed_width">
            <div class="top">
                <h3><?php echo $header; ?></h3>
                <div class="reviews_and_buttons">
                    <a class="review_widget" target="_blank" href="https://search.google.com/local/writereview?placeid=ChIJWdQHMHwhe0gRVIZGTBwbfjA">
                        <img class="google_icon" src="<?php echo $google_icon; ?>" alt="Google Icon">
                        <?php echo do_shortcode( '[grw id=1164]' ); ?>
                    </a>
                    <div class="navigation_container">
                        <div class="swiper_buttons">
                            <div class="swiper-button-prev"><span class="material-symbols-outlined"> arrow_right_alt </span></div>
                            <div class="swiper-button-next"><span class="material-symbols-outlined"> arrow_right_alt </span></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="swiper reviews_slider">
                <div class="swiper-wrapper">
                    <?php if( have_rows('reviews_slider') ): ?>
                        <?php while( have_rows('reviews_slider') ): the_row(); 
                            $image = esc_url(get_sub_field('image'));
                            $name = esc_html(get_sub_field('name'));
                            $role = esc_html(get_sub_field('role'));
                            $review = esc_html(get_sub_field('review'));
                            // true/false for 5 or 4 stars
                            $stars = get_sub_field('stars');
                            ?>
                                <div class="swiper-slide">
                                    <div class="reviewer_info">
                                        <img src="<?php echo $image; ?>" alt="reviewer">
                                        <div class="info">
                                            <p><?php echo $name; ?></p>
                                            <p><?php echo $role; ?></p>
                                        </div>
                                    </div>
                                    <div class="text">
                                        <?php if($stars): ?>
                                        <div class="stars">
                                            <span class="material-symbols-outlined"> star </span>
                                            <span class="material-symbols-outlined"> star </span>
                                            <span class="material-symbols-outlined"> star </span>
                                            <span class="material-symbols-outlined"> star </span>
                                            <span class="material-symbols-outlined"> star </span>
                                        </div>
                                        <?php else: ?>
                                        <div class="stars">
                                            <span class="material-symbols-outlined"> star </span>
                                            <span class="material-symbols-outlined"> star </span>
                                            <span class="material-symbols-outlined"> star </span>
                                            <span class="material-symbols-outlined"> star </span>
                                        </div>
                                        <?php endif; ?>
                                        <p><?php echo $review; ?></p>
                                    </div> 
                                </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
/**
 * Team Slider Block template.
 * @param array $block The block settings and attributes.
 */
$loading_image = "https://hlg-testing.co.uk/hlg/wp-content/uploads/2024/11/loading_image.jpg";
?>

<section>
    <div class="full_width team_slider_parent">
        <div class="bottom_half">
            <div class="swiper team_swiper">
                <div id="team_swiper"></div>
                <div class="swiper-wrapper">

                <?php
                    // WP_Query arguments
                    $args = array(
                        'post_type'      => 'team',
                        'posts_per_page' => -1, // -1 to fetch all posts, you can change it as per your requirement
                    );

                    // The Query
                    $team_query = new WP_Query($args);

                    // The Loop
                    if ($team_query->have_posts()):
                        while ($team_query->have_posts()):
                            $team_query->the_post();

                            $id = get_the_ID();
                            $featured_img_url = get_the_post_thumbnail_url($id, 'full');
                            $loading_image = "https://hlg-testing.co.uk/hlg/wp-content/uploads/2024/11/loading_image.jpg";

                            // Parse blocks from post content
                            $blocks = parse_blocks(get_the_content());
                            $sub_title = ''; // Default value

                            // Loop through blocks to find the ACF block
                            foreach ($blocks as $block) {
                                if ($block['blockName'] === 'acf/singleteammember') { 
                                    $sub_title = $block['attrs']['data']['sub_title'] ?? '';
                                    break;
                                }
                            }
                            ?>
                            <div class="swiper-slide">
                                <a aria-label="About" tabindex="-1" href="<?php the_permalink($id); ?>"></a>
                                <div class="add"><span class="material-symbols-outlined"> add </span></div>
                                <div class="img_container">
                                    <img class="lazyload" data-src="<?php echo $featured_img_url; ?>" src="<?php echo $loading_image; ?>" alt="Team member">
                                </div>
                                <div class="text">
                                    <p><?php the_title(); ?></p>
                                    <p><?php echo $sub_title ?: 'No subtitle available'; ?></p>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>

                    
                </div>
            </div>
        </div>
    </div>
</section>

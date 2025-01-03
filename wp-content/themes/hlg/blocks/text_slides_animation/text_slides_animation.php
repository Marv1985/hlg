<?php 
/**
 * Text Slides Animation Block template.
 *
 * @param array $block The block settings and attributes.
 */

 // VARS
 
?>

<section>
    <div class="text_slides_animation_parent full_width">
        <div class="fixed_width">
            <div class="animations_container">
                <div class="loop_container">
                    <div class="animation_wrapper_top">
                        <?php if( have_rows('top_text_area') ): ?>
                            <?php while( have_rows('top_text_area') ): the_row(); 
                                $text = esc_html(get_sub_field('text'));
                                ?>
                                <div class="text_container"><p><?php echo $text; ?></p></div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="animation_wrapper_top">
                        <?php if( have_rows('top_text_area') ): ?>
                            <?php while( have_rows('top_text_area') ): the_row(); 
                                $text = esc_html(get_sub_field('text'));
                                ?>
                                <div class="text_container"><p><?php echo $text; ?></p></div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="loop_container">
                    <div class="animation_wrapper_bottom">
                        <?php if( have_rows('bottom_text_area') ): ?>
                            <?php while( have_rows('bottom_text_area') ): the_row(); 
                                $text = esc_html(get_sub_field('text'));
                                ?>
                                <div class="text_container"><p><?php echo $text; ?></p></div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="animation_wrapper_bottom">
                        <?php if( have_rows('bottom_text_area') ): ?>
                            <?php while( have_rows('bottom_text_area') ): the_row(); 
                                $text = esc_html(get_sub_field('text'));
                                ?>
                                <div class="text_container"><p><?php echo $text; ?></p></div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
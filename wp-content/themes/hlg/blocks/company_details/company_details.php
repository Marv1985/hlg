<?php 
/**
 * Compnay Details Block template.
 *
 * @param array $block The block settings and attributes.
 */
?>

<section>
    <div class="company_details_parent full_width">
        <div class="fixed_width">
            <div class="company_details_container">
                <?php if( have_rows('company_details') ): ?>
                <?php while( have_rows('company_details') ): the_row(); 
                    $title = esc_html(get_sub_field('title'));
                    $info = esc_html(get_sub_field('info'));
                    $anchor_tag_true_false = get_sub_field('anchor_tag_true_false');
                    $anchor_tag = esc_url(get_sub_field('anchor_tag'));
                    ?>

                    <div class="details_container">
                        <?php if($anchor_tag_true_false): ?>
                        <a href="<?php echo $anchor_tag; ?>">
                        <div class="details">
                            <p class="info"><?php echo $info; ?></p>
                            <strong class="title"><?php echo $title; ?></strong>
                        </div>
                        </a>
                        <?php else: ?>
                        <div class="details">
                            <p class="info"><?php echo $info; ?></p>
                            <strong class="title"><?php echo $title; ?></strong>
                        </div>
                        <?php endif; ?>
                    </div>
                
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


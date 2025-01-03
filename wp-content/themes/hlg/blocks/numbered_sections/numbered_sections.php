<?php 
/**
 * Numbered Sections Block template.
 *
 * @param array $block The block settings and attributes.
 */
?>

<section>
    <div class="numbered_sections_parent full_width">
        <div class="fixed_width">
        <div class="grid">
                <?php if( have_rows('numbered_sections') ): ?>
                <?php while( have_rows('numbered_sections') ): the_row(); 
                    $number = esc_html(get_sub_field('number'));
                    $title = esc_html(get_sub_field('title'));
                    $paragraph = esc_html(get_sub_field('paragraph'));
                ?>
                    <div class="section">
                        <span><p><?php echo $number; ?></p></span>
                        <h3><?php echo $title; ?></h3>
                        <p><?php echo $paragraph; ?></p>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
        </div>
        </div>
    </div>
</section>

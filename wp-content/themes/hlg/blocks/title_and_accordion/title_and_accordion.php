<?php 
/**
 * Title and Accordion Block template.
 *
 * @param array $block The block settings and attributes.
 */

 // VARS
 $title = esc_html(get_field('title'));
?>

<section>
    <div class="title_and_accordion full_width">
        <div class="fixed_width">
            <div class="title"><h2><?php echo $title; ?></h2></div>
            <div class="accordion_container">
                <?php if( have_rows('accordion') ): ?>
                    <?php while( have_rows('accordion') ): the_row(); 
                        $title = esc_html(get_sub_field('title'));
                        $text_area = get_sub_field('text_area');
                        $allowed_html = array('br' => array());
                        $filtered_text_area = wp_kses($text_area, $allowed_html);
                        ?>
                        <details>
                            <summary><?php echo $title; ?><div class="plus"><span class="material-symbols-outlined add"> add </span><span class="material-symbols-outlined remove"> remove </span></div></summary>
                        </details>
                        <div class="animate">
                        <p><?php echo $filtered_text_area; ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

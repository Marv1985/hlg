<?php 
/**
 * Paragraphs Block Block template.
 *
 * @param array $block The block settings and attributes.
 */

 // VARS
 $paragraph = wp_kses_post(get_field('paragraph'));
?>

<div class="paragraphs_block_parent full_width">
    <div class="fixed_width">
        <div class="container">
            <div class="paragraph">
                <?php echo $paragraph; ?>   
            </div>
            <?php get_template_part('template-parts/start_project_button'); ?>
        </div>
    </div>
</div>

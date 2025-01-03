<?php 
/**
 * Start your project Block template.
 *
 * @param array $block The block settings and attributes.
 */

 $background = '';

if(is_page(1032)) {
    $background = 'orange';
}

 // VARS
 $title = esc_html(get_field('title'));
?>

<?php 
    
?>

<div class="start_your_project_parent full_width <?php echo $background; ?>">
    <div class="fixed_width">
        <div class="left_side">
            <h1><?php echo $title; ?></h1>
        </div>
        <div class="right_side">
            <?php echo do_shortcode('[forminator_form id="1040"]'); ?>
        </div>
    </div>
</div>

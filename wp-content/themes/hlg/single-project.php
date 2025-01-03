<?php get_header();?>

<?php if (have_posts()): while (have_posts()) : the_post();?>

<div class="single_project full_width">
    <?php the_content(); ?>
</div>

<?php endwhile;?>
<?php else:?>
    <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' );?></h1>
<?php endif;?>

<?php get_footer();?>

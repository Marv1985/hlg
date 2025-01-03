<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="repeater_content_parent full_width">
		<?php the_content(); ?>
	</div>

<?php endwhile; ?>
<?php else: ?>

	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>

<?php endif; ?>

<?php get_footer(); ?>

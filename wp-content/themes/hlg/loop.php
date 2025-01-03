<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="top_section">
			<?php
			$page_links = get_field('page_links', $id);
			if ($page_links): ?>
			<ul>
			<?php foreach ($page_links as $post_object):
			$title = $post_object->post_title;
			?>
				<li>
					<a href="<?php echo esc_url(get_permalink($post_object->ID)); ?>"><?php echo esc_html($title); ?></a>
				</li>
			<?php endforeach; ?>
			</ul>
			<?php endif; ?>
		</div>
		<div class="container">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<div class="middle_section">
					<h2>
						<?php the_title(); ?>
					</h2>
				</div>
			</a>
		
			<div class="bottom_section">
				<?php $date = date('d.m.y', strtotime(get_the_time('F j Y'))); ?>
				<?php
				$post_link = get_field('post_links', $id); // Assuming it's a single post link
				if ($post_link): 
					// Get the post object using the single post ID
					$post = get_post($post_link);
					$post_title = $post->post_title;
					// Setup this post for WP functions (variable must be named $post).
					setup_postdata($post); ?>
					<a class="team_member" href="<?php the_permalink($post->ID); ?>" title="<?php echo esc_html($post_title); ?>">
						<span class="date">Published <?php echo $date; ?></span>
						<?php echo get_the_post_thumbnail($post->ID); ?>
					</a>
					<?php 
					// Reset the global post object so that the rest of the page works correctly.
					wp_reset_postdata(); ?>
				<?php endif; ?>
				<a class="arrow" href="<?php the_permalink(); ?>"><span class="material-symbols-outlined"> arrow_right_alt </span></a>
			</div>
		</div>
	</article>

<?php endwhile; ?>
<?php else: ?>

	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>

<?php endif; ?>

<?php get_header(); ?>

	<main role="main">
		<section>
			<div class="blog_parent full_width">
				<div class="fixed_width">
					<div class="title">
						<strong>BLOG</strong>
						<h1>The latest thoughts from the team at hlg.</h1>
					</div>
					<div class="blog_links">
						<?php get_template_part('loop'); ?>
					</div>
						<?php get_template_part('pagination'); ?>
				</div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>

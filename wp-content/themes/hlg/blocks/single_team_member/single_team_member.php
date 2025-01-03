<?php 
/**
 * Single Team Member Block template.
 *
 * @param array $block The block settings and attributes.
 */

 //VARS
 $get_to_know_title = esc_html(get_field('get_to_know_title')); 
 $sub_title = esc_html(get_field('sub_title')); 
 $linkedin_link = esc_html(get_field('linkedin_link')); 
 // allowed html
 $allowed_html = array('br' => array());
 $about_paragraph = get_field('about_paragraph'); 
 $filtered_paragraph = wp_kses($about_paragraph, $allowed_html);
 $show_or_hide_linkedin = get_field('show_or_hide_linkedin');
?>

<section>
	<div class="single_team_member_parent full_width">
		<div class="fixed_width">
			<div class="top_section">
				<div class="left_side">
					<div class="title_parent">
						<strong><?php echo $get_to_know_title; ?></strong>
						<div class="title">
							<span><?php the_title(); ?></span>
							<span><?php echo $sub_title; ?></span>
						</div>
						<?php if($show_or_hide_linkedin): ?>
							<a class="linkedin_link" target="_blank" href="<?php echo $linkedin_link; ?>" class="linkedin_link">
								<?php get_template_part('img/linkedin'); ?>
							</a>
						<?php endif; ?>
					</div>
					<div class="about">
						<p><?php echo $filtered_paragraph; ?></p>
					</div>
				</div>
				<div class="right_side">
					<?php the_post_thumbnail(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

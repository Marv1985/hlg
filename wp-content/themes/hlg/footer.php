<?php
    // PROPS
    $projects = esc_html(get_field('projects', 'option'));
    $about = esc_html(get_field('about', 'option'));
    $services = esc_html(get_field('services', 'option'));
    $blog = esc_html(get_field('blog', 'option'));
    $contact = esc_html(get_field('contact', 'option'));
    $projects_url = esc_html(get_field('projects_url', 'option'));
    $about_url = esc_html(get_field('about_url', 'option'));
    $services_url = esc_html(get_field('services_url', 'option'));
    $blog_url = esc_html(get_field('blog_url', 'option'));
    $contact_url = esc_html(get_field('contact_url', 'option'));
    $email = esc_html(get_field('email', 'option'));
    $email_url = esc_html(get_field('email_url', 'option'));
    $instagram = esc_html(get_field('instagram', 'option'));
    $instagram_url = esc_url(get_field('instagram_url', 'option'));
    $linkedin = esc_html(get_field('linkedin', 'option'));
    $linkedin_url = esc_url(get_field('linkedin_url', 'option'));
    $youtube = esc_html(get_field('youtube', 'option'));
    $youtube_url = esc_url(get_field('youtube_url', 'option'));
    $copyright = wp_kses_post(get_field('copyright', 'option'));
	$branding_title = esc_html(get_field('branding_title', 'option'));
    $branding_url = esc_html(get_field('branding_url', 'option'));
    $websites_title = esc_html(get_field('websites_title', 'option'));
    $websites_url = esc_html(get_field('websites_url', 'option'));
    $motion_title = esc_html(get_field('motion_title', 'option'));
    $motion_url = esc_html(get_field('motion_url', 'option'));
    $digital_marketing_title = esc_html(get_field('digital_marketing_title', 'option'));
    $digital_marketing_url = esc_html(get_field('digital_marketing_url', 'option'));
    $photography_title = esc_html(get_field('photography_title', 'option'));
    $photography_url = esc_html(get_field('photography_url', 'option'));
    $print_design_title = esc_html(get_field('print_design_title', 'option'));
    $print_design_url = esc_html(get_field('print_design_url', 'option'));
	$start_your_project_text = esc_html(get_field('start_your_project_text', 'option'));
	$start_your_project_url = esc_url(get_field('start_your_project_url', 'option'));
?>

			<footer class="footer_parent full_width" role="contentinfo">
				<div class="footer_overlay"></div>
				<div class="absolute_background"></div>
				<div class="fixed_width">
					<!-- /*------------------------------------*\
    								WEB
					\*------------------------------------*/ -->
					<div class="top_title_and_logo">
						<a class="start_project_link" href="<?php echo $start_your_project_url; ?>">
							<h2><?php echo $start_your_project_text; ?></h2>
							<div class="button_arrow">
							<span class="material-symbols-outlined"> arrow_right_alt </span>
							</div>
						</a>
						<a class="hlg_logo" aria-label="Home Page" href="<?php echo get_home_url(); ?>">
							<?php get_template_part( 'img/navbar_hlg_logo' ); ?>
						</a>
					</div>
					<div class="top_section">
						<div class="explore">
							<div>
								<strong>Explore</strong>
								<ul>
									<li>
										<a href="<?php echo get_home_url() . '/' . $projects_url; ?>"><?php echo $projects; ?></a>
									</li>
									<li>
										<a href="<?php echo get_home_url() . '/' . $about_url; ?>"><?php echo $about; ?></a>
									</li>
									<li class="services">
										<a href="<?php echo get_home_url() . '/' . $services_url; ?>"><?php echo $services; ?></a>
									</li>
									<li>
										<a href="<?php echo get_home_url() . '/' . $blog_url; ?>"><?php echo $blog; ?></a>
									</li>
									<li>
										<a href="<?php echo get_home_url() . '/' . $contact_url; ?>"><?php echo $contact; ?></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="services">
							<strong>Services</strong>
								<ul>
									<li>
										<a href="<?php echo get_home_url() . '/' . $branding_url; ?>">
											<?php echo $branding_title; ?>
										</a>
									</li>
									<li>
										<a href="<?php echo get_home_url() . '/' . $websites_url; ?>">
											<?php echo $websites_title; ?>
										</a>
									</li>
									<li>
										<a href="<?php echo get_home_url() . '/' . $motion_url; ?>">
											<?php echo $motion_title; ?>
										</a>
									</li>
									<li>
										<a href="<?php echo get_home_url() . '/' . $digital_marketing_url; ?>">
											<?php echo $digital_marketing_title; ?>
										</a>
									</li>
									<li>
										<a href="<?php echo get_home_url() . '/' . $photography_url; ?>">
											<?php echo $photography_title; ?>
										</a>
									</li>
									<li>
										<a href="<?php echo get_home_url() . '/' . $print_design_url; ?>">
											<?php echo $print_design_title; ?>
										</a>
									</li>
								</ul>
						</div>
						<div class="email socialise">
							<div>
								<strong>Email</strong>
								<a href="mailto:<?php echo $email_url; ?>">
									<?php echo $email; ?>
								</a>
							</div>
							<div class="socialise_container">
								<strong>Socialise</strong>
									<a href="<?php echo $instagram_url; ?>" target="_blank">
										<?php get_template_part( 'img/instagram' ); ?>
										<?php echo $instagram; ?>
									</a>
									<a href="<?php echo $linkedin_url; ?>" target="_blank">
										<?php get_template_part( 'img/linkedin' ); ?>
										<?php echo $linkedin; ?>
									</a>
							</div>
						</div>
					</div>
					<!-- /*------------------------------------*\
    								MOBILE
					\*------------------------------------*/ -->
					<div class="top_section mobile">
						<div class="top">
							<div>
								<div>
									<strong>Explore</strong>
									<ul>
										<li>
											<a href="<?php echo get_home_url() . '/' . $projects_url; ?>"><?php echo $projects; ?></a>
										</li>
										<li>
											<a href="<?php echo get_home_url() . '/' . $about_url; ?>"><?php echo $about; ?></a>
										</li>
										<li class="services">
											<a href="<?php echo get_home_url() . '/' . $services_url; ?>"><?php echo $services; ?></a>
										</li>
										<li>
											<a href="<?php echo get_home_url() . '/' . $blog_url; ?>"><?php echo $blog; ?></a>
										</li>
										<li>
											<a href="<?php echo get_home_url() . '/' . $contact_url; ?>"><?php echo $contact; ?></a>
										</li>
									</ul>
								</div>
								<div>
									<strong>Services</strong>
									<ul>
										<li>
											<a href="<?php echo get_home_url() . '/' . $branding_url; ?>">
												<?php echo $branding_title; ?>
											</a>
										</li>
										<li>
											<a href="<?php echo get_home_url() . '/' . $websites_url; ?>">
												<?php echo $websites_title; ?>
											</a>
										</li>
										<li>
											<a href="<?php echo get_home_url() . '/' . $motion_url; ?>">
												<?php echo $motion_title; ?>
											</a>
										</li>
										<li>
											<a href="<?php echo get_home_url() . '/' . $digital_marketing_url; ?>">
												<?php echo $digital_marketing_title; ?>
											</a>
										</li>
										<li>
											<a href="<?php echo get_home_url() . '/' . $photography_url; ?>">
												<?php echo $photography_title; ?>
											</a>
										</li>
										<li>
											<a href="<?php echo get_home_url() . '/' . $print_design_url; ?>">
												<?php echo $print_design_title; ?>
											</a>
										</li>
									</ul>
								</div>
								<div>
									<strong>Socialise</strong>
									<div class="socials_container">
										<a href="<?php echo $instagram_url; ?>" target="_blank">
											<?php get_template_part( 'img/instagram' ); ?>
										</a>
										<a href="<?php echo $linkedin_url; ?>" target="_blank">
											<?php get_template_part( 'img/linkedin' ); ?>
										</a>
									</div>
								</div>
								<div>
									<strong>Email</strong>
									<a href="mailto:<?php echo $email_url; ?>">
										<?php echo $email; ?>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="mobile_logo_and_arrow">
						<a class="hlg_logo" aria-label="Home Page" href="<?php echo get_home_url(); ?>">
							<?php get_template_part( 'img/navbar_hlg_logo' ); ?>
						</a>
						<div class="top_and_logo socialise">
							<div>
								<a class="footer_arrow" href="#top_of_page"><span class="material-symbols-outlined"> arrow_right_alt </span></a>
							</div>
						</div> 
					</div>
				</div>
					<div class="bottom_section">
						<div class="fixed_width">
							<?php echo $copyright; ?>
							<div class="top_and_logo socialise">
								<div>
									<a class="footer_arrow" href="#top_of_page"><span class="material-symbols-outlined"> arrow_right_alt </span></a>
								</div>
							</div> 
						</div>
					</div>
			</footer>
		</div>

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>

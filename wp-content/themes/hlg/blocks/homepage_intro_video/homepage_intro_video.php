<?php 
/**
 * Homepage Intro Video Block template.
 * @param array $block The block settings and attributes.
 */
?>

<?php
    //VARS
    $header_top_part = esc_html(get_field('header_top_part'));
    $header_bottom_part = esc_html(get_field('header_bottom_part'));
    $video_url = esc_url(get_field('video_url'));
    $video_poster = esc_url(get_field('video_poster'));
    $projects_url = get_field('projects_url');
?>

<section>
    <div class="homepage_intro_parent full_width">
        <div class="fixed_width">
            <div class="title">
                <strong><?php echo $header_top_part; ?></strong>
                <h1><?php echo $header_bottom_part; ?></h1>
            </div>
            <div class="header_video">
                <div class='web_link'>
                <a class='view_project_web' aria-label="View projects" href="<?php echo get_home_url() . '/' . $projects_url; ?>"> 
                    <div class="view_projects">
                        <p>VIEW<br>PROJECTS</p>
                        <?php get_template_part( 'img/video_hover_glasses' ); ?>
                    </div>
                </a>
                </div>
                <video autoplay muted playsinline loop poster="<?php echo $video_poster; ?>" preload="metadata" aria-label="Some of our work demonstrating branding, web development, animation, design, marketing and more">
                    <source src="<?php echo $video_url; ?>" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</section>

<?php 
/**
 * Homepage Our Latest Thoughts Block template.
 *
 * @param array $block The block settings and attributes.
 */

 // VARS
 $title = esc_html(get_field('title'));
 $view_all_posts_button = esc_html(get_field('view_all_posts_button'));
 $view_all_posts_button_url = esc_html(get_field('blog_url', 'option'));
?>

<?php
/*----------------------*\
   ON TEAM MEMBER PAGE
\*----------------------*/
// Get post type (team)
$post_type = get_post_type();
// Get all blog posts
$blog_posts = get_posts(array('post_type' => 'post'));
// Store blog post title
$projects_post_titles = [];
// Get post title (team member name)
$post_title = get_the_title();

foreach ($blog_posts as $blog_post) {
    // Get all team members who have posted a blog
    $team_member_who_posted = get_field('post_links', $blog_post->ID);
    if (is_array($team_member_who_posted) || is_object($team_member_who_posted)) {
        // If ACF post_links object value (team member name) equals page title (team member name)
        if($team_member_who_posted->post_title == $post_title){
            // Push value to array to pass to wp_query args
            $projects_post_titles[] = $blog_post->post_title;
        }
    }  
}
?>

<?php 
/*----------------------------*\
    SINGLE PROJECT PAGE ARGS
\*----------------------------*/
// Get current post type (project)
$post_type_project = get_post_type();
// Get the current post ID
$current_post_id = get_the_ID(); 
// Get the categories for the 'service' taxonomy
$terms = get_the_terms($current_post_id, 'service'); 
// Current page categories
$current_page_categories = []; 
// Loop through terms and store current page categories in array to pass to wp_query args
if ($terms && !is_wp_error($terms)) {
    foreach ($terms as $term) {
        // Push category name to array
        $current_page_categories[] = $term->name;
    }
} 
?>

<?php 
    /*--------------------*\
        SERVICES PAGES
    \*--------------------*/
 // Initialize the array to store matching slugs
$page_links_titles = array();

// Get the title of the current post
$page_name = get_the_title();

// Convert it to look like taxonomy slug
$current_page_name = strtolower(str_replace(' ', '-', $page_name));

// Fetch all blog posts
$blog_posts = get_posts(array('post_type' => 'post', 'numberposts' => -1));

// Loop through each blog post
foreach ($blog_posts as $blog_post) {
    // Retrieve the categories associated with the current post
    $categories = get_the_category($blog_post->ID);
    // Loop through each category and check if its slug matches the current page name
    foreach ($categories as $category) {
        $cat_slugs = $category->slug;
        if ($cat_slugs == $current_page_name) {
            $page_links_titles[] = $cat_slugs;
        }
    }
}

?>


<?php 
/*----------------------------*\
    SINGLE TEAM MEMBER PAGE
\*----------------------------*/
if(($post_type == 'team')){
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'post_name__in' => $projects_post_titles
    );
} 
/*----------------------------*\
    SINGLE PROJECT PAGE ARGS
\*----------------------------*/
// post is type project
elseif ($post_type_project == 'project') {
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => $current_page_categories
            ),
        ),
    );
}
/*----------------------------*\
    SERVICE PAGE
\*----------------------------*/
elseif (in_array($current_page_name, $page_links_titles)) {
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => $page_links_titles
            ),
        ),
    );
}
else {
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
    );
}

/*----------------------------------------------------*\
    IF POSTS EXIST THEN EXECUTE THE REST OF THE CODE
\*---------------------------------------------------*/
$team_query = new WP_Query( $args );
if (!empty($team_query->posts)): ?>

    <section>
        <div class="our_latest_thoughts full_width">
            <div class="homepage_our_latest_thoughts_parent full_width">
                <div class="fixed_width">
                    <div class="title">
                        <strong><?php echo $title; ?></strong>
                            <div class="buttons">
                                <div class="swiper_buttons">
                                    <div class="swiper-button-prev"><span class="material-symbols-outlined"> arrow_right_alt </span></div>
                                    <div class="swiper-button-next"><span class="material-symbols-outlined"> arrow_right_alt </span></div>
                                </div>
                                <?php get_template_part('template-parts/navigation_with_arrow_button', null, array('button_url' => get_home_url() . '/' . $view_all_posts_button_url, 'button_text' => $view_all_posts_button)); ?>

                                <!-- < ?php get_template_part('template-parts/navigation_button', null, array('button_url' => get_home_url() . '/' . $view_all_posts_button_url, 'button_text' => $view_all_posts_button)); ?> -->
                            </div>
                    </div>
                    <div class="articles">
                        <div class="swiper">
                            <div class="swiper-wrapper">   
                                

                                <?php
                                // Query database based on results from 'if' statement
                                $team_query = new WP_Query( $args );
                                if ( $team_query->have_posts() ):
                                    while ( $team_query->have_posts() ):
                                        $team_query->the_post();
                                        $id = get_the_ID();
                                    ?>

                                    <div class="swiper-slide">
                                        <article>
                                            <div class="top_section">
                                                <?php
                                                $page_links = get_field('page_links', $id);
                                                if ($page_links): ?>
                                                <ul>
                                                <?php foreach ($page_links as $post_object):
                                                $title = $post_object->post_title;
                                                ?>
                                                    <li>
                                                        <a href="<?php echo esc_url(get_permalink($post_object->ID)); ?>" title="<?php echo esc_html($title); ?>"><?php echo esc_html($title); ?></a>
                                                    </li>
                                                <?php endforeach; ?>
                                                </ul>
                                                <?php endif; ?>
                                            </div>
                                            <div class="container">
                                                <?php $blog_post_title = get_the_title(); ?>
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                    <div class="middle_section">
                                                        <h2>
                                                            <?php echo $blog_post_title; ?>
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
                                                    <a class="arrow" href="<?php the_permalink($id); ?>" title="<?php echo $blog_post_title; ?>"><span class="material-symbols-outlined"> arrow_right_alt </span></a>
                                                </div>
                                            </div>
                                        </article>
                                    </div> 
                            
                                    <?php endwhile;
                                    wp_reset_postdata();
                                    endif;
                                    ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>
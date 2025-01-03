<?php 
/**
 * Projects Repeater Block template.
 *
 * @param array $block The block settings and attributes.
 */

//vars
$loading_image = get_field('loading_image');
$padding_top = get_field('padding_top');
$posts_per_page = get_field('posts_per_page');
$posts_quantity = esc_html(get_field('posts_quantity'));
$border_radius = get_field('border_radius');
?>

<?php
/*-------------------------*\
    TEAM MEMBER PAGE ARGS
\*-------------------------*/
// Get all projects
$projects = get_posts(array('post_type' => 'project'));
// Get post title (team member name)
$post_title = get_the_title();
// Initialize an empty array to store matching project slugs
$matching_project_names = []; 
// Loop through all projects
foreach ($projects as $project) {
    // Get 'project' ACF post object 'team_members_involved'
    $team_members_involved = get_field('team_members_involved', $project->ID);
    if (is_array($team_members_involved) || is_object($team_members_involved)) {
        foreach ($team_members_involved as $team_member) {
            $post = get_post($team_member);
            $team_member_involved_name = $post->post_title;
            // if team member involved name is equal to current page title then put name in array for wp_query args
            if($team_member_involved_name == $post_title){
                // Add the project slug to the array
                $matching_project_names[] = $project->post_name; 
            }
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
/*----------------------------*\
    SINGLE SERVICE PAGE ARGS
\*----------------------------*/ 
// Get current title
$single_service_title = get_the_title();
// Get servcie taxonomy values to compare to title
$single_service_taxonomy_values = get_terms(array('taxonomy' => 'service'));
// Put each value into an array
$single_service_taxonomy_values_array = [];
foreach($single_service_taxonomy_values as $single_service_taxonomy_value) {
    $single_service_taxonomy_values_array[] = $single_service_taxonomy_value->name;
}
// Get matching values
$single_service_matching_value = [];

if (is_array($single_service_taxonomy_values_array)) {
    foreach ($single_service_taxonomy_values_array as $value) {
        // Check if the current value matches $single_service_title
        if ($value == $single_service_title) {
            $converted_value = strtolower(str_replace(' ', '-', $value));
            $single_service_matching_value[] = $converted_value;
        }
    }
}

?>

<section>
    <div class="projects_repeater_parent full_width <?php echo $padding_top ? 'padding_top_left' : 'padding_top_right';?> <?php echo $border_radius ? 'border_radius' : ''; ?>">
        <div class="fixed_width">

        <?php
            /*-------------------------------------------------------------------------------------*\
                FOR POST PAGE (if there are pagelinks (services) then get posts by pagelink names)
            \*-------------------------------------------------------------------------------------*/
            $id = get_the_ID();
            $page_links = get_field('page_links', $id);
            if($page_links) {
                foreach ($page_links as $post) :
                    setup_postdata($post);
                    $name = $post->post_name;
                endforeach; 
                $args = array(
                    'post_type' => 'project', 
                    'posts_per_page' => $posts_per_page ? $posts_quantity : -1,
                    'tax_query' => array( 
                        array(
                            'taxonomy' => 'service', 
                            'field'    => 'slug', 
                            'terms'    => $name,
                            'orderby' => 'rand'
                        ),
                    ),
                );
            }
            /*-------------------------*\
                FOR TEAM MEMBER PAGE 
            \*--------------------------*/
            elseif($matching_project_names) {
                $args = array(
                    'post_type' => 'project', 
                    'posts_per_page' => $posts_per_page ? $posts_quantity : -1,
                    'post_name__in' => $matching_project_names,
                    'orderby' => 'rand'
                );
            }
            /*----------------------------*\
                SINGLE PROJECT PAGE ARGS
            \*----------------------------*/
            elseif ($post_type_project == 'project') {
                $args = array(
                    'post_type' => 'project', 
                    'posts_per_page' => $posts_per_page ? $posts_quantity : -1,
                    'post__not_in' => array(get_the_ID()),
                    'tax_query' => array( 
                        array(
                            'taxonomy' => 'service', 
                            'field'    => 'slug', 
                            'terms'    => $current_page_categories,
                            'orderby' => 'rand',
                        ),
                    ),
                );
            }
            /*-------------------------*\
                SINGLE SERVICE PAGE 
            \*--------------------------*/
            elseif($single_service_matching_value) {
                $args = array(
                    'post_type' => 'project', 
                    'posts_per_page' => $posts_per_page ? $posts_quantity : -1, 
                    'tax_query' => array( 
                        array(
                            'taxonomy' => 'service', 
                            'field'    => 'slug', 
                            'terms'    => $single_service_matching_value,
                            'orderby' => 'rand'
                        ),
                    ),
                );
            }
            /*---------------------------------*\
                OTHER PAGES (get all projects)
            \*---------------------------------*/
            else {
                $args = array(
                    'post_type' => 'project', 
                    'posts_per_page' => $posts_per_page ? $posts_quantity : -1, 
                    'paged' => get_query_var('paged'),
                    'orderby' => 'rand'
                );

            }
            
            // The Query
            $project_query = new WP_Query( $args );
            // The Loop
            if ( $project_query->have_posts() ):
                while ( $project_query->have_posts() ):
                $project_query->the_post();
                $id = get_the_ID();
                $image_or_video = get_field('image_or_video', $id);
                $image = get_field('image', $id);
                ?>

                <?php
                    // Get the terms associated with the current post
                    $terms = wp_get_object_terms($id, 'service', array('fields' => 'all'));
                    if (!empty($terms)) {
                        // Initialize an empty array to hold all class names
                        $classes = array();
                        foreach ($terms as $term) {
                            // Check if the term name has spaces
                            if (strpos($term->name, ' ') !== false) {
                                // If it does, replace spaces with underscores
                                $term_name = str_replace(' ', '_', $term->name);
                                // Add the modified term name to the array
                                $classes[] = $term_name;
                            } else {
                                // If not, simply add the term name to the array
                                $classes[] = $term->name;
                            }
                        }
                        // Join the class names array into a single string separated by spaces
                        $class = implode(' ', $classes);
                    }
                ?>
                
                <div class="project_container <?php echo $class;?>">
                    <a aria-label="<?php the_title();?> project"  href="<?php the_permalink();?>">
                        <div class="cursor"><?php get_template_part( 'img/video_hover_glasses' );?></div>
                            <div class="overflow_control">
                                <?php if($image_or_video):?>
                                    <video loading="lazy" autoplay muted playsinline loop preload="metadata" poster="<?php the_field('video_poster', $id);?>">
                                        <source src="<?php the_field('video_url', $id);?>" type="video/mp4">
                                    </video>
                                <?php else:?>
                                    <img class="lazyload" data-src="<?php echo $image; ?>" src="<?php echo $loading_image; ?>" alt="<?php the_title();?>">
                                <?php endif;?>
                            </div>
                        <h3><?php the_title();?></h3>
                        <!-- Displaying categories for each project -->
                        <div class="category_container">
                            <?php
                            // Get the terms associated with the current post
                            $terms = wp_get_object_terms($id, 'service', array('fields' => 'all'));
                            if (!empty($terms)) {
                                foreach ($terms as $term) {
                                    echo '<p>'. $term->name. '</p>';
                                }
                            } else {
                                echo '<p>No categories found.</p>';
                            }
                        ?>
                        </div>
                    </a>
                </div>
            
            <?php endwhile;
            wp_reset_postdata();
            endif;
           ?>
        </div>
        <!-- PAGINATION -->
        <!-- <div class="pagination fixed_width">
            < ?php      
                echo paginate_links(array(
                    'base' => str_replace(999999999, '%#%', get_pagenum_link(999999999)),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $project_query->max_num_pages,
                    'prev_next' => false,
                    'type' => 'plain',
                ));
            ?>
        </div> -->
    </div>
</section>
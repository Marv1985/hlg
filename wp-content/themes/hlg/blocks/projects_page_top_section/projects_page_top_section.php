<?php 
/**
 * Projects Page Top Section Block template.
 *
 * @param array $block The block settings and attributes.
 */

 // VARS
 $allowed_html = array('br' => array());
 $title = esc_html(get_field('title'));
 $paragraph = get_field('paragraph');
 $filtered_paragraph = wp_kses($paragraph, $allowed_html);
?>

<section>
    <div class="projects_page_top_section full_width">
        <div class="fixed_width">
            <h1><?php echo $title; ?></h1>
            <div class="filter">
                <div class="filter_container">
                    <strong>FILTER BY SERVICE</strong>
                    <button>View All</button>
                    <?php
                        // Get all categories of 'service' taxonomy associated with 'project' posts
                        $categories = get_terms( array(
                            'taxonomy' => 'service', // Taxonomy key
                            'hide_empty' => false,  
                        ) );

                        // Check if categories are retrieved
                        if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
                            // Loop through each category and echo out its name
                            foreach ( $categories as $category ) {
                                echo '<button>' . $category->name . '</button>';
                            }
                        } else {
                            echo 'No categories found.';
                        }
                        ?>

                </div>
                <div class="paragraph">
                    <p><?php echo $filtered_paragraph; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>


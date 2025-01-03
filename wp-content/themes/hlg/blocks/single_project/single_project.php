<?php 
/**
 * Single Project Block template.
 *
 * @param array $block The block settings and attributes.
 */
$team_members_involved = get_field('team_members_involved');
?>

<section>
    <div class="single_project_parent full_width">
        <div class="fixed_width">
            <div class="top_section">
                <div class="left_side">
                    <div class="title_container">
                        <h3><?php the_title();?></h3>
                        <div class="services_container">
                            <?php
                            // Get the terms associated with the current post
                            $id = get_the_ID();
                            $terms = wp_get_object_terms($id, 'service', array('fields' => 'all'));
                            if (!empty($terms)) {
                                foreach ($terms as $term) {
                                    // Use $term->slug to get the slug of each term
                                    echo '<a href="'. get_home_url(). '/services/'. $term->slug. '">'. $term->name. '</a>';
                                }
                            } else {
                                echo '<a>No categories found.</a>';
                            }
                        ?>
                        </div>
                    </div>
                    <div class="people_involved">
                        <?php
                        // Assuming team_members_involved is an array of post IDs
                        $id = get_the_ID();
                        $team_members_involved = get_field('team_members_involved', $id);
                        if (!empty($team_members_involved)): 
                            foreach ($team_members_involved as $member_id) {
                                $post = get_post($member_id);
                                $name = $post->post_title;
                                setup_postdata($post);?>
                                    <a href="<?php the_permalink($post->ID);?>" title="<?php echo $name;?>">
                                        <?php echo get_the_post_thumbnail($post->ID);?>
                                    </a>
                                <?php 
                                wp_reset_postdata();
                            }
                        endif;
                    ?>
                    </div>
                </div>
                <div class="right_side">
                    <div>
                        <?php the_field('content');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
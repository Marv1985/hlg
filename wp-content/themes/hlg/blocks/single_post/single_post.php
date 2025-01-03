<?php
/**
 * Single Post Block template.
 *
 * @param array $block The block settings and attributes.
 */

// VARS
$content = get_field('content');
$filtered_content = wp_kses_post($content);
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="single_blog_post full_width">
        <div class="fixed_width">
            <!-- left side -->
            <div class="left_side">
                <?php
                $id = get_the_ID();
                $date = date('d.m.y', strtotime(get_the_time('F j Y')));
                $post_link = get_field('post_links', $id);
                if ($post_link) :
                    $post = get_post($post_link);
                    setup_postdata($post);
                    $name = $post->post_title;
                ?>
                    <a href="<?php the_permalink($post->ID); ?>" title="<?php echo $name; ?>">
                        <span class="date">Published <?php echo $date; ?></span>
                        <div class="team_member">
                            <?php echo get_the_post_thumbnail($post->ID); ?>
                            <div>
                                <p>Posted by</p>
                                <p><?php echo $name; ?></p>
                                <p><?php the_field('sub_title', $post->ID); ?></p>
                            </div>
                        </div>
                    </a>
                <?php
                    wp_reset_postdata();
                endif;
                ?>
                <a target="_blank" href="https://www.linkedin.com/shareArticle?url={url}&title={title}&summary={text}&source={provider}" class="share_post">
                    <p>Share this post</p>
                    <?php get_template_part('img/linkedin'); ?>
                </a>
            </div>
            <!-- middle section -->
            <div class="middle_section">
                <div class="page_links">
                    <?php
                    $id = get_the_ID();
                    $page_links = get_field('page_links', $id);
                    if ($page_links) :
                    ?>
                        <ul>
                            <?php foreach ($page_links as $post) :
                                setup_postdata($post);
                                $name = $post->post_title;
                            ?>
                                <li>
                                    <a href="<?php the_permalink($post->ID); ?>"><?php echo $name; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
                <h1><?php the_title(); ?></h1>
                <?php echo $filtered_content; ?>
            </div>
            <!-- right side -->
            <div class="right_side">
                <strong>You may also like</strong>
                <?php
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 2,
                    'post__not_in'   => array(get_the_ID()), // Exclude current post
                    'orderby' => 'rand'
                );
                $related_posts_query = new WP_Query($args);
                if ($related_posts_query->have_posts()) :
                    while ($related_posts_query->have_posts()) :
                        $related_posts_query->the_post();
                ?>
                        <article>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <h3><?php the_title(); ?></h3>
                                <div>
                                    <?php $date = date('d.m.y', strtotime(get_the_time('F j Y'))); ?>
                                    <span class="date">Published <?php echo $date; ?></span>
                                    <div class="arrow"><span class="material-symbols-outlined"> arrow_right_alt </span></div>
                                </div>
                            </a>
                        </article>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>
</article>

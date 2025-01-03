<?php 
/**
 * Image Or Video Full Height Block template.
 *
 * @param array $block The block settings and attributes.
 */

 // VARS
 $size_adjuster = get_field('size_adjuster');
 $image_or_video = get_field('image_or_video');
 $video_url = esc_html(get_field('video_url'));
 $video_poster = esc_url(get_field('video_poster'));
 $image = esc_url(get_field('image'));
?>

<section>
    <div class="image_or_video_full_height <?php echo $size_adjuster ? 'full_screen' : ''?> full_width">
        <div class="fixed_width">
            <!-- post image or video -->
            <div class="thumbnail">
                <?php if($image_or_video):?>
                    <img src="<?php echo $image; ?>" alt="<?php the_title();?>">
                <?php else:?>
                    <video loading="lazy" autoplay muted playsinline loop preload="metadata" poster="<?php echo $video_poster;?>">
                        <source src="<?php echo $video_url;?>" type="video/mp4">
                    </video>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>
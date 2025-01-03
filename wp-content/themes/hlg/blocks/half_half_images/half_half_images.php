<?php 
/**
 * Half Half Images Block template.
 *
 * @param array $block The block settings and attributes.
 */

 // VARS
 $left_image = esc_url(get_field('left_image'));
 $right_image = esc_url(get_field('right_image'));
 $change_to_video = get_field('change_to_video'); // Assuming this is an array or a string
 $left_video = esc_url(get_field('left_video'));
 $right_video = esc_url(get_field('right_video'));
 $left_video_poster = esc_url(get_field('left_video_poster'));
 $right_video_poster = esc_url(get_field('right_video_poster'));
 $left_size_change = get_field('left_size_change');
 $right_size_change = get_field('right_size_change');
 ?>
 
 <section>
     <div class="half_half_images_parent full_width">
         <div class="fixed_width">
             <div>
                 <?php 
                 if (is_array($change_to_video) && in_array('Left to video', $change_to_video)) {
                     echo '<video class="' . $left_size_change . '" autoplay="" muted="" playsinline="" loop="" poster="' . $left_video_poster . '" src="' . $left_video . '"></video>'; 
                 } else {
                     echo '<img src="' . $left_image . '" alt="User selected image">'; 
                 }
                 ?>
             </div>
             <div>
                 <?php 
                 if (is_array($change_to_video) && in_array('Right to video', $change_to_video)) {
                     echo '<video class="' . $right_size_change . '" autoplay="" muted="" playsinline="" loop="" poster="' . $right_video_poster . '" src="' . $right_video . '"></video>'; 
                 } else {
                     echo '<img src="' . $right_image . '" alt="User selected image">';
                 }
                 ?>
             </div>
         </div>
     </div>
 </section>
 

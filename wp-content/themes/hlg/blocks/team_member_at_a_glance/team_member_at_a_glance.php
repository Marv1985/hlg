<?php 
/**
 * Team Member At A Glance Block template.
 *
 * @param array $block The block settings and attributes.
 */

 // VARS
 $title = esc_html(get_field('title'));
 $joined_date_title = esc_html(get_field('joined_date_title'));
 $joined_date = esc_html(get_field('joined_date'));
 $experience_title = esc_html(get_field('experience_title'));
 $experience = esc_html(get_field('experience'));
 $favourite_project_title = esc_html(get_field('favourite_project_title'));
 $favourite_project = esc_html(get_field('favourite_project'));
 $speciality_title = esc_html(get_field('speciality_title'));
 $speciality = esc_html(get_field('speciality'));
 $favourite_hobby_title = esc_html(get_field('favourite_hobby_title'));
 $favourite_hobby = esc_html(get_field('favourite_hobby'));
 $favourite_project_link = esc_url(get_field('favourite_project_link'));
?>

<section>
    <div class="team_member_at_a_glance_parent full_width">
        <div class="fixed_width">
            <div class="at_a_glance_container">
                <div class="title"><strong><?php echo $title; ?></strong></div>
                <div class="grid">
                    <div class="text">
                        <p><?php echo $joined_date; ?></p>
                        <p><?php echo $joined_date_title; ?></p>
                    </div>
                    <div class="text">
                        <p><?php echo $experience; ?></p>
                        <p><?php echo $experience_title; ?></p>
                    </div>
                    <div class="text">
                        <a target="_blank" href="<?php echo $favourite_project_link; ?>"></a>
                        <p><?php echo $favourite_project; ?></p>
                        <p><?php echo $favourite_project_title; ?></p>
                    </div>
                    <div class="text">
                        <p><?php echo $speciality; ?></p>
                        <p><?php echo $speciality_title; ?></p>
                    </div>
                    <div class="text">
                        <p><?php echo $favourite_hobby; ?></p>
                        <p><?php echo $favourite_hobby_title; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


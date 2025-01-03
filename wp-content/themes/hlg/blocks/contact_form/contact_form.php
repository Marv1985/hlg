<?php 
/**
 * Contact Form Block template.
 *
 * @param array $block The block settings and attributes.
 */

 // VARS
 $title = esc_html(get_field('title'));
 $paragraph = esc_html(get_field('paragraph'));
 $email = esc_html(get_field('email', 'option'));
 $email_url = esc_html(get_field('email_url', 'option'));
 $address = esc_html(get_field('address', 'option'));
 $allowed_html = array('br' => array());
 $instagram = esc_html(get_field('instagram', 'option'));
 $instagram_url = esc_url(get_field('instagram_url', 'option'));
 $linkedin = esc_html(get_field('linkedin', 'option'));
 $linkedin_url = esc_url(get_field('linkedin_url', 'option'));
 $youtube = esc_html(get_field('youtube', 'option'));
 $youtube_url = esc_url(get_field('youtube_url', 'option'));
?>

<section>
    <div class="contact_form_parent full_width">
        <div class="fixed_width">
            <div class="left_side">
                <div class="title">
                    <h1><?php echo $title; ?></h1>
                    <p><?php echo $paragraph; ?></p>
                </div>
                <div class="company_details">
                    <div class="address_container">
                        <div class="email">
                            <div class='link'>
                                <a href="mailto:<?php echo $email_url; ?>">
                                <span class="material-symbols-outlined"> mail </span>
                                <p><?php echo $email; ?></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="socials">
                        <div class='link'>
                            <a target='_blank' href="<?php echo $instagram_url; ?>">
                            <?php get_template_part( 'img/instagram' ); ?>
                            <p><?php echo $instagram; ?></p>
                            </a>
                        </div>
                        <div class='link'>
                            <a target='_blank' href="<?php echo $linkedin_url; ?>">
                            <?php get_template_part( 'img/linkedin' ); ?>
                            <p><?php echo $linkedin; ?></p>
                            </a>
                        </div>
                        <div class='link'>
                            <a target='_blank' href="<?php echo $youtube_url; ?>">
                            <?php get_template_part( 'img/youtube' ); ?>
                            <p><?php echo $youtube; ?></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right_side">
                <?php echo do_shortcode('[forminator_form id="724"]'); ?>
                <p class='captcha_text'>This site is protected by reCAPTCHA and the Google <a target='_blank' href="https://policies.google.com/privacy?hl=en-GB">Privacy Policy</a> and <a target='_blank' href="https://policies.google.com/terms?hl=en-GB">Terms of Service</a> apply.</p>
            </div>
        </div>
    </div>
</section>


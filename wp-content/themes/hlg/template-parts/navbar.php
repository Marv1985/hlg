<?php
    // PROPS
    $result = $args['result'];
    $make_white = $args['make_white'];
    $button_url = esc_html(get_field('start_your_project_url', 'option'));
    $button_text = esc_html(get_field('start_your_project_text', 'option'));
    $projects = esc_html(get_field('projects', 'option'));
    $about = esc_html(get_field('about', 'option'));
    $services = esc_html(get_field('services', 'option'));
    $blog = esc_html(get_field('blog', 'option'));
    $contact = esc_html(get_field('contact', 'option'));
    $projects_url = esc_html(get_field('projects_url', 'option'));
    $about_url = esc_html(get_field('about_url', 'option'));
    $services_url = esc_html(get_field('services_url', 'option'));
    $blog_url = esc_html(get_field('blog_url', 'option'));
    $contact_url = esc_html(get_field('contact_url', 'option'));
    // Services Dropdown    
    $branding_title = esc_html(get_field('branding_title', 'option'));
    $branding_url = esc_html(get_field('branding_url', 'option'));
    $websites_title = esc_html(get_field('websites_title', 'option'));
    $websites_url = esc_html(get_field('websites_url', 'option'));
    $motion_title = esc_html(get_field('motion_title', 'option'));
    $motion_url = esc_html(get_field('motion_url', 'option'));
    $digital_marketing_title = esc_html(get_field('digital_marketing_title', 'option'));
    $digital_marketing_url = esc_html(get_field('digital_marketing_url', 'option'));
    $photography_title = esc_html(get_field('photography_title', 'option'));
    $photography_url = esc_html(get_field('photography_url', 'option'));
    $graphic_design_title = esc_html(get_field('graphic_design_title', 'option'));
    $graphic_design_url = esc_html(get_field('graphic_design_url', 'option'));
?>

<?php 

    $background = '';
    $start_your_project = '';

    if(is_page(1032)) {
        $background = 'orange';
        $start_your_project = 'start_your_project';
    }
?>


<!-- conditional logo based on class being yellow or white -->
<nav>
    <div id="navbar_template" class="navbar full_width <?php echo $result; ?> <?php echo $make_white; ?> <?php echo $background; ?> <?php echo $start_your_project; ?>">
        <div class="fixed_width">
            <div class='logo'>
                <a aria-label="Home Page"  class="logo_orange" href="<?php echo get_home_url(); ?>">
                    <?php get_template_part( 'img/navbar_hlg_logo' ); ?>
                </a>
                <a aria-label="Home Page" class="logo_white" href="<?php echo get_home_url(); ?>">
                    <?php get_template_part( 'img/navbar_hlg_glasses' ); ?>
                    <?php get_template_part('img/glasses'); ?>
                </a>
            </div>
            <!-- center dropdowns -->
            <div class="dropdowns">
                <ul>
                    <li>
                        <a href="<?php echo get_home_url() . '/' . $projects_url; ?>"><?php echo $projects; ?></a>
                    </li>
                    <li>
                        <a href="<?php echo get_home_url() . '/' . $about_url; ?>"><?php echo $about; ?></a>
                    </li>
                    <li class="services">
                    <a href="<?php echo get_home_url() . '/' . $services_url; ?>"><?php echo $services; ?></a>
                        <div class="left_curve"><?php get_template_part('img/navbar_curve'); ?></div>
                        <div class="right_curve"><?php get_template_part('img/navbar_curve'); ?></div>
                        <div class="dropdown_top"></div>
                        <div class="services_dropdown">
                             <!-- dropdown menu hover effect div -->
                             <div class="hover_div"></div>
                            <!-- services dropdown menu -->
                            <a href="<?php echo get_home_url(). '/'. $branding_url; ?>">
                                <p><?php echo $branding_title; ?></p>
                            </a>
                            <a href="<?php echo get_home_url(). '/'. $websites_url; ?>">
                                <p><?php echo $websites_title; ?></p>
                            </a>
                            <a href="<?php echo get_home_url() . '/' . $motion_url; ?>">
                                <p><?php echo $motion_title; ?></p>
                            </a>
                            <a href="<?php echo get_home_url() . '/' . $digital_marketing_url; ?>">
                                <p><?php echo $digital_marketing_title; ?></p>
                            </a>
                            <a href="<?php echo get_home_url() . '/' . $photography_url; ?>">
                                <p><?php echo $photography_title; ?></p>
                            </a>
                            <a href="<?php echo get_home_url() . '/' . $graphic_design_url; ?>">
                                <p><?php echo $graphic_design_title; ?></p>
                            </a>

                            
                        </div>
                        
                    </li>
                    <li>
                        <a href="<?php echo get_home_url() . '/' . $blog_url; ?>"><?php echo $blog; ?></a>
                    </li>
                    <li>
                        <a href="<?php echo get_home_url() . '/' . $contact_url; ?>"><?php echo $contact; ?></a>
                    </li>
                </ul>
            </div>
            <!-- right side button -->
            <div class="button">
                <?php get_template_part('template-parts/navigation_button', null, array('button_url' => get_home_url() . '/' . $button_url, 'button_text' => $button_text)); ?>
            </div>
            <!-- mobile button -->
            <div class="mobile_button">
                <button aria-label='menu'>
                    <div class="dots">
                        <?php get_template_part('img/navbar_dot'); ?>
                        <?php get_template_part('img/navbar_dot'); ?>
                        <?php get_template_part('img/navbar_dot'); ?>
                    </div>
                </button>
            </div>
            <!-- mobile menu -->
            <div class="mobile_menu">
                <div class="glasses_logo">
                    <a href="<?php echo get_home_url(); ?>">
                        <?php get_template_part('img/glasses'); ?>
                    </a>
                </div>
                <div class="links">
                    <ul>
                        <li>
                            <a href="<?php echo get_home_url() . '/' . $projects_url; ?>"><?php echo $projects; ?></a>
                        </li>
                        <li>
                            <a href="<?php echo get_home_url() . '/' . $about_url; ?>"><?php echo $about; ?></a>
                        </li>
                        <li class="services">
                            <a href="<?php echo get_home_url() . '/' . $services_url; ?>"><?php echo $services; ?></a>
                        </li>
                        <li>
                            <a href="<?php echo get_home_url() . '/' . $blog_url; ?>"><?php echo $blog; ?></a>
                        </li>
                        <li>
                            <a href="<?php echo get_home_url() . '/' . $contact_url; ?>"><?php echo $contact; ?></a>
                        </li>
                    </ul>
                </div>
                <?php get_template_part('template-parts/navigation_button', null, array('button_url' => get_home_url() . '/' . $button_url, 'button_text' => $button_text)); ?>
            </div>
        </div>
    </div>
</nav>





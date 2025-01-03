<?php 
/**
 * Employee Benefits Block template.
 *
 * @param array $block The block settings and attributes.
 */
$title = esc_html(get_field('title'));
?>

<section>
    <div class="employee_benefits_parent full_width">
        <div class="fixed_width">
            <div class="title">
                <h2><?php echo $title; ?></h2>
            </div>
            <div class="benefits_container">
                <?php if( have_rows('benefits') ): ?>
                <?php while( have_rows('benefits') ): the_row(); 
                    $number = esc_html(get_sub_field('number'));
                    $title = esc_html(get_sub_field('title'));
                    $paragraph = esc_html(get_sub_field('paragraph'));
                    ?>

                    <div class="benefit">
                        <p class="number"><?php echo $number; ?></p>
                        <h3><?php echo $title; ?></h3>
                        <p class="paragraph"><?php echo $paragraph; ?></p>
                    </div>
                    
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>



<?php /* Template Name: Page Builder */ get_header(); ?>
<?php if (have_rows('sections')): ?>
<?php while (have_rows('sections')) : the_row(); ?>
<?php get_template_part('sections/section', get_row_layout()); ?>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
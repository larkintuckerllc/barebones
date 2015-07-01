<?php get_header(); ?>
<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
<?php get_search_form(); ?>
<?php while (have_posts()) : the_post(); ?>
  <?php the_field('top'); ?>
  <?php the_field('bottom'); ?>
<?php endwhile; ?>
<?php get_footer(); ?>

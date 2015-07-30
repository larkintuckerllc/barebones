<?php get_header(); ?>
<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
<?php if (function_exists('yoast_breadcrumb')) {
   yoast_breadcrumb();
 }?>
 <h1><?php the_title(); ?></h1>
<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>
<?php get_footer(); ?>

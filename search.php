<?php get_header(); ?>
<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
<?php if (function_exists('yoast_breadcrumb')) {
   yoast_breadcrumb();
 }?>
<?php get_search_form(); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <p><b><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></b></p>
  <?php endwhile; ?>
<?php else : ?>
  <p>No matches.</p>
<?php endif; ?>
<?php get_footer(); ?>

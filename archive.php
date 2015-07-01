<?php get_header(); ?>
<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
<?php if (function_exists('yoast_breadcrumb')) {
   yoast_breadcrumb();
 }?>
<?php while (have_posts()) : the_post(); ?>
  <p><b><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></b><br />
  <i><?php the_time('F j, Y'); ?></i><br /></p>
  <?php the_content('', false); ?>
<?php endwhile; ?>
<?php get_footer(); ?>

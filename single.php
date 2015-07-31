<?php get_header(); ?>
<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
<?php if (function_exists('yoast_breadcrumb')) {
  yoast_breadcrumb();
}?>
<?php while (have_posts()) : the_post(); ?>
  <p><b><?php the_title(); ?></b><br />
  <i><?php the_time('F j, Y'); ?></i><br /></p>
  <?php the_content(); ?>
  <?php
  if (comments_open() || get_comments_number()) :
    comments_template();
  endif;
  ?>
<?php endwhile; ?>
<?php get_footer(); ?>

<?php
/**
 * Template Name: Elementor Canvas
 * Description: Pusty szablon — tylko treść, bez nagłówka i stopki. Do budowy landing page.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>
<body <?php body_class('cd-canvas'); ?>>
<?php wp_body_open(); ?>
<?php while (have_posts()): the_post(); the_content(); endwhile; ?>
<?php wp_footer(); ?>
</body>
</html>

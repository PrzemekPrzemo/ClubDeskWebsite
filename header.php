<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="cd-nav" id="navbar">
  <div class="cd-nav__inner">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="cd-nav__logo">
      <?php if (has_custom_logo()): the_custom_logo(); else: ?>
        <svg viewBox="0 0 40 40" fill="none" width="40" height="40"><path d="M12 8c-6 4-8 12-4 18s12 8 18 4M28 32c6-4 8-12 4-18S20 6 14 10" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/><circle cx="10" cy="12" r="2" fill="#EE2C28"/><circle cx="30" cy="28" r="2" fill="#EE2C28"/></svg>
        <span>clubdesk.pl</span>
      <?php endif; ?>
    </a>
    <?php wp_nav_menu(['theme_location'=>'primary','fallback_cb'=>false]); ?>
    <button class="cd-nav__hamburger" aria-label="Menu"><span></span><span></span><span></span></button>
  </div>
</nav>
<div class="cd-nav-overlay"></div>
<main class="cd-main">

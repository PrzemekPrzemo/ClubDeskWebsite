<?php get_header(); ?>
<div class="cd-container cd-content">
  <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <article <?php post_class(); ?>>
      <h1><?php the_title(); ?></h1>
      <div><?php the_content(); ?></div>
    </article>
  <?php endwhile; else: ?>
    <p>Brak treści.</p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>

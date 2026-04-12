<?php get_header(); ?>
<div class="cd-container cd-content" style="text-align:center;padding:6rem 1.5rem">
  <h1 style="font-size:4rem;color:var(--cd-red)">404</h1>
  <h2>Strona nie została znaleziona</h2>
  <p style="margin:1.5rem 0">Strona której szukasz nie istnieje.</p>
  <a href="<?php echo esc_url(home_url('/')); ?>" class="cd-btn cd-btn--primary">Strona główna</a>
</div>
<?php get_footer(); ?>

</main>
<footer class="cd-footer">
  <div class="cd-container">
    <div class="cd-footer__center">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="cd-footer__logo">
        <?php if (has_custom_logo()):
          $logo_id = get_theme_mod('custom_logo');
          $logo_url = wp_get_attachment_image_url($logo_id, 'full');
        ?>
          <img src="<?php echo esc_url($logo_url); ?>" alt="<?php bloginfo('name'); ?>">
        <?php else: ?>
          <svg viewBox="0 0 40 40" fill="none" width="40" height="40"><path d="M12 8c-6 4-8 12-4 18s12 8 18 4M28 32c6-4 8-12 4-18S20 6 14 10" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/><circle cx="10" cy="12" r="2" fill="#EE2C28"/><circle cx="30" cy="28" r="2" fill="#EE2C28"/></svg>
        <?php endif; ?>
      </a>
    </div>
    <div class="cd-footer__bottom">
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> — Wszelkie prawa zastrzeżone.</p>
    </div>
  </div>
</footer>
<a href="#" class="cd-back-to-top" aria-label="Wróć na górę"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" width="20" height="20"><path d="M18 15l-6-6-6 6"/></svg></a>
<?php wp_footer(); ?>
</body>
</html>

</main>
<footer class="cd-footer">
  <div class="cd-container">
    <div class="cd-footer__inner">
      <div class="cd-footer__brand">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="cd-nav__logo" style="color:var(--cd-white)">
          <svg viewBox="0 0 40 40" fill="none" width="36" height="36"><path d="M12 8c-6 4-8 12-4 18s12 8 18 4M28 32c6-4 8-12 4-18S20 6 14 10" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/><circle cx="10" cy="12" r="2" fill="#EE2C28"/><circle cx="30" cy="28" r="2" fill="#EE2C28"/></svg>
          <span>clubdesk.pl</span>
        </a>
        <p>Wielosportowy system zarządzania klubem sportowym. 100% online.</p>
      </div>
      <div class="cd-footer__widgets">
        <?php if (is_active_sidebar('footer-1')): ?><div class="cd-footer__col"><?php dynamic_sidebar('footer-1'); ?></div><?php endif; ?>
        <?php if (is_active_sidebar('footer-2')): ?><div class="cd-footer__col"><?php dynamic_sidebar('footer-2'); ?></div><?php endif; ?>
      </div>
    </div>
    <div class="cd-footer__bottom">
      <p>&copy; <?php echo date('Y'); ?> ClubDesk.pl — Wszelkie prawa zastrzeżone.</p>
    </div>
  </div>
</footer>
<a href="#" class="cd-back-to-top" aria-label="Wróć na górę"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" width="20" height="20"><path d="M18 15l-6-6-6 6"/></svg></a>
<?php wp_footer(); ?>
</body>
</html>

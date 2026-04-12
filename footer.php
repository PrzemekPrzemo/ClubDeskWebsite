</main>
<footer class="cd-footer">
  <div class="cd-container">
    <div class="cd-footer__inner">
      <div class="cd-footer__brand">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="cd-nav__logo" style="color:var(--cd-white)">
          <?php if (has_custom_logo()):
            $logo_id = get_theme_mod('custom_logo');
            $logo_url = wp_get_attachment_image_url($logo_id, 'full');
          ?>
            <img src="<?php echo esc_url($logo_url); ?>" alt="<?php bloginfo('name'); ?>" style="height:40px;width:auto">
          <?php else: ?>
            <svg viewBox="0 0 40 40" fill="none" width="36" height="36"><path d="M12 8c-6 4-8 12-4 18s12 8 18 4M28 32c6-4 8-12 4-18S20 6 14 10" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/><circle cx="10" cy="12" r="2" fill="#EE2C28"/><circle cx="30" cy="28" r="2" fill="#EE2C28"/></svg>
          <?php endif; ?>
          <span><?php bloginfo('name'); ?></span>
        </a>
        <p><?php bloginfo('description'); ?></p>
      </div>
      <div class="cd-footer__nav">
        <h4>Nawigacja</h4>
        <?php wp_nav_menu(['theme_location'=>'primary','container'=>false,'menu_class'=>'cd-footer__menu','depth'=>1,'fallback_cb'=>false]); ?>
      </div>
      <div class="cd-footer__contact">
        <h4>Kontakt</h4>
        <ul class="cd-footer__menu">
          <li><a href="mailto:<?php echo esc_attr(get_theme_mod('clubdesk_email','kontakt@clubdesk.pl')); ?>"><?php echo esc_html(get_theme_mod('clubdesk_email','kontakt@clubdesk.pl')); ?></a></li>
          <li><a href="tel:<?php echo esc_attr(preg_replace('/\s/','',(get_theme_mod('clubdesk_phone','+48 XXX XXX XXX')))); ?>"><?php echo esc_html(get_theme_mod('clubdesk_phone','+48 XXX XXX XXX')); ?></a></li>
          <li><span><?php echo esc_html(get_theme_mod('clubdesk_hours','Pon — Pt: 9:00 — 17:00')); ?></span></li>
        </ul>
      </div>
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

<section class="cd-section" id="sporty">
  <div class="cd-container">
    <div class="cd-section__header">
      <span class="cd-label">Sporty</span>
      <h2>System dla <span class="cd-text-red">każdego</span> sportu</h2>
      <p>Architektura pluginowa — każda z <strong>59 dyscyplin</strong> ma dedykowane moduły dopasowane do specyfiki sportu.</p>
    </div>
    <div class="cd-grid cd-grid--6">
      <?php
      $sports = require get_template_directory() . '/inc/sports-data.php';
      foreach ($sports as $s): ?>
        <div class="cd-sport">
          <span class="cd-sport__name"><?php echo esc_html($s['name']); ?></span>
          <span class="cd-sport__fed"><?php echo esc_html($s['fed']); ?></span>
          <span class="cd-badge cd-badge--<?php echo $s['type']==='drużynowy'?'team':'ind'; ?>"><?php echo esc_html($s['type']); ?></span>
        </div>
      <?php endforeach; ?>
    </div>
    <p class="cd-text-center" style="margin-top:2rem;color:var(--cd-charcoal-light)">Nie widzisz swojego sportu? <a href="#kontakt"><strong>Skontaktuj się z nami</strong></a> — dodanie nowego to kwestia konfiguracji.</p>
    <div class="cd-callout">
      <p><strong>Integracja z polskimi związkami sportowymi</strong> — współpracujemy z federacjami (PZPN, PZKosz, PZPS, PZSS, PZLA, ZPRP i wiele innych) tam, gdzie to możliwe. Integrujemy się również z <strong>biurami księgowymi</strong>.</p>
    </div>
  </div>
</section>

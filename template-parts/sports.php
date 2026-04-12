<section class="cd-section" id="sporty">
  <div class="cd-container">
    <div class="cd-section__header">
      <span class="cd-label">Sporty</span>
      <h2>System dla <span class="cd-text-red">każdego</span> sportu</h2>
      <p>Architektura pluginowa — każdy sport ma dedykowane moduły dopasowane do specyfiki dyscypliny.</p>
    </div>
    <div class="cd-grid cd-grid--6">
      <?php
      $sports = [
        ['Piłka nożna','PZPN','drużynowy'],['Koszykówka','PZKosz','drużynowy'],
        ['Siatkówka','PZPS','drużynowy'],['Strzelectwo','PZSS','indywidualny'],
        ['Lekka atletyka','PZLA','indywidualny'],['Hokej na lodzie','PZHL','drużynowy'],
        ['Piłka ręczna','ZPRP','drużynowy'],['Tenis','PZT','indywidualny'],
        ['Pływanie','PZP','indywidualny'],['Judo','PZJ','indywidualny'],
        ['Karate','PZKarate','indywidualny'],['Wrotkarstwo','PZWrot','indywidualny'],
      ];
      foreach ($sports as $s): ?>
        <div class="cd-sport">
          <span class="cd-sport__name"><?php echo $s[0]; ?></span>
          <span class="cd-sport__fed"><?php echo $s[1]; ?></span>
          <span class="cd-badge cd-badge--<?php echo $s[2]==='drużynowy'?'team':'ind'; ?>"><?php echo $s[2]; ?></span>
        </div>
      <?php endforeach; ?>
    </div>
    <p class="cd-text-center" style="margin-top:2rem;color:var(--cd-charcoal-light)">Nie widzisz swojego sportu? <a href="#kontakt"><strong>Skontaktuj się z nami</strong></a> — dodanie nowego to kwestia konfiguracji.</p>
    <div class="cd-callout">
      <p><strong>Integracja z polskimi związkami sportowymi</strong> — współpracujemy z federacjami (PZPN, PZKosz, PZPS, PZSS, PZLA i inne) tam, gdzie to możliwe. Integrujemy się również z <strong>biurami księgowymi</strong>.</p>
    </div>
  </div>
</section>

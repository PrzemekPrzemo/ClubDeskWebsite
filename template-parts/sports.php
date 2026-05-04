<section class="cd-section" id="sporty">
  <div class="cd-container">
    <div class="cd-section__header">
      <span class="cd-label">Sporty</span>
      <h2>System dla <span class="cd-text-red">każdego</span> sportu</h2>
      <p>Architektura pluginowa — każda z <strong>50 dyscyplin</strong> ma dedykowane moduły dopasowane do specyfiki sportu.</p>
    </div>
    <div class="cd-grid cd-grid--6">
      <?php
      $sports = [
        // Sporty drużynowe
        ['Piłka nożna','PZPN','drużynowy'],
        ['Koszykówka','PZKosz','drużynowy'],
        ['Siatkówka','PZPS','drużynowy'],
        ['Piłka ręczna','ZPRP','drużynowy'],
        ['Hokej na lodzie','PZHL','drużynowy'],
        ['Hokej na trawie','PZHT','drużynowy'],
        ['Unihokej','PZFloor','drużynowy'],
        ['Rugby','PZR','drużynowy'],
        // Sporty indywidualne — sztuki walki
        ['Judo','PZJudo','indywidualny'],
        ['Karate','PZKarate','indywidualny'],
        ['Taekwondo','PZTK','indywidualny'],
        ['Aikido','PZAikido','indywidualny'],
        ['Boks','PZBoks','indywidualny'],
        ['Kickboxing','PZKickB','indywidualny'],
        ['MMA','PFMMA','indywidualny'],
        ['Zapasy','PZZap','indywidualny'],
        ['BJJ','PZBJJ','indywidualny'],
        ['Sambo','PFSambo','indywidualny'],
        ['Szermierka','PZSzerm','indywidualny'],
        // Sporty indywidualne — atletyczne
        ['Lekka atletyka','PZLA','indywidualny'],
        ['Pływanie','PZP','indywidualny'],
        ['Gimnastyka','PZGimn','indywidualny'],
        ['Wioślarstwo','PZWiosl','indywidualny'],
        ['Kajakarstwo','PZKaj','indywidualny'],
        ['Kolarstwo','PZKol','indywidualny'],
        ['Triatlon','PTri','indywidualny'],
        ['Wspinaczka','PZAlp','indywidualny'],
        ['Podnoszenie ciężarów','PLPC','indywidualny'],
        ['Trójbój siłowy','PLPA','indywidualny'],
        // Sporty z rakietą
        ['Tenis','PZT','indywidualny'],
        ['Badminton','PZBad','indywidualny'],
        ['Tenis stołowy','PZTS','indywidualny'],
        ['Squash','PZSquash','indywidualny'],
        ['Padel','PadPL','indywidualny'],
        ['Golf','PZGolf','indywidualny'],
        // Sporty zimowe
        ['Narciarstwo alpejskie','PZN','indywidualny'],
        ['Skoki narciarskie','PZN','indywidualny'],
        ['Narciarstwo biegowe','PZNB','indywidualny'],
        ['Snowboard','PZSnow','indywidualny'],
        ['Biathlon','PZBiath','indywidualny'],
        ['Łyżwiarstwo figurowe','PZŁF','indywidualny'],
        // Pozostałe
        ['Strzelectwo','PZSS','indywidualny'],
        ['Łucznictwo','PZŁucz','indywidualny'],
        ['Wrotkarstwo','PZWrot','indywidualny'],
        ['Żeglarstwo','PZŻegl','indywidualny'],
        ['Jeździectwo','PZJezd','indywidualny'],
        ['Szachy','PZSzach','indywidualny'],
        ['Brydż sportowy','PZBryd','indywidualny'],
        ['Taniec sportowy','PZTaniec','indywidualny'],
        ['CrossFit','CrossFit','indywidualny'],
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
      <p><strong>Integracja z polskimi związkami sportowymi</strong> — współpracujemy z federacjami (PZPN, PZKosz, PZPS, PZSS, PZLA, ZPRP i wiele innych) tam, gdzie to możliwe. Integrujemy się również z <strong>biurami księgowymi</strong>.</p>
    </div>
  </div>
</section>

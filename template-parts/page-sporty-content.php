<?php
$sporty = [
  [
    'nazwa'      => 'Piłka nożna',
    'federacja'  => 'PZPN',
    'typ'        => 'team',
    'icon'       => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="16" cy="16" r="12"/><path d="M16 4a12 12 0 0 1 8.5 3.5M16 4a12 12 0 0 0-8.5 3.5M7.5 7.5L12 14M24.5 7.5L20 14M12 14h8M20 14l2 8M12 14l-2 8M10 22h12M22 22a12 12 0 0 0 2.5-4.5M10 22a12 12 0 0 1-2.5-4.5"/></svg>',
    'dedykowane' => ['Zarządzanie składem i transfery zawodników','Protokoły meczowe','Tabele ligowe i klasyfikacje','System sędziowski','Planowanie rozgrywek i terminarze','Statystyki meczowe (bramki, kartki, asysty)'],
  ],
  [
    'nazwa'      => 'Koszykówka',
    'federacja'  => 'PZKosz',
    'typ'        => 'team',
    'icon'       => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="16" cy="16" r="12"/><path d="M4 16h24M16 4v24M8 7a10 10 0 0 0 0 18M24 7a10 10 0 0 1 0 18"/></svg>',
    'dedykowane' => ['Statystyki zawodnika (punkty, zbiórki, asysty, bloki)','Składy drużyn i rotacje','Wyniki meczów i kwart','Tabele rozgrywek','Planowanie treningowych wariantów taktycznych','Rankingi sezonowe'],
  ],
  [
    'nazwa'      => 'Siatkówka',
    'federacja'  => 'PZPS',
    'typ'        => 'team',
    'icon'       => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="16" cy="16" r="12"/><path d="M4 16h24M10 5.5c3 3 3 8 0 13M22 5.5c-3 3-3 8 0 13"/></svg>',
    'dedykowane' => ['Śledzenie setów i punktów','Statystyki drużyny per set','Wyniki meczów i fazy','Tabele ligowe','Protokoły meczowe','Składy i rotacje zawodników'],
  ],
  [
    'nazwa'      => 'Strzelectwo',
    'federacja'  => 'PZSS',
    'typ'        => 'ind',
    'shootero'   => true,
    'icon'       => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="16" cy="16" r="10"/><circle cx="16" cy="16" r="4"/><path d="M16 2v4M16 26v4M2 16h4M26 16h4"/></svg>',
    'dedykowane' => ['Ewidencja broni i amunicji','Licencje PZSS z weryfikacją QR','Karty wynikowe i score sheets','System sędziowski z certyfikatami','Dyscypliny strzeleckie (pistolet, karabin, strzelba)','Rankingi strzelców i tabele zawodów'],
  ],
  [
    'nazwa'      => 'Lekka atletyka',
    'federacja'  => 'PZLA',
    'typ'        => 'ind',
    'icon'       => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="20" cy="7" r="3"/><path d="M18 10l-4 8 5 4-3 8M14 18l-8 2"/></svg>',
    'dedykowane' => ['Profile indywidualne per dyscyplina','Rekordy czasowe i odległościowe','Wyniki per konkurencja (skok, rzut, bieg)','Kategorie wiekowe','Kalendarze mitingów','Statystyki progresji zawodnika'],
  ],
  [
    'nazwa'      => 'Hokej na lodzie',
    'federacja'  => 'PZHL',
    'typ'        => 'team',
    'icon'       => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><path d="M6 24c0-4 10-14 20-14M6 24h20M10 24l2-8M22 24l-2-8"/><circle cx="9" cy="10" r="3"/></svg>',
    'dedykowane' => ['Składy drużyn i transfery','Planowanie meczów i terminarz','Statystyki zawodników (gole, asysty, +/-)','Ewidencja kar i wykluczenia','Tabele ligowe i play-off','Protokoły meczowe'],
  ],
  [
    'nazwa'      => 'Piłka ręczna',
    'federacja'  => 'ZPRP',
    'typ'        => 'team',
    'icon'       => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="16" cy="16" r="12"/><path d="M16 4v24M8 8l16 16M24 8L8 24"/></svg>',
    'dedykowane' => ['Zarządzanie składem drużyny','Wyniki meczów i połowy','Tabele ligowe','Statystyki bramkarzy','Planowanie treningowych scen taktycznych','Protokoły zawodów'],
  ],
  [
    'nazwa'      => 'Tenis',
    'federacja'  => 'PZT',
    'typ'        => 'ind',
    'icon'       => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="16" cy="16" r="12"/><path d="M6 10c3 1 5 4 5 6s-2 5-5 6M26 10c-3 1-5 4-5 6s2 5 5 6"/></svg>',
    'dedykowane' => ['Rankingi indywidualne (ATP/WTA style)','Drabinki turniejowe (eliminacje, bracket)','Wyniki meczów i setów','Statystyki serwów i returnów','Kategorie wiekowe i klasowe','Historia spotkań head-to-head'],
  ],
  [
    'nazwa'      => 'Pływanie',
    'federacja'  => 'PZP',
    'typ'        => 'ind',
    'icon'       => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><path d="M4 20c2-2 4-2 6 0s4 2 6 0 4-2 6 0 4 2 6 0M4 24c2-2 4-2 6 0s4 2 6 0 4-2 6 0 4 2 6 0"/><circle cx="22" cy="10" r="3"/><path d="M22 13l-4 5h-6"/></svg>',
    'dedykowane' => ['Wyniki indywidualne per dystans i styl','Rekordy czasowe i automatyczne porównania','Kategorie wiekowe i płci','Wyniki heats i finałów','Śledzenie technik pływania','Tabele klasyfikacyjne'],
  ],
  [
    'nazwa'      => 'Wrotkarstwo',
    'federacja'  => 'PZWrot',
    'typ'        => 'ind',
    'icon'       => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><rect x="6" y="16" width="20" height="8" rx="3"/><circle cx="11" cy="27" r="2"/><circle cx="21" cy="27" r="2"/><path d="M10 16l4-8h4l4 8"/></svg>',
    'dedykowane' => ['Wyniki zawodów (szybkobieganie, short track)','Zarządzanie startami i eliminacjami','Kategorie wiekowe','Rankingi sezonowe','Rekordy tras i dystansów','Historia startów zawodnika'],
  ],
  [
    'nazwa'      => 'Judo',
    'federacja'  => 'PZJ',
    'typ'        => 'ind',
    'icon'       => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="16" cy="8" r="4"/><path d="M10 14c0 4 2 8 6 8s6-4 6-8M8 28c2-4 4-6 8-6s6 2 8 6"/></svg>',
    'dedykowane' => ['System pasów i stopni (kyu/dan) z historią awansów','Kategorie wagowe zawodników','Wyniki zawodów (ippon, waza-ari, yuko)','Licencje PZJ i weryfikacja','Zarządzanie turniejami i drabinkami','Rankingi krajowe i regionalne'],
  ],
  [
    'nazwa'      => 'Karate',
    'federacja'  => 'PZKarate',
    'typ'        => 'ind',
    'icon'       => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="16" cy="7" r="3"/><path d="M16 10v8M10 14l6 4 6-4M12 28l4-6 4 6"/></svg>',
    'dedykowane' => ['System stopni kyu/dan z datą awansów','Wyniki kata i kumite osobno','Zarządzanie zawodami i drabinkami','Kategorie wiekowe i płci','Licencje i certyfikaty trenerskie','Rankingi regionalne i krajowe'],
  ],
];
$wspolne = 'Każdy sport: zarządzanie członkami, treningi i frekwencja, badania lekarskie, licencje, zawody, rankingi, komunikacja.';
?>

<section class="cd-page-hero">
  <div class="cd-container">
    <h1>Sporty obsługiwane przez <span>ClubDesk</span></h1>
    <p>50 dyscyplin sportowych z dedykowanymi funkcjami dopasowanymi do specyfiki każdego sportu. Jeden system — wszystkie potrzeby Twojego klubu.</p>
    <div class="cd-page-hero__badges">
      <?php foreach($sporty as $s): ?>
        <span><?php echo esc_html($s['federacja']); ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cd-section" id="lista-sportow">
  <div class="cd-container">
    <div class="cd-section__header">
      <span class="cd-label">Dyscypliny — część 1/2</span>
      <h2>Sporty z pełnym wsparciem</h2>
      <p>Szczegółowe moduły dedykowane specyfice każdej dyscypliny.</p>
    </div>
    <div class="cd-grid cd-grid--3">
      <?php foreach($sporty as $s): ?>
      <div class="cd-sport-card<?php if(!empty($s['shootero'])) echo ' cd-sport-card--shootero'; ?>">
        <div class="cd-sport-card__head">
          <div class="cd-sport-card__icon"><?php echo $s['icon']; ?></div>
          <div class="cd-sport-card__meta">
            <h4><?php echo esc_html($s['nazwa']); ?></h4>
            <div class="cd-sport-card__badges">
              <span class="cd-sport-card__fed"><?php echo esc_html($s['federacja']); ?></span>
              <?php if($s['typ']==='team'): ?>
                <span class="cd-badge cd-badge--team">Drużynowy</span>
              <?php else: ?>
                <span class="cd-badge cd-badge--ind">Indywidualny</span>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <ul>
          <?php foreach($s['dedykowane'] as $f): ?>
            <li><?php echo esc_html($f); ?></li>
          <?php endforeach; ?>
        </ul>
        <?php if(!empty($s['shootero'])): ?>
        <a href="https://shootero.pl" target="_blank" rel="noopener" class="cd-shootero-badge">
          <div class="cd-shootero-badge__inner">
            <svg width="22" height="22" viewBox="0 0 32 32" fill="none"><circle cx="16" cy="16" r="10" stroke="#EE2C28" stroke-width="2"/><circle cx="16" cy="16" r="4" fill="#EE2C28"/><line x1="16" y1="2" x2="16" y2="6" stroke="#EE2C28" stroke-width="2"/><line x1="16" y1="26" x2="16" y2="30" stroke="#EE2C28" stroke-width="2"/><line x1="2" y1="16" x2="6" y2="16" stroke="#EE2C28" stroke-width="2"/><line x1="26" y1="16" x2="30" y2="16" stroke="#EE2C28" stroke-width="2"/></svg>
            <div class="cd-shootero-badge__text">
              <span class="cd-shootero-badge__label">Obsługiwany przez</span>
              <span class="cd-shootero-badge__name">Shootero</span>
            </div>
            <svg class="cd-shootero-badge__arrow" width="14" height="14" viewBox="0 0 16 16" fill="none" stroke="#EE2C28" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
          </div>
        </a>
        <?php else: ?>
        <div class="cd-sport-card__common"><?php echo esc_html($wspolne); ?></div>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

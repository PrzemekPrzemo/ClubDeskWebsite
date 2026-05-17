<?php
$ik = [
  'team'      => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="10" cy="8" r="3"/><circle cx="22" cy="8" r="3"/><path d="M4 28v-3a6 6 0 0 1 12 0m4-9a6 6 0 0 1 6 6v3"/></svg>',
  'martial'   => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="16" cy="6" r="3"/><path d="M16 9v7l-5 7m5-7l5 7"/></svg>',
  'fencing'   => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><line x1="4" y1="28" x2="26" y2="6"/><path d="M22 10l4-4m0 0h-2v-2"/><path d="M9 23c2-1 4 0 5-2"/></svg>',
  'endurance' => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="18" cy="7" r="3"/><path d="M18 10l-4 6-6 2m10-8l4 6-2 6"/></svg>',
  'strength'  => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><rect x="1" y="13" width="4" height="6" rx="1"/><rect x="27" y="13" width="4" height="6" rx="1"/><rect x="5" y="12" width="5" height="8" rx="1"/><rect x="22" y="12" width="5" height="8" rx="1"/><line x1="10" y1="16" x2="22" y2="16" stroke-width="2"/></svg>',
  'racket'    => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="14" cy="13" r="9"/><path d="M20 20l8 8"/></svg>',
  'archery'   => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><path d="M8 4c0 10 0 14 0 24m0-24c5 2 8 6 8 12s-3 10-8 12"/><line x1="16" y1="16" x2="28" y2="16"/><path d="M24 12l4 4-4 4"/></svg>',
  'sailing'   => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><line x1="16" y1="4" x2="16" y2="24"/><path d="M16 4L5 20h11M16 8l10 12H16"/><path d="M4 24h24"/></svg>',
  'equestrian'=> '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="24" cy="7" r="2.5"/><path d="M26 9c2-1 2 2 0 4l-5 1-4 5-6 1-2 7"/></svg>',
  'chess'     => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><rect x="9" y="26" width="14" height="3" rx="1"/><path d="M11 26l2-8h6l2 8M13 18l-3-5h12l-3 5M16 4v8M12 8h8"/></svg>',
  'dance'     => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="11" cy="7" r="2.5"/><circle cx="21" cy="7" r="2.5"/><path d="M11 10c2 4 4 8 10 8m-10 0c2-4 6-6 10-8M9 28l2-10m12 10l-2-10"/></svg>',
  'climbing'  => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><path d="M6 4v24"/><path d="M6 8l6 4M6 16l8 3M6 22l5 3"/><circle cx="22" cy="8" r="3"/><path d="M22 11l-4 6-4 1 2 8"/></svg>',
  'crossfit'  => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="16" cy="6" r="3"/><path d="M16 9v6l-4 2m4-2l4 2M12 18l-2 8m8-8l2 8"/><rect x="2" y="14" width="3" height="3" rx="1"/><rect x="27" y="14" width="3" height="3" rx="1"/><line x1="5" y1="15.5" x2="27" y2="15.5" stroke-width="2"/></svg>',
];

$extra = [
  ['Unihokej','PZFloor','team','team',['Składy drużyn i wyniki meczów','Tabele ligowe i klasyfikacje','Protokoły zawodów','Statystyki zawodników (bramki, asysty)']],
  ['Taekwondo','PZTK','ind','martial',['System stopni kup/dan','Wyniki walk poomsae i kyorugi','Kategorie wagowe i wiekowe','Licencje PZTK']],
  ['Aikido','PZAikido','ind','martial',['System stopni kyu/dan','Historia egzaminów i awansów','Certyfikaty Aikikai','Zarządzanie instruktorami']],
  ['Boks','PZBoks','ind','martial',['Kategorie wagowe','Wyniki walk (punkty, KO, TKO)','Historia walk zawodnika','Licencje federacyjne']],
  ['Zapasy','PZZap','ind','martial',['Style rywalizacji (wolna, kl.-rz.)','Kategorie wagowe','Wyniki zawodów','Rankingi krajowe']],
  ['BJJ','PZBJJ','ind','martial',['System pasów (biały→czarny)','Wyniki zawodów gi/no-gi','Kategorie wagowe','Historia treningów']],
  ['Sambo','PFSambo','ind','martial',['Kategorie wagowe','Wyniki zawodów','Licencje PSF','Rankingi krajowe']],
  ['Szermierka','PZSzerm','ind','fencing',['Dyscypliny (floret, szabla, szpada)','Drabinki turniejowe','Wyniki meczów i walk','Rankingi indywidualne']],
  ['Wioślarstwo','PZWiosl','ind','endurance',['Wyniki regatowe per klasa łodzi','Rekordy torowe','Kategorie wiekowe','Historia regat']],
  ['Kolarstwo','PZKol','ind','endurance',['Wyniki wyścigów (szosa, tor, MTB)','Rankingi sezonowe','Zarządzanie drużynami','Historia etapów']],
  ['Triatlon','PTri','ind','endurance',['Wyniki per segment (swim/bike/run)','Sumaryczne czasy finiszu','Rankingi sezonu','Kategorie wiekowe']],
  ['Gimnastyka','PZGimn','ind','endurance',['Oceny sędziowskie per ćwiczenie','Kategorie wiekowe','Wyniki zawodów','Historia progresji']],
  ['Podnoszenie ciężarów','PLPC','ind','strength',['Wyniki per kategoria wagowa','Rekordy rwania i podrzutu','Rankingi PLPC','Historia startów']],
  ['Trójbój siłowy','PLPA','ind','strength',['Wyniki per kategoria (SBD)','Wskaźnik Wilksa/DOTS','Rankingi open i masters','Historia rekordów']],
  ['Badminton','PZBad','ind','racket',['Rankingi indywidualne i deblowe','Drabinki turniejowe','Wyniki meczów i setów','Kategorie wiekowe']],
  ['Tenis stołowy','PZTS','ind','racket',['Rankingi indywidualne i drużynowe','Wyniki meczów i setów','Drabinki turniejowe','Tabele ligowe']],
  ['Squash','PZSquash','ind','racket',['Rankingi indywidualne','Drabinki turniejowe','Historia head-to-head','Kategorie i poziomy']],
  ['Padel','PadPL','ind','racket',['Rankingi par deblowych','Drabinki turniejowe','Wyniki meczów i setów','Historia turniejów']],
  ['Łucznictwo','PZŁucz','ind','archery',['Dyscypliny (klasyczny, bloczkowy)','Wyniki zawodów per odległość','Rankingi krajowe','Licencje PZŁucz']],
  ['żeglarstwo','PZżegl','ind','sailing',['Wyniki regat per klasa jachtu','Licencje żeglarskie','Rankingi sezonowe','Historia regat']],
  ['Jeździectwo','PZJezd','ind','equestrian',['Wyniki (ujeżdżenie, skoki, trójbój)','Dokumentacja koni','Licencje PZJezd','Rankingi per dyscyplina']],
  ['Szachy','PZSzach','ind','chess',['Rankingi ELO','Wyniki turniejów runda po rundzie','Kategorie i klasy szachowe','Licencje PZSzach']],
  ['Taniec sportowy','PZTaniec','ind','dance',['Wyniki (standardowe, latyno)','Klasy taneczne (S-A-B-C)','Rankingi par','Kategorie wiekowe']],
  ['Wspinaczka','PZAlp','ind','climbing',['Wyniki (prowadzenie, buldering, szybkość)','Rankingi per dyscyplina','Kategorie wiekowe','Certyfikaty instruktorskie']],
  ['CrossFit','CrossFit','ind','crossfit',['Wyniki WOD i benchmarks','Rekordy osobiste (lifts, czasy)','Rankingi Open','Historia treningów i progresji']],
];
$wspolne = 'Każdy sport: zarządzanie członkami, treningi i frekwencja, badania lekarskie, licencje, zawody, rankingi.';
?>

<section class="cd-section cd-section--light" id="lista-sportow-2">
  <div class="cd-container">
    <div class="cd-section__header">
      <span class="cd-label">Dyscypliny — część 3/3</span>
      <h2>Kolejne 25 dyscyplin</h2>
      <p>Sztuki walki, sporty siłowe, rakietowe, wytrzymałościowe i wiele innych.</p>
    </div>
    <div class="cd-grid cd-grid--3">
      <?php foreach($extra as $s): ?>
      <div class="cd-sport-card">
        <div class="cd-sport-card__head">
          <div class="cd-sport-card__icon"><?php echo $ik[$s[3]]; ?></div>
          <div class="cd-sport-card__meta">
            <h4><?php echo esc_html($s[0]); ?></h4>
            <div class="cd-sport-card__badges">
              <span class="cd-sport-card__fed"><?php echo esc_html($s[1]); ?></span>
              <?php if($s[2]==='team'): ?>
                <span class="cd-badge cd-badge--team">Drużynowy</span>
              <?php else: ?>
                <span class="cd-badge cd-badge--ind">Indywidualny</span>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <ul>
          <?php foreach($s[4] as $f): ?>
            <li><?php echo esc_html($f); ?></li>
          <?php endforeach; ?>
        </ul>
        <div class="cd-sport-card__common"><?php echo esc_html($wspolne); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cd-section cd-section--slate">
  <div class="cd-container">
    <div class="cd-section__header">
      <span class="cd-label">Rozszerzalność</span>
      <h2>Nie widzisz swojego sportu?</h2>
      <p>Architektura ClubDesk jest w pełni rozszerzalna. Dodanie nowej dyscypliny to kwestia konfiguracji.</p>
    </div>
    <div class="cd-grid cd-grid--3">
      <div class="cd-diff"><div class="cd-diff__icon"><svg viewBox="0 0 22 22" fill="none" stroke="#EE2C28" stroke-width="1.5"><path d="M11 2v4M11 16v4M2 11h4M16 11h4"/><circle cx="11" cy="11" r="4"/></svg></div><div><h4>Szybka konfiguracja</h4><p>Nowy sport = wpis w bazie danych + plik manifest. Brak zmian w kodzie platformy.</p></div></div>
      <div class="cd-diff"><div class="cd-diff__icon"><svg viewBox="0 0 22 22" fill="none" stroke="#EE2C28" stroke-width="1.5"><rect x="2" y="2" width="18" height="18" rx="3"/><path d="M7 11h8M11 7v8"/></svg></div><div><h4>Własne pola danych</h4><p>Każda dyscyplina może mieć własne pola dodatkowe dopasowane do specyfiki sportu.</p></div></div>
      <div class="cd-diff"><div class="cd-diff__icon"><svg viewBox="0 0 22 22" fill="none" stroke="#EE2C28" stroke-width="1.5"><path d="M11 2L2 7v8l9 5 9-5V7l-9-5z"/></svg></div><div><h4>Współpraca z federacjami</h4><p>Jesteśmy otwarci na wdrożenia dla nowych związków sportowych i dyscyplin niszowych.</p></div></div>
    </div>
  </div>
</section>

<section class="cd-cta-band">
  <div class="cd-container">
    <h2>Twój sport jest na liście?</h2>
    <p>Umów bezpłatną konsultację i zacznij korzystać z ClubDesk już dziś.</p>
    <a href="<?php echo esc_url(home_url('/#kontakt')); ?>" class="cd-btn cd-btn--white cd-btn--lg">Umów konsultację</a>
  </div>
</section>

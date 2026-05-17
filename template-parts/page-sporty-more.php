<?php
$ik2 = [
  'team'      => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="10" cy="8" r="3"/><circle cx="22" cy="8" r="3"/><path d="M4 28v-3a6 6 0 0 1 12 0m4-9a6 6 0 0 1 6 6v3"/></svg>',
  'strength'  => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><rect x="1" y="13" width="4" height="6" rx="1"/><rect x="27" y="13" width="4" height="6" rx="1"/><rect x="5" y="12" width="5" height="8" rx="1"/><rect x="22" y="12" width="5" height="8" rx="1"/><line x1="10" y1="16" x2="22" y2="16" stroke-width="2"/></svg>',
  'waterpolo' => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="22" cy="10" r="5"/><path d="M17 10h10M22 5v10M19 6l6 8M25 6l-6 8"/><path d="M2 24c2-2 4-2 6 0s4 2 6 0 4-2 6 0 4 2 6 0"/></svg>',
  'curling'   => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="16" cy="20" r="6"/><circle cx="16" cy="20" r="3"/><path d="M16 14V6M12 8h8"/></svg>',
  'esport'    => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><rect x="3" y="10" width="26" height="14" rx="6"/><circle cx="22" cy="15" r="1.5"/><circle cx="25" cy="19" r="1.5"/><path d="M8 14v6M5 17h6"/></svg>',
  'studio'    => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="16" cy="6" r="3"/><path d="M16 9v8M8 12l8 5 8-5M10 28l6-11 6 11"/></svg>',
  'dance'     => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="11" cy="7" r="2.5"/><circle cx="21" cy="7" r="2.5"/><path d="M11 10c2 4 4 8 10 8m-10 0c2-4 6-6 10-8M9 28l2-10m12 10l-2-10"/></svg>',
];

$nowe = [
  ['Futsal','PZPN','team','team',['Składy drużyn i wyniki meczów','Tabele ligowe i statystyki bramek','Protokoły meczowe (faule, kartki)','Planowanie rozgrywek halowych']],
  ['Piłka wodna','PZPW','team','waterpolo',['Składy drużyn (7 + zmiennicy)','Wyniki meczów i kwart','Statystyki bramkarzy i strzelców','Protokoły zawodów']],
  ['Curling','PZCurl','team','curling',['Składy drużyn (skip, vice, lead, second)','Wyniki meczów i końców (ends)','Hammer alternation','Klasyfikacje ligowe']],
  ['E-sport','PZEsp','team','esport',['Składy drużyn i graczy','Wyniki spotkań i map','Rankingi turniejowe','Statystyki indywidualne']],
  ['Strongman','—','ind','strength',['Konkurencje siłowe (deadlift, log press, atlas)','Rekordy osobiste','Wyniki zawodów','Historia startów']],
  ['Joga','—','ind','studio',['Grafiki zajęć i rezerwacje','Karnety i pakiety wejść','Frekwencja uczestników','Profile instruktorów']],
  ['Pilates','—','ind','studio',['Grafiki zajęć (mat / reformer)','Karnety i pakiety wejść','Frekwencja uczestników','Profile instruktorów']],
  ['Fitness','—','ind','studio',['Grafiki zajęć grupowych','Karnety klubowe i wejściówki','Frekwencja uczestników','Profile trenerów']],
  ['Taniec','PZTan','ind','dance',['Style (towarzyski, latyno, hip-hop)','Karnety i grafiki zajęć','Pokazy i zawody','Profile par i instruktorów']],
];
$wspolne = 'Każdy sport: zarządzanie członkami, treningi i frekwencja, badania lekarskie, licencje, zawody, rankingi.';
?>

<section class="cd-section" id="lista-sportow-3">
  <div class="cd-container">
    <div class="cd-section__header">
      <span class="cd-label">Dyscypliny — część 3/3 — NOWE</span>
      <h2>Najnowsze dyscypliny w katalogu</h2>
      <p>Sporty zespołowe, studio i niszowe — kolejne 9 dyscyplin świeżo dodanych do platformy.</p>
    </div>
    <div class="cd-grid cd-grid--3">
      <?php foreach($nowe as $s): ?>
      <div class="cd-sport-card">
        <div class="cd-sport-card__head">
          <div class="cd-sport-card__icon"><?php echo $ik2[$s[3]]; ?></div>
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

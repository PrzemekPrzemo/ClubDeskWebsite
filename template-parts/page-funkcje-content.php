<?php
$moduly = [
  [
    'icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="16" cy="10" r="6"/><path d="M6 28c0-5.5 4.5-10 10-10s10 4.5 10 10"/></svg>',
    'nazwa' => 'Zarządzanie członkami',
    'opis'  => 'Kompletna kartoteka zawodników z profilem, zdjęciem i historią. Import masowy z CSV.',
    'lista' => ['Pełny profil z danymi osobowymi i kontaktowymi','Zdjęcie profilowe i dokumenty','Sekcje sportowe i kategorie wiekowe','Licencje sportowe ze statusami','Import masowy członków z CSV','Historia przynależności do sekcji','Statusy aktywności i archiwizacja','Eksport danych osobowych (RODO)'],
  ],
  [
    'icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><rect x="4" y="8" width="24" height="16" rx="2"/><path d="M4 14h24M12 14v10"/></svg>',
    'nazwa' => 'Finanse i składki',
    'opis'  => 'Pełna kontrola finansowa klubu. Konfiguracja stawek, śledzenie wpłat i zarządzanie zaległościami.',
    'lista' => ['Konfiguracja stawek opłat per sekcja','Rejestracja wpłat ręcznych i online','Historia płatności per członek','Alerty o zaległościach z powiadomieniami','Raporty finansowe i zestawienia','Eksport do programów księgowych','Płatności online (webhooki)','Panel księgowego z ograniczonym dostępem'],
  ],
  [
    'icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="16" cy="16" r="12"/><path d="M16 8v8l6 6"/></svg>',
    'nazwa' => 'Treningi',
    'opis'  => 'Planowanie sesji treningowych, listy obecności i szczegółowe statystyki frekwencji.',
    'lista' => ['Planowanie sesji treningowych','Elektroniczne listy obecności','Historia frekwencji per zawodnik','Miesięczne raporty frekwencji','Filtrowanie trenigów per sekcja','Alerty o niskiej frekwencji','Statystyki trenerów','Harmonogram tygodniowy'],
  ],
  [
    'icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><rect x="4" y="6" width="24" height="20" rx="2"/><path d="M4 12h24M10 6v6M22 6v6"/></svg>',
    'nazwa' => 'Kalendarz i wydarzenia',
    'opis'  => 'Kompleksowe zarządzanie zawodami, meczami i innymi wydarzeniami klubowymi.',
    'lista' => ['Planowanie meczów, zawodów, spotkań','Kategorie eventów per sport','Lokalizacje i informacje dodatkowe','Widok kalendarza i listy','Eksport do kalendarza (ICS)','Wyniki i protokoły wydarzeń','Rejestracja zawodników na start','Powiadomienia o zbliżających się wydarzeniach'],
  ],
  [
    'icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><path d="M6 24l6-6 4 4 6-8 6 8"/><rect x="2" y="4" width="28" height="24" rx="2"/></svg>',
    'nazwa' => 'Komunikacja',
    'opis'  => 'Wielokanałowa komunikacja z zawodnikami, trenerami i rodzicami.',
    'lista' => ['Szablony wiadomości e-mail','SMS przez SMSAPI i Twilio','Ogłoszenia in-app per sekcja/wszyscy','Powiadomienia push (mobile)','Wewnętrzna skrzynka wiadomości','Centrum powiadomień z odznaką','Historia korespondencji','Segmentacja odbiorców'],
  ],
  [
    'icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><path d="M16 2L6 8v8c0 8 10 14 10 14s10-6 10-14V8L16 2z"/><path d="M12 16l3 3 5-6"/></svg>',
    'nazwa' => 'Badania lekarskie',
    'opis'  => 'Rejestr badań z alertami terminów i widokiem dedykowanym dla lekarza.',
    'lista' => ['Rejestr badań per zawodnik','Alerty wygaśnięcia (30 dni wcześniej)','Typy badań i wyniki','Panel lekarza z ograniczonym dostępem','Historia badań','Eksport rejestru badań','Powiadomienia dla zawodników','Filtrowanie po statusie ważności'],
  ],
  [
    'icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><rect x="4" y="6" width="24" height="18" rx="2"/><path d="M4 12h24"/><rect x="10" y="16" width="5" height="4" rx="1"/><path d="M18 18h6"/></svg>',
    'nazwa' => 'Portal zawodnika',
    'opis'  => 'Samoobsługowy portal dla każdego członka klubu z dostępem do wszystkich swoich danych.',
    'lista' => ['Cyfrowa legitymacja z kodem QR','Harmonogram treningów tygodniowych','Historia frekwencji i statystyki','Własne składki i historia płatności','Rankingi i pozycja sezonowa','Rejestracja na zawody online','Centrum powiadomień','Zarządzanie zgodami RODO'],
  ],
  [
    'icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><path d="M16 4l3 7h7l-6 4 2 7-6-4-6 4 2-7-6-4h7z"/></svg>',
    'nazwa' => 'Rankingi i statystyki',
    'opis'  => 'Automatyczne tabele sezonowe i rozbudowane statystyki per zawodnik i dyscyplina.',
    'lista' => ['Tabele sezonowe per sport','Rankingi indywidualne','Historia wyników per zawodnik','Statystyki specyficzne per sport','Pasy i stopnie (sporty walki)','Porównania zawodników','Eksport statystyk','Widok publiczny rankingu'],
  ],
  [
    'icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="16" cy="13" r="5"/><rect x="4" y="6" width="24" height="20" rx="2"/><path d="M4 20h24"/></svg>',
    'nazwa' => 'Galeria i media',
    'opis'  => 'Albumy zdjęciowe powiązane z wydarzeniami oraz obsługa transmisji live.',
    'lista' => ['Albumy zdjęciowe per wydarzenie','Prześlij zdjęcia w partiach','Przeglądarka zdjęć dla członków','Transmisje live (livestream)','Archiwum mediów','Metadane zdjęć','Uprawnienia dostępu do albumu','Galeria publiczna / prywatna'],
  ],
  [
    'icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><path d="M6 8h20l-2 14H8L6 8z"/><path d="M4 8H2M12 8l1-4h6l1 4"/><circle cx="12" cy="26" r="2"/><circle cx="22" cy="26" r="2"/></svg>',
    'nazwa' => 'Sklep klubowy',
    'opis'  => 'Sprzedaż gadżetów i odzieży klubowej z pełną obsługą zamówień.',
    'lista' => ['Katalog produktów z opisami i zdjęciami','Koszyk i składanie zamówień','Zarządzanie stanami magazynowymi','Historia zamówień per członek','Panel zamówień dla administracji','Rozmiary i warianty produktów','Powiadomienia o nowych zamówieniach','Raport sprzedaży'],
  ],
  [
    'icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><rect x="4" y="14" width="24" height="14" rx="2"/><path d="M10 14V10a6 6 0 0 1 12 0v4"/><path d="M10 22h12"/></svg>',
    'nazwa' => 'Rezerwacja obiektów',
    'opis'  => 'System rezerwacji sal, boisk i hal treningowych z kalendarzem dostępności.',
    'lista' => ['Kalendarz boisk i sal','Rezerwacje online dla trenerów','Zarządzanie dostępnością czasową','Historia rezerwacji','Potwierdzenia i anulowania','Konflikty rezerwacji (blokada)','Powiadomienia o rezerwacji','Widok tygodniowy i dzienny'],
  ],
  [
    'icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="16" cy="16" r="5"/><circle cx="16" cy="16" r="12"/><path d="M16 4v4M16 24v4M4 16h4M24 16h4"/></svg>',
    'nazwa' => 'Administracja klubu',
    'opis'  => '6 ról użytkowników, branding, konfiguracja SMTP i pełne ustawienia organizacji.',
    'lista' => ['Branding: logo, kolory, custom CSS','Konfiguracja SMTP dla e-maili','6 ról: Zarząd, Trener, Instruktor, Sędzia, Lekarz, Księgowy','Wielokrotne role per użytkownik','Dostęp do wielu klubów','Wizard konfiguracji (onboarding)','Ustawienia sekcji sportowych','Dane organizacji i subdomena'],
  ],
  [
    'icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><path d="M6 10h20M6 16h12M6 22h8"/><rect x="2" y="4" width="28" height="24" rx="2"/><circle cx="26" cy="22" r="4"/><path d="M24 22l1.5 1.5L28 20"/></svg>',
    'nazwa' => 'API i Integracje',
    'opis'  => 'REST API z tokenami dostępu, webhooki zdarzeń i integracja z systemami zewnętrznymi.',
    'lista' => ['REST API z tokenami Bearer','Webhooki (płatność, członek, wyniki)','Logi webhooków i retry','Integracja z programami księgowymi','Eksport CSV / XLSX','Zarządzanie kluczami API per klub','Dokumentacja API','Testy endpointów'],
  ],
  [
    'icon' => '<svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><rect x="6" y="6" width="20" height="20" rx="3"/><path d="M12 14v4M16 12v6M20 16v2"/></svg>',
    'nazwa' => 'Bezpieczeństwo i RODO',
    'opis'  => '2FA, szyfrowanie, dziennik aktywności i pełna zgodność z RODO.',
    'lista' => ['Dwuskładnikowe uwierzytelnianie (TOTP)','Szyfrowanie danych wrażliwych','Pełny dziennik aktywności','Eksport danych osobowych','Anonimizacja kont','Kopie zapasowe automatyczne','Zarządzanie zgodami członków','Izolacja danych per klub (multi-tenant)'],
  ],
];
?>

<section class="cd-page-hero">
  <div class="cd-container">
    <h1>Wszystkie <span>funkcje</span> ClubDesk</h1>
    <p>Kompletny przegląd 14 modułów systemu. Aktywuj tylko te, których potrzebuje Twój klub — płacisz wyłącznie za wybrane funkcje.</p>
  </div>
</section>

<section class="cd-section" id="moduly-lista">
  <div class="cd-container">
    <div class="cd-section__header">
      <span class="cd-label">14 modułów</span>
      <h2>Kompletny ekosystem zarządzania klubem</h2>
      <p>Od codziennej administracji po zaawansowane integracje — ClubDesk pokrywa każdy aspekt działania klubu sportowego.</p>
    </div>
    <div class="cd-grid cd-grid--2">
      <?php foreach($moduly as $m): ?>
      <div class="cd-feature-card">
        <div class="cd-feature-card__head">
          <div class="cd-feature-card__icon"><?php echo $m['icon']; ?></div>
          <div class="cd-feature-card__title">
            <h3><?php echo esc_html($m['nazwa']); ?></h3>
            <p><?php echo esc_html($m['opis']); ?></p>
          </div>
        </div>
        <ul>
          <?php foreach($m['lista'] as $p): ?>
            <li><?php echo esc_html($p); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cd-section cd-section--slate" id="architektura">
  <div class="cd-container">
    <div class="cd-section__header">
      <span class="cd-label">Architektura</span>
      <h2>Platforma SaaS klasy enterprise</h2>
      <p>ClubDesk to multi-tenant SaaS — jeden system obsługuje wiele klubów z pełną izolacją danych.</p>
    </div>
    <div class="cd-arch-grid">
      <div class="cd-arch-item">
        <svg viewBox="0 0 36 36" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="18" cy="10" r="5"/><circle cx="8" cy="26" r="4"/><circle cx="28" cy="26" r="4"/><path d="M14 14l-4 8M22 14l4 8"/></svg>
        <h4>Multi-tenant</h4>
        <p>Pełna izolacja danych między klubami. Każdy klub widzi tylko swoje dane.</p>
      </div>
      <div class="cd-arch-item">
        <svg viewBox="0 0 36 36" fill="none" stroke="#EE2C28" stroke-width="1.5"><rect x="4" y="10" width="28" height="18" rx="3"/><path d="M4 16h28M10 10V8a2 2 0 0 1 4 0v2M22 10V8a2 2 0 0 1 4 0v2"/></svg>
        <h4>Subdomeny per klub</h4>
        <p>Każdy klub otrzymuje własną subdomenę (np. mojklub.clubdesk.pl).</p>
      </div>
      <div class="cd-arch-item">
        <svg viewBox="0 0 36 36" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="18" cy="18" r="14"/><path d="M18 4v4M18 28v4M4 18h4M28 18h4"/><circle cx="18" cy="18" r="5"/></svg>
        <h4>Branding per klub</h4>
        <p>Logo, kolory i custom CSS — każdy klub wygląda jak własny system.</p>
      </div>
      <div class="cd-arch-item">
        <svg viewBox="0 0 36 36" fill="none" stroke="#EE2C28" stroke-width="1.5"><path d="M6 10h24M6 18h16M6 26h10"/><circle cx="28" cy="26" r="5"/><path d="M26 26l1.5 1.5L30 24"/></svg>
        <h4>Plany subskrypcji</h4>
        <p>Start / Rozbudowany / Premium — aktywuj moduły według potrzeb i budżetu.</p>
      </div>
    </div>
  </div>
</section>

<section class="cd-cta-band">
  <div class="cd-container">
    <h2>Gotowy na ClubDesk?</h2>
    <p>Umów bezpłatną konsultację i sprawdź które moduły są dla Twojego klubu.</p>
    <a href="<?php echo esc_url(home_url('/#kontakt')); ?>" class="cd-btn cd-btn--white cd-btn--lg">Umów konsultację</a>
  </div>
</section>

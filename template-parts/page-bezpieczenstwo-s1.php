<section class="cd-page-hero">
  <div class="cd-container">
    <h1>Bezpieczeństwo danych <span>w ClubDesk</span></h1>
    <p>Ochrona danych klubów sportowych i ich zawodników traktujemy jako obowiązek, nie opcję. Poniżej opisujemy konkretne warstwy zabezpieczeń, które stosujemy na co dzień.</p>
    <div class="cd-page-hero__badges">
      <span>RODO</span><span>2FA</span><span>Izolacja danych</span><span>Szyfrowanie transmisji</span><span>Audyt aktywności</span><span>Kopie zapasowe</span>
    </div>
  </div>
</section>

<section class="cd-section" id="ochrona-kont">
  <div class="cd-container">
    <div class="cd-section__header">
      <span class="cd-label">Warstwa 1</span>
      <h2>Ochrona kont i dostępu</h2>
      <p>Dostęp do systemu jest pierwszą linią obrony. Każdy mechanizm logowania i zarządzania kontami został zaprojektowany z myślą o odporności na nieautoryzowane włamanie.</p>
    </div>
    <div class="cd-grid cd-grid--2">
      <div class="cd-feature-card">
        <div class="cd-feature-card__icon"><svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><path d="M16 2L4 8v10c0 8 12 12 12 12s12-4 12-12V8L16 2z"/><path d="M12 16l3 3 6-6"/></svg></div>
        <div>
          <h4>Weryfikacja dwuetapowa (2FA)</h4>
          <p>Każde konto w ClubDesk można zabezpieczyć dodatkowym krokiem weryfikacji tożsamości przy logowaniu. Nawet jeśli hasło zostanie w jakikolwiek sposób skompromitowane, dostęp do systemu pozostaje zablokowany bez drugiego składnika potwierdzenia.</p>
          <ul>
            <li>Weryfikacja dostępna dla każdego konta</li>
            <li>Działa przez dedykowaną aplikację na telefonie</li>
            <li>Administrator może wymusić 2FA dla całego klubu</li>
          </ul>
        </div>
      </div>
      <div class="cd-feature-card">
        <div class="cd-feature-card__icon"><svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><rect x="6" y="14" width="20" height="14" rx="2"/><path d="M10 14v-4a6 6 0 0 1 12 0v4"/><circle cx="16" cy="21" r="2"/></svg></div>
        <div>
          <h4>Bezpieczeństwo haseł</h4>
          <p>Hasła użytkowników nigdy nie są przechowywane w oryginalnej formie. System stosuje sprawdzoną technikę jednokierunkowego przekształcania, która sprawia, że hasła są niemożliwe do odczytania nawet przez administratorów systemu.</p>
          <ul>
            <li>Hasła nigdy nie są widoczne w żadnej formie</li>
            <li>Wymagana minimalna siła hasła</li>
            <li>Możliwość wymuszenia cyklicznej zmiany hasła</li>
          </ul>
        </div>
      </div>
      <div class="cd-feature-card">
        <div class="cd-feature-card__icon"><svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="16" cy="16" r="5"/><circle cx="16" cy="16" r="12"/><path d="M16 4v4M16 24v4M4 16h4M24 16h4"/></svg></div>
        <div>
          <h4>Granularne role i uprawnienia</h4>
          <p>System rozróżnia role użytkowników z precyzyjnie określonymi zakresami dostępu. Trener widzi tylko swoją sekcję, lekarz — tylko dokumentację medyczną, zawodnik — wyłącznie swoje dane.</p>
          <ul>
            <li>Role: Super Admin, Admin klubu, Trener, Lekarz, Zawodnik, Rodzic</li>
            <li>Możliwość tworzenia własnych ról w planie Premium</li>
            <li>Uprawnienia są weryfikowane przy każdym żądaniu</li>
          </ul>
        </div>
      </div>
      <div class="cd-feature-card">
        <div class="cd-feature-card__icon"><svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><path d="M6 8h20v16H6z"/><path d="M6 12h20"/><path d="M10 18h4M10 22h8"/></svg></div>
        <div>
          <h4>Zarządzanie sesjami</h4>
          <p>Każda sesja użytkownika jest śledzona i może być zakończona zdalnie. Po określonym czasie bezczynności system automatycznie wylogowuje użytkownika, minimalizując ryzyko nieautoryzowanego dostępu.</p>
          <ul>
            <li>Automatyczne wylogowanie po bezczynności</li>
            <li>Lista aktywnych sesji widoczna dla użytkownika</li>
            <li>Możliwość zdalnego zakończenia wszystkich sesji</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cd-section cd-section--light" id="izolacja-danych">
  <div class="cd-container">
    <div class="cd-section__header">
      <span class="cd-label">Warstwa 2</span>
      <h2>Izolacja i ochrona danych</h2>
      <p>Dane Twojego klubu są odłączone od innych organizacji na poziomie architektury systemu. Szyfrujemy komunikację i dbamy o ochronę danych w każdym miejscu ich przechowywania.</p>
    </div>
    <div class="cd-grid cd-grid--2">
      <div class="cd-feature-card">
        <div class="cd-feature-card__icon"><svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><rect x="4" y="8" width="10" height="16" rx="2"/><rect x="18" y="8" width="10" height="16" rx="2"/><path d="M14 16h4"/><line x1="15" y1="16" x2="17" y2="16" stroke-width="3"/></svg></div>
        <div>
          <h4>Pełna izolacja między klubami</h4>
          <p>Architektura multi-tenant ClubDesk zapewnia, że dane każdego klubu są całkowicie oddzielone od innych organizacji. Nie istnieje żadna ścieżka dostępu, która pozwoliłaby jednemu klubowi zobaczyć dane innego.</p>
          <ul>
            <li>Fizyczna separacja danych na poziomie bazy</li>
            <li>Osobna subdomena dla każdego klubu</li>
            <li>Brak współdzielonych zasobów między klubami</li>
          </ul>
        </div>
      </div>
      <div class="cd-feature-card">
        <div class="cd-feature-card__icon"><svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><path d="M4 16h2a10 10 0 0 1 20 0h2"/><rect x="8" y="16" width="16" height="10" rx="2"/><path d="M12 21h8"/></svg></div>
        <div>
          <h4>Szyfrowanie transmisji</h4>
          <p>Cała komunikacja między Twoim urządzeniem a serwerami ClubDesk odbywa się przez szyfrowane połączenie. żadne dane przesyłane przez sieć — dane logowania, informacje o zawodnikach, dokumenty — nie mogą zostać przechwycone.</p>
          <ul>
            <li>Szyfrowanie obowiązkowe dla wszystkich połączeń</li>
            <li>Nowoczesne protokoły bezpieczeństwa sieciowego</li>
            <li>Certyfikat SSL/TLS dla każdej subdomeny klubu</li>
          </ul>
        </div>
      </div>
      <div class="cd-feature-card">
        <div class="cd-feature-card__icon"><svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><path d="M16 2L4 8v10c0 8 12 12 12 12s12-4 12-12V8L16 2z"/><path d="M16 10v8M13 16l3 3 3-3"/></svg></div>
        <div>
          <h4>Ochrona danych w spoczynku</h4>
          <p>Dane przechowywane na serwerach ClubDesk są zabezpieczone przed nieautoryzowanym odczytem nawet w przypadku fizycznego dostępu do nośników. Wrażliwe informacje — dane medyczne, finansowe — są chronione dodatkową warstwą ochrony.</p>
          <ul>
            <li>Dane wrażliwe chronione osobno od pozostałych</li>
            <li>Serwery w certyfikowanych centrach danych w UE</li>
            <li>Kontrola fizycznego dostępu do infrastruktury</li>
          </ul>
        </div>
      </div>
      <div class="cd-feature-card">
        <div class="cd-feature-card__icon"><svg viewBox="0 0 32 32" fill="none" stroke="#EE2C28" stroke-width="1.5"><circle cx="16" cy="16" r="12"/><path d="M16 8v8l5 3"/></svg></div>
        <div>
          <h4>Monitoring i wykrywanie anomalii</h4>
          <p>System jest nieprzerwanie obserwowany pod kątem podejrzanych wzorce działania — nieudanych prób logowania, niezwykłej aktywności kont czy prób dostępu spoza znanych lokalizacji. Reagujemy zanim dojdzie do incydentu.</p>
          <ul>
            <li>Automatyczne blokowanie po wielokrotnych nieudanych logowaniach</li>
            <li>Alerty przy podejrzanej aktywności konta</li>
            <li>Czas reakcji na incydenty bezpieczeństwa &lt; 4h</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

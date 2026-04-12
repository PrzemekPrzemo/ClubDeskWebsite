# ClubDesk — Instrukcja budowy strony w Elementorze

## Instalacja motywu
1. Spakuj cały folder `ClubDeskWebsite` jako ZIP
2. WordPress → Wygląd → Motywy → Dodaj nowy → Wyślij motyw
3. Aktywuj motyw "ClubDesk"
4. Zainstaluj plugin Elementor (darmowy) z repozytorium WP
5. Ustaw logo: Wygląd → Dostosuj → Tożsamość witryny → Logo

## Konfiguracja kontaktu
Wygląd → Dostosuj → ClubDesk — Kontakt → ustaw telefon, e-mail, godziny

## Utworzenie strony głównej
1. Strony → Dodaj nową → nazwa "Strona główna"
2. Atrybut strony (po prawej): Szablon → "Pełna szerokość"
3. Kliknij "Edytuj z Elementorem"
4. Buduj sekcje jak poniżej

## Kolory marki (do ustawień Elementora)
- Główny (Red): #EE2C28
- Różowy (Pink): #F9C6CE
- Ciemny (Charcoal): #232232
- Tło jasne (Slate): #F0F2F5
- Biały: #FFFFFF

## Czcionka
- Poppins (wszystko)
- H1: 48px Bold, H2: 36px Bold, H3: 24px Bold
- Body: 16px Regular, Button: 14px Bold Uppercase

---

## SEKCJE LANDING PAGE — treść do wklejenia

### SEKCJA 1: HERO
**Typ**: Sekcja → Pełna szerokość, Tło: #232232, Min. wysokość: 80vh, Padding: 100px góra

**Nagłówek H1:**
Zarządzaj klubem sportowym jak profesjonalista

**Tekst pod nagłówkiem (kolor: rgba(255,255,255,0.8)):**
Wielosportowy system ERP/CRM stworzony dla polskich klubów sportowych. Członkowie, finanse, treningi, zawody, komunikacja — wszystko w jednym miejscu, 100% online.

**Przycisk 1:** Umów bezpłatną konsultację → link do #kontakt, Tło: #EE2C28
**Przycisk 2:** Zobacz moduły → link do #moduly, Obramowanie białe

**Pod przyciskami — tekst mały (rgba(255,255,255,0.5)):**
Integracja z polskimi związkami sportowymi

**Pod tekstem — rząd ikon/tekstów w ramkach:**
PZPN | PZKosz | PZPS | PZSS | PZLA | PZHL | PZT | PZJ

---

### SEKCJA 2: O SYSTEMIE
**ID sekcji**: o-systemie
**Tło**: białe, Padding: 80px

**Etykieta (mały tekst czerwony uppercase):** O SYSTEMIE
**Nagłówek H2:** Platforma stworzona dla klubów sportowych
**Podtytuł:** Kompleksowe narzędzie, które zastąpi arkusze kalkulacyjne i chaos komunikacyjny.

**3 kolumny z ikonami:**

Kolumna 1:
- Tytuł: 100% Online
- Tekst: System w chmurze dostępny z każdego urządzenia. Brak instalacji, automatyczne aktualizacje, regularne kopie zapasowe.

Kolumna 2:
- Tytuł: Wielosportowość
- Tekst: Jeden system dla wielu sekcji sportowych. Piłka nożna, koszykówka, strzelectwo i wiele więcej — jednocześnie.

Kolumna 3:
- Tytuł: Na miarę Twojego klubu
- Tekst: Indywidualna implementacja dopasowana do potrzeb. Wybierasz moduły — płacisz tylko za to, czego potrzebujesz.

**Tekst podsumowujący (wycentrowany, max 800px):**
ClubDesk to kompleksowy system zarządzania klubem sportowym typu SaaS. Każdy klub otrzymuje własną subdomenę, indywidualny branding i dostęp do modułów dopasowanych do specyfiki jego dyscyplin. System jest ciągle rozwijany we współpracy z naszymi klientami.

---

### SEKCJA 3: MODUŁY
**ID sekcji**: moduly
**Tło**: #F0F2F5, Padding: 80px

**Etykieta:** MODUŁY
**Nagłówek H2:** Wszystko, czego potrzebuje Twój klub
**Podtytuł:** Każdy moduł to oddzielna funkcjonalność — aktywuj tylko te, których potrzebujesz.

**8 kart (grid 4x2 na desktop, 1 kolumna mobile):**

1. Zarządzanie członkami
   - Pełna kartoteka zawodników z danymi osobowymi
   - Portal samoobsługowy dla zawodnika
   - Przypisanie do sekcji sportowych i kategorii wiekowych
   - Licencje sportowe, numery członkowskie, statusy

2. Finanse i składki
   - Dynamiczna konfiguracja stawek opłat
   - Śledzenie wpłat i zaległości per zawodnik
   - Historia płatności i raporty finansowe
   - Automatyczne alerty o zaległościach

3. Treningi
   - Planowanie sesji treningowych
   - Lista obecności z potwierdzeniami
   - Filtrowanie per sekcja sportowa
   - Historia frekwencji i statystyki

4. Kalendarz i wydarzenia
   - Planowanie meczów, zawodów, spotkań
   - Kategorie wydarzeń per sport
   - Lokalizacje, opisy, statusy wydarzeń
   - Widok kalendarza i listy

5. Komunikacja
   - Szablony e-mail z personalizacją
   - Kolejka wysyłki i SMS (SMSAPI / Twilio)
   - Ogłoszenia i powiadomienia in-app
   - Powiadomienia push dla zawodników

6. Badania lekarskie
   - Rejestr badań sportowo-lekarskich
   - Alerty wygasających terminów badań
   - Dedykowany widok dla roli lekarza
   - Przechowywanie wyników i typów badań

7. Administracja klubu
   - Ustawienia klubu, branding, logo, kolory
   - Konfiguracja SMTP i powiadomień
   - 6 ról: Zarząd, Trener, Instruktor, Sędzia, Lekarz, Księgowy
   - Zarządzanie użytkownikami i uprawnieniami

8. Bezpieczeństwo i RODO
   - Uwierzytelnianie dwuskładnikowe (2FA/TOTP)
   - Pełny dziennik aktywności (audit log)
   - Zgodność z RODO, szyfrowanie danych
   - Regularne kopie zapasowe

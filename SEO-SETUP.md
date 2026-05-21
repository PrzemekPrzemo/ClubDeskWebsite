# SEO + SEM — instrukcja uruchomienia indeksowania w Google

## Co zostało zrobione w kodzie

W tym branchu dodano:

- **Canonical URL** (`<link rel="canonical">`) na każdej podstronie
- **Open Graph** z `og:image`, `og:locale=pl_PL`, wymiary obrazu
- **Twitter Card** typu `summary_large_image` z `twitter:image`
- **`<meta name="robots">`** z `max-image-preview:large, max-snippet:-1`; na 404 ustawia `noindex`
- **JSON-LD schema:** Organization + SoftwareApplication + WebSite (z SearchAction) + BreadcrumbList (podstrony i posty bloga) + ItemList (lista sportów na `/sporty`) + FAQPage (FAQ z home page)
- **Customizer** (Wygląd → Dostosuj → ClubDesk — SEO i Analytics) — pola na: GSC verification, Bing verification, GA4 ID, GTM ID, social URLs
- **`robots.txt`** w root z odpowiednimi `Disallow` i linkiem do sitemapy
- **`sitemap.xml`** w root (statyczna — 6 stron)
- **GA4 + GTM** wstrzyknięcie — aktywuje się dopiero po wpisaniu ID w Customizerze

## Co musisz teraz zrobić — KROK PO KROKU

### 1. Wgraj zmiany na produkcję
Po merge'u PR #4 zaktualizuj motyw na serwerze (FTP / git pull / panel hostingu).

### 2. Wrzuć obrazy OG i logo
Wygeneruj w Canvie i wgraj do `wp-content/themes/clubdesk/assets/img/`:

**`og-default.png` — Open Graph image (KRYTYCZNE)**
- Rozmiar: **1200 × 630 px** (proporcje 1.91:1)
- Format: PNG (zalecane) lub JPG
- Waga: do 300 KB, max 8 MB (limit Facebooka)
- Bezpieczna strefa: kluczowe elementy w środkowych **1080 × 630 px** (krawędzie mogą się przycinać)
- Co umieścić:
  - Logo ClubDesk (lewa strona)
  - Tagline: „System zarządzania klubem sportowym — 59 dyscyplin, 14 modułów"
  - Tło: gradient czerwień #EE2C28 → ciemny charcoal albo białe + czerwone akcenty
  - Czcionka min. **60–80 px**, kontrast WCAG AA
  - BEZ paska adresu, BEZ ramki przeglądarki

**`logo.png` — logo dla Google Knowledge Panel**
- Kwadrat **512 × 512 px** (min. 112 × 112)
- PNG z przezroczystym tłem
- Używane przez Google w Rich Results

**Po wgraniu przetestuj:**
- Facebook Sharing Debugger: https://developers.facebook.com/tools/debug/
- LinkedIn Post Inspector: https://www.linkedin.com/post-inspector/
- Twitter Card Validator: https://cards-dev.twitter.com/validator
- Google Rich Results Test: https://search.google.com/test/rich-results

### 3. Założenie Google Search Console (15 min)

1. Wejdź na **https://search.google.com/search-console**
2. Zaloguj się kontem Google (najlepiej firmowym `kontakt@clubdesk.pl`)
3. Kliknij **„Dodaj usługę"**
4. Wybierz **„Prefiks URL"** i wpisz `https://clubdesk.pl/` (NIE wybieraj „Domena" — tamta wymaga DNS i jest trudniejsza)
5. Wybierz metodę weryfikacji **„Tag HTML"** — Google pokaże ci coś w stylu:
   ```html
   <meta name="google-site-verification" content="XXXXXXXXXXXXXXXXXXXXXXXXXXX">
   ```
6. **Skopiuj tylko sam content** (te X-y, bez całego taga)
7. W WordPressie wejdź w **Wygląd → Dostosuj → ClubDesk — SEO i Analytics**
8. Wklej kod w polu **„Google Search Console — kod weryfikacyjny"**, kliknij **„Opublikuj"**
9. Wróć do GSC i kliknij **„Zweryfikuj"** — gotowe ✅

### 4. Wysłanie sitemapy do GSC

W Google Search Console:
1. Menu lewe → **„Mapy witryny"**
2. W polu **„Dodaj nową mapę witryny"** wpisz: `sitemap.xml`
3. Kliknij **„Prześlij"**
4. Status powinien zmienić się na **„Sukces"** w ciągu 1–2 dni

Dodatkowo — Google ma już built-in sitemapę WordPressa (`/wp-sitemap.xml`). Dodaj też ją:
- `wp-sitemap.xml` — to indeksuje również posty bloga gdy zaczniesz publikować.

### 5. Ręczne przyspieszenie indeksowania (POLECANE)

W GSC, w pasku u góry **„Sprawdź dowolny adres URL"**:
1. Wpisz `https://clubdesk.pl/`
2. Kliknij **„Poproś o zaindeksowanie"** → przyjdzie zwykle w 1–7 dni
3. Powtórz dla:
   - `https://clubdesk.pl/sporty/`
   - `https://clubdesk.pl/funkcje/`
   - `https://clubdesk.pl/wyglad/`
   - `https://clubdesk.pl/bezpieczenstwo/`
   - `https://clubdesk.pl/blog/`

Limit GSC: ~10 ręcznych próśb na dzień. Wystarczy.

### 6. Założenie Google Analytics 4 (10 min)

1. Wejdź na **https://analytics.google.com**
2. Kliknij **„Utwórz konto"** → nazwa konta: `ClubDesk`
3. Utwórz **usługę** (property): nazwa `ClubDesk Website`, strefa czasowa `Polska (GMT+1)`, waluta `PLN`
4. Wybierz **„Sieć"** (Web) jako strumień danych
5. Wpisz URL: `https://clubdesk.pl`, nazwa strumienia: `ClubDesk PL`
6. GA wygeneruje **Measurement ID** w formacie `G-XXXXXXXXXX` — skopiuj
7. W WordPressie: **Wygląd → Dostosuj → ClubDesk — SEO i Analytics** → wklej w polu **„Google Analytics 4 — Measurement ID"**
8. Opublikuj. Otwórz `https://clubdesk.pl` w nowej karcie
9. Wróć do GA, w **„Czas rzeczywisty"** powinieneś zobaczyć siebie ✅

**TIP:** Jeśli masz już Google Tag Managera, wpisz `GTM-XXXXXXX` zamiast GA4 ID — wtedy GA i inne tagi konfiguruj w GTM, nie w kodzie.

### 7. Bing Webmaster Tools (5 min, opcjonalne ale warto)

Bing zarządza wynikami w Bing, Yahoo i DuckDuckGo (~5% rynku PL):
1. https://www.bing.com/webmasters
2. Dodaj `https://clubdesk.pl/`
3. Wybierz weryfikację **„meta tag"** — skopiuj content
4. Wklej w **ClubDesk — SEO i Analytics → Bing Webmaster**
5. Po zweryfikowaniu zaimportuj sitemapę GSC jednym klikiem

### 8. Dodatkowe ustawienia bezpośrednio w WP (jednorazowo)

W **Ustawienia → Czytanie** odznacz:
- ❌ „Proś wyszukiwarki o nieindeksowanie tej witryny" (musi być WYŁĄCZONE!)

W **Ustawienia → Bezpośrednie odnośniki** ustaw:
- ✅ **„Nazwa wpisu"** (`/%postname%/`) — przyjazne URL-e dla SEO

### 9. Monitoring po starcie

- **Po 1 tygodniu:** sprawdź w GSC → **„Strony"** ile URLi zostało zaindeksowanych
- **Po 2 tygodniach:** sprawdź **„Skuteczność"** → pierwsze wyświetlenia (impressions)
- **Po 4 tygodniach:** zacznij analizować zapytania (queries) i optymalizuj treści

## IndexNow + Sitemap Ping (już wbudowane)

Motyw automatycznie powiadamia Bing / Yandex / DuckDuckGo / Seznam (przez **IndexNow**) oraz pinguje sitemapę do Google i Bing:

**Kiedy się odpala:**
- Po opublikowaniu posta lub strony (`transition_post_status`) — tylko URL danej strony idzie do IndexNow, sitemap ping leci tylko przy pierwszej publikacji (nie przy edycji)
- Raz po deployu — w panelu admina automatycznie wysyła **wszystkie 6 głównych stron** (home, sporty, funkcje, wyglad, bezpieczenstwo, blog)

**Co zobaczysz po deployu:**
1. Pierwszy raz po wgraniu kodu — wejdź w `wp-admin` → automatycznie odpali się initial push (po cichu, w tle)
2. **Ustawienia → ClubDesk SEO** — strona z kluczem IndexNow i przyciskiem ręcznego re-push
3. Klucz IndexNow jest serwowany pod `https://clubdesk.pl/{32-znakowy-klucz}.txt` (IndexNow protocol wymaga tego dla weryfikacji)

**Jak sprawdzić że działa:**
- Po publikacji nowego posta: w **Bing Webmaster Tools** → **URL Submission** → **Submission History** — powinieneś zobaczyć URL z statusem „Quota Reset" lub „Submitted"
- Klucz pod jego URL-em musi zwracać 200 + treść = klucz (test: `curl https://clubdesk.pl/{klucz}.txt`)

**Dlaczego nie używamy Google Indexing API:**
Oficjalnie tylko dla `JobPosting` i `BroadcastEvent` (livestream). Strona ClubDesk nie ma żadnego z tych content type — API zignorowałoby requesty albo zablokowałoby konto. **GSC „Poproś o zaindeksowanie"** + sitemap ping + dobry content + linkowanie = wystarczy dla 6 stron + bloga (1 post/tydzień).

## Co jeszcze warto dorzucić (osobne zadania)

| Co | Priorytet | Wysiłek |
|---|---|---|
| **Yoast SEO** lub **Rank Math** plugin | Wysoki | 1h |
| **Polityka prywatności + Cookie banner** (GDPR) | Krytyczny | 2h |
| **Hreflang** jeśli będzie wersja EN | Średni | 1h |
| **Schema dla artykułów bloga** (`Article` + `author`) | Wysoki | 1h |
| **Core Web Vitals** — lazy loading, preload fontów | Wysoki | 2-3h |
| **Local SEO** — Google Business Profile | Średni | 30min |
| **Linkowanie wewnętrzne** wg planu SEO | Wysoki | bieżąco |
| **Backlink outreach** wg ZmianySEO-ClubDeskWebsite.md | Wysoki | bieżąco |

## Konflikt z Yoast / Rank Math?

Jeśli zainstalujesz Yoast SEO lub Rank Math — wyłącz ich konkurujące funkcje:
- **Twoje custom title tags w `cd_document_title()`** — w Yoast: SEO → Wygląd w wyszukiwarce → ustaw szablony tytułów na `%%title%% %%sep%% %%sitename%%`
- **Custom JSON-LD** — w Rank Math: SEO General → wyłącz Schema modules, bo będzie duplikat
- Najlepiej: zostaw plugin tylko jako sitemap generator + redirect manager, resztę zostaw na kodzie motywu

---

**Pytanie?** Sprawdź w **Google Rich Results Test** czy JSON-LD nie ma błędów:
https://search.google.com/test/rich-results?url=https%3A%2F%2Fclubdesk.pl

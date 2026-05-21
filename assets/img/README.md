# Obrazy SEO/OG dla ClubDesk

W tym folderze powinny się znaleźć dwa pliki:

## 1. `og-default.png` — Open Graph image (KRYTYCZNE dla SEO/SEM)

**Rozmiar:** `1200 × 630 px` (proporcje 1.91:1)
**Format:** PNG (preferowane) lub JPG
**Waga:** docelowo poniżej 300 KB, max 8 MB (limit Facebooka)
**Co umieścić:**
- Logo ClubDesk (lewa strona lub góra)
- Tagline: „System zarządzania klubem sportowym" / „59 dyscyplin, 14 modułów"
- Tło zgodne z brandem (czerwień #EE2C28 + biel/charcoal)
- Czytelność z miniatury — duża czcionka (min. 60–80 px), wysoki kontrast
- BEZ paska adresu, BEZ ramki przeglądarki

**Bezpieczna strefa:** trzymaj kluczowe elementy w środkowych 1080×630 px — krawędzie
mogą być przycięte na niektórych platformach (LinkedIn, Slack).

**Test po wgraniu:**
- Facebook Sharing Debugger: https://developers.facebook.com/tools/debug/
- LinkedIn Post Inspector: https://www.linkedin.com/post-inspector/
- Twitter Card Validator: https://cards-dev.twitter.com/validator

## 2. `logo.png` — logo dla JSON-LD Organization schema

**Rozmiar:** kwadrat min. `112 × 112 px`, zalecane `512 × 512 px`
**Format:** PNG z przezroczystym tłem
**Cel:** Google używa tego pola w Knowledge Panel i rich results.

---

**Po wgraniu obu plików** referencje już są w `functions.php` — nic nie trzeba zmieniać.

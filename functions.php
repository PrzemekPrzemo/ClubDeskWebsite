<?php
// ── Setup ──
function clubdesk_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', ['height'=>60,'width'=>200,'flex-width'=>true,'flex-height'=>true]);
    add_theme_support('html5', ['search-form','comment-form','gallery','caption']);
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    register_nav_menus(['primary'=>'Menu główne','footer'=>'Menu stopka']);
}
add_action('after_setup_theme','clubdesk_setup');

// ── Styles & Scripts ──
function clubdesk_scripts() {
    wp_enqueue_style('clubdesk-fonts','https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&subset=latin-ext&display=swap',[],null);
    wp_enqueue_style('clubdesk-brand',get_template_directory_uri().'/assets/css/brand.css',['clubdesk-fonts'],'1.2.0');
    wp_enqueue_style('clubdesk-landing',get_template_directory_uri().'/assets/css/landing.css',['clubdesk-brand'],'1.2.0');
    wp_enqueue_style('clubdesk-subpages',get_template_directory_uri().'/assets/css/subpages.css',['clubdesk-landing'],'1.2.0');
    wp_enqueue_style('clubdesk-style',get_stylesheet_uri(),['clubdesk-subpages'],'1.2.0');
    wp_enqueue_script('clubdesk-main',get_template_directory_uri().'/assets/js/main.js',[],'1.2.0',true);
}
add_action('wp_enqueue_scripts','clubdesk_scripts');

// ── SEO: Custom page titles ──
function cd_document_title($title) {
    if (is_front_page()) return 'ClubDesk — System zarządzania klubem sportowym | 59 dyscyplin';
    if (is_page('sporty'))         return '59 dyscyplin sportowych — obsługiwane sporty | ClubDesk';
    if (is_page('funkcje'))        return 'Funkcje systemu — 14 modułów do zarządzania klubem | ClubDesk';
    if (is_page('wyglad'))         return 'Wygląd systemu ClubDesk — przegląd ekranów | ClubDesk';
    if (is_page('bezpieczenstwo')) return 'Bezpieczeństwo danych w klubie sportowym | ClubDesk';
    if (is_page('blog') || is_home()) return 'Blog — zarządzanie klubem sportowym | ClubDesk';
    if (is_singular('post'))       return get_the_title() . ' | ClubDesk';
    return $title;
}
add_filter('pre_get_document_title','cd_document_title');

// ── SEO: Meta description, OpenGraph per strona ──
function cd_seo_head() {
    $metas = [
        ''               => 'System zarządzania klubem sportowym dla 59 dyscyplin. Członkowie, finanse, treningi, zawody i cyfrowa legitymacja z QR — 100% online. Sprawdź ClubDesk.',
        'sporty'         => 'ClubDesk obsługuje 59 dyscyplin sportowych: piłka nożna, futsal, pływanie, sztuki walki (MMA, kickboxing), narciarstwo, golf, e-sport, joga i wiele innych. Dedykowane moduły per sport, integracje z federacjami.',
        'funkcje'        => '14 modułów ClubDesk: zarządzanie członkami, finanse, treningi, zawody, portal zawodnika z QR, galeria, sklep klubowy, API REST i więcej.',
        'wyglad'         => 'Poznaj interfejs ClubDesk — 12 ekranów systemu ERP dla klubów sportowych. Dashboard, panel zawodnika, finanse, kalendarz treningów i więcej.',
        'bezpieczenstwo' => 'Bezpieczeństwo danych w ClubDesk: 2FA, izolacja multi-tenant, szyfrowanie transmisji, automatyczne kopie zapasowe, pełna zgodność z RODO.',
        'blog'           => 'Blog ClubDesk — praktyczna wiedza o zarządzaniu klubem sportowym, finansach, RODO, Ustawie Kamilka i cyfryzacji. Publikujemy od maja 2026.',
    ];
    $slug = '';
    if (!is_front_page() && is_page()) { global $post; $slug = $post ? $post->post_name : ''; }
    if (is_home() || is_category()) { $slug = 'blog'; }
    $desc      = esc_attr($metas[$slug] ?? $metas['']);
    if (is_singular()) {
        $canonical_raw = get_permalink();
    } elseif (is_home()) {
        $canonical_raw = get_permalink(get_option('page_for_posts')) ?: home_url('/blog');
    } elseif (is_category() || is_tag() || is_archive()) {
        $canonical_raw = home_url(add_query_arg([], $GLOBALS['wp']->request ?? ''));
    } else {
        $canonical_raw = home_url('/');
    }
    $canonical = esc_url($canonical_raw);
    $ogurl     = esc_url(get_permalink() ?: home_url('/'));
    $ogtitle   = esc_attr(is_front_page() ? 'ClubDesk — System zarządzania klubem sportowym' : strip_tags(get_the_title()));
    $ogimage   = esc_url(get_template_directory_uri() . '/assets/img/og-default.png');
    $robots    = is_404() ? 'noindex, follow' : 'index, follow, max-image-preview:large, max-snippet:-1';
    echo "\n<link rel=\"canonical\" href=\"{$canonical}\">\n";
    echo "<meta name=\"description\" content=\"{$desc}\">\n";
    echo "<meta name=\"robots\" content=\"{$robots}\">\n";
    echo "<meta property=\"og:type\" content=\"website\">\n";
    echo "<meta property=\"og:site_name\" content=\"ClubDesk\">\n";
    echo "<meta property=\"og:locale\" content=\"pl_PL\">\n";
    echo "<meta property=\"og:title\" content=\"{$ogtitle}\">\n";
    echo "<meta property=\"og:description\" content=\"{$desc}\">\n";
    echo "<meta property=\"og:url\" content=\"{$ogurl}\">\n";
    echo "<meta property=\"og:image\" content=\"{$ogimage}\">\n";
    echo "<meta property=\"og:image:width\" content=\"1200\">\n";
    echo "<meta property=\"og:image:height\" content=\"630\">\n";
    echo "<meta property=\"og:image:alt\" content=\"ClubDesk — system zarządzania klubem sportowym\">\n";
    echo "<meta name=\"twitter:card\" content=\"summary_large_image\">\n";
    echo "<meta name=\"twitter:title\" content=\"{$ogtitle}\">\n";
    echo "<meta name=\"twitter:description\" content=\"{$desc}\">\n";
    echo "<meta name=\"twitter:image\" content=\"{$ogimage}\">\n";

    // Verification meta tags (set via Customizer or wp-admin)
    $gsc = get_theme_mod('clubdesk_gsc_verify', '');
    if ($gsc) echo '<meta name="google-site-verification" content="' . esc_attr($gsc) . '">' . "\n";
    $bing = get_theme_mod('clubdesk_bing_verify', '');
    if ($bing) echo '<meta name="msvalidate.01" content="' . esc_attr($bing) . '">' . "\n";
}
add_action('wp_head','cd_seo_head',1);

// ── SEO: JSON-LD (Organization, SoftwareApplication, WebSite, BreadcrumbList, FAQPage, ItemList) ──
function cd_json_ld() {
    $home = home_url('/');
    $blocks = [
        [
            '@context'    => 'https://schema.org',
            '@type'       => 'Organization',
            'name'        => 'ClubDesk',
            'url'         => $home,
            'logo'        => get_template_directory_uri() . '/assets/img/logo.png',
            'contactPoint'=> ['@type'=>'ContactPoint','contactType'=>'customer support','email'=>'kontakt@clubdesk.pl','availableLanguage'=>'Polish'],
            'sameAs'      => array_values(array_filter([
                get_theme_mod('clubdesk_social_facebook',''),
                get_theme_mod('clubdesk_social_linkedin',''),
                get_theme_mod('clubdesk_social_youtube',''),
            ])),
        ],
        [
            '@context'           => 'https://schema.org',
            '@type'              => 'SoftwareApplication',
            'name'               => 'ClubDesk',
            'applicationCategory'=> 'BusinessApplication',
            'operatingSystem'    => 'Web',
            'url'                => $home,
            'description'        => 'Wielosportowy system ERP/CRM dla polskich klubów sportowych. 59 dyscyplin, 14 modułów, API REST, 2FA, RODO.',
            'offers'             => ['@type'=>'AggregateOffer','priceCurrency'=>'PLN','availability'=>'https://schema.org/InStock'],
            'featureList'        => 'Zarządzanie członkami, finanse, treningi, zawody, cyfrowa legitymacja QR, API REST, 2FA, RODO',
        ],
        [
            '@context'      => 'https://schema.org',
            '@type'         => 'WebSite',
            'name'          => 'ClubDesk',
            'url'           => $home,
            'inLanguage'    => 'pl-PL',
            'potentialAction' => [
                '@type'       => 'SearchAction',
                'target'      => $home . '?s={search_term_string}',
                'query-input' => 'required name=search_term_string',
            ],
        ],
    ];

    // BreadcrumbList for subpages
    if (is_page() && !is_front_page()) {
        $items = [['@type'=>'ListItem','position'=>1,'name'=>'Strona główna','item'=>$home]];
        $items[] = ['@type'=>'ListItem','position'=>2,'name'=>strip_tags(get_the_title()),'item'=>get_permalink()];
        $blocks[] = ['@context'=>'https://schema.org','@type'=>'BreadcrumbList','itemListElement'=>$items];
    }
    if (is_singular('post')) {
        $items = [
            ['@type'=>'ListItem','position'=>1,'name'=>'Strona główna','item'=>$home],
            ['@type'=>'ListItem','position'=>2,'name'=>'Blog','item'=>home_url('/blog')],
            ['@type'=>'ListItem','position'=>3,'name'=>strip_tags(get_the_title()),'item'=>get_permalink()],
        ];
        $blocks[] = ['@context'=>'https://schema.org','@type'=>'BreadcrumbList','itemListElement'=>$items];
    }

    // ItemList of supported sports on /sporty
    if (is_page('sporty')) {
        $sports = require get_template_directory() . '/inc/sports-data.php';
        $list = [];
        foreach ($sports as $i => $sp) {
            $list[] = ['@type'=>'ListItem','position'=>$i+1,'name'=>$sp['name']];
        }
        $blocks[] = ['@context'=>'https://schema.org','@type'=>'ItemList','name'=>'Sporty obsługiwane przez ClubDesk','numberOfItems'=>count($sports),'itemListElement'=>$list];
    }

    // FAQPage on homepage (mirrors the FAQ in template-parts/faq.php)
    if (is_front_page()) {
        $faq = [
            ['Czy mogę prowadzić wiele sekcji sportowych w jednym klubie?','Tak. ClubDesk jest wielosportowy od podstaw. Możesz prowadzić dowolną liczbę sekcji — piłkę nożną, koszykówkę, strzelectwo i inne — w ramach jednego konta klubu.'],
            ['Czy system integruje się z polskimi związkami sportowymi?','Tak, współpracujemy z PZPN, PZKosz, PZPS, PZSS, PZLA, ZPRP i innymi. Zakres integracji zależy od możliwości danego związku — synchronizujemy licencje, wyniki i dane zawodników.'],
            ['Czym jest Shootero?','Shootero to dedykowany produkt dla klubów strzelectwa sportowego. Zawiera ewidencję broni i amunicji, licencje PZSS, zarządzanie zawodami z systemem sędziowskim, karty wynikowe.'],
            ['Jak zadbano o bezpieczeństwo danych?','2FA, izolacja multi-tenant, pełny dziennik aktywności, granularne uprawnienia, regularne kopie zapasowe i zgodność z RODO.'],
            ['Co się dzieje z naszymi danymi po zakończeniu umowy?','Dane zawsze należą do klubu. Na żądanie eksportujemy całość w formacie możliwym do odczytu. Po zakończeniu współpracy dane są bezpiecznie usuwane zgodnie z procedurą RODO.'],
            ['Czy mogę zintegrować system z biurem księgowym?','Tak, oferujemy eksport danych finansowych w formatach akceptowanych przez popularne programy księgowe.'],
        ];
        $main = [];
        foreach ($faq as $qa) {
            $main[] = ['@type'=>'Question','name'=>$qa[0],'acceptedAnswer'=>['@type'=>'Answer','text'=>$qa[1]]];
        }
        $blocks[] = ['@context'=>'https://schema.org','@type'=>'FAQPage','mainEntity'=>$main];
    }

    echo "\n<script type=\"application/ld+json\">" . wp_json_encode($blocks, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "</script>\n";
}
add_action('wp_head','cd_json_ld');

// ── SEO: Analytics / GTM (set ID in Customizer to enable) ──
function cd_analytics_head() {
    $ga4 = get_theme_mod('clubdesk_ga4_id', '');
    $gtm = get_theme_mod('clubdesk_gtm_id', '');
    if ($ga4) {
        $id = esc_js($ga4);
        echo "\n<!-- Google Analytics 4 -->\n";
        echo "<script async src=\"https://www.googletagmanager.com/gtag/js?id={$id}\"></script>\n";
        echo "<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','{$id}',{anonymize_ip:true});</script>\n";
    }
    if ($gtm) {
        $id = esc_js($gtm);
        echo "\n<!-- Google Tag Manager -->\n";
        echo "<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','{$id}');</script>\n";
    }
}
add_action('wp_head','cd_analytics_head',99);

function cd_analytics_body_open() {
    $gtm = get_theme_mod('clubdesk_gtm_id', '');
    if ($gtm) {
        $id = esc_attr($gtm);
        echo "<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id={$id}\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>\n";
    }
}
add_action('wp_body_open','cd_analytics_body_open');

// ── Fallback nav (when WP menu not configured) ──
function cd_fallback_nav() {
    echo '<ul id="menu-primary" class="cd-nav__links">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">Strona główna</a></li>';
    echo '<li><a href="' . esc_url(home_url('/sporty')) . '">Sporty</a></li>';
    echo '<li><a href="' . esc_url(home_url('/funkcje')) . '">Funkcje</a></li>';
    echo '<li><a href="' . esc_url(home_url('/wyglad')) . '">Wygląd</a></li>';
    echo '<li><a href="' . esc_url(home_url('/blog')) . '">Blog</a></li>';
    echo '<li><a href="#kontakt" class="cd-btn cd-btn--primary">Kontakt</a></li>';
    echo '</ul>';
}

// ── Widgets ──
function clubdesk_widgets() {
    register_sidebar(['name'=>'Stopka 1','id'=>'footer-1','before_widget'=>'<div class="footer-widget">','after_widget'=>'</div>','before_title'=>'<h4>','after_title'=>'</h4>']);
    register_sidebar(['name'=>'Stopka 2','id'=>'footer-2','before_widget'=>'<div class="footer-widget">','after_widget'=>'</div>','before_title'=>'<h4>','after_title'=>'</h4>']);
}
add_action('widgets_init','clubdesk_widgets');

// ── Nav menu: clean markup ──
function clubdesk_nav_args($args) {
    if ($args['theme_location']==='primary') {
        $args['container']=false;
        $args['menu_class']='cd-nav__links';
        $args['depth']=1;
    }
    return $args;
}
add_filter('wp_nav_menu_args','clubdesk_nav_args');

// ── Disable Gutenberg for pages ──
add_filter('use_block_editor_for_post_type',function($use,$type){return $type==='page'?false:$use;},10,2);

// ── Customizer: contact info, SEO verification, analytics, social ──
function clubdesk_customizer($wp_customize) {
    $wp_customize->add_section('clubdesk_contact',['title'=>'ClubDesk — Kontakt','priority'=>30]);
    foreach(['phone'=>['Telefon','+48 XXX XXX XXX'],'email'=>['E-mail','kontakt@clubdesk.pl'],'hours'=>['Godziny','Pon-Pt: 9:00-17:00']] as $k=>$v) {
        $wp_customize->add_setting("clubdesk_$k",['default'=>$v[1],'sanitize_callback'=>'sanitize_text_field']);
        $wp_customize->add_control("clubdesk_$k",['label'=>$v[0],'section'=>'clubdesk_contact','type'=>'text']);
    }

    $wp_customize->add_section('clubdesk_seo',['title'=>'ClubDesk — SEO i Analytics','priority'=>31]);
    $seo_fields = [
        'gsc_verify'        => ['Google Search Console — kod weryfikacyjny','sanitize_text_field'],
        'bing_verify'       => ['Bing Webmaster Tools — kod weryfikacyjny','sanitize_text_field'],
        'ga4_id'            => ['Google Analytics 4 — Measurement ID (G-XXXXXXXX)','sanitize_text_field'],
        'gtm_id'            => ['Google Tag Manager — Container ID (GTM-XXXXXXX)','sanitize_text_field'],
        'social_facebook'   => ['Facebook URL','esc_url_raw'],
        'social_linkedin'   => ['LinkedIn URL','esc_url_raw'],
        'social_youtube'    => ['YouTube URL','esc_url_raw'],
    ];
    foreach ($seo_fields as $k => [$label, $sanitize]) {
        $wp_customize->add_setting("clubdesk_$k",['default'=>'','sanitize_callback'=>$sanitize]);
        $wp_customize->add_control("clubdesk_$k",['label'=>$label,'section'=>'clubdesk_seo','type'=>'text']);
    }
}
add_action('customize_register','clubdesk_customizer');

// ── Admin notice if Elementor missing ──
function clubdesk_admin_notice() {
    if (!defined('ELEMENTOR_VERSION')) {
        echo '<div class="notice notice-info is-dismissible"><p><strong>ClubDesk:</strong> Zainstaluj <a href="https://wordpress.org/plugins/elementor/">Elementor</a> (darmowy), aby w pełni zarządzać treścią.</p></div>';
    }
}
add_action('admin_notices','clubdesk_admin_notice');

// ── SVG upload support ──
function clubdesk_allow_svg($mimes) { $mimes['svg']='image/svg+xml'; return $mimes; }
add_filter('upload_mimes','clubdesk_allow_svg');
function clubdesk_fix_svg_mime($data,$file,$filename) {
    if (!empty($data['ext'])&&!empty($data['type'])) return $data;
    if (pathinfo($filename,PATHINFO_EXTENSION)==='svg') { $data['ext']='svg'; $data['type']='image/svg+xml'; }
    return $data;
}
add_filter('wp_check_filetype_and_ext','clubdesk_fix_svg_mime',10,3);

// ── Elementor Widgets ──
function clubdesk_elementor_init() {
    if (defined('ELEMENTOR_VERSION')) require_once get_template_directory().'/inc/elementor/class-elementor.php';
}
add_action('elementor/init','clubdesk_elementor_init');

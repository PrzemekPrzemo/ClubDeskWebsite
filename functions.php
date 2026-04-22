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
    if (is_front_page()) return 'ClubDesk — System zarządzania klubem sportowym | 37 dyscyplin';
    if (is_page('sporty'))         return '37 dyscyplin sportowych — obsługiwane sporty | ClubDesk';
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
        ''               => 'System zarządzania klubem sportowym dla 37 dyscyplin. Członkowie, finanse, treningi, zawody i cyfrowa legitymacja z QR — 100% online. Sprawdź ClubDesk.',
        'sporty'         => 'ClubDesk obsługuje 37 dyscyplin sportowych: piłka nożna, pływanie, sztuki walki, kolarstwo i wiele innych. Dedykowane moduły per sport, integracje z federacjami.',
        'funkcje'        => '14 modułów ClubDesk: zarządzanie członkami, finanse, treningi, zawody, portal zawodnika z QR, galeria, sklep klubowy, API REST i więcej.',
        'wyglad'         => 'Poznaj interfejs ClubDesk — 12 ekranów systemu ERP dla klubów sportowych. Dashboard, panel zawodnika, finanse, kalendarz treningów i więcej.',
        'bezpieczenstwo' => 'Bezpieczeństwo danych w ClubDesk: 2FA, izolacja multi-tenant, szyfrowanie transmisji, automatyczne kopie zapasowe, pełna zgodność z RODO.',
        'blog'           => 'Blog ClubDesk — praktyczna wiedza o zarządzaniu klubem sportowym, finansach, RODO, Ustawie Kamilka i cyfryzacji. Publikujemy od maja 2026.',
    ];
    $slug = '';
    if (!is_front_page() && is_page()) { global $post; $slug = $post ? $post->post_name : ''; }
    if (is_home() || is_category()) { $slug = 'blog'; }
    $desc  = esc_attr($metas[$slug] ?? $metas['']);
    $ogurl = esc_url(get_permalink() ?: home_url('/'));
    $ogtitle = esc_attr(is_front_page() ? 'ClubDesk — System zarządzania klubem sportowym' : strip_tags(get_the_title()));
    echo "\n<meta name=\"description\" content=\"{$desc}\">\n";
    echo "<meta name=\"robots\" content=\"index, follow\">\n";
    echo "<meta property=\"og:type\" content=\"website\">\n";
    echo "<meta property=\"og:site_name\" content=\"ClubDesk\">\n";
    echo "<meta property=\"og:title\" content=\"{$ogtitle}\">\n";
    echo "<meta property=\"og:description\" content=\"{$desc}\">\n";
    echo "<meta property=\"og:url\" content=\"{$ogurl}\">\n";
    echo "<meta name=\"twitter:card\" content=\"summary\">\n";
    echo "<meta name=\"twitter:title\" content=\"{$ogtitle}\">\n";
    echo "<meta name=\"twitter:description\" content=\"{$desc}\">\n";
}
add_action('wp_head','cd_seo_head',1);

// ── SEO: JSON-LD Organization + SoftwareApplication ──
function cd_json_ld() { ?>
<script type="application/ld+json">
[{
  "@context":"https://schema.org",
  "@type":"Organization",
  "name":"ClubDesk",
  "url":"https://clubdesk.pl",
  "contactPoint":{"@type":"ContactPoint","contactType":"customer support","email":"kontakt@clubdesk.pl","availableLanguage":"Polish"}
},{
  "@context":"https://schema.org",
  "@type":"SoftwareApplication",
  "name":"ClubDesk",
  "applicationCategory":"BusinessApplication",
  "operatingSystem":"Web",
  "url":"https://clubdesk.pl",
  "description":"Wielosportowy system ERP/CRM dla polskich klubów sportowych. 37 dyscyplin, 14 modułów, API REST, 2FA, RODO.",
  "offers":{"@type":"AggregateOffer","priceCurrency":"PLN","availability":"https://schema.org/InStock"},
  "featureList":"Zarządzanie członkami, finanse, treningi, zawody, cyfrowa legitymacja QR, API REST, 2FA, RODO"
}]
</script>
<?php }
add_action('wp_head','cd_json_ld');

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

// ── Customizer: contact info ──
function clubdesk_customizer($wp_customize) {
    $wp_customize->add_section('clubdesk_contact',['title'=>'ClubDesk — Kontakt','priority'=>30]);
    foreach(['phone'=>['Telefon','+48 XXX XXX XXX'],'email'=>['E-mail','kontakt@clubdesk.pl'],'hours'=>['Godziny','Pon-Pt: 9:00-17:00']] as $k=>$v) {
        $wp_customize->add_setting("clubdesk_$k",['default'=>$v[1],'sanitize_callback'=>'sanitize_text_field']);
        $wp_customize->add_control("clubdesk_$k",['label'=>$v[0],'section'=>'clubdesk_contact','type'=>'text']);
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

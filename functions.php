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
    wp_enqueue_style('clubdesk-brand',get_template_directory_uri().'/assets/css/brand.css',['clubdesk-fonts'],'1.0.0');
    wp_enqueue_style('clubdesk-style',get_stylesheet_uri(),['clubdesk-brand'],'1.0.0');
    wp_enqueue_script('clubdesk-main',get_template_directory_uri().'/assets/js/main.js',[],'1.0.0',true);
}
add_action('wp_enqueue_scripts','clubdesk_scripts');

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

// ── Disable Gutenberg for pages (use Elementor) ──
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

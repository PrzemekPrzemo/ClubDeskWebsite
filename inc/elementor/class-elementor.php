<?php
if (!defined('ABSPATH')) exit;

class ClubDesk_Elementor {
    private static $instance = null;

    public static function instance() {
        if (is_null(self::$instance)) self::$instance = new self();
        return self::$instance;
    }

    public function __construct() {
        add_action('elementor/widgets/register', [$this, 'register_widgets']);
        add_action('elementor/elements/categories_registered', [$this, 'add_category']);
    }

    public function add_category($elements_manager) {
        $elements_manager->add_category('clubdesk', [
            'title' => 'ClubDesk',
            'icon'  => 'fa fa-futbol',
        ]);
    }

    public function register_widgets($widgets_manager) {
        $widgets = ['hero','about','modules','sports','shootero','why','steps','pricing','faq','contact'];
        foreach ($widgets as $w) {
            require_once get_template_directory() . "/inc/elementor/widgets/{$w}.php";
        }
        $widgets_manager->register(new \ClubDesk_Hero_Widget());
        $widgets_manager->register(new \ClubDesk_About_Widget());
        $widgets_manager->register(new \ClubDesk_Modules_Widget());
        $widgets_manager->register(new \ClubDesk_Sports_Widget());
        $widgets_manager->register(new \ClubDesk_Shootero_Widget());
        $widgets_manager->register(new \ClubDesk_Why_Widget());
        $widgets_manager->register(new \ClubDesk_Steps_Widget());
        $widgets_manager->register(new \ClubDesk_Pricing_Widget());
        $widgets_manager->register(new \ClubDesk_FAQ_Widget());
        $widgets_manager->register(new \ClubDesk_Contact_Widget());
    }
}

ClubDesk_Elementor::instance();

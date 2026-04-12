<?php
if (!defined('ABSPATH')) exit;
class ClubDesk_About_Widget extends \Elementor\Widget_Base {
    public function get_name() { return 'clubdesk_about'; }
    public function get_title() { return 'CD: O systemie'; }
    public function get_icon() { return 'eicon-info-circle'; }
    public function get_categories() { return ['clubdesk']; }

    protected function register_controls() {
        $this->start_controls_section('content', ['label'=>'Treść','tab'=>\Elementor\Controls_Manager::TAB_CONTENT]);
        $this->add_control('label', ['label'=>'Etykieta','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'O systemie']);
        $this->add_control('title', ['label'=>'Nagłówek','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Platforma stworzona dla klubów sportowych']);
        $this->add_control('subtitle', ['label'=>'Podtytuł','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Kompleksowe narzędzie, które zastąpi arkusze kalkulacyjne i chaos komunikacyjny.']);
        $this->add_control('col1_title', ['label'=>'Kolumna 1 tytuł','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'100% Online']);
        $this->add_control('col1_text', ['label'=>'Kolumna 1 opis','type'=>\Elementor\Controls_Manager::TEXTAREA,'default'=>'System w chmurze dostępny z każdego urządzenia. Brak instalacji, automatyczne aktualizacje, regularne kopie zapasowe.']);
        $this->add_control('col2_title', ['label'=>'Kolumna 2 tytuł','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Wielosportowość']);
        $this->add_control('col2_text', ['label'=>'Kolumna 2 opis','type'=>\Elementor\Controls_Manager::TEXTAREA,'default'=>'Jeden system dla wielu sekcji sportowych. Piłka nożna, koszykówka, strzelectwo i wiele więcej — jednocześnie.']);
        $this->add_control('col3_title', ['label'=>'Kolumna 3 tytuł','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Na miarę Twojego klubu']);
        $this->add_control('col3_text', ['label'=>'Kolumna 3 opis','type'=>\Elementor\Controls_Manager::TEXTAREA,'default'=>'Indywidualna implementacja. Wybierasz moduły, konfigurujemy branding — płacisz tylko za to, czego potrzebujesz.']);
        $this->add_control('bottom_text', ['label'=>'Tekst dolny','type'=>\Elementor\Controls_Manager::TEXTAREA,'default'=>'ClubDesk to kompleksowy system zarządzania klubem sportowym typu SaaS. Każdy klub otrzymuje własną subdomenę, indywidualny branding i dostęp do modułów dopasowanych do specyfiki jego dyscyplin. System jest ciągle rozwijany we współpracy z naszymi klientami.']);
        $this->end_controls_section();
    }

    protected function render() {
        $s = $this->get_settings_for_display(); ?>
        <section class="cd-section" id="o-systemie">
          <div class="cd-container">
            <div class="cd-section__header"><span class="cd-label"><?php echo esc_html($s['label']); ?></span><h2><?php echo esc_html($s['title']); ?></h2><p><?php echo esc_html($s['subtitle']); ?></p></div>
            <div class="cd-grid cd-grid--3">
              <?php for($i=1;$i<=3;$i++): ?>
              <div class="cd-about-card"><h3><?php echo esc_html($s["col{$i}_title"]); ?></h3><p><?php echo esc_html($s["col{$i}_text"]); ?></p></div>
              <?php endfor; ?>
            </div>
            <p class="cd-about-text"><?php echo esc_html($s['bottom_text']); ?></p>
          </div>
        </section>
        <?php
    }
}

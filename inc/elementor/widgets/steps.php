<?php
if (!defined('ABSPATH')) exit;
class ClubDesk_Steps_Widget extends \Elementor\Widget_Base {
    public function get_name() { return 'clubdesk_steps'; }
    public function get_title() { return 'CD: Jak zacząć'; }
    public function get_icon() { return 'eicon-number-field'; }
    public function get_categories() { return ['clubdesk']; }

    protected function register_controls() {
        $this->start_controls_section('content', ['label'=>'Treść','tab'=>\Elementor\Controls_Manager::TAB_CONTENT]);
        $this->add_control('title', ['label'=>'Nagłówek','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Zacznij w 3 krokach']);
        $this->add_control('step1_title', ['label'=>'Krok 1 tytuł','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Kontakt']);
        $this->add_control('step1_text', ['label'=>'Krok 1 opis','type'=>\Elementor\Controls_Manager::TEXTAREA,'default'=>'Opowiedz nam o swoim klubie i potrzebach. Bezpłatna konsultacja — bez zobowiązań.']);
        $this->add_control('step2_title', ['label'=>'Krok 2 tytuł','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Konfiguracja']);
        $this->add_control('step2_text', ['label'=>'Krok 2 opis','type'=>\Elementor\Controls_Manager::TEXTAREA,'default'=>'Uruchamiamy Twoją instancję, konfigurujemy moduły i branding. Pomagamy z migracją danych.']);
        $this->add_control('step3_title', ['label'=>'Krok 3 tytuł','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Działanie']);
        $this->add_control('step3_text', ['label'=>'Krok 3 opis','type'=>\Elementor\Controls_Manager::TEXTAREA,'default'=>'Twój klub działa online. Szkolimy zespół, zapewniamy wsparcie. Bezpłatny okres próbny.']);
        $this->end_controls_section();
    }

    protected function render() {
        $s = $this->get_settings_for_display(); ?>
        <section class="cd-section" id="jak-to-dziala">
          <div class="cd-container">
            <div class="cd-section__header"><span class="cd-label">Jak zacząć</span><h2><?php echo esc_html($s['title']); ?></h2></div>
            <div class="cd-grid cd-grid--3 cd-steps">
              <?php for($i=1;$i<=3;$i++): ?>
              <div class="cd-step"><div class="cd-step__num"><?php echo $i; ?></div><h3><?php echo esc_html($s["step{$i}_title"]); ?></h3><p><?php echo esc_html($s["step{$i}_text"]); ?></p></div>
              <?php endfor; ?>
            </div>
          </div>
        </section>
        <?php
    }
}

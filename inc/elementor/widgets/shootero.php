<?php
if (!defined('ABSPATH')) exit;
class ClubDesk_Shootero_Widget extends \Elementor\Widget_Base {
    public function get_name() { return 'clubdesk_shootero'; }
    public function get_title() { return 'CD: Shootero'; }
    public function get_icon() { return 'eicon-bullseye'; }
    public function get_categories() { return ['clubdesk']; }

    protected function register_controls() {
        $this->start_controls_section('content', ['label'=>'Treść','tab'=>\Elementor\Controls_Manager::TAB_CONTENT]);
        $this->add_control('title', ['label'=>'Nagłówek','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Prowadzisz klub strzelecki? Poznaj Shootero']);
        $this->add_control('text', ['label'=>'Opis','type'=>\Elementor\Controls_Manager::TEXTAREA,'default'=>'Dedykowany system dla klubów strzelectwa sportowego — stworzony we współpracy ze strzelcami, dla strzelców.']);
        $this->add_control('features', ['label'=>'Cechy (po enterze)','type'=>\Elementor\Controls_Manager::TEXTAREA,'default'=>"Zarządzanie bronią i amunicją klubową\nLicencje PZSS i weryfikacja QR\nPełne zarządzanie zawodami\nSystem sędziowski z certyfikacjami\nKarty wynikowe i rankingi\nEwidencja dyscyplin strzeleckich\nBadania lekarskie zawodników\nSkładki i finanse klubowe"]);
        $this->add_control('btn_text', ['label'=>'Przycisk','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Zapytaj o Shootero']);
        $this->add_control('btn_link', ['label'=>'Link','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'#kontakt']);
        $this->end_controls_section();
    }

    protected function render() {
        $s = $this->get_settings_for_display();
        $feats = array_filter(explode("\n", $s['features'])); ?>
        <section class="cd-section cd-section--dark" id="shootero">
          <div class="cd-container"><div class="cd-two-col">
            <div>
              <span class="cd-label" style="color:var(--cd-pink)">Dla klubów strzeleckich</span>
              <h2 style="color:#fff"><?php echo esc_html($s['title']); ?></h2>
              <p style="color:rgba(255,255,255,.75)"><?php echo esc_html($s['text']); ?></p>
              <ul class="cd-check-list cd-check-list--light"><?php foreach($feats as $f): ?><li><?php echo esc_html(trim($f)); ?></li><?php endforeach; ?></ul>
              <a href="<?php echo esc_url($s['btn_link']); ?>" class="cd-btn cd-btn--primary" style="margin-top:1.5rem"><?php echo esc_html($s['btn_text']); ?></a>
            </div>
            <div class="cd-text-center" style="display:flex;align-items:center;justify-content:center">
              <div class="cd-shootero-logo">
                <svg viewBox="0 0 80 80" fill="none" width="80" height="80"><circle cx="40" cy="40" r="30" stroke="white" stroke-width="2" opacity=".3"/><circle cx="40" cy="40" r="20" stroke="white" stroke-width="2" opacity=".5"/><circle cx="40" cy="40" r="10" stroke="white" stroke-width="2" opacity=".7"/><circle cx="40" cy="40" r="3" fill="#EE2C28"/></svg>
                <span>Shootero</span>
              </div>
            </div>
          </div></div>
        </section>
        <?php
    }
}

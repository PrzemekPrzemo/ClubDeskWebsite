<?php
if (!defined('ABSPATH')) exit;
class ClubDesk_Contact_Widget extends \Elementor\Widget_Base {
    public function get_name() { return 'clubdesk_contact'; }
    public function get_title() { return 'CD: Kontakt'; }
    public function get_icon() { return 'eicon-mail'; }
    public function get_categories() { return ['clubdesk']; }

    protected function register_controls() {
        $this->start_controls_section('content', ['label'=>'Treść','tab'=>\Elementor\Controls_Manager::TAB_CONTENT]);
        $this->add_control('title', ['label'=>'Nagłówek','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Porozmawiajmy o Twoim klubie']);
        $this->add_control('subtitle', ['label'=>'Podtytuł','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Bezpłatna konsultacja. Odpowiadamy w ciągu 24 godzin.']);
        $this->add_control('email', ['label'=>'E-mail','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'kontakt@clubdesk.pl']);
        $this->add_control('phone', ['label'=>'Telefon','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'+48 XXX XXX XXX']);
        $this->add_control('hours', ['label'=>'Godziny','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Pon — Pt: 9:00 — 17:00']);
        $this->add_control('location', ['label'=>'Lokalizacja','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Polska — obsługujemy kluby w całym kraju']);
        $this->end_controls_section();
    }

    protected function render() {
        $s = $this->get_settings_for_display();
        $items = [
            ['icon'=>'<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6l-10 7L2 6"/>','label'=>'E-mail','value'=>$s['email']],
            ['icon'=>'<path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6A19.79 19.79 0 012.12 4.18 2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>','label'=>'Telefon','value'=>$s['phone']],
            ['icon'=>'<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>','label'=>'Godziny kontaktu','value'=>$s['hours']],
            ['icon'=>'<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/>','label'=>'Lokalizacja','value'=>$s['location']],
        ]; ?>
        <section class="cd-section cd-section--slate" id="kontakt">
          <div class="cd-container">
            <div class="cd-section__header"><span class="cd-label">Kontakt</span><h2><?php echo esc_html($s['title']); ?></h2><p><?php echo esc_html($s['subtitle']); ?></p></div>
            <div class="cd-contact-grid">
              <?php foreach($items as $it): ?>
              <div class="cd-contact-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="#EE2C28" stroke-width="2" width="28" height="28"><?php echo $it['icon']; ?></svg>
                <div><strong><?php echo esc_html($it['label']); ?></strong><span><?php echo esc_html($it['value']); ?></span></div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </section>
        <?php
    }
}

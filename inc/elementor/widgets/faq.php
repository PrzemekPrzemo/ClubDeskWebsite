<?php
if (!defined('ABSPATH')) exit;
class ClubDesk_FAQ_Widget extends \Elementor\Widget_Base {
    public function get_name() { return 'clubdesk_faq'; }
    public function get_title() { return 'CD: FAQ'; }
    public function get_icon() { return 'eicon-help-o'; }
    public function get_categories() { return ['clubdesk']; }

    protected function register_controls() {
        $this->start_controls_section('content', ['label'=>'Treść','tab'=>\Elementor\Controls_Manager::TAB_CONTENT]);
        $this->add_control('title', ['label'=>'Nagłówek','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Najczęściej zadawane pytania']);
        $this->add_control('items', ['label'=>'Pytania','type'=>\Elementor\Controls_Manager::REPEATER,
            'fields'=>[
                ['name'=>'question','label'=>'Pytanie','type'=>\Elementor\Controls_Manager::TEXT],
                ['name'=>'answer','label'=>'Odpowiedź','type'=>\Elementor\Controls_Manager::TEXTAREA],
            ],
            'default'=>[
                ['question'=>'Czy mogę prowadzić wiele sekcji sportowych w jednym klubie?','answer'=>'Tak! ClubDesk jest wielosportowy od podstaw. Możesz prowadzić dowolną liczbę sekcji w ramach jednego konta.'],
                ['question'=>'Czy system integruje się z polskimi związkami sportowymi?','answer'=>'Tak, współpracujemy z PZPN, PZKosz, PZPS, PZSS, PZLA i innymi.'],
                ['question'=>'Czy zawodnicy mają własny dostęp?','answer'=>'Tak, portal zawodnika pozwala sprawdzać składki, wydarzenia, profil i historię treningów.'],
                ['question'=>'Jak wygląda wdrożenie?','answer'=>'Bezpłatna konsultacja, konfiguracja instancji, import danych, szkolenie zespołu.'],
                ['question'=>'Czym jest Shootero?','answer'=>'Dedykowany produkt dla klubów strzelectwa sportowego: ewidencja broni, licencje PZSS, zawody, karty wynikowe.'],
                ['question'=>'Czy dane są bezpieczne?','answer'=>'2FA, szyfrowanie, regularne backupy, dziennik aktywności. Zgodność z RODO.'],
                ['question'=>'Czy mogę zintegrować z biurem księgowym?','answer'=>'Tak, eksport danych finansowych w formatach akceptowanych przez programy księgowe.'],
                ['question'=>'Czy mogę zmienić plan?','answer'=>'Tak, w dowolnym momencie możesz rozszerzyć plan lub aktywować dodatkowe moduły.'],
            ],
            'title_field'=>'{{{ question }}}',
        ]);
        $this->end_controls_section();
    }

    protected function render() {
        $s = $this->get_settings_for_display(); ?>
        <section class="cd-section" id="faq">
          <div class="cd-container">
            <div class="cd-section__header"><span class="cd-label">FAQ</span><h2><?php echo esc_html($s['title']); ?></h2></div>
            <div class="cd-faq">
              <?php foreach($s['items'] as $it): ?>
              <details class="cd-faq__item"><summary><?php echo esc_html($it['question']); ?></summary><div class="cd-faq__body"><?php echo esc_html($it['answer']); ?></div></details>
              <?php endforeach; ?>
            </div>
          </div>
        </section>
        <?php
    }
}

<?php
if (!defined('ABSPATH')) exit;
class ClubDesk_Why_Widget extends \Elementor\Widget_Base {
    public function get_name() { return 'clubdesk_why'; }
    public function get_title() { return 'CD: Dlaczego my'; }
    public function get_icon() { return 'eicon-check-circle'; }
    public function get_categories() { return ['clubdesk']; }

    protected function register_controls() {
        $this->start_controls_section('content', ['label'=>'Treść','tab'=>\Elementor\Controls_Manager::TAB_CONTENT]);
        $this->add_control('title', ['label'=>'Nagłówek','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Dlaczego ClubDesk?']);
        $this->add_control('subtitle', ['label'=>'Podtytuł','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Budujemy system z myślą o polskich klubach sportowych.']);
        $this->add_control('items', ['label'=>'Wyróżniki','type'=>\Elementor\Controls_Manager::REPEATER,
            'fields'=>[
                ['name'=>'item_title','label'=>'Tytuł','type'=>\Elementor\Controls_Manager::TEXT],
                ['name'=>'item_text','label'=>'Opis','type'=>\Elementor\Controls_Manager::TEXTAREA],
            ],
            'default'=>[
                ['item_title'=>'Indywidualna implementacja','item_text'=>'Każdy klub jest inny. Konfigurujemy system pod Twoje potrzeby — od modułów po branding.'],
                ['item_title'=>'Ciągły rozwój','item_text'=>'Nowe sporty, moduły i integracje — w oparciu o realne potrzeby klientów.'],
                ['item_title'=>'Wdrożenie i wsparcie','item_text'=>'Migracja danych, szkolenie zespołu. Serwis i utrzymanie w cenie.'],
                ['item_title'=>'Integracje','item_text'=>'Związki sportowe, biura księgowe, eksport danych, API.'],
                ['item_title'=>'SaaS w chmurze','item_text'=>'Własna subdomena, branding i izolacja danych. Zero instalacji.'],
                ['item_title'=>'Otwartość na potrzeby','item_text'=>'Jesteśmy otwarci na indywidualne rozwiązania i rozwijamy system pod konkretne wymagania.'],
            ],
            'title_field'=>'{{{ item_title }}}',
        ]);
        $this->end_controls_section();
    }

    protected function render() {
        $s = $this->get_settings_for_display(); ?>
        <section class="cd-section cd-section--slate" id="dlaczego">
          <div class="cd-container">
            <div class="cd-section__header"><span class="cd-label">Dlaczego my</span><h2><?php echo esc_html($s['title']); ?></h2><p><?php echo esc_html($s['subtitle']); ?></p></div>
            <div class="cd-grid cd-grid--2">
              <?php foreach($s['items'] as $it): ?>
              <div class="cd-diff"><div class="cd-diff__icon"><svg viewBox="0 0 22 22" fill="none" stroke="#EE2C28" stroke-width="1.5"><path d="M4 16l5-5 3 3 6-7"/><rect x="2" y="2" width="18" height="18" rx="3"/></svg></div><div><h4><?php echo esc_html($it['item_title']); ?></h4><p><?php echo esc_html($it['item_text']); ?></p></div></div>
              <?php endforeach; ?>
            </div>
          </div>
        </section>
        <?php
    }
}

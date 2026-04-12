<?php
if (!defined('ABSPATH')) exit;
class ClubDesk_Pricing_Widget extends \Elementor\Widget_Base {
    public function get_name() { return 'clubdesk_pricing'; }
    public function get_title() { return 'CD: Cennik'; }
    public function get_icon() { return 'eicon-price-table'; }
    public function get_categories() { return ['clubdesk']; }

    protected function register_controls() {
        $this->start_controls_section('content', ['label'=>'Nagłówek','tab'=>\Elementor\Controls_Manager::TAB_CONTENT]);
        $this->add_control('title', ['label'=>'Nagłówek','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Elastyczne plany dopasowane do klubu']);
        $this->add_control('subtitle', ['label'=>'Podtytuł','type'=>\Elementor\Controls_Manager::TEXTAREA,'default'=>'Cennik ustalamy indywidualnie — zależy od liczby modułów, zawodników i specyfiki Twojego klubu.']);
        $this->add_control('note', ['label'=>'Notatka dolna','type'=>\Elementor\Controls_Manager::TEXTAREA,'default'=>'Wszystkie plany zawierają bezpłatny okres próbny. Ceny netto, ustalane indywidualnie.']);
        $this->end_controls_section();

        $this->start_controls_section('plans_sec', ['label'=>'Plany','tab'=>\Elementor\Controls_Manager::TAB_CONTENT]);
        $this->add_control('plans', ['label'=>'Plany','type'=>\Elementor\Controls_Manager::REPEATER,
            'fields'=>[
                ['name'=>'plan_name','label'=>'Nazwa','type'=>\Elementor\Controls_Manager::TEXT],
                ['name'=>'plan_desc','label'=>'Opis','type'=>\Elementor\Controls_Manager::TEXT],
                ['name'=>'plan_features','label'=>'Cechy (po enterze)','type'=>\Elementor\Controls_Manager::TEXTAREA],
                ['name'=>'plan_featured','label'=>'Wyróżniony','type'=>\Elementor\Controls_Manager::SWITCHER,'default'=>''],
                ['name'=>'plan_btn','label'=>'Tekst przycisku','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Zapytaj o wycenę'],
            ],
            'default'=>[
                ['plan_name'=>'Start','plan_desc'=>'Dla małych klubów','plan_features'=>"Zarządzanie członkami\nSkładki i płatności\nKalendarz wydarzeń\n1 sekcja sportowa\nE-mail i ogłoszenia\nWłasna subdomena\nWsparcie techniczne",'plan_featured'=>''],
                ['plan_name'=>'Rozbudowany','plan_desc'=>'Dla klubów wielosekcyjnych','plan_features'=>"Wszystko z planu Start\nWiele sekcji sportowych\nTreningi i frekwencja\nBadania lekarskie\nPortal zawodnika\nSMS i powiadomienia\nIntegracja ze związkami\nWłasny branding",'plan_featured'=>'yes'],
                ['plan_name'=>'Premium','plan_desc'=>'Dla dużych organizacji','plan_features'=>"Wszystko z Rozbudowanego\nBez limitów\nAPI i biuro księgowe\nDedykowane funkcjonalności\nPriorytetowe wsparcie\nSzkolenia i onboarding\nSLA i gwarancja\nWhite label",'plan_featured'=>''],
            ],
            'title_field'=>'{{{ plan_name }}}',
        ]);
        $this->end_controls_section();
    }

    protected function render() {
        $s = $this->get_settings_for_display(); ?>
        <section class="cd-section cd-section--slate" id="cennik">
          <div class="cd-container">
            <div class="cd-section__header"><span class="cd-label">Cennik</span><h2><?php echo esc_html($s['title']); ?></h2><p><?php echo esc_html($s['subtitle']); ?></p></div>
            <div class="cd-grid cd-grid--3">
              <?php foreach($s['plans'] as $p): $feat=$p['plan_featured']==='yes'; $items=array_filter(explode("\n",$p['plan_features'])); ?>
              <div class="cd-pricing<?php echo $feat?' cd-pricing--featured':''; ?>">
                <?php if($feat): ?><div class="cd-pricing__badge">Popularny</div><?php endif; ?>
                <h3><?php echo esc_html($p['plan_name']); ?></h3>
                <p class="cd-pricing__desc"><?php echo esc_html($p['plan_desc']); ?></p>
                <ul><?php foreach($items as $it): ?><li><?php echo esc_html(trim($it)); ?></li><?php endforeach; ?></ul>
                <a href="#kontakt" class="cd-btn <?php echo $feat?'cd-btn--primary':'cd-btn--outline'; ?>"><?php echo esc_html($p['plan_btn']); ?></a>
              </div>
              <?php endforeach; ?>
            </div>
            <p class="cd-text-center" style="margin-top:2rem;color:var(--cd-charcoal-light);font-size:.875rem"><?php echo esc_html($s['note']); ?></p>
          </div>
        </section>
        <?php
    }
}

<?php
if (!defined('ABSPATH')) exit;
class ClubDesk_Modules_Widget extends \Elementor\Widget_Base {
    public function get_name() { return 'clubdesk_modules'; }
    public function get_title() { return 'CD: Moduły'; }
    public function get_icon() { return 'eicon-apps'; }
    public function get_categories() { return ['clubdesk']; }

    protected function register_controls() {
        $this->start_controls_section('content', ['label'=>'Nagłówek','tab'=>\Elementor\Controls_Manager::TAB_CONTENT]);
        $this->add_control('title', ['label'=>'Nagłówek','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Wszystko, czego potrzebuje Twój klub']);
        $this->add_control('subtitle', ['label'=>'Podtytuł','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Każdy moduł to oddzielna funkcjonalność — aktywuj tylko te, których potrzebujesz.']);
        $this->end_controls_section();

        $this->start_controls_section('modules_list', ['label'=>'Moduły','tab'=>\Elementor\Controls_Manager::TAB_CONTENT]);
        $this->add_control('modules', ['label'=>'Moduły','type'=>\Elementor\Controls_Manager::REPEATER,
            'fields'=>[
                ['name'=>'mod_title','label'=>'Tytuł','type'=>\Elementor\Controls_Manager::TEXT],
                ['name'=>'mod_items','label'=>'Pozycje (po enterze)','type'=>\Elementor\Controls_Manager::TEXTAREA],
            ],
            'default'=>[
                ['mod_title'=>'Zarządzanie członkami','mod_items'=>"Pełna kartoteka zawodników\nPortal samoobsługowy\nSekcje i kategorie wiekowe\nLicencje sportowe i statusy"],
                ['mod_title'=>'Finanse i składki','mod_items'=>"Konfiguracja stawek opłat\nŚledzenie wpłat i zaległości\nHistoria płatności\nAlerty o zaległościach"],
                ['mod_title'=>'Treningi','mod_items'=>"Planowanie sesji\nLista obecności\nFiltrowanie per sekcja\nHistoria frekwencji"],
                ['mod_title'=>'Kalendarz i wydarzenia','mod_items'=>"Mecze, zawody, spotkania\nKategorie per sport\nLokalizacje i statusy\nWidok kalendarza i listy"],
                ['mod_title'=>'Komunikacja','mod_items'=>"Szablony e-mail\nSMS (SMSAPI / Twilio)\nOgłoszenia in-app\nPowiadomienia push"],
                ['mod_title'=>'Badania lekarskie','mod_items'=>"Rejestr badań\nAlerty terminów\nWidok lekarza\nWyniki i typy badań"],
                ['mod_title'=>'Administracja klubu','mod_items'=>"Branding, logo, kolory\nKonfiguracja SMTP\n6 ról użytkowników\nZarządzanie uprawnieniami"],
                ['mod_title'=>'Bezpieczeństwo i RODO','mod_items'=>"2FA (TOTP)\nDziennik aktywności\nZgodność z RODO\nKopie zapasowe"],
            ],
            'title_field'=>'{{{ mod_title }}}',
        ]);
        $this->end_controls_section();
    }

    protected function render() {
        $s = $this->get_settings_for_display(); ?>
        <section class="cd-section cd-section--slate" id="moduly">
          <div class="cd-container">
            <div class="cd-section__header"><span class="cd-label">Moduły</span><h2><?php echo esc_html($s['title']); ?></h2><p><?php echo esc_html($s['subtitle']); ?></p></div>
            <div class="cd-grid cd-grid--4">
              <?php foreach($s['modules'] as $m): $items=array_filter(explode("\n",$m['mod_items'])); ?>
              <div class="cd-card"><h4><?php echo esc_html($m['mod_title']); ?></h4><ul><?php foreach($items as $item): ?><li><?php echo esc_html(trim($item)); ?></li><?php endforeach; ?></ul></div>
              <?php endforeach; ?>
            </div>
          </div>
        </section>
        <?php
    }
}

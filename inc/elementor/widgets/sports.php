<?php
if (!defined('ABSPATH')) exit;
class ClubDesk_Sports_Widget extends \Elementor\Widget_Base {
    public function get_name() { return 'clubdesk_sports'; }
    public function get_title() { return 'CD: Sporty'; }
    public function get_icon() { return 'eicon-posts-grid'; }
    public function get_categories() { return ['clubdesk']; }

    protected function register_controls() {
        $this->start_controls_section('content', ['label'=>'Treść','tab'=>\Elementor\Controls_Manager::TAB_CONTENT]);
        $this->add_control('title', ['label'=>'Nagłówek','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'System dla każdego sportu']);
        $this->add_control('subtitle', ['label'=>'Podtytuł','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Architektura pluginowa — każdy sport ma dedykowane moduły.']);
        $this->add_control('callout', ['label'=>'Callout','type'=>\Elementor\Controls_Manager::TEXTAREA,'default'=>'Integracja z polskimi związkami sportowymi — współpracujemy z federacjami (PZPN, PZKosz, PZPS, PZSS, PZLA i inne). Integrujemy się również z biurami księgowymi.']);
        $this->end_controls_section();

        $this->start_controls_section('sports_list', ['label'=>'Lista sportów','tab'=>\Elementor\Controls_Manager::TAB_CONTENT]);
        $this->add_control('sports', ['label'=>'Sporty','type'=>\Elementor\Controls_Manager::REPEATER,
            'fields'=>[
                ['name'=>'name','label'=>'Nazwa','type'=>\Elementor\Controls_Manager::TEXT],
                ['name'=>'fed','label'=>'Federacja','type'=>\Elementor\Controls_Manager::TEXT],
                ['name'=>'type','label'=>'Typ','type'=>\Elementor\Controls_Manager::SELECT,'options'=>['drużynowy'=>'Drużynowy','indywidualny'=>'Indywidualny'],'default'=>'drużynowy'],
            ],
            'default'=>[
                ['name'=>'Piłka nożna','fed'=>'PZPN','type'=>'drużynowy'],
                ['name'=>'Koszykówka','fed'=>'PZKosz','type'=>'drużynowy'],
                ['name'=>'Siatkówka','fed'=>'PZPS','type'=>'drużynowy'],
                ['name'=>'Strzelectwo','fed'=>'PZSS','type'=>'indywidualny'],
                ['name'=>'Lekka atletyka','fed'=>'PZLA','type'=>'indywidualny'],
                ['name'=>'Hokej na lodzie','fed'=>'PZHL','type'=>'drużynowy'],
                ['name'=>'Piłka ręczna','fed'=>'ZPRP','type'=>'drużynowy'],
                ['name'=>'Tenis','fed'=>'PZT','type'=>'indywidualny'],
                ['name'=>'Pływanie','fed'=>'PZP','type'=>'indywidualny'],
                ['name'=>'Judo','fed'=>'PZJ','type'=>'indywidualny'],
                ['name'=>'Karate','fed'=>'PZKarate','type'=>'indywidualny'],
                ['name'=>'Wrotkarstwo','fed'=>'PZWrot','type'=>'indywidualny'],
            ],
            'title_field'=>'{{{ name }}}',
        ]);
        $this->end_controls_section();
    }

    protected function render() {
        $s = $this->get_settings_for_display(); ?>
        <section class="cd-section" id="sporty">
          <div class="cd-container">
            <div class="cd-section__header"><span class="cd-label">Sporty</span><h2><?php echo esc_html($s['title']); ?></h2><p><?php echo esc_html($s['subtitle']); ?></p></div>
            <div class="cd-grid cd-grid--6">
              <?php foreach($s['sports'] as $sp): $cls=$sp['type']==='drużynowy'?'team':'ind'; ?>
              <div class="cd-sport"><span class="cd-sport__name"><?php echo esc_html($sp['name']); ?></span><span class="cd-sport__fed"><?php echo esc_html($sp['fed']); ?></span><span class="cd-badge cd-badge--<?php echo $cls; ?>"><?php echo esc_html($sp['type']); ?></span></div>
              <?php endforeach; ?>
            </div>
            <div class="cd-callout"><p><?php echo esc_html($s['callout']); ?></p></div>
          </div>
        </section>
        <?php
    }
}

<?php
if (!defined('ABSPATH')) exit;
class ClubDesk_Hero_Widget extends \Elementor\Widget_Base {
    public function get_name() { return 'clubdesk_hero'; }
    public function get_title() { return 'CD: Hero'; }
    public function get_icon() { return 'eicon-banner'; }
    public function get_categories() { return ['clubdesk']; }

    protected function register_controls() {
        $this->start_controls_section('content', ['label'=>'Treść','tab'=>\Elementor\Controls_Manager::TAB_CONTENT]);
        $this->add_control('title', ['label'=>'Nagłówek','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Zarządzaj klubem sportowym jak profesjonalista']);
        $this->add_control('subtitle', ['label'=>'Podtytuł','type'=>\Elementor\Controls_Manager::TEXTAREA,'default'=>'Wielosportowy system ERP/CRM stworzony dla polskich klubów sportowych. Członkowie, finanse, treningi, zawody, komunikacja — wszystko w jednym miejscu, 100% online.']);
        $this->add_control('btn1_text', ['label'=>'Przycisk 1','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Umów bezpłatną konsultację']);
        $this->add_control('btn1_link', ['label'=>'Link 1','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'#kontakt']);
        $this->add_control('btn2_text', ['label'=>'Przycisk 2','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Zobacz moduły']);
        $this->add_control('btn2_link', ['label'=>'Link 2','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'#moduly']);
        $this->add_control('trust_text', ['label'=>'Tekst zaufania','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Integracja z polskimi związkami sportowymi']);
        $this->add_control('badges', ['label'=>'Federacje (po przecinku)','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'PZPN,PZKosz,PZPS,PZSS,PZLA,PZHL,PZT,PZJ']);
        $this->add_control('stat1_val', ['label'=>'Stat 1 wartość','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'247']);
        $this->add_control('stat1_label', ['label'=>'Stat 1 etykieta','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Aktywni zawodnicy']);
        $this->add_control('stat2_val', ['label'=>'Stat 2 wartość','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'5']);
        $this->add_control('stat2_label', ['label'=>'Stat 2 etykieta','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Sekcje sportowe']);
        $this->add_control('stat3_val', ['label'=>'Stat 3 wartość','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'38']);
        $this->add_control('stat3_label', ['label'=>'Stat 3 etykieta','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Treningi w miesiącu']);
        $this->add_control('stat4_val', ['label'=>'Stat 4 wartość','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'94%']);
        $this->add_control('stat4_label', ['label'=>'Stat 4 etykieta','type'=>\Elementor\Controls_Manager::TEXT,'default'=>'Ściągalność składek']);
        $this->end_controls_section();
    }

    protected function render() {
        $s = $this->get_settings_for_display();
        $badges = array_map('trim', explode(',', $s['badges']));
        ?>
        <section class="cd-hero" id="hero">
          <div class="cd-container"><div class="cd-hero__inner">
            <div class="cd-hero__content">
              <h1><?php echo esc_html($s['title']); ?></h1>
              <p class="cd-hero__sub"><?php echo esc_html($s['subtitle']); ?></p>
              <div class="cd-hero__buttons">
                <a href="<?php echo esc_url($s['btn1_link']); ?>" class="cd-btn cd-btn--primary cd-btn--lg"><?php echo esc_html($s['btn1_text']); ?></a>
                <a href="<?php echo esc_url($s['btn2_link']); ?>" class="cd-btn cd-btn--white cd-btn--lg"><?php echo esc_html($s['btn2_text']); ?></a>
              </div>
              <div class="cd-hero__trust">
                <p><?php echo esc_html($s['trust_text']); ?></p>
                <div class="cd-hero__badges"><?php foreach($badges as $b): ?><span><?php echo esc_html($b); ?></span><?php endforeach; ?></div>
              </div>
            </div>
            <div class="cd-hero__visual"><div class="cd-mockup">
              <div class="cd-mockup__dots"><span></span><span></span><span></span></div>
              <div class="cd-mockup__grid">
                <?php for($i=1;$i<=4;$i++): $red=($i==1||$i==4)?'cd-mockup__val--red':''; ?>
                <div class="cd-mockup__stat"><div class="cd-mockup__label"><?php echo esc_html($s["stat{$i}_label"]); ?></div><div class="cd-mockup__val <?php echo $red; ?>"><?php echo esc_html($s["stat{$i}_val"]); ?></div></div>
                <?php endfor; ?>
              </div>
            </div></div>
          </div></div>
        </section>
        <?php
    }
}

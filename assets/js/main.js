document.addEventListener('DOMContentLoaded', function() {
  var nav = document.querySelector('.cd-nav');
  var hamburger = document.querySelector('.cd-nav__hamburger');
  var overlay = document.querySelector('.cd-nav-overlay');
  var backToTop = document.querySelector('.cd-back-to-top');

  function closeMenu() {
    if (!nav) return;
    nav.classList.remove('cd-nav--open');
    document.body.style.overflow = '';
  }
  if (hamburger) hamburger.addEventListener('click', function() {
    nav.classList.toggle('cd-nav--open');
    document.body.style.overflow = nav.classList.contains('cd-nav--open') ? 'hidden' : '';
  });
  if (overlay) overlay.addEventListener('click', closeMenu);
  document.querySelectorAll('.cd-nav__links a').forEach(function(l) {
    l.addEventListener('click', closeMenu);
  });
  if (backToTop) {
    window.addEventListener('scroll', function() {
      backToTop.classList.toggle('is-visible', window.scrollY > 600);
    }, {passive:true});
    backToTop.addEventListener('click', function(e) {
      e.preventDefault();
      window.scrollTo({top:0,behavior:'smooth'});
    });
  }
});

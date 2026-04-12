document.addEventListener('DOMContentLoaded', function() {
  var nav = document.querySelector('.nav');
  var hamburger = document.querySelector('.nav__hamburger');
  var navLinks = document.querySelector('.nav__links');
  var overlay = document.querySelector('.nav-overlay');
  var hero = document.querySelector('.hero');
  var backToTop = document.querySelector('.back-to-top');

  // Nav: transparent -> solid on scroll
  function updateNav() {
    if (!hero) return;
    var rect = hero.getBoundingClientRect();
    if (rect.bottom <= nav.offsetHeight) {
      nav.classList.remove('nav--transparent');
      nav.classList.add('nav--solid');
    } else {
      nav.classList.add('nav--transparent');
      nav.classList.remove('nav--solid');
    }
  }
  updateNav();
  window.addEventListener('scroll', updateNav, { passive: true });

  // Hamburger
  function toggleMenu() {
    nav.classList.toggle('nav--open');
    document.body.style.overflow = nav.classList.contains('nav--open') ? 'hidden' : '';
  }
  function closeMenu() {
    nav.classList.remove('nav--open');
    document.body.style.overflow = '';
  }
  if (hamburger) hamburger.addEventListener('click', toggleMenu);
  if (overlay) overlay.addEventListener('click', closeMenu);

  // Close menu on link click
  var menuLinks = navLinks ? navLinks.querySelectorAll('a') : [];
  menuLinks.forEach(function(link) {
    link.addEventListener('click', closeMenu);
  });

  // Active section highlighting
  var sections = document.querySelectorAll('section[id]');
  var navAnchors = document.querySelectorAll('.nav__links a[href^="#"]');
  var observerNav = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        navAnchors.forEach(function(a) { a.classList.remove('active'); });
        var active = document.querySelector('.nav__links a[href="#' + entry.target.id + '"]');
        if (active) active.classList.add('active');
      }
    });
  }, { rootMargin: '-40% 0px -60% 0px' });
  sections.forEach(function(s) { observerNav.observe(s); });

  // Scroll animations
  var animElements = document.querySelectorAll('.animate-on-scroll');
  var observerAnim = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observerAnim.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });
  animElements.forEach(function(el) { observerAnim.observe(el); });

  // Back to top
  if (backToTop) {
    window.addEventListener('scroll', function() {
      if (window.scrollY > 600) {
        backToTop.classList.add('is-visible');
      } else {
        backToTop.classList.remove('is-visible');
      }
    }, { passive: true });
    backToTop.addEventListener('click', function(e) {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // Contact form basic validation
  var form = document.querySelector('.contact-form');
  if (form) {
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      var btn = form.querySelector('.btn');
      var origText = btn.textContent;
      btn.textContent = 'Wysłano! Dziękujemy.';
      btn.disabled = true;
      btn.style.opacity = '0.7';
      setTimeout(function() {
        btn.textContent = origText;
        btn.disabled = false;
        btn.style.opacity = '1';
        form.reset();
      }, 3000);
    });
  }
});

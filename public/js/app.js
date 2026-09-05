/**
 * BasicPoint — shared front-end behaviours.
 * No framework dependency; safe to load once from the layout.
 */
document.addEventListener('DOMContentLoaded', function () {

  /* ---------- Sticky navbar shrink ---------- */
  var navbar = document.querySelector('[data-navbar]');
  if (navbar) {
    var onScroll = function () {
      navbar.classList.toggle('is-scrolled', window.scrollY > 12);
    };
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });
  }

  /* ---------- Mobile menu ---------- */
  var toggle = document.querySelector('[data-nav-toggle]');
  var mobileMenu = document.querySelector('[data-nav-mobile]');
  if (toggle && mobileMenu) {
    toggle.addEventListener('click', function () {
      var isOpen = mobileMenu.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
    mobileMenu.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        mobileMenu.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  /* ---------- FAQ accordion ---------- */
  document.querySelectorAll('[data-faq-item]').forEach(function (item) {
    var btn = item.querySelector('[data-faq-q]');
    var panel = item.querySelector('[data-faq-a]');
    if (!btn || !panel) return;
    btn.addEventListener('click', function () {
      var isOpen = item.classList.contains('is-open');

      document.querySelectorAll('[data-faq-item].is-open').forEach(function (openItem) {
        if (openItem !== item) {
          openItem.classList.remove('is-open');
          var openPanel = openItem.querySelector('[data-faq-a]');
          if (openPanel) openPanel.style.maxHeight = null;
          openItem.querySelector('[data-faq-q]').setAttribute('aria-expanded', 'false');
        }
      });

      item.classList.toggle('is-open', !isOpen);
      btn.setAttribute('aria-expanded', (!isOpen).toString());
      panel.style.maxHeight = !isOpen ? panel.scrollHeight + 'px' : null;
    });
  });

  /* ---------- Gallery filter ---------- */
  var filterButtons = document.querySelectorAll('[data-gallery-filter]');
  var galleryItems = document.querySelectorAll('[data-gallery-item]');
  filterButtons.forEach(function (btn) {
    btn.addEventListener('click', function () {
      filterButtons.forEach(function (b) { b.classList.remove('is-active'); });
      btn.classList.add('is-active');
      var category = btn.getAttribute('data-gallery-filter');
      galleryItems.forEach(function (item) {
        var match = category === 'all' || item.getAttribute('data-category') === category;
        item.style.display = match ? '' : 'none';
      });
    });
  });

  /* ---------- Lightbox ---------- */
  var lightbox = document.querySelector('[data-lightbox]');
  var lightboxImg = lightbox ? lightbox.querySelector('img') : null;
  if (lightbox && lightboxImg) {
    document.querySelectorAll('[data-gallery-item] img').forEach(function (img) {
      img.addEventListener('click', function () {
        lightboxImg.src = img.getAttribute('src');
        lightboxImg.alt = img.getAttribute('alt') || '';
        lightbox.classList.add('is-open');
      });
    });
    lightbox.addEventListener('click', function (e) {
      if (e.target === lightbox || e.target.closest('[data-lightbox-close]')) {
        lightbox.classList.remove('is-open');
        lightboxImg.src = '';
      }
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') {
        lightbox.classList.remove('is-open');
        lightboxImg.src = '';
      }
    });
  }

  /* ---------- Contact form (front-end only placeholder) ---------- */
  var contactForm = document.querySelector('[data-contact-form]');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      var successBox = contactForm.querySelector('[data-form-success]');
      if (successBox) successBox.classList.add('is-visible');
      contactForm.reset();
    });
  }

  /* ---------- Single, restrained reveal-on-scroll pass ---------- */
  var revealTargets = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && revealTargets.length) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    revealTargets.forEach(function (el) { observer.observe(el); });
  } else {
    revealTargets.forEach(function (el) { el.classList.add('is-visible'); });
  }
});

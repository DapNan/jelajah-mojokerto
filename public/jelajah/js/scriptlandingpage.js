const menuToggle = document.getElementById('menuToggle');
const navLinks = document.getElementById('navLinks');
const toast = document.getElementById('toast');
const startButton = document.getElementById('startButton');

document.getElementById('year').textContent = new Date().getFullYear();

// Brief opening screen: fades away after the page is ready.
document.body.classList.add('is-loading');
const introScreen = document.getElementById('introScreen');
function dismissIntro() {
  if (!introScreen) return;
  introScreen.classList.add('is-done');
  document.body.classList.remove('is-loading');
}
window.addEventListener('load', () => {
  window.setTimeout(dismissIntro, 850);
});
window.setTimeout(dismissIntro, 2200);

// Floating back-to-top button appears after scrolling.
const backToTop = document.getElementById('backToTop');
window.addEventListener('scroll', () => {
  backToTop.classList.toggle('visible', window.scrollY > 420);
}, { passive: true });
backToTop.addEventListener('click', () => {
  window.scrollTo({ top: 0, behavior: 'smooth' });
});

menuToggle.addEventListener('click', () => {
  const isOpen = navLinks.classList.toggle('open');
  menuToggle.setAttribute('aria-expanded', String(isOpen));
  menuToggle.textContent = isOpen ? '✕' : '☰';
});

navLinks.querySelectorAll('a').forEach(link => {
  link.addEventListener('click', () => {
    navLinks.classList.remove('open');
    menuToggle.setAttribute('aria-expanded', 'false');
    menuToggle.textContent = '☰';
  });
});

let toastTimer;
function showToast(message) {
  toast.textContent = message;
  toast.classList.add('show');
  clearTimeout(toastTimer);
  toastTimer = setTimeout(() => toast.classList.remove('show'), 3000);
}

startButton.addEventListener('click', (event) => {
  event.preventDefault();
  showToast('Petualangan segera dimulai! ✨ Hubungkan tombol ini ke halaman login Laravel.');
});

// Reveal sections gently as they enter the viewport.
const revealTargets = document.querySelectorAll(
  '.benefit-strip, .section-heading, .adventure-card, .more-missions, .how-visual, .how-copy, .about-photo, .about-copy, .cta-content'
);
revealTargets.forEach(element => element.classList.add('reveal'));

if ('IntersectionObserver' in window) {
  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });
  revealTargets.forEach(element => observer.observe(element));
} else {
  revealTargets.forEach(element => element.classList.add('visible'));
}

// Highlight the navigation item for the section currently in view.
const sections = document.querySelectorAll('main section[id], header[id]');
const navAnchors = navLinks.querySelectorAll('a');
if ('IntersectionObserver' in window) {
  const sectionObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        navAnchors.forEach(anchor => {
          anchor.classList.toggle('active', anchor.getAttribute('href') === `#${entry.target.id}`);
        });
      }
    });
  }, { rootMargin: '-30% 0px -60% 0px' });
  sections.forEach(section => sectionObserver.observe(section));
}

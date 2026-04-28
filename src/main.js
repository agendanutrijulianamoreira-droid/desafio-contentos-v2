import confetti from 'canvas-confetti';
import Typed from 'typed.js';

// Initialize Typed.js for the Hero Headline
const typedElement = document.getElementById('typed-headline');
if (typedElement) {
  new Typed('#typed-headline', {
    strings: [
      'Em 7 dias você vai usar o Claude',
      'Crie conteúdo estratégico com IA',
      'Planeje um mês em 1 hora',
      'Venda mais com menos esforço'
    ],
    typeSpeed: 50,
    backSpeed: 30,
    backDelay: 2000,
    loop: true,
    showCursor: true,
    cursorChar: '|'
  });
}

// Handle Buy Button Click (Kiwify Checkout)
const checkoutButtons = document.querySelectorAll('.checkout-button');
checkoutButtons.forEach(btn => {
  btn.addEventListener('click', (e) => {
    const checkoutUrl = btn.getAttribute('href');
    
    // If it's just an anchor link, let the smooth scroll handle it
    if (checkoutUrl.startsWith('#')) return;

    e.preventDefault();

    // Trigger confetti immediately
    confetti({
      particleCount: 150,
      spread: 70,
      origin: { y: 0.6 },
      colors: ['#D66B44', '#A855F7', '#ffffff']
    });

    const originalText = btn.innerText;
    btn.innerText = "LIBERANDO ACESSO...";
    btn.style.opacity = "0.7";
    btn.style.pointerEvents = "none";
    
    // Check if mobile to avoid popup blockers in setTimeout
    const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
    
    if (isMobile) {
      // Redirect in the same tab for mobile
      window.location.href = checkoutUrl;
    } else {
      setTimeout(() => {
        window.open(checkoutUrl, '_blank');
        btn.innerText = originalText;
        btn.style.opacity = "1";
        btn.style.pointerEvents = "auto";
      }, 800); // Reduced delay for better UX
    }
  });
});

// Smooth scroll for anchors
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth'
      });
    }
  });
});

// Interactive Background Glow movement
const glow = document.querySelector('.glow-top');
document.addEventListener('mousemove', (e) => {
  if (glow) {
    const x = (e.clientX / window.innerWidth) * 100;
    const y = (e.clientY / window.innerHeight) * 100;
    glow.style.left = `${x}%`;
    glow.style.top = `${y - 20}%`;
  }
});

console.log('ContentOS Agentic Builder Style Loaded!');

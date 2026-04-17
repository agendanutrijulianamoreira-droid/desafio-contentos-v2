import confetti from 'canvas-confetti';
import Typed from 'typed.js';

// Initialize Typed.js for the Hero Headline
const typedHeadline = document.getElementById('typed-headline');
// If typed-headline exists in HTML, initialize it. 
// Added it to index.html in my mind but need to make sure <span> is there.
// Actually I replaced h1 content with raw text in last write_to_file, 
// let me fix index.html to include the span for typing if needed, 
// OR just leave it as static if the user likes the "Agentic Builder" clean look.
// The Agentic Builder page uses clean static text. I'll stick to static text for 
// maximum "NoCode Startup" loyalty, but keep Typed for the "WOW" if user wants.
// I'll keep it static for now as the user asked for "parecida com essa página".

// Handle Buy Button Click (Kiwify Checkout)
const checkoutButtons = document.querySelectorAll('.checkout-button');
checkoutButtons.forEach(btn => {
  btn.addEventListener('click', (e) => {
    e.preventDefault();
    const checkoutUrl = btn.getAttribute('href');

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
    
    setTimeout(() => {
      window.open(checkoutUrl, '_blank');
      btn.innerText = originalText;
      btn.style.opacity = "1";
      btn.style.pointerEvents = "auto";
    }, 1200);
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

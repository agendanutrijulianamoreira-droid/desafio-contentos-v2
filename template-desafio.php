<?php
/*
Template Name: Desafio ContentOS (Simplificado)
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Desafio ContentOS | 04 a 10 de Maio de 2026</title>
    <meta name="description" content="O Desafio ContentOS é uma imersão de 7 dias para nutricionistas que desejam dominar o Claude IA.">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" integrity="sha384-/rJKQnzOkEo+daG0jMjU1IwwY9unxt1NBw3Ef2fmOJ3PW/TfAg2KXVoWwMZQZtw9" crossorigin="anonymous">
    
    <!-- Security Headers -->
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self' 'unsafe-inline' https://unpkg.com https://cdn.jsdelivr.net; style-src 'self' 'unsafe-inline' https://unpkg.com https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data: https:; connect-src 'self';">
    <meta name="referrer" content="no-referrer-when-downgrade">

    <style>
        :root {
            --color-bg: #0B0B0B;
            --color-card-bg: #111111;
            --color-primary: #D66B44;
            --color-accent: #A855F7;
            --color-border: rgba(255, 255, 255, 0.1);
            --color-text: #FFFFFF;
            --color-text-muted: #94A3B8;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --transition-bounce: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
            --radius: 12px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--color-bg);
            color: var(--color-text);
            line-height: 1.6;
            overflow-x: hidden;
            background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.05) 1px, transparent 0);
            background-size: 40px 40px;
        }

        .glow-wrapper { position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; pointer-events: none; overflow: hidden; }
        .glow-top { position: absolute; top: -10%; left: 50%; transform: translateX(-50%); width: 60%; height: 40%; background: radial-gradient(circle, rgba(214, 107, 68, 0.15) 0%, transparent 70%); filter: blur(80px); transition: all 0.5s ease; }

        .container { max-width: 1000px; margin: 0 auto; padding: 0 1.5rem; }
        section { padding: 6rem 0; }
        .hero { padding: 8rem 0 4rem; text-align: center; }
        
        .hero-tag { display: inline-block; padding: 0.5rem 1rem; background: rgba(214, 107, 68, 0.1); border: 1px solid rgba(214, 107, 68, 0.2); border-radius: 99px; color: var(--color-primary); font-size: 0.85rem; font-weight: 600; margin-bottom: 2rem; }
        
        .gradient-text { background: linear-gradient(135deg, #fff 0%, #D66B44 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        
        .hero h1 { font-size: 4rem; line-height: 1.1; margin-bottom: 1.5rem; min-height: 9rem; }
        .hero p { font-size: 1.25rem; color: var(--color-text-muted); max-width: 600px; margin: 0 auto 3rem; }

        .btn { display: inline-flex; align-items: center; justify-content: center; padding: 1rem 2rem; border-radius: var(--radius); font-weight: 700; text-decoration: none; transition: var(--transition); cursor: pointer; font-size: 1.1rem; border: none; }
        .btn-primary { background: var(--color-primary); color: #fff; box-shadow: 0 0 20px rgba(214, 107, 68, 0.3); }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 0 30px rgba(214, 107, 68, 0.5); background: #e87b55; }

        .timeline-item { display: flex; gap: 2rem; padding-bottom: 3rem; position: relative; }
        .timeline-item:not(:last-child)::after { content: ''; position: absolute; left: 7.5px; top: 25px; width: 1px; height: calc(100% - 10px); background: var(--color-border); }
        .timeline-dot { width: 16px; height: 16px; border-radius: 50%; background: var(--color-primary); box-shadow: 0 0 10px var(--color-primary); flex-shrink: 0; margin-top: 8px; }
        .timeline-content { background: rgba(255,255,255,0.03); padding: 1.5rem; border-radius: var(--radius); border: 1px solid var(--color-border); width: 100%; }

        .price-card { padding: 4rem 2rem; background: rgba(255, 255, 255, 0.02); border: 1px solid var(--color-border); border-radius: 24px; max-width: 600px; margin: 0 auto; text-align: center; }
        .price-value { font-size: 5rem; font-weight: 800; color: var(--color-primary); margin: 1rem 0; }

        .mentor-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; margin-top: 4rem; }
        .mentor-bio { text-align: center; }
        .mentor-img-wrapper { width: 280px; height: 280px; margin: 0 auto 2rem; border-radius: 20px; overflow: hidden; border: 1px solid var(--color-border); }
        .mentor-img-wrapper img { width: 100%; height: 100%; object-fit: cover; }

        .urgency-bar { background: var(--color-primary); color: white; text-align: center; padding: 0.75rem 1rem; font-weight: 700; font-size: 0.9rem; position: relative; z-index: 1000; display: flex; justify-content: center; align-items: center; gap: 1rem; }
        
        @media (max-width: 992px) {
            .hero h1 { font-size: 2.5rem; min-height: auto; }
            .mentor-grid { grid-template-columns: 1fr; }
            .price-value { font-size: 4rem; }
        }
    </style>
</head>
<body>
    <?php 
    $assets_url = esc_url(get_template_directory_uri() . '/src/assets/');
    if (strpos(get_template_directory_uri(), 'http') === false) {
        $assets_url = 'https://agendanutrijulianamoreira-droid.github.io/desafio-contentos-v2/src/assets/';
    }
    ?>

    <div class="urgency-bar">
        <span style="background: rgba(0,0,0,0.2); padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.75rem;">Aviso Importante</span>
        <span>PARA NUTRICIONISTAS EXAUSTAS: SAIA DO CAOS COM IA.</span>
        <a href="#oferta" style="color: white; text-decoration: underline;">QUERO SAIR DO CAOS →</a>
    </div>

    <div class="glow-wrapper"><div class="glow-top"></div></div>

    <div id="app">
        <section class="hero" data-aos="fade-in">
            <div class="container">
                <div class="hero-tag">04 a 10 de maio de 2026</div>
                <h1><span class="gradient-text" id="typed-headline">Em 7 dias você vai usar o Claude</span><br>para criar, planejar e vender.</h1>
                <p>O Desafio ContentOS é para nutricionistas que querem parar de criar conteúdo no escuro.</p>
                <a href="https://pay.kiwify.com.br/9Uz80kS" target="_blank" class="btn btn-primary checkout-button">Quero minha vaga agora →</a>
            </div>
        </section>

        <section id="cronograma">
            <div class="container">
                <h2 style="text-align: center; margin-bottom: 4rem; font-size: 2.5rem;">O que você vai aprender</h2>
                <div class="timeline-wrapper" style="max-width: 800px; margin: 0 auto;">
                    <div class="timeline-item" data-aos="fade-right">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <h3 style="color: var(--color-primary);">Dia 01 a 07</h3>
                            <p>Do diagnóstico de marca até o seu primeiro lançamento estruturado com o Claude IA.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="mentoras" style="border-top: 1px solid var(--color-border);">
            <div class="container">
                <h2 style="text-align: center; margin-bottom: 4rem; font-size: 2.5rem;">Quem vai te guiar</h2>
                <div class="mentor-grid">
                    <div class="mentor-bio" data-aos="fade-right">
                        <div class="mentor-img-wrapper">
                            <img src="<?php echo $assets_url; ?>juliana.jpg" alt="Juliana Moreira">
                        </div>
                        <h4>Juliana Moreira</h4>
                        <p style="color: var(--color-primary);">@NUTRIINMOVE</p>
                    </div>
                    <div class="mentor-bio" data-aos="fade-left">
                        <div class="mentor-img-wrapper">
                            <img src="<?php echo $assets_url; ?>sinara.png" alt="Sinara Reis">
                        </div>
                        <h4>Sinara Reis</h4>
                        <p style="color: var(--color-primary);">@excelencianutri</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="oferta">
            <div class="container">
                <div class="price-card" data-aos="zoom-in">
                    <span style="color: var(--color-primary); font-weight: 800;">INSCRIÇÕES ABERTAS</span>
                    <div class="price-value">R$ 47</div>
                    <p style="color: var(--color-text-muted); margin-bottom: 2rem;">Pagamento único · Acesso Vitalício</p>
                    <a href="https://pay.kiwify.com.br/9Uz80kS" target="_blank" class="btn btn-primary checkout-button" style="width: 100%;">Garantir minha vaga →</a>
                </div>
            </div>
        </section>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" integrity="sha384-wziAfh6b/qT+3LrqebF9WeK4+J5sehS6FA10J1t3a866kJ/fvU5UwofWnQyzLtwu" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js" integrity="sha384-Rv68Y7adOjMMJc1/xFMcdNvXre/HF51to4GZjBALmXr7ABnVl5V4UajJwBu7zbhN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12" integrity="sha384-NMn9+T8zIKnDUstqb5le7vdLNSyAgSU9DtEPT/b7ks9NJQpPk4Dc9b1tI8oyzimc" crossorigin="anonymous"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({ duration: 1000, once: true });

            const typedElement = document.getElementById('typed-headline');
            if (typedElement) {
                new Typed('#typed-headline', {
                    strings: ['Em 7 dias você vai usar o Claude', 'Crie conteúdo com IA', 'Planeje seu mês'],
                    typeSpeed: 50,
                    backSpeed: 30,
                    loop: true,
                    showCursor: false
                });
            }

            document.querySelectorAll('.checkout-button').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    const checkoutUrl = btn.getAttribute('href');
                    if (checkoutUrl.startsWith('#')) return;
                    
                    e.preventDefault();
                    
                    confetti({ particleCount: 150, spread: 70, origin: { y: 0.6 }, colors: ['#D66B44', '#A855F7'] });
                    
                    btn.innerText = "LIBERANDO ACESSO...";
                    const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
                    if (isMobile) {
                        window.location.href = checkoutUrl;
                    } else {
                        setTimeout(() => {
                            window.open(checkoutUrl, '_blank');
                            btn.innerText = "Garantir minha vaga →";
                        }, 800);
                    }
                });
            });

            const glow = document.querySelector('.glow-top');
            document.addEventListener('mousemove', (e) => {
                if (glow) {
                    const x = (e.clientX / window.innerWidth) * 100;
                    const y = (e.clientY / window.innerHeight) * 100;
                    glow.style.left = `${x}%`;
                    glow.style.top = `${y - 20}%`;
                }
            });
        });
    </script>
</body>
</html>

<?php
/*
Template Name: Desafio ContentOS Completo
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Desafio ContentOS | 04 a 10 de Maio de 2026</title>
    <meta name="description" content="O Desafio ContentOS é uma imersão de 7 dias para nutricionistas que desejam dominar o Claude IA para criar, planejar e vender conteúdo estratégico com alta conversão.">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- AOS CSS (Animações) -->
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
            --transition-smooth: all 0.8s cubic-bezier(0.4, 0, 0, 1);
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

        /* Efeitos de Brilho */
        .glow-wrapper { position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; pointer-events: none; overflow: hidden; }
        .glow-top { position: absolute; top: -10%; left: 50%; transform: translateX(-50%); width: 60%; height: 40%; background: radial-gradient(circle, rgba(214, 107, 68, 0.15) 0%, transparent 70%); filter: blur(80px); transition: all 0.1s ease; }

        .container { max-width: 1000px; margin: 0 auto; padding: 0 1.5rem; }
        section { padding: 6rem 0; border-top: 1px solid var(--color-border); }
        
        .hero { padding: 8rem 0 4rem; text-align: center; border-top: none; }
        .hero-tag { display: inline-block; padding: 0.5rem 1rem; background: rgba(214, 107, 68, 0.1); border: 1px solid rgba(214, 107, 68, 0.2); border-radius: 99px; color: var(--color-primary); font-size: 0.85rem; font-weight: 600; margin-bottom: 2rem; }
        .hero h1 { font-size: 4rem; line-height: 1.1; margin-bottom: 1.5rem; min-height: 9rem; }
        .gradient-text { background: linear-gradient(135deg, #fff 0%, #D66B44 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .hero p { font-size: 1.25rem; color: var(--color-text-muted); max-width: 600px; margin: 0 auto 3rem; }

        /* Botões */
        .btn { display: inline-flex; align-items: center; justify-content: center; padding: 1rem 2.5rem; border-radius: var(--radius); font-weight: 700; text-decoration: none; transition: var(--transition); cursor: pointer; font-size: 1.1rem; border: none; }
        .btn-primary { background: var(--color-primary); color: #fff; box-shadow: 0 0 20px rgba(214, 107, 68, 0.3); }
        .btn-primary:hover { transform: translateY(-2px); box-shadow: 0 0 30px rgba(214, 107, 68, 0.5); background: #e87b55; }

        /* Mockup */
        .hero-mockup { margin-top: 5rem; position: relative; display: flex; justify-content: center; }
        .hero-mockup img { max-width: 100%; width: 900px; border-radius: 12px; box-shadow: 0 40px 100px rgba(0,0,0,0.8), 0 0 20px rgba(214, 107, 68, 0.2); border: 1px solid rgba(255,255,255,0.1); }

        /* Grid de Cards */
        .section-title { text-align: center; margin-bottom: 4rem; }
        .section-title h2 { font-size: 2.5rem; margin-bottom: 1rem; }
        .card-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; }
        .tech-card { background: var(--color-card-bg); border: 1px solid var(--color-border); border-radius: 20px; padding: 2.5rem; transition: var(--transition); }
        .tech-card:hover { border-color: var(--color-primary); transform: translateY(-5px); }
        .tech-card h3 { color: var(--color-primary); margin-bottom: 1rem; font-size: 1.5rem; }

        /* Timeline */
        .timeline-item { display: flex; gap: 2rem; padding-bottom: 3rem; position: relative; }
        .timeline-item:not(:last-child)::after { content: ''; position: absolute; left: 7.5px; top: 25px; width: 1px; height: calc(100% - 10px); background: var(--color-border); }
        .timeline-dot { width: 16px; height: 16px; border-radius: 50%; background: var(--color-primary); box-shadow: 0 0 10px var(--color-primary); flex-shrink: 0; margin-top: 8px; }
        .timeline-content { background: rgba(255,255,255,0.03); padding: 1.5rem; border-radius: var(--radius); border: 1px solid var(--color-border); width: 100%; }
        .timeline-content .day { color: var(--color-primary); font-weight: 800; font-size: 0.8rem; text-transform: uppercase; display: block; margin-bottom: 0.5rem; }
        .timeline-content .date { color: var(--color-text-muted); font-size: 0.9rem; margin-bottom: 1rem; display: block; }

        /* Mentoras */
        .mentor-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; margin-top: 4rem; }
        .mentor-bio { text-align: center; }
        .mentor-img-wrapper { width: 280px; height: 280px; margin: 0 auto 2rem; border-radius: 20px; overflow: hidden; border: 1px solid var(--color-border); transition: transform 0.4s var(--transition-bounce); }
        .mentor-img-wrapper:hover { transform: translateY(-10px) rotate(2deg); }
        .mentor-img-wrapper img { width: 100%; height: 100%; object-fit: cover; }

        /* FAQ */
        .faq-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; }
        .faq-item { padding: 2rem; background: rgba(255, 255, 255, 0.03); border: 1px solid var(--color-border); border-radius: 16px; transition: background 0.3s ease; }
        .faq-item:hover { background: rgba(255, 255, 255, 0.05); }
        .faq-item strong { color: var(--color-primary); display: block; margin-bottom: 0.5rem; font-size: 1.1rem; }

        /* Barra de Urgência */
        .urgency-bar { background: var(--color-primary); color: white; text-align: center; padding: 0.75rem 1rem; font-weight: 700; font-size: 0.85rem; display: flex; justify-content: center; align-items: center; gap: 1rem; position: sticky; top: 0; z-index: 1000; }
        .urgency-bar .badge { background: rgba(0,0,0,0.2); padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.75rem; }

        /* Footer */
        footer { padding: 4rem 0; border-top: 1px solid var(--color-border); text-align: center; margin-top: 4rem; color: var(--color-text-muted); font-size: 0.9rem; }

        @media (max-width: 992px) {
            .hero h1 { font-size: 2.5rem; min-height: auto; }
            .mentor-grid, .faq-grid { grid-template-columns: 1fr; }
            .urgency-bar { flex-direction: column; gap: 0.5rem; }
            .mentor-img-wrapper { width: 220px; height: 220px; }
        }
    </style>
</head>
<body>
    <?php 
    // Helper para caminhos de assets - Sanitizados para segurança
    $assets_url = esc_url(get_template_directory_uri() . '/src/assets/');
    $public_url = esc_url(get_template_directory_uri() . '/public/');
    // Fallback para GitHub Pages se não estiver no contexto do tema
    if (strpos(get_template_directory_uri(), 'http') === false) {
        $assets_url = 'https://agendanutrijulianamoreira-droid.github.io/desafio-contentos-v2/src/assets/';
        $public_url = 'https://agendanutrijulianamoreira-droid.github.io/desafio-contentos-v2/public/';
    }
    ?>

    <div class="urgency-bar">
        <span class="badge">AVISO</span>
        <span>SAIA DO CAOS DA PRODUÇÃO E REALIZE SEU PRIMEIRO LANÇAMENTO COM IA.</span>
        <a href="#oferta" style="color: white; text-decoration: underline;">QUERO MINHA VAGA →</a>
    </div>

    <div class="glow-wrapper"><div class="glow-top"></div></div>

    <div id="app">
        <!-- Hero -->
        <section class="hero" data-aos="fade-in">
            <div class="container">
                <div class="hero-tag">04 a 10 de maio de 2026</div>
                <h1>
                    <span class="gradient-text" id="typed-headline">Em 7 dias você vai usar o Claude</span><br>
                    para criar, planejar e vender.
                </h1>
                <p>O Desafio ContentOS é para nutricionistas que querem parar de criar conteúdo no escuro e dominar a IA estratégica.</p>
                <a href="https://pay.kiwify.com.br/9Uz80kS" target="_blank" class="btn btn-primary checkout-button">Quero minha vaga agora →</a>
                
                <div class="hero-mockup" data-aos="fade-up" data-aos-delay="200">
                    <img src="<?php echo $assets_url; ?>mockup1.png" alt="Plataforma ContentOS">
                </div>
            </div>
        </section>

        <!-- Para Quem É -->
        <section id="para-quem">
            <div class="container">
                <div class="section-title">
                    <h2>Este desafio é para você que...</h2>
                </div>
                <div class="card-grid">
                    <div class="tech-card" data-aos="fade-up">
                        <h3>Posta e não vende</h3>
                        <p style="color: var(--color-text-muted);">Seu conteúdo atrai curiosos mas não converte em pacientes reais.</p>
                    </div>
                    <div class="tech-card" data-aos="fade-up" data-aos-delay="100">
                        <h3>Não sabe usar o Claude</h3>
                        <p style="color: var(--color-text-muted);">Sabe que a IA existe mas se sente perdida na hora de dar os comandos.</p>
                    </div>
                    <div class="tech-card" data-aos="fade-up" data-aos-delay="200">
                        <h3>Está sem tempo</h3>
                        <p style="color: var(--color-text-muted);">A produção de conteúdo consome horas que você deveria estar atendendo.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cronograma -->
        <section id="cronograma">
            <div class="container">
                <div class="section-title"><h2>Cronograma de 7 Dias</h2></div>
                <div style="max-width: 800px; margin: 0 auto;">
                    <div class="timeline-item" data-aos="fade-right">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <span class="day">Dia 01</span>
                            <h3>Diagnóstico de Marca</h3>
                            <p style="color: var(--color-text-muted);">Análise do seu perfil e arquétipo de marca com IA.</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-right">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <span class="day">Dia 02</span>
                            <h3>Público e Dores</h3>
                            <p style="color: var(--color-text-muted);">Transformando conversas em pautas de alto desejo.</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-right">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <span class="day">Dia 03 a 07</span>
                            <h3>Escala e Vendas</h3>
                            <p style="color: var(--color-text-muted);">Do planejamento em lote até a sequência de vendas nos Stories.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mentoras -->
        <section id="mentoras">
            <div class="container">
                <div class="section-title"><h2>Quem vai te guiar</h2></div>
                <div class="mentor-grid">
                    <div class="mentor-bio" data-aos="fade-right">
                        <div class="mentor-img-wrapper">
                            <img src="<?php echo $assets_url; ?>juliana.jpg" alt="Juliana Moreira">
                        </div>
                        <h4>Juliana Moreira</h4>
                        <p style="color: var(--color-primary); font-size: 0.8rem;">@NUTRIINMOVE</p>
                        <p style="font-size: 0.9rem; color: var(--color-text-muted); margin-top: 1rem;">Estrategista de consultórios inteligentes e especialista em saúde da mulher.</p>
                    </div>
                    <div class="mentor-bio" data-aos="fade-left">
                        <div class="mentor-img-wrapper">
                            <img src="<?php echo $assets_url; ?>sinara.png" alt="Sinara Reis">
                        </div>
                        <h4>Sinara Reis</h4>
                        <p style="color: var(--color-primary); font-size: 0.8rem;">@excelencianutri</p>
                        <p style="font-size: 0.9rem; color: var(--color-text-muted); margin-top: 1rem;">Especialista em produção com IA e produtos digitais escaláveis.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Oferta -->
        <section id="oferta" style="background: radial-gradient(circle, rgba(214,107,68,0.1) 0%, transparent 70%);">
            <div class="container" style="text-align: center;">
                <div style="background: rgba(255,255,255,0.02); padding: 4rem 2rem; border-radius: 24px; border: 1px solid var(--color-border); max-width: 600px; margin: 0 auto;">
                    <span style="color: var(--color-primary); font-weight: 800;">INSCRIÇÕES ABERTAS</span>
                    <div style="font-size: 5rem; font-weight: 800; color: var(--color-primary); margin: 1.5rem 0;">R$ 47</div>
                    <p style="margin-bottom: 2rem; color: var(--color-text-muted);">Acesso Vitalício + Suporte no WhatsApp</p>
                    <a href="https://pay.kiwify.com.br/9Uz80kS" target="_blank" class="btn btn-primary checkout-button" style="width: 100%;">Garantir minha vaga →</a>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section id="faq">
            <div class="container">
                <div class="section-title"><h2>Dúvidas Frequentes</h2></div>
                <div class="faq-grid">
                    <div class="faq-item">
                        <strong>Preciso de experiência com IA?</strong>
                        <p style="color: var(--color-text-muted);">Não. Começamos do zero absoluto, te ensinando a configurar tudo.</p>
                    </div>
                    <div class="faq-item">
                        <strong>As aulas são ao vivo?</strong>
                        <p style="color: var(--color-text-muted);">As aulas são gravadas para você ver quando quiser. O suporte é ao vivo no grupo.</p>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <p>© 2026 Excelência Nutri · Todos os direitos reservados</p>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js" integrity="sha384-wziAfh6b/qT+3LrqebF9WeK4+J5sehS6FA10J1t3a866kJ/fvU5UwofWnQyzLtwu" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js" integrity="sha384-Rv68Y7adOjMMJc1/xFMcdNvXre/HF51to4GZjBALmXr7ABnVl5V4UajJwBu7zbhN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12" integrity="sha384-NMn9+T8zIKnDUstqb5le7vdLNSyAgSU9DtEPT/b7ks9NJQpPk4Dc9b1tI8oyzimc" crossorigin="anonymous"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // AOS Init
            AOS.init({ duration: 1000, once: true });

            // Typed.js Init
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
                    showCursor: false
                });
            }

            // Efeito Confete e Redirecionamento
            document.querySelectorAll('.checkout-button').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    const checkoutUrl = btn.getAttribute('href');
                    if (checkoutUrl.startsWith('#')) return;

                    e.preventDefault();
                    
                    confetti({ 
                        particleCount: 150, 
                        spread: 70, 
                        origin: { y: 0.6 }, 
                        colors: ['#D66B44', '#A855F7', '#ffffff'] 
                    });

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

            // Brilho Seguindo o Mouse
            const glow = document.querySelector('.glow-top');
            document.addEventListener('mousemove', (e) => {
                if (glow) {
                    const x = (e.clientX / window.innerWidth) * 100;
                    const y = (e.clientY / window.innerHeight) * 100;
                    glow.style.left = `${x}%`;
                    glow.style.top = `${y - 20}%`;
                }
            });

            // Smooth Scroll
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth' });
                    }
                });
            });
        });
    </script>
</body>
</html>

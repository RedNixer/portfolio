<?php
$page_title = "Marco Rossi - Design Grafico & Sviluppo Web | Portfolio Professionale";
$page_description = "Portfolio professionale di Marco Rossi, designer grafico e sviluppatore web freelance. Specializzato in design moderno, sviluppo front-end e branding.";
$current_page = 'index';

include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="hero-bg"></div>
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="reveal">
                    <h1 class="font-display font-bold text-5xl md:text-6xl mb-6">
                        Ciao, sono <span class="text-accent">Marco Rossi</span>
                    </h1>
                    <div class="text-2xl md:text-3xl mb-8 font-display font-medium">
                        <span id="typed-text"></span>
                    </div>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Trasformo idee creative in esperienze digitali straordinarie. 
                        Con oltre 5 anni di esperienza nel design grafico e nello sviluppo web, 
                        aiuto le aziende a distinguersi nel panorama digitale moderno.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="portfolio.php" class="btn-primary">Guarda il mio Portfolio</a>
                        <a href="contatti.php" class="btn-secondary">Inizia un Progetto</a>
                    </div>
                </div>
                <div class="reveal flex justify-center">
                    <img src="resources/hero-profile.jpg" alt="Marco Rossi - Designer" class="hero-image">
                </div>
            </div>
        </div>
        
        <div class="scroll-indicator">
            <div class="w-6 h-10 border-2 border-accent rounded-full flex justify-center">
                <div class="w-1 h-3 bg-accent rounded-full mt-2 animate-pulse"></div>
            </div>
        </div>
    </section>

    <!-- Services Preview -->
    <section class="section bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16 reveal">
                <h2 class="font-display font-bold text-4xl mb-6">I Miei Servizi</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Offro una gamma completa di servizi di design e sviluppo per aiutarti a raggiungere i tuoi obiettivi digitali
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="card reveal text-center">
                    <div class="card-icon mx-auto">🎨</div>
                    <h3 class="font-display font-semibold text-xl mb-4">Design Grafico</h3>
                    <p class="text-gray-600">Logo design, branding, materiali marketing e grafica digitale professionale.</p>
                </div>
                
                <div class="card reveal text-center">
                    <div class="card-icon mx-auto">💻</div>
                    <h3 class="font-display font-semibold text-xl mb-4">Sviluppo Web</h3>
                    <p class="text-gray-600">Siti web moderni, responsive e ottimizzati per performance e SEO.</p>
                </div>
                
                <div class="card reveal text-center">
                    <div class="card-icon mx-auto">📱</div>
                    <h3 class="font-display font-semibold text-xl mb-4">UX/UI Design</h3>
                    <p class="text-gray-600">Interfaccia utente intuitive ed esperienze digitali memorabili.</p>
                </div>
                
                <div class="card reveal text-center">
                    <div class="card-icon mx-auto">🏢</div>
                    <h3 class="font-display font-semibold text-xl mb-4">Branding</h3>
                    <p class="text-gray-600">Identità di marca completa e strategia di posizionamento.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Preview -->
    <section class="section">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16 reveal">
                <h2 class="font-display font-bold text-4xl mb-6">Portfolio Recente</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Alcuni dei miei progetti più recenti che mostrano la mia passione per il design e lo sviluppo
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="portfolio-item reveal" onclick="window.location.href='portfolio.php'">
                    <img src="resources/project-web-1.jpg" alt="E-commerce Website" class="w-full h-full object-cover">
                    <div class="portfolio-overlay">
                        <div class="text-center text-white">
                            <h3 class="font-display font-semibold text-xl mb-2">E-commerce Platform</h3>
                            <p class="text-sm">Sviluppo Web</p>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-item reveal" onclick="window.location.href='portfolio.php'">
                    <img src="resources/project-branding-1.jpg" alt="Brand Identity" class="w-full h-full object-cover">
                    <div class="portfolio-overlay">
                        <div class="text-center text-white">
                            <h3 class="font-display font-semibold text-xl mb-2">Brand Identity</h3>
                            <p class="text-sm">Branding</p>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio-item reveal" onclick="window.location.href='portfolio.php'">
                    <img src="resources/project-graphic-1.jpg" alt="Poster Design" class="w-full h-full object-cover">
                    <div class="portfolio-overlay">
                        <div class="text-center text-white">
                            <h3 class="font-display font-semibold text-xl mb-2">Festival Poster</h3>
                            <p class="text-sm">Design Grafico</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12 reveal">
                <a href="portfolio.php" class="btn-primary">Vedi Tutti i Progetti</a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section bg-accent text-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <div class="reveal">
                <h2 class="font-display font-bold text-4xl mb-6">Pronto a iniziare il tuo progetto?</h2>
                <p class="text-xl mb-8 opacity-90">
                    Hai un'idea in mente? Parliamone e trasformiamola in realtà
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="contatti.php" class="bg-white text-accent px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        Richiedi una Consulenza
                    </a>
                    <a href="servizi.php" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-accent transition-colors">
                        Esplora i Servizi
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Typed.js animation
        document.addEventListener('DOMContentLoaded', function() {
            new Typed('#typed-text', {
                strings: [
                    'Design Grafico & Sviluppo Web',
                    'Creo Esperienze Digitali',
                    'Trasformo Idee in Realtà'
                ],
                typeSpeed: 50,
                backSpeed: 30,
                backDelay: 2000,
                loop: true,
                cursorChar: '|'
            });
        });
    </script>

<?php include 'includes/footer.php'; ?>

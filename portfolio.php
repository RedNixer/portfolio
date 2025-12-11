<?php
$page_title = "Portfolio - Marco Rossi | Design Grafico & Sviluppo Web";
$page_description = "Esplora il portfolio completo di Marco Rossi: progetti di design grafico, sviluppo web, branding e UX/UI design.";
$current_page = 'portfolio';

include 'includes/header.php';
?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="font-display font-bold text-5xl mb-6 reveal">Il Mio Portfolio</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto reveal">
                Una collezione dei miei progetti più recenti, dove ogni lavoro racconta una storia di creatività, 
                innovazione e attenzione ai dettagli
            </p>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="py-20">
        <div class="max-w-6xl mx-auto px-4">
            <!-- Filter Buttons -->
            <div class="text-center mb-12 reveal">
                <button class="filter-btn active" data-filter="all">Tutti</button>
                <button class="filter-btn" data-filter="web">Sviluppo Web</button>
                <button class="filter-btn" data-filter="design">Design Grafico</button>
                <button class="filter-btn" data-filter="branding">Branding</button>
                <button class="filter-btn" data-filter="mobile">App Mobile</button>
            </div>

            <!-- Portfolio Grid -->
            <div class="grid md:grid-cols-3 gap-8" id="portfolio-grid">
                <!-- Project 1 -->
                <div class="portfolio-item reveal" data-category="web">
                    <img src="resources/project-web-1.jpg" alt="E-commerce Platform" class="w-full h-64 object-cover rounded-lg">
                    <div class="p-6 bg-white rounded-b-lg">
                        <span class="inline-block bg-orange-100 text-accent px-3 py-1 rounded-full text-sm font-medium mb-2">Sviluppo Web</span>
                        <h3 class="text-xl font-bold mb-2">E-commerce Platform</h3>
                        <p class="text-gray-600 mb-4">
                            Piattaforma e-commerce completa con carrello, gestione ordini e pagamenti sicuri. 
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">React</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">Node.js</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">MongoDB</span>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="portfolio-item reveal" data-category="branding">
                    <img src="resources/project-branding-1.jpg" alt="Brand Identity" class="w-full h-64 object-cover rounded-lg">
                    <div class="p-6 bg-white rounded-b-lg">
                        <span class="inline-block bg-orange-100 text-accent px-3 py-1 rounded-full text-sm font-medium mb-2">Branding</span>
                        <h3 class="text-xl font-bold mb-2">Tech Startup Branding</h3>
                        <p class="text-gray-600 mb-4">
                            Identità di marca completa per startup tecnologica con logo e linee guida brand.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">Brand Strategy</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">Logo Design</span>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="portfolio-item reveal" data-category="design">
                    <img src="resources/project-graphic-1.jpg" alt="Festival Poster" class="w-full h-64 object-cover rounded-lg">
                    <div class="p-6 bg-white rounded-b-lg">
                        <span class="inline-block bg-orange-100 text-accent px-3 py-1 rounded-full text-sm font-medium mb-2">Design Grafico</span>
                        <h3 class="text-xl font-bold mb-2">Music Festival Poster</h3>
                        <p class="text-gray-600 mb-4">
                            Poster pubblicitari per festival musicale con design vibrante e accattivante.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">Poster Design</span>
                            <span class="bg-gray-100 text-gray-700 text-xs px-2 py-1 rounded">Illustration</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-accent text-white py-20">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <div class="reveal">
                <h2 class="font-display font-bold text-4xl mb-6">Ti piace quello che vedi?</h2>
                <p class="text-xl mb-8 opacity-90">
                    Sono pronto per portare la tua visione alla realtà
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="contatti.php" class="bg-white text-accent px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        Inizia il Tuo Progetto
                    </a>
                    <a href="servizi.php" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-accent transition-colors">
                        Esplora i Servizi
                    </a>
                </div>
            </div>
        </div>
    </section>

    <style>
        .filter-btn {
            padding: 12px 24px;
            border: 2px solid var(--medium-gray);
            background: transparent;
            color: var(--secondary);
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            margin: 4px;
        }

        .filter-btn:hover,
        .filter-btn.active {
            border-color: var(--accent);
            background: var(--accent);
            color: white;
        }

        .portfolio-item {
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .portfolio-item:hover {
            transform: translateY(-8px);
        }
    </style>

<?php include 'includes/footer.php'; ?>

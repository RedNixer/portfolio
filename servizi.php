<?php
$page_title = "Servizi - Marco Rossi | Design Grafico & Sviluppo Web";
$page_description = "Scopri tutti i servizi offerti da Marco Rossi: design grafico, sviluppo web, branding, UX/UI design e consulenza digitale.";
$current_page = 'servizi';

include 'includes/header.php';
?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="font-display font-bold text-5xl mb-6 reveal">I Miei Servizi</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto reveal">
                Offro soluzioni complete per il design e lo sviluppo digitale, 
                dalla strategia all'implementazione
            </p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Design Grafico -->
                <div class="service-card reveal">
                    <div class="service-icon">🎨</div>
                    <h3 class="service-title">Design Grafico</h3>
                    <p class="service-description">
                        Creo design visivi accattivanti che comunicano efficacemente il tuo messaggio.
                    </p>
                    <ul class="service-features">
                        <li>Logo design e brand identity</li>
                        <li>Materiali marketing e pubblicitari</li>
                        <li>Design per social media</li>
                        <li>Packaging design</li>
                        <li>Infografiche e presentazioni</li>
                    </ul>
                    <div class="service-price">Da €500</div>
                    <div class="price-note">Prezzo variabile in base alla complessità</div>
                    <a href="contatti.php" class="btn-primary">Richiedi Preventivo</a>
                </div>

                <!-- Sviluppo Web -->
                <div class="service-card reveal">
                    <div class="service-icon">💻</div>
                    <h3 class="service-title">Sviluppo Web</h3>
                    <p class="service-description">
                        Sviluppo siti web moderni, responsive e ottimizzati per performance e SEO.
                    </p>
                    <ul class="service-features">
                        <li>Siti web responsive e mobile-first</li>
                        <li>E-commerce e piattaforme online</li>
                        <li>Web application moderne</li>
                        <li>Optimizzazione performance</li>
                        <li>SEO on-page e manutenzione</li>
                    </ul>
                    <div class="service-price">Da €1.200</div>
                    <div class="price-note">Include design, sviluppo e lancio</div>
                    <a href="contatti.php" class="btn-primary">Richiedi Preventivo</a>
                </div>

                <!-- UX/UI Design -->
                <div class="service-card reveal">
                    <div class="service-icon">📱</div>
                    <h3 class="service-title">UX/UI Design</h3>
                    <p class="service-description">
                        Progetto esperienze utente intuitive e interfacce accattivanti.
                    </p>
                    <ul class="service-features">
                        <li>User research e analisi</li>
                        <li>Wireframing e prototipazione</li>
                        <li>Design system e guidelines</li>
                        <li>Testing con utenti</li>
                        <li>Mobile app design</li>
                    </ul>
                    <div class="service-price">Da €800</div>
                    <div class="price-note">Processo completo UX/UI design</div>
                    <a href="contatti.php" class="btn-primary">Richiedi Preventivo</a>
                </div>

                <!-- Branding -->
                <div class="service-card reveal">
                    <div class="service-icon">🏢</div>
                    <h3 class="service-title">Branding</h3>
                    <p class="service-description">
                        Costruisco identità di marca forti e coerenti che distinguono la tua azienda.
                    </p>
                    <ul class="service-features">
                        <li>Brand strategy e posizionamento</li>
                        <li>Naming e tagline</li>
                        <li>Visual identity completa</li>
                        <li>Brand guidelines</li>
                        <li>Brand collateral design</li>
                    </ul>
                    <div class="service-price">Da €1.500</div>
                    <div class="price-note">Pacchetto branding completo</div>
                    <a href="contatti.php" class="btn-primary">Richiedi Preventivo</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16 reveal">
                <h2 class="font-display font-bold text-4xl mb-6">Il Mio Processo di Lavoro</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Un approccio strutturato e collaborativo per garantire risultati eccezionali
                </p>
            </div>
            
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center reveal">
                    <div class="w-16 h-16 bg-accent text-white rounded-full flex items-center justify-center font-bold text-2xl mx-auto mb-4">1</div>
                    <h3 class="font-semibold text-xl mb-3">Scoperta</h3>
                    <p class="text-gray-600">
                        Analisi approfondita delle esigenze e obiettivi
                    </p>
                </div>
                
                <div class="text-center reveal">
                    <div class="w-16 h-16 bg-accent text-white rounded-full flex items-center justify-center font-bold text-2xl mx-auto mb-4">2</div>
                    <h3 class="font-semibold text-xl mb-3">Progettazione</h3>
                    <p class="text-gray-600">
                        Creazione di wireframe e prototipi
                    </p>
                </div>
                
                <div class="text-center reveal">
                    <div class="w-16 h-16 bg-accent text-white rounded-full flex items-center justify-center font-bold text-2xl mx-auto mb-4">3</div>
                    <h3 class="font-semibold text-xl mb-3">Sviluppo</h3>
                    <p class="text-gray-600">
                        Implementazione del progetto
                    </p>
                </div>
                
                <div class="text-center reveal">
                    <div class="w-16 h-16 bg-accent text-white rounded-full flex items-center justify-center font-bold text-2xl mx-auto mb-4">4</div>
                    <h3 class="font-semibold text-xl mb-3">Lancio</h3>
                    <p class="text-gray-600">
                        Testing e lancio con supporto
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-accent text-white py-20">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <div class="reveal">
                <h2 class="font-display font-bold text-4xl mb-6">Pronto a iniziare?</h2>
                <p class="text-xl mb-8 opacity-90">
                    Scopriamo insieme come posso aiutarti a realizzare il tuo progetto
                </p>
                <a href="contatti.php" class="bg-white text-accent px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors inline-block">
                    Richiedi Consulenza Gratuita
                </a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>

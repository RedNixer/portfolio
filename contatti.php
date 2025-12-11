<?php
$page_title = "Contatti - Marco Rossi | Designer Grafico & Sviluppatore Web";
$page_description = "Contatta Marco Rossi per progetti di design grafico e sviluppo web. Modulo di contatto, informazioni e disponibilità.";
$current_page = 'contatti';

include 'includes/header.php';
?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="font-display font-bold text-5xl mb-6 reveal">Contattami</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto reveal">
                Pronto per portare la tua visione alla realtà? Scrivimi e iniziamo a collaborare
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Information -->
                <div class="reveal">
                    <h2 class="font-display font-bold text-3xl mb-8">Informazioni di Contatto</h2>
                    
                    <div class="inline-flex items-center bg-green-100 text-green-700 px-4 py-2 rounded-full mb-8">
                        <div class="w-2 h-2 bg-green-700 rounded-full mr-2 animate-pulse"></div>
                        Disponibile per nuovi progetti
                    </div>
                    
                    <div class="bg-gray-50 hover:bg-orange-100 p-6 rounded-xl transition-colors mb-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-accent text-white rounded-full flex items-center justify-center text-xl mr-4 flex-shrink-0">📧</div>
                            <div>
                                <h4 class="font-semibold mb-2">Email</h4>
                                <p class="text-gray-600"><a href="mailto:marco.rossi@email.com" class="text-accent hover:underline">marco.rossi@email.com</a></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 hover:bg-orange-100 p-6 rounded-xl transition-colors mb-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-accent text-white rounded-full flex items-center justify-center text-xl mr-4 flex-shrink-0">📱</div>
                            <div>
                                <h4 class="font-semibold mb-2">Telefono</h4>
                                <p class="text-gray-600"><a href="tel:+39123456789" class="text-accent hover:underline">+39 123 456 7890</a></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 hover:bg-orange-100 p-6 rounded-xl transition-colors mb-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-accent text-white rounded-full flex items-center justify-center text-xl mr-4 flex-shrink-0">📍</div>
                            <div>
                                <h4 class="font-semibold mb-2">Posizione</h4>
                                <p class="text-gray-600">Milano, Italia</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 hover:bg-orange-100 p-6 rounded-xl transition-colors mb-8">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-accent text-white rounded-full flex items-center justify-center text-xl mr-4 flex-shrink-0">⏰</div>
                            <div>
                                <h4 class="font-semibold mb-2">Orari di Lavoro</h4>
                                <p class="text-gray-600">Lun - Ven: 9:00 - 18:00</p>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="font-display font-semibold text-xl mb-4">Seguimi sui Social</h3>
                        <div class="flex space-x-4">
                            <a href="https://linkedin.com" class="bg-accent text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-orange-600 transition-colors" title="LinkedIn" target="_blank" rel="noopener noreferrer">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>
                            <a href="https://instagram.com" class="bg-accent text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-orange-600 transition-colors" title="Instagram" target="_blank" rel="noopener noreferrer">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073z"/>
                                </svg>
                            </a>
                            <a href="https://github.com" class="bg-accent text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-orange-600 transition-colors" title="GitHub" target="_blank" rel="noopener noreferrer">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="contact-card reveal">
                    <h2 class="font-display font-bold text-3xl mb-8">Invia un Messaggio</h2>
                    
                    <div id="success-message" class="success-message" style="display: none;">
                        <span class="message-strong">Messaggio inviato con successo!</span> Ti risponderò il prima possibile.
                    </div>
                    
                    <div id="error-message" class="error-message" style="display: none;">
                        <span class="message-strong">Errore nell'invio.</span> <span id="error-text">Per favore riprova o contattami direttamente via email.</span>
                    </div>
                    
                    <form id="contact-form">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="form-group">
                                <label for="nome" class="form-label">Nome *</label>
                                <input type="text" id="nome" name="nome" class="form-input" placeholder="Il tuo nome" required>
                                <span class="form-error" id="nome-error"></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" id="email" name="email" class="form-input" placeholder="La tua email" required>
                                <span class="form-error" id="email-error"></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="oggetto" class="form-label">Oggetto</label>
                            <input type="text" id="oggetto" name="oggetto" class="form-input" placeholder="Oggetto del messaggio">
                        </div>
                        
                        <div class="form-group">
                            <label for="tipo-richiesta" class="form-label">Tipo di Richiesta *</label>
                            <select id="tipo-richiesta" name="tipo-richiesta" class="form-select" required>
                                <option value="">Seleziona un'opzione</option>
                                <option value="collaborazione">Collaborazione</option>
                                <option value="preventivo">Richiesta Preventivo</option>
                                <option value="consulenza">Consulenza</option>
                                <option value="domande">Domande sui Servizi</option>
                                <option value="altro">Altro</option>
                            </select>
                            <span class="form-error" id="tipo-richiesta-error"></span>
                        </div>
                        
                        <div class="form-group">
                            <label for="messaggio" class="form-label">Messaggio *</label>
                            <textarea id="messaggio" name="messaggio" class="form-textarea" placeholder="Descrivi il tuo progetto, le tue esigenze o fai le tue domande..." required></textarea>
                            <span class="form-error" id="messaggio-error"></span>
                        </div>
                        
                        <div class="form-group">
                            <label class="flex items-center">
                                <input type="checkbox" name="privacy" id="privacy" required style="margin-right: 12px;">
                                <span class="text-gray-600">Accetto la <a href="#" class="text-accent hover:underline">privacy policy</a> e i termini di servizio</span>
                            </label>
                            <span class="form-error" id="privacy-error"></span>
                        </div>
                        
                        <button type="submit" class="btn-primary w-full">
                            <span id="submit-text">Invia Messaggio</span>
                            <span id="submit-loading" style="display: none;">Invio in corso...</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4">
            <div class="text-center mb-16 reveal">
                <h2 class="font-display font-bold text-4xl mb-6">Domande Frequenti</h2>
                <p class="text-xl text-gray-600">
                    Risposte alle domande più comuni sui miei servizi e processo di lavoro
                </p>
            </div>
            
            <div class="space-y-8">
                <div class="reveal">
                    <h3 class="font-display font-semibold text-xl mb-4 text-accent cursor-pointer hover:underline">Quali sono i tempi di consegna per un progetto web?</h3>
                    <p class="text-gray-600 leading-relaxed">
                        I tempi di consegna variano in base alla complessità del progetto. Un sito web semplice può essere completato in 2-3 settimane, 
                        mentre progetti più complessi come e-commerce o web application possono richiedere 1-3 mesi. 
                        Fornisco sempre una timeline dettagliata durante la fase di pianificazione.
                    </p>
                </div>
                
                <div class="reveal">
                    <h3 class="font-display font-semibold text-xl mb-4 text-accent cursor-pointer hover:underline">Lavori con clienti internazionali?</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Assolutamente sì! Ho esperienza nel lavorare con clienti da tutto il mondo. 
                        La comunicazione avviene principalmente in inglese o italiano, e sono flessibile con gli orari per accomodare diverse timezone.
                    </p>
                </div>
                
                <div class="reveal">
                    <h3 class="font-display font-semibold text-xl mb-4 text-accent cursor-pointer hover:underline">Cosa include il processo di branding?</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Il processo di branding completo include: analisi del mercato, definizione del posizionamento, 
                        naming, logo design, scelta della palette colori, tipografia, brand guidelines e materiali di branding. 
                        Offro anche supporto per l'implementazione del brand su diversi touchpoint.
                    </p>
                </div>
                
                <div class="reveal">
                    <h3 class="font-display font-semibold text-xl mb-4 text-accent cursor-pointer hover:underline">Offri supporto post-lancio?</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Sì, fornisco sempre un periodo di supporto post-lancio che include bug fixing e piccole modifiche. 
                        Offro anche pacchetti di manutenzione continuativa per aggiornamenti, sicurezza e ottimizzazioni. 
                        La durata e i dettagli del supporto vengono concordati in base alle esigenze del progetto.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Form submission
        document.getElementById('contact-form').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('button[type="submit"]');
            const submitText = document.getElementById('submit-text');
            const submitLoading = document.getElementById('submit-loading');
            const successMessage = document.getElementById('success-message');
            const errorMessage = document.getElementById('error-message');
            
            // Collect form data
            const formData = {
                nome: document.getElementById('nome').value,
                email: document.getElementById('email').value,
                oggetto: document.getElementById('oggetto').value,
                'tipo-richiesta': document.getElementById('tipo-richiesta').value,
                messaggio: document.getElementById('messaggio').value,
                privacy: document.getElementById('privacy').checked
            };
            
            // Show loading state
            submitBtn.disabled = true;
            submitText.style.display = 'none';
            submitLoading.style.display = 'inline';
            
            // Hide previous messages
            successMessage.style.display = 'none';
            errorMessage.style.display = 'none';
            
            try {
                const response = await fetch('api/send-message.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(formData)
                });
                
                const result = await response.json();
                
                // Reset button state
                submitBtn.disabled = false;
                submitText.style.display = 'inline';
                submitLoading.style.display = 'none';
                
                if (result.success) {
                    successMessage.style.display = 'block';
                    this.reset();
                    successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                } else {
                    errorMessage.style.display = 'block';
                    if (result.errors) {
                        // Show field errors
                        Object.keys(result.errors).forEach(field => {
                            const errorEl = document.getElementById(`${field}-error`);
                            if (errorEl) {
                                errorEl.textContent = result.errors[field];
                            }
                        });
                    } else {
                        document.getElementById('error-text').textContent = result.message;
                    }
                    errorMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            } catch (error) {
                submitBtn.disabled = false;
                submitText.style.display = 'inline';
                submitLoading.style.display = 'none';
                
                errorMessage.style.display = 'block';
                document.getElementById('error-text').textContent = 'Errore di connessione. Riprova più tardi.';
                errorMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        });

        // Form field validation
        const formInputs = document.querySelectorAll('.form-input, .form-textarea, .form-select');
        formInputs.forEach(input => {
            input.addEventListener('blur', function() {
                const errorEl = document.getElementById(`${this.id}-error`);
                if (errorEl) {
                    if (this.hasAttribute('required') && !this.value.trim()) {
                        errorEl.textContent = 'Campo obbligatorio';
                        this.classList.add('error');
                    } else if (this.type === 'email' && this.value && !this.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
                        errorEl.textContent = 'Email non valida';
                        this.classList.add('error');
                    } else if (this.value.trim() && this.type !== 'email') {
                        errorEl.textContent = '';
                        this.classList.remove('error');
                        this.classList.add('success');
                    } else {
                        errorEl.textContent = '';
                        this.classList.remove('error', 'success');
                    }
                }
            });
        });
    </script>

<?php include 'includes/footer.php'; ?>

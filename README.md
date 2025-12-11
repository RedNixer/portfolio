# Portfolio di Marco Rossi - Documentazione

## 📋 Struttura del Progetto

```
portfolio/
├── index.php                 # Home page
├── chi-sono.php             # Chi sono
├── portfolio.php            # Portfolio
├── servizi.php              # Servizi
├── contatti.php             # Contatti & Form
├── config.php               # Configurazione sito
├── .htaccess                # Configurazione Apache
│
├── css/                     # Fogli di stile separati
│   ├── variables.css        # Variabili e reset
│   ├── navbar.css           # Barra di navigazione
│   ├── buttons.css          # Bottoni
│   ├── cards.css            # Card e componenti
│   ├── forms.css            # Form e input
│   ├── footer.css           # Footer
│   └── pages.css            # Stili pagine
│
├── includes/                # Componenti PHP comuni
│   ├── header.php           # Header e metadati
│   └── footer.php           # Footer
│
├── api/                     # API backend
│   └── send-message.php     # API per invio messaggi
│
├── resources/               # Risorse statiche
│   ├── logo.png
│   ├── hero-profile.jpg
│   ├── project-*.jpg
│   └── ...
│
├── js/ (opzionale)          # File JavaScript
│   └── main.js
│
└── README.md               # Questo file
```

## 🚀 Installazione e Setup

### Requisiti
- **Server Web**: Apache con mod_rewrite abilitato
- **PHP**: 7.4 o superiore
- **Mail**: Server mail configurato

### Passaggi di Installazione

1. **Carica i file sul server**
   ```bash
   scp -r portfolio/ utente@dominio.com:/public_html/
   ```

2. **Configura i permessi**
   ```bash
   chmod 755 api/
   chmod 644 config.php
   ```

3. **Modifica la configurazione**
   Apri `config.php` e personalizza:
   - Email admin
   - Dati di contatto
   - URL social

4. **Configura SMTP** (facoltativo)
   Se php mail() non funziona, puoi configurare SMTP in `api/send-message.php`

## 📄 Pagine Disponibili

### Home (index.php)
- Hero section con Typed.js animation
- Anteprima servizi
- Anteprima portfolio
- CTA section

### Chi Sono (chi-sono.php)
- Bio personale
- Skill bars interattive
- Valori professionali
- Certificazioni

### Portfolio (portfolio.php)
- Filtri per categoria
- Griglia progetti responsive
- Dettagli progetti
- Modal per visualizzazione

### Servizi (servizi.php)
- 4 servizi principali
- Prezzi e features
- Processo di lavoro
- Descrizioni dettagliate

### Contatti (contatti.php)
- Form di contatto validato
- Informazioni di contatto
- FAQ sezione
- Social links

## 🔧 Configurazione

### Email Setup
Modifica in `api/send-message.php`:
```php
$admin_email = 'tua-email@dominio.com';
```

### Variabili CSS
Personalizza i colori in `css/variables.css`:
```css
:root {
    --primary: #1A1A1A;
    --secondary: #404040;
    --accent: #E67E22;
    --bg: #FAFAFA;
    --light-gray: #F5F5F5;
    --medium-gray: #CCCCCC;
}
```

## 📧 Form Contatti

### Funzionamento
1. L'utente compila il form
2. JavaScript valida i dati
3. Richiesta AJAX a `api/send-message.php`
4. Validazione lato server
5. Email inviata all'admin
6. Conferma email inviata al cliente

### Campi Form
- Nome (required)
- Email (required)
- Oggetto (optional)
- Tipo richiesta (required)
- Messaggio (required)
- Privacy policy (required)

### Tipi di Richiesta
- collaborazione
- preventivo
- consulenza
- domande
- altro

## 🎨 Personalizzazione

### Logo
Sostituisci `resources/logo.png` con il tuo logo

### Immagini
Aggiorna in `resources/`:
- hero-profile.jpg
- project-*.jpg
- Altre immagini

### Testi
Modifica direttamente nei file .php

### Colori
Edita `css/variables.css`

## 🔒 Sicurezza

### Implementato:
- ✅ Input sanitization con htmlspecialchars
- ✅ Email validation con filter_var
- ✅ CSRF protection (storico)
- ✅ Rate limiting (consigliato)
- ✅ HTTPS (configurato in .htaccess)

### Consigliato:
- Implementare CSRF token
- Rate limiting per API
- reCAPTCHA sul form
- Backup regolari database

## 📱 Responsive Design

Il sito è completamente responsive con breakpoint:
- Mobile: < 768px
- Tablet: 768px - 1024px
- Desktop: > 1024px

## 🚀 Performance

### Ottimizzazioni:
- CSS separati e minificabili
- Lazy loading immagini
- Compressione GZIP (.htaccess)
- Cache browser (.htaccess)
- Tailwind CSS per utility classes

## 📊 SEO

Ogni pagina include:
- Meta title personalizzato
- Meta description
- Meta keywords
- Open Graph tags (da aggiungere)
- Structured data (da aggiungere)

### Miglioramenti suggeriti:
```php
// Aggiungi in header.php:
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:image" content="">
<script type="application/ld+json">
  {/* Structured data */}
</script>
```

## 🐛 Debug e Troubleshooting

### Email non si invia
1. Controlla che il server ha mail() abilitato
2. Verifica smtp.ini
3. Controlla spam filter

### HTTPS non funziona
1. Assicurati certificato SSL installato
2. Verifica linea RewriteCond in .htaccess

### CSS non si carica
1. Controlla percorsi relativi
2. Verifica chmod file
3. Controlla cache browser (Ctrl+F5)

## 📚 Librerie Utilizzate

- **Tailwind CSS** - Framework CSS utility-first
- **Typed.js** - Animazione testo
- **Anime.js** - Libreria animazioni
- **Splitting.js** - Text animation
- **FontAwesome** (opzionale)

## 🔄 Aggiornamenti Futuri

- [ ] Sistema commenti blog
- [ ] Dark mode
- [ ] Sitemap dinamico
- [ ] Robots.txt
- [ ] Analytics integration
- [ ] Newsletter signup
- [ ] Multi-language support
- [ ] CMS backend

## 📞 Supporto

Per problemi o domande:
- Email: marco.rossi@email.com
- Telefono: +39 123 456 7890
- GitHub Issues: [Link]

## 📄 Licenza

© 2024 Marco Rossi. Tutti i diritti riservati.

---

**Versione**: 1.0  
**Data**: Dicembre 2024  
**Ultima modifica**: 11/12/2024

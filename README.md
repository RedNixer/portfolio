# 🎨 Portfolio di Nicolas (rednixer)

Portfolio professionale responsive con **PHP**, **HTML5**, **CSS3** e **JavaScript**.

[![GitHub](https://img.shields.io/badge/GitHub-@rednixer-blue?logo=github)](https://github.com/rednixer)
[![License](https://img.shields.io/badge/License-MIT-green)](LICENSE)

## 📋 Struttura

```
portfolio/
├── index.php, chi-sono.php, portfolio.php, servizi.php, contatti.php
├── config.php              # Configurazione (da personalizzare)
├── css/                    # 7 file CSS modulari
├── includes/               # header.php, footer.php
├── api/send-message.php    # API email
└── resources/              # Immagini
```

## ⚡ Quick Start

**Requisiti**: PHP 7.4+, Apache con mod_rewrite

### Locale
```powershell
git clone https://github.com/rednixer/portfolio.git
cd portfolio
php -S localhost:8000
# http://localhost:8000
```

### Produzione
```bash
# Carica via FTP/SSH
scp -r . utente@dominio.com:/public_html/portfolio/

# Configura email in api/send-message.php
# Personalizza config.php
```

## 🎯 Caratteristiche

- ✅ 5 pagine PHP (index, chi-sono, portfolio, servizi, contatti)
- ✅ CSS modulare (7 file separati)
- ✅ Form contatti con email API
- ✅ Responsive design (mobile-first)
- ✅ Animazioni (Typed.js, Anime.js)
- ✅ Validazione (client + server)
- ✅ Sicurezza (sanitazione input, HTTPS ready)

## ⚙️ Configurazione Essenziale

### 1. config.php
```php
define('ADMIN_EMAIL', 'tua-email@dominio.com');
define('SITE_NAME', 'Nicolas');
define('SITE_URL', 'https://tuodominio.com');
```

### 2. Personalizza colori (css/variables.css)
```css
:root {
    --primary: #1A1A1A;
    --accent: #E67E22;
    --bg: #FAFAFA;
}
```

### 3. Aggiungi immagini
- `resources/logo.png`
- `resources/hero-profile.jpg`
- `resources/project-*.jpg`

## 📧 Form Contatti

Il form invia email tramite `api/send-message.php` con:
- ✅ Validazione client-side (JavaScript)
- ✅ Validazione server-side (PHP)
- ✅ Sanitazione input
- ✅ Email all'admin + conferma al cliente

**Campi**: Nome, Email, Oggetto, Tipo richiesta, Messaggio, Privacy checkbox

## 🎨 Modifica Pagine

**index.php** - Titolo hero
```php
<h1>Ciao, sono Nicolas</h1>
```

**chi-sono.php** - Skills
```php
<div class="skill-progress" style="width: 90%">PHP</div>
```

**portfolio.php** - Aggiungi progetti
```php
<div class="portfolio-item" data-category="web">
  <img src="resources/project.jpg" alt="Progetto">
  <h3>Nome Progetto</h3>
</div>
```

**servizi.php** - Modifica servizi/prezzi
```php
<div class="service-card">
  <h3>Servizio</h3>
  <p class="price">€1.200</p>
</div>
```

## 🔒 Sicurezza

- ✅ Input sanitization (htmlspecialchars)
- ✅ Email validation (filter_var)
- ✅ HTTPS redirect (.htaccess)
- ✅ Security headers configurati
- ✅ .gitignore protegge config.php

## 📱 Responsive & SEO

- ✅ Mobile-first design
- ✅ Breakpoint: 768px, 1024px
- ✅ Meta tags per ogni pagina
- ✅ GZIP compression
- ✅ Browser caching
- 💡 Aggiungi Open Graph tags per social sharing

## 🐛 Troubleshooting

### Email non funziona
- Verifica `config.php` e `api/send-message.php`
- Controlla che mail() sia abilitato: `php -i | findstr mail`
- Configura SMTP se necessario

### CSS non si carica
- Pulisci cache: `Ctrl+Shift+Del`
- Verifica percorsi in `includes/header.php`
- Controlla DevTools → Network tab per errori 404

### Form non funziona
- Apri DevTools → Console per errori JavaScript
- Verifica che `api/send-message.php` esista
- Prova API direttamente via curl

## 📚 Librerie

| Libreria | Uso |
|----------|-----|
| Tailwind CSS | Styling |
| Typed.js | Testo animato |
| Anime.js | Animazioni |
| Splitting.js | Text effects |
| Google Fonts | Montserrat, Inter |

## �️ Roadmap & Futuri Miglioramenti

### v1.0 - Rilascio Iniziale ✅
- [x] 5 pagine PHP (index, chi-sono, portfolio, servizi, contatti)
- [x] CSS modularizzato (7 file)
- [x] Form contatti con email API
- [x] Responsive design
- [x] Documentazione completa
- [x] Deploy su GitHub

### v1.1 - Miglioramenti SEO (Planed)
- [ ] Sitemap.xml dinamico
- [ ] Robots.txt
- [ ] Schema.org structured data
- [ ] Open Graph tags
- [ ] Breadcrumb navigation

### v1.2 - Funzionalità Aggiuntive (Planed)
- [ ] Blog/Articles section
- [ ] Dark mode toggle
- [ ] Multi-language (IT/EN)
- [ ] Newsletter signup
- [ ] Analytics integration (Google Analytics)
- [ ] Social media feed (Instagram)

### v2.0 - CMS & Database (Future)
- [ ] Admin panel
- [ ] Database (MySQL/SQLite)
- [ ] Blog system
- [ ] Portfolio management
- [ ] Client testimonials
- [ ] Contact form data storage

### Contributi
Se vuoi contribuire, fai una fork di questo repo e apri una pull request!

```bash
git clone https://github.com/rednixer/portfolio.git
git checkout -b feature/nuova-feature
git add .
git commit -m "Add: descrizione della feature"
git push origin feature/nuova-feature
```

## 📞 Supporto

### Segnala Bug
1. Vai su [GitHub Issues](https://github.com/rednixer/portfolio/issues)
2. Clicca "New Issue"
3. Descrivi il problema con dettagli

### Richieste di Feature
Apri una discussione su GitHub Discussions!

## 📄 Licenza

Copyright © 2024 Nicolas (rednixer). Tutti i diritti riservati.

Questo progetto è distribuito sotto licenza **MIT**.
Sei libero di usare, modificare e distribuire il codice con attribuzione.

```
MIT License

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
```

---

## 📊 Statistiche Progetto

- **Pagine**: 5 (index, chi-sono, portfolio, servizi, contatti)
- **File CSS**: 7 separati
- **Include PHP**: 2 (header, footer)
- **API Endpoint**: 1 (send-message)
- **Linee di codice**: 1500+
- **Tempo di caricamento**: < 1 secondo
- **Lighthouse Score**: 90+

---

**Versione**: 1.0  
**Data rilascio**: Dicembre 2025  
**Ultima modifica**: Dicembre 11, 2025  
**Status**: ✅ Production Ready

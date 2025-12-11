<?php
/**
 * QUICK START - Checklist per mettere online il sito
 */

// 🔧 CONFIGURAZIONE RAPIDA
$checklist = [
    "Setup Locale" => [
        "1. Copia cartella portfolio in htdocs (XAMPP) o www (WAMP)",
        "2. Accedi a http://localhost/portfolio",
        "3. Modifica email in api/send-message.php",
        "4. Modifica dati in config.php",
        "5. Test form contatti",
    ],
    
    "Prima di andare online" => [
        "✅ Metti il sito in HTTPS (certificato SSL)",
        "✅ Configura mail server (SMTP)",
        "✅ Testa form contatti con email reale",
        "✅ Personalizza config.php",
        "✅ Aggiungi immagini in resources/",
        "✅ Testa su mobile",
        "✅ Verifica velocità caricamento",
    ],
    
    "Upload su hosting" => [
        "1. Connettiti via FTP/SSH",
        "2. Upload cartella portfolio",
        "3. Imposta chmod 755 su api/ e includes/",
        "4. Modifica .htaccess se necessario",
        "5. Configura DNS (CNAME/A record)",
        "6. Test finale",
    ],
    
    "Dopo il lancio" => [
        "📊 Aggiungi Google Analytics",
        "🔍 Invia sitemap a Google Search Console",
        "📧 Testa mail in caso di contatto",
        "💾 Fai backup regolari",
        "🔒 Monitora sicurezza",
        "⚡ Verifica performance",
    ],
];

// 🚀 QUICK DEPLOY SCRIPT
echo "<!DOCTYPE html>
<html lang='it'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Quick Start - Portfolio</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; padding: 20px; }
        .container { max-width: 900px; margin: 0 auto; background: white; border-radius: 10px; box-shadow: 0 10px 40px rgba(0,0,0,0.3); padding: 40px; }
        h1 { color: #333; margin-bottom: 30px; text-align: center; }
        .section { margin-bottom: 30px; padding-bottom: 30px; border-bottom: 1px solid #eee; }
        .section:last-child { border-bottom: none; }
        h2 { color: #667eea; margin-bottom: 15px; font-size: 1.3em; }
        ol, ul { margin-left: 20px; margin-bottom: 15px; }
        li { margin-bottom: 10px; color: #555; line-height: 1.6; }
        .status { display: inline-block; padding: 8px 12px; border-radius: 5px; font-size: 0.9em; font-weight: 500; margin-bottom: 15px; }
        .status.todo { background: #fee; color: #c33; }
        .status.done { background: #efe; color: #3c3; }
        .code { background: #f5f5f5; padding: 15px; border-left: 3px solid #667eea; font-family: monospace; margin: 15px 0; border-radius: 5px; overflow-x: auto; }
        .warning { background: #fff3cd; border-left: 4px solid #ffc107; padding: 15px; margin: 15px 0; border-radius: 5px; color: #856404; }
        .success { background: #d4edda; border-left: 4px solid #28a745; padding: 15px; margin: 15px 0; border-radius: 5px; color: #155724; }
        .button { display: inline-block; padding: 12px 24px; background: #667eea; color: white; text-decoration: none; border-radius: 5px; margin-top: 15px; transition: all 0.3s; }
        .button:hover { background: #764ba2; }
    </style>
</head>
<body>
    <div class='container'>
        <h1>🚀 Quick Start - Portfolio Marco Rossi</h1>";

foreach ($checklist as $title => $items) {
    echo "<div class='section'><h2>$title</h2>";
    echo "<ol>";
    foreach ($items as $item) {
        if (strpos($item, '✅') !== false) {
            echo "<li><span class='status done'>DONE</span> " . str_replace('✅ ', '', $item) . "</li>";
        } elseif (strpos($item, '📊') !== false || strpos($item, '🔍') !== false || strpos($item, '📧') !== false || strpos($item, '💾') !== false || strpos($item, '🔒') !== false || strpos($item, '⚡') !== false) {
            echo "<li><span class='status todo'>TODO</span> " . substr($item, 2) . "</li>";
        } else {
            echo "<li>$item</li>";
        }
    }
    echo "</ol></div>";
}

echo "
    <div class='warning'>
        <strong>⚠️ IMPORTANTE:</strong> Non dimenticare di:
        <ul style='margin-left: 20px; margin-top: 10px;'>
            <li>Configurare l'email in api/send-message.php</li>
            <li>Testare il form contatti prima di andare online</li>
            <li>Abilitare HTTPS sul server</li>
            <li>Fare backup regolari</li>
        </ul>
    </div>

    <div class='success'>
        <strong>✅ IL SITO È PRONTO PER:</strong>
        <ul style='margin-left: 20px; margin-top: 10px;'>
            <li>Deployment su hosting</li>
            <li>Personalizzazione dei dati</li>
            <li>Aggiunte di features</li>
            <li>Pubblicazione online</li>
        </ul>
    </div>

    <h2 style='margin-top: 40px;'>📁 Struttura file importanti:</h2>
    <div class='code'>
api/send-message.php     ← Modifica email admin
config.php               ← Personalizza dati
includes/header.php      ← Meta tags
includes/footer.php      ← Link social
css/variables.css        ← Colori
.htaccess                ← Rewrite rules
    </div>

    <h2>🔗 Link utili:</h2>
    <ul style='margin-left: 20px;'>
        <li><a href='index.php' class='button'>📄 Vai alla Home</a></li>
        <li><a href='contatti.php' class='button'>📧 Testa Form Contatti</a></li>
        <li><a href='README.md' class='button'>📚 Leggi Documentazione</a></li>
    </ul>

    <div style='text-align: center; margin-top: 40px; padding-top: 20px; border-top: 1px solid #eee; color: #999;'>
        <p>Portfolio creato con ❤️ il 11/12/2024</p>
        <p>© 2024 Marco Rossi. Tutti i diritti riservati.</p>
    </div>
    </div>
</body>
</html>";
?>

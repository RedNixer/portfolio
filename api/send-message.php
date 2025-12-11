<?php
// Configurazione
$admin_email = 'marco.rossi@email.com'; // Cambia con la tua email
$site_name = 'Marco Rossi Portfolio';

// Headers di risposta
header('Content-Type: application/json; charset=utf-8');

// Solo POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Metodo non consentito']);
    exit;
}

// Recupera i dati POST
$data = json_decode(file_get_contents('php://input'), true);

// Validazione
$errors = [];

// Nome
if (empty($data['nome']) || strlen(trim($data['nome'])) < 2) {
    $errors['nome'] = 'Nome non valido';
}

// Email
if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Email non valida';
}

// Messaggio
if (empty($data['messaggio']) || strlen(trim($data['messaggio'])) < 10) {
    $errors['messaggio'] = 'Il messaggio deve contenere almeno 10 caratteri';
}

// Tipo di richiesta
$allowed_types = ['collaborazione', 'preventivo', 'consulenza', 'domande', 'altro'];
if (empty($data['tipo-richiesta']) || !in_array($data['tipo-richiesta'], $allowed_types)) {
    $errors['tipo-richiesta'] = 'Tipo di richiesta non valido';
}

// Privacy
if (empty($data['privacy'])) {
    $errors['privacy'] = 'Devi accettare la privacy policy';
}

// Se ci sono errori, restituiscili
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'errors' => $errors]);
    exit;
}

// Sanitize inputs
$nome = htmlspecialchars(trim($data['nome']), ENT_QUOTES, 'UTF-8');
$email = filter_var(trim($data['email']), FILTER_SANITIZE_EMAIL);
$oggetto = htmlspecialchars(trim($data['oggetto'] ?? ''), ENT_QUOTES, 'UTF-8');
$tipo_richiesta = htmlspecialchars(trim($data['tipo-richiesta']), ENT_QUOTES, 'UTF-8');
$messaggio = htmlspecialchars(trim($data['messaggio']), ENT_QUOTES, 'UTF-8');

// Se non c'è un oggetto, crealo dal tipo di richiesta
if (empty($oggetto)) {
    $oggetto_map = [
        'collaborazione' => 'Nuova richiesta di collaborazione',
        'preventivo' => 'Nuova richiesta di preventivo',
        'consulenza' => 'Nuova richiesta di consulenza',
        'domande' => 'Domande sui servizi',
        'altro' => 'Nuovo messaggio'
    ];
    $oggetto = $oggetto_map[$tipo_richiesta] ?? 'Nuovo messaggio dal portfolio';
}

// Prepara il corpo dell'email
$email_body = "
Nome: $nome
Email: $email
Tipo di richiesta: $tipo_richiesta

Messaggio:
$messaggio

---
Messaggio ricevuto da: {$_SERVER['REMOTE_ADDR']}
Data: " . date('d/m/Y H:i:s') . "
";

// Headers email
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Invia email
$mail_sent = mail(
    $admin_email,
    "[$site_name] $oggetto",
    $email_body,
    $headers
);

if ($mail_sent) {
    // Invia anche una risposta di conferma al cliente
    $confirm_body = "Ciao $nome,\n\n";
    $confirm_body .= "Grazie per il tuo messaggio! Ho ricevuto la tua richiesta e ti risponderò il prima possibile.\n\n";
    $confirm_body .= "Cordiali saluti,\nMarco Rossi\n";
    
    $confirm_headers = "From: $admin_email\r\n";
    $confirm_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    mail($email, "Conferma ricezione messaggio - $site_name", $confirm_body, $confirm_headers);
    
    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'Messaggio inviato con successo! Ti risponderò il prima possibile.'
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Errore nell\'invio del messaggio. Per favore riprova più tardi.'
    ]);
}
?>

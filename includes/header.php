<?php
// Define page variables if not set
if (!isset($page_title)) {
    $page_title = "Marco Rossi - Design Grafico & Sviluppo Web";
}
if (!isset($page_description)) {
    $page_description = "Portfolio professionale di Marco Rossi, designer grafico e sviluppatore web freelance.";
}
if (!isset($page_name)) {
    $page_name = "home";
}
if (!isset($current_page)) {
    $current_page = basename($_SERVER['PHP_SELF'], '.php');
}

// Get base URL for relative links
$base_url = '/';
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="designer grafico freelance, sviluppatore web, creazione siti web, portfolio design, branding, UX/UI design">
    <meta name="author" content="Marco Rossi">
    <meta name="theme-color" content="#E67E22">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Inter:wght@300;400;500;600&family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/variables.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/navbar.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/buttons.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/cards.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/forms.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/footer.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/pages.css">
    
    <!-- Page Specific CSS -->
    <?php if (file_exists("css/{$current_page}.css")) { ?>
        <link rel="stylesheet" href="<?php echo $base_url; ?>css/<?php echo $current_page; ?>.css">
    <?php } ?>
    
    <!-- Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/splitting@1.0.6/dist/splitting.css">
    <script src="https://unpkg.com/splitting@1.0.6/dist/splitting.min.js"></script>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="max-w-6xl mx-auto px-4 flex items-center justify-between">
            <div class="flex items-center">
                <img src="<?php echo $base_url; ?>resources/logo.png" alt="Logo Marco Rossi" class="h-10">
                <span class="ml-3 font-display font-bold text-xl">Marco Rossi</span>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="<?php echo $base_url; ?>index.php" class="nav-link <?php echo ($current_page == 'index' || $current_page == '') ? 'active' : ''; ?>">Home</a>
                <a href="<?php echo $base_url; ?>portfolio.php" class="nav-link <?php echo ($current_page == 'portfolio') ? 'active' : ''; ?>">Portfolio</a>
                <a href="<?php echo $base_url; ?>servizi.php" class="nav-link <?php echo ($current_page == 'servizi') ? 'active' : ''; ?>">Servizi</a>
                <a href="<?php echo $base_url; ?>chi-sono.php" class="nav-link <?php echo ($current_page == 'chi-sono') ? 'active' : ''; ?>">Chi Sono</a>
                <a href="<?php echo $base_url; ?>contatti.php" class="nav-link <?php echo ($current_page == 'contatti') ? 'active' : ''; ?>">Contatti</a>
            </div>
            <div class="md:hidden">
                <button id="mobile-menu-btn" class="text-2xl">
                    <span class="sr-only">Menu</span>
                    ☰
                </button>
            </div>
        </div>
    </nav>

<?php
/**
 * Takalo-Takalo — Layout principal (page.php)
 * Inclut nav, contenu dynamique (main) et footer.
 * Le contenu change dynamiquement selon $titre.
 */

// Titre par défaut
if (!isset($titre)) {
    $titre = 'home';
}

$ds = DIRECTORY_SEPARATOR;
$publicPath = __DIR__ . $ds . '..' . $ds . '..' . $ds . 'public';
$viewsPath  = __DIR__;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Takalo-Takalo — Plateforme d'échange d'objets entre particuliers. Échangez vêtements, livres, DVD et plus encore !">
    <meta name="theme-color" content="#e63946">
    <title>Takalo-Takalo<?= isset($titre) && $titre !== 'home' ? ' — ' . ucfirst($titre) : '' ?></title>

    <!-- Bootstrap CSS (local) -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- Bootstrap Icons (local) -->
    <link rel="stylesheet" href="/bootstrap/icons/bootstrap-icons.min.css">
    <!-- Custom Valentine CSS -->
    <link rel="stylesheet" href="/assets/css/valentine.css">
</head>
<body>

    <!-- Navigation -->
    <?php require $publicPath . $ds . 'include' . $ds . 'nav.php'; ?>

    <!-- Main Content -->
    <main>
        <?php
        // Chargement dynamique du contenu selon le titre
        switch ($titre) {
            case 'home':
            default:
                require $viewsPath . $ds . 'home.php';
                break;
            // Ajoutez d'autres cas ici plus tard :
            // case 'login':
            //     require $viewsPath . $ds . 'login.php';
            //     break;
            // case 'objets':
            //     require $viewsPath . $ds . 'objets.php';
            //     break;
        }
        ?>
    </main>

    <!-- Footer -->
    <?php require $publicPath . $ds . 'include' . $ds . 'footer.php'; ?>

    <!-- Bootstrap JS (local) -->
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Custom Valentine JS (defer = non-bloquant) -->
    <script src="/assets/js/valentine.js" defer></script>
</body>
</html>

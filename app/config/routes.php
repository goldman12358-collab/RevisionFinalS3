<?php
/**
 * Routes — Takalo-Takalo
 * Utilise page.php comme layout principal avec chargement dynamique du contenu.
 */

if (class_exists('Flight')) {

    // Page d'accueil
    Flight::route('GET /', function () {
        $titre = 'home';
        require __DIR__ . '/../views/page.php';
    });

    // Ajoutez d'autres routes ici plus tard :
    // Flight::route('GET /login', function () {
    //     $titre = 'login';
    //     require __DIR__ . '/../views/page.php';
    // });

} else {
    // Fallback sans Flight
    if (isset($_SERVER['REQUEST_URI'])) {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        if ($uri === '/' || $uri === '/index.php') {
            $titre = 'home';
            require __DIR__ . '/../views/page.php';
            exit;
        } else {
            header('Location: /', true, 302);
            exit;
        }
    }
}

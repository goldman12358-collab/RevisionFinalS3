<?php
// Minimal routes file: redirect requests to the single index page
// If the Flight framework is available, register the route there.
// Route GET / to the single view `app/views/index.php`
if (class_exists('Flight')) {
    Flight::route('GET /', function() {
        require __DIR__ . '/../views/index.php';
    });
} else {
    // If called directly (no Flight), serve the view when URI is root
    if (isset($_SERVER['REQUEST_URI'])) {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        if ($uri === '/' || $uri === '/index.php') {
            require __DIR__ . '/../views/index.php';
            exit;
        } else {
            // redirect other requests to root
            header('Location: /', true, 302);
            exit;
        }
    }
}

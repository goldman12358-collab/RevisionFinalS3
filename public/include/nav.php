<?php
$nonce = Flight::get('csp_nonce') ?? '';
?>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top takalo-nav">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <i class="bi bi-heart-fill text-danger me-2 heartbeat"></i>
            <span class="brand-text">Takalo-Takalo</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
                aria-controls="navbarMain" aria-expanded="false" aria-label="Menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link active" href="/"><i class="bi bi-house-heart me-1"></i>Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/inscription">
                        <i class="bi bi-pencil-square me-1"></i>S'inscrire
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-valentine ms-lg-3" href="/login">
                        <i class="bi bi-box-arrow-in-right me-1"></i>Se connecter
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

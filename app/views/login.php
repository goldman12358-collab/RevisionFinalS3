<!-- ============================================
     Takalo-Takalo — Page de Connexion
     Thème Saint-Valentin
     ============================================ -->

<section class="auth-section">
    <div class="auth-bg"></div>
    <div class="container position-relative" style="z-index:2;">
        <div class="row justify-content-center align-items-center min-vh-100 py-5">
            <div class="col-11 col-sm-10 col-md-8 col-lg-5 col-xl-4">

                <!-- Card Connexion -->
                <div class="auth-card animate-on-scroll visible">
                    <!-- Header -->
                    <div class="auth-header text-center">
                        <div class="auth-icon-wrapper">
                            <i class="bi bi-heart-fill"></i>
                        </div>
                        <h2 class="auth-title">Bon retour !</h2>
                        <p class="auth-subtitle">Connectez-vous pour retrouver vos échanges</p>
                    </div>

                    <!-- Formulaire -->
                    <form class="auth-form" id="loginForm" action="#" method="post">
                        <!-- Email -->
                        <div class="form-floating-valentine mb-3">
                            <div class="input-group">
                                <span class="input-group-text auth-input-icon">
                                    <i class="bi bi-envelope-heart-fill"></i>
                                </span>
                                <input type="email" class="form-control auth-input" id="loginEmail"
                                       name="email" placeholder="Votre email" required autocomplete="email">
                            </div>
                        </div>

                        <!-- Mot de passe -->
                        <div class="form-floating-valentine mb-3">
                            <div class="input-group">
                                <span class="input-group-text auth-input-icon">
                                    <i class="bi bi-lock-fill"></i>
                                </span>
                                <input type="password" class="form-control auth-input" id="loginPassword"
                                       name="password" placeholder="Mot de passe" required autocomplete="current-password">
                                <button class="btn auth-toggle-pw" type="button" data-target="loginPassword" aria-label="Voir le mot de passe">
                                    <i class="bi bi-eye-fill"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Se souvenir / Oublié -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input auth-check" type="checkbox" id="rememberMe" name="remember">
                                <label class="form-check-label auth-check-label" for="rememberMe">Se souvenir de moi</label>
                            </div>
                            <a href="#" class="auth-link-small">Mot de passe oublié ?</a>
                        </div>

                        <!-- Bouton Submit -->
                        <button type="submit" class="btn btn-auth-submit w-100 mb-3" disabled>
                            <i class="bi bi-box-arrow-in-right me-2"></i>Se connecter
                        </button>
                    </form>

                    <!-- Séparateur -->
                    <div class="auth-divider">
                        <span>ou</span>
                    </div>

                    <!-- Lien inscription -->
                    <div class="text-center mt-3">
                        <p class="auth-switch-text">
                            Pas encore de compte ?
                            <a href="/inscription" class="auth-switch-link">
                                <i class="bi bi-pencil-square me-1"></i>Créer un compte
                            </a>
                        </p>
                    </div>
                </div>

                <!-- Retour accueil -->
                <div class="text-center mt-4">
                    <a href="/" class="auth-back-link">
                        <i class="bi bi-arrow-left me-1"></i>Retour à l'accueil
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

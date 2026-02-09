<!-- ============================================
     Takalo-Takalo — Page d'Inscription
     Thème Saint-Valentin
     ============================================ -->

<section class="auth-section">
    <div class="auth-bg"></div>
    <div class="container position-relative" style="z-index:2;">
        <div class="row justify-content-center align-items-center min-vh-100 py-5">
            <div class="col-11 col-sm-10 col-md-8 col-lg-5 col-xl-4">

                <!-- Card Inscription -->
                <div class="auth-card animate-on-scroll visible">
                    <!-- Header -->
                    <div class="auth-header text-center">
                        <div class="auth-icon-wrapper">
                            <i class="bi bi-person-heart"></i>
                        </div>
                        <h2 class="auth-title">Rejoignez-nous !</h2>
                        <p class="auth-subtitle">Créez votre compte et commencez à échanger</p>
                    </div>

                    <!-- Formulaire -->
                    <form class="auth-form" id="registerForm" action="#" method="post">
                        <!-- Nom -->
                        <div class="form-floating-valentine mb-3">
                            <div class="input-group">
                                <span class="input-group-text auth-input-icon">
                                    <i class="bi bi-person-fill"></i>
                                </span>
                                <input type="text" class="form-control auth-input" id="registerNom"
                                       name="nom" placeholder="Votre nom" required autocomplete="family-name">
                            </div>
                        </div>

                        <!-- Prénom -->
                        <div class="form-floating-valentine mb-3">
                            <div class="input-group">
                                <span class="input-group-text auth-input-icon">
                                    <i class="bi bi-person-badge-fill"></i>
                                </span>
                                <input type="text" class="form-control auth-input" id="registerPrenom"
                                       name="prenom" placeholder="Votre prénom" required autocomplete="given-name">
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-floating-valentine mb-3">
                            <div class="input-group">
                                <span class="input-group-text auth-input-icon">
                                    <i class="bi bi-envelope-heart-fill"></i>
                                </span>
                                <input type="email" class="form-control auth-input" id="registerEmail"
                                       name="email" placeholder="Votre email" required autocomplete="email">
                            </div>
                        </div>

                        <!-- Mot de passe -->
                        <div class="form-floating-valentine mb-3">
                            <div class="input-group">
                                <span class="input-group-text auth-input-icon">
                                    <i class="bi bi-lock-fill"></i>
                                </span>
                                <input type="password" class="form-control auth-input" id="registerPassword"
                                       name="password" placeholder="Mot de passe" required autocomplete="new-password"
                                       minlength="6">
                                <button class="btn auth-toggle-pw" type="button" data-target="registerPassword" aria-label="Voir le mot de passe">
                                    <i class="bi bi-eye-fill"></i>
                                </button>
                            </div>
                            <div class="password-strength mt-2" id="passwordStrength">
                                <div class="strength-bar">
                                    <div class="strength-fill" id="strengthFill"></div>
                                </div>
                                <small class="strength-text" id="strengthText"></small>
                            </div>
                        </div>

                        <!-- Confirmer mot de passe -->
                        <div class="form-floating-valentine mb-3">
                            <div class="input-group">
                                <span class="input-group-text auth-input-icon">
                                    <i class="bi bi-shield-lock-fill"></i>
                                </span>
                                <input type="password" class="form-control auth-input" id="registerPasswordConfirm"
                                       name="password_confirm" placeholder="Confirmer le mot de passe" required autocomplete="new-password">
                                <button class="btn auth-toggle-pw" type="button" data-target="registerPasswordConfirm" aria-label="Voir le mot de passe">
                                    <i class="bi bi-eye-fill"></i>
                                </button>
                            </div>
                            <small class="auth-match-msg" id="matchMsg"></small>
                        </div>

                        <!-- CGU -->
                        <div class="form-check mb-4">
                            <input class="form-check-input auth-check" type="checkbox" id="acceptTerms" name="terms" required>
                            <label class="form-check-label auth-check-label" for="acceptTerms">
                                J'accepte les <a href="#" class="auth-link-small">conditions d'utilisation</a>
                            </label>
                        </div>

                        <!-- Bouton Submit -->
                        <button type="submit" class="btn btn-auth-submit w-100 mb-3" disabled>
                            <i class="bi bi-person-plus-fill me-2"></i>Créer mon compte
                        </button>
                    </form>

                    <!-- Séparateur -->
                    <div class="auth-divider">
                        <span>ou</span>
                    </div>

                    <!-- Lien connexion -->
                    <div class="text-center mt-3">
                        <p class="auth-switch-text">
                            Déjà un compte ?
                            <a href="/login" class="auth-switch-link">
                                <i class="bi bi-box-arrow-in-right me-1"></i>Se connecter
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

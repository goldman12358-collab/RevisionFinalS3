/**
 * Takalo-Takalo — Auth interactions (Login / Inscription)
 * Thème Saint-Valentin
 * (non-bloquant : chargé en defer)
 */

(function () {
    'use strict';

    /* =============================================
       1. Toggle password visibility
       ============================================= */
    document.querySelectorAll('.auth-toggle-pw').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var targetId = this.getAttribute('data-target');
            var input = document.getElementById(targetId);
            if (!input) return;
            var icon = this.querySelector('i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.replace('bi-eye-fill', 'bi-eye-slash-fill');
            } else {
                input.type = 'password';
                icon.classList.replace('bi-eye-slash-fill', 'bi-eye-fill');
            }
        });
    });

    /* =============================================
       2. Password strength meter (Inscription)
       ============================================= */
    var pwInput = document.getElementById('registerPassword');
    var strengthContainer = document.getElementById('passwordStrength');
    var strengthFill = document.getElementById('strengthFill');
    var strengthText = document.getElementById('strengthText');

    if (pwInput && strengthContainer) {
        pwInput.addEventListener('input', function () {
            var val = this.value;
            if (val.length === 0) {
                strengthContainer.classList.remove('active');
                return;
            }
            strengthContainer.classList.add('active');

            var score = 0;
            if (val.length >= 6) score++;
            if (val.length >= 10) score++;
            if (/[A-Z]/.test(val)) score++;
            if (/[0-9]/.test(val)) score++;
            if (/[^A-Za-z0-9]/.test(val)) score++;

            // Reset classes
            strengthFill.className = 'strength-fill';

            if (score <= 1) {
                strengthFill.classList.add('weak');
                strengthText.textContent = 'Faible';
                strengthText.style.color = '#e63946';
            } else if (score === 2) {
                strengthFill.classList.add('fair');
                strengthText.textContent = 'Moyen';
                strengthText.style.color = '#f7c948';
            } else if (score === 3) {
                strengthFill.classList.add('good');
                strengthText.textContent = 'Bon';
                strengthText.style.color = '#43aa8b';
            } else {
                strengthFill.classList.add('strong');
                strengthText.textContent = 'Excellent !';
                strengthText.style.color = '#2ec4b6';
            }
        });
    }

    /* =============================================
       3. Password confirm match check
       ============================================= */
    var pwConfirm = document.getElementById('registerPasswordConfirm');
    var matchMsg = document.getElementById('matchMsg');

    if (pwConfirm && pwInput && matchMsg) {
        function checkMatch() {
            var pw = pwInput.value;
            var cf = pwConfirm.value;
            if (cf.length === 0) {
                matchMsg.textContent = '';
                matchMsg.className = 'auth-match-msg';
                pwConfirm.classList.remove('is-valid-custom', 'is-invalid-custom');
                return;
            }
            if (pw === cf) {
                matchMsg.textContent = '✓ Les mots de passe correspondent';
                matchMsg.className = 'auth-match-msg match';
                pwConfirm.classList.add('is-valid-custom');
                pwConfirm.classList.remove('is-invalid-custom');
            } else {
                matchMsg.textContent = '✗ Les mots de passe ne correspondent pas';
                matchMsg.className = 'auth-match-msg no-match';
                pwConfirm.classList.add('is-invalid-custom');
                pwConfirm.classList.remove('is-valid-custom');
            }
        }
        pwConfirm.addEventListener('input', checkMatch);
        pwInput.addEventListener('input', function () {
            if (pwConfirm.value.length > 0) checkMatch();
        });
    }

    /* =============================================
       4. Enable/disable submit buttons based on fields
       ============================================= */

    // --- Login form ---
    var loginForm = document.getElementById('loginForm');
    if (loginForm) {
        var loginSubmit = loginForm.querySelector('.btn-auth-submit');
        var loginEmail = document.getElementById('loginEmail');
        var loginPassword = document.getElementById('loginPassword');

        function checkLoginReady() {
            if (loginEmail.value.trim() !== '' && loginPassword.value.trim() !== '') {
                loginSubmit.disabled = false;
            } else {
                loginSubmit.disabled = true;
            }
        }
        loginEmail.addEventListener('input', checkLoginReady);
        loginPassword.addEventListener('input', checkLoginReady);
    }

    // --- Register form ---
    var registerForm = document.getElementById('registerForm');
    if (registerForm) {
        var regSubmit = registerForm.querySelector('.btn-auth-submit');
        var regNom = document.getElementById('registerNom');
        var regPrenom = document.getElementById('registerPrenom');
        var regEmail = document.getElementById('registerEmail');
        var regPw = document.getElementById('registerPassword');
        var regPwC = document.getElementById('registerPasswordConfirm');
        var regTerms = document.getElementById('acceptTerms');

        function checkRegisterReady() {
            var ready = (
                regNom.value.trim() !== '' &&
                regPrenom.value.trim() !== '' &&
                regEmail.value.trim() !== '' &&
                regPw.value.length >= 6 &&
                regPw.value === regPwC.value &&
                regTerms.checked
            );
            regSubmit.disabled = !ready;
        }

        [regNom, regPrenom, regEmail, regPw, regPwC].forEach(function (el) {
            el.addEventListener('input', checkRegisterReady);
        });
        regTerms.addEventListener('change', checkRegisterReady);
    }

    /* =============================================
       5. Input focus animations (subtle glow)
       ============================================= */
    document.querySelectorAll('.auth-input').forEach(function (input) {
        input.addEventListener('focus', function () {
            this.closest('.input-group').classList.add('input-focused');
        });
        input.addEventListener('blur', function () {
            this.closest('.input-group').classList.remove('input-focused');
        });
    });

})();

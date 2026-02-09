<?php

namespace app\controllers;

use app\models\Users;
use Flight;

class InscriptionController
{
    private $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function register(): void
    {
        $request = Flight::request();
        $rawBody = (string) $request->getBody();
        $payload = [];

        if ($rawBody !== '') {
            $decoded = json_decode($rawBody, true);
            if (is_array($decoded)) {
                $payload = $decoded;
            }
        }

        $email = trim((string) ($payload['email'] ?? $request->data->email ?? ''));
        $password = (string) ($payload['password'] ?? $request->data->password ?? '');

        if ($email === '' || $password === '') {
            $this->app->json([
                'success' => false,
                'message' => 'Email et mot de passe requis.',
            ], 400);
            return;
        }

        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $this->app->json([
                'success' => false,
                'message' => 'Email invalide.',
            ], 400);
            return;
        }

        $db = Flight::db();
        $user = Users::findByEmail($db, $email);

        if ($user === null) {
            // Email nouveau => création du compte
            $user = Users::create($db, $email, $password); // create() doit hasher le mot de passe
            $this->setSessionUser($user);

            $this->app->json([
                'success' => true,
                'message' => 'Compte créé et connexion réussie.',
                'redirectUrl' => $this->baseUrl() . '/admin',
            ], 200);
            return;
        }

        // Si l'utilisateur existe déjà, on peut renvoyer un message d'erreur ou tenter login
        $this->app->json([
            'success' => false,
            'message' => 'Email déjà utilisé. Veuillez vous connecter.',
        ], 409);
    }

    private function setSessionUser(Users $user): void
    {
        $_SESSION['user'] = [
            'id' => $user->getId(),
            'email' => $user->getEmail(),
        ];
    }

    private function baseUrl(): string
    {
        $rawBaseUrl = (string) $this->app->get('flight.base_url');
        return rtrim($rawBaseUrl, '/');
    }
}

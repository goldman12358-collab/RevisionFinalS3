<?php
namespace app\controllers;

use app\models\Users;
use Flight;
use flight\Engine;

class LoginController
{
    private Engine $app;

	public function __construct(Engine $app)
	{
		$this->app = $app;
	}

    public function login(): void
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

		$email = (string) ($payload['email'] ?? $request->data->email ?? '');
		$password = (string) ($payload['password'] ?? $request->data->password ?? '');
		$email = trim($email);

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

		if ($user->verifyPassword($password) === false) {
			$this->app->json([
				'success' => false,
				'message' => 'Mot de passe incorrect.',
			], 401);
			return;
		}

		$this->setSessionUser($user);
		$this->app->json([
			'success' => true,
			'message' => 'Connexion réussie.',
			'redirectUrl' => $this->baseUrl() . '/admin',
		], 200);
	}
    private function setSessionUser(Users $user): void
	{
		// Stockage minimal en session (FR): éviter de stocker le hash du mot de passe.
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
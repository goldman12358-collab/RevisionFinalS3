-- créer base de données
-- changer :
-- 'database' => [
-- 		'driver'   => 'pgsql',           // type de base de données : pgsql pour PostgreSQL
-- 		'host'     => 'localhost',       // serveur PostgreSQL
-- 		'port'     => 5432,              // port PostgreSQL par défaut
-- 		'dbname'   => 'mini-template',   // nom de la base
-- 		'user'     => 'goldman', // utilisateur PostgreSQL
-- 		'password' => 'go', // mot de passe
-- 		'charset'  => 'utf8',            // encodage
-- 	],
-- dans config.php

CREATE TABLE produit (
    id SERIAL PRIMARY KEY,
    names VARCHAR(255) NOT NULL,
    price NUMERIC(12,2) NOT NULL,
    pathimg VARCHAR(255) NOT NULL,
    descriptions TEXT DEFAULT 'Description non disponible',
    unite VARCHAR(10) DEFAULT 'Ar'
);


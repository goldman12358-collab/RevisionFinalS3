CREATE TABLE user_role (
    id SERIAL PRIMARY KEY,
    libelle VARCHAR(20) NOT NULL
);
CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    user_role INT NOT NULL
);
CREATE TABLE comptes (
    id SERIAL PRIMARY KEY,
    id_user INT NOT NULL,
    date_create TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    motdepasse VARCHAR(255) NOT NULL
);
CREATE TABLE status_objets (
    id SERIAL PRIMARY KEY,
    libelle VARCHAR(30) NOT NULL
);
CREATE TABLE categorie_objet (
    id SERIAL PRIMARY KEY,
    libelle VARCHAR(100) NOT NULL,
    description_categories TEXT
);
CREATE TABLE objets (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    objets_description TEXT,
    id_user_proprietaire INT NOT NULL,
    id_categorie INT NOT NULL,
    date_mis_en_ligne TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    prix_estimatif NUMERIC(12,2),
    status_objet INT NOT NULL
);
CREATE TABLE images_objets (
    id SERIAL PRIMARY KEY,
    id_objets INT NOT NULL,
    libelle VARCHAR(255) NOT NULL
);
CREATE TABLE images_categorie_objets (
    id SERIAL PRIMARY KEY,
    id_cat_objets INT NOT NULL,
    libelle VARCHAR(255) NOT NULL
);
CREATE TABLE status_echange (
    id SERIAL PRIMARY KEY,
    libelle VARCHAR(30) NOT NULL
);
CREATE TABLE propositions_echange (
    id SERIAL PRIMARY KEY,
    id_user_source INT NOT NULL,
    id_user_destinataire INT NOT NULL,
    id_objet_source INT NOT NULL,
    id_objet_desiree INT NOT NULL,
    status_echange INT NOT NULL,
    date_proposition TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE echange (
    id SERIAL PRIMARY KEY,
    id_proposition INT NOT NULL,
    date_echange_fait TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

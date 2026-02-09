Description du projet : 
Objectifs
On veut mettre en place un site qui permet de faire des échanges d’objet : Takalo-takalo.
Les utilisateurs inscrits sur le site vont mettre en ligne leurs objets (vêtement, livre, DVD,
etc…). Ils vont voir les objets des autres utilisateurs et proposer un échange entre 2 objets.
...
Creer un view home.php :
creer : 
avec nav.php , main.php et footer.php pour ajout facile et reutilisation du nav et footer 
nav.php {
    Titre en haut a gauche Takalo-Takalo 
    En haut a droite boutton se connecter (pas encore de redirection)
}
footer.php{
    Information sur les developpeur , lister les nom : 
    Goldman , Florencia ,Aina , et qlq description du projet 
}
Creer une page page.php {
    inclut nav et footer 
    au centre main , change dynamiquement selon le titre actuellement 
    si titre == home
    inclure home.php dans main
}
Supprimer la page et le fichier index actuellement dans view et remplacer par page.php et home.php 

NB : Opter pour un theme Saint-Valentin , stylée , animee avec js (js qui ne bloque pas le navigateur) , mettre nav et footer dans public (creer un dossier include) et dans view 
page.php , home.php ... utiliser boostrap pour maximiser le style et la responsivité du site.
Notre boostrap est dans public , on n'utilise jamais le lien cdn pour boostrap , on utilise le lien local de notre dossier public pour boostrap
creer des dossier pour mettre des JS et CSS dans public pour une meilleure organisation
Implementer bien une page d'accueil cool et stylée pour attirer les utilisateurs, avec des animations légères en JavaScript pour rendre l'expérience utilisateur plus agréable. Assurez-vous que le site est responsive et fonctionne bien sur tous les appareils.
Telecharger des images ppur la pages d'acceuil si necessaire pour plus de style et d'attrait visuel, en veillant à ce qu'elles soient libres de droits ou que vous ayez la permission de les utiliser. Vous pouvez trouver des images gratuites sur des sites comme Unsplash, Pexels ou Pixabay. Utilisez ces images pour créer une page d'accueil attrayante qui incite les utilisateurs à s'inscrire et à commencer à échanger leurs objets sur Takalo-Takalo.

On reste là pour le moment ...

Implementer un login et inscription coherent avec notre theme , adapter les route pour les liens suivant dans la page d'acceuil : 
se connecter , creer compte , commencer maintenant (vers login) 
pas encore de logique back pour le login et inscription (boutton submit pas encore fonctionnel)
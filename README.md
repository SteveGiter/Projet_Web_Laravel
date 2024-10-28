# Projet Mon Miam Miam

## Description

## Ce projet est une application mobile de gestion des commandes pour le restaurant Zeduc Sp@ce, développée avec Laravel. Elle permet aux clients de passer des commandes de manière rapide et pratique, tout en offrant une expérience fluide et améliorée aux employés pour la gestion des flux de commandes. Grâce à cette application, les clients et plus particulièrement les étudiants de l'institut Ucac-Icam, peuvent également bénéficier de cartes de fidélité et de codes de parrainage, renforçant leur engagement et leur loyauté envers le restaurant. L'objectif est d'améliorer l'efficacité du traitement des commandes et de stimuler la fidélisation des clients, tout en augmentant les revenus du restaurant.

## Prérequis

-   PHP >= 8.0
-   Composer
-   Laravel 9.x
-   MySQL ou une autre base de données

---

## Installation

1. Clonez le dépôt :
    ```bash
    git clone https://github.com/andreonana/zeduc-space.git
    cd zeduc-space
    ```
2. Installez les dépendances :
    ```bash
    composer install
    ```
3. Copiez le fichier .env
    ```bash
    cp .env.example .env
    ```
4. Générer la clé de l'application :
    ```bash
    php artisan key:generate
    ```
5. Configurez le fichier .env avec les informations de votre base de données.
6. Exécutez les migrations :
    ```bash
    php artisan migrate
    ```
7. (Optionnel) Exécutez les seeders si nécessaire :
    ```bash
    php artisan db:seed
    ```

## Configuration

Mettre à jour les variables d'environnement dans le fichier .env :
DB_CONNECTION : mysql
DB_HOST : 127.0.0.1
DB_PORT : 3306
DB_DATABASE : nom_de_la_base
DB_USERNAME : utilisateur
DB_PASSWORD : mot_de_passe

## Exécution

Pour démarrer le serveur local :

````bash
php artisan serve
L'application sera disponible à l'adresse http://localhost:8080.

## Foctionnalités

Gestion des tâches : Ajouter, éditer et supprimer des tâches.
Authentification : Système de connexion et inscription.
Collaboration : Affecter des utilisateurs à des tâches.
Suivi des progrès : Indicateur de l’avancement du projet.
Interface responsive : Interface compatible avec les appareils mobiles.

## Captures d'écran

Confère le dossier `Captures d'écran` situé après le dossier `bootstrap`

## Liste des tâches

-Implémenter un espace Etudiant
-Implémenter un espace Administrateur
-INmplémenter un espace Employé
-Implémenter un espace Gérant

## Détail des tâches

## Espace Etudiant

-Inscription et Connexion
-Visualisation du Menu et Promotions
-Commande en ligne (Panier)
-Paiement en ligne et points de fidélité
-Parrainage et Récompenses
-Historique des Commandes et Réclamations
-Participation aux jeux et événements
-Liste des 10 meilleurs clients
-Consentement aux cookies

## Espace Administrateur

-Gestion des comptes employés
-Gestion du menu (CRUD)
-Statistiques en temps réel
-Gestion des promotions et événements
-Suivi des réclamations des étudiants

## Espace Employé

-Connexion des employés
-Gestion des Commandes
-Mise à jour du menu
-Tableau de bord des réclamations
-Statistiques hebdomadaires

## Espace Gérant

-Supervision des commandes en temps réel
-Gestion des comptes employés
-Tableau de bord des statistiques générales
-Gestion des réclamations

Pour plus de détails, consultez le manuel d'utilisation de la plate-forme disponible dans nos livrables.

## Tests

Pour exécuter les tests, utilisez la commande suivante :

    ```bath
    php artisan test

Assurez-vous que votre environnement de test est configuré dans le fichier .env.testing.

Auteurs & Groupe
Groupe projet web 11
TCHATCHOUA Eva Ariane
TCHISSAMBOU Jossy Steven
GUENDJIO NGASSA Yvan
SCHULE Frank Steven
TESSA TEKEU Ralph Axel
NKE GOUETH Emmanuel

Membres du Groupe
TCHATCHOUA Eva Ariane - Chef de projet & Développeur Frontend & Responsable de l'Assurance Qualité - Profil GitHub : ariane.tchatchoua@2028.ucac-icam.com
TCHISSAMBOU Jossy Steven - Développeur Backend - Profil GitHub : jossy.tchissambou@2028.ucac-icam.com
NKE GOUETH Emmanuel - Product Owner - Profil GitHub : emmanuel.nke@2028.ucac-icam.com
SCHULE Frank Steven - Développeur frontend - Profil GitHub : frank.schule@2028.uca-icam.com
Postes Techniques
TCHISSAMBOU Jossy Steven & NKE GOUETH Emmanuel : Gestion de l'architecture du projet et développement de l'API backend (Laravel).
TESSA TEKEU Ralph Axel : Développement de l'interface utilisateur avec Boostsrap & maquttes Figma - Profil GitHub : ralph.tessa@2028.ucac-icam.com
TCHISSAMBOU Jossy Steven & NKE GOUETH Emmanuel: Rédaction des tests unitaires et tests d'intégration, vérification de la qualité du code et gestion des bugs.
Contributeur
GUENDJIO NGASSA Yvan - Elaborateur et réalisateur des modèles de conception - Profil GitHub : Email: ngassa.guendjio@2028.ucac-icam.com

Les contributions sont les bienvenues ! Suivez les étapes ci-dessous :

Forkez le projet.
Créer une nouvelle branche ( git checkout -b feature/nouvelle-fonctionnalité).
Faites un commit de vos modifications ( git commit -m 'Ajouter une nouvelle fonctionnalité').
Poussez la branche ( git push origin feature/nouvelle-fonctionnalité).
Ouvrez une Pull Request.
Licence
Distribué sous la licence MIT. Voir LICENSEpour plus d'informations.

Remerciements
Merci à tous les contributeurs, mentors et amis pour leur soutien et leurs conseils précieux.

### Explication du contenu

-   **Titre et Description** : Début du fichier avec un titre clair et une brève description de l'objectif du projet.
-   **Prérequis, Installation et Configuration** : Détails techniques pour installer et configurer le projet sur une machine locale.
-   **Exécution et Fonctionnalités** : Informations pour démarrer le projet et une liste des principales fonctionnalités.
-   **Captures d'écran** : Des captures pour montrer les différentes sections de l'application (à ajuster selon votre projet).
-   **Tests** : Instructions pour lancer les tests.
-   **Informations sur le Groupe et les Membres** : Une section sur les auteurs, le groupe et les postes occupés.
-   **Contribuer, Licence et Remerciements** : Instructions pour les contributeurs potentiels, les informations sur la licence et des remerciements.
````

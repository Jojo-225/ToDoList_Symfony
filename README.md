# ToDoList — Symfony + MySQL

Ce dépôt correspond à la **Version 1** du projet ToDoList : une application Symfony permettant de gérer des tâches (CRUD) avec persistance en base de données MySQL.

---

## Objectifs du projet

- Créer une application web ToDoList avec Symfony
- Utiliser une base de données MySQL via Doctrine ORM
- Mettre en place une interface Twig (avec Bootstrap)
- Gérer les opérations CRUD : créer, lire, modifier, supprimer
- Ajouter un statut "terminée / en cours"
- Calculer le nombre de jours restants avant l’échéance d’une tâche

---

## Stack technique

- **Symfony** (PHP)
- **Twig** (templates)
- **Doctrine ORM** + Migrations
- **MySQL**
- **Bootstrap** (UI)

---

## Fonctionnalités

- Afficher la liste des tâches
- Ajouter une tâche
- Modifier une tâche
- Supprimer une tâche
- Marquer une tâche comme terminée / non terminée
- Affichage du **nombre de jours restants** avant la date limite (`due_date`)

---


## ⚙️ Installation & lancement

### 1) Cloner le projet

git clone <url-du-projet>
cd <nom-du-projet>


### 2) Cloner le projet

composer install


### 3) Configurer la base de données (MySQL)

Crée un fichier .env.local à la racine du projet (recommandé, non versionné) et ajoute :

DATABASE_URL="mysql://app:ChangeMe!2026@127.0.0.1:3306/main?charset=utf8mb4"

Remplace app, ChangeMe!2026 et main par tes identifiants / nom de base si besoin.
Utiliser 127.0.0.1 évite certains problèmes de socket sur macOS.


### 4) Créer la base de données

php bin/console doctrine:database:create

### 5) Exécuter les migrations (créer les tables)

php bin/console doctrine:migration:migrate
Si la migration n'existe pas, faire préalablement: 
php bin/console make:migration

## Démarrer l’application

symfony serve


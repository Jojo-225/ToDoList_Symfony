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
```bash
git clone <url-du-projet>
cd <nom-du-projet>

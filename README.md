# 🌍 Travel-Us – Projet Final L2

## 👤 Étudiant :
- **Nom** : Dieuci Kongolo Mbaya
- **Promotion** : L2
- **Université** : UPC
- **Cours** : Projet de Développement Web – GitHub Classroom

---

## 📌 Description du projet

**Travel-Us** est une application web de réservation de voyages conçue dans le cadre du projet final de L2.  
Elle permet à un utilisateur de :
- Choisir une destination
- Saisir ses dates de départ/retour
- Enregistrer ses informations personnelles
- Envoyer une demande de réservation

Toutes les réservations sont stockées dans une base de données MySQL à l’aide de PHP.

---

## 🛠️ Technologies utilisées

- **HTML5 / CSS3 / JavaScript**
- **PHP (backend)**
- **MySQL** pour la base de données
- **Git + GitHub** pour le versionnement
- **Hostinger** pour l’hébergement web

---

## 📁 Contenu du dépôt

| Fichier/Dossier        | Description                                     |
|------------------------|-------------------------------------------------|
| `index.html`           | Page d’accueil du site                          |
| `reservation.php`      | Script de traitement des réservations (PHP)    |
| `travel_us.sql`        | Script SQL de création de la base de données   |
| `assets/`              | Images, styles CSS, JS, etc.                   |
| `README.md`            | Ce fichier de documentation                    |

---

## 🌐 Lien vers le site hébergé en ligne

🔗 [Accéder au site Travel-Us sur Hostinger](https://steelblue-capybara-971715.hostingersite.com)

---

## 📸 Aperçu du site

![Aperçu](https://user-images.githubusercontent.com/0000000/site-preview.png)

---

## ✅ Fonctionnalités principales

- Interface utilisateur claire et moderne
- Formulaire de réservation dynamique
- Connexion sécurisée à la base de données
- Redirection automatique après enregistrement réussi

---

## 💾 Base de données : `travel_us`

### Table : `reservations`
| Colonne           | Type         |
|-------------------|--------------|
| id                | INT (AUTO_INCREMENT) |
| destination       | VARCHAR(100) |
| start_date        | DATE         |
| end_date          | DATE         |
| travelers         | INT          |
| flight_included   | TINYINT      |
| hotel_included    | TINYINT      |
| first_name        | VARCHAR(100) |
| last_name         | VARCHAR(100) |
| email             | VARCHAR(150) |
| phone             | VARCHAR(20)  |
| special_requests  | TEXT         |

---

## 🔐 Informations sensibles

> Les informations de connexion MySQL (nom d'utilisateur, mot de passe) ont été retirées du dépôt public pour des raisons de sécurité.

---

## 📣 Remarques

- Projet réalisé individuellement
- Déployé avec succès et testé en conditions réelles
- Soumis dans le cadre de **GitHub Classroom**

---

## 🙌 Merci !

Merci aux enseignants de l’UPC pour leur encadrement.

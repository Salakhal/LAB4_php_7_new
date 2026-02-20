# 🎓 Gestion Étudiant - PHP (POO + DAO + Web Services)

Ce projet est une application mini-CRUD structurée en **architecture multicouche** (N-Tier) utilisant PHP 7+. Il permet de gérer des étudiants via une interface Web classique et expose également des **Web Services JSON** compatibles avec des applications mobiles (Android/Volley).

---

## 🚀 Fonctionnalités

- **Architecture POO** : Utilisation de classes et d'interfaces pour un code propre.
- **Pattern DAO** : Abstraction de l'accès aux données.
- **CRUD Complet** : Ajouter, Lister, Supprimer des étudiants.
- **Web Services API** :
  - `ws/loadEtudiant.php` : Retourne la liste des étudiants en format JSON.
  - `ws/createEtudiant.php` : Permet l'insertion d'un étudiant via une requête POST.
- **Sécurité** : Utilisation de requêtes préparées (PDO) contre les injections SQL.

---

## 📂 Structure du Projet

```text
📂 projet/
├── 📁 classes/      
├── 📁 connexion/    
├── 📁 dao/         
├── 📁 service/     
├── 📁 controller/   
├── 📁 ws/           
├── 📄 index.php     
└── 📄 racine.php
```

## 🛠️ Installation

### 1. Prérequis
- Serveur local : XAMPP, WAMP ou Laragon
- PHP 7.4 ou supérieur
- MySQL

---

### 2. Base de données

Créez une base de données nommée `school1` et exécutez le script SQL suivant :

```sql
CREATE DATABASE IF NOT EXISTS school1;
USE school1;

CREATE TABLE IF NOT EXISTS Etudiant (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(60) NOT NULL,
  prenom VARCHAR(60) NOT NULL,
  ville VARCHAR(60) NOT NULL,
  sexe VARCHAR(10) NOT NULL
);
```
## 📡 Web Services (API)
Les services web sont conçus pour être consommés par des clients externes comme une application Android.

### 🔵 Charger les étudiants

-`URL` : ws/loadEtudiant.php

-`Méthode` : POST

-`Réponse `: Un tableau JSON contenant tous les étudiants.


### Test des Web Services (Postman) 
<img width="1127" height="738" alt="image" src="https://github.com/user-attachments/assets/dcbade73-853b-48ec-9a40-43423a8a4d85" />

 ### 🟢 Créer un étudiant
-`URL` : ws/createEtudiant.php

-`Méthode` : POST

-`Paramètres` : nom, prenom, ville, sexe

-`Réponse ` : {"success": true, "message": "Etudiant inséré"}.

### Test des Web Services (Postman)

<img width="846" height="648" alt="image" src="https://github.com/user-attachments/assets/91f497b0-f0f9-49f0-890d-a2f31d1d9b92" />

## 💻 Technologies utilisées
-`Backend` : PHP 7+ (Programmation Orientée Objet).

-`Base de données `: MySQL avec accès sécurisé via PDO.

-`Frontend` : HTML5 / CSS3 (ou Bootstrap).

-`Échange de données `: Format JSON.

##  Aperçus du projet (Screenshots)


<img width="1857" height="853" alt="image" src="https://github.com/user-attachments/assets/e8bf5d2d-7da4-44de-b883-16a96a215e19" />


## 👤 Auteur

* **École Normale Supérieure de Marrakech**
  
* **Réalisé par :** SALMA LAKHAL
  
* **Filière  :** CLE_INFO_S5
  
* **Année universitaire :** 2025/2026
  
* **Encadré par :** Pr. Mohamed LACHGAR

* **Cours :**  Ingénierie Logicielle Web avec PHP 7 : Architecture Multicouche et Accès aux Données Sécurisé




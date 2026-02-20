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

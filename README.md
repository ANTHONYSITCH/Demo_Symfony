

# 🚀 Demo Symfony

Projet de démonstration développé avec le framework **Symfony**.

---

## 📌 Description

Ce projet est une application web réalisée avec Symfony.  
Il permet de gérer et afficher des données (ex: films, articles, etc.) via des templates Twig.

---

## 🛠️ Technologies utilisées

- PHP 8+
- Symfony
- Twig
- Doctrine (ORM)
- MySQL / MariaDB
- HTML / CSS

---

## ⚙️ Installation

### 1. Cloner le projet

```bash
git clone https://github.com/ANTHONYSITCH/Demo_Symfony.git
cd Demo_Symfony
````

---

### 2. Installer les dépendances

```bash
composer install
```

---

### 3. Configurer l'environnement

Créer un fichier `.env.local` et configurer la base de données :

```env
DATABASE_URL="mysql://user:password@127.0.0.1:3306/nom_de_la_base"
```

---

### 4. Créer la base de données

```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

---

### 5. Lancer le serveur

```bash
symfony server:start
```

Ou avec PHP :

```bash
php -S localhost:8000 -t public
```

---

## 🌐 Accès à l'application

👉 [http://localhost:8000](http://localhost:8000)

---

## 📁 Structure du projet

```
├── config/        # Configuration Symfony
├── src/           # Code source (Controllers, Entities)
├── templates/     # Fichiers Twig (vues)
├── public/        # Fichiers publics (index.php)
├── migrations/    # Migrations base de données
└── .env           # Variables d'environnement
```

---

## ❗ Problèmes courants

### Erreur Twig "Variable does not exist"

➡️ Vérifier que la variable est bien envoyée depuis le contrôleur.

---

### Erreur accès refusé serveur

➡️ Vérifier le port utilisé ou relancer le serveur Symfony.

---

## 📌 Auteur

* Anthony Sitch

---

## 📜 Licence

Projet libre pour usage pédagogique.

```




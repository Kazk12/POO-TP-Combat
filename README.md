# POO-TP-Combat

## Description

Le projet **POO-TP-Combat** est une simulation de combat en utilisant la programmation orientée objet (POO) en PHP. Ce projet a pour objectif d'illustrer les principes fondamentaux de la POO dans le cadre d'un jeu de combat. Les joueurs contrôlent des personnages qui s'affrontent, et le jeu gère les interactions entre ces personnages à l'aide de classes et d'objets. L'implémentation met l'accent sur la création de classes, l'encapsulation, l'héritage et le polymorphisme.

## Fonctionnalités

- **Simulation de combat** : Deux personnages s'affrontent dans un combat.
- **Gestion des points de vie** : Chaque personnage a des points de vie qui diminuent avec les attaques.
- **Attaque et défense** : Les personnages peuvent attaquer, et certains d'entre eux peuvent se défendre.
- **Affichage des résultats** : Après chaque combat, le jeu affiche les résultats, y compris les points de vie restants.

## Prérequis

- **PHP 7.0+** pour faire tourner le script PHP.
- Un éditeur de texte pour modifier les fichiers.
- **Tailwind CSS** pour les styles (si utilisé pour l'interface).

## Structure du projet

Le projet contient les fichiers suivants :
- **`index.php`** : Fichier principal pour exécuter le jeu.
- **`src/`** : Contient les classes PHP qui définissent la logique du jeu, telles que les personnages, les attaques, etc.
- **`public/`** : Contient les fichiers publics comme les images et les fichiers CSS.
- **`utils/`** : Contient des fichiers utilitaires pour gérer des fonctionnalités comme la validation des entrées.

### Fichiers du projet :

- `index.php` : Point d'entrée du jeu.
- `src/` : Contient les classes et la logique de combat.
- `public/` : Contient les ressources statiques (images, styles).
- `utils/` : Contient des fonctions utilitaires.

## Logique de la Programmation Orientée Objet (POO)

Ce projet utilise la **programmation orientée objet (POO)** pour structurer la logique du jeu. Les concepts clés de la POO sont appliqués à travers :

- **Classes et Objets** : Chaque personnage et chaque élément du jeu (attaque, défense) est représenté par une classe. Les personnages sont des objets créés à partir de ces classes.
- **Encapsulation** : Les attributs et les méthodes des personnages (comme les points de vie et les attaques) sont encapsulés dans des classes pour garantir l'intégrité des données.
- **Héritage** : Des classes de base pour les personnages peuvent être étendues pour créer des personnages spécialisés avec des comportements différents.
- **Polymorphisme** : Les attaques et les actions des personnages peuvent être traitées de manière polymorphique, ce qui permet d'adapter les comportements selon les types de personnages.

## Technologies utilisées

- **PHP** : Langage utilisé pour la logique du jeu et la gestion des interactions.
- **HTML** :  Pour la structure de la page.
- **Tailwind CSS** :   Framework CSS pour faciliter le design de l'interface.
- **CSS** :  Pour la mise en forme de l'interface.

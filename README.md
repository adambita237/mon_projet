# YoGives - MVP web (PHP)

Prototype initial de la plateforme YoGives pour hébergement mutualisé (ex: LWS).

## Fonctionnalités livrées
- Landing page de présentation (concept, matching, inscription).
- Identité visuelle appliquée (palette officielle : `#8DA68A`, `#C8553D`, `#F5EDE0`).
- Formulaire d'inscription MVP (choix du rôle + email + mot de passe).
- Création de session et tableau de bord simple.

## Lancer en local
```bash
php -S 0.0.0.0:8000
```
Puis ouvrir `http://localhost:8000/index.php`.

## Déploiement LWS
1. Mettre tous les fichiers à la racine de l'hébergement via FTP/cPanel.
2. S'assurer que PHP 8.1+ est activé.
3. Définir `index.php` comme page d'accueil par défaut.
4. (Optionnel) Ajouter une base MySQL plus tard pour persister utilisateurs/dons.

## Prochaines étapes
- Base de données MySQL (users, donations, applications, verifications).
- Upload d'images pour les dons.
- Matching par critères géographiques.
- Workflow de validation des associations.
- Module entreprise (abonnement annuel RSE).

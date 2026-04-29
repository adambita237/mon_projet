<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}

$user = $_SESSION['user'];
?>
<!doctype html>
<html lang="fr">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Dashboard YoGives</title><link rel="stylesheet" href="styles.css"></head>
<body>
<main class="container section">
  <h2>Bienvenue sur YoGives</h2>
  <p><strong>Email :</strong> <?= htmlspecialchars($user['email'], ENT_QUOTES, 'UTF-8') ?></p>
  <p><strong>Rôle :</strong> <?= htmlspecialchars($user['role'], ENT_QUOTES, 'UTF-8') ?></p>
  <p>Votre compte est créé. Vous pouvez maintenant publier des dons, postuler ou compléter vos documents de vérification.</p>
  <a href="logout.php" class="btn btn-secondary">Se déconnecter</a>
</main>
</body>
</html>

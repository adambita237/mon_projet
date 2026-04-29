<?php
$stats = [
    'dons' => 1248,
    'beneficiaires' => 3892,
    'associations' => 214,
    'entreprises' => 36,
];
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>YoGives - Plateforme de dons en nature</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
<header class="topbar">
  <div class="container nav">
    <h1 class="logo">Yo<span>Gives</span></h1>
    <nav>
      <a href="#concept">Concept</a>
      <a href="#matching">Matching</a>
      <a href="#inscription">Inscription</a>
      <a href="#contact">Contact</a>
    </nav>
    <a class="btn btn-primary" href="#inscription">Faire un don</a>
  </div>
</header>

<section class="hero">
  <div class="container hero-grid">
    <div>
      <p class="kicker">Solidarité locale • Côte d'Ivoire (phase 1)</p>
      <h2>Vous donnez. <br />Quelqu'un revit.</h2>
      <p>Transformez vos objets inutilisés en opportunités humaines via une plateforme simple, géolocalisée et sécurisée.</p>
      <div class="hero-actions">
        <a class="btn btn-primary" href="#inscription">Publier un don</a>
        <a class="btn btn-secondary" href="#matching">Comment ça marche ?</a>
      </div>
    </div>
    <div class="card soft">
      <h3>Impact en direct</h3>
      <ul>
        <li><strong><?= $stats['dons'] ?></strong> dons publiés</li>
        <li><strong><?= $stats['beneficiaires'] ?></strong> bénéficiaires actifs</li>
        <li><strong><?= $stats['associations'] ?></strong> associations vérifiées</li>
        <li><strong><?= $stats['entreprises'] ?></strong> entreprises RSE partenaires</li>
      </ul>
    </div>
  </div>
</section>

<main class="container">
  <section id="concept" class="section">
    <h3>Un écosystème de dons 100% en nature</h3>
    <p>YoGives connecte donateurs, bénéficiaires, associations et entreprises autour de 5 priorités : réduction du gaspillage, solidarité locale, économie circulaire, impact social et engagement RSE.</p>
    <div class="grid-3">
      <article class="card"><h4>Particuliers</h4><p>Donnez ou recevez facilement vêtements, meubles, appareils ou fournitures.</p></article>
      <article class="card"><h4>Associations</h4><p>Validation documentaire obligatoire pour renforcer la confiance et limiter les fraudes.</p></article>
      <article class="card"><h4>Entreprises</h4><p>Forfait annuel, visibilité partenaire officiel et reporting d'impact RSE.</p></article>
    </div>
  </section>

  <section id="matching" class="section">
    <h3>Matching intelligent inspiré du swipe</h3>
    <ol>
      <li>Le donateur publie son don.</li>
      <li>Les bénéficiaires postulent.</li>
      <li>Le donateur swipe à gauche (refus) ou à droite (présélection).</li>
      <li>Sélection finale manuelle ou automatique par YoGives.</li>
    </ol>
    <p>Le mode automatique priorise la zone géographique, le besoin déclaré, la priorité sociale et la disponibilité logistique.</p>
  </section>

  <section id="inscription" class="section two-col">
    <div>
      <h3>Créer un compte</h3>
      <p>La consultation est libre. Pour agir (donner, postuler, être sélectionné), l'inscription est requise.</p>
      <ul>
        <li>Inscription classique : nom, prénom, email, téléphone, WhatsApp, adresse, zone.</li>
        <li>Connexion Google + finalisation du profil.</li>
        <li>Vérification email / téléphone / WhatsApp.</li>
      </ul>
    </div>
    <form class="card" method="post" action="connexion.php">
      <label for="role">Type de compte</label>
      <select id="role" name="role" required>
        <option value="donateur">Donateur</option>
        <option value="beneficiaire">Bénéficiaire</option>
        <option value="association">Association</option>
        <option value="entreprise">Entreprise partenaire</option>
      </select>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Mot de passe</label>
      <input type="password" id="password" name="password" required minlength="8">

      <button type="submit" class="btn btn-primary">Continuer</button>
    </form>
  </section>
</main>

<footer id="contact" class="footer">
  <div class="container">
    <p><strong>Signature :</strong> Chaleur humaine. Confiance locale. Impact réel.</p>
    <p>Palette : #8DA68A • #C8553D • #F5EDE0</p>
  </div>
</footer>
</body>
</html>

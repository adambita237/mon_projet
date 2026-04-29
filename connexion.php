<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php#inscription');
    exit;
}

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = $_POST['password'] ?? '';
$role = $_POST['role'] ?? 'beneficiaire';

if (!$email || strlen($password) < 8) {
    $_SESSION['flash_error'] = 'Veuillez fournir un email valide et un mot de passe de 8 caractères minimum.';
    header('Location: index.php#inscription');
    exit;
}

$_SESSION['user'] = [
    'email' => $email,
    'role' => $role,
    'created_at' => date('c'),
];

$_SESSION['flash_success'] = 'Compte initialisé avec succès. Prochaine étape : compléter le profil et vérifier vos contacts.';
header('Location: dashboard.php');
exit;

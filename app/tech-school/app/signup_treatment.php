<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    $lastname = htmlspecialchars(trim($_POST['lastname'])) ?? '';
    $firstname = htmlspecialchars(trim($_POST['firstname'])) ?? '';
    $email = htmlspecialchars($_POST['email']) ?? '';
    $password = $_POST['passwd'];
    $category = htmlspecialchars($_POST['category']);
    $gpdr = htmlspecialchars($_POST['gpdr'] ?? '');

    $_SESSION['data'] = compact('lastname', 'firstname', 'email', 'category', 'gpdr');

    if (empty($lastname) || empty($firstname) || empty($email) || empty($password) || empty($category) || empty($gpdr)) {
        $_SESSION['message'] = 'Veuillez remplir tout le champs';
        header('Location: signup.php');
        exit;
    }
    if (strlen($lastname) > 50 || strlen($firstname) > 50) {
        $_SESSION['errors']['lastname_firstname'] = 'Le nom et le prénom ne doivent pas dépasser 50 caractères';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errors']['email'] = 'L\'email doit être valide';
    }
    if (strlen($password) < 16) {
        $_SESSION['errors']['password'] = 'Le mot de passe doit contenir 16 caractères max';
    }
    $categories = ['student', 'parent', 'teacher', 'admin'];
    if(!in_array($category, $categories)){
        $_SESSION['errors']['category'] = 'Veuillez choisir une catégorie';
    }
    if($category === 'student'){
        $category = 4;
    }
    if($category === 'parent'){
        $category = 3;
    }
    if($category === 'teacher'){
        $category = 2;
    }
    if($category === 'admin'){
        $category = 1;
    }
    if(isset($_SESSION['errors'])){
        header('Location: signup.php');
        exit;
    }

    $hash = password_hash($password, PASSWORD_DEFAULT);

    require_once 'includes/dbconnect.php';

    $sql = 'INSERT INTO User(lastname, firstname, email, password, role_id) VALUES (:lastname, :firstname, :email, :password, :role_id);';

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':lastname', $lastname, PDO::PARAM_STR);
    $stmt->bindValue(':firstname', $firstname, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':password', $hash, PDO::PARAM_STR);
    $stmt->bindValue(':role_id', $category, PDO::PARAM_INT);
    if(!$stmt->execute()){
        echo 'failed';
    }
    $_SESSION['message'] = 'Inscription réussit 👍💾🖥️';
    header('Location: login.php');
    exit;
}
<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    session_start();

    $email = htmlspecialchars($_POST['email']) ?? '';
    $password = $_POST['password'] ?? '';
    $category = htmlspecialchars($_POST['category']);

    $_SESSION['data'] = compact('email', 'category');

    if(empty($email) || empty($password) || empty($category)){
        $_SESSION['message'] = 'Vous devez remplir tout le champs';
        header('Location: login.php');
        exit;
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['errors']['email'] = 'L\'email doit être valide';
    }
    if(strlen($password) < 10){
        $_SESSION['errors']['password'] = 'Le mot de passe doit faire plus de 10 ';
    }
    $categories = ['student', 'parent', 'teacher', 'admin'];
    if(!in_array($category, $categories)){
        $_SESSION['errors']['category'] = 'Veuillez choisir une catégorie';
    }

    if(isset($_SESSION['errors'])){
        header('Location: signup.php');
        exit;
    }

    require_once 'includes/dbconnect.php';

    $sql = 'SELECT * FROM User INNER JOIN Role ON User.role_id = Role.role_id WHERE email = :email;';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    if($stmt->execute()){
        $user = $stmt->fetch();
        if(!$user){
            $_SESSION['message'] = 'Une erreur est survenue';
            header('Location: login.php');
            exit;
        }
        $passVerify = password_verify($password, $user['password']);
        if(!$passVerify){
            $_SESSION['message'] = 'Une erreur est survenue';
            header('Location: login.php');
            exit;
        }

        $_SESSION['user'] = [
            'user_id' => $user['user_id'],
            'lastname' => $user['lastname'],
            'firstname' => $user['firstname'],
            'email' => $user['email'],
            'name' => $user['name']
        ];

        if($category === 'student'){
            header('Location: student.php');
            exit;
        }
        if($category === 'parent'){
            header('Location: adminBoard.php');
            exit;
        }
        if($category === 'teacher'){
            header('Location: teacher.php');
            exit;
        }
        if($category === 'admin'){
            header('Location: adminBoard.php');
            exit;
        }

    }
}

echo 'Bad request';
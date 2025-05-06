<?php

require_once '../includes/dbconnect.php';

// Function creating tables

function createTable($pdo): void
{
    $queries = [
        "DROP DATABASE IF EXISTS portfolio",
        "CREATE DATABASE portfolio",
        "USE portfolio",
        "CREATE TABLE IF NOT EXISTS contact(
            id INT PRIMARY KEY AUTO_INCREMENT,
            email VARCHAR(255) NOT NULL,
            subject VARCHAR(20) NOT NULL,
            message VARCHAR(1000) NOT NULL 
        )",
        "CREATE TABLE IF NOT EXISTS certificate(
            id INT PRIMARY KEY AUTO_INCREMENT,
            name VARCHAR(255) NOT NULL,
            school VARCHAR(100) NOT NULL
        )"
    ];
    foreach ($queries as $query){
        $pdo->exec($query);
    }
}

function insertIntoCertificat($pdo): void
{
    $certificats = [
        ['Coursera_SQL.pdf', 'coursera'],
        ['Coursera_google.pdf', 'coursera'],
        ['Coursera_FrontEnd.pdf' , 'coursera'],
        ['CV_resume.pdf' , 'Cv_personnel']
    ];
    $stmt = $pdo->prepare("INSERT INTO certificate (name, school) VALUES (?, ?)");
    foreach ($certificats as $certificat){
        $stmt->execute($certificat);
    }
}

createTable($pdo);
insertIntoCertificat($pdo);
echo 'Db initialise';
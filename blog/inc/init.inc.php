<?php

// connexion BDD

$host = 'mysql:host=localhost;dbname=blog'; 
$login = 'root'; 
$password = ''; 
$options = array (
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,  
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', 
);


$pdo = new PDO($host, $login, $password, $options);


// variable permettant d'afficher des messages utilisateur (vide par défaut)

$msg ='';

// on créer ou on ouvre la session
session_start();
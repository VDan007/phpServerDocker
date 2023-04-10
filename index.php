<?php

require'./functions.php';
//require './router.php';







$dsn= "mysql:host=172.27.0.2;port=3306;dbname=myapp;charset=utf8";
$pdo = new PDO($dsn ,'root','super-secret-password');

$statement = $pdo->prepare("SELECT * from posts");
$statement->execute();

$post = $statement->fetchAll(PDO::FETCH_ASSOC);

dd($post);
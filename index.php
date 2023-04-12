<?php
require './Database.php';
require'./functions.php';
//require './router.php';




$db = new Database();


$posts = $db->query("select * from posts where title >= 9")->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post){
    echo "<li>" . $post['title'] . "</li>";
}


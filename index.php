<?php

require'./functions.php';

$uri =  parse_url($_SERVER['REQUEST_URI'])['path'];

//dd( parse_url($url)['path'] );

$routes = [
    '/' => 'controllers/home.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'
];

if (array_key_exists($uri, $routes)){
    require $routes[$uri];
}




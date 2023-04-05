<?php

require'./functions.php';

$url =  $_SERVER['REQUEST_URI'];

//dd( parse_url($url)['path'] );

if($url === '/'){
    require'./controllers/home.php';
}else if($url ==='/about'){
    require'./controllers/about.php';
}else if($url === '/contact'){
    require'./controllers/contact.php';
}
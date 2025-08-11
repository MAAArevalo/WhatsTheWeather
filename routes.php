<?php
defined('APP_STARTED') or die('ACCESS DENIED');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
];



function routeController($uri, $routes){

    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    } else{
        require 'controllers/404.php';
    }
 
}

routeController($uri, $routes);
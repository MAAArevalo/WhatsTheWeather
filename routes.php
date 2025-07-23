<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
print_r($uri);

$routes = [
    '/' => 'controllers/index.php',
];



function routeController($uri, $routes){

    try {
        if(array_key_exists($uri, $routes)){
            require $routes[$uri];
        } else{
            require 'controllers/404.php';
        }
        
    } catch (Exception $e) {
        echo "Caught error: " . $e->getMessage();
    }
}

routeController($uri, $routes);
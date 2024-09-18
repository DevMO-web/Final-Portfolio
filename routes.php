<?php

//This grabs the URI that was requested on click. $uri = $_SERVER['REQUEST_URI'];
//We added parse_url to break the URL into an array. So it grabs the key, and not the added string at the end. $uri = parse_url($_SERVER['REQUEST_URI']);
//Path is added to grab the path key. Example: /home

$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);


//Routes Array

$routes = [
    '/' => 'controllers/home.php',
    '/home'=> 'controllers/home.php',
    '/project' => 'controllers/projects.php',
    '/expirement' => 'controllers/expirements.php',
    '/send' => 'controllers/sendMail.php',
];




function routeToController($uri,$routes){
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
        abort(404);
    }
}

function abort($code){
    http_response_code($code);

   
    require "views/errors/{$code}.php";

    die();
};

//This calls the function to work
routeToController($uri,$routes);
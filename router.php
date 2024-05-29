<?php


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];



$routes = [
    '/' => 'controllers/index.php',
    '/account' => 'controllers/account.php',
    '/adjustment' => 'controllers/adjustment.php',
    '/appro' => 'controllers/appro.php',
    '/book' => 'controllers/book.php',
    '/config' => 'controllers/config.php',
    '/fund' => 'controllers/fund.php',
    '/obligation' => 'controllers/obligation.php',
    '/payee' => 'controllers/payee.php',
    '/pr' => 'controllers/pr.php',
    '/releases' => 'controllers/releases.php',
    '/supplemental' => 'controllers/supplemental.php',
    '/user' => 'controllers/user.php',
    '/lgu' => 'controllers/lgu.php',
    '/office' => 'controllers/office.php',
    '/sector' => 'controllers/sector.php',
    '/fy' => 'controllers/fy.php',
    '/lce' => 'controllers/lce.php',
    '/budget' => 'controllers/budget.php',
];


function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    
    }
}


function abort($code = 404) {
    http_response_code($code);
    require "views/{$code}.php";

    die();
}


routeToController($uri, $routes);
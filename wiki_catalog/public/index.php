<?php

require_once '../vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];


$mappingAction = [
    'GET' => [
        '/tags' => [\Wiki\Catalog\Controller\Tags::class, 'getList']
    ],
    'POST' => [
        '/tags/create' => [\Wiki\Catalog\Controller\Tags::class, 'create']
    ]
];

list($controllerClass, $action) = $mappingAction[$method][$uri];

$controller = new $controllerClass();
$controller->$action();
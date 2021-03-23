<?php/*
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once '../vendor/autoload.php';
#code


$app = new \Slim\App([]);*/



$app->get('[/]', function (Request $request, Response $response) {    
    $response->getBody()->write("GET => Bienvenido!!! ,a SlimFramework  a");
    return $response;

});


$app->run();
<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require_once '../vendor/autoload.php';
#code


$app = new \Slim\App([]);


function InvetirPalabra($palabra = "HOLA"){
    $cantidad = count($palabra);
    $palabraInvertida = null;

    for($i=$cantidad;$i>$cantidad;$i--){
        $palabraInvertida += $palabra[$i];

    }
    return $palabra;
}

$app->get('[/]', function (Request $request, Response $response) {    
    $response->getBody()->write(InvetirPalabra());
    return $response;

});


$app->run();
<?php
require  __DIR__.'/vendor/autoload.php';
require __DIR__.'/config/containers.php';


use SON\Framework\Router;
use SON\Framework\Response;

$router = new Router();

require __DIR__.'/config/routes.php';

try
{
    $result = $router->run();
    $response = new Response();
    $params = [
        'container' => $container,
        'params' => $result['params']
    ];
    $response($result['action'], $params);
}
catch (\SON\Framework\Exceptions\HttpException $e)
{
    echo json_encode(['error' => $e->getMessage()]);
}



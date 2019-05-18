<?php
require  __DIR__.'/vendor/autoload.php';

use SON\Framework\Router;


$router = new Router();

$router->add('GET', '/', function(){
    return "Homepage";
});

$router->add('GET','/projetos/(\d+)', function($params){
    return "projetos :" . $params[1];
});

$router->add('GET', '/projetos', function(){
    return "projetos";
});

try
{
    echo $router->run();
}
catch (\SON\Framework\Exceptions\HttpException $e)
{
    echo json_encode(['error' => $e->getMessage()]);
}



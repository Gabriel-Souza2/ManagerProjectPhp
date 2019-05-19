<?php
require  __DIR__.'/vendor/autoload.php';

use SON\Framework\Router;


$router = new Router();

require __DIR__.'/config/containers.php';
require __DIR__.'/config/routes.php';

try
{
    echo $router->run();
}
catch (\SON\Framework\Exceptions\HttpException $e)
{
    echo json_encode(['error' => $e->getMessage()]);
}



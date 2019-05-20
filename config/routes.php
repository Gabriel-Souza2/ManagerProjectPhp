<?php

use App\Models\Users;


$router->add('GET', '/', function() use ($container){

    return "Homepage";
});

$router->add('GET','/users/(\d+)', "App\Controllers\UserController::show");

$router->add('GET', '/projetos', function(){
    return "projetos";
});
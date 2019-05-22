<?php

use App\Models\Users;


$router->add('GET', '/', 'App\Controllers\UserController::index');

$router->add('GET','/users/(\d+)', "App\Controllers\UserController::show");

$router->add('GET', '/projetos', function(){
    return "projetos";
});
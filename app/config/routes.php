<?php

use App\Models\Users;

$router->add('GET', '/', function() {
    return file_get_contents(__DIR__ . '/../../template/index.html');
});
$router->add('GET', '/users', 'App\Controllers\UserController::index');
$router->add('GET', '/users/(\d+)', 'App\Controllers\UserController::show');
$router->add('POST', '/users', 'App\Controllers\UserController::create');
$router->add('PUT', '/users/(\d+)', 'App\Controllers\UserController::update');
$router->add('DELETE', '/users/(\d+)', 'App\Controllers\UserController::delete');

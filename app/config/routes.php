<?php

use App\Models\Users;


$router->add('GET', '/users', 'App\Controllers\UserController::index');
$router->add('GET', '/users/(\d+)', 'App\Controllers\UserController::show');
$router->add('POST', '/users', 'App\Controllers\UserController::create');
$router->add('PUT', '/users/(\d+)', 'App\Controllers\UserController::update');
$router->add('DELETE', '/users/(\d+)', 'App\Controllers\UserController::delete');

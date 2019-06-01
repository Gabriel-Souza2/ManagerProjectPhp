<?php

use App\Models\Users;

$router->add('GET', '/', function() {
    return file_get_contents(__DIR__ . '/../../template/index.html');
});
$router->add('POST', '/auth/register', 'App\Controllers\UserController::register');
$router->add('POST', '/auth/token', 'App\Controllers\UserController::getToken');
$router->add('GET', '/api/me', function($c) {
    header('Content-Type: application/json');
    $data = (new App\Controllers\UserController)->getCurrentUser($c);

    return $data;
});

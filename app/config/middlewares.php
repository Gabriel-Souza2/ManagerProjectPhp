<?php


$app->middleware('before', function(){
    session_start();
});

$app->middleware('before', function(){
    //header('Content-Type: application/json');
});

$app->middleware('before', function($c){
    if(!preg_match('/^\/api\/*./', $c['router']->getCurrentUrl()))
    {
        return;
    }

    $data = (new App\Controllers\UserController)->getCurrentUser($c);

    $c['loggedUser'] = function() use ($data){
        return $data;
    };
});
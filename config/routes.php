<?php

$router->add('GET', '/', function() use ($container){
    return "Homepage";
});

$router->add('GET','/projetos/(\d+)', function($params) use ($container){
    return "projetos :" . $params[1];
});

$router->add('GET', '/projetos', function(){
    return "projetos";
});
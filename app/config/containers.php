<?php

use Pimple\Container;
use Zend\EventManager\EventManager;

$container['events'] = function(){
    return new EventManager();
};
$container['db'] = function() {
    $dsn = 'mysql:host=localhost;dbname=pp_project_manager';
    $username = 'root';
    $password = 'root';
    $options = [
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ];

    try{
        $pdo = new PDO($dsn, $username, $password, $options);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
    catch (\PDOException $e)
    {
        echo $e->getMessage();
    }
};
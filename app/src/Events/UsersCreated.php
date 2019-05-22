<?php

namespace App\Events;

class UsersCreated 
{
    public function __invoke($e)
    {
        $event = $e->getName();
        $params = $e->getParams();
        echo sprintf("Evento disparo: %s com os parametros: %s", $event, json_encode($params));
    }
}
<?php

namespace App\Controllers;

use App\Models\Users;

class UserController
{
    public function index()
    {
        return 'App está funcionando';
    }
    public function show($container, $request)
    {
        $user = new Users($container);
        $user->create(['name' => 'Gabriel']);
        return $user->get($request->attributes->get(1));
    }
}
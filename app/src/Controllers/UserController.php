<?php

namespace App\Controllers;

use App\Models\Users;

class UserController
{
    public function index($container)
    {
        $user = new Users($container);
        
        return $user->all();
    }

    public function show($container, $request)
    {
        $user = new Users($container);
        
        return $user->get(['id' => $request->attributes->get(1)]);
    }

    public function create($container, $request)
    {
        $user = new Users($container, $request);   
        return $user->create($request->request->all());
    }

    public function update($container, $request)
    {
        $user = new Users($container, $request);   
        return $user->update(['id' => $request->attributes->get(1)], $request->request->all());
    }
    
    public function delete($container, $request)
    {
        $user = new Users($container);
        return $user->delete(['id' => $request->attributes->get(1)]);
    }
}
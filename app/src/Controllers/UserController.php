<?php

namespace App\Controllers;

use App\Models\Users;
use Firebase\JWT\JWT;
use SON\Framework\CrudController;
use SON\Framework\Exceptions\HttpException;
class UserController
{
    public function register($container, $request)
    {
        return $container['users_model']->create($request->request->all());
    }

    public function getToken($c, $request)
    {
        $email = $request->request->get('email');
        $password = $request->request->get('password');

        $user = $c['users_model']->getByEmail($email);
        if(!$user)
        {
            throw new HttpException('Forbidden', 401);
        }

        if(!password_verify($password, $user['password']))
        {
            throw new HttpException('Forbidden', 401);
        }

        unset($user['password']);


        $data = [
            'iat' => time(),
            'exp' => time() + (60 * 60 * 24 * 360),
            'user' => $user
        ];

        $token = JWT::encode($data, $c['key_token']);
        
        return ['token' => $token];
    }

    public function getCurrentUser($c)
    {
        $token = getallheaders()['Authorization'] ?? null;

        if(!$token)
        {
            $token = filter_input(\INPUT_GET, 'token');
        }

        if(!$token)
        {
            throw new HttpException('Forbidden', 401);
        }

        try {

            $data = JWT::decode($token,  $c['key_token'], ['HS256']);
        }
        catch (\Exception $e)
        {
            throw new HttpException('Forbidden', 401);
        }

        return (array)$data;
    }
}
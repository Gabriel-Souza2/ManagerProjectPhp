<?php

namespace App\Controllers;

use App\Models\Users;
use SON\Framework\CrudController;

class UserController extends CrudController
{
    protected function getModel(): string
    {
        return 'users_model';
    }
}
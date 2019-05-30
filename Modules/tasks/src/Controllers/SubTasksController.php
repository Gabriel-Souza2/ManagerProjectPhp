<?php

namespace SON\Framework\Tasks\Controllers;

use SON\Framework\CrudController;

class SubTasksController extends CrudController
{
    protected function getModel(): string
    {
        return 'sub_tasks_model';
    }
}
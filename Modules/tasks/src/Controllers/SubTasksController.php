<?php

namespace SON\Framework\Tasks\Controllers;

use SON\Framework\CrudController;

class SubTasksController extends CrudController
{
    protected function getModel(): string
    {
        return 'sub_tasks_model';
    }

    public function listByTask($c, $request)
    {
        $id = $request->query->get('id');
        return $c['sub_tasks_model']->all(['task_id' => $id]);
    }
}
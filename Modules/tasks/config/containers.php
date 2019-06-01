<?php

$container['projects_model'] = function($c){
    $id = $c['loggedUser']['user']->id;
    $projects =  new \SON\Framework\Tasks\Models\Projects($c);
    $projects->user_id = $id;
    return $projects;
};

$container['tasks_model'] = function($c){
    $id = $c['loggedUser']['user']->id;
    $tasks = new \SON\Framework\Tasks\Models\Tasks($c);
    $tasks->user_id = $id;
    return $tasks;
};

$container['sections_model'] = function($c){
    $id = $c['loggedUser']['user']->id;
    $sections = new \SON\Framework\Tasks\Models\Sections($c);
    $sections->user_id = $id;
    return $sections;
};

$container['sub_tasks_model'] = function($c){
    $id = $c['loggedUser']['user']->id;
    $subTasks = new \SON\Framework\Tasks\Models\SubTasks($c);
    $subTasks->user_id = $id;
    return $subTasks;
};
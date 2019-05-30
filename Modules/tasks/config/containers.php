<?php

$container['projects_model'] = function($c){
    return new \SON\Framework\Tasks\Models\Projects($c);
};

$container['tasks_model'] = function($c){
    return new \SON\Framework\Tasks\Models\Tasks($c);
};

$container['sections_model'] = function($c){
    return new \SON\Framework\Tasks\Models\Sections($c);
};

$container['sub_tasks_model'] = function($c){
    return new \SON\Framework\Tasks\Models\SubTasks($c);
};
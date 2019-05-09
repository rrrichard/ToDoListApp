<?php

namespace ToDo\Factories;

use ToDo\Model\ToDoModel;

class ToDoModelFactory {

    public function __invoke($container)
    {
        $db = $container->get('dbConnection');
        return new ToDoModel($db);
    }
}
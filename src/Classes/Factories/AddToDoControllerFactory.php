<?php

namespace ToDo\Factories;

use Psr\Container\ContainerInterface;
use ToDo\Controllers\AddToDoController;

class AddToDoControllerFactory {

    public function __invoke(ContainerInterface $container)
    {
        $addTask = $container->get('ToDoModel');
        return new AddToDoController($addTask);
    }
}
<?php

namespace ToDo\Factories;

use Psr\Container\ContainerInterface;
use ToDo\Controllers\CompleteToDoController;

class CompleteToDoControllerFactory {

    public function __invoke(ContainerInterface $container)
    {
        $completedTask = $container->get('ToDoModel');
        return new CompleteToDoController($completedTask);
    }
}
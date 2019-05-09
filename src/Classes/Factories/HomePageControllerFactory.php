<?php

namespace ToDo\Factories;

use Psr\Container\ContainerInterface;
use ToDo\Controllers\HomePageController;

class HomePageControllerFactory {

    public function __invoke(ContainerInterface $container)
    {
        $renderer = $container->get('renderer');
        $toDoModel = $container->get('ToDoModel');
        return new HomePageController($renderer, $toDoModel);
    }
}
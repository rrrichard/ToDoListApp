<?php

namespace ToDo\Controllers;

use Slim\Views\PhpRenderer;
use ToDo\Model\ToDoModel;


class HomePageController {

    private $renderer;
    private $toDoModel;

    public function __construct(PhpRenderer $renderer, ToDoModel $toDoModel){
        $this->renderer = $renderer;
        $this->toDoModel = $toDoModel;
    }

    public function __invoke($request, $response, $args)
    {
        $args['toDoModel'] = $this->toDoModel->getTasks();
        $this->renderer->render($response, 'homepage.phtml', $args);
    }
}
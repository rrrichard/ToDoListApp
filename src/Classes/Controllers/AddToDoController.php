<?php

namespace ToDo\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use ToDo\Model\ToDoModel;

class AddToDoController {

    private $toDoModel;


    public function __construct(ToDoModel $toDoModel)
    {
        $this->toDoModel = $toDoModel;

    }

    public function __invoke(Request $request, Response $response, $args)
    {
        $newTask = $request->getParsedBody();
        $newTaskText = $newTask['add_form'];
        $this->toDoModel->addTasks($newTaskText);
        return $response->withRedirect('/');
    }
}
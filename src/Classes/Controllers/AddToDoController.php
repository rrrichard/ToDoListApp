<?php

namespace ToDo\Controllers;

use mysql_xdevapi\Exception;
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
        $date = $newTask['date'];
        $this->toDoModel->addTasks($newTaskText, $date);
        return $response->withRedirect('/');
    }
}
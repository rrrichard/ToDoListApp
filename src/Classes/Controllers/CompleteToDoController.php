<?php

namespace ToDo\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use ToDo\Model\ToDoModel;

class CompleteToDoController {

    private $toDoModel;

    public function __construct(ToDoModel $toDoModel)
    {
        $this->toDoModel = $toDoModel;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        $SelectedCompletedTask = $request->getParsedBody();
        $completedTask = $SelectedCompletedTask['completedId'];
        $this->toDoModel->completeTasks($completedTask);
        return $response->withRedirect('/');
        // TODO: Implement __invoke() method.
    }
}
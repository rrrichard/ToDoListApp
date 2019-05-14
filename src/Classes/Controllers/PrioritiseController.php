<?php

namespace ToDo\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use ToDo\Model\ToDoModel;

class PrioritiseController {

    private $toDoModel;

    public function __construct(ToDoModel $toDoModel)
    {
        $this->toDoModel = $toDoModel;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        $selectedPriority = $request->getParsedBody();
        $hiddenId = $selectedPriority['hiddenId'];
        $priorityId = $selectedPriority['priority'];
        $this->toDoModel->prioritiseTasks($priorityId, $hiddenId);
        return $response->withRedirect('/');
    }
}
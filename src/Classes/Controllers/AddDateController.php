<?php
namespace  ToDo\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use ToDo\Model\ToDoModel;

class AddDateController {
    private $toDoModel;

    public function __construct(ToDoModel $toDoModel)
    {
        $this->toDoModel = $toDoModel;
    }

    public function __invoke(Request $request, Response $response, $args)
    {
        $selectedDate = $request->getParsedBody();
        $SelectedCompletedTask = $request->getParsedBody();
        $date = $selectedDate['date'];
        $hiddenId = $SelectedCompletedTask['hiddenId'];
        $this->toDoModel->dateSelected($date, $hiddenId);
        return $response->withRedirect('/');
    }
}
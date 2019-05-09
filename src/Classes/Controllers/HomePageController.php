<?php

namespace ToDo\Controllers;

use Slim\Views\PhpRenderer;

class HomePageController {

    private $renderer;

    public function __construct(PhpRenderer $renderer){
        $this->renderer = $renderer;
    }

    public function __invoke($request, $response, $args)
    {
        // TODO: Implement __invoke() method.
        $this->renderer->render($response, 'homepage.phtml', $args);
    }
}
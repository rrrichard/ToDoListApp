<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', 'HomePageController');
    $app->post('/add', 'AddToDoController');
    $app->post('/completed','CompletedTask');
    $app->post('/prioritise','PrioritiseTask');

};

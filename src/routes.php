<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', 'HomePageController');
    $app->post('/add', 'AddToDoController');
    $app->post('/completed','CompletedTask');
    $app->post('/date', 'Date');

//    $app->post('/', function ($request, $response, $args){
//        $newTask = $request->getParam('add_form');
//    });



//    $app->get('/[{name}]', function (Request $request, Response $response, array $args) use ($container) {
//        // Sample log message
//        $container->get('logger')->info("Slim-Skeleton '/' route");
//
//        // Render index view
//        return $container->get('renderer')->render($response, 'index.phtml', $args);
//    });
};

<?php

$app->get('/', function ($request, $response, $args) {
    $name = 'alex';

    return $this->view->render($response, 'home.twig', [
        'name' => $name,
    ]);
});

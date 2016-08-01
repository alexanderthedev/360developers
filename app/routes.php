<?php

$app->get('/', function ($request, $response, $args) {
    echo 'home';
});


$app->get('/portfolio', function ($request, $response, $args) {
    echo 'portfolio';
});

$app->get('/project/{name}', function ($request, $response, $args) {
   echo $args['name'];
});
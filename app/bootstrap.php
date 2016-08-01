<?php

require_once '../vendor/autoload.php';

$container = new \Slim\Container;

$container['view'] = function ($c) {
    $view = new \Slim\Views\Twig('../resources/views');

    $view->addExtension(new \Slim\Views\TwigExtension(
        $c['router'],
        $c['request']->getUri()
    ));

    return $view;
};

$app = new \Slim\App($container);

require_once 'routes.php';

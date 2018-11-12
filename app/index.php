<?php
require('../vendor/autoload.php');

$app = new Silex\Application();

$app['debug'] = true;

// $app->register(new Silex\Provider\MonologServiceProvider(), array(
//   'monolog.logfile' => 'php://stderr',
// ));

// $app->register(new Silex\Provider\TwigServiceProvider(), array(
//     'twig.path' => __DIR__.'/views',
// ));


$app->get('/', function() use($app) {
    return "hello world";
});

$app->run();

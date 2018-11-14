<?php
require('../vendor/autoload.php');

$app = new Silex\Application();

$app['debug'] = true;

include './ResponseMock.php';

$app->get('/building/', function (Silex\Application $app) use ($building) {
    return $app->json($building);
});

$app->get('/static/', function (Silex\Application $app) use ($floorPictures) {
    return $app->json($floorPictures);
});

$app->run();

<?php

use Symfony\Component\HttpFoundation\Request;

require('../vendor/autoload.php');

$app = new Silex\Application();

$app['debug'] = true;

include './ResponseMock2.php';

$app->get('/building/', function (Request $request) use ($app, $building) {
    return $app->json($building);
});

$app->get('/static/', function (Request $request) use ($app, $floorPictures) {
    return $app->json($floorPictures);
});

//$fw = new FloydWarshall(24);

$app->get('/route/', function (Request $request) use ($app, $floorPictures) {
    $params = $request->query->all();
    return $app->json($params);
});

$app->run();

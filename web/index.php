<?php

use Symfony\Component\HttpFoundation\Request;

require('../vendor/autoload.php');
include './AppDi.php';

$app = new Silex\Application();
$app['debug'] = true;


$app->get('/building/', function (Request $request) use ($app, $mergedBuilding) {
    return $app->json($mergedBuilding);
});

$app->get('/static/', function (Request $request) use ($app, $floorPictures) {
    return $app->json($floorPictures);
});


$app->get('/route/', function (Request $request) use ($app, $fw) {
    $params = $request->query->all();

    $path = (new FloydWarshall($params['from'], $params['to']))->get_path();

    return $app->json($path);
});

$app->run();

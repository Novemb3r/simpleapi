<?php

use Symfony\Component\HttpFoundation\Request;

require('../vendor/autoload.php');
include './AppDi.php';

$app = new Silex\Application();
$app['debug'] = true;

$building = [];
$building['points'] = array_merge($floor0, $floor1, $floor2, $floor3, $floor4);

//$fw = new FloydWarshall(24);
//$fw->make_graph($building);
//$fw->matrix_create();
//$fw->floyd_warshall();

$app->get('/building/', function (Request $request) use ($app, $building) {
    return $app->json($building);
});

$app->get('/static/', function (Request $request) use ($app, $floorPictures) {
    return $app->json($floorPictures);
});

//$fw = new FloydWarshall(24);

$app->get('/route/', function (Request $request) use ($app, $fw) {
    $params = $request->query->all();

    //$path = $fw->get_path($params['from'], $params['to']);

    return $app->json($params);
});

$app->run();

<?php

use Symfony\Component\HttpFoundation\Request;

require('../vendor/autoload.php');
include './AppDi.php';

$app = new Silex\Application();
$app['debug'] = true;

//$building = [];
//$building['points'] = array_merge($floor0, $floor1, $floor2, $floor3, $floor4);
//$building['points'] = array_merge($floor2);

$fw = new FloydWarshall($mergedBuilding);
$fw->make_graph();
$fw->matrix_create();
$fw->floyd_warshall();

$app->get('/building/', function (Request $request) use ($app, $mergedBuilding) {
    return $app->json($mergedBuilding);
});

$app->get('/static/', function (Request $request) use ($app, $floorPictures) {
    return $app->json($floorPictures);
});


$app->get('/route/', function (Request $request) use ($app, $fw) {
    $params = $request->query->all();

    $path = $fw->get_path($params['from'], $params['to']);

    return $app->json($path);
});

$app->run();

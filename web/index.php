<?php
require('../vendor/autoload.php');

$app = new Silex\Application();

$app['debug'] = true;

include './ResponseMock.php';

$app->get('/', function (Silex\Application $app) use ($response) {
    return $app->json(['points' => $response]);
});

$app->get('/points/', function (Silex\Application $app) use ($responseNames) {
    return $app->json(['names' => $responseNames]);
});

$app->get('/points/{id}/', function (Silex\Application $app, $id) use ($response) {
    return $app->json($response[$id + 1]);
})
    ->assert('id', '\d+');

$app->get('/floors/{floorId}/', function (Silex\Application $app, $floorId) use ($response) {
    return $app->json(array_filter($response, function ($a) use ($floorId) {
        return ($a['floor'] == $floorId);
    }));
})
    ->assert('floorId', '\d+');

$app->run();

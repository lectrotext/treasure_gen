<?php
use Slim\Slim;

require 'vendor/autoload.php';

$app = new Slim(array(
    'debug' => true
));
$app->response->headers->set('Content-Type', 'application/json');

$app->get('/', function () {
    echo json_encode(array("title"=>"Treasure Generator"));
});

$app->get('/api/', function () {
    echo json_encode(array("title"=>"Treasure Generator"));
});

$app->run();

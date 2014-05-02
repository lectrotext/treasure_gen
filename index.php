<?php
$app = new \Slim\Slim();
$app->get('/', function () {
    echo "Treasure Generator";
});
$app->run();

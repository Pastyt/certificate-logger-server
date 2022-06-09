<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/../local/vendor/autoload.php';
$app = AppFactory::create();

$app->setBasePath('/api');

$app->post('/getMessage/', '\App\Api::getMessage');

$app->run();
<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/../../vendor/autoload.php';

// Instantiate the app
$settings = require __DIR__ . '/../../src/settings.php';
$app = new \Slim\App($settings);

require __DIR__ . '/../../src/dependencies.php';
require __DIR__ . '/../../src/middleware.php';
require __DIR__ . '/../../src/routes.php';

// Run app
$app->run();


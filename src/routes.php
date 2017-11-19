<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $this->logger->debug("/hello/{name}",$args);

    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->post('/hello/{name}', function (Request $request, Response $response, array $args) {
    $parsedBody = $request->getParsedBody();
    $this->logger->debug("[POST] /hello/{name}", $parsedBody);

    $data = array();
    $data['result'] = 'essai';

    return $response->withJson($data);
});

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

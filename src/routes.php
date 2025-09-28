<?php
use Slim\Http\Request;
use Slim\Http\Response;
// Routes

$app->options('/{routas:.+}', function ($request, $response, $args) {
   return $response;
});

require __DIR__ . '/routes/veiculo.php';
require __DIR__ . '/routes/autenticacao.php';

$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function($req, $res) {
    $handler = $this->notFoundHandler; // handle using the default Slim page not found handler
    return $handler($req, $res);
});

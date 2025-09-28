<?php
use Slim\Http\Request;
use Slim\Http\Response;
use Firebase\JWT\JWT;
use Tuupola\Middleware\JwtAuthentication;

// Application middleware


// e.g: $app->add(new \Slim\Csrf\Guard);


//usando um biblioteca jwt para autenticação, criamos um middleware para impossibilitar o acesso de pessoas não logandas nas nossas rotas
$app->add(new JwtAuthentication([
    "secret" => "123456789",           // mesma chave usada para criar o JWT
    "attribute" => "decoded_token_data", // onde os dados decodificados ficam
    "header" => "X-Token",             // ler o token do header X-Token
    "regexp" => "/(.*)/",              // pega o token completo
    "path" => "/api",                  // aplicar apenas nas rotas /api
    "ignore" => ["/api/token"]         // ignora a rota de geração de token
]));



/*
Neste middleware estamos enviado esse cabeçarios a cada nova requisição
a ideia é que a cada nova requisição nos iremos configurar a response esse cabeçarios
*/
$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});

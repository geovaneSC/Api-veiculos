<?php
use Slim\Http\Request;
use Slim\Http\Response;
use Firebase\JWT\JWT;


$app->post('/api/token', function(Request $request, Response $response){
    $dados = $request->getParsedBody();
    $senha = $dados['senha'] ?? null;

    $key = "123456789"; // chave secreta usada para assinar o JWT

    if($senha !== $key){
        return $response->withJson([
            'Error' => 'Token inválido'
        ], 401);
    }

    // Payload do JWT
    $payload = [
        'iss' => 'sua-api',         // emissor
        'iat' => time(),            // hora de criação
        'exp' => time() + 3600,     // expira em 1h
        'user' => 'cliente_api'     // informações adicionais
    ];

    $jwt = JWT::encode($payload, $key);

    return $response->withJson([
        'token' => $jwt
    ]);
});




?>
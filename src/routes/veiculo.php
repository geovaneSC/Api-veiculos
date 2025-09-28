<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Models\Carro;

$app->group('/api/v1', function(){

    $this->get('/veiculo/lista', function($requst, $response){
        $veiculos = Carro::get();

        if($veiculos->isEmpty()){
            return $response->withJson([
                'Erro' => 'Nenhum dado encontrado'
            ]);
        }

        return $response->withJson($veiculos);
    });

    //lista carros por Id
    $this->get('/veiculo/id/{id}', function($request, $response, $args){
        $id = Carro::find($args['id']);

       if(!$id){
        return $response->withJson([
            'Error' => 'Nenhum Id encontrado. Tente digitar identificadores maiores que 1'
        ], 404);
       }
        return $response->withJson($id);
    });
    //lista de carros por fabricante
    $this->get('/fabricante/{fabricante}', function($request, $response, $args){
        $fabricante = $args['fabricante'];
        $carros = Carro::where('fabricante','LIKE', $fabricante . '%')->get();

        if($carros->isEmpty()){
            return $response->withJson([
                'Error' => 'Nenhum Carro encontrado para este fabricante'
            ], 404);
        }
        return $response->withJson([$carros]);
    });
    //lista de carros por modelo
    $this->get('/modelo/{modelo}', function($requst, $response, $args){
        $modelos = $args['modelo'];
        $modeloCar = Carro::where('modelo', 'LIKE', $modelos . '%')->pluck('modelo');

        if($modeloCar->isEmpty()){
            return $response->withJson([
                'Error' => 'Nenhum Carro encontrado para este modelo'
            ], 404);
        }
        return $response->withJson([
            'Modelos' => $modeloCar
        ]);
    });

    $this->get('/veiculos/{veiculo}', function($request, $response, $args){
        $veiculo = $args['veiculo'];
        $veiculoCar = Carro::where('veiculo', 'LIKE', $veiculo . '%')->pluck('veiculo');
        
        if($veiculoCar->isEmpty()){
            return $response->withJson([ 
                'Error' => 'Nenhum veiculo encontrado'
            ], 404);
        }

        return $response->withJson([
            'veiculos' => $veiculoCar
        ]);
    });
});



?>
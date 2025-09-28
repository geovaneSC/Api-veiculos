<?php


//estamos fazendo essa verificaçõe para que não seja executado a criação da tabela do banco de dados pelo navegador, somente via CMD
if (PHP_SAPI != 'cli') {
   exit('Rodar via CLI');
}
// __DIR__ é uma constante magica utilizada para recuperar o caminho completo da pasta que está sendo executado
require __DIR__ . '/vendor/autoload.php';




// importando os dados do arquivo settings.php e passando para a variavel $settings
$settings = require __DIR__ . '/src/settings.php';
// Instanciando  app
$app = new \Slim\App($settings);


// importando os dados do arquivo dependencies.php pois dentro do mesmo contém o nosso container com a injeção de dependecia em db
require __DIR__ . '/src/dependencies.php';


$db = $container->get('db');
$schema = $db->schema();
$tabela = 'veiculos';


//Insert de teste


$db->table($tabela)->insert([
    'fabricante' => 'Audi',
    'modelo' => 'A7 motor 3.0 V6 TFSI',
    'veiculo' => 'A7',
    'created_at' => '2025-09-25',
    'updated_at' => '2025-09-22'
]);


$db->table($tabela)->insert([
    'fabricante' => 'Audi',
    'modelo' => 'A3 motor 2.0 TFSI de 204 cv',
    'veiculo' => 'A3',
    'created_at' => '2025-09-25',
    'updated_at' => '2025-09-22'
]);


?>

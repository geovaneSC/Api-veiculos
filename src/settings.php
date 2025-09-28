<?php
return [
    'settings' => [
        'displayErrorDetails' => true,

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
        ],
        //db
        'db' =>[
             // Tipo de driver (mysql, pgsql, sqlite, etc.)
            'driver' => 'mysql',
            // Host do servidor de banco de dados
            'host' => 'localhost',
            // Nome do banco de dados a ser usado
            'database' => 'veiculo',
            // Usuário do banco (aqui 'root' — apenas para desenvolvimento)
            'username' => 'root',
            // Senha do usuário do banco (vazia aqui — não recomendado em produção)
            'password' => '',
            // Charset da conexão — importante para codificação correta de caracteres (acentuação)
            'charset' => 'utf8',
            // Collation (regras de comparação/ordenamento de strings)
            'collation' => 'utf8_unicode_ci',
            // Prefixo para nomes de tabelas (útil se quiser prefixar todas as tabelas do app)
            'prefix' => '',

        ],
          'secretKey' => '79c597397e5ec79299ee5986a9e3356d9d1a93a4'

    ],
];

<?php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/phinx/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/phinx/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        // 'production' => [
        //     'adapter' => 'mysql',
        //     'host' => '',
        //     'name' => $_ENV['MYSQL_DATABASE'],
        //     'user' => $_ENV['MYSQL_USER'],
        //     'pass' => $_ENV['MYSQL_PASSWORD'],
        //     'port' => $_ENV['MYSQL_PORT'],
        //     'charset' => 'utf8',
        // ],
        'development' => [
            'adapter' => 'mysql',
            'host' => '127.0.0.1',
            'name' => $_ENV['MYSQL_DEV_DATABASE'],
            'user' => $_ENV['MYSQL_DEV_USER'],
            'pass' => $_ENV['MYSQL_DEV_PASSWORD'],
            'port' => $_ENV['MYSQL_DEV_PORT'],
            'charset' => 'utf8',
        ],
        'testing' => [
            'adapter' => '',
            'host' => '127.0.0.1',
            'name' => $_ENV['MYSQL_TEST_DATABASE'],
            'user' => $_ENV['MYSQL_TEST_USER'],
            'pass' => $_ENV['MYSQL_TEST_PASSWORD'],
            'port' => $_ENV['MYSQL_TEST_PORT'],
            'charset' => 'utf8',
        ]
    ],
    'version_order' => 'creation'
];

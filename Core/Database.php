<?php

use \App\Confing;
use \Illuminate\Database\Capsule\Manager as Capsule;


$capsule = new Capsule();

$capsule->addConnection([
    'driver' => getenv('DB_CONNECTION'),
    'host' => getenv('DB_HOST'),
    'port' => getenv('DB_PORT'),
    'database' => getenv('DB_DATABASE'),
    'username' => getenv('DB_USERNAME'),
    'password' => getenv('DB_PASSWORD'),
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci'
]);

/*$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'port' => '3306',
    'database' => 'mvcproject',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci'
]);*/
/*$capsule->addConnection([
    'driver' => 'mysql',
    'host' => Confing::DB_HOST,
    'port' => Confing::DB_PORT,
    'database' => Confing::DB_DATABASE,
    'username' => Confing::DB_USERNAME,
    'password' => Confing::DB_PASSWORD,
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci'
]);*/
$capsule->bootEloquent();
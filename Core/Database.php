<?php

use \App\Confing;
use \Illuminate\Database\Capsule\Manager as Capsule;


$capsule = new Capsule();

$capsule->addConnection([
    'driver' => env('DB_CONNECTION'),
    'host' => env('DB_HOST'),
    'port' => env('DB_PORT'),
    'database' => env('DB_DATABASE'),
    'username' => env('DB_USERNAME'),
    'password' => env('DB_PASSWORD'),
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
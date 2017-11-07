<?php

require "../vendor/autoload.php";

$router = new \Core\Router();
$router->add('/series' , [ 'uses' => 'Admin\SeriesController@index' ] );
$router->add('/series/{slug}' , 'SeriesController@serie');
$router->add('/series/{slug}/episode/{id}' , ['uses' =>'SeriesController@episode','namespace' => 'Admin' ]);

$url = $_SERVER["QUERY_STRING"] ;
$router->dispatch($url);

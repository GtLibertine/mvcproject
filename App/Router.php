<?php

$router = new \Core\Router();

$router->add('/series' , [ 'uses' => 'SeriesController@index' ] );
$router->add('/series/{slug}' , 'SeriesController@serie');
$router->add('/series/{slug}/episode/{id}' , ['uses' =>'SeriesController@episode' ]);

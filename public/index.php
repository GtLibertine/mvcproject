<?php

//echo $url = $_SERVER["QUERY_STRING"] ;
//require '../Core/Router.php';

require '../Vendor/autoload.php';
$router = new \Core\Router();

$router->add('/series' , [ 'uses' => 'SeriesController@index' ] );
$router->add('/series/{slug}' , 'SeriesController@serie');
$router->add('/series/{slug}/episode/{id}' , 'SeriesController@episode');



$url = $_SERVER["QUERY_STRING"] ;
echo "Request Url : " . $url . "<br>";

echo "<pre>";
    var_dump($router->getRoutes());
echo "</pre>";


if($router->match($url)) {
    echo "Actions : <br>";
    echo "<pre>";
    var_dump($router->getParams());
    echo "</pre>";

}else{
    echo "No route found for url {$url}";
}
/*$Ctr = new \App\Controllers\HomeController();
var_dump($Ctr);
echo "<br/>" ;

$route = new \App\Router();
var_dump($route);*/
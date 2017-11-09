<?php namespace Core;

use Philo\Blade\Blade;

class View
{
    public static function render($view ,$args = []){

       extract($args , EXTR_SKIP);

        $file = "../App/Views/{$view}.php";

        if(is_readable($file)){
            require $file;
        }else{
            throw new \Exception("$file not found");
        }

    }

    public static function renderTemplate($template , $args=[]){

        $view   =  realpath(__DIR__."/../App/Views/");
        $cash   =   realpath(__DIR__."/../storage/views");

        $blade = new Blade($view,$cash);
        return $blade->view()->make($template,$args)->render();

    }
}
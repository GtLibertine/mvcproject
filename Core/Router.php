<?php namespace Core;

class Router
{
    protected $routes = [];

    protected $params = [] ;

    protected $namespace = 'App\Controllers\\';

    public function add($route , $params )
    {

        $route = preg_replace('/^\//','',$route);

        $route = preg_replace('/\//','\\/',$route);
        $route = preg_replace('/\{([a-z]+)\}/' , '(?<\1>[a-z0-9-]+)' , $route);

        $route = '/^' . $route . '\/?$/i';

        if(is_string($params)) {
            list($AllParams['controller'] , $AllParams['method']) = explode('@' , $params);
        }

        if(is_array($params)) {
            list($AllParams['controller'] , $AllParams['method']) = explode('@' , $params['uses']);
            unset($params['uses']);
            $AllParams = array_merge($AllParams , $params);

        }

        $this->routes[$route] = $AllParams;
    }

    public function match($url)
    {
        foreach ($this->routes as $route => $params) {
            if(preg_match($route , $url , $matches)) {

                foreach ($matches as $key => $match) {

                    if(is_string($key)) {
                        $params[$key] = $match;
                    }
                }
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function dispatch($url)
    {
        if($this->match($url)) {

            $controller = $this->params['controller'];
            $controller =  $this->getNameSpace() . $controller;

            if(class_exists($controller)) {
                    echo $controller;
            } else {
                die("Controller class {$controller} not found");
            }

        } else {
            die("no route matched.");
        }
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function getParams()
    {
        return $this->params;
    }
    public function getNameSpace()
    {
        $namespace = $this->namespace;

        if(array_key_exists('namespace' , $this->params)) {
            $namespace .= $this->params['namespace'] . '\\';
        }

        return $namespace;
    }
}
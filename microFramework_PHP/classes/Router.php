<?php

// Router : créer les routes et trouve le contoller

// $route : associe la requête et son controlleur associé

class Router 
{
    private $request;

    private $routes = [     "home"      => ["controller" => "Home", "method" => "showHome"],

                        

                        ]; 

    public function __construct($request)
    {
       
        $this->request = $request;
    }

    public function getRoute()
    {
        $elements = explode('/', $this->request);
        return $elements[0];
    }

    public function getParams()  // renvoie dans le tableau params les données après  le / 
    {
        $elements = explode( '/' , $this->request);
        unset($elements[0]);

        for($i = 1; $i<count($elements); $i++)
        {
            $params[$elements[$i]] = $elements[$i+1];
            $i++;
        }

        if(!isset($params))
        {
            $params=null;
        }
        return $params;
    }

    public function renderController()
    {
        $route = $this->getRoute();
        $params = $this->getParams();
        

        if (key_exists ($route, $this->routes))
        {
            $controller = $this->routes[$route]['controller'];
            $method     = $this->routes[$route]['method'];

            $currentController = new $controller();
            $currentController->$method($params);

        }else{

            echo "404";
        }

    }

}

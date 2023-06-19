<?php

class Router{

    public $routes=[];

    public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware'=>null
        ];
        return $this;
    }


    public function get($uri, $controller){
        return $this->add('GET',$uri,$controller);
    }

    // public function route($uri,$method){
    //     foreach($this->routes as $route){
    //         if ($route['uri'] === $uri && $route['method'] === strtoupper($method)){
    //             // Middleware::resolve($route['middleware']);
    //             return require base_path('Http/controllers/' . $route["controller"]);
    //         }
    //     }
    //      $this->abort();
    // }
}
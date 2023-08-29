<?php
namespace App\Essentials;

// use Controllers\Controller;

class Router {


    private array $_routes;

    public function __construct() {
        $this->_routes = [];
    }

    /*callback = [$controller, $method]*/
    public function get($route, array $callback){

        $this->_routes["get"][$route] = $callback;

        return $this;

    }

    public function post($route, array $callback) {
        $this->_routes["post"][$route] = $callback;
        return $this;
    }

    // public function delete($route, array $callback) {
    //     $this->_routes["delete"][$route] = $callback;
    //     return $this;
    // }


    public function getRoutes() {
        return $this->_routes;
    }

    public function execute($path = ""){

        $path = $_SERVER['REQUEST_URI'] ?? "/";
        return $path;
    }


    public function resolve($route, $method) {

        // echo "<pre>";

        $params = [];
        if($method === "post") $params = $_POST;
        else if($method === "get") $params = $_GET;

        

        // var_dump($this->_routes);

        // var_dump($_SERVER['REQUEST_METHOD']);
        // var_dump($_SERVER['REQUEST_URI']);
        // var_dump($this->_routes[$method][$route]);

		return call_user_func($this->_routes[$method][$route], $params);
	}


}
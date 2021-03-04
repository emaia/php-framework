<?php

namespace App\Core;

class Router
{
    protected array $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function get($uri, $controller)
    {
        $this->routes['GET'][trim($uri, '/')] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][trim($uri, '/')] = $controller;
    }

    public static function load($file): Router
    {
        $router = new static;

        require $file;

        return $router;
    }

    /**
     * @param $uri
     * @param $requestType
     * @return mixed
     * @throws \Exception
     */
    public function direct($uri, $requestType)
    {

        try {
            if (array_key_exists($uri, $this->routes[$requestType])) {
                return $this->callAction(
                    ...explode('@', $this->routes[$requestType][$uri])
                );
            }
        } catch (\Exception $exception) {
            throw new \Exception('No route defined for this URI.');
        }
        return require 'views/404.view.php';
    }

    /**
     * @param $controller
     * @param $action
     * @return mixed
     * @throws \Exception
     */
    protected function callAction($controller, $action)
    {

        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (! method_exists($controller, $action)) {
            throw new \Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }
        return (new $controller)->$action();
    }
}

<?php

namespace App\Support\Http\Routing;

use Illuminate\Routing\Router;

/**
 * Class RouteFile
 * @package App\Support\Http\Routing
 */
abstract class RouteFile
{
    /**
     * @var Router
     */
    protected $router;

    /**
     * @var
     */
    protected $options;

    /**
     * RouteFile constructor.
     * @param array $options
     */
    public function __construct(array $options)
    {
        $this->router = app('router');
        $this->options = $options;
    }

    /**
     * Register routes
     */
    public function register()
    {
        $this->router->group($this->options, function () {
            $this->routes();
        });
    }

    /**
     * Define routes
     * @return mixed
     */
    abstract public function routes();
}

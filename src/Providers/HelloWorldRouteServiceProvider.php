<?php

namespace apiMarketPlaces\Providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class HelloWorldRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('hello','apiMarketPlaces\Controllers\ContentController@sayHello');
    }
}

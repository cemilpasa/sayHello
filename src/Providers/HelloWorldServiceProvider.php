<?php

namespace HelloWorld\Providers;


use Plenty\Plugin\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{



    public function register()
    {
        $this->getApplication()->register(HelloWorldRouteServiceProvider::class);
    }
}

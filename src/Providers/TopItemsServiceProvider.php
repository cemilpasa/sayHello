<?php

namespace apiMarketPlaces\Providers;


use Plenty\Plugin\ServiceProvider;

class TopItemsServiceProvider extends ServiceProvider
{



    public function register()
    {
        $this->getApplication()->register(TopItemsServiceProvider::class);
    }
}

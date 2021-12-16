<?php

namespace Cblink\Service\Product\Brand;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['brand'] = function($pimple){
            return new Client($pimple);
        };
    }
}
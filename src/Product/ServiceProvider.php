<?php

namespace Cblink\Service\Product\Product;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['product'] = function($pimple){
            return new Client($pimple);
        };

        $pimple['sku'] = function($pimple){
            return new SkuClient($pimple);
        };
    }
}
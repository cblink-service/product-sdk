<?php

namespace Cblink\Service\Product\Sku;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['sku'] = function($pimple){
            return new Client($pimple);
        };
    }
}
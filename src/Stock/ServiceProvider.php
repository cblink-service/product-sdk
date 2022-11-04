<?php

namespace Cblink\Service\Product\Stock;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['stock'] = function($pimple){
            return new Client($pimple);
        };
    }
}
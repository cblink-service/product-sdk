<?php

namespace Cblink\Service\Product\Attribute;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['attribute'] = function($pimple){
            return new Client($pimple);
        };
    }
}
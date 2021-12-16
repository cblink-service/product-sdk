<?php

namespace Cblink\Service\Product\Service;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['service'] = function($pimple){
            return new Client($pimple);
        };
    }
}
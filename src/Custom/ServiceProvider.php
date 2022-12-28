<?php

namespace Cblink\Service\Product\Custom;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['salesman'] = function($pimple){
            return new SalesmanClient($pimple);
        };
    }
}
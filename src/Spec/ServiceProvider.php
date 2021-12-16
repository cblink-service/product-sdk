<?php

namespace Cblink\Service\Product\Spec;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['spec'] = function($pimple){
            return new Client($pimple);
        };
    }
}
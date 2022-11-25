<?php

namespace Cblink\Service\Product\Special;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['special'] = function($pimple){
            return new Client($pimple);
        };
    }
}
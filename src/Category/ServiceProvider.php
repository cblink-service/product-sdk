<?php

namespace Cblink\Service\Product\Category;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['category'] = function($pimple){
            return new Client($pimple);
        };
    }
}
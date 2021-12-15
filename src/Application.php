<?php

namespace Cblink\Service\Product;

use Cblink\Service\Foundation\Container;
use Hyperf\Utils\Collection;

/**
 * @property-read Collection $config
 * @property-read \GuzzleHttp\Client $client
 * @property-read \Cblink\Service\Foundation\AccessToken $access_token
 *\
 * @property-read Product\Client $product
 */
class Application extends Container
{
    /**
     * @var array
     */
    protected array $providers = [
        Kernel\ServiceProvider::class,
        Product\ServiceProvider::class,
    ];
}
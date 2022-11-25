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
 * @property-read Brand\Client $brand
 * @property-read Category\Client $category
 * @property-read Attribute\Client $attribute
 * @property-read Spec\Client $spec
 * @property-read Service\Client $service
 * @property-read Sku\Client $sku
 * @property-read Stock\Client $stock
 *
 * @property-read Salesman\Client $salesman
 *
 * @property-read Special\Client $special
 */
class Application extends Container
{
    /**
     * @var array
     */
    protected array $providers = [
        Kernel\ServiceProvider::class,
        Product\ServiceProvider::class,
        Brand\ServiceProvider::class,
        Category\ServiceProvider::class,
        Attribute\ServiceProvider::class,
        Spec\ServiceProvider::class,
        Service\ServiceProvider::class,
        Sku\ServiceProvider::class,
        Salesman\ServiceProvider::class,
        Stock\ServiceProvider::class,
        Special\ServiceProvider::class,
    ];
}
<?php

namespace Cblink\Service\Product\Kernel;

class AccessToken extends \Cblink\Service\Foundation\AccessToken
{
    public function getBaseUrl()
    {
        return $this->app->config['idaas_url'];
    }
}
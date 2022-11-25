<?php

namespace Cblink\Service\Product\Special;

use Cblink\Service\Product\Kernel\BaseApi;

class Client extends BaseApi
{
    /**
     * 商品计算
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function calc(array $query = [])
    {
        return $this->httpGet('/special/calc', $query);
    }

}
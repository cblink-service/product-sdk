<?php

namespace Cblink\Service\Product\Stock;

use Cblink\Service\Product\Kernel\BaseApi;

class Client extends BaseApi
{
    /**
     * 增库存
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function increase(array $data = [])
    {
        return $this->httpPost('/stock/increase', $data);
    }

    /**
     * 扣库存
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function reduce(array $data = [])
    {
        return $this->httpPost('/stock/reduce', $data);
    }
}
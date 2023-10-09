<?php

namespace Cblink\Service\Product\Statistics;

use Cblink\Service\Product\Kernel\BaseApi;

class Client extends BaseApi
{

    /**
     * 获取统计信息
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getProductStatistics(array $query=[])
    {
        return $this->httpGet('/statistics/product', $query);
    }

    /**
     * 计入统计
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function increase(array $data = [])
    {
        return $this->httpPost('/statistics/product', $data);
    }

}

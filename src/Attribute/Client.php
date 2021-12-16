<?php

namespace Cblink\Service\Product\Attribute;

use Cblink\Service\Product\Kernel\BaseApi;

class Client extends BaseApi
{

    /**
     * 属性列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function lists(array $query = [])
    {
        return $this->httpGet('/attribute', $query);
    }

    /**
     * 创建属性
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(array $data = [])
    {
        return $this->httpPost('/attribute', $data);
    }

    /**
     * 创建属性值
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createValue(array $data = [])
    {
        return $this->httpPost('/attribute/value', $data);
    }

    /**
     * 统计属性数量
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function count(array $query = [])
    {
        return $this->httpGet('/attribute/data/count', $query);
    }

}
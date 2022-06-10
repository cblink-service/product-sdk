<?php

namespace Cblink\Service\Product\Sku;

use Cblink\Service\Product\Kernel\BaseApi;
use Hyperf\Utils\Arr;

/**
 * 商品api
 */
class Client extends BaseApi
{

    /**
     * sku列表搜索
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function lists(array $query)
    {
        return $this->httpGet('/sku', $query);
    }

    /**
     * sku详情
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($id, array $query = [])
    {
        return $this->httpGet(sprintf('/sku/%s', $id), $query);
    }

    /**
     * 通过unionid查询sku信息
     *
     * @param $unionId
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function showByUnionId($unionId, array $query = [])
    {
        return $this->httpGet(sprintf('/sku/union/%s', $unionId), $query);
    }
}
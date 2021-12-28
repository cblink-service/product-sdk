<?php

namespace Cblink\Service\Product\Product;

use Cblink\Service\Product\Kernel\BaseApi;

/**
 * 商品api
 */
class Client extends BaseApi
{

    /**
     * 商品列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function lists(array $query = [])
    {
        return $this->httpGet('/product', $query);
    }

    /**
     * 创建商品
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(array $data = [])
    {
        return $this->httpPost('/product', $data);
    }

    /**
     * 修改商品
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update($id, array $query = [])
    {
        return $this->httpPut(sprintf('/product/%s', $id), $data);
    }

    /**
     * 获取商品详情
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($id, array $query = [])
    {
        return $this->httpGet(sprintf('/product/%s', $id), $query);
    }

    /**
     * 获取商品SKU
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getSku($id, array $query = [])
    {
        return $this->httpGet(sprintf('/product/%s/sku', $id), $query);
    }

    /**
     * 获取商品规格
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getSpec($id, array $query = [])
    {
        return $this->httpGet(sprintf('/product/%s/spec', $id), $query);
    }

    /**
     * 获取商品属性
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAttribute($id, array $query = [])
    {
        return $this->httpGet(sprintf('/product/%s/attribute', $id), $query);
    }

    /**
     * 获取商品属性
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getContent($id, array $query = [])
    {
        return $this->httpGet(sprintf('/product/%s/content', $id), $query);
    }

    /**
     * 获取商品附加品
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getService($id, array $query = [])
    {
        return $this->httpGet(sprintf('/product/%s/service', $id), $query);
    }

    /**
     * 获取商品资源
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getSource($id, array $query = [])
    {
        return $this->httpGet(sprintf('/product/%s/source', $id), $query);
    }

    /**
     * 修改商品状态
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function changeStatus(array $data = [])
    {
        return $this->httpPost('/product/status', $data);
    }
}
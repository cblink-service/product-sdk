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
    public function update($id, array $data = [])
    {
        return $this->httpPut(sprintf('/product/%s', $id), $data);
    }

    /**
     * 删除商品
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function destroy($id, array $query = [])
    {
        return $this->httpDelete(sprintf('/product/%s', $id), $query);
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
     * 同步商品
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function sync(array $data = [])
    {
        return $this->httpPost('/product/sync', $data);
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
    public function getAddons($id, array $query = [])
    {
        return $this->httpGet(sprintf('/product/%s/addons', $id), $query);
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
     * 获取运费模版
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getFreight($id, array $query = [])
    {
        return $this->httpGet(sprintf('/product/%s/freight-template', $id), $query);
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

    /**
     * 批量修改SKU信息
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function batchUpdateSku($id, array $data = [])
    {
        return $this->httpPut(sprintf('/product/%s/sku', $id), $data);
    }

    /**
     * 导入
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function import(array $data = [])
    {
        return $this->httpPost('/product/import', $data);
    }

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
    public function productStatistics(array $data = [])
    {
        return $this->httpPost('/statistics/product', $data);
    }
}
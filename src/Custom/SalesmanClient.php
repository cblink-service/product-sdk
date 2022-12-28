<?php

namespace Cblink\Service\Product\Custom;

use Cblink\Service\Product\Kernel\BaseApi;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class SalesmanClient extends BaseApi
{
    /**
     * 佣金商品列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function index(array $query = [])
    {
        return $this->httpGet('/custom/salesman/product', $query);
    }

    /**
     * 添加商品佣金
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function store(array $data = [])
    {
        return $this->httpPost('/custom/salesman/product', $data);
    }

    /**
     * 修改商品佣金
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update($id, array $data = [])
    {
        return $this->httpPut(sprintf('/custom/salesman/product/%s', $id), $data);
    }

    /**
     * 批量修改商品佣金
     *
     * @param array $data
     * @return array|ResponseInterface|string
     * @throws GuzzleException
     */
    public function batchUpdate(array $data = [])
    {
        return $this->httpPut('/custom/salesman/batch/product', $data);
    }

    /**
     * 删除商品佣金
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function destroy($id, array $query = [])
    {
        return $this->httpDelete(sprintf('/custom/salesman/product/%s', $id), $query);
    }

    /**
     * 商品详情
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($id, array $query = [])
    {
        return $this->httpGet(sprintf('/custom/salesman/product/%s', $id), $query);
    }

    /**
     * 商品配置
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function config(array $query = [])
    {
        return $this->httpGet('/custom/salesman/config', $query);
    }
}
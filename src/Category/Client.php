<?php

namespace Cblink\Service\Product\Category;

use Cblink\Service\Product\Kernel\BaseApi;

class Client extends BaseApi
{
    /**
     * 分类列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function lists(array $query = [])
    {
        return $this->httpGet('/category', $query);
    }

    /**
     * 分类详情
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($id, array $query = [])
    {
        return $this->httpGet(sprintf('/category/%s', $id), $query);
    }

    /**
     * 创建分类
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(array $data = [])
    {
        return $this->httpPost('/category', $data);
    }

    /**
     * 编辑分类
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update($id, array $data = [])
    {
        return $this->httpPut(sprintf('/category/%s', $id), $data);
    }

    /**
     * 删除分类
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function destroy($id, array $query = [])
    {
        return $this->httpDelete(sprintf('/category/%s', $id), $query);
    }

    /**
     * 修改状态
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateStatus($id, array $data = [])
    {
        return $this->httpPut(sprintf('/category/%s/status', $id), $data);
    }

    /**
     * 统计分类数量
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function count(array $query = [])
    {
        return $this->httpGet('/category/data/count', $query);
    }

}
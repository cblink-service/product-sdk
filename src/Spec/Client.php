<?php

namespace Cblink\Service\Product\Spec;

use Cblink\Service\Product\Kernel\BaseApi;

class Client extends BaseApi
{

    /**
     * 规格列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function lists(array $query = [])
    {
        return $this->httpGet('/spec', $query);
    }

    /**
     * 创建规格
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(array $data = [])
    {
        return $this->httpPost('/spec', $data);
    }

    /**
     * 编辑规格
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update($id, array $data = [])
    {
        return $this->httpPut(sprintf('/spec/%s', $id), $data);
    }

    /**
     * 删除规格
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function destroy($id, array $query = [])
    {
        return $this->httpDelete(sprintf('/spec/%s', $id), $query);
    }

    /**
     * 规格值列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function listsValue(array $query = [])
    {
        return $this->httpGet('/spec/value', $query);
    }

    /**
     * 创建规格值
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createValue(array $data = [])
    {
        return $this->httpPost('/spec/value', $data);
    }

    /**
     * 编辑规格值
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateValue($id, array $data = [])
    {
        return $this->httpPut(sprintf('/spec/value/%s', $id), $data);
    }

    /**
     * 删除规格值
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function destroyValue($id, array $query = [])
    {
        return $this->httpDelete(sprintf('/spec/value/%s', $id), $query);
    }
}
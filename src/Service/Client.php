<?php

namespace Cblink\Service\Product\Service;

use Cblink\Service\Product\Kernel\BaseApi;

class Client extends BaseApi
{
    /**
     * 附加品列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function lists(array $query = [])
    {
        return $this->httpGet('/service', $query);
    }

    /**
     * 创建附加品
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(array $data = [])
    {
        return $this->httpPost('/service', $data);
    }

    /**
     * 修改附加品
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function update($id, array $data = [])
    {
        return $this->httpPut(sprintf('/service/%s', $id), $data);
    }

    /**
     * 删除附加品
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function destroy($id, array $query = [])
    {
        return $this->httpDelete(sprintf('/service/%s', $id), $query);
    }

    /**
     * 获取附加品组
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function listsGroup(array $query = [])
    {
        return $this->httpGet('/service/group', $query);
    }

    /**
     * 新增附加品组
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createGroup(array $data = [])
    {
        return $this->httpPost('/service/group', $data);
    }

    /**
     * 修改附加品组
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateGroup($id, array $data = [])
    {
        return $this->httpPut(sprintf('/service/group/%s', $id), $data);
    }

    /**
     * 删除附加品组
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function destroyGroup($id, array $query = [])
    {
        return $this->httpDelete(sprintf('/service/group/%s', $id), $query);
    }
}
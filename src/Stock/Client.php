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

    /**
     * 新增出入库单
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createStockOrder(array $data = [])
    {
        return $this->httpPost('/stock-order', $data);
    }

    /**
     * 出入库单列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function stockOrderList(array $query = [])
    {
        return $this->httpGet('/stock-order', $query);
    }

    /**
     * 出入库单详情
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function stockOrderShow($id, array $query = [])
    {
        return $this->httpGet(sprintf('/stock-order/%s', $id), $query);
    }

    /**
     * 出入库单商品列表
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function stockOrderProductList($id, array $query = [])
    {
        return $this->httpGet(sprintf('/stock-order/%s/product', $id), $query);
    }

    /**
     * SKU最新采购价列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function skuPurchasePriceList(array $query = [])
    {
        return $this->httpGet('/stock-order/sku/purchase/price', $query);
    }
}
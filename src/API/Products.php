<?php

declare(strict_types=1);

/*
 * This file is part of GDAX PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\GDAX\API;

class Products extends AbstractAPI
{
    /**
     * @see https://docs.gdax.com/?php#get-products
     *
     * @return array
     */
    public function all(): array
    {
        return $this->get('products');
    }

    /**
     * @see https://docs.gdax.com/?php#get-product-order-book
     *
     * @param int $id
     *
     * @return array
     */
    public function orderBook(int $id): array
    {
        return $this->get("products/{$id}/book");
    }

    /**
     * @see https://docs.gdax.com/?php#get-product-ticker
     *
     * @param int $id
     *
     * @return array
     */
    public function ticker(int $id): array
    {
        return $this->get("products/{$id}/ticker");
    }

    /**
     * @see https://docs.gdax.com/?php#get-trades
     *
     * @param int $id
     *
     * @return array
     */
    public function trades(int $id): array
    {
        return $this->get("products/{$id}/trades");
    }

    /**
     * @see https://docs.gdax.com/?php#get-historic-rates
     *
     * @param int   $id
     * @param array $params
     *
     * @return array
     */
    public function candles(int $id, array $params): array
    {
        return $this->get("products/{$id}/candles", $params);
    }

    /**
     * @see https://docs.gdax.com/?php#get-24hr-stats
     *
     * @param int $id
     *
     * @return array
     */
    public function stats(int $id): array
    {
        return $this->get("products/{$id}/stats");
    }
}

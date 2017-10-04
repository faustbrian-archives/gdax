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

class Orders extends AbstractAPI
{
    /**
     * @see https://docs.gdax.com/?php#place-a-new-order
     *
     * @param array $params
     *
     * @return array
     */
    public function place(array $params)
    {
        return $this->post('orders', $params);
    }

    /**
     * @see https://docs.gdax.com/?php#cancel-an-order
     *
     * @param int $id
     *
     * @return array
     */
    public function cancel(int $id): array
    {
        return $this->delete("orders/{$id}");
    }

    /**
     * @see https://docs.gdax.com/?php#cancel-all
     *
     * @param array $params
     *
     * @return array
     */
    public function cancelAll(array $params): array
    {
        return $this->delete('orders', $params);
    }

    /**
     * @see https://docs.gdax.com/?php#list-orders
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params)
    {
        return $this->get('orders', $params);
    }

    /**
     * @see https://docs.gdax.com/?php#get-an-order
     *
     * @param int $id
     *
     * @return array
     */
    public function details(int $id): array
    {
        return $this->get("orders/{$id}");
    }
}

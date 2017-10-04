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

class CoinbaseAccounts extends AbstractAPI
{
    /**
     * @see https://docs.gdax.com/?php#list-accounts59
     *
     * @return array
     */
    public function all()
    {
        return $this->post('coinbase-accounts');
    }
}

<?php

declare(strict_types=1);

/*
 * This file is part of GDAX PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\GDAX\API;

class Deposits extends AbstractAPI
{
    /**
     * @see https://docs.gdax.com/?php#coinbase
     *
     * @param array $params
     *
     * @return array
     */
    public function coinbase(array $params)
    {
        return $this->post('deposits/coinbase-method', $params);
    }
}

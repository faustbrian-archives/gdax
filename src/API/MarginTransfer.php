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

class MarginTransfer extends AbstractAPI
{
    /**
     * @see https://docs.gdax.com/?php#margin-transfer
     *
     * @param array $params
     *
     * @return array
     */
    public function transfer(array $params)
    {
        return $this->post('profiles/margin-transfer', $params);
    }
}

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

class Position extends AbstractAPI
{
    /**
     * @see https://docs.gdax.com/?php#position
     *
     * @return array
     */
    public function profile()
    {
        return $this->get('position');
    }

    /**
     * @see https://docs.gdax.com/?php#close
     *
     * @param array $params
     *
     * @return array
     */
    public function close(array $params)
    {
        return $this->post('position/close', $params);
    }
}

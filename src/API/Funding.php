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

class Funding extends AbstractAPI
{
    /**
     * @see https://docs.gdax.com/?php#list-fundings
     *
     * @return array
     */
    public function all()
    {
        return $this->get('funding');
    }

    /**
     * @see https://docs.gdax.com/?php#repay
     *
     * @param array $params
     *
     * @return array
     */
    public function repay(array $params)
    {
        return $this->post('funding/repay', $params);
    }
}

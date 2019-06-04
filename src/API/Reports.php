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

class Reports extends AbstractAPI
{
    /**
     * @see https://docs.gdax.com/?php#create-a-new-report
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params): array
    {
        return $this->post('reports', $params);
    }

    /**
     * @see https://docs.gdax.com/?php#get-report-status
     *
     * @param int $id
     *
     * @return array
     */
    public function status(int $id): array
    {
        return $this->get("reports/{$id}");
    }
}

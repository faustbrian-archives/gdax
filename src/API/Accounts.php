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

class Accounts extends AbstractAPI
{
    /**
     * @see https://docs.gdax.com/?php#list-accounts
     *
     * @return array
     */
    public function all()
    {
        return $this->get('accounts');
    }

    /**
     * @see https://docs.gdax.com/?php#get-an-account
     *
     * @param int $id
     *
     * @return array
     */
    public function details(int $id): array
    {
        return $this->get("accounts/{$id}");
    }

    /**
     * @see https://docs.gdax.com/?php#get-account-history
     *
     * @param int $id
     *
     * @return array
     */
    public function ledger(int $id): array
    {
        return $this->get("accounts/{$id}/ledger");
    }

    /**
     * @see https://docs.gdax.com/?php#get-holds
     *
     * @param int $id
     *
     * @return array
     */
    public function holds(int $id): array
    {
        return $this->get("accounts/{$id}/holds");
    }
}

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

namespace BrianFaust\GDAX;

class Client
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $secret;

    /**
     * @var string
     */
    private $passphrase;

    /**
     * Create a new client instance.
     *
     * @param string $key
     * @param string $secret
     * @param string $passphrase
     */
    public function __construct(string $key, string $secret, string $passphrase)
    {
        $this->key = $key;
        $this->secret = $secret;
        $this->passphrase = $passphrase;
    }

    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $class = "BrianFaust\\GDAX\\API\\{$name}";

        return new $class($this->key, $this->secret, $this->passphrase);
    }
}

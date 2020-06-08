<?php

namespace BeyondCode\LaravelWebSockets\WebSockets\Channels;

use Ratchet\ConnectionInterface;
use BeyondCode\LaravelWebSockets\WebSockets\Exceptions\InvalidSignature;
use stdClass;

class PrivateChannel extends Channel
{
    /**
     * @throws InvalidSignature
     */
    public function subscribe(ConnectionInterface $connection, stdClass $payload)
    {
        $this->verifySignature($connection, $payload);

        parent::subscribe($connection, $payload);
    }
}

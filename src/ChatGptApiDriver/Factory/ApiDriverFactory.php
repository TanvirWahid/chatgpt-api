<?php

namespace Tanvir\ChatgptApi\ChatGptApiDriver\Factory;

use Tanvir\ChatgptApi\Contracts\ApiCommunicatorInterface;

class ApiDriverFactory
{
    public function create($type): ApiCommunicatorInterface
    {
        $communicator = config('chat-gpt.drivers.' . $type);

        if (empty($communicator)) {
            throw new \Exception('Api communicator of type ' . $type . ' not defined');
        }

        return app()->make($communicator);
    }
}

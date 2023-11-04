<?php

namespace Tanvir\ChatgptApi\Contracts;

interface ApiCommunicatorInterface
{
    public function sendRequest(ApiParameterInterface $apiParameter):ApiResponseInterface;
}

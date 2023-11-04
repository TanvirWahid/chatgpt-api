<?php

namespace Tanvir\ChatgptApi\Contracts;

interface ApiResponseInterface
{
    public function getResponse():string;
    public function setResponse(string $response);
}

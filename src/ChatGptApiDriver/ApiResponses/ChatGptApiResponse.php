<?php

namespace Tanvir\ChatgptApi\ChatGptApiDriver\ApiResponses;

use Tanvir\ChatgptApi\Contracts\ApiResponseInterface;

class ChatGptApiResponse implements ApiResponseInterface
{
    protected string $apiResponse;

    /**
     * @param $apiResponse
     */
    public function __construct(string $apiResponse)
    {
        $this->apiResponse = $apiResponse;
    }

    public function getResponse(): string
    {
        return $this->apiResponse;
    }

    public function setResponse(string $response)
    {
        $this->apiResponse = $response;
    }


}

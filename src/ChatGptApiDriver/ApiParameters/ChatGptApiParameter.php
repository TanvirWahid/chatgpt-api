<?php

namespace Tanvir\ChatgptApi\ChatGptApiDriver\ApiParameters;

use Tanvir\ChatgptApi\Contracts\ApiParameterInterface;

class ChatGptApiParameter implements ApiParameterInterface
{
    protected $prompt;

    /**
     * @param $prompt
     */
    public function __construct(string $prompt)
    {
        $this->prompt = $prompt;
    }

    public function getPrompt(): string
    {
        return $this->prompt;
    }

    public function setPrompt(string $prompt)
    {
        $this->prompt = $prompt;
    }

}

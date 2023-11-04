<?php

namespace Tanvir\ChatgptApi\Contracts;

interface ApiParameterInterface
{
    public function getPrompt():string;
    public function setPrompt(string $prompt);
}

<?php

namespace Tanvir\ChatgptApi\ChatGptApiDriver;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Tanvir\ChatgptApi\ChatGptApiDriver\ApiResponses\ChatGptApiResponse;
use Tanvir\ChatgptApi\Contracts\ApiCommunicatorInterface;
use Tanvir\ChatgptApi\Contracts\ApiParameterInterface;
use Tanvir\ChatgptApi\Contracts\ApiResponseInterface;

class ChatGptApiDriver implements ApiCommunicatorInterface
{
    const TIMEOUT = 300;

    public function sendRequest(ApiParameterInterface $apiParameter): ApiResponseInterface
    {
        $apiToken = config('chat-gpt.api-key');

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $apiToken,
            ])->timeout(self::TIMEOUT)->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    [
                        'role' => 'user',
                        'content' => 'Hello',
                    ],
                ],
            ]);
        } catch (\Exception $e)
        {
            Log::error($e);
            throw new \Exception($e);
        }


        return new ChatGptApiResponse($response->json()['choices']['0']['message']['content']);
    }

}

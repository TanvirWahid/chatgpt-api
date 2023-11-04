<?php

return [
    'api-key' => env('OPEN_AI_API_KEY', ''),
    'drivers' => [
        'real-time' => \Tanvir\ChatgptApi\ChatGptApiDriver\ChatGptApiDriver::class
    ]
];

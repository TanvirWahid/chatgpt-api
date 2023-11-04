To use this package

Open composer.json file of your project and add

"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/tanvirwahid/chatgpt-api"
    }
]

Run composer require tanvirwahid/chatgpt-api

Add Tanvir\ChatgptApi\Providers\ChatgptApiServiceProvider::class, to providers section in config/app.php file.

Run php artisan migrate

USAGE:

$apiDriverFactory = new ApiDriverFactory();
$apiDriver = $apiDriverFactory->create('real-time');
$response = $apiDriver->sendRequest(new ChatGptApiParameter('your-message-to-chatgpt'));
$response = $response->getResponse();

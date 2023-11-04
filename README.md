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

For login and registration

use
1) api/register (parameters: name, email, password, password_confirmation)
2) api/login (parameters: email, password)

$apiDriverFactory = new ApiDriverFactory();
$apiDriver = $apiDriverFactory->create('real-time');
$response = $apiDriver->sendRequest(new ChatGptApiParameter('your-message-to-chatgpt'));
$response = $response->getResponse();

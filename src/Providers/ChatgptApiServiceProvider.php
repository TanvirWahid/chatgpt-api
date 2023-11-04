<?php

namespace Tanvir\ChatgptApi\Providers;

use Illuminate\Support\ServiceProvider;

class ChatgptApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/chatgpt-config.php', 'chat-gpt'
        );


        $this->loadRoutesFrom(__DIR__.'/../routes/authentication.php');
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');


    }
}

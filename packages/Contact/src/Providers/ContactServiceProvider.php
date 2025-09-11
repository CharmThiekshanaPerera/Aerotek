<?php

namespace Phyxle\Contact\Providers;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../../views', 'contact');

        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/contact'),
        ], 'contact');
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menu = [
            [
            'title' => 'Главная',
            'alias' => 'user::welcome'
            ],
            [
            'title' => 'О сайте',
            'alias' => 'site::about'
            ],
            [
            'title' => 'Категории',
            'alias' => 'news::category'
            ]
        ];

        \Illuminate\Support\Facades\View::share('menu', $menu);
    }
}

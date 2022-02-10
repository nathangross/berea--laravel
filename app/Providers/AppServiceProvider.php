<?php

namespace App\Providers;

use Corcel\Model\Menu;
use Illuminate\Support\Facades\View;
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
        // Wordpress - Brand Menu
        View::composer(['components.menu.brand', 'components.menu.compact.brand'], function($view) {
            $view->with('menu', Menu::slug('brand')->first());
        });

        // Wordpress - Primary Menu
        View::composer(['components.menu.primary', 'components.menu.compact.primary'], function($view) {
            $view->with('menu', Menu::slug('primary')->first());
        });

        // Wordpress - Primary Actions Menu
        View::composer(['components.menu.primary-actions', 'components.menu.compact.primary-actions'], function($view) {
            $view->with('menu', Menu::slug('primary-actions')->first());
        });

        // Wordpress - Footer Menu
        View::composer(['components.menu.footer', 'components.menu.compact.footer'], function($view) {
            $view->with('menu', Menu::slug('footer')->first());
        });
    }
}

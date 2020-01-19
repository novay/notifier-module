<?php

namespace Modules\Notifier\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Contracts\Debug\ExceptionHandler;

class NotifierServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            ExceptionHandler::class,
            \Modules\Notifier\Exceptions\Handler::class
        );
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            module_path('Notifier', 'Config/config.php') => config_path('notifier.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path('Notifier', 'Config/config.php'), 'notifier'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/notifier');

        $sourcePath = module_path('Notifier', 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/notifier';
        }, \Config::get('view.paths')), [$sourcePath]), 'notifier');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/notifier');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'notifier');
        } else {
            $this->loadTranslationsFrom(module_path('Notifier', 'Resources/lang'), 'notifier');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}

<?php

namespace xPand4B\FunnyErrorPages;

use Illuminate\Support\ServiceProvider;

class FunnyErrorPagesServiceProvider extends ServiceProvider
{
    private const PACKAGE_KEY = 'funny-error-pages';

    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', self::PACKAGE_KEY);
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', self::PACKAGE_KEY);

        $this->configurePublishing();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/funny-error-pages.php', self::PACKAGE_KEY
        );
    }

    protected function configurePublishing(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        // Config
        $this->publishes([
            __DIR__.'/../config/funny-error-pages.php' => config_path(self::PACKAGE_KEY.'.php')
        ], 'config');

        // Translation
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/'.self::PACKAGE_KEY)
        ], 'translations');

        // Main Error pages
        $this->publishes([
            __DIR__.'/../stubs' => resource_path('views/errors'),
        ], self::PACKAGE_KEY);

        // Public assets
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/'.self::PACKAGE_KEY),
        ], 'public');

        // Actual error pages
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/self::PACKAGE_KEY'),
        ], 'views');
    }
}

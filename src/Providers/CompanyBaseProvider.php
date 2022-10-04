<?php

namespace Companybase\Providers;

use Illuminate\Support\ServiceProvider;
use Companybase\Console\RepositoryInterfaceMakeCommand;
use Companybase\Console\RepositoryMakeCommand;
use Companybase\Http\Middleware\CheckLogedIn;
use Companybase\Http\Middleware\CheckLogedOut;
use Illuminate\Routing\Router;

class CompanyBaseProvider extends ServiceProvider
{
    protected $commands = [
        RepositoryInterfaceMakeCommand::class,
        RepositoryMakeCommand::class
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/admin.php');

        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'companybase');

        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        $router = $this->app['router'];

        $router->aliasMiddleware('CheckLogedIn', CheckLogedIn::class);

        $router->aliasMiddleware('CheckLogedOut', CheckLogedOut::class);

        $this->mergeConfigFrom(__DIR__ . '/../../config/core.php', 'companybase');

        $this->app->register(RepositoryServiceProvider::class);

        if ($this->app->runningInConsole()) {
            $this->publishResources();
        }
    }

    protected function publishResources()
    {
        $this->publishes([
            __DIR__.'/../public' => public_path('/'),
        ], 'public');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views'),
        ], 'views');

        $this->publishes([
            __DIR__ . '/../../config/core.php' => config_path('core.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('/'),
        ], 'database/migrations');

        $this->publishes([
            __DIR__ . '/../database/seeds' => database_path('/'),
        ], 'database/seeds');
    }
}


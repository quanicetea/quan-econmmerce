<?php

namespace Modules\Api\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Api\Events\Handlers\RegisterApiSidebar;

class ApiServiceProvider extends ServiceProvider
{
    use CanPublishConfiguration;
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
        $this->app['events']->listen(BuildingSidebar::class, RegisterApiSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('apis', array_dot(trans('api::apis')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('api', 'permissions');

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Api\Repositories\ApiRepository',
            function () {
                $repository = new \Modules\Api\Repositories\Eloquent\EloquentApiRepository(new \Modules\Api\Entities\Api());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Api\Repositories\Cache\CacheApiDecorator($repository);
            }
        );
// add bindings

    }
}

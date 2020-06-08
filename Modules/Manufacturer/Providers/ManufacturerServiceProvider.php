<?php

namespace Modules\Manufacturer\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Manufacturer\Events\Handlers\RegisterManufacturerSidebar;

class ManufacturerServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterManufacturerSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('manufacturers', array_dot(trans('manufacturer::manufacturers')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('manufacturer', 'permissions');

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
            'Modules\Manufacturer\Repositories\ManufacturerRepository',
            function () {
                $repository = new \Modules\Manufacturer\Repositories\Eloquent\EloquentManufacturerRepository(new \Modules\Manufacturer\Entities\Manufacturer());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Manufacturer\Repositories\Cache\CacheManufacturerDecorator($repository);
            }
        );
// add bindings

    }
}

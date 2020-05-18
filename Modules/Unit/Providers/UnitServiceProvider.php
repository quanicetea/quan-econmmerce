<?php

namespace Modules\Unit\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Unit\Events\Handlers\RegisterUnitSidebar;

class UnitServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterUnitSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('units', array_dot(trans('unit::units')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('unit', 'permissions');

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
            'Modules\Unit\Repositories\UnitRepository',
            function () {
                $repository = new \Modules\Unit\Repositories\Eloquent\EloquentUnitRepository(new \Modules\Unit\Entities\Unit());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Unit\Repositories\Cache\CacheUnitDecorator($repository);
            }
        );
// add bindings

    }
}

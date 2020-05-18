<?php

namespace Modules\Site\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Site\Events\Handlers\RegisterSiteSidebar;

class SiteServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterSiteSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('sites', array_dot(trans('site::sites')));
            // append translations

        });
    }

    public function boot()
    {
        $this->publishConfig('site', 'permissions');

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
            'Modules\Site\Repositories\SiteRepository',
            function () {
                $repository = new \Modules\Site\Repositories\Eloquent\EloquentSiteRepository(new \Modules\Site\Entities\Site());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Site\Repositories\Cache\CacheSiteDecorator($repository);
            }
        );
// add bindings

    }
}

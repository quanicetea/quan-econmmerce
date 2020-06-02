<?php

namespace Modules\Order\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Order\Events\Handlers\RegisterOrderSidebar;

class OrderServiceProvider extends ServiceProvider
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
        $this->app['events']->listen(BuildingSidebar::class, RegisterOrderSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('orders', array_dot(trans('order::orders')));
            $event->load('orderdetails', array_dot(trans('order::orderdetails')));
            // append translations


        });
    }

    public function boot()
    {
        $this->publishConfig('order', 'permissions');
        $this->publishConfig('order', 'config');

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
            'Modules\Order\Repositories\OrderRepository',
            function () {
                $repository = new \Modules\Order\Repositories\Eloquent\EloquentOrderRepository(new \Modules\Order\Entities\Order());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Order\Repositories\Cache\CacheOrderDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Order\Repositories\OrderDetailRepository',
            function () {
                $repository = new \Modules\Order\Repositories\Eloquent\EloquentOrderDetailRepository(new \Modules\Order\Entities\OrderDetail());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Order\Repositories\Cache\CacheOrderDetailDecorator($repository);
            }
        );
// add bindings


    }
}

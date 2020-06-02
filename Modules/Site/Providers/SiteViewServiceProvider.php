<?php

namespace Modules\Site\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class SiteViewServiceProvider extends ServiceProvider
{
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
        //
    }

    public function boot()
    {
    	view()->composer(
    		[
    			'site::site.index',
    			'site::site.cart_empty',
    			'site::site.cart',
                'site::site.checkout',
                'site::site.category',
                'site::site.product_by_category',
                'site::site.success',
                'site::site.confirm',
    		],
    		'Modules\Site\Http\ViewComposers\DefineComposer'
    	);
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

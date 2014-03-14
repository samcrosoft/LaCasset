<?php namespace Samcrosoft\Lacasset;

use Illuminate\Support\ServiceProvider;

class LacassetServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
//        $this->package('samcrosoft/lacasset', 'lacasset', __DIR__.'/../');
        $this->package('samcrosoft/lacasset');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('lacasset', function()
        {
            return new Casset\Casset();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('lacasset');
    }

}
<?php 

namespace Packages;

use Illuminate\Support\ServiceProvider;

class DevStatusServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
    */
    public function boot()
    {
    //
    }

    /**
    * Register the application services.
    *
    * @return void
    */
    public function register()
    {
        include __DIR__.'/Http/routes.php';
        $this->app->make('Packages\Http\Controllers\TestController');
    }

}
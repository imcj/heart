<?php

namespace App;

use Illuminate\Support\ServiceProvider;
use App\Heart\Facade\UserServiceFacade;
use App\Heart\Facade\Assembler\UserDTOAssembler;

class HeartServiceProvider extends ServiceProvider
{
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
        $this->app->bind('UserDTOAssembler', function($app) {
            return new UserDTOAssembler();
        });

        $this->app->bind('UserServiceFacade', function($app) {
            $userDTOAssembler = $app->make('UserDTOAssembler');
            return new UserServiceFacade(NULL);
        });


    }
}

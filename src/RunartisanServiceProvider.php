<?php

namespace Kodexploit\Runartisan;

use Illuminate\Support\ServiceProvider;

class RunartisanServiceProvider extends ServiceProvider
{
    public function boot()
    {
    	$this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    	$this->loadViewsFrom(__DIR__.'/views', 'runartisan');
    }

    public function register()
    {
    	
    }

}
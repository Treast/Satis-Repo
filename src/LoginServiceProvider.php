<?php

namespace Treast\Auth;
use Illuminate\Support\ServiceProvider;

class LoginServiceProvider extends ServiceProvider {


    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    public function register()
    {
    }

}

 ?>

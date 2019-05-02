<?php
namespace Angelica\Contact;
use illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php') ; 
        $this->loadViewsFrom(__DIR__.'/views','contact');
    }

    public function register()
    {

    }
}
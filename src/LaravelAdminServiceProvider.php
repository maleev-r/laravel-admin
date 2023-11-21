<?php
namespace LuckyRomka\LaravelAdmin;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class LaravelAdminServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__."/routes/web.php");
        $this->loadViewsFrom(__DIR__."/resources/views","lradmin");

        Blade::componentNamespace('LuckyRomka\\LaravelAdmin\\Components', 'lradmin');
    }
}

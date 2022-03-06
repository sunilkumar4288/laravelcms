<?php

namespace App\Providers;

use Barryvdh\Debugbar\ServiceProvider as DebugbarServiceProvider;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

use View;
use App\Models\Page;  
class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Paginator::defaultView('pagination::bulma');
        Paginator::defaultSimpleView('pagination::simple-bulma');
        View::composer('*',function($view){
        $pageMenus  =Page::where('parent_id', '=', NULL)->get();;
        $view->with('primaryMenus',$pageMenus);
         }) ;   

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(IdeHelperServiceProvider::class);
            $this->app->register(DebugbarServiceProvider::class);
        }
    }
}

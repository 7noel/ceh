<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
    
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    protected $prefix;
    protected $controller;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        setlocale(LC_TIME, 'Spanish');
        $uri = \Request::server('REQUEST_URI');
        $uri = explode('?', $uri);
        $url = explode('/', $uri[0]);
        array_shift($url);
        // $this->prefix = array_shift($url);
        $this->controller = array_shift($url);
        $_views = $this->views();
        $_routes = $this->routes();
        $_labels = $this->labels();
        View::share('views', $_views);
        View::share('routes', $_routes);
        View::share('labels', $_labels);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function views()
    {
        // return [
        //     'scripts' => $this->prefix . '.' . $this->controller. '.scripts',
        //     'table' => $this->prefix . '.' . $this->controller. '.partials.table',
        //     'fields' => $this->prefix . '.' . $this->controller. '.partials.fields',
        //     'edit' => $this->prefix . '.' . $this->controller. '.edit',
        //     'delete' => $this->prefix . '.' . $this->controller. '.delete',
        //     'filter' => $this->prefix . '.' . $this->controller. '.partials.filter',
        // ];
        return [
            'scripts' => $this->controller. '.scripts',
            'table' => $this->controller. '.partials.table',
            'fields' => $this->controller. '.partials.fields',
            'edit' => $this->controller. '.edit',
            'delete' => $this->controller. '.delete',
            'filter' => $this->controller. '.partials.filter',
        ];
    }

    public function routes()
    {
        return [
            'index' => $this->controller. '.index',
            'show' => $this->controller. '.show',
            'create' => $this->controller. '.create',
            'store' => $this->controller. '.store',
            'edit' => $this->controller. '.edit',
            'update' => $this->controller. '.update',
            'delete' => $this->controller. '.destroy',
            'filter' => $this->controller. '.filter',
        ];
    }

    public function labels()
    {
        $pre = $this->controller;
        return [
            'index.panel' => "options.$pre.index.panel",
            'index.create' => "options.$pre.index.create",
            'create.panel' => "options.$pre.create.panel",
            'create.create' => "options.$pre.create.create",
            'edit.panel' => "options.$pre.edit.panel",
            'edit.update' => "options.$pre.edit.update",
            'edit.delete' => "options.$pre.edit.delete",
            'show.panel' => "options.$pre.show.panel",
        ];
    }
}

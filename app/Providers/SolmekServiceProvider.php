<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SolmekServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer(['layouts.adm.sidebar', 'auth.login', 'layouts.navbar'], function ($view) {
            $logos = \App\Logo::where('ubicacion', 'navbar')->first();
            $view->with(compact('logos'));
        });

        view()->composer(['layouts.footer', 
                          'layouts.navbar', 'page.contacto.index'], function ($view) {
            $informacion = \App\Dato::first();
            //$caracteres = array("(", ")", "-", " ", "+");
            //$numeroWs = str_replace($caracteres, "", $informacion->whatsapp);

            $view->with(compact('informacion'));
        });

        view()->composer(['layouts.footer'], function ($view) {
            $logos    = \App\Logo::where('ubicacion', 'footer')->first();
            $view->with(compact('logos'));
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public $bindings =  [
        \App\Services\Contracts\AuthContract::class => \App\Services\AuthService::class,
        \App\Services\Contracts\CidadeContract::class => \App\Services\CidadeService::class,
        \App\Services\Contracts\MedicoContract::class => \App\Services\MedicoService::class,
        \App\Services\Contracts\PacienteContract::class => \App\Services\PacienteService::class
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

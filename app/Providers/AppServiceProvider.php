<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\HargaGalon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Mengirimkan data harga galon ke seluruh view
        View::composer('*', function ($view) {
            $harga = HargaGalon::first();
            if (!$harga) {
                // Jika tidak ada harga, buat data baru
                $harga = HargaGalon::create(['price' => 0]);
            }
            $view->with('harga', $harga); // Menambahkan $harga ke seluruh view
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}


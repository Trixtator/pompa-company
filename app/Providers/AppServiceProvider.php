<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
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
        // 1. Inisialisasi variabel kosong agar TIDAK ERROR jika database belum siap
        $settings = []; 

        // 2. Cek apakah tabel settings ada (mencegah error saat migrate baru dijalankan)
        try {
            if (Schema::hasTable('settings')) {
                // Ambil data dari database
                $settings = Setting::all()->pluck('value', 'key')->toArray();
            }
        } catch (\Exception $e) {
            // Jika ada error koneksi database, biarkan kosong (jangan crash)
        }

        // 3. Bagikan variabel ke semua View
        View::share('settings', $settings);
    }
}
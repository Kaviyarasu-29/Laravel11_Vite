<?php

namespace App\Providers;

use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

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
        // // method - 1
        // Vite::macro('image', fn (string $asset) => $this->asset("./resources/images/{$asset}"));

        // method - 2
        Vite::macro('image', function (string $asset) {
            return Vite::asset("./resources/images/{$asset}");
        });

        Vite::useScriptTagAttributes([
            'integrity' => false,
            'async' => true,
            'data-custom-attributes' => 'whatever value we needed'
        ]);

        Vite::useScriptTagAttributes(fn (string $src, string $url, array|null $chunk, array|null $manifest) => [
            'data-custom-attributes' => $src === 'resources/js/app.jsx' ? false : true
        ]);

        Vite::useStyleTagAttributes([
            'data-css-theme' => 'bg-secondary-subtle'
        ]);
    }
}

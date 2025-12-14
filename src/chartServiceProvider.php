<?php

namespace MrShaneBarron\chart;

use Illuminate\Support\ServiceProvider;
use MrShaneBarron\chart\Livewire\chart;
use MrShaneBarron\chart\View\Components\chart as Bladechart;
use Livewire\Livewire;

class chartServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/ld-chart.php', 'ld-chart');
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ld-chart');

        Livewire::component('ld-chart', chart::class);

        $this->loadViewComponentsAs('ld', [
            Bladechart::class,
        ]);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/ld-chart.php' => config_path('ld-chart.php'),
            ], 'ld-chart-config');

            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/ld-chart'),
            ], 'ld-chart-views');
        }
    }
}

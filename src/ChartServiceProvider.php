<?php

namespace MrShaneBarron\Chart;

use Illuminate\Support\ServiceProvider;

class ChartServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (class_exists(\Livewire\Livewire::class)) {
            \Livewire\Livewire::component('sb-chart', Livewire\Chart::class);
        }
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'sb-chart');
    }
}

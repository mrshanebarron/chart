<?php

namespace MrShaneBarron\Chart\Livewire;

use Livewire\Component;

class Chart extends Component
{
    public string $type = 'bar';
    public array $labels = [];
    public array $datasets = [];
    public array $options = [];
    public string $height = '300px';

    public function mount(
        string $type = 'bar',
        array $labels = [],
        array $datasets = [],
        array $options = [],
        string $height = '300px'
    ): void {
        $this->type = $type;
        $this->labels = $labels;
        $this->datasets = $datasets;
        $this->options = $options;
        $this->height = $height;
    }

    public function getChartData(): array
    {
        return [
            'type' => $this->type,
            'data' => [
                'labels' => $this->labels,
                'datasets' => $this->datasets,
            ],
            'options' => array_merge([
                'responsive' => true,
                'maintainAspectRatio' => false,
            ], $this->options),
        ];
    }

    public function render()
    {
        return view('sb-chart::livewire.chart');
    }
}

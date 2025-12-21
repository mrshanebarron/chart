<div
    wire:ignore
    x-data="{
        chart: null,
        init() {
            this.chart = new Chart(this.$refs.canvas, @js($this->getChartData()));
        }
    }"
    style="position: relative; height: {{ $this->height }}"
>
    <canvas x-ref="canvas"></canvas>
</div>

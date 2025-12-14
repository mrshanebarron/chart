<div
    wire:ignore
    x-data="{
        chart: null,
        init() {
            this.chart = new Chart(this.$refs.canvas, @js($this->getChartData()));
        }
    }"
    class="relative"
    style="height: {{ $height }}"
>
    <canvas x-ref="canvas"></canvas>
</div>

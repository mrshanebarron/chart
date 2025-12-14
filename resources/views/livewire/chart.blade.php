<div
    x-data="{
        chart: null,
        init() {
            this.chart = new Chart(this.$refs.canvas, {{ json_encode($this->getChartConfig()) }});
        }
    }"
    wire:ignore
    style="height: {{ $height }}px"
>
    <canvas x-ref="canvas"></canvas>
</div>
<script>
    // Make sure Chart.js is loaded
    if (typeof Chart === 'undefined') {
        console.warn('Chart.js is required. Include it via CDN or npm.');
    }
</script>

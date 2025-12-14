<template>
  <div class="relative" :style="{ height }">
    <canvas ref="canvasRef"></canvas>
  </div>
</template>

<script>
import { ref, onMounted, onUnmounted, watch } from 'vue';
import { Chart as ChartJS, registerables } from 'chart.js';

ChartJS.register(...registerables);

export default {
  name: 'SbChart',
  props: {
    type: { type: String, default: 'bar' },
    labels: { type: Array, default: () => [] },
    datasets: { type: Array, default: () => [] },
    options: { type: Object, default: () => ({}) },
    height: { type: String, default: '300px' }
  },
  setup(props) {
    const canvasRef = ref(null);
    let chartInstance = null;

    const createChart = () => {
      if (chartInstance) chartInstance.destroy();

      chartInstance = new ChartJS(canvasRef.value, {
        type: props.type,
        data: {
          labels: props.labels,
          datasets: props.datasets
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          ...props.options
        }
      });
    };

    const updateChart = () => {
      if (chartInstance) {
        chartInstance.data.labels = props.labels;
        chartInstance.data.datasets = props.datasets;
        chartInstance.update();
      }
    };

    onMounted(() => createChart());
    onUnmounted(() => { if (chartInstance) chartInstance.destroy(); });

    watch(() => props.type, createChart);
    watch([() => props.labels, () => props.datasets], updateChart, { deep: true });

    return { canvasRef };
  }
};
</script>

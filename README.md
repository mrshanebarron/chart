# Chart

A chart visualization component for Laravel applications. Supports line, bar, pie, and other chart types. Works with Livewire and Vue 3.

## Installation

```bash
composer require mrshanebarron/chart
```

## Livewire Usage

### Line Chart

```blade
<livewire:sb-chart
    type="line"
    :data="[10, 20, 15, 30, 25, 40]"
    :labels="['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']"
/>
```

### Bar Chart

```blade
<livewire:sb-chart
    type="bar"
    :data="$salesData"
    :labels="$months"
    title="Monthly Sales"
/>
```

### Pie Chart

```blade
<livewire:sb-chart
    type="pie"
    :data="[30, 25, 20, 15, 10]"
    :labels="['Category A', 'B', 'C', 'D', 'E']"
/>
```

### Livewire Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `type` | string | `'line'` | Chart type |
| `data` | array | required | Data points |
| `labels` | array | `[]` | X-axis labels |
| `title` | string | `null` | Chart title |
| `height` | number | `300` | Chart height (px) |
| `colors` | array | defaults | Data colors |

## Vue 3 Usage

### Setup

```javascript
import { SbChart } from './vendor/sb-chart';
app.component('SbChart', SbChart);
```

### Line Chart

```vue
<template>
  <SbChart
    type="line"
    :data="data"
    :labels="labels"
  />
</template>

<script setup>
const data = [10, 20, 15, 30, 25, 40, 35];
const labels = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
</script>
```

### Bar Chart

```vue
<template>
  <SbChart
    type="bar"
    :data="salesData"
    :labels="months"
    title="Monthly Revenue"
  />
</template>

<script setup>
const salesData = [12000, 19000, 15000, 22000, 18000, 25000];
const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'];
</script>
```

### Pie Chart

```vue
<template>
  <SbChart
    type="pie"
    :data="distribution"
    :labels="categories"
  />
</template>

<script setup>
const distribution = [35, 25, 20, 15, 5];
const categories = ['Direct', 'Organic', 'Social', 'Referral', 'Other'];
</script>
```

### Multiple Datasets

```vue
<template>
  <SbChart
    type="line"
    :datasets="[
      { label: '2023', data: [10, 20, 30, 40] },
      { label: '2024', data: [15, 25, 35, 45] }
    ]"
    :labels="['Q1', 'Q2', 'Q3', 'Q4']"
  />
</template>
```

### Custom Colors

```vue
<template>
  <SbChart
    type="bar"
    :data="data"
    :labels="labels"
    :colors="['#3B82F6', '#10B981', '#F59E0B', '#EF4444']"
  />
</template>
```

### Vue Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `type` | String | `'line'` | `line`, `bar`, `pie`, `doughnut`, `area` |
| `data` | Array | - | Single dataset data |
| `datasets` | Array | - | Multiple datasets |
| `labels` | Array | `[]` | Axis labels |
| `title` | String | `null` | Chart title |
| `height` | Number | `300` | Height in pixels |
| `colors` | Array | Default palette | Data colors |
| `showLegend` | Boolean | `true` | Display legend |
| `showGrid` | Boolean | `true` | Display grid lines |

## Chart Types

| Type | Description |
|------|-------------|
| `line` | Line chart with points |
| `bar` | Vertical bar chart |
| `pie` | Pie chart |
| `doughnut` | Donut chart |
| `area` | Filled area chart |

## Features

- **Multiple Types**: Line, bar, pie, etc.
- **Responsive**: Adapts to container
- **Tooltips**: Hover for values
- **Legend**: Optional legend display
- **Animations**: Smooth transitions

## Requirements

- PHP 8.1+
- Laravel 10, 11, or 12
- Tailwind CSS 3.x

## License

MIT License

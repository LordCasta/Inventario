<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
           {{ __("Dashboard") }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

             {{-- Gráficos para ADMIN --}}
        @if(auth()->user()->role === 'admin')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gray-800 p-6 rounded-lg">
                    <canvas id="stockChart"></canvas>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg">
                    <canvas id="categoriaChart"></canvas>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg md:col-span-2">
                    <canvas id="topProductosChart"></canvas>
                </div>
            </div>
        @endif

        {{-- Gráficos para USUARIO --}}
        @if(auth()->user()->role === 'user')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gray-800 p-6 rounded-lg">
                    <canvas id="stockChart"></canvas>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg">
                    <canvas id="categoriaChart"></canvas>
                </div>
            </div>
        @endif
    </div>

    <script>
  
    const textColor = '#E5E7EB'; 
    const gridColor = 'rgba(75, 85, 99, 0.3)'; 

    // Stock por categoría
    const stockCtx = document.getElementById('stockChart');
    new Chart(stockCtx, {
        type: 'bar',
        data: {
            labels: @json($stockPorCategoria->pluck('nombre')),
            datasets: [{
                label: 'Stock total',
                data: @json($stockPorCategoria->pluck('productos_sum_stock')),
                backgroundColor: 'rgba(59, 130, 246, 0.8)',
                borderColor: 'rgba(59, 130, 246, 1)',
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                legend: { labels: { color: textColor } }
            },
            scales: {
                x: {
                    ticks: { color: textColor },
                    grid: { color: gridColor }
                },
                y: {
                    ticks: { color: textColor },
                    grid: { color: gridColor }
                }
            }
        }
    });

    // Distribución productos
    const categoriaCtx = document.getElementById('categoriaChart');
    new Chart(categoriaCtx, {
        type: 'pie',
        data: {
            labels: @json($productosPorCategoria->pluck('nombre')),
            datasets: [{
                label: 'Productos',
                data: @json($productosPorCategoria->pluck('productos_count')),
                backgroundColor: [
                    '#3B82F6', // azul 500
                    '#10B981', // verde 500
                    '#F59E0B', // amarillo 500
                    '#EF4444', // rojo 500
                    '#8B5CF6'  // morado 500
                ],
            }]
        },
        options: {
            plugins: {
                legend: { labels: { color: textColor } }
            }
        }
    });

    // Top productos
    const topCtx = document.getElementById('topProductosChart');
    new Chart(topCtx, {
        type: 'bar',
        data: {
            labels: @json($topProductos->pluck('nombre')),
            datasets: [{
                label: 'Stock',
                data: @json($topProductos->pluck('stock')),
                backgroundColor: 'rgba(16, 185, 129, 0.8)', // verde Tailwind 500
                borderColor: 'rgba(16, 185, 129, 1)',
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                legend: { labels: { color: textColor } }
            },
            scales: {
                x: {
                    ticks: { color: textColor },
                    grid: { color: gridColor }
                },
                y: {
                    ticks: { color: textColor },
                    grid: { color: gridColor }
                }
            }
        }
    });
</script>

</x-app-layout>

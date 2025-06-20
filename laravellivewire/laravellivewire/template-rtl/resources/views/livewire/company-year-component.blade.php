<div wire:ignore>
    <canvas id="company-year">
    </canvas>
</div>
@assets
    <style>
        #company-year {
            width: 100% !important;
            /* Responsive width */
            height: 273px !important;
            /* Fixed height */
        }
    </style>
    <script src="build/js/chart.js"></script>
@endassets
@script
    <script>
        const ctx = document.getElementById('company-year');
        const deals = $wire.deals;
        const labels = deals.map(item => item.Day);
        const values = deals.map(item => item.Value);
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Reports',
                    data: values,
                    borderWidth: 3,
                    borderColor: '#FFA201',
                }]
            },
            options: {
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            font: {
                                size: 14
                            }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.dataset.label + ': ' + context.raw;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        type: 'category',
                        labels: labels,
                        ticks: {
                            autoSkip: false
                        },
                        grid: {
                display: false 
              }
                    },
                    y: {
                        min: 10,
                        max: 60,
                        ticks: {
                            stepSize: 10,
                            callback: function(value) {
                                return value + 'K'; // Format y-axis labels
                            }
                        },
                    }
                }
            }
        });
    </script>
@endscript

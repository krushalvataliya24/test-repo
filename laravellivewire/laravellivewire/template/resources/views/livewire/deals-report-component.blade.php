<div wire:ignore>
    <canvas id="deals-report">
    </canvas>
</div>
@assets
    <style>
        #deals-report {
            width: 544px !important;
            height: 275px !important;
        }
    </style>
    <script src="build/js/chart.js"></script>
@endassets
@script
    <script>
        const ctx = document.getElementById('deals-report');
        const deals = $wire.deals;
        const labels = deals.map(item => item.Day);
        const wonvalues = deals.map(item => item.Wonvalue);
        const lostvalues = deals.map(item => item.Lostvalue);
        new Chart(ctx, {
            type: 'bar', //line, 
            data: {
                labels: labels,
                datasets: [{
                    label: 'Won Deals',
                    data: wonvalues,
                    backgroundColor: '#5CB85C',
                    borderColor: '#5CB85C',
                    borderWidth: 1,
                    barThickness: 20
                },
                {
                    label: 'Lost Deals',
                    data: lostvalues,
                    backgroundColor: '#FC0027',
                    borderColor: '#FC0027',
                    borderWidth: 1,
                    barThickness: 20
                }
            ]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        beginAtZero: true,
                        ticks: {
                            font: {
                                size: 10,
                                weight: 'bold'
                            }
                        },

                        grid: {
                            display: false
                        }
                    },
                    y: {
                        beginAtZero: true,
                    }
                },
                plugins: {
                    legend: {
                        display: true
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.dataset.label + ': ' + context.raw + ' Deals';
                            }
                        }
                    }
                }
            }
        });
    </script>
@endscript

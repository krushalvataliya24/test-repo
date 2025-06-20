<div wire:ignore>
    <canvas id="won-chart">
    </canvas>
</div>
    @assets
        <style>
            #won-chart {
                width: 475px !important;
                height: 150px !important;
            }
        </style>
        <script src="build/js/chart.js"></script>
    @endassets
    @script
        <script>
            const ctx = document.getElementById('won-chart');
            const deals = $wire.deals;
            const values = deals.map(item => item.Value);
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Conversation', 'Follow Up', 'Inpipeline'],
                    datasets: [{
                        data: values,
                        borderWidth: 2,
                        borderColor: '#5CB85C',
                        backgroundColor: '#5CB85C',
                        borderWidth: 1,
                    }]
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true,
                            display: true,
                            grid: {
                                display: false
                            }
                        },
                        y: {
                            display: true,
                            grid: {
                                display: false
                            },
                            ticks: {
                                display: true
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        </script>
    @endscript

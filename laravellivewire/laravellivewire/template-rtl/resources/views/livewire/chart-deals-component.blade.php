<div wire:ignore>
    <canvas id="deals-year">
    </canvas>
</div>
    @assets
    <style>

        #deals-year {
          width: 1005px !important; 
          height: 273px !important; 
        }
      </style>
    
        <script src="build/js/chart.js"></script>
    @endassets
    @script
        <script>
            const ctx = document.getElementById('deals-year');
            const deals = $wire.deals;
            const labels = deals.map(item => item.Day);
            const values = deals.map(item => item.Value);
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Deals',
                        data: values,
                        borderWidth: 2,
                        borderColor: '#E41F07', 
                        backgroundColor: 'rgba(255, 87, 51, 0.2)', 
                        borderWidth: 2, 
                        fill: true 
                    }]
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
                            beginAtZero: false,
                            ticks: {
                                stepSize: 10,
                                min: 10,
                                max: 60,
                                callback: function(value) {
                                return value + 'K'; // Format y-axis labels
                            }
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: true
                        }
                    }
                }
            });
        </script>
    @endscript

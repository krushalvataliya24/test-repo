<div wire:ignore>
    <canvas id="leadpiechart">
    </canvas>
    @assets
        <style>
            #leadpiechart {
                width: 100% !important;
                height: 301.03px !important;
            }

            /* Responsive settings */
            @media (max-width: 480px) {
                #leadpiechart {
                    width: 275px !important;
                    height: 275px !important;
                }
            }
        </style>
        <script src="build/js/chart.js"></script>
    @endassets
    @script
        <script>
            const ctx = document.getElementById('leadpiechart');
            const deals = $wire.deals;
            const values = deals.map(item => item.Value);
            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Inpipeline', 'Follow Up', 'Schedule Service', 'Conversation'],
                    datasets: [{
                        data: values,
                        backgroundColor: ['rgb(0, 143, 251)', 'rgb(0, 227, 150)', 'rgb(254, 176, 25)',
                            'rgb(255, 69, 96)'
                        ],
                        borderWidth: 2,
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                font: {
                                    size: 14
                                }
                            }
                        },
                        datalabels: {
                            display: true,
                            color: '#ffffff', // Color of the data labels
                            formatter: (value, ctx) => {
                                let sum = 0;
                                let dataArr = ctx.chart.data.datasets[0].data;
                                dataArr.map(data => {
                                    sum += data;
                                });
                                let percentage = ((value / sum) * 100).toFixed(2) + '%'; // Calculate percentage
                                return percentage; // Return percentage label
                            },
                            anchor: 'end',
                            align: 'top',
                            font: {
                                weight: 'bold',
                                size: 14
                            }
                        },
                    }
                }
            });
        </script>
    @endscript

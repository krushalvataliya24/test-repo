<div wire:ignore>
    <canvas id="contacts-analysis">
    </canvas>
</div>
@assets
    <style>
        #contacts-analysis {
            width: 386px !important;
            height: 289.367px !important;
        }
    </style>
    <script src="build/js/chart.js"></script>
@endassets
@script
    <script>
        const ctx = document.getElementById('contacts-analysis');


        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Campaigns', 'Google', 'Referrals', 'Paid Social'],
                datasets: [{
                    data: [44, 55, 41, 17],
                    backgroundColor: ['#4A00E5', '#FFA201', '#0092E4', '#E41F07'],
                    borderWidth: 0, // Remove border
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
                            },
                            generateLabels: function(chart) {
                                const data = chart.data;
                                return data.labels.map((label, index) => ({
                                    text: `${label} - ${data.datasets[0].data[index]}`,
                                    fillStyle: data.datasets[0].backgroundColor[index]
                                }));
                            }
                        }
                    },
                    datalabels: {
                        display: false // Disable data labels
                    }
                },
                layout: {
                    padding: {
                        bottom: 20
                    }
                },
                cutoutPercentage: 70, // Makes the donut look more like a donut
                rotation: -90, // Start angle similar to the ApexCharts configuration
                cutout: '50%', // To create a donut chart (adjust for different widths)
            }
        });
    </script>
@endscript

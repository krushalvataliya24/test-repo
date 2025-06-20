<div id="project-stage">
</div>

@script
    <script>
        $(document).ready(function() {
            if ($('#project-stage').length > 0) {
                var options = {
                    series: [{
                        name: "",
                        data: [1200, 1000, 800, 600, 400, 200],
                    }, ],
                    chart: {
                        type: 'bar',
                        height: 420,
                    },

                    plotOptions: {
                        bar: {
                            borderRadius: 0,
                            horizontal: true,
                            distributed: true,
                            barHeight: '100%',
                            isFunnel: true,
                        },

                    },
                    colors: [
                        '#4A00E5',
                        '#1ECBE2',
                        '#FF9D0A',
                        '#00918E',
                        '#5CB85C',
                        '#FC0027',
                    ],

                    dataLabels: {
                        enabled: true,
                        formatter: function(val, opt) {
                            return opt.w.globals.labels[opt.dataPointIndex]
                        },
                        dropShadow: {
                            enabled: true,
                        },

                    },
                    xaxis: {
                        categories: ['Inpipeline : 1454', 'Follow Up : 1454', 'Schedule service : 1454',
                            'Conversation : 1454', 'Win : 1454', 'Lost : 1454'
                        ],
                    },
                    legend: {
                        show: false,
                    },
                };

                var chart = new ApexCharts(document.querySelector("#project-stage"), options);
                chart.render();
            }
        });
    </script>
@endscript

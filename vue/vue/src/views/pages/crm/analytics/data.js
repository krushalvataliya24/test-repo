const wonChart = {
    series: [{
        data: [400, 122, 250]
    }],
    chart: {
        type: 'bar',
        height: 150,
        plotOptions: {
            bar: {
                horizontal: true,
            }
        },
        dataLabels: {
            enabled: false
        },
        colors: ['#5CB85C'],
        xaxis: {
            categories: ['Conversation', 'Follow Up', 'Inpipeline'
            ],
        }
    },
};


const lastChart = {
    series: [{
        data: [400, 220, 448,]
    }],
    chart: {
        type: 'bar',
        height: 150,
        plotOptions: {
            bar: {
                horizontal: true,
            }
        },
        dataLabels: {
            enabled: false
        },
        colors: ['#FC0027'],
        xaxis: {
            categories: ['Conversation', 'Follow Up', 'Inpipeline'],
        }
    },
};

var leadsChart = {
    series: [{
        name: "sales",
        colors: ['#BEA4F2'],
        data: [{
            x: 'Inpipeline',
            y: 400,

        }, {
            x: 'Follow Up',
            y: 30
        }, {
            x: 'Schedule',
            y: 248
        }, {
            x: 'Conversation',
            y: 470
        }, {
            x: 'Won',
            y: 470
        }, {
            x: 'Lost',
            y: 180
        }]
    }],
    chart: {
        type: 'bar',
        height: 250,
        plotOptions: {
            bar: {
                columnWidth: '30%',
                borderRadiusApplication: 'around',
            }
        },
        colors: ['#00918E'],
    },
};

var dealsChatrt = {
    series: [{
        name: "sales",
        colors: ['#FFC38F'],
        data: [{
            x: 'Inpipeline',
            y: 400,

        }, {
            x: 'Follow Up',
            y: 130
        }, {
            x: 'Schedule',
            y: 248
        }, {
            x: 'Conversation',
            y: 470
        }, {
            x: 'Won',
            y: 470
        }, {
            x: 'Lost',
            y: 180
        }]
    }],
    chart: {
        type: 'bar',
        height: 275,
        plotOptions: {
            bar: {
                borderRadiusApplication: 'around',
                columnWidth: '40%',
            }
        },
        colors: ['#00918E'],
        xaxis: {
            type: 'category',
            group: {
                style: {
                    fontSize: '7px',
                    fontWeight: 700,
                },
            }
        },
    },
};

export { wonChart, lastChart, leadsChart, dealsChatrt };
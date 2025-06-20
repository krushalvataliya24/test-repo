const dealsChart = {
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
            categories: ['Conversation', 'Follow Up', 'Inpipeline'
            ],
        }
    },
};

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

const dealsYear = {
    series: [{
        name: "Deals",
        data: [10, 20, 30, 15, 22, 40, 30, 20, 30, 18, 30, 60]
    }],
    chart: {
        height: 273,
        type: 'area',
        zoom: {
            enabled: false
        },
        colors: ['#E41F07'],
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'straight'
        },
        title: {
            text: '',
            align: 'left'
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        },
        yaxis: {
            min: 10,
            max: 60,
            tickAmount: 5,
            labels: {
                formatter: (val) => {
                    return val / 1 + 'K'
                }
            }
        },
        legend: {
            position: 'top',
            horizontalAlign: 'left'
        }
    },
};

const reportChart = {
    series: [{
        name: "Reports",
        data: [40, 30, 20, 30, 22, 20, 30, 20, 22, 30, 15, 20]
    }],
    chart: {
        height: 273,
        type: 'area',
        zoom: {
            enabled: false
        },
        colors: ['#4A00E5'],
        dataLabels: {
            enabled: false
        },
        title: {
            text: '',
            align: 'left'
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        },
        yaxis: {
            min: 10,
            max: 60,
            tickAmount: 5,
            labels: {
                formatter: (val) => {
                    return val / 1 + 'K'
                }
            }
        },
        legend: {
            position: 'top',
            horizontalAlign: 'left'
        }
    },
};


export { dealsChart, lastChart, wonChart, dealsYear, reportChart };
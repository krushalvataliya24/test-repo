const projectCharts = {
  series: [
    {
      name: "project",
      data: [15, 20, 17, 40, 22, 40, 30, 15, 55, 30, 20, 25],
    },
  ],
  proCharts: {
    chart: {
      height: 273,
      type: "line",
      zoom: {
        enabled: false,
      },
    },
    colors: ["#EA00B7"],
    dataLabels: {
      enabled: false,
    },
    stroke: {
      curve: "smooth",
    },
    title: {
      text: "",
      align: "left",
    },
    xaxis: {
      categories: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
      ],
    },
    yaxis: {
      min: 10,
      max: 60,
      tickAmount: 5,
      labels: {
        formatter: (val) => {
          return val / 1 + "K";
        },
      },
    },
    legend: {
      position: "top",
      horizontalAlign: "left",
    },
  },
};
const projecttypeCharts = {
  series: [34, 55, 50, 17],
  protypeCharts: {
    chart: {
      type: "donut",
    },
    colors: ["#4A00E5", "#5CB85C", "#339DFF", "#FFA201"],
    labels: ["Plan", "Completed", "Develop", "Design"],
    plotOptions: {
      pie: {
        startAngle: -90,
        endAngle: 270,
      },
    },
    dataLabels: {
      enabled: false,
    },
    legend: {
      position: "bottom",
      formatter: function (val, opts) {
        return val + " - " + opts.w.globals.series[opts.seriesIndex];
      },
    },
    responsive: [
      {
        breakpoint: 480,
        options: {
          chart: {
            width: 200,
          },
          legend: {
            position: "bottom",
          },
        },
      },
    ],
  },
};
export { projecttypeCharts,projectCharts };
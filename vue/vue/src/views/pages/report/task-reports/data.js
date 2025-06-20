const taskYearCharts = {
  series: [
    {
      name: "Task",
      data: [10, 38, 18, 47, 13, 32, 15, 40, 18, 50, 30, 15],
    },
  ],
  taskCharts: {
    chart: {
      height: 273,
      type: "line",
      zoom: {
        enabled: false,
      },
    },
    colors: ["#3C2371"],
    dataLabels: {
      enabled: false,
    },
    stroke: {
      curve: "stepline",
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
const taskTypeCharts = {
  series: [34, 55, 50, 17],
  taskTyCharts: {
    chart: {
      type: "donut",
    },
    colors: ["#4A00E5", "#0092E4", "#E41F07", "#FFA201"],
    labels: ["Calls", "Meeting", "Task", "Email"],
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
export { taskYearCharts,taskTypeCharts };
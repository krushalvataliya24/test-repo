const dealReport = {
  series: [
    {
      name: "Won Deals",
      data: [110, 85, 100, 90, 85, 105, 90, 115, 95],
    },
    {
      name: "Lost Deals",
      data: [45, 55, 50, 55, 40, 60, 55, 60, 66],
    },
  ],
  delCharts: {
    chart: {
      height: 270,
      type: "bar",
      toolbar: {
        show: false,
      },
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: "55%",
        endingShape: "rounded",
      },
    },
    colors: ["#5CB85C", "#FC0027"],
    dataLabels: {
      enabled: false,
    },
    stroke: {
      show: true,
      width: 2,
      colors: ["transparent"],
    },

    xaxis: {
      categories: [
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
      ],
    },
    fill: {
      opacity: 1,
    },
    tooltip: {
      y: {
        formatter: function (val) {
          return val + " Deals";
        },
      },
    },
  },
};

const anaDealcharts = {
  series: [44, 55, 41, 17],
  dealAnschatrs: {
    chart: {
      type: "donut",
    },
    colors: ["#0092E4", "#4A00E5", "#E41F07", "#FFA201"],
    labels: ["Campaigns", "Google", "Referrals", "Paid Social"],
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

export { dealReport,anaDealcharts };

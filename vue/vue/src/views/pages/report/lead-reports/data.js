const analysisCharts= {
  series: [44, 55, 41, 17],
  AnaCharts: {
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
const reportCharts = {
  series: [
    {
      name: "Reports",
      colors: ["#FFC38F"],
      data: [
        {
          x: "Jan",
          y: 400,
        },
        {
          x: "Feb",
          y: 130,
        },
        {
          x: "Mar",
          y: 240,
        },
        {
          x: "Apr",
          y: 450,
        },
        {
          x: "May",
          y: 250,
        },
        {
          x: "Jun",
          y: 180,
        },
        {
          x: "Jul",
          y: 300,
        },
        {
          x: "Aug",
          y: 240,
        },
        {
          x: "Sep",
          y: 300,
        },
        {
          x: "Oct",
          y: 150,
        },
        {
          x: "Nov",
          y: 250,
        },
        {
          x: "Dec",
          y: 500,
        },
      ],
    },
  ],
  RepCharts: {
    chart: {
      type: "bar",
      height: 275,
    },
    plotOptions: {
      bar: {
        borderRadiusApplication: "around",
        columnWidth: "50%",
      },
    },
    colors: ["#00918E"],
    xaxis: {
      type: "category",
      group: {
        style: {
          fontSize: "0px",
          fontWeight: 700,
        },
      },
    },
  },
};
export { analysisCharts,reportCharts };

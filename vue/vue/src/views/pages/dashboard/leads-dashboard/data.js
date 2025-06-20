const leadpieChart = {
  series: [44, 55, 13, 43],
  pieCharts: {
    chart: {
      width: 450,
      type: "pie",
    },
    labels: ["Inpipeline", "Follow Up", "Schedule Service", "Conversation"],
    responsive: [
      {
        breakpoint: 480,
        options: {
          chart: {
            width: 275,
          },
          legend: {
            position: "right",
          },
        },
      },
    ],
  },
};
const contactReportChart = {
  series: [
    {
      name: "Reports",
      data: [40, 30, 20, 30, 22, 20, 30, 20, 22, 30, 15, 20],
    },
  ],
  reportCharts: {
    chart: {
      height: 273,
      type: "area",
      zoom: {
        enabled: false,
      },
    },
    colors: ["#4A00E5"],
    dataLabels: {
      enabled: false,
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
const leadLastChart = {
  series: [
    {
      data: [400, 220, 448],
    },
  ],
  lastCharts: {
    chart: {
      type: "bar",
      height: 150,
    },

    plotOptions: {
      bar: {
        horizontal: true,
      },
    },
    dataLabels: {
      enabled: false,
    },
    colors: ["#FC0027"],
    xaxis: {
      categories: ["Conversation", "Follow Up", "Inpipeline"],
    },
  },
};

const leadWonCharts = {
  series: [
    {
      data: [400, 122, 250],
    },
  ],
  wonCharts: {
    chart: {
      type: "bar",
      height: 150,
    },
    plotOptions: {
      bar: {
        horizontal: true,
      },
    },
    dataLabels: {
      enabled: false,
    },
    colors: ["#5CB85C"],
    xaxis: {
      categories: ["Conversation", "Follow Up", "Inpipeline"],
    },
  },
};

export { leadpieChart, contactReportChart, leadLastChart, leadWonCharts };

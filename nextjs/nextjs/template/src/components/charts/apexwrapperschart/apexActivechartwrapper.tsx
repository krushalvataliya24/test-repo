"use client";

import React, { useEffect, useRef } from "react";
import ApexCharts from "apexcharts";

const ApexActiveChartWrapper: React.FC = () => {
  const chartRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    if (!chartRef.current) return;

    const options = {
      series: [
        {
          name: "sales",
          colors: ["#FFC38F"],
          data: [
            {
              x: "Inpipeline",
              y: 400,
            },
            {
              x: "Follow Up",
              y: 130,
            },
            {
              x: "Schedule",
              y: 248,
            },
            {
              x: "Conversation",
              y: 470,
            },
            {
              x: "Won",
              y: 470,
            },
            {
              x: "Lost",
              y: 180,
            },
          ],
        },
      ],
      chart: {
        type: "bar",
        height: 275,
      },
      plotOptions: {
        bar: {
          borderRadiusApplication: "around",
          columnWidth: "40%",
        },
      },
      colors: ["#00918E"],
      xaxis: {
        type: "category",
        group: {
          style: {
            fontSize: "7px",
            fontWeight: 700,
          },
        },
      },
      yaxis: {
        min: 0,
        max: 500,
        tickAmount: 5,
      },
    };

    const chart = new ApexCharts(chartRef.current, options);
    chart.render();

    return () => {
      chart.destroy();
    };
  }, []);

  return <div ref={chartRef} id="active-chart"></div>;
};

export default ApexActiveChartWrapper;
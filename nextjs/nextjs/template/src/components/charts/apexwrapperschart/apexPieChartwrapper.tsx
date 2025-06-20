"use client";

import React, { useEffect, useRef } from "react";
import ApexCharts from "apexcharts";

const ApexActiveChartWrapper: React.FC = () => {
  const chartRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    if (!chartRef.current) return;

    const options = {
      series: [44, 55, 13, 43],
      chart: {
        width: 400,
        height: 300,
        type: "pie",
      },
      legend: {
        position: "bottom",
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
              position: "bottom",
            },
          },
        },
      ],
    }


    const chart = new ApexCharts(chartRef.current, options);
    chart.render();

    return () => {
      chart.destroy();
    };
  }, []);

  return <div ref={chartRef} id="active-chart"></div>;
};

export default ApexActiveChartWrapper;
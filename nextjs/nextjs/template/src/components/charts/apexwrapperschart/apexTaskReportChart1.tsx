"use client";

import React, { useEffect, useRef } from "react";
import ApexCharts from "apexcharts";

const ApexActiveChartWrapper: React.FC = () => {
  const chartRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    if (!chartRef.current) return;

    const options = {
       series: [44, 55, 41, 17],
          chart: {
            type: "donut",
          },
          colors: ["#4A00E5", "#0092E4", "#E41F07", "#FFA201"],
          dataLabels: {
            enabled: false,
          },
          title: {
            text: "",
            align: "left",
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
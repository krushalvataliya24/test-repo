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
          name: "Reports",
          colors: ["#FFC38F"],
          data: [
            { x: "Jan", y: 400 },
            { x: "Feb", y: 130 },
            { x: "Mar", y: 240 },
            { x: "Apr", y: 450 },
            { x: "May", y: 250 },
            { x: "Jun", y: 180 },
            { x: "Jul", y: 300 },
            { x: "Aug", y: 240 },
            { x: "Sep", y: 300 },
            { x: "Oct", y: 150 },
            { x: "Nov", y: 250 },
            { x: "Dec", y: 500 },
          ],
        },
      ],
      colors: ["#00918E"],
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
      xaxis: {
        type: "category",
        group: {
          style: {
            fontSize: "0px",
            fontWeight: 700,
          },
        },
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
"use client";

import React, { useEffect, useRef } from "react";
import ApexCharts from "apexcharts";

const ApexActiveChartWrapper: React.FC = () => {
  const chartRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    if (!chartRef.current) return;

    const options = {
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
              formatter: function (val: number) {
                return val + " Deals";
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
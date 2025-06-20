import React, { useEffect, useRef } from 'react'
import ApexCharts from "apexcharts";
const LeadByStage = () => {
    const leadschat = useRef(null);

  useEffect(() => {
    if (leadschat.current) {
      const options = {
        series: [
          {
            name: "sales",
            colors: ["#BEA4F2"],
            data: [
              {
                x: "Inpipeline",
                y: 400,
              },
              {
                x: "Follow Up",
                y: 30,
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
          height: 250,
        },
        plotOptions: {
          bar: {
            columnWidth: "30%",
            borderRadiusApplication: "around",
          },
        },
        colors: ["#00918E"],
      };

      const chartInstance = new ApexCharts(leadschat.current, options);
      chartInstance.render();

      return () => {
        chartInstance.destroy();
      };
    }
  }, []);
 
  return (
    <div id="leads-chart" ref={leadschat} />
  )
}

export default LeadByStage
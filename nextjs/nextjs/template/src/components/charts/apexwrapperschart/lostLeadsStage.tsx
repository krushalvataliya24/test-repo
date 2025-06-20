import React, { useEffect, useRef } from 'react'
import ApexCharts from "apexcharts";
const LostLeadStage = () => {
  //  Leads By Stage
  const LeadsBySatge = useRef(null);

  useEffect(() => {
    if (LeadsBySatge.current) {
      const options = {
        series: [
          {
            data: [400, 220, 448],
          },
        ],
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
      };

      const chart = new ApexCharts(LeadsBySatge.current, options);
      chart.render();

      // Cleanup on unmount
      return () => {
        chart.destroy();
      };
    }
  }, []);   
  return (
    <div id="last-chart" ref={LeadsBySatge} />
  )
}

export default LostLeadStage
import React, { useEffect, useRef } from 'react'
import ApexCharts from "apexcharts";
const WonDealStage = () => {
      // Won Deals Chat
  const wonChat = useRef(null);
  useEffect(() => {
    const options = {
      series: [
        {
          data: [400, 122, 250],
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
      colors: ["#5CB85C"],
      xaxis: {
        categories: ["Conversation", "Follow Up", "Inpipeline"],
      },
    };

    if (wonChat.current) {
      const chart = new ApexCharts(wonChat.current, options);
      chart.render();

      // Cleanup on unmount
      return () => {
        chart.destroy();
      };
    }
  }, []);
  return (
    <div id="won-chart" ref={wonChat} />
  )
}

export default WonDealStage
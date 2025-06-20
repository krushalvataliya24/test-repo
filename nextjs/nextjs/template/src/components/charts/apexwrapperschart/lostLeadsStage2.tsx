import React, { useEffect, useRef } from 'react'
import ApexCharts from "apexcharts";
const LostLeadStage2 = () => {
 //  Leads By Stage
 const LeadsBySatge2 = useRef(null);

 useEffect(() => {
   if (LeadsBySatge2.current) {
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

     const chart = new ApexCharts(LeadsBySatge2.current, options);
     chart.render();

     // Cleanup on unmount
     return () => {
       chart.destroy();
     };
   }
 }, []);
  return (
    <div id="last-chart-2" ref={LeadsBySatge2} />
  )
}

export default LostLeadStage2
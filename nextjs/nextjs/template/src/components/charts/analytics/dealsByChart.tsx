import React, { useEffect, useRef } from "react";
import dynamic from "next/dynamic";

// Dynamically import the wrapper component
const ApexChartWrapper = dynamic(() => import('../apexwrapperschart/dealsByStage'), { ssr: false });

const DealsByCharts: React.FC = () => {
  return <ApexChartWrapper />;
};

export default DealsByCharts;

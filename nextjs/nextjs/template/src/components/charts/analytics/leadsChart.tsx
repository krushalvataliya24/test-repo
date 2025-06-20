import React, { useEffect, useRef } from "react";
import dynamic from "next/dynamic";

// Dynamically import the wrapper component
const ApexChartWrapper = dynamic(() => import('../apexwrapperschart/leadsByStage'), { ssr: false });

const LeadsChartComponent: React.FC = () => {
  return <ApexChartWrapper />;
};

export default LeadsChartComponent;

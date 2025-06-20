import React, { useEffect, useRef } from "react";
import dynamic from "next/dynamic";

// Dynamically import the wrapper component
const ApexChartWrapper = dynamic(() => import('../apexwrapperschart/lostLeadsStage'), { ssr: false });

const LostChartComponent: React.FC = () => {
  return <ApexChartWrapper />;
};

export default LostChartComponent;

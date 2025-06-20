import React, { useEffect, useRef } from "react";
import dynamic from "next/dynamic";

// Dynamically import the wrapper component
const ApexChartWrapper = dynamic(() => import('../apexwrapperschart/wonDealStage'), { ssr: false });

const WonChartComponent: React.FC = () => {
  return <ApexChartWrapper />;
};

export default WonChartComponent;

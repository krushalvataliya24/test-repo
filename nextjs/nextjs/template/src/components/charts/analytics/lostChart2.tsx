import React, { useEffect, useRef } from "react";
import dynamic from "next/dynamic";

// Dynamically import the wrapper component
const ApexChartWrapper = dynamic(() => import('../apexwrapperschart/lostLeadsStage2'), { ssr: false });

const LostChartComponent2: React.FC = () => {
  return <ApexChartWrapper />;
};

export default LostChartComponent2;

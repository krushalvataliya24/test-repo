import React, { useEffect, useRef } from "react";
import dynamic from "next/dynamic";

// Dynamically import the wrapper component
const ApexChartWrapper = dynamic(() => import('../apexwrapperschart/apexExpiredSubscriptionchartwrapper'), { ssr: false });

const ExpiredsubscriptionChart: React.FC = () => {
  return <ApexChartWrapper />;
};

export default ExpiredsubscriptionChart;

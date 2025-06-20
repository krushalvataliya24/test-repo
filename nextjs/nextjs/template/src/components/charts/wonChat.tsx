"use client";

import dynamic from "next/dynamic";
import React from "react";

const ApexChartWrapper = dynamic(() => import('./apexwrapperschart/apexWonChartwrapper'), { ssr: false });

const WonChart: React.FC = () => {
  return <ApexChartWrapper />;
};

export default WonChart;

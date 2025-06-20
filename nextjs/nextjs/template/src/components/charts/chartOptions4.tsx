"use client";

import dynamic from "next/dynamic";
import React from "react";

const ApexChartWrapper = dynamic(() => import('./apexwrapperschart/apexChartOption4wrapper'), { ssr: false });

const ChartOptions4: React.FC = () => {
  return <ApexChartWrapper />;
};

export default ChartOptions4;

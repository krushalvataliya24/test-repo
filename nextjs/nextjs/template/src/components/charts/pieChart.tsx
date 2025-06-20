"use client";

import dynamic from "next/dynamic";
import React from "react";

const ApexChartWrapper = dynamic(() => import('./apexwrapperschart/apexPieChartwrapper'), { ssr: false });

const PieChart: React.FC = () => {
  return <ApexChartWrapper />;
};

export default PieChart;

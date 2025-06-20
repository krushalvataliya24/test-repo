"use client";

import dynamic from "next/dynamic";
import React from "react";

const ApexChartWrapper = dynamic(() => import('../charts/apexwrapperschart/apexActivechartwrapper'), { ssr: false });

const ChartRef: React.FC = () => {
  return <ApexChartWrapper />;
};

export default ChartRef;

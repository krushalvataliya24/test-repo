"use client";

import dynamic from "next/dynamic";
import React from "react";

const ApexChartWrapper = dynamic(() => import('./apexwrapperschart/apexDealsByYearwrapper'), { ssr: false });

const DealsByYears: React.FC = () => {
  return <ApexChartWrapper />;
};

export default DealsByYears;

"use client";

import dynamic from "next/dynamic";
import React from "react";

const ApexChartWrapper = dynamic(() => import('./apexwrapperschart/apexDealsReportChart2'), { ssr: false });

const DealsReportChart2: React.FC = () => {
  return <ApexChartWrapper />;
};

export default DealsReportChart2;

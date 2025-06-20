"use client";

import dynamic from "next/dynamic";
import React from "react";

const ApexChartWrapper = dynamic(() => import('./apexwrapperschart/apexDealsReportChart1'), { ssr: false });

const DealsReportChart1: React.FC = () => {
  return <ApexChartWrapper />;
};

export default DealsReportChart1;

"use client";

import dynamic from "next/dynamic";
import React from "react";

const ApexChartWrapper = dynamic(() => import('./apexwrapperschart/apexLeadsReportChart1'), { ssr: false });

const LeadsReportChart1: React.FC = () => {
  return <ApexChartWrapper />;
};

export default LeadsReportChart1;

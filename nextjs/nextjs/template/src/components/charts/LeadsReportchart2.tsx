"use client";

import dynamic from "next/dynamic";
import React from "react";

const ApexChartWrapper = dynamic(() => import('./apexwrapperschart/apexLeadsReportChart2'), { ssr: false });

const LeadsReportChart2: React.FC = () => {
  return <ApexChartWrapper />;
};

export default LeadsReportChart2;

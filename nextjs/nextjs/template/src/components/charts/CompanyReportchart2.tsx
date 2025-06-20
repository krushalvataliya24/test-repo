"use client";

import dynamic from "next/dynamic";
import React from "react";

const ApexChartWrapper = dynamic(() => import('./apexwrapperschart/apexCompanyReportChart2'), { ssr: false });

const CompanyReportChart2: React.FC = () => {
  return <ApexChartWrapper />;
};

export default CompanyReportChart2;

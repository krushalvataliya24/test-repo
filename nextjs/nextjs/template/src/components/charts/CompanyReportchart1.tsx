"use client";

import dynamic from "next/dynamic";
import React from "react";

const ApexChartWrapper = dynamic(() => import('./apexwrapperschart/apexCompanyReportChart1'), { ssr: false });

const CompanyReportChart1: React.FC = () => {
  return <ApexChartWrapper />;
};

export default CompanyReportChart1;

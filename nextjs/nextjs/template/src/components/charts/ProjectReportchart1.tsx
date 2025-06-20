"use client";

import dynamic from "next/dynamic";
import React from "react";

const ApexChartWrapper = dynamic(() => import('./apexwrapperschart/apexTaskReportChart1'), { ssr: false });

const ProjectReportChart1: React.FC = () => {
  return <ApexChartWrapper />;
};

export default ProjectReportChart1;

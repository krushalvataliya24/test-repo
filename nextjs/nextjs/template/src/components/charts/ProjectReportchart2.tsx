"use client";

import dynamic from "next/dynamic";
import React from "react";

const ApexChartWrapper = dynamic(() => import('./apexwrapperschart/apexProjectsReportChart2'), { ssr: false });

const ProjectReportChart2: React.FC = () => {
  return <ApexChartWrapper />;
};

export default ProjectReportChart2;

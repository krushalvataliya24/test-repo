"use client";

import dynamic from "next/dynamic";
import React from "react";

const ApexChartWrapper = dynamic(() => import('./apexwrapperschart/apexProjectChart1wrapper'), { ssr: false });

const ProjectChart1: React.FC = () => {
  return <ApexChartWrapper />;
};

export default ProjectChart1;

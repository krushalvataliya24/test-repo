"use client";

import dynamic from "next/dynamic";
import React from "react";

const ApexChartWrapper = dynamic(() => import('./apexwrapperschart/apexProjectChart2wrapper'), { ssr: false });

const ProjectChart2: React.FC = () => {
  return <ApexChartWrapper />;
};

export default ProjectChart2;

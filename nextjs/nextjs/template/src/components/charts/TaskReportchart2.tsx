"use client";

import dynamic from "next/dynamic";
import React from "react";

const ApexChartWrapper = dynamic(() => import('./apexwrapperschart/apexTaskReportChart2'), { ssr: false });

const TaskReportChart2: React.FC = () => {
  return <ApexChartWrapper />;
};

export default TaskReportChart2;

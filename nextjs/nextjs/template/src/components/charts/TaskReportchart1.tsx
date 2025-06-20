"use client";

import dynamic from "next/dynamic";
import React from "react";

const ApexChartWrapper = dynamic(() => import('./apexwrapperschart/apexTaskReportChart1'), { ssr: false });

const TaskReportChart1: React.FC = () => {
  return <ApexChartWrapper />;
};

export default TaskReportChart1;

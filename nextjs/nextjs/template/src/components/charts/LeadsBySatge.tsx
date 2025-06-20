"use client";

import dynamic from "next/dynamic";
import React from "react";

const ApexChartWrapper = dynamic(() => import('./apexwrapperschart/apexLeadsByStagewrapper'), { ssr: false });

const LeadsByStage: React.FC = () => {
  return <ApexChartWrapper />;
};

export default LeadsByStage;

"use client";

import dynamic from "next/dynamic";
import React from "react";

const ApexChartWrapper = dynamic(() => import('./apexwrapperschart/apexContactReportChart2'), { ssr: false });

const ContactReportChart2: React.FC = () => {
  return <ApexChartWrapper />;
};

export default ContactReportChart2;

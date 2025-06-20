"use client";

import dynamic from "next/dynamic";
import React from "react";

const ApexChartWrapper = dynamic(() => import('./apexwrapperschart/apexContactReportChart1 '), { ssr: false });

const ContactReportChart1: React.FC = () => {
  return <ApexChartWrapper />;
};

export default ContactReportChart1;

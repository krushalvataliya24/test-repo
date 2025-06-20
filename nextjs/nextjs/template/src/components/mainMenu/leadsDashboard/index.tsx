"use client";
/* eslint-disable @next/next/no-img-element */

import React, { useState } from "react";
import DateRangePicker from "react-bootstrap-daterangepicker";
import Chart from "react-apexcharts";
import CollapseHeader from "../../../core/common/collapse-header";
import { all_routes } from "@/data/all_routes";
import Link from "next/link";
import LeadsByStage from "@/components/charts/LeadsBySatge";
import WonChart from "@/components/charts/wonChat";
import PieChart from "@/components/charts/pieChart";
import ChartOptions4 from "@/components/charts/chartOptions4";

const route = all_routes;
const LeadsDashboardComponent = () => {

  const initialSettings = {
    endDate: new Date("2020-08-11T12:30:00.000Z"),
    ranges: {
      "Last 30 Days": [
        new Date("2020-07-12T04:57:17.076Z"),
        new Date("2020-08-10T04:57:17.076Z"),
      ],
      "Last 7 Days": [
        new Date("2020-08-04T04:57:17.076Z"),
        new Date("2020-08-10T04:57:17.076Z"),
      ],
      "Last Month": [
        new Date("2020-06-30T18:30:00.000Z"),
        new Date("2020-07-31T18:29:59.999Z"),
      ],
      "This Month": [
        new Date("2020-07-31T18:30:00.000Z"),
        new Date("2020-08-31T18:29:59.999Z"),
      ],
      Today: [
        new Date("2020-08-10T04:57:17.076Z"),
        new Date("2020-08-10T04:57:17.076Z"),
      ],
      Yesterday: [
        new Date("2020-08-09T04:57:17.076Z"),
        new Date("2020-08-09T04:57:17.076Z"),
      ],
    },
    startDate: new Date("2020-08-04T04:57:17.076Z"), // Set "Last 7 Days" as default
    timePicker: false,
  };
  return (
    <div>
      {/* Page Wrapper */}
      <div className="page-wrapper">
        <div className="content">
          <div className="row">
            <div className="col-md-12">
              <div className="page-header">
                <div className="row align-items-center ">
                  <div className="col-md-4">
                    <h3 className="page-title">Leads Dashboard</h3>
                  </div>
                  <div className="col-md-8 float-end ms-auto">
                    <div className="d-flex title-head">
                      <div className="daterange-picker d-flex align-items-center justify-content-center">
                        <div className="form-sort me-2">
                          <i className="ti ti-calendar" />
                          <DateRangePicker initialSettings={initialSettings}>
                            <input
                              className="form-control bookingrange"
                              type="text"
                            />
                          </DateRangePicker>
                        </div>
                        <div className="head-icons mb-0">
                          <CollapseHeader />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="row">
            <div className="col-md-7">
              <div className="card">
                <div className="card-header border-0 pb-0">
                  <div className="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h4>
                      <i className="ti ti-grip-vertical me-1" />
                      Recently Created Leads
                    </h4>
                    <div className="dropdown">
                      <Link
                        className="dropdown-toggle"
                        data-bs-toggle="dropdown"
                        href="#"
                      >
                        <i className="ti ti-calendar-check me-2" />
                        Last 30 days
                      </Link>
                      <div className="dropdown-menu dropdown-menu-end">
                        <Link href="#" className="dropdown-item">
                          Last 15 days
                        </Link>
                        <Link href="#" className="dropdown-item">
                          Last 30 days
                        </Link>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="card-body">
                  <div className="table-responsive custom-table">
                    <table className="table dataTable" id="lead-project">
                      <thead className="thead-light">
                        <tr>
                          <th>Lead Name</th>
                          <th>Company Name</th>
                          <th>Phone</th>
                          <th>Lead Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr className="odd">
                          <td>Collins</td>
                          <td>
                            <h2 className="d-flex align-items-center">
                              <Link
                                href={route.companyDetails}
                                className="avatar avatar-sm border me-2"
                              >
                                <img
                                  className="w-auto h-auto"
                                  src="assets/img/icons/company-icon-01.svg"
                                  alt="User Image"
                                />
                              </Link>
                              <Link
                                href={route.companyDetails}
                                className="d-flex flex-column"
                              >
                                NovaWave LLC
                                <span className="text-default">
                                  Newyork, USA{" "}
                                </span>
                              </Link>
                            </h2>
                          </td>
                          <td>+1 875455453</td>
                          <td>
                            <span className="badge badge-pill  bg-pending">
                              {" "}
                              Not Contacted
                            </span>
                          </td>
                        </tr>
                        <tr className="even">
                          <td>Konopelski</td>
                          <td>
                            <h2 className="d-flex align-items-center">
                              <Link
                                href={route.companyDetails}
                                className="avatar avatar-sm border me-2"
                              >
                                <img
                                  className="w-auto h-auto"
                                  src="assets/img/icons/company-icon-02.svg"
                                  alt="User Image"
                                />
                              </Link>
                              <Link
                                href={route.companyDetails}
                                className="d-flex flex-column"
                              >
                                BlueSky Industries
                                <span className="text-default">
                                  Winchester, KY{" "}
                                </span>
                              </Link>
                            </h2>
                          </td>
                          <td>+1 989757485</td>
                          <td>
                            <span className="badge badge-pill  bg-warning">
                              {" "}
                              Contacted
                            </span>
                          </td>
                        </tr>
                        <tr className="odd">
                          <td>Adams</td>
                          <td>
                            <h2 className="d-flex align-items-center">
                              <Link
                                href={route.companyDetails}
                                className="avatar avatar-sm border me-2"
                              >
                                <img
                                  className="w-auto h-auto"
                                  src="assets/img/icons/company-icon-03.svg"
                                  alt="User Image"
                                />
                              </Link>
                              <Link
                                href={route.companyDetails}
                                className="d-flex flex-column"
                              >
                                SilverHawk
                                <span className="text-default">
                                  Jametown, NY{" "}
                                </span>
                              </Link>
                            </h2>
                          </td>
                          <td>+1 546555455</td>
                          <td>
                            <span className="badge badge-pill  bg-warning">
                              {" "}
                              Contacted
                            </span>
                          </td>
                        </tr>
                        <tr className="even">
                          <td>Schumm</td>
                          <td>
                            <h2 className="d-flex align-items-center">
                              <Link
                                href={route.companyDetails}
                                className="avatar avatar-sm border me-2"
                              >
                                <img
                                  className="w-auto h-auto"
                                  src="assets/img/icons/company-icon-04.svg"
                                  alt="User Image"
                                />
                              </Link>
                              <Link
                                href={route.companyDetails}
                                className="d-flex flex-column"
                              >
                                SummitPeak
                                <span className="text-default">
                                  Compton, RI{" "}
                                </span>
                              </Link>
                            </h2>
                          </td>
                          <td>+1 454478787</td>
                          <td>
                            <span className="badge badge-pill  bg-pending">
                              {" "}
                              Not Contacted
                            </span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div className="col-md-5 d-flex">
              <div className="card w-100">
                <div className="card-header border-0 pb-0">
                  <div className="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h4>
                      <i className="ti ti-grip-vertical me-1" />
                      Projects By Stage
                    </h4>
                    <div className="dropdown">
                      <Link
                        className="dropdown-toggle"
                        data-bs-toggle="dropdown"
                        href="#"
                      >
                        Last 30 Days
                      </Link>
                      <div className="dropdown-menu dropdown-menu-end">
                        <Link href="#" className="dropdown-item">
                          Last 30 Days
                        </Link>
                        <Link href="#" className="dropdown-item">
                          Last 15 Days
                        </Link>
                        <Link href="#" className="dropdown-item">
                          Last 7 Days
                        </Link>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="card-body">
                  <div id="leadpiechart">
                    <PieChart/>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="row">
            <div className="col-md-12 d-flex">
              <div className="card w-100">
                <div className="card-header border-0 pb-0">
                  <div className="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h4>
                      <i className="ti ti-grip-vertical me-1" />
                      Projects By Stage
                    </h4>
                    <div className="d-flex align-items-center flex-wrap row-gap-2">
                      <div className="dropdown me-2">
                        <Link
                          className="dropdown-toggle"
                          data-bs-toggle="dropdown"
                          href="#"
                        >
                          Sales Pipeline
                        </Link>
                        <div className="dropdown-menu dropdown-menu-end">
                          <Link href="#" className="dropdown-item">
                            Marketing Pipeline
                          </Link>
                          <Link href="#" className="dropdown-item">
                            Sales Pipeline
                          </Link>
                          <Link href="#" className="dropdown-item">
                            Email
                          </Link>
                          <Link href="#" className="dropdown-item">
                            Chats
                          </Link>
                          <Link href="#" className="dropdown-item">
                            Operational
                          </Link>
                        </div>
                      </div>
                      <div className="dropdown">
                        <Link
                          className="dropdown-toggle"
                          data-bs-toggle="dropdown"
                          href="#"
                        >
                          Last 30 Days
                        </Link>
                        <div className="dropdown-menu dropdown-menu-end">
                          <Link href="#" className="dropdown-item">
                            Last 30 Days
                          </Link>
                          <Link href="#" className="dropdown-item">
                            Last 15 Days
                          </Link>
                          <Link href="#" className="dropdown-item">
                            Last 7 Days
                          </Link>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="card-body">
                  <div id="contact-report">
                    <ChartOptions4/>
                  </div>
                </div>
              </div>
            </div>
            <div className="col-md-6">
              <div className="card">
                <div className="card-header border-0 pb-0">
                  <div className="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h4>
                      <i className="ti ti-grip-vertical me-1" />
                      Leads By Stage
                    </h4>
                    <div className="d-flex align-items-center flex-wrap row-gap-2">
                      <div className="dropdown me-2">
                        <Link
                          className="dropdown-toggle"
                          data-bs-toggle="dropdown"
                          href="#"
                        >
                          Marketing Pipeline
                        </Link>
                        <div className="dropdown-menu dropdown-menu-end">
                          <Link href="#" className="dropdown-item">
                            Marketing Pipeline
                          </Link>
                          <Link href="#" className="dropdown-item">
                            Sales Pipeline
                          </Link>
                          <Link href="#" className="dropdown-item">
                            Email
                          </Link>
                          <Link href="#" className="dropdown-item">
                            Chats
                          </Link>
                          <Link href="#" className="dropdown-item">
                            Operational
                          </Link>
                        </div>
                      </div>
                      <div className="dropdown">
                        <Link
                          className="dropdown-toggle"
                          data-bs-toggle="dropdown"
                          href="#"
                        >
                          Last 3 months
                        </Link>
                        <div className="dropdown-menu dropdown-menu-end">
                          <Link href="#" className="dropdown-item">
                            Last 3 months
                          </Link>
                          <Link href="#" className="dropdown-item">
                            Last 6 months
                          </Link>
                          <Link href="#" className="dropdown-item">
                            Last 12 months
                          </Link>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="card-body">
                  <div id="last-chart">
                   <LeadsByStage/>
                  </div>
                </div>
              </div>
            </div>
            <div className="col-md-6">
              <div className="card">
                <div className="card-header border-0 pb-0">
                  <div className="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h4>
                      <i className="ti ti-grip-vertical me-1" />
                      Won Deals Stage
                    </h4>
                    <div className="d-flex align-items-center flex-wrap row-gap-2">
                      <div className="dropdown me-2">
                        <Link
                          className="dropdown-toggle"
                          data-bs-toggle="dropdown"
                          href="#"
                        >
                          Marketing Pipeline
                        </Link>
                        <div className="dropdown-menu dropdown-menu-end">
                          <Link href="#" className="dropdown-item">
                            Marketing Pipeline
                          </Link>
                          <Link href="#" className="dropdown-item">
                            Sales Pipeline
                          </Link>
                          <Link href="#" className="dropdown-item">
                            Email
                          </Link>
                          <Link href="#" className="dropdown-item">
                            Chats
                          </Link>
                          <Link href="#" className="dropdown-item">
                            Operational
                          </Link>
                        </div>
                      </div>
                      <div className="dropdown">
                        <Link
                          className="dropdown-toggle"
                          data-bs-toggle="dropdown"
                          href="#"
                        >
                          Last 3 months
                        </Link>
                        <div className="dropdown-menu dropdown-menu-end">
                          <Link href="#" className="dropdown-item">
                            Last 3 months
                          </Link>
                          <Link href="#" className="dropdown-item">
                            Last 6 months
                          </Link>
                          <Link href="#" className="dropdown-item">
                            Last 12 months
                          </Link>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="card-body ">
                  <div id="won-chart">
                    {" "}
                    <WonChart/>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default LeadsDashboardComponent;

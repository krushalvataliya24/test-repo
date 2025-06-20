"use client";
/* eslint-disable @next/next/no-img-element */

import React, { useState } from "react";
import DateRangePicker from "react-bootstrap-daterangepicker";
import Chart from "react-apexcharts";
import CollapseHeader from "../../../core/common/collapse-header";
import { SelectWithImage2 } from "../../../core/common/selectWithImage2";
import { useDispatch, useSelector } from "react-redux";
import Select from "react-select";
import {
  category,
  clientList,
  priorityList,
  projectTiming,
  projectType,
  status1,
} from "../../../core/common/selectoption/selectoption";
import DatePicker from "react-datepicker";
import { all_routes } from "@/data/all_routes";
import Link from "next/link";
import ProjectChart1 from "@/components/charts/projectsChart1";
import ProjectChart2 from "@/components/charts/projectsChart2";
import LeadsByStage from "@/components/charts/LeadsBySatge";
import WonChart from "@/components/charts/wonChat";

const route = all_routes;
const ProjectDashboardComponent = () => {
  const [chartOptions3] = useState<any>({
    series: [
      {
        data: [400, 220, 448],
        color: "#FC0027",
      },
    ],
    chart: {
      type: "bar",
      height: 150,
    },
    plotOptions: {
      bar: {
        horizontal: true,
      },
    },
    dataLabels: {
      enabled: false,
    },
    xaxis: {
      categories: ["Conversation", "Follow Up", "Inpipeline"],
      min: 0,
      max: 500,
      tickAmount: 5,
    },
  });
  const [chartOptions4] = useState<any>({
    series: [
      {
        data: [400, 220, 448],
        color: "#77D882",
      },
    ],
    chart: {
      type: "bar",
      height: 150,
    },
    plotOptions: {
      bar: {
        horizontal: true,
      },
    },
    dataLabels: {
      enabled: false,
    },
    xaxis: {
      categories: ["Conversation", "Follow Up", "Inpipeline"],
      min: 0,
      max: 500,
      tickAmount: 5,
    },
  });
  const [selectedDate, setSelectedDate] = useState<Date | null>(new Date());
  const handleDateChange = (date: Date | null) => {
    setSelectedDate(date);
  };
  const [selectedDate1, setSelectedDate1] = useState<Date | null>(new Date());
  const handleDateChange1 = (date: Date | null) => {
    setSelectedDate1(date);
  };
  const dispatch = useDispatch();
  const activityToggle = useSelector(
    (state: any) => state?.activityTogglePopup
  );
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
      {/* <Loader/> */}

      <div className="page-wrapper">
        <div className="content">
          <div className="row">
            <div className="col-md-12">
              <div className="page-header">
                <div className="row align-items-center ">
                  <div className="col-md-4">
                    <h3 className="page-title">Project Dashboard</h3>
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
                      Recent Projects
                    </h4>
                    <div className="d-flex align-items-center flex-wrap row-gap-3">
                      <div className="dropdown me-2">
                        <Link
                          className="dropdown-toggle"
                          data-bs-toggle="dropdown"
                          href="#"
                        >
                          <i className="ti ti-calendar-check me-2" />
                          Last 7 days
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
                      <Link
                        className="btn btn-primary"
                        href="#"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvas_add"
                      >
                        <i className="ti ti-square-rounded-plus me-1" />
                        Add Project
                      </Link>
                    </div>
                  </div>
                </div>
                <div className="card-body">
                  <div className="table-responsive custom-table">
                    <table className="table dataTable" id="recent-project">
                      <thead className="thead-light">
                        <tr>
                          <th>Priority</th>
                          <th>Name</th>
                          <th>Client</th>
                          <th>Due Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr className="odd">
                          <td>
                            <h2 className="d-flex align-items-center">
                              <Link
                                href={route.projectDetails}
                                className="avatar avatar-sm border me-2"
                              >
                                <img
                                  className="w-auto h-auto"
                                  src="assets/img/priority/truellysel.svg"
                                  alt="User Image"
                                />
                              </Link>
                              <Link href={route.projectDetails}>
                                Truelysell
                              </Link>
                            </h2>
                          </td>
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
                              <Link href={route.companyDetails}>
                                NovaWave LLC
                              </Link>
                            </h2>
                          </td>
                          <td>
                            <span className="badge badge-pill  bg-light-danger">
                              <span className="badge-dots" /> High
                            </span>
                          </td>
                          <td>15 Oct 2023</td>
                        </tr>
                        <tr className="even">
                          <td>
                            <h2 className="d-flex align-items-center">
                              <Link
                                href={route.projectDetails}
                                className="avatar avatar-sm border me-2"
                              >
                                <img
                                  className="w-auto h-auto"
                                  src="assets/img/priority/dreamchat.svg"
                                  alt="User Image"
                                />
                              </Link>
                              <Link href={route.projectDetails}>
                                Dreamschat
                              </Link>
                            </h2>
                          </td>
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
                              <Link href={route.companyDetails}>
                                BlueSky Industries
                              </Link>
                            </h2>
                          </td>
                          <td>
                            <span className="badge badge-pill  bg-light-warning">
                              <span className="badge-dots" /> Medium
                            </span>
                          </td>
                          <td>22 Oct 2023</td>
                        </tr>
                        <tr className="odd">
                          <td>
                            <h2 className="d-flex align-items-center">
                              <Link
                                href={route.projectDetails}
                                className="avatar avatar-sm border me-2"
                              >
                                <img
                                  className="w-auto h-auto"
                                  src="assets/img/priority/truellysell.svg"
                                  alt="User Image"
                                />
                              </Link>
                              <Link href={route.projectDetails}>
                                Truelysell
                              </Link>
                            </h2>
                          </td>
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
                              <Link href={route.companyDetails}>
                                SilverHawk
                              </Link>
                            </h2>
                          </td>
                          <td>
                            <span className="badge badge-pill  bg-light-danger">
                              <span className="badge-dots" /> High
                            </span>
                          </td>
                          <td>27 Oct 2023</td>
                        </tr>
                        <tr className="even">
                          <td>
                            <h2 className="d-flex align-items-center">
                              <Link
                                href={route.projectDetails}
                                className="avatar avatar-sm border me-2"
                              >
                                <img
                                  className="w-auto h-auto"
                                  src="assets/img/priority/servbook.svg"
                                  alt="User Image"
                                />
                              </Link>
                              <Link href={route.projectDetails}>Servbook</Link>
                            </h2>
                          </td>
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
                              <Link href={route.companyDetails}>
                                SummitPeak
                              </Link>
                            </h2>
                          </td>
                          <td>
                            <span className="badge badge-pill  bg-light-danger">
                              <span className="badge-dots" /> High
                            </span>
                          </td>
                          <td>01 Oct 2023</td>
                        </tr>
                        <tr className="odd">
                          <td>
                            <h2 className="d-flex align-items-center">
                              <Link
                                href={route.projectDetails}
                                className="avatar avatar-sm border me-2"
                              >
                                <img
                                  className="w-auto h-auto"
                                  src="assets/img/priority/dream-pos.svg"
                                  alt="User Image"
                                />
                              </Link>
                              <Link href={route.projectDetails}>DreamPOS</Link>
                            </h2>
                          </td>
                          <td>
                            <h2 className="d-flex align-items-center">
                              <Link
                                href={route.companyDetails}
                                className="avatar avatar-sm border me-2"
                              >
                                <img
                                  className="w-auto h-auto"
                                  src="assets/img/icons/company-icon-05.svg"
                                  alt="User Image"
                                />
                              </Link>
                              <Link href={route.companyDetails}>
                                RiverStone Ventur
                              </Link>
                            </h2>
                          </td>
                          <td>
                            <span className="badge badge-pill  bg-light-warning">
                              <span className="badge-dots" /> Medium
                            </span>
                          </td>
                          <td>06 Oct 2023</td>
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
                      Project By Stage
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
                  <div id="contacts-analysis">
                    <ProjectChart1 />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="row">
            <div className="col-md-6 d-flex">
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
                          Last 3 months
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
                  <div id="project-stage">
                    <ProjectChart2 />
                  </div>
                </div>
              </div>
            </div>
            <div className="col-md-6 ">
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
                  <div id="last-chart">
                    <LeadsByStage />
                  </div>
                </div>
              </div>
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
                <div className="card-body ">
                  <div id="won-chart">
                    <WonChart />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {/* /Page Wrapper */}
      <div
        className="offcanvas offcanvas-end offcanvas-large"
        tabIndex={-1}
        id="offcanvas_add"
      >
        <div className="offcanvas-header border-bottom">
          <h4>Add New Project</h4>
          <button
            type="button"
            className="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
          >
            <i className="ti ti-x" />
          </button>
        </div>
        <div className="offcanvas-body">
          <form>
            <div>
              <div className="row">
                <div className="col-md-12">
                  <div className="mb-3">
                    <label className="col-form-label">
                      Name <span className="text-danger">*</span>
                    </label>
                    <input type="text" className="form-control" />
                  </div>
                </div>
                <div className="col-md-6">
                  <div className="mb-3">
                    <label className="col-form-label">
                      Project ID<span className="text-danger"> *</span>
                    </label>
                    <input className="form-control" type="text" />
                  </div>
                </div>
                <div className="col-md-6">
                  <div className="mb-3">
                    <label className="col-form-label">
                      Project Type <span className="text-danger">*</span>
                    </label>
                    <Select
                      options={projectType}
                      className="select"
                      placeholder="Select"
                      classNamePrefix="react-select"
                    />
                  </div>
                </div>
                <div className="col-md-6">
                  <div className="mb-3">
                    <label className="col-form-label">
                      Client <span className="text-danger">*</span>
                    </label>
                    <Select
                      options={clientList}
                      className="select"
                      placeholder="Select"
                      classNamePrefix="react-select"
                    />
                  </div>
                </div>
                <div className="col-md-6">
                  <div className="mb-3">
                    <label className="col-form-label">
                      Category <span className="text-danger">*</span>
                    </label>
                    <Select
                      options={category}
                      className="select"
                      placeholder="Select"
                      classNamePrefix="react-select"
                    />
                  </div>
                </div>
                <div className="col-lg-3 col-md-6">
                  <div className="mb-3">
                    <label className="col-form-label">
                      Project Timing <span className="text-danger">*</span>
                    </label>
                    <Select
                      options={projectTiming}
                      className="select"
                      placeholder="Select"
                      classNamePrefix="react-select"
                    />
                  </div>
                </div>
                <div className="col-lg-3 col-md-6">
                  <div className="mb-3">
                    <label className="col-form-label">
                      Price <span className="text-danger">*</span>
                    </label>
                    <input className="form-control" type="text" />
                  </div>
                </div>
                <div className="col-lg-3 col-md-6">
                  <div className="mb-3">
                    <label className="col-form-label">
                      Amount <span className="text-danger">*</span>
                    </label>
                    <input className="form-control" type="text" />
                  </div>
                </div>
                <div className="col-lg-3 col-md-6">
                  <div className="mb-3">
                    <label className="col-form-label">
                      Total <span className="text-danger">*</span>
                    </label>
                    <input className="form-control" type="text" />
                  </div>
                </div>
                <div className="col-md-6">
                  <div className="mb-3">
                    <label className="col-form-label">
                      Responsible Persons <span className="text-danger">*</span>
                    </label>
                    <SelectWithImage2 />
                  </div>
                </div>
                <div className="col-md-6">
                  <div className="mb-3">
                    <label className="col-form-label">
                      Team Leader <span className="text-danger">*</span>
                    </label>
                    <SelectWithImage2 />
                  </div>
                </div>
                <div className="col-md-6">
                  <div className="mb-3">
                    <label className="col-form-label">
                      Start Date <span className="text-danger">*</span>
                    </label>
                    <div className="icon-form">
                      <span className="form-icon">
                        <i className="ti ti-calendar-event" />
                      </span>
                      <DatePicker
                        className="form-control datetimepicker"
                        selected={selectedDate}
                        onChange={handleDateChange}
                        dateFormat="dd-MM-yyyy"
                      />
                    </div>
                  </div>
                </div>
                <div className="col-md-6">
                  <div className="mb-3">
                    <label className="col-form-label">
                      Due Date <span className="text-danger">*</span>
                    </label>
                    <div className="icon-form">
                      <span className="form-icon">
                        <i className="ti ti-calendar-event" />
                      </span>
                      <DatePicker
                        className="form-control datetimepicker"
                        selected={selectedDate1}
                        onChange={handleDateChange1}
                        dateFormat="dd-MM-yyyy"
                      />
                    </div>
                  </div>
                </div>
                <div className="col-md-6">
                  <div className="mb-3">
                    <label className="col-form-label">Priority</label>
                    <Select
                      options={priorityList}
                      className="select"
                      placeholder="Select"
                      classNamePrefix="react-select"
                    />
                  </div>
                </div>
                <div className="col-md-6">
                  <div className="mb-3">
                    <label className="col-form-label">Status</label>

                    <Select
                      options={status1}
                      className="select"
                      placeholder="Select"
                      classNamePrefix="react-select"
                    />
                  </div>
                </div>
                <div className="col-md-12">
                  <div className="mb-3">
                    <label className="col-form-label">
                      Description <span className="text-danger">*</span>
                    </label>
                    <textarea
                      className="form-control"
                      rows={4}
                      defaultValue={""}
                    />
                  </div>
                </div>
              </div>
            </div>
            <div className="d-flex align-items-center justify-content-end">
              <button
                type="button"
                data-bs-dismiss="offcanvas"
                className="btn btn-light me-2"
              >
                Cancel
              </button>
              <button
                type="button"
                className="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#create_project"
              >
                Create
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  );
};

export default ProjectDashboardComponent;

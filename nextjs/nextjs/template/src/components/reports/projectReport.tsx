"use client";
/* eslint-disable @next/next/no-img-element */

import Table from "../../core/common/dataTable/index";
import React, { useState } from "react";
import ReportsModal from "../../core/modals/reports_modal";
import { TableData } from "../../data/interface";
import CollapseHeader from "../../core/common/collapse-header";
import Link from "next/link";
import { projectReportsData } from "@/data/json/projectReport";
import { all_routes } from "@/data/all_routes";
import ProjectReportChart1 from "../charts/ProjectReportchart1";
import ProjectReportChart2 from "../charts/ProjectReportchart2";
import PredefinedDateRanges from "@/core/common/daterangepicker/datePicker";


const route = all_routes;

const ProjectReportComponent = () => {
  

  const dataSource = projectReportsData;
  const columns = [
    {
      title: "",
      dataIndex: "",
      key: "star",
      render: () => (
        <div className="set-star rating-select">
          <i className="fa fa-star" />
        </div>
      ),
      width: "2px",
    },
    {
      title: "Name",
      dataIndex: "name",
      key: "name",
      sorter: (a: TableData, b: TableData) => a.name.length - b.name.length,
      render: (text: any, record: any) => (
        <h2 className=" d-flex align-items-center">
          <Link href={route.companyDetails} className="avatar avatar-sm border me-2">
            <img
              className="w-auto h-auto"
              src={record.priorityImg}
              alt="Company Logo"
            />
          </Link>
          <Link
            href={route.companyDetails}
          >
            {text}
          </Link>
        </h2>
      ),
      width: "150px",
    },
    {
      title: "Client",
      dataIndex: "client",
      sorter: (a: TableData, b: TableData) => a.client.length - b.client.length,
      key: "client",
      render: (text: any, record: any) => (
        <h2 className="d-flex align-items-center">
          <Link href={route.companyDetails} className="avatar avatar-sm border me-2">
            <img
              className="w-auto h-auto"
              src={record.companyLogo}
              alt="User Image"
            />
          </Link>
          <Link
            href={route.companyDetails}
          >
            {text}
          </Link>
        </h2>
      ),
      width: "200px",
    },
    {
      title: "Priority",
      dataIndex: "priority",
      sorter: (a: TableData, b: TableData) =>
        a.priority.length - b.priority.length,
      key: "priority",
      ellipsis: true,
      render: (priority: any) => (
        <span
          className={`${
            priority === "High"
              ? "priority badge badge-tag badge-danger-light"
              : priority === "Medium"
              ? "priority badge badge-tag badge-warning-light"
              : priority === "Low"
              ? "priority badge badge-tag badge-success-light"
              : ""
          }`}
        >
          <i className="ti ti-square-rounded-filled" />
          {priority}
        </span>
      ),
    },
    {
      title: "Start Date",
      dataIndex: "startDate",
      sorter: (a: TableData, b: TableData) =>
        a.startDate.length - b.startDate.length,
      key: "startDate",
      ellipsis: true,
    },
    {
      title: "End Date",
      dataIndex: "endDate",
      sorter: (a: TableData, b: TableData) =>
        a.endDate.length - b.endDate.length,
      key: "endDate",
      ellipsis: true,
    },
    {
      title: "Type",
      dataIndex: "type",
      sorter: (a: TableData, b: TableData) => a.type.length - b.type.length,
      key: "type",
      ellipsis: true,
    },
    {
      title: "Pipeline Stage",
      dataIndex: "pipelineStage",
      sorter: (a: TableData, b: TableData) =>
        a.pipelineStage.length - b.pipelineStage.length,
      key: "pipelineStage",
      ellipsis: true,
      render: (pipelineStage: any) => (
        <div className="pipeline-progress d-flex align-items-center">
          <div className="progress">
            <div
              className={`${
                pipelineStage === "Plan"
                  ? "progress-bar progress-bar-violet"
                  : pipelineStage === "Develop"
                  ? "progress-bar progress-bar-info"
                  : pipelineStage === "Completed"
                  ? "progress-bar progress-bar-success"
                  : pipelineStage === "Design"
                  ? "progress-bar progress-bar-warning"
                  : ""
              }`}
              role="progressbar"
            />
          </div>
          <span>{pipelineStage}</span>
        </div>
      ),
      width: "200px",
    },
    {
      title: "Budget Value",
      dataIndex: "budgetValue",
      sorter: (a: TableData, b: TableData) =>
        a.budgetValue.length - b.budgetValue.length,
      key: "budgetValue",
      ellipsis: true,
    },
    {
      title: "Currently Spend",
      dataIndex: "currentlySpend",
      sorter: (a: TableData, b: TableData) =>
        a.currentlySpend.length - b.currentlySpend.length,
      key: "currentlySpend",
      ellipsis: true,
    },
  ];
  return (
    <div>
      {/* Page Wrapper */}
      <div className="page-wrapper">
        <div className="content">
          <div className="row">
            <div className="col-md-12">
              {/* Page Header */}
              <div className="page-header">
                <div className="row align-items-center">
                  <div className="col-sm-8">
                    <h4 className="page-title">
                      Project Report <span className="count-title">123</span>
                    </h4>
                  </div>
                  <div className="col-sm-4 text-sm-end">
                    <div className="head-icons">
                      <CollapseHeader />
                    </div>
                  </div>
                </div>
              </div>
              {/* /Page Header */}
              <div className="card ">
                <div className="card-header">
                  {/* Search */}
                  <div className="row">
                    <div className="col-md-5 col-sm-4">
                      <div className="icon-form mb-3 mb-sm-0">
                        <span className="form-icon">
                          <i className="ti ti-search" />
                        </span>
                        <input
                          type="text"
                          className="form-control"
                          placeholder="Search Projects"
                        />
                      </div>
                    </div>
                    <div className="col-md-7 col-sm-8">
                      <div className="text-sm-end">
                        <Link
                          href="download_report"
                          className="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#download_report"
                        >
                          <i className="ti ti-file-download me-2" />
                          Download Report
                        </Link>
                      </div>
                    </div>
                  </div>
                  {/* Search */}
                </div>
                <div className="card-body">
                  <div className="row">
                    <div className="col-md-7 d-flex">
                      <div className="card shadow flex-fill">
                        <div className="card-header d-flex justify-content-between align-items-center flex-wrap row-gap-2">
                          <h4>Projects by Year</h4>
                          <div className="icon-form">
                            <span className="form-icon">
                              <i className="ti ti-calendar" />
                            </span>
                            <PredefinedDateRanges/>
                          </div>
                        </div>
                        <div className="card-body">
                        <div id="project-year">
                          <ProjectReportChart1/>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div className="col-md-5 d-flex">
                      <div className="card shadow flex-fill">
                        <div className="card-header d-flex justify-content-between align-items-center flex-wrap row-gap-2">
                          <h4>Projects by Source</h4>
                          <div className="icon-form">
                            <span className="form-icon">
                              <i className="ti ti-calendar" />
                            </span>
                            <PredefinedDateRanges/>
                          </div>
                        </div>
                        <div className="card-body">
                        <div id="project-type">
                        <ProjectReportChart2/>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  {/* Filter */}
                  <div className="d-flex align-items-center justify-content-between flex-wrap mb-4 row-gap-2">
                    <div className="d-flex align-items-center flex-wrap row-gap-2">
                      <div className="dropdown me-2">
                        <Link
                          href="#"
                          className="dropdown-toggle"
                          data-bs-toggle="dropdown"
                        >
                          <i className="ti ti-sort-ascending-2 me-2" />
                          Sort{" "}
                        </Link>
                        <div className="dropdown-menu  dropdown-menu-start">
                          <ul>
                            <li>
                              <Link href="#" className="dropdown-item">
                                <i className="ti ti-circle-chevron-right me-1" />
                                Ascending
                              </Link>
                            </li>
                            <li>
                              <Link href="#" className="dropdown-item">
                                <i className="ti ti-circle-chevron-right me-1" />
                                Descending
                              </Link>
                            </li>
                            <li>
                              <Link href="#" className="dropdown-item">
                                <i className="ti ti-circle-chevron-right me-1" />
                                Recently Viewed
                              </Link>
                            </li>
                            <li>
                              <Link href="#" className="dropdown-item">
                                <i className="ti ti-circle-chevron-right me-1" />
                                Recently Added
                              </Link>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div className="icon-form">
                        <span className="form-icon">
                          <i className="ti ti-calendar" />
                        </span>
                        <PredefinedDateRanges/>
                      </div>
                    </div>
                    <div className="d-flex align-items-center flex-wrap row-gap-2">
                      <div className="dropdown me-2">
                        <Link
                          href="#"
                          className="btn bg-soft-purple text-purple"
                          data-bs-toggle="dropdown"
                          data-bs-auto-close="outside"
                        >
                          <i className="ti ti-columns-3 me-2" />
                          Manage Columns
                        </Link>
                        <div className="dropdown-menu  dropdown-menu-md-end dropdown-md p-3">
  <h4 className="mb-2 fw-semibold">Want to manage datatables?</h4>
  <p className="mb-3">
    Please drag and drop your column to reorder your table and enable see option
    as you want.
  </p>
  <div className="border-top pt-3">
    <div className="d-flex align-items-center justify-content-between mb-3">
      <p className="mb-0 d-flex align-items-center">
        <i className="ti ti-grip-vertical me-2" />
        Name
      </p>
      <div className="status-toggle">
        <input type="checkbox" id="col-name" className="check" />
        <label htmlFor="col-name" className="checktoggle" />
      </div>
    </div>
    <div className="d-flex align-items-center justify-content-between mb-3">
      <p className="mb-0 d-flex align-items-center">
        <i className="ti ti-grip-vertical me-2" />
        Client
      </p>
      <div className="status-toggle">
        <input type="checkbox" id="col-phone" className="check" />
        <label htmlFor="col-phone" className="checktoggle" />
      </div>
    </div>
    <div className="d-flex align-items-center justify-content-between mb-3">
      <p className="mb-0 d-flex align-items-center">
        <i className="ti ti-grip-vertical me-2" />
        Priority
      </p>
      <div className="status-toggle">
        <input type="checkbox" id="col-email" className="check" />
        <label htmlFor="col-email" className="checktoggle" />
      </div>
    </div>
    <div className="d-flex align-items-center justify-content-between mb-3">
      <p className="mb-0 d-flex align-items-center">
        <i className="ti ti-grip-vertical me-2" />
        Start Date
      </p>
      <div className="status-toggle">
        <input type="checkbox" id="col-tag" className="check" />
        <label htmlFor="col-tag" className="checktoggle" />
      </div>
    </div>
    <div className="d-flex align-items-center justify-content-between mb-3">
      <p className="mb-0 d-flex align-items-center">
        <i className="ti ti-grip-vertical me-2" />
        Due Date
      </p>
      <div className="status-toggle">
        <input type="checkbox" id="col-loc" className="check" />
        <label htmlFor="col-loc" className="checktoggle" />
      </div>
    </div>
    <div className="d-flex align-items-center justify-content-between mb-3">
      <p className="mb-0 d-flex align-items-center">
        <i className="ti ti-grip-vertical me-2" />
        Type
      </p>
      <div className="status-toggle">
        <input type="checkbox" id="col-rate" className="check" />
        <label htmlFor="col-rate" className="checktoggle" />
      </div>
    </div>
    <div className="d-flex align-items-center justify-content-between mb-3">
      <p className="mb-0 d-flex align-items-center">
        <i className="ti ti-grip-vertical me-2" />
        Pipeline Stage
      </p>
      <div className="status-toggle">
        <input type="checkbox" id="col-owner" className="check" />
        <label htmlFor="col-owner" className="checktoggle" />
      </div>
    </div>
    <div className="d-flex align-items-center justify-content-between mb-3">
      <p className="mb-0 d-flex align-items-center">
        <i className="ti ti-grip-vertical me-2" />
        Budget Value
      </p>
      <div className="status-toggle">
        <input
          type="checkbox"
          id="col-status"
          className="check"
          defaultChecked
        />
        <label htmlFor="col-status" className="checktoggle" />
      </div>
    </div>
    <div className="d-flex align-items-center justify-content-between mb-3">
      <p className="mb-0 d-flex align-items-center">
        <i className="ti ti-grip-vertical me-2" />
        Currently Spend
      </p>
      <div className="status-toggle">
        <input type="checkbox" id="col-owner" className="check" />
        <label htmlFor="col-owner" className="checktoggle" />
      </div>
    </div>
  </div>
</div>

                      </div>
                      <div className="form-sorts dropdown">
                        <Link
                          href="#"
                          data-bs-toggle="dropdown"
                          data-bs-auto-close="outside"
                        >
                          <i className="ti ti-filter-share" />
                          Filter
                        </Link>
                        <div className="filter-dropdown-menu dropdown-menu  dropdown-menu-md-end p-3">
  <div className="filter-set-view">
    <div className="filter-set-head">
      <h4>
        <i className="ti ti-filter-share" />
        Filter
      </h4>
    </div>
    <div className="accordion" id="accordionExample">
      <div className="filter-set-content">
        <div className="filter-set-content-head">
          <Link
            href="#"
            data-bs-toggle="collapse"
            data-bs-target="#collapseTwo"
            aria-expanded="true"
            aria-controls="collapseTwo"
          >
            Project Name
          </Link>
        </div>
        <div
          className="filter-set-contents accordion-collapse collapse show"
          id="collapseTwo"
          data-bs-parent="#accordionExample"
        >
          <div className="filter-content-list">
            <div className="mb-2 icon-form">
              <span className="form-icon">
                <i className="ti ti-search" />
              </span>
              <input
                type="text"
                className="form-control"
                placeholder="Search Name"
              />
            </div>
            <ul>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" defaultChecked />
                    <span className="checkmarks" />
                    Truelysell
                  </label>
                </div>
              </li>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" />
                    <span className="checkmarks" />
                    Dreamschat
                  </label>
                </div>
              </li>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" />
                    <span className="checkmarks" />
                    Servbook
                  </label>
                </div>
              </li>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" />
                    <span className="checkmarks" />
                    Doccure
                  </label>
                </div>
              </li>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" />
                    <span className="checkmarks" />
                    Dreamsports
                  </label>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div className="filter-set-content">
        <div className="filter-set-content-head">
          <Link
            href="#"
            className="collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#client"
            aria-expanded="false"
            aria-controls="client"
          >
            Client Name
          </Link>
        </div>
        <div
          className="filter-set-contents accordion-collapse collapse"
          id="client"
          data-bs-parent="#accordionExample"
        >
          <div className="filter-content-list">
            <div className="mb-2 icon-form">
              <span className="form-icon">
                <i className="ti ti-search" />
              </span>
              <input
                type="text"
                className="form-control"
                placeholder="Search Client"
              />
            </div>
            <ul>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" defaultChecked />
                    <span className="checkmarks" />
                    NovaWave LLC
                  </label>
                </div>
              </li>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" />
                    <span className="checkmarks" />
                    BlueSky Industries
                  </label>
                </div>
              </li>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" />
                    <span className="checkmarks" />
                    Silver Hawk
                  </label>
                </div>
              </li>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" />
                    <span className="checkmarks" />
                    Summit Peak
                  </label>
                </div>
              </li>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" />
                    <span className="checkmarks" />
                    CoastalStar Co.
                  </label>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div className="filter-set-content">
        <div className="filter-set-content-head">
          <Link
            href="#"
            className="collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#type"
            aria-expanded="false"
            aria-controls="type"
          >
            Type
          </Link>
        </div>
        <div
          className="filter-set-contents accordion-collapse collapse"
          id="type"
          data-bs-parent="#accordionExample"
        >
          <div className="filter-content-list">
            <ul>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" defaultChecked />
                    <span className="checkmarks" />
                    Web App
                  </label>
                </div>
              </li>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" />
                    <span className="checkmarks" />
                    Meeting
                  </label>
                </div>
              </li>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" />
                    <span className="checkmarks" />
                    Mobile App
                  </label>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div className="filter-set-content">
        <div className="filter-set-content-head">
          <Link
            href="#"
            className="collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#collapseOne"
            aria-expanded="false"
            aria-controls="collapseOne"
          >
            Start Date
          </Link>
        </div>
        <div
          className="filter-set-contents accordion-collapse collapse"
          id="collapseOne"
          data-bs-parent="#accordionExample"
        >
          <div className="filter-content-list">
            <ul>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" defaultChecked />
                    <span className="checkmarks" />
                    25 Sep 2023
                  </label>
                </div>
              </li>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" />
                    <span className="checkmarks" />
                    29 Sep 2023
                  </label>
                </div>
              </li>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" />
                    <span className="checkmarks" />
                    29 Sep 2023
                  </label>
                </div>
              </li>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" />
                    <span className="checkmarks" />
                    14 Oct 2023
                  </label>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div className="filter-set-content">
        <div className="filter-set-content-head">
          <Link
            href="#"
            className="collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#collapsetwo"
            aria-expanded="false"
            aria-controls="collapsetwo"
          >
            End Date
          </Link>
        </div>
        <div
          className="filter-set-contents accordion-collapse collapse"
          id="collapsetwo"
          data-bs-parent="#accordionExample"
        >
          <div className="filter-content-list">
            <ul>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" defaultChecked />
                    <span className="checkmarks" />
                    19 Oct 2023
                  </label>
                </div>
              </li>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" />
                    <span className="checkmarks" />
                    23 Nov 2023
                  </label>
                </div>
              </li>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" />
                    <span className="checkmarks" />
                    14 Dec 2023
                  </label>
                </div>
              </li>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" />
                    <span className="checkmarks" />
                    09 Dec 2023
                  </label>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div className="filter-set-content">
        <div className="filter-set-content-head">
          <Link
            href="#"
            className="collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#Stage"
            aria-expanded="false"
            aria-controls="Stage"
          >
            Pipeline Stage
          </Link>
        </div>
        <div
          className="filter-set-contents accordion-collapse collapse"
          id="Stage"
          data-bs-parent="#accordionExample"
        >
          <div className="filter-content-list">
            <ul>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" defaultChecked />
                    <span className="checkmarks" />
                    Plan
                  </label>
                </div>
              </li>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" />
                    <span className="checkmarks" />
                    Develop
                  </label>
                </div>
              </li>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" />
                    <span className="checkmarks" />
                    Completed
                  </label>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div className="filter-set-content">
        <div className="filter-set-content-head">
          <Link
            href="#"
            className="collapsed"
            data-bs-toggle="collapse"
            data-bs-target="#Status"
            aria-expanded="false"
            aria-controls="Status"
          >
            Status
          </Link>
        </div>
        <div
          className="filter-set-contents accordion-collapse collapse"
          id="Status"
          data-bs-parent="#accordionExample"
        >
          <div className="filter-content-list">
            <ul>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" defaultChecked />
                    <span className="checkmarks" />
                    Active
                  </label>
                </div>
              </li>
              <li>
                <div className="filter-checks">
                  <label className="checkboxs">
                    <input type="checkbox" />
                    <span className="checkmarks" />
                    Inactive
                  </label>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div className="filter-reset-btns">
      <div className="row">
        <div className="col-6">
          <Link href="#" className="btn btn-light">
            Reset
          </Link>
        </div>
        <div className="col-6">
          <Link href="#" className="btn btn-primary">
            Filter
          </Link>
        </div>
      </div>
    </div>
  </div>
</div>

                      </div>
                    </div>
                  </div>
                  {/* /Filter */}
                  {/* Report List */}
                  <div className="table-responsive custom-table">
                    <Table columns={columns} dataSource={dataSource} />
                  </div>
                  <div className="row align-items-center">
                    <div className="col-md-6">
                      <div className="datatable-length" />
                    </div>
                    <div className="col-md-6">
                      <div className="datatable-paginate" />
                    </div>
                  </div>
                  {/* /Report List */}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      {/* /Page Wrapper */}
      <ReportsModal />
    </div>
  );
};

export default ProjectReportComponent;

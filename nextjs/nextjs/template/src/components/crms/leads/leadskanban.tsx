"use client";
/* eslint-disable @next/next/no-img-element */

import React, { useState } from "react";
import Select from "react-select";
import "bootstrap-daterangepicker/daterangepicker.css";
import {
  countryoptions1,
  currency,
  languageOptions,
  optiondeals,
  optionindustry,
  options,
  options1,
  optionschoose,
  optionsource,
  optionssymbol,
} from "../../../core/common/selectoption/selectoption";
import CollapseHeader from "../../../core/common/collapse-header";
import { SelectWithImage } from "../../../core/common/selectWithImage";
import { SelectWithImage2 } from "../../../core/common/selectWithImage2";
import { all_routes } from "@/data/all_routes";
import Link from "next/link";
import {
  DragDropContext,
  Draggable,
  Droppable,
  DropResult,
} from "react-beautiful-dnd";

interface Task {
  id: string;
  content: string;
  priority: "Low" | "Medium" | "High";
}

interface Column {
  title: string;
  subtitle?: string; // Optional subtitle property
  tasks: Task[];
}

interface Columns {
  [key: string]: Column;
}

interface Deal {
  id: string;
  initials: string;
  name: string;
  value: string;
  email: string;
  phone: string;
  location: string;
  avatar: string;
}

const deals: Deal[] = [
  {
    id: "1",
    initials: "SM",
    name: "Schumm",
    value: " $03,50,000",
    email: "darleeo@example.com",
    phone: "+1 12445-47878",
    location: "Newyork, United States",
    avatar: "assets/img/icons/company-icon-09.svg",
  },
  {
    id: "2",
    initials: "CS",
    name: "Collins",
    value: " $02,10,000",
    email: " robertson@example.com",
    phone: "+1 13987-90231",
    location: "Austin, United States",
    avatar: "assets/img/icons/company-icon-01.svg",
  },
  {
    id: "3",
    initials: "KI",
    name: "Konopelski",
    value: " $02,18,000",
    email: "sharon@example.com",
    phone: "+1 17932-04278",
    location: "Atlanta, United States",
    avatar: "assets/img/icons/company-icon-02.svg",
  },
];

const dealsColumn2: Deal[] = [
  {
    id: "4",
    initials: "AS",
    name: "Adams",
    value: "$02,45,000",
    email: "vaughan12@example.com",
    phone: "+1 17392-27846",
    location: "London, United Kingdom",
    avatar: "assets/img/icons/company-icon-03.svg",
  },
  {
    id: "5",
    initials: "WK",
    name: "Wizosk",
    value: " $01,17,000",
    email: "caroltho3@example.com",
    phone: "+1 78982-09163",
    location: "Bristol, United Kingdom",
    avatar: "assets/img/icons/company-icon-04.svg",
  },
  {
    id: "6",
    initials: "HR",
    name: "Heller",
    value: "$02,12,000",
    email: "dawnmercha@example.com",
    phone: "+1 27691-89246",
    location: "San Francisco, United States",
    avatar: "assets/img/icons/company-icon-05.svg",
  },
];

const dealsColumn3: Deal[] = [
  {
    id: "7",
    initials: "GI",
    name: "Gutkowsi",
    value: "$01,84,043",
    email: "rachel@example.com",
    phone: "+1 17839-93617",
    location: "Dallas, United States",
    avatar: "assets/img/icons/company-icon-06.svg",
  },
  {
    id: "8",
    initials: "WR",
    name: "Walter",
    value: "$09,35,189",
    email: "jonelle@example.com",
    phone: "+1 16739-47193",
    location: "Leicester, United Kingdom",
    avatar: "assets/img/icons/company-icon-07.svg",
  },
  {
    id: "9", // Changed from "8" to "9" to make it unique
    initials: "HN",
    name: "Hansen",
    value: "$04,27,940",
    email: "jonelle@example.com",
    phone: "+1 18390-37153",
    location: "Norwich, United Kingdom",
    avatar: "assets/img/icons/company-icon-08.svg",
  },
];

const dealsColumn4: Deal[] = [
  {
    id: "10",
    initials: "SE",
    name: "Steve",
    value: "$04,17,593",
    email: "sidney@example.com",
    phone: "+1 11739-38135",
    location: " Manchester, United Kingdom",
    avatar: "assets/img/icons/company-icon-09.svg",
  },
  {
    id: "11",
    initials: "LE",
    name: "Leuschke",
    value: "$08,81,389",
    email: "brook@example.com",
    phone: "+1 19302-91043",
    location: "Chicago, United States",
    avatar: "assets/img/icons/company-icon-10.svg",
  },
  {
    id: "12",
    initials: "AY",
    name: "Anthony",
    value: "$09,27,193",
    email: "mickey@example.com",
    phone: "+1 17280-92016",
    location: "Derby, United Kingdom",
    avatar: "assets/img/icons/company-icon-01.svg",
  },
];

const initialColumns: Columns = {
  column1: {
    title: "Contacted",
    subtitle: " 45 Leads - $15,44,540",
    tasks: deals.map((deal) => ({
      id: deal.id,
      content: deal.name,
      priority: "Low", // You can customize this based on your logic
    })),
  },
  column2: {
    title: "Not Contacted",
    subtitle: "45 Leads - $15,44,540",
    tasks: dealsColumn2.map((deal) => ({
      id: deal.id,
      content: deal.name,
      priority: "Medium", // You can customize this based on your logic
    })),
  },
  column3: {
    title: "Closed",
    subtitle: "45 Leads - $15,44,540",
    tasks: dealsColumn3.map((deal) => ({
      id: deal.id,
      content: deal.name,
      priority: "Medium", // You can customize this based on your logic
    })),
  },
  column4: {
    title: "Lost",
    subtitle: "15 Leads - $14,89,543",
    tasks: dealsColumn4.map((deal) => ({
      id: deal.id,
      content: deal.name,
      priority: "Medium", // You can customize this based on your logic
    })),
  },
};

const LeadsKanbanComponent = () => {
  const [adduser, setAdduser] = useState(false);
  const [addcompany, setAddCompany] = useState(false);
  const [modalTitle, setModalTitle] = useState("Add New Lead");
  const togglePopup = (isEditing: any) => {
    setModalTitle(isEditing ? "Edit Lead" : "Add New Lead");
    setAdduser(!adduser);
  };
  const addcompanyPopup = () => {
    setAddCompany(!addcompany);
  };
  const route = all_routes;

  const [columns, setColumns] = useState(initialColumns);

  const onDragEnd = (result: DropResult) => {
    const { source, destination } = result as {
      source: { droppableId: keyof typeof columns; index: number };
      destination?: { droppableId: keyof typeof columns; index: number };
    };

    // If dropped outside a valid droppable area, do nothing
    if (!destination) return;

    // Get source and destination columns
    const sourceColumn = columns[source.droppableId];
    const destinationColumn = columns[destination.droppableId];

    // Clone tasks from source and destination columns
    const sourceTasks = [...sourceColumn.tasks];
    const destinationTasks = [...destinationColumn.tasks];

    // Remove the dragged task from the source column
    const [movedTask] = sourceTasks.splice(source.index, 1);

    // Add the dragged task to the destination column
    destinationTasks.splice(destination.index, 0, movedTask);

    // Update the state with the new column data
    setColumns({
      ...columns,
      [source.droppableId]: { ...sourceColumn, tasks: sourceTasks },
      [destination.droppableId]: {
        ...destinationColumn,
        tasks: destinationTasks,
      },
    });
  };

  return (
    <>
      <>
        {/* Page Wrapper */}
        <div className="page-wrapper">
          <div className="content">
            <div className="row">
              <div className="col-md-12">
                {/* Page Header */}
                <div className="page-header">
                  <div className="row align-items-center">
                    <div className="col-4">
                      <h4 className="page-title">
                        Leads<span className="count-title">123</span>
                      </h4>
                    </div>
                    <div className="col-8 text-end">
                      <div className="head-icons">
                        <Link
                          href={route.leadsKanban}
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          data-bs-original-title="Refresh"
                        >
                          <i className="ti ti-refresh-dot" />
                        </Link>
                        <Link
                          href="#"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          data-bs-original-title="Collapse"
                          id="collapse-header"
                        >
                          <i className="ti ti-chevrons-up" />
                        </Link>
                      </div>
                    </div>
                  </div>
                </div>
                {/* /Page Header */}
                {/* Filter */}
                <div className="d-flex justify-content-between align-items-center flex-wrap row-gap-2 mb-4">
                  <div className="d-flex align-items-center flex-wrap row-gap-2">
                    <div className="form-sorts dropdown me-2">
                      <Link
                        href="#"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside"
                      >
                        <i className="ti ti-filter-share" />
                        Filter
                      </Link>
                      <div className="filter-dropdown-menu dropdown-menu dropdown-menu-start">
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
                                  Lead Name
                                </Link>
                              </div>
                              <div
                                className="filter-set-contents accordion-collapse collapse show"
                                id="collapseTwo"
                                data-bs-parent="#accordionExample"
                              >
                                <div className="filter-content-list">
                                  <ul>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>Collins</h5>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>Konopelski</h5>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>Adams</h5>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>Schumm</h5>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>Wisozk</h5>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>Heller</h5>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>Gutkowski</h5>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>Walter</h5>
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
                                  data-bs-target="#company"
                                  aria-expanded="false"
                                  aria-controls="company"
                                >
                                  Company Name
                                </Link>
                              </div>
                              <div
                                className="filter-set-contents accordion-collapse collapse"
                                id="company"
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
                                      placeholder="Search Company"
                                    />
                                  </div>
                                  <ul>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>NovaWave LLC</h5>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>BlueSky Industries</h5>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>Silver Hawk</h5>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>Summit Peak</h5>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>RiverStone Ventur</h5>
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
                                  Lead Status
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
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>Closed</h5>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>Not Contacted</h5>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>Contacted</h5>
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
                                  data-bs-target="#date"
                                  aria-expanded="false"
                                  aria-controls="date"
                                >
                                  Created Date
                                </Link>
                              </div>
                              <div
                                className="filter-set-contents accordion-collapse collapse"
                                id="date"
                                data-bs-parent="#accordionExample"
                              >
                                <div className="filter-content-list">
                                  <ul>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>25 Sep 2023, 01:22 pm</h5>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>29 Sep 2023, 04:15 pm</h5>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>04 Oct 2023, 10:18 am</h5>
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
                                  data-bs-target="#owner"
                                  aria-expanded="false"
                                  aria-controls="owner"
                                >
                                  Lead Owner
                                </Link>
                              </div>
                              <div
                                className="filter-set-contents accordion-collapse collapse"
                                id="owner"
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
                                      placeholder="Search Owner"
                                    />
                                  </div>
                                  <ul>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>Hendry</h5>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>Guillory</h5>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>Jami</h5>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>Theresa</h5>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                        </label>
                                      </div>
                                      <div className="collapse-inside-text">
                                        <h5>Espinosa</h5>
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
                                <Link
                                  href={route.leads}
                                  className="btn btn-primary"
                                >
                                  Filter
                                </Link>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div className="icon-form">
                      <span className="form-icon">
                        <i className="ti ti-search" />
                      </span>
                      <input
                        type="text"
                        className="form-control"
                        placeholder="Search Leads"
                      />
                    </div>
                  </div>
                  <div>
                    <ul className="d-flex align-items-center">
                      <li>
                        <div className="view-icons me-2">
                          <Link href={route.leads}>
                            <i className="ti ti-list-tree" />
                          </Link>
                          <Link href={route.leadsKanban} className="active">
                            <i className="ti ti-grid-dots" />
                          </Link>
                        </div>
                      </li>
                      <li>
                        <Link
                          href="#"
                          className="btn btn-primary"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvas_add"
                        >
                          <i className="ti ti-square-rounded-plus me-2" />
                          Add Leads
                        </Link>
                      </li>
                    </ul>
                  </div>
                </div>
                {/* /Filter */}
                {/* Leads Kanban */}
                <DragDropContext onDragEnd={onDragEnd}>
                  <div className="d-flex overflow-x-auto align-items-start mb-4">
                    {Object.entries(columns).map(([columnId, column]) => (
                      <div className="kanban-list-items" key={columnId}>
                        <Droppable
                          droppableId={columnId}
                          isDropDisabled={false}
                          isCombineEnabled={true}
                          ignoreContainerClipping={false}
                        >
                          {(provided) => (
                            <div
                              ref={provided.innerRef}
                              {...provided.droppableProps}
                            >
                              <div className="card mb-0">
                                <div className="card-body">
                                  <div className="d-flex justify-content-between align-items-center">
                                    <div>
                                      <h4 className="fw-semibold d-flex align-items-center mb-1">
                                        <i
                                          className={`ti ti-circle-filled fs-8 ${
                                            column.title === "Qualify To Buy"
                                              ? "text-purple"
                                              : column.title === "Contact Made"
                                              ? "text-info"
                                              : column.title === "Presentation"
                                              ? "text-warning"
                                              : column.title === "Proposal Made"
                                              ? "text-pink"
                                              : "text-success"
                                          } me-2`}
                                        />
                                        {column.title}
                                      </h4>
                                      <span className="fw-medium text-default">
                                        {column.subtitle}
                                      </span>
                                    </div>
                                    <div className="d-flex align-items-center">
                                      <Link href="#" className="text-purple">
                                        <i className="ti ti-plus" />
                                      </Link>
                                      <div className="dropdown table-action ms-2">
                                        <Link
                                          href="#"
                                          className="action-icon dropdown-toggle bg-white"
                                          data-bs-toggle="dropdown"
                                          aria-expanded="false"
                                        >
                                          <i className="fa fa-ellipsis-v" />
                                        </Link>
                                        <div className="dropdown-menu dropdown-menu-right">
                                          <Link
                                            className="dropdown-item"
                                            href="#"
                                            data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvas_edit"
                                          >
                                            <i className="fa-solid fa-pencil text-blue" />{" "}
                                            Edit
                                          </Link>
                                          <Link
                                            className="dropdown-item"
                                            href="#"
                                            data-bs-toggle="modal"
                                            data-bs-target="#delete_deal"
                                          >
                                            <i className="fa-regular fa-trash-can text-danger" />{" "}
                                            Delete
                                          </Link>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              {column.tasks.map((task, index) => {
                                // Combine all deal arrays into one for easier lookup
                                const allDeals = [
                                  ...deals,
                                  ...dealsColumn2,
                                  ...dealsColumn3,
                                  ...dealsColumn4,
                                ];
                                const deal = allDeals.find(
                                  (d) => d.id === task.id
                                );

                                if (!deal) return null;

                                return (
                                  <Draggable
                                    key={task.id}
                                    draggableId={task.id}
                                    index={index}
                                  >
                                    {(provided) => (
                                      <div
                                        ref={provided.innerRef}
                                        {...provided.draggableProps}
                                        {...provided.dragHandleProps}
                                        className="kanban-drag-wrap pt-4"
                                      >
                                        <div className="card kanban-card border">
                                          <div className="card-body">
                                            <div className="d-block">
                                              <div
                                                className={`border border-2 mb-3 ${
                                                  column.title ===
                                                  "Qualify To Buy"
                                                    ? "bg-purple"
                                                    : column.title ===
                                                      "Contact Made"
                                                    ? "bg-info"
                                                    : column.title ===
                                                      "Presentation"
                                                    ? "bg-warning"
                                                    : column.title ===
                                                      "Proposal Made"
                                                    ? "bg-pink"
                                                    : "bg-success"
                                                }`}
                                              />
                                              <div className="d-flex align-items-center mb-3">
                                                <Link
                                                  href={route.leadsDetails}
                                                  className="avatar avatar-lg bg-gray flex-shrink-0 me-2"
                                                >
                                                  <Link
                                                    href={route.leadsDetails}
                                                    className="avatar-title text-dark"
                                                  >
                                                    {deal.initials}
                                                  </Link>
                                                </Link>
                                                <h6 className="fw-medium">
                                                  <Link
                                                    href={route.leadsDetails}
                                                  >
                                                    {deal.name}
                                                  </Link>
                                                </h6>
                                              </div>
                                            </div>
                                            <div className="mb-3 d-flex flex-column">
                                              <p className="text-default d-inline-flex align-items-center mb-2">
                                                <i className="ti ti-report-money text-dark me-1" />
                                                {deal.value}
                                              </p>
                                              <p className="text-default d-inline-flex align-items-center mb-2">
                                                <i className="ti ti-mail text-dark me-1" />
                                                {deal.email}
                                              </p>
                                              <p className="text-default d-inline-flex align-items-center mb-2">
                                                <i className="ti ti-phone text-dark me-1" />
                                                {deal.phone}
                                              </p>
                                              <p className="text-default d-inline-flex align-items-center">
                                                <i className="ti ti-map-pin-pin text-dark me-1" />
                                                {deal.location}
                                              </p>
                                            </div>
                                            <div className="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                              <span className="avatar avatar-sm border rounded d-flex align-items-center justify-content-center">
                                                <img
                                                  src={deal.avatar}
                                                  className="w-auto h-auto"
                                                  alt=""
                                                />
                                              </span>
                                              <div className="icons-social d-flex align-items-center">
                                                <Link
                                                  href="#"
                                                  className="d-flex align-items-center justify-content-center me-1"
                                                >
                                                  <i className="ti ti-phone-check" />
                                                </Link>
                                                <Link
                                                  href="#"
                                                  className="d-flex align-items-center justify-content-center me-1"
                                                >
                                                  <i className="ti ti-message-circle-2" />
                                                </Link>
                                                <Link
                                                  href="#"
                                                  className="d-flex align-items-center justify-content-center"
                                                >
                                                  <i className="ti ti-color-swatch" />
                                                </Link>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    )}
                                  </Draggable>
                                );
                              })}
                              {provided.placeholder}
                              <div className="pt-2">
                                <Link
                                  href="#"
                                  className="btn btn-white border border-dashed d-flex align-items-center justify-content-center"
                                >
                                  <i className="ti ti-plus me-2" />
                                  New Project
                                </Link>
                              </div>
                            </div>
                          )}
                        </Droppable>
                      </div>
                    ))}
                  </div>
                </DragDropContext>
                {/* /Leads Kanban */}
              </div>
            </div>
          </div>
        </div>

        {/* /Page Wrapper */}
        {/* Add User */}
        <div className={`toggle-popup ${adduser ? "sidebar-popup" : ""}`}>
          <div className="sidebar-layout">
            <div className="sidebar-header">
              <h4>{modalTitle}</h4>
              <Link
                href="#"
                className="sidebar-close toggle-btn"
                onClick={togglePopup}
              >
                <i className="ti ti-x" />
              </Link>
            </div>
            <div className="toggle-body">
              <div className="pro-create">
                <form>
                  <div className="row">
                    <div className="col-md-12">
                      <div className="mb-3">
                        <label className="col-form-label">
                          Lead Name <span className="text-danger">*</span>
                        </label>
                        <input type="text" className="form-control" />
                      </div>
                    </div>
                    <div className="col-md-12">
                      <div className="mb-3">
                        <div className="radio-wrap">
                          <label className="col-form-label">Lead Type</label>
                          <div className="d-flex flex-wrap">
                            <div className="radio-btn">
                              <input
                                type="radio"
                                className="status-radio"
                                id="person"
                                name="leave"
                                defaultChecked
                              />
                              <label htmlFor="person">Person</label>
                            </div>
                            <div className="radio-btn">
                              <input
                                type="radio"
                                className="status-radio"
                                id="org"
                                name="leave"
                              />
                              <label htmlFor="org">Organization</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div className="col-md-12">
                      <div className="mb-3">
                        <div className="d-flex justify-content-between align-items-center">
                          <label className="col-form-label">
                            Company <span className="text-danger">*</span>
                          </label>
                          <Link
                            href="#"
                            className="add-new add-new-company add-popups"
                            onClick={addcompanyPopup}
                          >
                            <i className="ti ti-square-rounded-plus me-2" />
                            Add New
                          </Link>
                        </div>
                        <Select
                          className="select"
                          options={options}
                          classNamePrefix="react-select"
                        />
                      </div>
                    </div>
                    <div className="col-md-6">
                      <div className="mb-3">
                        <label className="col-form-label">
                          Value <span className="text-danger">*</span>
                        </label>
                        <input type="text" className="form-control" />
                      </div>
                    </div>
                    <div className="col-md-6">
                      <div className="mb-3">
                        <label className="col-form-label">
                          Currency <span className="text-danger">*</span>
                        </label>
                        <Select
                          className="select"
                          options={currency}
                          classNamePrefix="react-select"
                        />
                      </div>
                    </div>
                    <div className="col-md-12">
                      <div className="row">
                        <div className="col-md-8">
                          <div className="mb-3">
                            <label className="col-form-label">
                              Phone <span className="text-danger">*</span>
                            </label>
                            <input type="text" className="form-control" />
                          </div>
                        </div>
                        <div className="col-md-4 d-flex align-items-center">
                          <div className="mb-3 w-100">
                            <Select
                              className="select"
                              options={optionschoose}
                              classNamePrefix="react-select"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div className="col-md-6">
                      <div className="mb-3">
                        <label className="col-form-label">
                          Source <span className="text-danger">*</span>
                        </label>
                        <Select
                          className="select"
                          options={optionsource}
                          classNamePrefix="react-select"
                        />
                      </div>
                    </div>
                    <div className="col-md-6">
                      <div className="mb-3">
                        <label className="col-form-label">
                          Industry <span className="text-danger">*</span>
                        </label>
                        <Select
                          className="select"
                          options={optionindustry}
                          classNamePrefix="react-select"
                        />
                      </div>
                    </div>
                    <div className="col-md-6">
                      <div className="mb-3">
                        <label className="col-form-label">Owner</label>
                        <SelectWithImage />
                      </div>
                    </div>
                    <div className="col-md-6">
                      <div className="mb-3">
                        <label className="col-form-label">Tags </label>
                        <input
                          className="input-tags form-control"
                          type="text"
                          data-role="tagsinput"
                          name="Label"
                          defaultValue="Rated"
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
                          rows={5}
                          defaultValue={""}
                        />
                      </div>
                    </div>
                    <div className="col-md-12">
                      <div className="radio-wrap mb-3">
                        <label className="col-form-label">Visibility</label>
                        <div className="d-flex flex-wrap">
                          <div className="radio-btn">
                            <input
                              type="radio"
                              className="status-radio"
                              id="public1"
                              name="visible"
                            />
                            <label htmlFor="public1">Public</label>
                          </div>
                          <div className="radio-btn">
                            <input
                              type="radio"
                              className="status-radio"
                              id="private1"
                              name="visible"
                            />
                            <label htmlFor="private1">Private</label>
                          </div>
                          <div
                            className="radio-btn"
                            data-bs-toggle="modal"
                            data-bs-target="#access_view"
                          >
                            <input
                              type="radio"
                              className="status-radio"
                              id="people1"
                              name="visible"
                            />
                            <label htmlFor="people1">Select People</label>
                          </div>
                        </div>
                      </div>
                      <div className="radio-wrap mb-3">
                        <label className="col-form-label">Status</label>
                        <div className="d-flex flex-wrap">
                          <div className="radio-btn">
                            <input
                              type="radio"
                              className="status-radio"
                              id="active1"
                              name="status"
                              defaultChecked
                            />
                            <label htmlFor="active1">Active</label>
                          </div>
                          <div className="radio-btn">
                            <input
                              type="radio"
                              className="status-radio"
                              id="inactive1"
                              name="status"
                            />
                            <label htmlFor="inactive1">Inactive</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div className="submit-button text-end">
                    <Link href="#" className="btn btn-light sidebar-close">
                      Cancel
                    </Link>
                    <Link
                      href="#"
                      data-bs-toggle="modal"
                      data-bs-target="#create_contact"
                      className="btn btn-primary"
                    >
                      Create
                    </Link>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        {/* /Add User */}
        <div className="modal custom-modal fade" id="save_view" role="dialog">
          <div className="modal-dialog modal-dialog-centered">
            <div className="modal-content">
              <div className="modal-header">
                <h5 className="modal-title">Add New View</h5>
                <button
                  className="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                >
                  <i className="ti ti-x" />
                </button>
              </div>
              <div className="modal-body">
                <form>
                  <div className="mb-3">
                    <label className="col-form-label">View Name</label>
                    <input type="text" className="form-control" />
                  </div>
                  <div className="modal-btn text-end">
                    <Link
                      href="#"
                      className="btn btn-light"
                      data-bs-dismiss="modal"
                    >
                      Cancel
                    </Link>
                    <button
                      type="button"
                      data-bs-dismiss="modal"
                      className="btn btn-danger"
                    >
                      Save
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div className={`toggle-popup2 ${addcompany ? "sidebar-popup" : ""}`}>
          <div className="sidebar-layout">
            <div className="sidebar-header">
              <h4>Add New Company</h4>
              <Link
                href="#"
                className="sidebar-close2 toggle-btn"
                onClick={addcompanyPopup}
              >
                <i className="ti ti-x" />
              </Link>
            </div>
            <div className="toggle-body">
              <div className="pro-create">
                <form>
                  <div className="accordion-lists" id="list-accord">
                    {/* Basic Info */}
                    <div className="user-accordion-item">
                      <Link
                        href="#"
                        className="accordion-wrap"
                        data-bs-toggle="collapse"
                        data-bs-target="#basic"
                      >
                        <span>
                          <i className="ti ti-user-plus" />
                        </span>
                        Basic Info
                      </Link>
                      <div
                        className="accordion-collapse collapse show"
                        id="basic"
                        data-bs-parent="#list-accord"
                      >
                        <div className="content-collapse">
                          <div className="row">
                            <div className="col-md-12">
                              <div className="mb-3">
                                <div className="profile-upload">
                                  <div className="profile-upload-img">
                                    <span>
                                      <i className="ti ti-photo" />
                                    </span>
                                    <img
                                      src="assets/img/icons/company-icon-03.svg"
                                      alt="img"
                                      className="preview1"
                                    />
                                    <button
                                      type="button"
                                      className="profile-remove"
                                    >
                                      <i className="ti ti-x" />
                                    </button>
                                  </div>
                                  <div className="profile-upload-content">
                                    <label className="profile-upload-btn">
                                      <i className="ti ti-file-broken" /> Upload
                                      File
                                      <input
                                        type="file"
                                        className="input-img"
                                      />
                                    </label>
                                    <p>JPG, GIF or PNG. Max size of 800K</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div className="col-md-12">
                              <div className="mb-3">
                                <label className="col-form-label">
                                  Company Name
                                </label>
                                <input type="text" className="form-control" />
                              </div>
                            </div>
                            <div className="col-md-12">
                              <div className="mb-3">
                                <div className="d-flex justify-content-between align-items-center">
                                  <label className="col-form-label">
                                    Email <span className="text-danger">*</span>
                                  </label>
                                  <div className="status-toggle small-toggle-btn d-flex align-items-center">
                                    <span className="me-2 label-text">
                                      Email Opt Out
                                    </span>
                                    <input
                                      type="checkbox"
                                      id="user"
                                      className="check"
                                      defaultChecked
                                    />
                                    <label
                                      htmlFor="user"
                                      className="checktoggle"
                                    />
                                  </div>
                                </div>
                                <input type="text" className="form-control" />
                              </div>
                            </div>
                            <div className="col-md-6">
                              <div className="mb-3">
                                <label className="col-form-label">
                                  Phone 1 <span className="text-danger">*</span>
                                </label>
                                <input type="text" className="form-control" />
                              </div>
                            </div>
                            <div className="col-md-6">
                              <div className="mb-3">
                                <label className="col-form-label">
                                  Phone 2
                                </label>
                                <input type="text" className="form-control" />
                              </div>
                            </div>
                            <div className="col-md-6">
                              <div className="mb-3">
                                <label className="col-form-label">
                                  Fax <span className="text-danger">*</span>
                                </label>
                                <input type="text" className="form-control" />
                              </div>
                            </div>
                            <div className="col-md-6">
                              <div className="mb-3">
                                <label className="col-form-label">
                                  Website <span className="text-danger">*</span>
                                </label>
                                <input type="text" className="form-control" />
                              </div>
                            </div>
                            <div className="col-md-6">
                              <div className="mb-3">
                                <label className="col-form-label">
                                  Ratings
                                </label>
                                <div className="icon-form-end">
                                  <span className="form-icon">
                                    <i className="ti ti-star" />
                                  </span>
                                  <input
                                    type="text"
                                    className="form-control"
                                    placeholder="4.2"
                                  />
                                </div>
                              </div>
                            </div>
                            <div className="col-md-6">
                              <div className="mb-3">
                                <label className="col-form-label">Owner</label>
                                <SelectWithImage />
                              </div>
                            </div>
                            <div className="col-md-6">
                              <div className="mb-3">
                                <label className="col-form-label">Tags </label>
                                <input
                                  className="input-tags form-control"
                                  type="text"
                                  data-role="tagsinput"
                                  name="Label"
                                  defaultValue="Collab"
                                />
                              </div>
                            </div>
                            <div className="col-md-6">
                              <div className="mb-3">
                                <div className="d-flex align-items-center justify-content-between">
                                  <label className="col-form-label">
                                    Deals
                                  </label>
                                </div>
                                <Select
                                  className="select2"
                                  options={optiondeals}
                                  classNamePrefix="react-select"
                                />
                              </div>
                            </div>
                            <div className="col-md-6">
                              <div className="mb-3">
                                <label className="col-form-label">
                                  Source <span className="text-danger">*</span>
                                </label>
                                <Select
                                  className="select2"
                                  options={optionsource}
                                  classNamePrefix="react-select"
                                />
                              </div>
                            </div>
                            <div className="col-md-6">
                              <div className="mb-3">
                                <label className="col-form-label">
                                  Industry{" "}
                                  <span className="text-danger">*</span>
                                </label>
                                <Select
                                  className="select2"
                                  options={optionindustry}
                                  classNamePrefix="react-select"
                                />
                              </div>
                            </div>
                            <div className="col-md-12">
                              <div className="mb-3">
                                <label className="col-form-label">
                                  Contact <span className="text-danger">*</span>
                                </label>
                                <SelectWithImage2 />
                              </div>
                            </div>
                            <div className="col-md-6">
                              <div className="mb-3">
                                <label className="col-form-label">
                                  Currency{" "}
                                  <span className="text-danger">*</span>
                                </label>
                                <input type="text" className="form-control" />
                              </div>
                            </div>
                            <div className="col-md-6">
                              <div className="mb-3">
                                <label className="col-form-label">
                                  Language{" "}
                                  <span className="text-danger">*</span>
                                </label>
                                <Select
                                  className="select"
                                  options={languageOptions}
                                  classNamePrefix="react-select"
                                />
                              </div>
                            </div>
                            <div className="col-md-12">
                              <div className="mb-3 mb-0">
                                <label className="col-form-label">
                                  Description{" "}
                                  <span className="text-danger">*</span>
                                </label>
                                <textarea
                                  className="form-control"
                                  rows={5}
                                  defaultValue={""}
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    {/* /Basic Info */}
                    {/* Address Info */}
                    <div className="user-accordion-item">
                      <Link
                        href="#"
                        className="accordion-wrap collapsed"
                        data-bs-toggle="collapse"
                        data-bs-target="#address"
                      >
                        <span>
                          <i className="ti ti-map-pin-cog" />
                        </span>
                        Address Info
                      </Link>
                      <div
                        className="accordion-collapse collapse"
                        id="address"
                        data-bs-parent="#list-accord"
                      >
                        <div className="content-collapse">
                          <div className="row">
                            <div className="col-md-12">
                              <div className="mb-3">
                                <label className="col-form-label">
                                  Street Address{" "}
                                </label>
                                <input type="text" className="form-control" />
                              </div>
                            </div>
                            <div className="col-md-6">
                              <div className="mb-3">
                                <label className="col-form-label">City </label>
                                <input type="text" className="form-control" />
                              </div>
                            </div>
                            <div className="col-md-6">
                              <div className="mb-3">
                                <label className="col-form-label">
                                  State / Province{" "}
                                </label>
                                <input type="text" className="form-control" />
                              </div>
                            </div>
                            <div className="col-md-6">
                              <div className="mb-3 mb-wrap">
                                <label className="col-form-label">
                                  Country
                                </label>
                                <Select
                                  className="select"
                                  options={countryoptions1}
                                  classNamePrefix="react-select"
                                />
                              </div>
                            </div>
                            <div className="col-md-6">
                              <div className="mb-3 mb-wrap">
                                <label className="col-form-label">
                                  Zipcode{" "}
                                </label>
                                <input type="text" className="form-control" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    {/* /Address Info */}
                    {/* Social Profile */}
                    <div className="user-accordion-item">
                      <Link
                        href="#"
                        className="accordion-wrap collapsed"
                        data-bs-toggle="collapse"
                        data-bs-target="#social"
                      >
                        <span>
                          <i className="ti ti-social" />
                        </span>
                        Social Profile
                      </Link>
                      <div
                        className="accordion-collapse collapse"
                        id="social"
                        data-bs-parent="#list-accord"
                      >
                        <div className="content-collapse">
                          <div className="row">
                            <div className="col-md-6">
                              <div className="mb-3">
                                <label className="col-form-label">
                                  Facebook
                                </label>
                                <input type="text" className="form-control" />
                              </div>
                            </div>
                            <div className="col-md-6">
                              <div className="mb-3">
                                <label className="col-form-label">Skype </label>
                                <input type="text" className="form-control" />
                              </div>
                            </div>
                            <div className="col-md-6">
                              <div className="mb-3">
                                <label className="col-form-label">
                                  Linkedin{" "}
                                </label>
                                <input type="text" className="form-control" />
                              </div>
                            </div>
                            <div className="col-md-6">
                              <div className="mb-3">
                                <label className="col-form-label">
                                  Twitter
                                </label>
                                <input type="text" className="form-control" />
                              </div>
                            </div>
                            <div className="col-md-6">
                              <div className="mb-3 mb-wrap">
                                <label className="col-form-label">
                                  Whatsapp
                                </label>
                                <input type="text" className="form-control" />
                              </div>
                            </div>
                            <div className="col-md-6">
                              <div className="mb-3 mb-wrap">
                                <label className="col-form-label">
                                  Instagram
                                </label>
                                <input type="text" className="form-control" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    {/* /Social Profile */}
                    {/* Access */}
                    <div className="user-accordion-item">
                      <Link
                        href="#"
                        className="accordion-wrap collapsed"
                        data-bs-toggle="collapse"
                        data-bs-target="#access"
                      >
                        <span>
                          <i className="ti ti-accessible" />
                        </span>
                        Access
                      </Link>
                      <div
                        className="accordion-collapse collapse"
                        id="access"
                        data-bs-parent="#list-accord"
                      >
                        <div className="content-collapse">
                          <div className="row">
                            <div className="col-md-12">
                              <div className="radio-wrap mb-3">
                                <label className="col-form-label">
                                  Visibility
                                </label>
                                <div className="d-flex flex-wrap">
                                  <div className="radio-btn">
                                    <input
                                      type="radio"
                                      className="status-radio"
                                      id="public"
                                      name="visible"
                                    />
                                    <label htmlFor="public">Public</label>
                                  </div>
                                  <div className="radio-btn">
                                    <input
                                      type="radio"
                                      className="status-radio"
                                      id="private"
                                      name="visible"
                                    />
                                    <label htmlFor="private">Private</label>
                                  </div>
                                  <div
                                    className="radio-btn"
                                    data-bs-toggle="modal"
                                    data-bs-target="#access_view"
                                  >
                                    <input
                                      type="radio"
                                      className="status-radio"
                                      id="people"
                                      name="visible"
                                    />
                                    <label htmlFor="people">
                                      Select People
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div className="radio-wrap">
                                <label className="col-form-label">Status</label>
                                <div className="d-flex flex-wrap">
                                  <div className="radio-btn">
                                    <input
                                      type="radio"
                                      className="status-radio"
                                      id="active"
                                      name="status"
                                      defaultChecked
                                    />
                                    <label htmlFor="active">Active</label>
                                  </div>
                                  <div className="radio-btn">
                                    <input
                                      type="radio"
                                      className="status-radio"
                                      id="inactive"
                                      name="status"
                                    />
                                    <label htmlFor="inactive">Inactive</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    {/* /Access */}
                  </div>
                  <div className="submit-button text-end">
                    <Link href="#" className="btn btn-light sidebar-close2">
                      Cancel
                    </Link>
                    <button type="button" className="btn btn-primary">
                      Create
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div
          className="modal custom-modal fade"
          id="delete_contact"
          role="dialog"
        >
          <div className="modal-dialog modal-dialog-centered">
            <div className="modal-content">
              <div className="modal-header border-0 m-0 justify-content-end">
                <button
                  className="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                >
                  <i className="ti ti-x" />
                </button>
              </div>
              <div className="modal-body">
                <div className="success-message text-center">
                  <div className="success-popup-icon">
                    <i className="ti ti-trash-x" />
                  </div>
                  <h3>Remove Leads?</h3>
                  <p className="del-info">
                    Are you sure you want to remove lead you selected.
                  </p>
                  <div className="col-lg-12 text-center modal-btn">
                    <Link
                      href="#"
                      className="btn btn-light"
                      data-bs-dismiss="modal"
                    >
                      Cancel
                    </Link>
                    <Link href="leads" className="btn btn-danger">
                      Yes, Delete it
                    </Link>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div className="modal custom-modal fade" id="delete_deal" role="dialog">
          <div className="modal-dialog modal-dialog-centered">
            <div className="modal-content">
              <div className="modal-header border-0 m-0 justify-content-end">
                <button
                  className="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                >
                  <i className="ti ti-x" />
                </button>
              </div>
              <div className="modal-body">
                <div className="success-message text-center">
                  <div className="success-popup-icon">
                    <i className="ti ti-trash-x" />
                  </div>
                  <h3>Remove Leads?</h3>
                  <p className="del-info">
                    Are you sure you want to remove lead you selected.
                  </p>
                  <div className="col-lg-12 text-center modal-btn">
                    <Link
                      href="#"
                      className="btn btn-light"
                      data-bs-dismiss="modal"
                    >
                      Cancel
                    </Link>
                    <Link href="/leads" className="btn btn-danger">
                      Yes, Delete it
                    </Link>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </>
    </>
  );
};

export default LeadsKanbanComponent;

"use client";
/* eslint-disable @next/next/no-img-element */

import React, { useEffect, useRef, useState } from "react";
import CollapseHeader from "../../../core/common/collapse-header";
import { SelectWithImage2 } from "../../../core/common/selectWithImage2";
import { Modal } from "react-bootstrap";
import DefaultEditor from "react-simple-wysiwyg";
import Select from "react-select";
import DatePicker from "react-datepicker";
import {
  duration,
  options1,
  status,
} from "../../../core/common/selectoption/selectoption";
import { TagsInput } from "react-tag-input-component";
import {
  optionssymbol,
  priorityList,
  project,
  salestypelist,
  socialMedia,
  tagInputValues,
} from "../../../core/common/selectoption/selectoption";

import { all_routes } from "@/data/all_routes";
import Link from "next/link";
import {
  DragDropContext,
  Droppable,
  Draggable,
  DropResult,
} from "react-beautiful-dnd";
import { title } from "process";
const route = all_routes;

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
  assignee: string;
  progress: number;
  dueDate: string;
}

const deals: Deal[] = [
  {
    id: "1",
    initials: "HT",
    name: "Howell, Tremblay and Rath",
    value: "$03,50,000",
    email: "darleeo@example.com",
    phone: "+1 12445-47878",
    location: "Newyork, United States",
    avatar: "assets/img/profiles/avatar-19.jpg",
    assignee: "Darlee Robertson",
    progress: 85,
    dueDate: "10 Jan 2024",
  },
  {
    id: "2",
    initials: "RJ",
    name: " Robert, John and Carlos",
    value: " $02,10,000",
    email: "sheron@example.com",
    phone: "  +1 12445-47878",
    location: " Exeter, United States",
    avatar: "assets/img/profiles/avatar-20.jpg",
    assignee: " Sharon Roy",
    progress: 15,
    dueDate: " 12 Jan 2024",
  },
  {
    id: "3",
    initials: "WS",
    name: "Wendy, Star and David",
    value: "$04,22,000",
    email: "vau@example.com",
    phone: " +1 12445-47878",
    location: " Phoenix, United States",
    avatar: "assets/img/profiles/avatar-21.jpg",
    assignee: "Smith Martin",
    progress: 95,
    dueDate: "14 Jan 2024",
  },
];

const dealsColumn2: Deal[] = [
  {
    id: "4",
    initials: "BR",
    name: " Byron, Roman and Bailey",
    value: "$02,45,000",
    email: "jessica13@example.com",
    phone: "+1 89351-90346",
    location: "Chester, United States",
    avatar: "assets/img/profiles/avatar-01.jpg",
    assignee: "Jessica",
    progress: 47,
    dueDate: "06 Feb 2024",
  },
  {
    id: "5",
    initials: "RJ",
    name: "Robert, John and Carlos",
    value: " $01,17,000",
    email: "caroltho3@example.com",
    phone: "+1 78982-09163",
    location: "Chicago, United States",
    avatar: "assets/img/profiles/avatar-16.jpg",
    assignee: "Chris Davis",
    progress: 98,
    dueDate: "15 Jan 2024",
  },
  {
    id: "6",
    initials: "IC",
    name: "Irene, Charles and Wilston",
    value: "$02,12,000",
    email: "dawnmercha@example.com",
    phone: "+1 27691-89246",
    location: "Bristol, United States",
    avatar: "assets/img/profiles/avatar-22.jpg",
    assignee: " Dawn Mercha",
    progress: 95,
    dueDate: "25 Jan 2024",
  },
];

const dealsColumn3: Deal[] = [
  {
    id: "7",
    initials: "HT",
    name: "Jody, Powell and Cecil",
    value: "$01,84,043",
    email: "rachel@example.com",
    phone: "+1 17839-93617",
    location: "Baltimore, United States",
    avatar: "assets/img/profiles/avatar-23.jpg",
    assignee: "Rachel Hampton",
    progress: 25,
    dueDate: "18 Mar 2024",
  },
  {
    id: "8",
    initials: "RJ",
    name: "Clark, Davis and Partners",
    value: "$02,75,000",
    email: "clark@example.com",
    phone: "+1 87654-32109",
    location: "Chicago, United States",
    avatar: "assets/img/profiles/avatar-23.jpg",
    assignee: "Chris Davis",
    progress: 60,
    dueDate: "22 Jan 2024",
  },
  {
    id: "9", // Changed from "8" to "9" to make it unique
    initials: "BL",
    name: "Bonnie, Linda and Mullin",
    value: "$09,35,189",
    email: "jonelle@example.com",
    phone: "+1 16739-47193",
    location: "Coventry, United States",
    avatar: "assets/img/profiles/avatar-24.jpg",
    assignee: "Jonelle Curtiss",
    progress: 70,
    dueDate: "15 Feb 2024",
  },
  {
    id: "10", // Changed from "9" to "10" to make it unique
    initials: "CJ",
    name: "Carlos, Jones and Jim",
    value: "$04,27,940",
    email: "jonathan@example.com",
    phone: "+1 18390-37153",
    location: "Seattle",
    avatar: "assets/img/profiles/avatar-25.jpg",
    assignee: "Jonelle Curtiss",
    progress: 45,
    dueDate: "30 Jan 2024",
  },
];

const dealsColumn4: Deal[] = [
  {
    id: "10",
    initials: "FJ",
    name: "Freda,Jennfier and Thompson",
    value: "$04,17,593",
    email: " sidney@example.com",
    phone: " +1 11739-38135",
    location: " London, United States",
    avatar: "assets/img/profiles/avatar-17.jpg",
    assignee: "Sidney Franks",
    progress: 59,
    dueDate: " 11 Apr 2024",
  },
  {
    id: "11",
    initials: "BF",
    name: "Bruce, Faulkner and Lela",
    value: "$08,81,389",
    email: "brook@example.com",
    phone: "+1 19302-91043",
    location: "Detroit, United State",
    avatar: "assets/img/profiles/avatar-26.jpg",
    assignee: "Brook",
    progress: 72,
    dueDate: "17 Apr 2024",
  },
  {
    id: "12",
    initials: "LP",
    name: "Lawrence, Patrick and Vandorn",
    value: "$09,27,193",
    email: "mickey@example.com",
    phone: "+1 17280-92016",
    location: "Manchester, United States",
    avatar: "assets/img/profiles/avatar-15.jpg",
    assignee: "Mickey",
    progress: 20,
    dueDate: "10 Feb 2024",
  },
  {
    id: "13",
    initials: "CJ",
    name: "Carlos, Jones and Jim",
    value: "$04,27,940",
    email: "jonathan@example.com",
    phone: "+1 18390-37153",
    location: "Seattle",
    avatar: "assets/img/profiles/avatar-25.jpg",
    assignee: "Jonelle Curtiss",
    progress: 45,
    dueDate: "30 Jan 2024",
  },
];

const initialColumns: Columns = {
  column1: {
    title: "Qualify To Buy",
    subtitle: "45 Leads - $15,44,540",
    tasks: deals.map((deal) => ({
      id: deal.id,
      content: deal.name,
      priority: "Low", // You can customize this based on your logic
    })),
  },
  column2: {
    title: "Contact Made",
    subtitle: "30 Leads - $19,94,938",
    tasks: dealsColumn2.map((deal) => ({
      id: deal.id,
      content: deal.name,
      priority: "Medium", // You can customize this based on your logic
    })),
  },
  column3: {
    title: "Presentation",
    subtitle: "25 Leads - $10,36.390",
    tasks: dealsColumn3.map((deal) => ({
      id: deal.id,
      content: deal.name,
      priority: "Medium", // You can customize this based on your logic
    })),
  },
  column4: {
    title: "Proposal Made",
    subtitle: "50 Leads - $18,83,013",
    tasks: dealsColumn4.map((deal) => ({
      id: deal.id,
      content: deal.name,
      priority: "Medium", // You can customize this based on your logic
    })),
  },
};

const DealsKanbanComponent = () => {
  const [owner, setOwner] = useState(["Collab"]);
  const [openModal, setOpenModal] = useState(false);
  const route = all_routes;

  const [selectedDate, setSelectedDate] = useState<Date | null>(new Date());
  const handleDateChange = (date: Date | null) => {
    setSelectedDate(date);
  };
  const [selectedDate1, setSelectedDate1] = useState<Date | null>(new Date());
  const handleDateChange1 = (date: Date | null) => {
    setSelectedDate1(date);
  };

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
                    <div className="col-8">
                      <h4 className="page-title">
                        Deals<span className="count-title">123</span>
                      </h4>
                    </div>
                    <div className="col-4 text-end">
                      <div className="head-icons">
                        <CollapseHeader />
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
                      <div className="filter-dropdown-menu dropdown-menu  dropdown-menu-md-start p-3">
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
                                  Deals Name
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
                                      placeholder="Search Country"
                                    />
                                  </div>
                                  <ul>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input
                                            type="checkbox"
                                            defaultChecked
                                          />
                                          <span className="checkmarks" />
                                          Collins
                                        </label>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                          Konopelski
                                        </label>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                          Adams
                                        </label>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                          Gutkowski
                                        </label>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                          Walter
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
                                  data-bs-target="#owner"
                                  aria-expanded="false"
                                  aria-controls="owner"
                                >
                                  Owner
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
                                          <input
                                            type="checkbox"
                                            defaultChecked
                                          />
                                          <span className="checkmarks" />
                                          Hendry
                                        </label>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                          Guillory
                                        </label>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                          Jami
                                        </label>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                          Theresa
                                        </label>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                          Espinosa
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
                                          <input
                                            type="checkbox"
                                            defaultChecked
                                          />
                                          <span className="checkmarks" />
                                          Won
                                        </label>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                          Open
                                        </label>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                          Lost
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
                                  Rating
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
                                          <input
                                            type="checkbox"
                                            defaultChecked
                                          />
                                          <span className="checkmarks" />
                                          <span className="rating">
                                            <i className="fa fa-star filled" />
                                            <i className="fa fa-star filled" />
                                            <i className="fa fa-star filled" />
                                            <i className="fa fa-star filled" />
                                            <i className="fa fa-star filled" />
                                            <span>5.0</span>
                                          </span>
                                        </label>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                          <span className="rating">
                                            <i className="fa fa-star filled" />
                                            <i className="fa fa-star filled" />
                                            <i className="fa fa-star filled" />
                                            <i className="fa fa-star filled" />
                                            <i className="fa fa-star" />
                                            <span>4.0</span>
                                          </span>
                                        </label>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                          <span className="rating">
                                            <i className="fa fa-star filled" />
                                            <i className="fa fa-star filled" />
                                            <i className="fa fa-star filled" />
                                            <i className="fa fa-star" />
                                            <i className="fa fa-star" />
                                            <span>3.0</span>
                                          </span>
                                        </label>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                          <span className="rating">
                                            <i className="fa fa-star filled" />
                                            <i className="fa fa-star filled" />
                                            <i className="fa fa-star" />
                                            <i className="fa fa-star" />
                                            <i className="fa fa-star" />
                                            <span>2.0</span>
                                          </span>
                                        </label>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                          <span className="rating">
                                            <i className="fa fa-star filled" />
                                            <i className="fa fa-star" />
                                            <i className="fa fa-star" />
                                            <i className="fa fa-star" />
                                            <i className="fa fa-star" />
                                            <span>1.0</span>
                                          </span>
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
                                  data-bs-target="#collapseThree"
                                  aria-expanded="false"
                                  aria-controls="collapseThree"
                                >
                                  Tags
                                </Link>
                              </div>
                              <div
                                className="filter-set-contents accordion-collapse collapse"
                                id="collapseThree"
                                data-bs-parent="#accordionExample"
                              >
                                <div className="filter-content-list">
                                  <ul>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input
                                            type="checkbox"
                                            defaultChecked
                                          />
                                          <span className="checkmarks" />
                                          Promotion
                                        </label>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                          Rated
                                        </label>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                          Rejected
                                        </label>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                          Collab
                                        </label>
                                      </div>
                                    </li>
                                    <li>
                                      <div className="filter-checks">
                                        <label className="checkboxs">
                                          <input type="checkbox" />
                                          <span className="checkmarks" />
                                          Calls
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
                                <Link
                                  href={route.dealsKanban}
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
                    <div className="icon-form mb-3 mb-sm-0">
                      <span className="form-icon">
                        <i className="ti ti-search" />
                      </span>
                      <input
                        type="text"
                        className="form-control"
                        placeholder="Search Deals"
                      />
                    </div>
                  </div>
                  <div>
                    <ul className="d-flex align-items-center">
                      <li>
                        <div className="view-icons me-2">
                          <Link href={route.deals}>
                            <i className="ti ti-list-tree" />
                          </Link>
                          <Link href={route.dealsKanban} className="active">
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
                          Add Deals
                        </Link>
                      </li>
                    </ul>
                  </div>
                </div>
                {/* /Filter */}
                {/* Deals Kanban */}
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
                                                  href={route.dealsDetails}
                                                  className="avatar avatar-lg bg-gray flex-shrink-0 me-2"
                                                >
                                                  <span className="avatar-title text-dark">
                                                    {deal.initials}
                                                  </span>
                                                </Link>
                                                <h6 className="fw-medium">
                                                  <Link
                                                    href={route.dealsDetails}
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
                                            <div className="d-flex justify-content-between align-items-center">
                                              <div className="d-flex align-items-center">
                                                <Link
                                                  href="#"
                                                  className="avatar avatar-md flex-shrink-0 me-2"
                                                >
                                                  <img
                                                    src={deal.avatar}
                                                    alt=""
                                                  />
                                                </Link>
                                                <Link
                                                  href="#"
                                                  className="text-default"
                                                >
                                                  {deal.assignee}
                                                </Link>
                                              </div>
                                              <span className="badge badge-sm text-white bg-blue">
                                                <i className="ti ti-progress me-1" />
                                                {deal.progress}%
                                              </span>
                                            </div>
                                            <div className="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                              <span>
                                                <i className="ti ti-calendar-due" />{" "}
                                                {deal.dueDate}
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
                {/* /Deals Kanban */}
              </div>
            </div>
          </div>
        </div>
        {/* /Page Wrapper */}
      </>

      <div
        className="offcanvas offcanvas-end offcanvas-large"
        tabIndex={-1}
        id="offcanvas_add"
      >
        <div className="offcanvas-header border-bottom">
          <h5 className="fw-semibold">Add New Deals</h5>
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
            <div className="row">
              <div className="col-md-12">
                <div className="mb-3">
                  <label className="col-form-label">
                    Deal Name <span className="text-danger">*</span>
                  </label>
                  <input type="text" className="form-control" />
                </div>
              </div>
              <div className="col-md-6">
                <div className="mb-3">
                  <div className="d-flex align-items-center justify-content-between">
                    <label className="col-form-label">
                      Pipeine <span className="text-danger">*</span>
                    </label>
                    <Link
                      href=""
                      className="label-add "
                      data-bs-toggle="offcanvas"
                      data-bs-target="#offcanvas_pipeline"
                    >
                      <i className="ti ti-square-rounded-plus"></i>
                      Add New
                    </Link>
                  </div>
                  <Select
                    className="select2"
                    options={salestypelist}
                    placeholder="Choose"
                    classNamePrefix="react-select"
                  />
                </div>
              </div>
              <div className="col-md-6">
                <div className="mb-3">
                  <label className="col-form-label">
                    Status <span className="text-danger">*</span>
                  </label>
                  <Select
                    className="select2"
                    options={status}
                    placeholder="Choose"
                    classNamePrefix="react-select"
                  />
                </div>
              </div>
              <div className="col-lg-3 col-md-6">
                <div className="mb-3">
                  <label className="col-form-label">
                    Deal Value<span className="text-danger"> *</span>
                  </label>
                  <input className="form-control" type="text" />
                </div>
              </div>
              <div className="col-lg-3 col-md-6">
                <div className="mb-3">
                  <label className="col-form-label">
                    Currency <span className="text-danger">*</span>
                  </label>
                  <Select
                    className="select2"
                    options={optionssymbol}
                    placeholder="Choose"
                    classNamePrefix="react-select"
                  />
                </div>
              </div>
              <div className="col-lg-3 col-md-6">
                <div className="mb-3">
                  <label className="col-form-label">
                    Period <span className="text-danger">*</span>
                  </label>
                  <Select
                    className="select2"
                    options={duration}
                    placeholder="Choose"
                    classNamePrefix="react-select"
                  />
                </div>
              </div>
              <div className="col-lg-3 col-md-6">
                <div className="mb-3">
                  <label className="col-form-label">
                    Period Value <span className="text-danger">*</span>
                  </label>
                  <input className="form-control" type="text" />
                </div>
              </div>
              <div className="col-md-12">
                <div className="mb-3">
                  <label className="col-form-label">
                    Contact <span className="text-danger">*</span>
                  </label>
                  <SelectWithImage2 />
                </div>
                <div className="mb-3">
                  <label className="col-form-label">
                    Project <span className="text-danger">*</span>
                  </label>
                  <Select
                    className="select2"
                    options={project}
                    defaultValue={tagInputValues}
                    isMulti
                    classNamePrefix="react-select"
                  />
                </div>
              </div>
              <div className="col-md-6">
                <div className="mb-3">
                  <label className="col-form-label">
                    Due Date <span className="text-danger">*</span>
                  </label>
                  <div className="icon-form">
                    <span className="form-icon">
                      <i className="ti ti-calendar-check" />
                    </span>
                    <DatePicker
                      className="form-control datetimepicker deals-details"
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
                    Expected Closing Date <span className="text-danger">*</span>
                  </label>
                  <div className="icon-form">
                    <span className="form-icon">
                      <i className="ti ti-calendar-check" />
                    </span>

                    <DatePicker
                      className="form-control datetimepicker deals-details"
                      selected={selectedDate1}
                      onChange={handleDateChange1}
                      dateFormat="dd-MM-yyyy"
                    />
                  </div>
                </div>
              </div>
              <div className="col-md-12">
                <div className="mb-3">
                  <label className="col-form-label">
                    Assignee <span className="text-danger">*</span>
                  </label>
                  <SelectWithImage2 />
                </div>
              </div>
              <div className="col-md-6">
                <div className="mb-3">
                  <label className="col-form-label">
                    Follow Up Date <span className="text-danger">*</span>
                  </label>
                  <div className="icon-form">
                    <span className="form-icon">
                      <i className="ti ti-calendar-check" />
                    </span>
                    <DatePicker
                      className="form-control datetimepicker deals-details"
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
                    Source <span className="text-danger">*</span>
                  </label>

                  <Select
                    className="select2"
                    options={socialMedia}
                    placeholder="Choose"
                    classNamePrefix="react-select"
                  />
                </div>
              </div>
              <div className="col-md-6">
                <div className="mb-3">
                  <label className="col-form-label">
                    Tags <span className="text-danger">*</span>
                  </label>
                  <TagsInput
                    // className="input-tags form-control"
                    value={owner}
                    onChange={setOwner}
                  />
                </div>
              </div>
              <div className="col-md-6">
                <div className="mb-3">
                  <label className="col-form-label">
                    Priority <span className="text-danger">*</span>
                  </label>
                  <Select
                    className="select2"
                    options={priorityList}
                    placeholder="Choose"
                    classNamePrefix="react-select"
                  />
                </div>
              </div>
              <div className="col-lg-12">
                <div className="mb-3">
                  <label className="col-form-label">
                    Description <span className="text-danger">*</span>
                  </label>
                  <DefaultEditor className="summernote" />
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
                onClick={() => setOpenModal(true)}
              >
                Create
              </button>
            </div>
          </form>
        </div>
      </div>
      {/* /Add New Deals */}
      {/* Edit Deals */}
      <div
        className="offcanvas offcanvas-end offcanvas-large"
        tabIndex={-1}
        id="offcanvas_edit"
      >
        <div className="offcanvas-header border-bottom">
          <h5 className="fw-semibold">Edit Deals</h5>
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
            <div className="row">
              <div className="col-md-12">
                <div className="mb-3">
                  <label className="col-form-label">
                    Deal Name <span className="text-danger">*</span>
                  </label>
                  <input type="text" className="form-control" />
                </div>
              </div>
              <div className="col-md-6">
                <div className="mb-3">
                  <div className="d-flex align-items-center justify-content-between">
                    <label className="col-form-label">
                      Pipeine <span className="text-danger">*</span>
                    </label>
                    <Link
                      href=""
                      className="label-add "
                      data-bs-toggle="offcanvas"
                      data-bs-target="#offcanvas_pipeline"
                    >
                      <i className="ti ti-square-rounded-plus"></i>
                      Add New
                    </Link>
                  </div>
                  <Select
                    className="select2"
                    options={salestypelist}
                    placeholder="Choose"
                    classNamePrefix="react-select"
                  />
                </div>
              </div>
              <div className="col-md-6">
                <div className="mb-3">
                  <label className="col-form-label">
                    Status <span className="text-danger">*</span>
                  </label>
                  <Select
                    className="select2"
                    options={status}
                    placeholder="Choose"
                    classNamePrefix="react-select"
                  />
                </div>
              </div>
              <div className="col-lg-3 col-md-6">
                <div className="mb-3">
                  <label className="col-form-label">
                    Deal Value<span className="text-danger"> *</span>
                  </label>
                  <input className="form-control" type="text" />
                </div>
              </div>
              <div className="col-lg-3 col-md-6">
                <div className="mb-3">
                  <label className="col-form-label">
                    Currency <span className="text-danger">*</span>
                  </label>
                  <Select
                    className="select2"
                    options={optionssymbol}
                    placeholder="Choose"
                    classNamePrefix="react-select"
                  />
                </div>
              </div>
              <div className="col-lg-3 col-md-6">
                <div className="mb-3">
                  <label className="col-form-label">
                    Period <span className="text-danger">*</span>
                  </label>
                  <Select
                    className="select2"
                    options={duration}
                    placeholder="Choose"
                    classNamePrefix="react-select"
                  />
                </div>
              </div>
              <div className="col-lg-3 col-md-6">
                <div className="mb-3">
                  <label className="col-form-label">
                    Period Value <span className="text-danger">*</span>
                  </label>
                  <input className="form-control" type="text" />
                </div>
              </div>
              <div className="col-md-12">
                <div className="mb-3">
                  <label className="col-form-label">
                    Contact <span className="text-danger">*</span>
                  </label>
                  <SelectWithImage2 />
                </div>
                <div className="mb-3">
                  <label className="col-form-label">
                    Project <span className="text-danger">*</span>
                  </label>
                  <Select
                    className="select2"
                    options={project}
                    defaultValue={tagInputValues}
                    isMulti
                    classNamePrefix="react-select"
                  />
                </div>
              </div>
              <div className="col-md-6">
                <div className="mb-3">
                  <label className="col-form-label">
                    Due Date <span className="text-danger">*</span>
                  </label>
                  <div className="icon-form">
                    <span className="form-icon">
                      <i className="ti ti-calendar-check" />
                    </span>
                    <DatePicker
                      className="form-control datetimepicker deals-details"
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
                    Expected Closing Date <span className="text-danger">*</span>
                  </label>
                  <div className="icon-form">
                    <span className="form-icon">
                      <i className="ti ti-calendar-check" />
                    </span>

                    <DatePicker
                      className="form-control datetimepicker deals-details"
                      selected={selectedDate1}
                      onChange={handleDateChange1}
                      dateFormat="dd-MM-yyyy"
                    />
                  </div>
                </div>
              </div>
              <div className="col-md-12">
                <div className="mb-3">
                  <label className="col-form-label">
                    Assignee <span className="text-danger">*</span>
                  </label>
                  <SelectWithImage2 />
                </div>
              </div>
              <div className="col-md-6">
                <div className="mb-3">
                  <label className="col-form-label">
                    Follow Up Date <span className="text-danger">*</span>
                  </label>
                  <div className="icon-form">
                    <span className="form-icon">
                      <i className="ti ti-calendar-check" />
                    </span>
                    <DatePicker
                      className="form-control datetimepicker deals-details"
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
                    Source <span className="text-danger">*</span>
                  </label>

                  <Select
                    className="select2"
                    options={socialMedia}
                    placeholder="Choose"
                    classNamePrefix="react-select"
                  />
                </div>
              </div>
              <div className="col-md-6">
                <div className="mb-3">
                  <label className="col-form-label">
                    Tags <span className="text-danger">*</span>
                  </label>
                  <TagsInput
                    // className="input-tags form-control"
                    value={owner}
                    onChange={setOwner}
                  />
                </div>
              </div>
              <div className="col-md-6">
                <div className="mb-3">
                  <label className="col-form-label">
                    Priority <span className="text-danger">*</span>
                  </label>
                  <Select
                    className="select2"
                    options={priorityList}
                    placeholder="Choose"
                    classNamePrefix="react-select"
                  />
                </div>
              </div>
              <div className="col-lg-12">
                <div className="mb-3">
                  <label className="col-form-label">
                    Description <span className="text-danger">*</span>
                  </label>
                  <DefaultEditor className="summernote" />
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
                onClick={() => setOpenModal(true)}
              >
                Create
              </button>
            </div>
          </form>
        </div>
      </div>
      {/* /Edit Deals */}
      {/* Delete Deal */}
      <div className="modal fade" id="delete_deal" role="dialog">
        <div className="modal-dialog modal-dialog-centered">
          <div className="modal-content">
            <div className="modal-body">
              <div className="text-center">
                <div className="avatar avatar-xl bg-danger-light rounded-circle mb-3">
                  <i className="ti ti-trash-x fs-36 text-danger" />
                </div>
                <h4 className="mb-2">Remove Deal?</h4>
                <p className="mb-0">
                  Are you sure you want to remove <br /> deal you selected.
                </p>
                <div className="d-flex align-items-center justify-content-center mt-4">
                  <Link
                    href="#"
                    className="btn btn-light me-2"
                    data-bs-dismiss="modal"
                  >
                    Cancel
                  </Link>
                  <Link
                    href={route.deals}
                    data-bs-dismiss="modal"
                    className="btn btn-danger"
                  >
                    Yes, Delete it
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {/* /Delete Deal */}
      {/* Create Deal */}
      <Modal show={openModal} onHide={() => setOpenModal(false)}>
        <div className="modal-header border-0 m-0 justify-content-end">
          <button
            className="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
            onClick={() => setOpenModal(false)}
          >
            <i className="ti ti-x" />
          </button>
        </div>
        <div className="modal-body">
          <div className="success-message text-center">
            <div className="success-popup-icon bg-light-blue">
              <i className="ti ti-medal" />
            </div>
            <h3>Deal Created Successfully!!!</h3>
            <p>View the details of deal, created</p>
            <div className="col-lg-12 text-center modal-btn">
              <Link href="#" className="btn btn-light" data-bs-dismiss="modal">
                Cancel
              </Link>
              <Link href={route.dealsDetails} className="btn btn-primary">
                View Details
              </Link>
            </div>
          </div>
        </div>
      </Modal>
      {/* /Create Deal */}
      {/* Add New Pipeline */}
      <div
        className="offcanvas offcanvas-end offcanvas-large"
        tabIndex={-1}
        id="offcanvas_pipeline"
      >
        <div className="offcanvas-header border-bottom">
          <h4>Add New Pipeline</h4>
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
              <div className="mb-3">
                <label className="col-form-label">
                  Pipeline Name <span className="text-danger">*</span>
                </label>
                <input className="form-control" type="text" />
              </div>
              <div className="mb-3">
                <div className="pipe-title d-flex align-items-center justify-content-between">
                  <h5 className="form-title">Pipeline Stages</h5>
                  <Link
                    href="#"
                    className="add-stage"
                    data-bs-toggle="modal"
                    data-bs-target="#add_stage"
                  >
                    <i className="ti ti-square-rounded-plus" />
                    Add New
                  </Link>
                </div>
                <div className="pipeline-listing">
                  <div className="pipeline-item">
                    <p>
                      <i className="ti ti-grip-vertical" /> Inpipeline
                    </p>
                    <div className="action-pipeline">
                      <Link
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#edit_stage"
                      >
                        <i className="ti ti-edit text-blue" />
                        Edit
                      </Link>
                      <Link
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#delete_stage"
                      >
                        <i className="ti ti-trash text-danger" />
                        Delete
                      </Link>
                    </div>
                  </div>
                  <div className="pipeline-item">
                    <p>
                      <i className="ti ti-grip-vertical" /> Follow Up
                    </p>
                    <div className="action-pipeline">
                      <Link
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#edit_stage"
                      >
                        <i className="ti ti-edit text-blue" />
                        Edit
                      </Link>
                      <Link
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#delete_stage"
                      >
                        <i className="ti ti-trash text-danger" />
                        Delete
                      </Link>
                    </div>
                  </div>
                  <div className="pipeline-item">
                    <p>
                      <i className="ti ti-grip-vertical" /> Schedule Service
                    </p>
                    <div className="action-pipeline">
                      <Link
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#edit_stage"
                      >
                        <i className="ti ti-edit text-blue" />
                        Edit
                      </Link>
                      <Link
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#delete_stage"
                      >
                        <i className="ti ti-trash text-danger" />
                        Delete
                      </Link>
                    </div>
                  </div>
                </div>
              </div>
              <div className="mb-3">
                <h5 className="form-title">Access</h5>
                <div className="d-flex flex-wrap access-item nav">
                  <div
                    className="radio-btn"
                    data-bs-toggle="tab"
                    data-bs-target="#all"
                  >
                    <input
                      type="radio"
                      className="status-radio"
                      id="all"
                      name="status"
                      defaultChecked
                    />
                    <label htmlFor="all">All</label>
                  </div>
                  <div
                    className="radio-btn"
                    data-bs-toggle="tab"
                    data-bs-target="#select-person"
                  >
                    <input
                      type="radio"
                      className="status-radio"
                      id="select"
                      name="status"
                    />
                    <label htmlFor="select">Select Person</label>
                  </div>
                </div>
                <div className="tab-content mb-3">
                  <div className="tab-pane fade" id="select-person">
                    <div className="access-wrapper">
                      <div className="access-view">
                        <div className="access-img">
                          <img
                            src="assets/img/profiles/avatar-21.jpg"
                            alt="Image"
                          />
                          Vaughan
                        </div>
                        <Link href="#">Remove</Link>
                      </div>
                      <div className="access-view">
                        <div className="access-img">
                          <img
                            src="assets/img/profiles/avatar-01.jpg"
                            alt="Image"
                          />
                          Jessica
                        </div>
                        <Link href="#">Remove</Link>
                      </div>
                    </div>
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
              <button type="button" className="btn btn-primary">
                Create
              </button>
            </div>
          </form>
        </div>
      </div>
      {/* /Add New Pipeline */}
      {/* Delete Stage */}
      <div className="modal fade" id="delete_stage" role="dialog">
        <div className="modal-dialog modal-dialog-centered">
          <div className="modal-content">
            <div className="modal-body">
              <div className="text-center">
                <div className="avatar avatar-xl bg-danger-light rounded-circle mb-3">
                  <i className="ti ti-trash-x fs-36 text-danger" />
                </div>
                <h4 className="mb-2">Remove Stage?</h4>
                <p className="mb-0">
                  Are you sure you want to remove <br /> stage you selected.
                </p>
                <div className="d-flex align-items-center justify-content-center mt-4">
                  <Link
                    href="#"
                    className="btn btn-light me-2"
                    data-bs-dismiss="modal"
                  >
                    Cancel
                  </Link>
                  <Link
                    href={route.deals}
                    data-bs-dismiss="modal"
                    className="btn btn-danger"
                  >
                    Yes, Delete it
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {/* /Delete Stage */}
      {/* Add New Stage */}
      <div className="modal custom-modal fade" id="add_stage" role="dialog">
        <div className="modal-dialog modal-dialog-centered">
          <div className="modal-content">
            <div className="modal-header">
              <h5 className="modal-title">Add New Stage</h5>
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
                  <label className="col-form-label">Stage Name *</label>
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
                    Save Changes
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      {/* /Add New Stage */}
      {/* Edit Stage */}
      <div className="modal custom-modal fade" id="edit_stage" role="dialog">
        <div className="modal-dialog modal-dialog-centered">
          <div className="modal-content">
            <div className="modal-header">
              <h5 className="modal-title">Edit Stage</h5>
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
                  <label className="col-form-label">Stage Name *</label>
                  <input
                    type="text"
                    className="form-control"
                    defaultValue="Inpipeline"
                  />
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
                    Save Changes
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      {/* /Edit Stage */}
      {/* Add New View */}
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
      {/* /Add New View */}
    </>
  );
};

export default DealsKanbanComponent;

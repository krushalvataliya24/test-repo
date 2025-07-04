"use client";
/* eslint-disable @next/next/no-img-element */

import React, { useState } from "react";
import { all_routes } from "@/data/all_routes";
import Link from "next/link";
import { pageDataTablesData } from "@/data/json/pageDataTables";
import Table from "../../../core/common/dataTable/index";

const DataTablesComponent = () => {
  const data = pageDataTablesData;
  const route = all_routes;
  const columns = [
    {
      title: "Name",
      dataIndex: "name",
      key: "name",
      sorter: (a:any, b:any) => a.name.length - b.name.length,
    },
    {
      title: "Position",
      dataIndex: "position",
      key: "position",
      sorter: (a:any, b:any) => a.position.length - b.position.length,
    },
    {
      title: "Office",
      dataIndex: "office",
      key: "office",
      sorter: (a:any, b:any) => a.office.length - b.office.length,
    },
    {
      title: "Age",
      dataIndex: "age",
      key: "age",
      sorter: (a:any, b:any) => a.age.length - b.age.length,
    },
    {
      title: "Start Date",
      dataIndex: "startDate",
      key: "startDate",
      sorter: (a:any, b:any) => a.startDate.length - b.startDate.length,
    },
    {
      title: "Salary",
      dataIndex: "salary",
      key: "salary",
      sorter: (a:any, b:any) => a.salary.length - b.salary.length,
    },
  ];
  const [searchText, setSearchText] = useState("");
  const handleSearch = (e:any) => {
    setSearchText(e.target.value);
  };

  const filteredData = data.filter((entry:any) => {
    return Object.keys(entry).some((key:any) => {
      return String(entry[key])
        .toLowerCase()
        .includes(searchText.toLowerCase());
    });
  });
  return (
    <div>
      <div className="page-wrapper">
        <div className="content container-fluid">
          {/* Page Header */}
          <div className="page-header">
            <div className="row">
              <div className="col">
                <h3 className="page-title">Data Tables</h3>
                <ul className="breadcrumb">
                  <li className="breadcrumb-item">
                    <Link href={route.dealsDashboard}>Dashboard</Link>
                  </li>
                  <li className="breadcrumb-item active">Data Tables</li>
                </ul>
              </div>
            </div>
          </div>
          {/* /Page Header */}
          <div className="row">
            <div className="col-sm-12">
              <div className="card">
                <div className="card-header">
                  <h4 className="card-title">Default Datatable</h4>
                  <p className="card-text">
                    This is the most basic example of the datatables with zero
                    configuration. Use the <code>.datatable</code> class to
                    initialize datatables.
                  </p>
                </div>
                <div className="card-body">
                  <div className="table-responsive">
                    <div
                      id="DataTables_Table_0_filter"
                      className="dataTables_filter custom-data-table-react"
                    >
                      <label>
                        {" "}
                        <input
                          type="search"
                          className="form-control form-control-sm"
                          placeholder="Search"
                          aria-controls="DataTables_Table_0"
                          value={searchText}
                          onChange={handleSearch}
                        />
                      </label>
                    </div>
                    <Table columns={columns} dataSource={filteredData}  />
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

export default DataTablesComponent;

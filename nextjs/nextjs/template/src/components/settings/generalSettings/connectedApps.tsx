"use client";
/* eslint-disable @next/next/no-img-element */
import React from "react";
import { all_routes } from "@/data/all_routes";
import Link from "next/link";
import CollapseHeader from "../../../core/common/collapse-header";

const ConnectedAppsComponent = () => {
  const route = all_routes;
  return (
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
                    <h4 className="page-title">Settings</h4>
                  </div>
                  <div className="col-4 text-end">
                    <div className="head-icons">
                      <CollapseHeader />
                    </div>
                  </div>
                </div>
              </div>
              {/* /Page Header */}
              {/* Settings Menu */}
              <div className="card">
                <div className="card-body pb-0 pt-2">
                  <ul className="nav nav-tabs nav-tabs-bottom">
                    <li className="nav-item me-3">
                      <Link href={route.profile} className="nav-link px-0 active">
                        <i className="ti ti-settings-cog" /> General Settings
                      </Link>
                    </li>
                    <li className="nav-item me-3">
                      <Link
                        href={route.companySettings}
                        className="nav-link px-0"
                      >
                        <i className="ti ti-world-cog" /> Website Settings
                      </Link>
                    </li>
                    <li className="nav-item me-3">
                      <Link
                        href={route.invoiceSettings}
                        className="nav-link px-0"
                      >
                        <i className="ti ti-apps" /> App Settings
                      </Link>
                    </li>
                    <li className="nav-item me-3">
                      <Link href={route.emailSettings} className="nav-link px-0">
                        <i className="ti ti-device-laptop" /> System Settings
                      </Link>
                    </li>
                    <li className="nav-item me-3">
                      <Link
                        href={route.paymentGateways}
                        className="nav-link px-0"
                      >
                        <i className="ti ti-moneybag" /> Financial Settings
                      </Link>
                    </li>
                    <li className="nav-item ">
                      <Link href={route.storage} className="nav-link px-0">
                        <i className="ti ti-flag-cog" /> Other Settings
                      </Link>
                    </li>
                  </ul>
                </div>
              </div>
              {/* /Settings Menu */}
              <div className="row">
  <div className="col-xl-3 col-lg-12 theiaStickySidebar">
    {/* Settings Sidebar */}
    <div className="card">
      <div className="card-body">
        <div className="settings-sidebar">
          <h4 className="fw-semibold mb-3">General Settings</h4>
          <div className="list-group list-group-flush settings-sidebar">
            <Link href={route.profile} className="fw-medium">
              Profile
            </Link>
            <Link href={route.security} className="fw-medium">
              Security
            </Link>
            <Link href={route.notification} className="fw-medium">
              Notifications
            </Link>
            <Link href={route.connectedApps} className="fw-medium active">
              Connected Apps
            </Link>
          </div>
        </div>
      </div>
    </div>
    {/* /Settings Sidebar */}
  </div>
  <div className="col-xl-9 col-lg-12">
    {/* Settings Info */}
    <div className="card">
      <div className="card-body pb-0">
        <h4 className="fw-semibold mb-3">Connected Apps</h4>
        <div className="row">
          {/* App */}
          <div className="col-md-4 col-sm-6">
            <div className="card border mb-3">
              <div className="card-body">
                <div className="d-flex align-items-center justify-content-between mb-3">
                  <img src="assets/img/icons/integration-01.svg" alt="Icon" />
                  <div className="connect-btn">
                    <Link
                      href="#"
                      className="badge badge-soft-success"
                    >
                      Connected
                    </Link>
                  </div>
                </div>
                <div className="d-flex align-items-center justify-content-between">
                  <p className="mb-0">Google Calendar</p>
                  <div className="form-check form-switch">
                    <input
                      className="form-check-input"
                      type="checkbox"
                      role="switch"
                      defaultChecked
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          {/* /App */}
          {/* App */}
          <div className="col-md-4 col-sm-6">
            <div className="card border mb-3">
              <div className="card-body">
                <div className="d-flex align-items-center justify-content-between mb-3">
                  <img src="assets/img/icons/integration-02.svg" alt="Icon" />
                  <div className="connect-btn">
                    <Link
                      href="#"
                      className="badge border bg-white text-default"
                    >
                      Connect
                    </Link>
                  </div>
                </div>
                <div className="d-flex align-items-center justify-content-between">
                  <p className="mb-0">Figma</p>
                  <div className="form-check form-switch">
                    <input
                      className="form-check-input"
                      type="checkbox"
                      role="switch"
                      defaultChecked
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          {/* /App */}
          {/* App */}
          <div className="col-md-4 col-sm-6">
            <div className="card border mb-3">
              <div className="card-body">
                <div className="d-flex align-items-center justify-content-between mb-3">
                  <img src="assets/img/icons/integration-03.svg" alt="Icon" />
                  <div className="connect-btn">
                    <Link
                      href="#"
                      className="badge badge-soft-success"
                    >
                      Connected
                    </Link>
                  </div>
                </div>
                <div className="d-flex align-items-center justify-content-between">
                  <p className="mb-0">Dropbox</p>
                  <div className="form-check form-switch">
                    <input
                      className="form-check-input"
                      type="checkbox"
                      role="switch"
                      defaultChecked
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          {/* /App */}
          {/* App */}
          <div className="col-md-4 col-sm-6">
            <div className="card border mb-3">
              <div className="card-body">
                <div className="d-flex align-items-center justify-content-between mb-3">
                  <img src="assets/img/icons/integration-04.svg" alt="Icon" />
                  <div className="connect-btn">
                    <Link
                      href="#"
                      className="badge border bg-white text-default"
                    >
                      Connect
                    </Link>
                  </div>
                </div>
                <div className="d-flex align-items-center justify-content-between">
                  <p className="mb-0">Slack</p>
                  <div className="form-check form-switch">
                    <input
                      className="form-check-input"
                      type="checkbox"
                      role="switch"
                      defaultChecked
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          {/* /App */}
          {/* App */}
          <div className="col-md-4 col-sm-6">
            <div className="card border mb-3">
              <div className="card-body">
                <div className="d-flex align-items-center justify-content-between mb-3">
                  <img src="assets/img/icons/integration-05.svg" alt="Icon" />
                  <div className="connect-btn">
                    <Link
                      href="#"
                      className="badge badge-soft-success"
                    >
                      Connected
                    </Link>
                  </div>
                </div>
                <div className="d-flex align-items-center justify-content-between">
                  <p className="mb-0">Gmail</p>
                  <div className="form-check form-switch">
                    <input
                      className="form-check-input"
                      type="checkbox"
                      role="switch"
                      defaultChecked
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          {/* /App */}
          {/* App */}
          <div className="col-md-4 col-sm-6">
            <div className="card border mb-3">
              <div className="card-body">
                <div className="d-flex align-items-center justify-content-between mb-3">
                  <img src="assets/img/icons/integration-06.svg" alt="Icon" />
                  <div className="connect-btn">
                    <Link
                      href="#"
                      className="badge border bg-white text-default"
                    >
                      Connect
                    </Link>
                  </div>
                </div>
                <div className="d-flex align-items-center justify-content-between">
                  <p className="mb-0">Github</p>
                  <div className="form-check form-switch">
                    <input
                      className="form-check-input"
                      type="checkbox"
                      role="switch"
                      defaultChecked
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          {/* /App */}
        </div>
      </div>
    </div>
    {/* /Settings Info */}
  </div>
</div>

            </div>
          </div>
        </div>
      </div>
      {/* /Page Wrapper */}
    </>
  );
};

export default ConnectedAppsComponent;

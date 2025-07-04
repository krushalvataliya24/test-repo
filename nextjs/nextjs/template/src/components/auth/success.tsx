"use client";
/* eslint-disable @next/next/no-img-element */
import React from "react";
import { all_routes } from "@/data/all_routes";
import Link from "next/link";

const Success = () => {
  const route = all_routes;
  return (
    <div className="account-content">
    <div className="d-flex flex-wrap w-100 vh-100 overflow-hidden account-bg-04">
      <div className="d-flex align-items-center justify-content-center flex-wrap vh-100 overflow-auto p-4 w-50 bg-backdrop">
        <form>
          <div className="mx-auto mw-450">
            <div className="text-center mb-4">
              <img src="assets/img/logo.svg" className="img-fluid" alt="Logo" />
            </div>
            <div className="text-center mb-3">
              <span className="avatar avatar-xl rounded-circle bg-success mb-4">
                <i className="ti ti-check fs-26" />
              </span>
              <h4 className="mb-2 fs-20">Success</h4>
              <p className="mb-0">Your Passwrod Reset Successfully!</p>
            </div>
            <div className="mb-3">
              <Link href={route.login} className="btn btn-primary w-100">
                Back to Login
              </Link>

            </div>
            <div className="text-center">
              <p className="fw-medium text-gray">Copyright © 2025 - CRMS</p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  )
}

export default Success
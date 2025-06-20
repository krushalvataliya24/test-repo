"use client";
/* eslint-disable @next/next/no-img-element */

import Link from "next/link";
import React, { useEffect } from "react";
import { setHeaderCollapse } from "../../data/redux/commonSlice";
import { useDispatch, useSelector } from "react-redux";
import { OverlayTrigger, Tooltip } from "react-bootstrap";
import Cookies from "js-cookie";

const CollapseHeader = () => {
  const dispatch = useDispatch();

  useEffect(() => {
    const collapse = Cookies.get("headerCollapse") === "true";

    if (collapse) {
      document.body.classList.add("header-collapse");
    } else {
      document.body.classList.remove("header-collapse");
    }

    dispatch(setHeaderCollapse(collapse));
  }, []);

  const toggleHeaderCollapse = () => {
    const isCollapsed = document.body.classList.toggle("header-collapse");
    Cookies.set("headerCollapse", isCollapsed ? "true" : "false");
    dispatch(setHeaderCollapse(isCollapsed));
  };

  return (
    <>
      <OverlayTrigger
        placement="bottom"
        overlay={<Tooltip id="refresh-tooltip">Refresh</Tooltip>}
      >
        <Link href="#">
          <i className="ti ti-refresh-dot" />
        </Link>
      </OverlayTrigger>
      <OverlayTrigger
        placement="bottom"
        overlay={<Tooltip id="collapse-tooltip">Collapse</Tooltip>}
      >
        <Link href="#" id="collapse-header" onClick={toggleHeaderCollapse}>
          <i className="ti ti-chevrons-up" />
        </Link>
      </OverlayTrigger>
    </>
  );
};

export default CollapseHeader;

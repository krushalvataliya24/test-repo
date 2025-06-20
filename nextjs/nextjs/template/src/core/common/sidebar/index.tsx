"use client";
/* eslint-disable @next/next/no-img-element */

import React, { useEffect, useState } from "react";
import Scrollbars from "react-custom-scrollbars-2";
import { SidebarData } from "../../../data/json/sidebarData";
import { useDispatch, useSelector } from "react-redux";
import { setExpandMenu } from "../../../data/redux/commonSlice";
import Link from "next/link";
import { all_routes } from "@/data/all_routes";
import { usePathname } from "next/navigation";
import Cookies from "js-cookie";



const Sidebar = () => {
  const pathname = usePathname();
  const dispatch = useDispatch();

  const [subOpen, setSubopen] = useState<string | null>("");
  const [subsidebar, setSubsidebar] = useState<string>("");

  const toggleSidebar = (title: string) => {
    Cookies.set("menuOpened", title);
    if (title === subOpen) {
      setSubopen("");
    } else {
      setSubopen(title);
    }
  };

  const toggleSubsidebar = (subitem: string) => {
    if (subitem === subsidebar) {
      setSubsidebar("");
    } else {
      setSubsidebar(subitem);
    }
  };

  const toggle = () => {
    dispatch(setExpandMenu(true));
  };

  const toggle2 = () => {
    dispatch(setExpandMenu(false));
  };

  useEffect(() => {
    const savedMenu = Cookies.get("menuOpened");
    setSubopen(savedMenu || "");

    const submenus = document.querySelectorAll(".submenu");
    submenus.forEach((submenu) => {
      submenu.classList.remove("active");
      const listItems = submenu.querySelectorAll("li");
      listItems.forEach((item) => {
        if (item.classList.contains("active")) {
          submenu.classList.add("active");
        }
      });
    });
  }, [pathname]);

  
  const [expandMenus, setExpandMenus] = useState(false); 
  const expandMenu = () => {
    setExpandMenus(false);
    document.body.classList.remove("expand-menu");
  };

  const expandMenuOpen = () => {
    setExpandMenus(true);
    document.body.classList.add("expand-menu");
  };

  return (
    <>
      <div
        className="sidebar"
        id="sidebar"
        onMouseLeave={expandMenu}
        onMouseOver={expandMenuOpen}
      >
        <Scrollbars className="react-scrollbar">
          <div className="sidebar-inner slimscroll">
            <>
              <div className="modern-profile p-3 pb-0">
                <div className="sidebar-nav mb-3">
                  <ul
                    className="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent"
                    role="tablist"
                  >
                    <li className="nav-item">
                      <Link className="nav-link active border-0" href="#">
                        Menu
                      </Link>
                    </li>
                    <li className="nav-item">
                      <Link
                        className="nav-link border-0"
                        href={all_routes.chat}
                      >
                        Chats
                      </Link>
                    </li>
                    <li className="nav-item">
                      <Link
                        className="nav-link border-0"
                        href={all_routes.email}
                      >
                        Inbox
                      </Link>
                    </li>
                  </ul>
                </div>
              </div>
              <div className="sidebar-header p-3 pb-0 pt-2">
                <div className="d-flex align-items-center justify-content-between menu-item mb-3">
                  <div className="me-3">
                    <Link
                      href={all_routes.calendar}
                      className="btn btn-icon border btn-menubar"
                    >
                      <i className="ti ti-layout-grid-remove" />
                    </Link>
                  </div>
                  <div className="me-3">
                    <Link
                      href={all_routes.chat}
                      className="btn btn-icon border btn-menubar position-relative"
                    >
                      <i className="ti ti-brand-hipchat" />
                    </Link>
                  </div>
                  <div className="me-3 notification-item">
                    <Link
                      href={all_routes.activities}
                      className="btn btn-icon border btn-menubar position-relative me-1"
                    >
                      <i className="ti ti-bell" />
                      <span className="notification-status-dot" />
                    </Link>
                  </div>
                  <div className="me-0">
                    <Link
                      href={all_routes.email}
                      className="btn btn-icon border btn-menubar"
                    >
                      <i className="ti ti-message" />
                    </Link>
                  </div>
                </div>
              </div>
            </>
            <div id="sidebar-menu" className="sidebar-menu">
              <ul>
                <li className="clinicdropdown theme">
                  <Link href="/profile">
                    <img
                      src="assets/img/profiles/avatar-14.jpg"
                      className="img-fluid"
                      alt="Profile"
                    />
                    <div className="user-names">
                      <h5>Adrian Davies</h5>
                      <h6>Tech Lead</h6>
                    </div>
                  </Link>
                </li>
              </ul>

              <ul>
                {SidebarData?.map((mainLabel, index) => (
                  <li className="clinicdropdown" key={index}>
                    <h6 className="submenu-hdr">{mainLabel?.label}</h6>
                    <ul>
                      {mainLabel?.submenuItems?.map((title: any, i) => {
                        let link_array: any = [];
                        if ("submenuItems" in title) {
                          title.submenuItems?.forEach((link: any) => {
                            link_array.push(link?.link);
                            if (link?.submenu && "submenuItems" in link) {
                              link.submenuItems?.forEach((item: any) => {
                                link_array.push(item?.link);
                              });
                            }
                          });
                        }
                        title.links = link_array;

                        return (
                          <li className="submenu" key={title.label}>
                            <Link
                              href={title?.submenu ? "#" : title?.link || "#"}
                              onClick={() => toggleSidebar(title?.label)}
                              className={`  ${
                                subOpen === title?.label ? "subdrop" : ""
                              } 
                             ${
                               title?.links?.includes(pathname) ? "active" : ""
                             }  ${
                                [
                                  ...(title?.submenuItems?.map(
                                    (link: any) => link?.link
                                  ) || []),
                                  title?.link,
                                  title?.subLink1,
                                  title?.subLink2,
                                  title?.subLink3,
                                  title?.subLink4,
                                ].includes(pathname)
                                  ? "active"
                                  : ""
                              }
  `}
                            >
                              <i className={title?.icon}></i>
                              <span>{title?.label}</span>
                              {title?.submenu && (
                                <span className="menu-arrow" />
                              )}
                            </Link>

                            <ul
                              style={{
                                display:
                                  subOpen === title?.label ? "block" : "none",
                              }}
                            >
                              {title?.submenuItems?.map((item: any) => (
                                <li
                                  className="submenu submenu-two"
                                  key={item.label}
                                >
                                  <Link
                                    href={item?.link || "#"}
                                    className={`${
                                      item?.submenuItems
                                        ?.map((link: any) => link?.link)
                                        .includes(pathname) ||
                                      item?.link === pathname
                                        ? "active"
                                        : ""
                                    }
                                    ${
                                      subsidebar === item?.label ? "subdrop" : ""
                                      } `}
                                    onClick={() => {
                                      toggleSubsidebar(item?.label);
                                    }}
                                  >
                                    {item?.label}
                                    <span
                                      className={
                                        item?.submenu ? "menu-arrow" : ""
                                      }
                                    />
                                  </Link>
                                  <ul
                                    style={{
                                      display:
                                        subsidebar === item?.label
                                          ? "block"
                                          : "none",
                                    }}
                                  >
                                    {item?.submenuItems?.map((items: any) => (
                                      <li key={items.label}>
                                        <Link
                                          href={items?.link || "#"}
                                          className={`${
                                            subsidebar === items?.label
                                              ? "submenu-two subdrop"
                                              : "submenu-two"
                                          } ${
                                            items?.submenuItems
                                              ?.map((link: any) => link.link)
                                              .includes(pathname) ||
                                            items?.link === pathname
                                              ? "active"
                                              : ""
                                          }`}
                                        >
                                          {items?.label}
                                        </Link>
                                      </li>
                                    ))}
                                  </ul>
                                </li>
                              ))}
                            </ul>
                          </li>
                        );
                      })}
                    </ul>
                  </li>
                ))}
              </ul>
            </div>
          </div>
        </Scrollbars>
      </div>
    </>
  );
};

export default Sidebar;

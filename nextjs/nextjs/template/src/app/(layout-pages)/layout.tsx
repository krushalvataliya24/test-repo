"use client";
import Header from "@/core/common/header";
import Sidebar from "@/core/common/sidebar";
import ThemeSettings from "@/core/common/theme-settings/themeSettings";
import store from "@/data/redux/store";
import { usePathname } from "next/navigation";
import { useEffect } from "react";
import { Provider } from "react-redux";

export default function LayoutPages({
  children,
}: {
  children: React.ReactNode;
}) {
  const pathname = usePathname(); // Get the current pathname
  useEffect(() => {
    const htmlElement = document.documentElement;

    // Log for debugging
    console.log("Current Pathname:", pathname);

    // Reset body classes before applying new ones
    document.body.classList.remove(
      "menu-horizontal",
      "mini-sidebar"
    );

    switch (pathname) {
      case "/layout-mini":
        htmlElement.setAttribute("data-layout", "mini");
        document.body.classList.add("mini-sidebar");
        break;

      case "/layout-horizontal-single":
        htmlElement.setAttribute("data-layout", "horizontal-single");
        document.body.classList.add("menu-horizontal");
        break;

      case "/layout-without-header":
        htmlElement.setAttribute("data-layout", "without-header");
        break;

      case "/layout-detached":
        htmlElement.setAttribute("data-layout", "detached");
        break;

      case "/layout-hovered":
        htmlElement.setAttribute("data-layout", "layout-hovered");
        document.body.classList.add("mini-sidebar");
        break;
      case "/layout-dark":
        htmlElement.setAttribute("data-theme", "dark");

      default:
        htmlElement.setAttribute("data-layout", "default");
        break;
    }
  }, [pathname]);
  return (
    < >
      <div className="main-wrapper">
        <Provider store={store}>
          <Header />
          <Sidebar />
          {children}
        </Provider>
      </div>
    </>
  );
}

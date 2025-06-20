"use client";
import Header from "@/core/common/header";
import Sidebar from "@/core/common/sidebar";
import store from "@/data/redux/store";
import { usePathname } from "next/navigation";
import { useEffect } from "react";
import { Provider } from "react-redux";

export default function LayoutRtlPages({
  children,
}: {
  children: React.ReactNode;
}) {
  const pathname = usePathname(); // Get the current pathname
    useEffect(() => {
      const htmlElement = document.documentElement;
  
      // Reset body classes before applying new ones
      document.body.classList.remove(
        "layout-mode-rtl",
      );
  
      switch (pathname) {
        case "/layout-rtl":
          document.body.classList.add("layout-mode-rtl");
          break;
  
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

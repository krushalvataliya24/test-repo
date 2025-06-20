"use client";
import Header from "@/core/common/header";
import Sidebar from "@/core/common/sidebar";
import ThemeSettings from "@/core/common/theme-settings/themeSettings";
import store from "@/data/redux/store";
import { Provider } from "react-redux";

export default function PageLayout({
  children,
}: {
  children: React.ReactNode;
}) {
  return (
    < >
      <div className="main-wrapper">
        <Provider store={store}>
          <Header />
          <Sidebar />
          <ThemeSettings />
          {children}
        </Provider>
      </div>
    </>
  );
}

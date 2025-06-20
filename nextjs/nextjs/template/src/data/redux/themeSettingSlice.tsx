/* eslint-disable @next/next/no-img-element */

import { createSlice } from "@reduxjs/toolkit";

// Helper function to get persisted data from sessionStorage
const getPersistedValue = (key: string, defaultValue: any) => {
  if (typeof window !== "undefined") {
    const storedValue = sessionStorage.getItem(key);
    return storedValue !== null ? JSON.parse(storedValue) : defaultValue;
  }
  return defaultValue;
};

// Helper function to persist data to sessionStorage
const persistValue = (key: string, value: any) => {
  if (typeof window !== "undefined") {
    sessionStorage.setItem(key, JSON.stringify(value));
  }
};

const inMemoryStorage: Record<string, any> = {
  dataLayout: getPersistedValue("dataLayout", "default"),
  dataWidth: getPersistedValue("dataWidth", "fluid"),
  dataCard: getPersistedValue("dataCard", "bordered"),
  dataSidebar: getPersistedValue("dataSidebar", "light"),
  dataSidebarAll: getPersistedValue("dataSidebarAll", ""),
  dataTopbarAll: getPersistedValue("dataTopbarAll", ""),
  dataTopBarColorAll: getPersistedValue("dataTopBarColorAll", ""),
  dataColorAll: getPersistedValue("dataColorAll", ""),
  dataTheme: getPersistedValue("dataTheme", "light"),
  dataTopBar: getPersistedValue("dataTopBar", "white"),
  dataTopBarColor: getPersistedValue("dataTopBarColor", "white"),
  dataSidebarBg: getPersistedValue("dataSidebarBg", ""),
  dataTopbarBg: getPersistedValue("dataTopbarBg", ""),
  dataColor: getPersistedValue("dataColor", "primary"),
  dataLoader: getPersistedValue("dataLoader", "enable"),
  rtl: getPersistedValue("rtl", false),
};

const initialState = {
  dataLayout: inMemoryStorage.dataLayout,
  dataWidth: inMemoryStorage.dataWidth,
  dataCard: inMemoryStorage.dataCard,
  dataSidebar: inMemoryStorage.dataSidebar,
  dataSidebarAll: inMemoryStorage.dataSidebarAll,
  dataTopbarAll: inMemoryStorage.dataTopbarAll,
  dataTopBarColorAll: inMemoryStorage.dataTopBarColorAll,
  dataColorAll: inMemoryStorage.dataColorAll,
  dataTheme: inMemoryStorage.dataTheme,
  dataTopBar: inMemoryStorage.dataTopBar,
  dataTopBarColor: inMemoryStorage.dataTopBarColor,
  dataSidebarBg: inMemoryStorage.dataSidebarBg,
  dataTopbarBg: inMemoryStorage.dataTopbarBg,
  dataColor: inMemoryStorage.dataColor,
  dataLoader: inMemoryStorage.dataLoader,
  isRtl: inMemoryStorage.rtl,
  headerCollapse: false,
};

const themeSettingSlice = createSlice({
  name: "themeSetting",
  initialState,
  reducers: {
    setHeaderCollapse: (state, { payload }) => {
      state.headerCollapse = payload;
    },
    setDataLayout: (state, action) => {
      state.dataLayout = action.payload;
      persistValue("dataLayout", action.payload);
      document.documentElement.setAttribute("data-layout", action.payload);
    },
    setDataWidth: (state, action) => {
      state.dataWidth = action.payload;
      persistValue("dataWidth", action.payload);
      document.documentElement.setAttribute("data-width", action.payload);
    },
    setDataCard: (state, action) => {
      state.dataCard = action.payload;
      persistValue("dataCard", action.payload);
      document.documentElement.setAttribute("data-card", action.payload);
    },
    setDataSidebar: (state, action) => {
      state.dataSidebar = action.payload;
      persistValue("dataSidebar", action.payload);
      document.documentElement.setAttribute("data-sidebar", action.payload);
    },
    setDataSidebarAll: (state, action) => {
      state.dataSidebarAll = action.payload;
      persistValue("dataSidebarAll", action.payload);
    },
    setDataColorAll: (state, action) => {
      state.dataColorAll = action.payload;
      persistValue("dataColorAll", action.payload);
    },
    setDataTopBarColorAll: (state, action) => {
      state.dataTopBarColorAll = action.payload;
      persistValue("dataTopBarColorAll", action.payload);
    },
    setDataTopbarAll: (state, action) => {
      state.dataTopbarAll = action.payload;
      persistValue("dataTopbarAll", action.payload);
    },
    setDataTheme: (state, action) => {
      state.dataTheme = action.payload;
      persistValue("dataTheme", action.payload);
      document.documentElement.setAttribute("data-theme", action.payload);
    },
    setTopBarColor: (state, action) => {
      state.dataTopBar = action.payload;
      persistValue("dataTopBar", action.payload);
      document.documentElement.setAttribute("data-topbar", action.payload);
    },
    setTopBarColor2: (state, action) => {
      state.dataTopBarColor = action.payload;
      persistValue("dataTopBarColor", action.payload);
      document.documentElement.setAttribute("data-topbarcolor", action.payload);
    },
    setDataSidebarBg: (state, action) => {
      state.dataSidebarBg = action.payload;
      persistValue("dataSidebarBg", action.payload);
      document.body.setAttribute("data-sidebarbg", action.payload);
    },
    setDataTopbarBg: (state, action) => {
      state.dataTopbarBg = action.payload;
      persistValue("dataTopbarBg", action.payload);
      document.body.setAttribute("data-topbarbg", action.payload);
    },
    setDataColor: (state, action) => {
      state.dataColor = action.payload;
      persistValue("dataColor", action.payload);
      document.documentElement.setAttribute("data-color", action.payload);
    },
    setLoader: (state, action) => {
      state.dataLoader = action.payload;
      persistValue("dataLoader", action.payload);
      document.documentElement.setAttribute("data-loader", action.payload);
    },
    setRtl: (state, action) => {
      state.isRtl = action.payload;
      persistValue("rtl", action.payload);
      document.body.setAttribute("class", action.payload);
    },
    resetAllMode: (state: any) => {
      const defaultValues = {
        dataLayout: "default",
        dataWidth: "fluid",
        dataCard: "bordered",
        dataSidebar: "light",
        dataTheme: "light",
        dataTopBar: "white",
        dataTopBarColor: "white",
        dataSidebarBg: "",
        dataTopbarBg: "",
        dataColor: "primary",
        dataLoader: "enable",
        rtl: "",
      };

      Object.keys(defaultValues).forEach((key) => {
        const typedKey = key as keyof typeof defaultValues;
        state[typedKey] = defaultValues[typedKey];
        persistValue(typedKey, defaultValues[typedKey]);
      });

      document.body.setAttribute("class", "");
    },
  },
});

export const {
  setDataLayout,
  setDataWidth,
  setDataCard,
  resetAllMode,
  setTopBarColor,
  setDataTheme,
  setDataSidebar,
  setDataSidebarAll,
  setDataColorAll,
  setDataTopBarColorAll,
  setDataTopbarAll,
  setDataSidebarBg,
  setDataTopbarBg,
  setHeaderCollapse,
  setDataColor,
  setLoader,
  setTopBarColor2,
  setRtl,
} = themeSettingSlice.actions;

export default themeSettingSlice.reducer;

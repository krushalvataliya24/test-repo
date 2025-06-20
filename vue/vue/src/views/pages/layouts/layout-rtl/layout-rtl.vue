<template>
  <index-loader></index-loader>
  <header-layout></header-layout>
  <layouts-sidebar></layouts-sidebar>

  <!-- Page Wrapper -->
  <div class="page-wrapper">
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <dashboard-header :title="title" />

          <div class="row">
            <div class="col-md-6 d-flex">
              <div class="card flex-fill">
                <div class="card-header border-0 pb-0">
                  <div
                    class="d-flex align-items-center justify-content-between flex-wrap row-gap-3"
                  >
                    <h4>
                      <i class="ti ti-grip-vertical ms-1"></i>Recently Created Deals
                    </h4>
                    <div class="dropdown">
                      <a
                        class="dropdown-toggle"
                        data-bs-toggle="dropdown"
                        href="javascript:void(0);"
                      >
                        <i class="ti ti-calendar-check ms-2"></i>Last 30 days
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a href="javascript:void(0);" class="dropdown-item">
                          Last 15 days
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                          Last 30 days
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive custom-table">
                    <rtl-deals-dashboard-table></rtl-deals-dashboard-table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex">
              <div class="card flex-fill">
                <div class="card-header border-0 pb-0">
                  <div
                    class="d-flex align-items-center justify-content-between flex-wrap row-gap-3"
                  >
                    <h4><i class="ti ti-grip-vertical ms-1"></i>Deals By Stage</h4>
                    <div class="d-flex align-items-center flex-wrap row-gap-2">
                      <div class="dropdown ms-2">
                        <a
                          class="dropdown-toggle"
                          data-bs-toggle="dropdown"
                          href="javascript:void(0);"
                        >
                          Sales Pipeline
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item">
                            Marketing Pipeline
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Sales Pipeline
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item"> Email </a>
                          <a href="javascript:void(0);" class="dropdown-item"> Chats </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Operational
                          </a>
                        </div>
                      </div>
                      <div class="dropdown">
                        <a
                          class="dropdown-toggle"
                          data-bs-toggle="dropdown"
                          href="javascript:void(0);"
                        >
                          Last 30 Days
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item">
                            Last 30 Days
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Last 15 Days
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Last 7 Days
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div id="deals-chart">
                    <apexchart
                      type="bar"
                      height="275"
                      :options="dealsChart.chart"
                      :series="dealsChart.series"
                    ></apexchart>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 d-flex">
              <div class="card flex-fill">
                <div class="card-header border-0 pb-0">
                  <div
                    class="d-flex align-items-center justify-content-between flex-wrap row-gap-3"
                  >
                    <h4><i class="ti ti-grip-vertical ms-1"></i>Leads By Stage</h4>
                    <div class="d-flex align-items-center flex-wrap row-gap-2">
                      <div class="dropdown ms-2">
                        <a
                          class="dropdown-toggle"
                          data-bs-toggle="dropdown"
                          href="javascript:void(0);"
                        >
                          Marketing Pipeline
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item">
                            Marketing Pipeline
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Sales Pipeline
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item"> Email </a>
                          <a href="javascript:void(0);" class="dropdown-item"> Chats </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Operational
                          </a>
                        </div>
                      </div>
                      <div class="dropdown">
                        <a
                          class="dropdown-toggle"
                          data-bs-toggle="dropdown"
                          href="javascript:void(0);"
                        >
                          Last 3 months
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item">
                            Last 3 months
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Last 6 months
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Last 12 months
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div id="last-chart">
                    <apexchart
                      type="bar"
                      height="150"
                      :options="lastChart.chart"
                      :series="lastChart.series"
                    ></apexchart>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex">
              <div class="card flex-fill">
                <div class="card-header border-0 pb-0">
                  <div
                    class="d-flex align-items-center justify-content-between flex-wrap row-gap-3"
                  >
                    <h4><i class="ti ti-grip-vertical ms-1"></i>Won Deals Stage</h4>
                    <div class="d-flex align-items-center flex-wrap row-gap-2">
                      <div class="dropdown ms-2">
                        <a
                          class="dropdown-toggle"
                          data-bs-toggle="dropdown"
                          href="javascript:void(0);"
                        >
                          Marketing Pipeline
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item">
                            Marketing Pipeline
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Sales Pipeline
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item"> Email </a>
                          <a href="javascript:void(0);" class="dropdown-item"> Chats </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Operational
                          </a>
                        </div>
                      </div>
                      <div class="dropdown">
                        <a
                          class="dropdown-toggle"
                          data-bs-toggle="dropdown"
                          href="javascript:void(0);"
                        >
                          Last 3 months
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item">
                            Last 3 months
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Last 6 months
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Last 12 months
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div id="won-chart">
                    <apexchart
                      type="bar"
                      height="150"
                      :options="wonChart.chart"
                      :series="wonChart.series"
                    ></apexchart>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12 d-flex">
              <div class="card w-100">
                <div class="card-header border-0 pb-0">
                  <div
                    class="d-flex align-items-center justify-content-between flex-wrap row-gap-3"
                  >
                    <h4><i class="ti ti-grip-vertical ms-1"></i>Deals by Year</h4>
                    <div class="d-flex align-items-center flex-wrap row-gap-2">
                      <div class="dropdown ms-2">
                        <a
                          class="dropdown-toggle"
                          data-bs-toggle="dropdown"
                          href="javascript:void(0);"
                        >
                          Sales Pipeline
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item">
                            Marketing Pipeline
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Sales Pipeline
                          </a>
                        </div>
                      </div>
                      <div class="dropdown">
                        <a
                          class="dropdown-toggle"
                          data-bs-toggle="dropdown"
                          href="javascript:void(0);"
                        >
                          Last 3 months
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item">
                            Last 3 months
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Last 6 months
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Last 12 months
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div id="deals-year">
                    <apexchart
                      type="area"
                      height="273"
                      :options="dealsYear.chart"
                      :series="dealsYear.series"
                    ></apexchart>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Page Wrapper -->
</template>

<script>
import { dealsChart, lastChart, wonChart, dealsYear } from "./data";
import { ref, computed, watchEffect, onBeforeUnmount } from "vue";
import { useRoute, onBeforeRouteUpdate } from "vue-router";

export default {
  data() {
    return {
      title: "Deals Dashboard",
      dealsChart: dealsChart,
      lastChart: lastChart,
      wonChart: wonChart,
      dealsYear: dealsYear,
    };
  },
  setup() {
    const value5 = ref();
    const route = useRoute(); // Get the current route

    // Compute the layout type (data-layout attribute)
    const layoutType = computed(() => {
      return route.path === "/layouts/layout-rtl" ? "layout-mode-rtl" : "vertical";
    });

    // Function to update body class based on route path
    const updateBodyClass = () => {
      if (route.path === "/layouts/layout-rtl") {
        document.body.classList.add("layout-mode-rtl");
      } else {
        document.body.classList.remove("layout-mode-rtl");
      }
    };

    // Watch for route changes and update the class
    watchEffect(() => {
      updateBodyClass();
    });

    // Cleanup the class before component is destroyed
    onBeforeUnmount(() => {
      document.body.classList.remove("layout-mode-rtl");
    });

    // Cleanup when route changes before the component updates
    onBeforeRouteUpdate(() => {
      document.body.classList.remove("layout-mode-rtl");
    });

    return {
      title: "Admin Dashboard",
      text: "Dashboard",
      text1: "Admin Dashboard",
      value5,
      layoutType,
    };
  },
};
</script>

<template>
  <header-layout></header-layout>
  <theme-header></theme-header>
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
                      <i class="ti ti-grip-vertical me-1"></i>Recently Created Deals
                    </h4>
                    <div class="dropdown">
                      <a
                        class="dropdown-toggle"
                        data-bs-toggle="dropdown"
                        href="javascript:void(0);"
                      >
                        <i class="ti ti-calendar-check me-2"></i>Last 30 days
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
                    <deals-dashboard-table></deals-dashboard-table>
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
                    <h4><i class="ti ti-grip-vertical me-1"></i>Deals By Stage</h4>
                    <div class="d-flex align-items-center flex-wrap row-gap-2">
                      <div class="dropdown me-2">
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
                    <h4><i class="ti ti-grip-vertical me-1"></i>Leads By Stage</h4>
                    <div class="d-flex align-items-center flex-wrap row-gap-2">
                      <div class="dropdown me-2">
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
                    <h4><i class="ti ti-grip-vertical me-1"></i>Won Deals Stage</h4>
                    <div class="d-flex align-items-center flex-wrap row-gap-2">
                      <div class="dropdown me-2">
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
                    <h4><i class="ti ti-grip-vertical me-1"></i>Deals by Year</h4>
                    <div class="d-flex align-items-center flex-wrap row-gap-2">
                      <div class="dropdown me-2">
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
import {
  dealsChart,
  lastChart,
  wonChart,
  dealsYear,
} from "../dashboard/deals-dashboard/data";
import { ref, computed, onMounted, onBeforeUnmount } from "vue";
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
      if (route.path === "/layouts/layout-detached") {
        return "detached"; // If path matches, set layout type to detached
      } else if (route.path === "/layouts/layout-detached") {
        return "detached"; // If path matches, set layout type to horizontal
      } else {
        return "detached"; // Default layout
      }
    });

    // Function to update the data-layout attribute on <html>
    const updateLayoutAttribute = () => {
      // Set the data-layout attribute on the <html> tag
      document.documentElement.setAttribute("data-layout", layoutType.value);
    };

    // Watch for changes in route and update the data-layout attribute
    onMounted(() => {
      updateLayoutAttribute(); // Set the layout type on initial load
    });

    onBeforeRouteUpdate(() => {
      updateLayoutAttribute(); // Update the layout when route changes
    });

    // Cleanup before the component is destroyed
    onBeforeUnmount(() => {
      document.documentElement.removeAttribute("data-layout"); // Clean up when the component is destroyed
    });
  },
};
</script>

<template>
  <index-loader></index-loader>
  <layouts-header></layouts-header>
  <layouts-sidebar></layouts-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <dashboard-header :title="title" />

          <div class="row">
            <div class="col-md-7">
              <div class="card">
                <div class="card-header border-0 pb-0">
                  <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h4><i class="ti ti-grip-vertical me-1"></i>Recent Projects</h4>
                    <div class="d-flex align-items-center flex-wrap row-gap-3">
                      <div class="dropdown me-2">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                          <i class="ti ti-calendar-check me-2"></i>Last 7 days
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
                      <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add">
                        <i class="ti ti-square-rounded-plus me-1"></i>Add Project
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive custom-table">
                    <table class="table dataTable" id="recent-project">
                      <thead class="thead-light">
                        <tr>
                          <th>Priority</th>
                          <th>Name</th>
                          <th>Client</th>
                          <th>Due Date</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="item in Project_Dashboard" :key="item.id">
                          <td>
                            <h2 class="d-flex align-items-center">
                              <router-link to="/crm/project-details" class="avatar avatar-sm border me-2"
                                ><img
                                  class="w-auto h-auto"
                                  :src="
                                    require(`@/assets/img/priority/${item.PriorityImage}`)
                                  "
                                  alt="User Image" /></router-link
                              ><router-link
                                to="/crm/project-details"
                                >{{ item.Priority }}</router-link
                              >
                            </h2>
                          </td>
                          <td>
                            <h2 class="d-flex align-items-center">
                              <router-link to="/crm/company-details" class="avatar avatar-sm border me-2"
                                ><img
                                  class="w-auto h-auto"
                                  :src="require(`@/assets/img/icons/${item.Image}`)"
                                  alt="User Image" /></router-link
                              ><router-link
                                to="/crm/company-details"
                                class="profile-split d-flex flex-column"
                                >{{ item.Name }}</router-link
                              >
                            </h2>
                          </td>
                          <td>
                            <span :class="item.Class"
                              ><span class="badge-dots"></span> {{ item.Client }}</span
                            >
                          </td>
                          <td>{{ item.DueDate }}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 d-flex">
              <div class="card w-100">
                <div class="card-header border-0 pb-0">
                  <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h4><i class="ti ti-grip-vertical me-1"></i>Project By Stage</h4>
                    <div class="dropdown">
                      <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
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
                  <div id="contacts-analysis">
                    <apexchart
                      type="donut"
                      :options="contactAnalysisCharts.contactCharts"
                      :series="contactAnalysisCharts.series"
                    ></apexchart>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 d-flex">
              <div class="card w-100">
                <div class="card-header border-0 pb-0">
                  <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h4><i class="ti ti-grip-vertical me-1"></i>Projects By Stage</h4>
                    <div class="d-flex align-items-center flex-wrap row-gap-2">
                      <div class="dropdown me-2">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown"
                          href="javascript:void(0);">
                          Sales Pipeline
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item">
                            Marketing Pipeline
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Sales Pipeline
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Email
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Chats
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Operational
                          </a>
                        </div>
                      </div>
                      <div class="dropdown">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown"
                          href="javascript:void(0);">
                          Last 3 months
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
                  <div id="project-stage">
                    <apexchart
                      type="bar"
                      height="420"
                      :options="projectStaCharts.stagesCharts"
                      :series="projectStaCharts.series"
                    ></apexchart>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header border-0 pb-0">
                  <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h4><i class="ti ti-grip-vertical me-1"></i>Leads By Stage</h4>
                    <div class="d-flex align-items-center flex-wrap row-gap-2">
                      <div class="dropdown me-2">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown"
                          href="javascript:void(0);">
                          Marketing Pipeline
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item">
                            Marketing Pipeline
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Sales Pipeline
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Email
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Chats
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Operational
                          </a>
                        </div>
                      </div>
                      <div class="dropdown">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown"
                          href="javascript:void(0);">
                          Last 3 months
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
                  <div id="last-chart">
                    <apexchart
                      type="bar"
                      height="150"
                      :options="lastProCharts.lastCharts"
                      :series="lastProCharts.series"
                    ></apexchart>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header border-0 pb-0">
                  <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h4><i class="ti ti-grip-vertical me-1"></i>Won Deals Stage</h4>
                    <div class="d-flex align-items-center flex-wrap row-gap-2">
                      <div class="dropdown me-2">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown"
                          href="javascript:void(0);">
                          Marketing Pipeline
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item">
                            Marketing Pipeline
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Sales Pipeline
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Email
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Chats
                          </a>
                          <a href="javascript:void(0);" class="dropdown-item">
                            Operational
                          </a>
                        </div>
                      </div>
                      <div class="dropdown">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown"
                          href="javascript:void(0);">
                          Last 3 months
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
                  <div id="won-chart">
                    <apexchart
                      type="bar"
                      height="150"
                      :options="wonProCharts.wonCharts"
                      :series="wonProCharts.series"
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
  <project-dashboard-modal></project-dashboard-modal>
</template>
<script>
import Project_Dashboard from "@/assets/json/project-dashboard.json";
import {
  contactAnalysisCharts,
  projectStaCharts,
  lastProCharts,
  wonProCharts,
} from "./data";
export default {
  data() {
    return {
      title: "Project Dashboard",
      Project_Dashboard: Project_Dashboard,
      contactAnalysisCharts: contactAnalysisCharts,
      projectStaCharts: projectStaCharts,
      lastProCharts: lastProCharts,
      wonProCharts: wonProCharts,
    };
  },
};
</script>

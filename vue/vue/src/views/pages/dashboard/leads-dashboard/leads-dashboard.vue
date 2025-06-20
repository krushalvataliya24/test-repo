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
									<h4><i class="ti ti-grip-vertical me-1"></i>Recently Created Leads</h4>
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
                  <div class="table-responsive custom-table">
                    <table class="table dataTable" id="lead-project">
                      <thead class="thead-light">
                        <tr>
                          <th>Lead Name</th>
                          <th>Company Name</th>
                          <th>Phone</th>
                          <th>Lead Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="item in Leads_Dashboard" :key="item.id">
                          <td>{{ item.LeadName }}</td>
                          <td>
                            <h2 class="d-flex align-items-center">
                              <router-link to="/crm/company-details" class="avatar avatar-sm border me-2"
                                ><img
                                  class="w-auto h-auto"
                                  :src="require(`@/assets/img/icons/${item.Image}`)"
                                  alt="User Image" /></router-link
                              ><router-link
                                to="/crm/company-details"
                                class="d-flex flex-column"
                                >{{ item.CompanyName
                                }}<span>{{ item.Location }}</span></router-link
                              >
                            </h2>
                          </td>
                          <td>{{ item.Phone }}</td>
                          <td>
                            <span :class="item.Class"> {{ item.LeadStatus }}</span>
                          </td>
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
                    <h4><i class="ti ti-grip-vertical me-1"></i>Projects By Stage</h4>
                  <div class="dropdown">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
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
                <div class="card-body">
                  <div id="leadpiechart">
                    <apexchart
                      type="pie"
                      height="450"
                      :options="leadpieChart.pieCharts"
                      :series="leadpieChart.series"
                    ></apexchart>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 d-flex">
              <div class="card w-100">
                <div class="card-header border-0 pb-0">
                  <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h4><i class="ti ti-grip-vertical me-1"></i>Projects By Stage</h4>
                    <div class="d-flex align-items-center flex-wrap row-gap-2">
                      <div class="dropdown me-2">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
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
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
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
                  <div id="contact-report">
                    <apexchart
                      type="area"
                      height="273"
                      :options="contactReportChart.reportCharts"
                      :series="contactReportChart.series"
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
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
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
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
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
                      :options="leadLastChart.lastCharts"
                      :series="leadLastChart.series"
                    ></apexchart>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header border-0 pb-0">
                  <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h4><i class="ti ti-grip-vertical me-1"></i>Won Deals Stage</h4>
                    <div class="d-flex align-items-center flex-wrap row-gap-2">
                      <div class="dropdown me-2">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
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
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
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
                      :options="leadWonCharts.wonCharts"
                      :series="leadWonCharts.series"
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
</template>
<script>
import Leads_Dashboard from "@/assets/json/leads-dashboard.json";
import { leadpieChart, contactReportChart, leadLastChart, leadWonCharts } from "./data";
export default {
  data() {
    return {
      title: "Leads Dashboard",
      Leads_Dashboard: Leads_Dashboard,
      leadpieChart: leadpieChart,
      contactReportChart: contactReportChart,
      leadLastChart: leadLastChart,
      leadWonCharts: leadWonCharts,
    };
  },
};
</script>

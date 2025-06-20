<template>
  <layouts-header></layouts-header>
  <layouts-sidebar></layouts-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- Page Header -->
          <page-header :title="title" />
          <!-- /Page Header -->

          <div class="card">
            <!-- Search -->
            <div class="card-header">
              <!-- Search -->
              <div class="row">
                <div class="col-md-5 col-sm-4">
                  <div class="icon-form mb-3 mb-sm-0">
                    <span class="form-icon"><i class="ti ti-search"></i></span>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Search Projects"
                    />
                  </div>
                </div>
                <div class="col-md-7 col-sm-8">
                  <div class="text-sm-end">
                    <a
                      href="download_report"
                      class="btn btn-primary"
                      data-bs-toggle="modal"
                      data-bs-target="#download_report"
                      ><i class="ti ti-file-download me-2"></i>Download Report</a
                    >
                  </div>
                </div>
              </div>

              <!-- Search -->
            </div>
            <!-- /Search -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-7 d-flex">
                  <div class="card shadow flex-fill">
                    <div
                      class="card-header d-flex justify-content-between align-items-center flex-wrap row-gap-2"
                    >
                      <h4>Projects by Year</h4>
                      <div class="icon-form">
                        <span class="form-icon"><i class="ti ti-calendar"></i></span>
                        <input
                          type="text"
                          class="form-control bookingrange"
                          placeholder=""
                          ref="dateRangeInput"
                        />
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="project-year">
                        <apexchart
                          type="line"
                          height="273"
                          :options="projectCharts.proCharts"
                          :series="projectCharts.series"
                        ></apexchart>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 d-flex">
                  <div class="card shadow flex-fill">
                    <div
                      class="card-header d-flex justify-content-between align-items-center flex-wrap row-gap-2"
                    >
                      <h4>Projects by Stage</h4>
                      <div class="icon-form">
                        <span class="form-icon"><i class="ti ti-calendar"></i></span>
                        <input
                          type="text"
                          class="form-control bookingrange"
                          placeholder=""
                          ref="dateRangeInput1"
                        />
                      </div>
                    </div>
                    <div class="card-body">
                      <div id="project-type">
                        <apexchart
                          type="donut"
                          height="273"
                          :options="projecttypeCharts.protypeCharts"
                          :series="projecttypeCharts.series"
                        ></apexchart>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Filter -->
              <project-report-filter></project-report-filter>
              <!-- /Filter -->

              <!-- Report List -->
              <div class="table-responsive custom-table">
                <a-table
                  class="table"
                  :columns="columns"
                  :data-source="data"
                  :row-selection="rowSelection"
                >
                  <template #bodyCell="{ column, record }">
                    <template v-if="column.key === 'Star'">
                      <div class="set-star rating-select">
                        <i class="fa fa-star"></i>
                      </div>
                    </template>
                    <template v-else-if="column.key === 'Name'">
                      <h2 class="d-flex align-items-center">
                        <router-link
                          to="/crm/project-details"
                          class="avatar avatar-sm border me-2"
                          ><img
                            class="w-auto h-auto"
                            :src="require(`@/assets/img/priority/${record.NameImage}`)"
                            alt="User Image" /></router-link
                        ><router-link to="/crm/project-details">{{
                          record.Name
                        }}</router-link>
                      </h2>
                    </template>
                    <template v-else-if="column.key === 'Client'">
                      <h2 class="d-flex align-items-center">
                        <router-link
                          to="/crm/company-details"
                          class="avatar avatar-sm border me-2"
                          ><img
                            class="w-auto h-auto"
                            :src="require(`@/assets/img/icons/${record.CompanyImage}`)"
                            alt="User Image" /></router-link
                        ><router-link to="/crm/company-details">{{
                          record.Client
                        }}</router-link>
                      </h2>
                    </template>
                    <template v-else-if="column.key === 'Priority'">
                      <span :class="record.PriorityClass"
                        ><i class="ti ti-square-rounded-filled"></i
                        >{{ record.Priority }}</span
                      >
                    </template>
                    <template v-else-if="column.key === 'PipelineStage'">
                      <div class="pipeline-progress d-flex align-items-center">
                        <div class="progress">
                          <div :class="record.StageClass" role="progressbar"></div>
                        </div>
                        <span>{{ record.PipelineStage }}</span>
                      </div>
                    </template>
                  </template>
                </a-table>
              </div>
              <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="datatable-length"></div>
                </div>
                <div class="col-md-6">
                  <div class="datatable-paginate"></div>
                </div>
              </div>
              <!-- /Report List -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <project-report-modal></project-report-modal>
</template>
<script>
import "daterangepicker/daterangepicker.css";
import "daterangepicker/daterangepicker.js";
import { ref } from "vue";
import { onMounted } from "vue";
import moment from "moment";
import DateRangePicker from "daterangepicker";
import { projectCharts, projecttypeCharts } from "./data";
export default {
  data() {
    return {
      title: "Project Report",
      projectCharts: projectCharts,
      projecttypeCharts: projecttypeCharts,
      data,
      columns,
      rowSelection,
    };
  },
  setup() {
    const dateRangeInput = ref(null);
    const dateRangeInput1 = ref(null);

    // Move the function declaration outside of the onMounted callback
    function booking_range(start, end) {
      return start.format("M/D/YYYY") + " - " + end.format("M/D/YYYY");
    }

    onMounted(() => {
      if (dateRangeInput.value) {
        const start = moment().subtract(6, "days");
        const end = moment();

        new DateRangePicker(
          dateRangeInput.value,
          {
            startDate: start,
            endDate: end,
            ranges: {
              Today: [moment(), moment()],
              Yesterday: [moment().subtract(1, "days"), moment().subtract(1, "days")],
              "Last 7 Days": [moment().subtract(6, "days"), moment()],
              "Last 30 Days": [moment().subtract(29, "days"), moment()],
              "This Month": [moment().startOf("month"), moment().endOf("month")],
              "Last Month": [
                moment().subtract(1, "month").startOf("month"),
                moment().subtract(1, "month").endOf("month"),
              ],
            },
          },
          booking_range
        );

        booking_range(start, end);
      }
      if (dateRangeInput1.value) {
        const start = moment().subtract(6, "days");
        const end = moment();

        new DateRangePicker(
          dateRangeInput1.value,
          {
            startDate: start,
            endDate: end,
            ranges: {
              Today: [moment(), moment()],
              Yesterday: [moment().subtract(1, "days"), moment().subtract(1, "days")],
              "Last 7 Days": [moment().subtract(6, "days"), moment()],
              "Last 30 Days": [moment().subtract(29, "days"), moment()],
              "This Month": [moment().startOf("month"), moment().endOf("month")],
              "Last Month": [
                moment().subtract(1, "month").startOf("month"),
                moment().subtract(1, "month").endOf("month"),
              ],
            },
          },
          booking_range
        );

        booking_range(start, end);
      }
    });

    return {
      dateRangeInput,
      dateRangeInput1,
    };
  },
};
const columns = [
  {
    title: "",
    dataIndex: "",
    sorter: false,
  },
  {
    title: "",
    dataIndex: "",
    key: "Star",
    sorter: false,
  },
  {
    title: "Name",
    dataIndex: "Name",
    key: "Name",
    sorter: {
      compare: (a, b) => {
        a = a.Name.toLowerCase();
        b = b.Name.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Client",
    dataIndex: "Client",
    key: "Client",
    sorter: {
      compare: (a, b) => {
        a = a.Client.toLowerCase();
        b = b.Client.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Priority",
    dataIndex: "Priority",
    key: "Priority",
    sorter: {
      compare: (a, b) => {
        a = a.Priority.toLowerCase();
        b = b.Priority.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Start Date",
    dataIndex: "StartDate",
    sorter: {
      compare: (a, b) => {
        a = a.StartDate.toLowerCase();
        b = b.StartDate.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "End Date",
    dataIndex: "EndDate",
    sorter: {
      compare: (a, b) => {
        a = a.EndDate.toLowerCase();
        b = b.EndDate.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Type",
    dataIndex: "Type",
    sorter: {
      compare: (a, b) => {
        a = a.Type.toLowerCase();
        b = b.Type.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Pipeline Stage",
    dataIndex: "PipelineStage",
    key: "PipelineStage",
    sorter: {
      compare: (a, b) => {
        a = a.PipelineStage.toLowerCase();
        b = b.PipelineStage.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Budget Value",
    dataIndex: "BudgetValue",
    sorter: {
      compare: (a, b) => {
        a = a.BudgetValue.toLowerCase();
        b = b.BudgetValue.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Currently Spend",
    dataIndex: "CurrentlySpend",
    sorter: {
      compare: (a, b) => {
        a = a.CurrentlySpend.toLowerCase();
        b = b.CurrentlySpend.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
];
const data = [
  {
    key: 1,
    NameImage: "truellysel.svg",
    CompanyImage: "company-icon-01.svg",
    Name: "Truelysell",
    Client: "NovaWave LLC",
    Priority: "High",
    PriorityClass: "priority badge badge-tag badge-danger-light",
    StartDate: "25 Sep 2023",
    EndDate: "15 Oct 2023",
    Type: "Web App",
    PipelineStage: "Plan",
    StageClass: "progress-bar progress-bar-violet",
    BudgetValue: "$200000",
    CurrentlySpend: "$40000",
  },
  {
    key: 2,
    NameImage: "dreamchat.svg",
    CompanyImage: "company-icon-02.svg",
    Name: "Dreamschat",
    Client: "BlueSky Industries",
    Priority: "Medium",
    PriorityClass: "priority badge badge-tag badge-warning-light",
    StartDate: "29 Sep 2023",
    EndDate: "19 Oct 2023",
    Type: "Web App",
    PipelineStage: "Develop",
    StageClass: "progress-bar progress-bar-info",
    BudgetValue: "$300000",
    CurrentlySpend: "$120000",
  },
  {
    key: 3,
    NameImage: "truellysell.svg",
    CompanyImage: "company-icon-03.svg",
    Name: "Truelysell",
    Client: "SilverHawk",
    Priority: "High",
    PriorityClass: "priority badge badge-tag badge-danger-light",
    StartDate: "05 Oct 2023",
    EndDate: "12 Oct 2023",
    Type: "Web App",
    PipelineStage: "Completed",
    StageClass: "progress-bar progress-bar-success",
    BudgetValue: "$200000",
    CurrentlySpend: "$200000",
  },
  {
    key: 4,
    NameImage: "servbook.svg",
    CompanyImage: "company-icon-04.svg",
    Name: "Servbook",
    Client: "SummitPeak",
    Priority: "Medium",
    PriorityClass: "priority badge badge-tag badge-danger-light",
    StartDate: "14 Oct 2023",
    EndDate: "24 Oct 2023",
    Type: "Web App",
    PipelineStage: "Design",
    StageClass: "progress-bar progress-bar-warning",
    BudgetValue: "$300000",
    CurrentlySpend: "$60000",
  },
  {
    key: 5,
    NameImage: "dream-pos.svg",
    CompanyImage: "company-icon-05.svg",
    Name: "DreamPOS",
    Client: "RiverStone Ventur",
    Priority: "Low",
    PriorityClass: "priority badge badge-tag badge-success-light",
    StartDate: "15 Nov 2023",
    EndDate: "22 Nov 2023",
    Type: "Web App",
    PipelineStage: "Design",
    StageClass: "progress-bar progress-bar-warning",
    BudgetValue: "$120000",
    CurrentlySpend: "$40000",
  },
  {
    key: 6,
    NameImage: "project-01.svg",
    CompanyImage: "company-icon-06.svg",
    Name: "Kofejob",
    Client: "CoastalStar Co.",
    Priority: "High",
    PriorityClass: "priority badge badge-tag badge-danger-light",
    StartDate: "25 Nov 2023",
    EndDate: "09 Dec 2023",
    Type: "Meeting",
    PipelineStage: "Develop",
    StageClass: "progress-bar progress-bar-info",
    BudgetValue: "$200000",
    CurrentlySpend: "$90000",
  },
  {
    key: 7,
    NameImage: "project-02.svg",
    CompanyImage: "company-icon-07.svg",
    Name: "Doccure",
    Client: "HarborView",
    Priority: "Medium",
    PriorityClass: "priority badge badge-tag badge-warning-light",
    StartDate: "08 Dec 2023",
    EndDate: "16 Dec 2023",
    Type: "Web App",
    PipelineStage: "Completed",
    StageClass: "progress-bar progress-bar-success",
    BudgetValue: "$200000",
    CurrentlySpend: "$195000",
  },
  {
    key: 8,
    NameImage: "best.svg",
    CompanyImage: "company-icon-08.svg",
    Name: "Best@laundry",
    Client: "Golden Gate Ltd",
    Priority: "Low",
    PriorityClass: "priority badge badge-tag badge-success-light",
    StartDate: "21 Dec 2023",
    EndDate: "13 Jan 2024",
    Type: "Meeting",
    PipelineStage: "Completed",
    StageClass: "progress-bar progress-bar-success",
    BudgetValue: "$230000",
    CurrentlySpend: "$220000",
  },
  {
    key: 9,
    NameImage: "dream-pos.svg",
    CompanyImage: "company-icon-06.svg",
    Name: "POS",
    Client: "CoastalStar Inc",
    Priority: "Medium",
    PriorityClass: "priority badge badge-tag badge-warning-light",
    StartDate: "01 Jan 2024",
    EndDate: "11 Jan 2024",
    Type: "Web App",
    PipelineStage: "Develop",
    StageClass: "progress-bar progress-bar-info",
    BudgetValue: "$200000",
    CurrentlySpend: "$177777",
  },
  {
    key: 10,
    NameImage: "servbook.svg",
    CompanyImage: "company-icon-09.svg",
    Name: "Bookserv",
    Client: "Redwood Inc",
    Priority: "Medium",
    PriorityClass: "priority badge badge-tag badge-warning-light",
    StartDate: "12 Jan 2024",
    EndDate: "29 Jan 2024",
    Type: "Meeting",
    PipelineStage: "Develop",
    StageClass: "progress-bar progress-bar-info",
    BudgetValue: "$300000",
    CurrentlySpend: "$100000",
  },
];
const rowSelection = {
  onChange: () => {},
  onSelect: () => {},
  onSelectAll: () => {},
};
</script>

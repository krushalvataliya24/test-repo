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
                    <input type="text" class="form-control" placeholder="Search Tasks" />
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
                      <h4>Tasks by Year</h4>
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
                      <div id="task-year">
                        <apexchart
                          type="line"
                          height="273"
                          :options="taskYearCharts.taskCharts"
                          :series="taskYearCharts.series"
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
                      <h4>Tasks by Types</h4>
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
                      <div id="leads-analysis">
                        <apexchart
                          type="line"
                          height="273"
                          :options="taskYearCharts.taskCharts"
                          :series="taskYearCharts.series"
                        ></apexchart>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Filter -->
              <task-report-filter></task-report-filter>
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
                    <template v-else-if="column.key === 'TaskName'">
                      <span class="title-name">{{ record.TaskName }}</span>
                    </template>
                    <template v-else-if="column.key === 'AssignedTo'">
                      <h2 class="d-flex align-items-center">
                        <a href="javascript:void(0);" class="avatar avatar-sm me-2"
                          ><img
                            class="w-auto h-auto"
                            src="@/assets/img/profiles/avatar-14.jpg"
                            alt="User Image" /></a
                        ><a href="javascript:void(0);">Adrian Davies</a>
                      </h2>
                    </template>
                    <template v-else-if="column.key === 'Priority'">
                      <span :class="record.PriorityClass"
                        ><i class="ti ti-square-rounded-filled"></i
                        >{{ record.Priority }}</span
                      >
                    </template>
                    <template v-else-if="column.key === 'Status'">
                      <span :class="record.StatusClass">{{ record.Status }}</span>
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
  <task-report-modal></task-report-modal>
</template>
<script>
import "daterangepicker/daterangepicker.css";
import "daterangepicker/daterangepicker.js";
import { ref } from "vue";
import { onMounted } from "vue";
import moment from "moment";
import DateRangePicker from "daterangepicker";
import { taskYearCharts, taskTypeCharts } from "./data";
export default {
  data() {
    return {
      title: "Task Report",
      taskYearCharts: taskYearCharts,
      taskTypeCharts: taskTypeCharts,
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
    title: "Task Name",
    dataIndex: "TaskName",
    key: "TaskName",
    sorter: {
      compare: (a, b) => {
        a = a.TaskName.toLowerCase();
        b = b.TaskName.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Assigned To",
    dataIndex: "AssignedTo",
    key: "AssignedTo",
    sorter: {
      compare: (a, b) => {
        a = a.AssignedTo.toLowerCase();
        b = b.AssignedTo.toLowerCase();
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
    title: "Due Date",
    dataIndex: "DueDate",
    sorter: {
      compare: (a, b) => {
        a = a.DueDate.toLowerCase();
        b = b.DueDate.toLowerCase();
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
    title: "Status",
    dataIndex: "Status",
    key: "Status",
    sorter: {
      compare: (a, b) => {
        a = a.Status.toLowerCase();
        b = b.Status.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Created Date",
    dataIndex: "CreatedDate",
    sorter: {
      compare: (a, b) => {
        a = a.CreatedDate.toLowerCase();
        b = b.CreatedDate.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
];
const data = [
  {
    key: 1,
    TaskName: "Add a form to Update Task",
    AssignedTo: "Adrian Davies",
    Priority: "High",
    PriorityClass: "priority badge badge-tag badge-danger-light",
    DueDate: "25 Sep 2023",
    Type: "Calls",
    Status: "Inprogress",
    StatusClass: "badge badge-pill badge-status bg-warning",
    CreatedDate: "25 Sep 2023, 01:22 pm",
  },
  {
    key: 1,
    TaskName: "Make all strokes thinner",
    AssignedTo: "Adrian Davies",
    Priority: "Medium",
    PriorityClass: "priority badge badge-tag badge-warning-light",
    DueDate: "29 Sep 2023",
    Type: "Meeting",
    Status: "Completed",
    StatusClass: "badge badge-pill badge-status bg-success",
    CreatedDate: "29 Sep 2023, 04:15 pm",
  },
  {
    key: 1,
    TaskName: "Update orginal contentuelysell",
    AssignedTo: "Adrian Davies",
    Priority: "High",
    PriorityClass: "priority badge badge-tag badge-danger-light",
    DueDate: "05 Oct 2023",
    Type: "Email",
    Status: "Inprogress",
    StatusClass: "badge badge-pill badge-status bg-warning",
    CreatedDate: "04 Oct 2023, 10:18 am",
  },
  {
    key: 1,
    TaskName: "Use only component colours",
    AssignedTo: "Adrian Davies",
    Priority: "Medium",
    PriorityClass: "priority badge badge-tag badge-warning-light",
    DueDate: "14 Oct 2023",
    Type: "Meeting",
    Status: "Completed",
    StatusClass: "badge badge-pill badge-status bg-success",
    CreatedDate: "17 Oct 2023, 03:31 pm",
  },
  {
    key: 1,
    TaskName: "Add images to the cards section",
    AssignedTo: "Adrian Davies",
    Priority: "Low",
    PriorityClass: "priority badge badge-tag badge-success-light",
    DueDate: "15 Nov 2023",
    Type: "Task",
    Status: "Inprogress",
    StatusClass: "badge badge-pill badge-status bg-warning",
    CreatedDate: "24 Oct 2023, 09:14 pm",
  },
  {
    key: 1,
    TaskName: "Design description banner & landing page",
    AssignedTo: "Adrian Davies",
    Priority: "High",
    PriorityClass: "priority badge badge-tag badge-danger-light",
    DueDate: "25 Nov 2023",
    Type: "Calls",
    Status: "Completed",
    StatusClass: "badge badge-pill badge-status bg-success",
    CreatedDate: "08 Nov 2023, 09:56 am",
  },
  {
    key: 1,
    TaskName: "Make sure all the padding should be 24px",
    AssignedTo: "Adrian Davies",
    Priority: "Low",
    PriorityClass: "priority badge badge-tag badge-success-light",
    DueDate: "08 Dec 2023",
    Type: "Email",
    Status: "Completed",
    StatusClass: "badge badge-pill badge-status bg-success",
    CreatedDate: "14 Nov 2023, 04:19 pm",
  },
  {
    key: 1,
    TaskName: "Use border radius as 5px or 10 px",
    AssignedTo: "Adrian Davies",
    Priority: "Medium",
    PriorityClass: "priority badge badge-tag badge-warning-light",
    DueDate: "21 Dec 2023",
    Type: "Task",
    Status: "Completed",
    StatusClass: "badge badge-pill badge-status bg-success",
    CreatedDate: "23 Nov 2023, 11:14 pm",
  },
  {
    key: 1,
    TaskName: "Use Grey scale colors as body color",
    AssignedTo: "Adrian Davies",
    Priority: "Medium",
    PriorityClass: "priority badge badge-tag badge-warning-light",
    DueDate: "21 Dec 2023",
    Type: "Meeting",
    Status: "Inprogress",
    StatusClass: "badge badge-pill badge-status bg-warning",
    CreatedDate: "10 Dec 2023, 06:43 am",
  },
];
const rowSelection = {
  onChange: () => {},
  onSelect: () => {},
  onSelectAll: () => {},
};
</script>

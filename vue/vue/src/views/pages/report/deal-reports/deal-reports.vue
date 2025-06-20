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
                    <input type="text" class="form-control" placeholder="Search Deals" />
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
                      <h4>Deals by Year</h4>
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
                      <div id="deals-report">
                        <apexchart
                          type="bar"
                          height="270"
                          :options="dealReport.delCharts"
                          :series="dealReport.series"
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
                      <h4>Deals by Source</h4>
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
                      <div id="deals-analysis">
                        <apexchart
                          type="bar"
                          height="270"
                          :options="dealReport.delCharts"
                          :series="dealReport.series"
                        ></apexchart>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Filter -->
              <deal-report-filter></deal-report-filter>
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
                    <template v-else-if="column.key === 'DealName'">
                      <router-link to="/crm/deals-details" class="title-name">{{
                        record.DealName
                      }}</router-link>
                    </template>
                    <template v-else-if="column.key === 'Owner'">
                      <div>
                        <span class="title-name">{{ record.Owner }}</span>
                      </div>
                    </template>
                    <template v-else-if="column.key === 'Status'">
                      <span :class="record.Class">{{ record.Status }}</span>
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
  <deal-report-modal></deal-report-modal>
</template>
<script>
import "daterangepicker/daterangepicker.css";
import "daterangepicker/daterangepicker.js";
import { ref } from "vue";
import { onMounted } from "vue";
import moment from "moment";
import DateRangePicker from "daterangepicker";
import { dealReport, anaDealcharts } from "./data";
export default {
  data() {
    return {
      title: "Deal Report",
      dealReport: dealReport,
      anaDealcharts: anaDealcharts,
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
    title: "Deal Name",
    dataIndex: "DealName",
    key: "DealName",
    sorter: {
      compare: (a, b) => {
        a = a.DealName.toLowerCase();
        b = b.DealName.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Stage",
    dataIndex: "Stage",
    key: "Stage",
    sorter: {
      compare: (a, b) => {
        a = a.Stage.toLowerCase();
        b = b.Stage.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Deal Value",
    dataIndex: "DealValue",
    sorter: {
      compare: (a, b) => {
        a = a.DealValue.toLowerCase();
        b = b.DealValue.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Expected Close Date",
    dataIndex: "ExpectedCloseDate",
    sorter: {
      compare: (a, b) => {
        a = a.ExpectedCloseDate.toLowerCase();
        b = b.ExpectedCloseDate.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Owner",
    dataIndex: "Owner",
    key: "Owner",
    sorter: {
      compare: (a, b) => {
        a = a.Owner.toLowerCase();
        b = b.Owner.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Probability",
    dataIndex: "Probability",
    sorter: {
      compare: (a, b) => {
        a = a.Probability.toLowerCase();
        b = b.Probability.toLowerCase();
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
    title: "Source",
    dataIndex: "Source",
    sorter: {
      compare: (a, b) => {
        a = a.Source.toLowerCase();
        b = b.Source.toLowerCase();
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
    DealName: "Collins",
    Stage: "Qualify To Buy",
    DealValue: "$04,51,000",
    ExpectedCloseDate: "25 Sep 2023",
    Owner: "Hendry",
    Probability: "90%",
    Status: "Won",
    Class: "badge badge-pill badge-status bg-success",
    Source: "Paid Social",
    CreatedDate: "25 Sep 2023, 01:22 pm",
  },
  {
    key: 2,
    DealName: "Konopelski",
    Stage: "Proposal Made",
    DealValue: "$03,12,500",
    ExpectedCloseDate: "29 Sep 2023",
    Owner: "Guillory",
    Probability: "15 %",
    Status: "Lost",
    Class: "badge badge-pill badge-status bg-danger",
    Source: "Referrals",
    CreatedDate: "29 Sep 2023, 04:15 pm",
  },
  {
    key: 3,
    DealName: "Adams",
    Stage: "Contact Made",
    DealValue: "$04,14,800",
    ExpectedCloseDate: "04 Oct 2023",
    Owner: "Jami",
    Probability: "95 %",
    Status: "Won",
    Class: "badge badge-pill badge-status bg-success",
    Source: "Campaigns",
    CreatedDate: "04 Oct 2023, 10:18 am",
  },
  {
    key: 4,
    DealName: "Schumm",
    Stage: "Qualify To Buy",
    DealValue: "$11,14,400",
    ExpectedCloseDate: "15 Oct 2023",
    Owner: "Theresa",
    Probability: "99 %",
    Status: "Won",
    Class: "badge badge-pill badge-status bg-success",
    Source: "Google",
    CreatedDate: "17 Oct 2023, 03:31 pm",
  },
  {
    key: 5,
    DealName: "Wisozk",
    Stage: "Presentation",
    DealValue: "$16,11,400",
    ExpectedCloseDate: "27 Oct 2023",
    Owner: "Espinosa",
    Probability: "10 %",
    Status: "open",
    Class: "badge badge-pill badge-status bg-purple",
    Source: "Paid Social",
    CreatedDate: "24 Oct 2023, 09:14 pm",
  },
  {
    key: 6,
    DealName: "Heller",
    Stage: "Appointment",
    DealValue: "$78,11,800",
    ExpectedCloseDate: "07 Nov 2023",
    Owner: "Martin",
    Probability: "70 %",
    Status: "Won",
    Class: "badge badge-pill badge-status bg-success",
    Source: "Referrals",
    CreatedDate: "08 Nov 2023, 09:56 am",
  },
  {
    key: 7,
    DealName: "Gutkowski",
    Stage: "Proposal Made",
    DealValue: "$09,05,947",
    ExpectedCloseDate: "12 Nov 2023",
    Owner: "Newell",
    Probability: "10 %",
    Status: "open",
    Class: "badge badge-pill badge-status bg-purple",
    Source: "Campaigns",
    CreatedDate: "14 Nov 2023, 04:19 pm",
  },
  {
    key: 8,
    DealName: "Walter",
    Stage: "Qualify To Buy",
    DealValue: "$04,51,000",
    ExpectedCloseDate: "23 Nov 2023",
    Owner: "Janet",
    Probability: "90 %",
    Status: "Won",
    Class: "badge badge-pill badge-status bg-success",
    Source: "Google",
    CreatedDate: "23 Nov 2023, 11:14 pm",
  },
  {
    key: 9,
    DealName: "Hansen",
    Stage: "Appointment",
    DealValue: "$72,14,078",
    ExpectedCloseDate: "11 Dec 2023",
    Owner: "Craig",
    Probability: "40 %",
    Status: "Won",
    Class: "badge badge-pill badge-status bg-success",
    Source: "Paid Social",
    CreatedDate: "10 Dec 2023, 06:43 am",
  },
  {
    key: 10,
    DealName: "Leuschke",
    Stage: "Proposal Made",
    DealValue: "$09,05,947",
    ExpectedCloseDate: "17 Dec 2023",
    Owner: "Daniel",
    Probability: "47 %",
    Status: "Lost",
    Class: "badge badge-pill badge-status bg-danger",
    Source: "Referrals",
    CreatedDate: "25 Dec 2023, 08:17 pm",
  },
];
const rowSelection = {
  onChange: () => {},
  onSelect: () => {},
  onSelectAll: () => {},
};
</script>

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
                      placeholder="Search Contact"
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
                      <h4>Contacts by Year</h4>
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
                      <div id="contact-report">
                        <apexchart
                          type="area"
                          height="273"
                          :options="contactCharts.conCharts"
                          :series="contactCharts.series"
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
                      <h4>Contacts by Source</h4>
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
                      <div id="contacts-analysis">
                        <apexchart
                          type="area"
                          height="273"
                          :options="contactCharts.conCharts"
                          :series="contactCharts.series"
                        ></apexchart>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Filter -->
              <contact-report-filter></contact-report-filter>
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
                          to="/crm/contact-details"
                          class="avatar avatar-sm me-2"
                          ><img
                            class="w-auto h-auto"
                            :src="require(`@/assets/img/profiles/${record.Image}`)"
                            alt="User Image" /></router-link
                        ><router-link to="/crm/contact-details" class="d-flex flex-column"
                          >{{ record.Name }}
                          <span class="text-default">{{
                            record.Posting
                          }}</span></router-link
                        >
                      </h2>
                    </template>
                    <template v-else-if="column.key === 'Company'">
                      <h2 class="d-flex align-items-center">
                        <router-link
                          to="/crm/company-details"
                          class="avatar avatar-sm border me-2"
                          ><img
                            class="w-auto h-auto"
                            :src="require(`@/assets/img/icons/${record.CompanyImage}`)"
                            alt="User Image" /></router-link
                        ><router-link to="/crm/company-details">{{
                          record.Company
                        }}</router-link>
                      </h2>
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
  <contact-report-modal></contact-report-modal>
</template>
<script>
import "daterangepicker/daterangepicker.css";
import "daterangepicker/daterangepicker.js";
import { ref } from "vue";
import { onMounted } from "vue";
import moment from "moment";
import DateRangePicker from "daterangepicker";
import { contactCharts, anaContactCharts } from "./data";
export default {
  data() {
    return {
      title: "Contact Report",
      contactCharts: contactCharts,
      anaContactCharts: anaContactCharts,
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
    title: "Phone",
    dataIndex: "Phone",
    sorter: {
      compare: (a, b) => {
        a = a.Phone.toLowerCase();
        b = b.Phone.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Email",
    dataIndex: "Email",
    sorter: {
      compare: (a, b) => {
        a = a.Email.toLowerCase();
        b = b.Email.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Company",
    dataIndex: "Company",
    key: "Company",
    sorter: {
      compare: (a, b) => {
        a = a.Company.toLowerCase();
        b = b.Company.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Industry",
    dataIndex: "Industry",
    sorter: {
      compare: (a, b) => {
        a = a.Industry.toLowerCase();
        b = b.Industry.toLowerCase();
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
    title: "Source",
    dataIndex: "Source",
    key: "Source",
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
    Name: "Darlee Robertson",
    Posting: "Facility Manager",
    Image: "avatar-19.jpg",
    CompanyImage: "company-icon-01.svg",
    Phone: "1234567890",
    Email: "robertson@example.com",
    Company: "NovaWave LLC",
    Industry: "Retail Industry",
    Type: "Customer",
    Source: "Paid Social",
    CreatedDate: "25 Sep 2023, 01:22 pm",
  },
  {
    key: 2,
    Name: "Sharon Roy",
    Posting: "Installer",
    Image: "avatar-20.jpg",
    CompanyImage: "company-icon-02.svg",
    Phone: "+1 989757485",
    Email: "sharon@example.com",
    Company: "BlueSky Industries",
    Industry: "Banking",
    Type: "Accounts",
    Source: "Referrals",
    CreatedDate: "29 Sep 2023, 04:15 pm",
  },
  {
    key: 3,
    Name: "Vaughan",
    Posting: "Senior Manager",
    Image: "avatar-21.jpg",
    CompanyImage: "company-icon-03.svg",
    Phone: "+1 546555455",
    Email: "vaughan12@example.com",
    Company: "SilverHawk",
    Industry: "Hotels",
    Type: "Partner",
    Source: "Campaigns",
    CreatedDate: "04 Oct 2023, 10:18 am",
  },
  {
    key: 4,
    Name: "Jessica",
    Posting: "Test Engineer",
    Image: "avatar-23.jpg",
    CompanyImage: "company-icon-04.svg",
    Phone: "+1 454478787",
    Email: "jessica13@example.com",
    Company: "SummitPeak",
    Industry: "Financial Services",
    Type: "Prospect",
    Source: "Google",
    CreatedDate: "17 Oct 2023, 03:31 pm",
  },
  {
    key: 5,
    Name: "Carol Thomas",
    Posting: "UI /UX Designer",
    Image: "avatar-16.jpg",
    CompanyImage: "company-icon-05.svg",
    Phone: "+1 124547845",
    Email: "caroltho3@example.com",
    Company: "RiverStone Ventur",
    Industry: "Insurance",
    Type: "Lead",
    Source: "Paid Social",
    CreatedDate: "24 Oct 2023, 09:14 pm",
  },
  {
    key: 6,
    Name: "Dawn Mercha",
    Posting: "Technician",
    Image: "avatar-22.jpg",
    CompanyImage: "company-icon-06.svg",
    Phone: "+1 478845447",
    Email: "dawnmercha@example.com",
    Company: "Bright Bridge Grp",
    Industry: "Consulatation",
    Type: "Influencer",
    Source: "Referrals",
    CreatedDate: "08 Nov 2023, 09:56 am",
  },
  {
    key: 7,
    Name: "Rachel Hampton",
    Posting: "Software Developer",
    Image: "avatar-24.jpg",
    CompanyImage: "company-icon-07.svg",
    Phone: "+1 215544845",
    Email: "rachel@example.com",
    Company: "CoastalStar Co.",
    Industry: "Agriculture",
    Type: "Vendor",
    Source: "Campaigns",
    CreatedDate: "14 Nov 2023, 04:19 pm",
  },
  {
    key: 8,
    Name: "Jonelle Curtiss",
    Posting: "Supervisor",
    Image: "avatar-25.jpg",
    CompanyImage: "company-icon-08.svg",
    Phone: "+1 121145471",
    Email: "jonelle@example.com",
    Company: "HarborView",
    Industry: "Insurance",
    Type: "Customer",
    Source: "Google",
    CreatedDate: "23 Nov 2023, 11:14 pm",
  },
  {
    key: 9,
    Name: "Jonathan",
    Posting: "Team Lead Dev",
    Image: "avatar-26.jpg",
    CompanyImage: "company-icon-09.svg",
    Phone: "+1 321454789",
    Email: "jonathan@example.com",
    Company: "Golden Gate Ltd",
    Industry: "Banking",
    Type: "Accounts",
    Source: "Paid Social",
    CreatedDate: "10 Dec 2023, 06:43 am",
  },
  {
    key: 10,
    Name: "Brook",
    Posting: "Team Lead Dev",
    Image: "avatar-01.jpg",
    CompanyImage: "company-icon-10.svg",
    Phone: "+1 278907145",
    Email: "brook@example.com",
    Company: "Redwood Inc",
    Industry: "Financial Services",
    Type: "Influencer",
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

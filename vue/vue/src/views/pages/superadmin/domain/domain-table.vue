<script>
const data = [
  {
    Name: "NovaWave LLC",
    Image: "company-icon-01.svg",
    Domain_URL: "bwi.example.com",
    Plan: "Advanced (Monthly)",
    Created_Date: "12 Sep 2024",
    Status: "Approved",
    Data_Target: "#domain_approved",
  },
  {
    Name: "BlueSky Industries",
    Image: "company-icon-02.svg",
    Domain_URL: "sd.example.com",
    Plan: "Basic (Yearly)",
    Created_Date: "24 Oct 2024",
    Status: "Pending",
    Data_Target: "#domain_pending",
  },
  {
    Name: "Silver Hawk",
    Image: "company-icon-03.svg",
    Domain_URL: "qn.example.com",
    Plan: "Advanced (Monthly)",
    Created_Date: "18 Feb 2024",
    Status: "Rejected",
    Data_Target: "#domain_rejected",
  },
  {
    Name: "Summit  Peak",
    Image: "company-icon-04.svg",
    Domain_URL: "eve.example.com",
    Plan: "Advanced (Monthly)",
    Created_Date: "17 Sep 2024",
    Status: "Approved",
    Data_Target: "#domain_approved",
  },
  {
    Name: "RiverStone Ventur",
    Image: "company-icon-05.svg",
    Domain_URL: "at.example.com",
    Plan: "Enterprise (Monthly)",
    Created_Date: "20 Jul 2024",
    Status: "Approved",
    Data_Target: "#domain_approved",
  },
  {
    Name: "Bright Bridge Grp",
    Image: "company-icon-06.svg",
    Domain_URL: "bsv.example.com",
    Plan: "Advanced (Monthly)",
    Created_Date: "10 Apr 2024",
    Status: "Pending",
    Data_Target: "#domain_pending",
  },
  {
    Name: "CoastalStar Co.",
    Image: "company-icon-07.svg",
    Domain_URL: "tfe.example.com",
    Plan: "Enterprise (Yearly)",
    Created_Date: "29 Aug 2024",
    Status: "Approved",
    Data_Target: "#domain_approved",
  },
  {
    Name: "HarborView",
    Image: "company-icon-08.svg",
    Domain_URL: "upd.example.com",
    Plan: "Basic (Monthly)",
    Created_Date: "22 Feb 2024",
    Status: "Rejected",
    Data_Target: "#domain_rejected",
  },
  {
    Name: "Golden Gate Ltd",
    Image: "company-icon-09.svg",
    Domain_URL: "nn.example.com",
    Plan: "Basic (Yearly)",
    Created_Date: "03 Nov 2024",
    Status: "Approved",
    Data_Target: "#domain_approved",
  },
  {
    Name: "Redwood Inc",
    Image: "company-icon-10.svg",
    Domain_URL: "ed.example.com",
    Plan: "Advanced (Monthly)",
    Created_Date: "17 Dec 2024",
    Status: "Approved",
    Data_Target: "#domain_approved",
  },
];

const columns = [
  {
    title: "",
    dataIndex: "Star",
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
    title: "Domain URL",
    dataIndex: "Domain_URL",
    sorter: {
      compare: (a, b) => {
        a = a.Domain_URL.toLowerCase();
        b = b.Domain_URL.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Plan",
    dataIndex: "Plan",
    sorter: {
      compare: (a, b) => {
        a = a.Plan.toLowerCase();
        b = b.Plan.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Created Date",
    dataIndex: "Created_Date",
    sorter: {
      compare: (a, b) => {
        a = a.Created_Date.toLowerCase();
        b = b.Created_Date.toLowerCase();
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
    title: "Action",
    key: "action",
    sorter: true,
  },
];

const rowSelection = {
  onChange: () => {},
  onSelect: () => {},
  onSelectAll: () => {},
};

export default {
  data() {
    return {
      data,
      columns,
      rowSelection,
    };
  },
};
</script>

<template>
  <a-table
    class="table datatable thead-light"
    :columns="columns"
    :data-source="data"
    :row-selection="rowSelection"
  >
    <template #bodyCell="{ column, record }">
      <template v-if="column.key === 'Star'">
        <div class="set-star rating-select"><i class="fa fa-star"></i></div>
      </template>
      <template v-if="column.key === 'Name'">
        <div class="d-flex align-items-center">
          <a href="javascript:void(0);" class="avatar avatar-sm border rounded p-1 me-2">
            <img
              class="w-auto h-auto"
              :src="require(`@/assets/img/icons/${record.Image}`)"
              alt="User Image"
            />
          </a>
          <a href="javascript:void(0);" class="d-flex flex-column fw-medium">{{
            record.Name
          }}</a>
        </div>
      </template>
      <template v-if="column.key === 'Status'">
        <span
          :class="[
            'badge badge-pill badge-status',
            record.Status === 'Approved'
              ? 'bg-success'
              : record.Status === 'Pending'
              ? 'bg-skyblue'
              : 'bg-danger',
          ]"
        >
          {{ record.Status }}
        </span>
      </template>
      <template v-if="column.key === 'action'">
        <div class="dropdown table-action">
          <a href="#" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-ellipsis-v"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a
              class="dropdown-item"
              href="#"
              data-bs-toggle="modal"
              data-bs-target="#domain_approved"
              ><i class="ti ti-eye text-blue-light"></i> Preview</a
            >
            <a class="dropdown-item" href="#">
              <i class="ti ti-download text-blue"></i>Download
            </a>
            <a
              class="dropdown-item"
              href="#"
              data-bs-toggle="modal"
              data-bs-target="#delete_company"
            >
              <i class="ti ti-trash text-danger"></i>Delete
            </a>
          </div>
        </div>
      </template>
    </template>
  </a-table>
</template>

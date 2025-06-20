<script>
const data = [
  {
    Subscriber: "NovaWave LLC",
    Image: "company-icon-01.svg",
    Plan: "Advanced (Monthly)",
    Billing_Cycle: "30 Days",
    Payment_Method: "Credit Card",
    Amount: "$200",
    Created_Date: "12 Sep 2024",
    Expiring_On: "11 Oct 2024",
    Status: "Paid",
  },
  {
    Subscriber: "BlueSky Industries",
    Image: "company-icon-02.svg",
    Plan: "Basic (Yearly)",
    Billing_Cycle: "365 Days",
    Payment_Method: "Paypal",
    Amount: "$600",
    Created_Date: "24 Oct 2024",
    Expiring_On: "23 Oct 2025",
    Status: "Unpaid",
  },
  {
    Subscriber: "Silver Hawk",
    Image: "company-icon-03.svg",
    Plan: "Advanced (Monthly)",
    Billing_Cycle: "30 Days",
    Payment_Method: "Debit Card",
    Amount: "$200",
    Created_Date: "18 Feb 2024",
    Expiring_On: "17 Mar 2024",
    Status: "Paid",
  },
  {
    Subscriber: "Summit  Peak",
    Image: "company-icon-04.svg",
    Plan: "Advanced (Monthly)",
    Billing_Cycle: "30 Days",
    Payment_Method: "Paypal",
    Amount: "$200",
    Created_Date: "17 Oct 2024",
    Expiring_On: "16 Nov 2024",
    Status: "Paid",
  },
  {
    Subscriber: "RiverStone Ventur",
    Image: "company-icon-05.svg",
    Plan: "Enterprise (Monthly)",
    Billing_Cycle: "30 Days",
    Payment_Method: "Credit Card",
    Amount: "$400",
    Created_Date: "20 Jul 2024",
    Expiring_On: "19 Aug 2024",
    Status: "Paid",
  },
  {
    Subscriber: "Bright Bridge Grp",
    Image: "company-icon-06.svg",
    Plan: "Advanced (Monthly)",
    Billing_Cycle: "30 Days",
    Payment_Method: "Paypal",
    Amount: "$200",
    Created_Date: "10 Apr 2024",
    Expiring_On: "19 Aug 2024",
    Status: "Paid",
  },
  {
    Subscriber: "CoastalStar Co.",
    Image: "company-icon-07.svg",
    Plan: "Enterprise (Yearly)",
    Billing_Cycle: "365 Days",
    Payment_Method: "Credit Card",
    Amount: "$4800",
    Created_Date: "29 Aug 2024",
    Expiring_On: "28 Aug 2025",
    Status: "Paid",
  },
  {
    Subscriber: "HarborView",
    Image: "company-icon-08.svg",
    Plan: "Basic (Monthly)",
    Billing_Cycle: "30 Days",
    Payment_Method: "Credit Card",
    Amount: "$50",
    Created_Date: "22 Feb 2024",
    Expiring_On: "21 Mar 2024",
    Status: "Paid",
  },
  {
    Subscriber: "Golden Gate Ltd",
    Image: "company-icon-09.svg",
    Plan: "Basic (Yearly)",
    Billing_Cycle: "365 Days",
    Payment_Method: "Paypal",
    Amount: "$600",
    Created_Date: "03 Nov 2024",
    Expiring_On: "02 Nov 2025",
    Status: "Paid",
  },
  {
    Subscriber: "Redwood Inc",
    Image: "company-icon-10.svg",
    Plan: "Advanced (Monthly)",
    Billing_Cycle: "30 Days",
    Payment_Method: "Credit Card",
    Amount: "$200",
    Created_Date: "17 Dec 2024",
    Expiring_On: "16 Jan 2024",
    Status: "Paid",
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
    title: "Subscriber",
    dataIndex: "Subscriber",
    key: "Subscriber",
    sorter: {
      compare: (a, b) => {
        a = a.Subscriber.toLowerCase();
        b = b.Subscriber.toLowerCase();
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
    title: "Billing Cycle",
    dataIndex: "Billing_Cycle",
    sorter: {
      compare: (a, b) => {
        a = a.Billing_Cycle.toLowerCase();
        b = b.Billing_Cycle.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Payment Method",
    dataIndex: "Payment_Method",
    sorter: {
      compare: (a, b) => {
        a = a.Payment_Method.toLowerCase();
        b = b.Payment_Method.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Amount",
    dataIndex: "Amount",
    sorter: {
      compare: (a, b) => {
        a = a.Amount.toLowerCase();
        b = b.Amount.toLowerCase();
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
    title: "Expiring On",
    dataIndex: "Expiring_On",
    sorter: {
      compare: (a, b) => {
        a = a.Expiring_On.toLowerCase();
        b = b.Expiring_On.toLowerCase();
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
    title: "",
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
      <template v-if="column.key === 'Subscriber'">
        <div class="d-flex align-items-center">
          <a href="javascript:void(0);" class="avatar avatar-sm border rounded p-1 me-2">
            <img
              class="w-auto h-auto"
              :src="require(`@/assets/img/icons/${record.Image}`)"
              alt="User Image"
            />
          </a>
          <a href="javascript:void(0);" class="d-flex flex-column fw-medium">{{
            record.Subscriber
          }}</a>
        </div>
      </template>
      <template v-if="column.key === 'Status'">
        <span
          class="badge badge-pill badge-status"
          :class="[record.Status === 'Paid' ? 'bg-success' : 'bg-danger']"
          >{{ record.Status }}
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
              data-bs-target="#view_invoice"
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

<script>
const data = [
  {
    Invoice_ID: "INV001",
    Customer: "NovaWave LLC",
    Image: "company-icon-01.svg",
    Email: "michael@example.com",
    Created_Date: "12 Sep 2024",
    Amount: "$200",
    Payment_Method: "Credit Card",
    Status: "Paid",
  },
  {
    Invoice_ID: "INV002",
    Customer: "BlueSky Industries",
    Image: "company-icon-02.svg",
    Email: "sophie@example.com",
    Created_Date: "24 Oct 2024",
    Amount: "$600",
    Payment_Method: "Paypal",
    Status: "Paid",
  },
  {
    Invoice_ID: "INV003",
    Customer: "Silver Hawk",
    Image: "company-icon-03.svg",
    Email: "cameron@example.com",
    Created_Date: "18 Feb 2024",
    Amount: "$200",
    Payment_Method: "Debit Card",
    Status: "Paid",
  },
  {
    Invoice_ID: "INV004",
    Customer: "Summit  Peak",
    Image: "company-icon-04.svg",
    Email: "doris@example.com",
    Created_Date: "17 Oct 2024",
    Amount: "$200",
    Payment_Method: "Paypal",
    Status: "Paid",
  },
  {
    Invoice_ID: "INV005",
    Customer: "RiverStone Ventur",
    Image: "company-icon-05.svg",
    Email: "thomas@example.com",
    Created_Date: "20 Jul 2024",
    Amount: "$400",
    Payment_Method: "Credit Card",
    Status: "Paid",
  },
  {
    Invoice_ID: "INV006",
    Customer: "Bright Bridge Grp",
    Image: "company-icon-06.svg",
    Email: "kathleen@example.com",
    Created_Date: "10 Apr 2024",
    Amount: "$200",
    Payment_Method: "Paypal",
    Status: "Paid",
  },
  {
    Invoice_ID: "INV007",
    Customer: "CoastalStar Co.",
    Image: "company-icon-07.svg",
    Email: "bruce@example.com",
    Created_Date: "29 Aug 2024",
    Amount: "$4800",
    Payment_Method: "Credit Card",
    Status: "Paid",
  },
  {
    Invoice_ID: "INV008",
    Customer: "HarborView",
    Image: "company-icon-08.svg",
    Email: "estelle@example.com",
    Created_Date: "22 Feb 2024",
    Amount: "$50",
    Payment_Method: "Credit Card",
    Status: "Unpaid",
  },
  {
    Invoice_ID: "INV009",
    Customer: "Golden Gate Ltd",
    Image: "company-icon-09.svg",
    Email: "stephen@example.com",
    Created_Date: "03 Nov 2024",
    Amount: "$600",
    Payment_Method: "Paypal",
    Status: "Paid",
  },
  {
    Invoice_ID: "INV010",
    Customer: "Redwood Inc",
    Image: "company-icon-10.svg",
    Email: "angela@example.com",
    Created_Date: "17 Dec 2024",
    Amount: "$200",
    Payment_Method: "Credit Card",
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
    title: "Invoice ID",
    dataIndex: "Invoice_ID",
    key: "Invoice_ID",
    sorter: {
      compare: (a, b) => {
        a = a.Invoice_ID.toLowerCase();
        b = b.Invoice_ID.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Customer",
    dataIndex: "Customer",
    key: "Customer",
    sorter: {
      compare: (a, b) => {
        a = a.Customer.toLowerCase();
        b = b.Customer.toLowerCase();
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
    title: "Created_Date",
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
    title: "Payment_Method",
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
      <template v-if="column.key === 'Invoice_ID'">
        <a
          href="javascript:void(0);"
          data-bs-toggle="modal"
          data-bs-target="#view_invoice"
          class="link-default"
          >{{ record.Invoice_ID }}</a
        >
      </template>
      <template v-if="column.key === 'Customer'">
        <div class="d-flex align-items-center">
          <a href="javascript:void(0);" class="avatar avatar-sm border rounded p-1 me-2">
            <img
              class="w-auto h-auto"
              :src="require(`@/assets/img/icons/${record.Image}`)"
              alt="User Image"
            />
          </a>
          <a href="javascript:void(0);" class="d-flex flex-column fw-medium">{{
            record.Customer
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

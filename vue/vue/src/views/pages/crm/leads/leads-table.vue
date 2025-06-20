<template>
  <a-table
    class="table dataTable no-footer"
    :columns="columns"
    :data-source="data"
    :row-selection="rowSelection"
  >
    <template #bodyCell="{ column, record }">
      <template v-if="column.key === 'Star'">
        <div class="set-star rating-select"><i class="fa fa-star"></i></div>
      </template>
      <template v-else-if="column.key === 'Lead_name'">
        <div>
          <router-link to="/crm/leads-details" class="title-name">{{
            record.lead_name
          }}</router-link>
        </div>
      </template>
      <template v-else-if="column.key === 'Company_name'">
        <h2 class="d-flex align-items-center">
          <router-link to="/crm/company-details" class="avatar avatar-sm border rounded p-1 me-2"
            ><img
              class="w-auto h-auto"
              :src="require(`@/assets/img/icons/${record.company_image}`)"
              alt="User Image" /></router-link
          ><router-link to="/crm/company-details" class="d-flex flex-column"
            >{{ record.company_name
            }}<span class="text-default">{{ record.company_address }} </span></router-link
          >
        </h2>
      </template>
      <template v-else-if="column.key === 'Status'">
        <div>
          <span :class="record.statusclass">{{ record.status }}</span>
        </div>
      </template>
      <template v-else-if="column.key === 'Owner'">
        <div>
          <span class="title-name">{{ record.owner }}</span>
        </div>
      </template>
      <template v-else-if="column.key === 'action'">
        <div class="dropdown table-action">
          <a href="javascript:;" class="action-icon" data-bs-toggle="dropdown" aria-expanded="false"
            ><i class="fa fa-ellipsis-v"></i
          ></a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit" href="#"
              ><i class="ti ti-edit text-blue"></i> Edit</a
            ><a
              class="dropdown-item"
              href="javascript:;"
              data-bs-toggle="modal"
              data-bs-target="#delete_contact"
              ><i class="ti ti-trash text-danger"></i> Delete</a
            ><a class="dropdown-item" href="javascript:;"
              ><i class="ti ti-clipboard-copy text-blue-light"></i> Clone</a
            >
          </div>
        </div>
      </template>
    </template>
  </a-table>
</template>

<script>
const data = [
  {
    key: "1",
    lead_name: "Collins",
    company_name: "NovaWave LLC",
    company_image: "company-icon-01.svg",
    company_address: "Newyork, USA",
    phone: "+1 875455453",
    email: "robertson@example.com",
    created_date: "25 Sep 2023, 01:22 pm",
    owner: "Hendry",
    source: "Paid Social",
    status: "Closed",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "2",
    lead_name: "Konopelski",
    company_name: "BlueSky Industries",
    company_image: "company-icon-02.svg",
    company_address: "Winchester, KY",
    phone: "+1 989757485",
    email: "sharon@example.com",
    created_date: "29 Sep 2023, 04:15 pm",
    owner: "Guillory",
    source: "Referrals",
    status: "Not Contacted",
    statusclass: "badge badge-pill badge-status bg-pending",
  },
  {
    key: "3",
    lead_name: "Adams",
    company_name: "SilverHawk",
    company_image: "company-icon-03.svg",
    company_address: "Jametown, NY",
    phone: "+1 546555455",
    email: "vaughan12@example.com",
    created_date: "04 Oct 2023, 10:18 am",
    owner: "Jami",
    source: "Campaigns",
    status: "Closed",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "4",
    lead_name: "Schumm",
    company_name: "SummitPeak",
    company_image: "company-icon-04.svg",
    company_address: "Compton, RI",
    phone: "+1 454478787",
    email: "jessica13@example.com",
    created_date: "17 Oct 2023, 03:31 pm",
    owner: "Theresa",
    source: "Google",
    status: "Connected",
    statusclass: "badge badge-pill badge-status bg-warning",
  },
  {
    key: "5",
    lead_name: "Wisozk",
    company_name: "RiverStone Ventur",
    company_image: "company-icon-05.svg",
    company_address: "Dayton, OH",
    phone: "+1 124547845",
    email: "caroltho3@example.com",
    created_date: "24 Oct 2023, 09:14 pm",
    owner: "Espinosa",
    source: "Paid Social",
    status: "Closed",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "6",
    lead_name: "Heller",
    company_name: "Bright Bridge Grp",
    company_image: "company-icon-06.svg",
    company_address: "Lafayette, LA",
    phone: "+1 478845447",
    email: "dawnmercha@example.com",
    created_date: "08 Nov 2023, 09:56 am",
    owner: "Martin",
    source: "Referrals",
    status: "Closed",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "7",
    lead_name: "Gutkowski",
    company_name: "CoastalStar Co.",
    company_image: "company-icon-07.svg",
    company_address: "Centerville, VA",
    phone: "+1 215544845",
    email: "rachel@example.com",
    created_date: "14 Nov 2023, 04:19 pm",
    owner: "Newell",
    source: "Campaigns",
    status: "Closed",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "8",
    lead_name: "Walter",
    company_name: "HarborView",
    company_image: "company-icon-08.svg",
    company_address: "Providence, RI",
    phone: "+1 121145471",
    email: "jonelle@example.com",
    created_date: "23 Nov 2023, 11:14 pm",
    owner: "Janet",
    source: "Google",
    status: "Closed",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "9",
    lead_name: "Hansen",
    company_name: "Golden Gate Ltd",
    company_image: "company-icon-09.svg",
    company_address: "Swayzee, IN",
    phone: "+1 321454789",
    email: "jonathan@example.com",
    created_date: "10 Dec 2023, 06:43 am",
    owner: "Craig",
    source: "Paid Social",
    status: "Closed",
    statusclass: "badge badge-pill badge-status bg-success",
  },
  {
    key: "10",
    lead_name: "Leuschke",
    company_name: "Redwood Inc",
    company_image: "company-icon-10.svg",
    company_address: "Florida City, FL",
    phone: "+1 278907145",
    email: "brook@example.com",
    created_date: "25 Dec 2023, 08:17 pm",
    owner: "Daniel",
    source: "Referrals",
    status: "Lost",
    statusclass: "badge badge-pill badge-status bg-danger",
  },
];

const columns = [
  {
    key: "Star",
    sorter: false,
  },
  {
    title: "Leads Name",
    dataIndex: "lead_name",
    key: "Lead_name",
    sorter: {
      compare: (a, b) => {
        a = a.lead_name.toLowerCase();
        b = b.lead_name.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Company Name",
    dataIndex: "company_name",
    key: "Company_name",
    sorter: {
      compare: (a, b) => {
        a = a.company_name.toLowerCase();
        b = b.company_name.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Phone",
    dataIndex: "phone",
    sorter: {
      compare: (a, b) => {
        a = a.phone.toLowerCase();
        b = b.phone.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Email",
    dataIndex: "email",
    sorter: {
      compare: (a, b) => {
        a = a.email.toLowerCase();
        b = b.email.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Lead Status",
    dataIndex: "status",
    key: "Status",
    sorter: {
      compare: (a, b) => {
        a = a.status.toLowerCase();
        b = b.status.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Created Date",
    dataIndex: "created_date",
    sorter: {
      compare: (a, b) => {
        a = a.created_date.toLowerCase();
        b = b.created_date.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Lead Owner",
    dataIndex: "owner",
    key: "Owner",
    sorter: {
      compare: (a, b) => {
        a = a.owner.toLowerCase();
        b = b.owner.toLowerCase();
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

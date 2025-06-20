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
            <div class="card-header">
              <!-- Search -->
              <div class="row align-items-center">
                <div class="col-sm-4">
                  <div class="icon-form mb-3 mb-sm-0">
                    <span class="form-icon"><i class="ti ti-search"></i></span>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Search Tickets"
                    />
                  </div>
                </div>
                <div class="col-sm-8">
                  <div
                    class="d-flex align-items-center flex-wrap row-gap-2 justify-content-sm-end"
                  >
                    <div class="dropdown me-2">
                      <a
                        href="javascript:void(0);"
                        class="dropdown-toggle"
                        data-bs-toggle="dropdown"
                        ><i class="ti ti-package-export me-2"></i>Export</a
                      >
                      <div class="dropdown-menu dropdown-menu-end">
                        <ul>
                          <li>
                            <a href="javascript:void(0);" class="dropdown-item"
                              ><i class="ti ti-file-type-pdf text-danger me-1"></i>Export
                              as PDF</a
                            >
                          </li>
                          <li>
                            <a href="javascript:void(0);" class="dropdown-item"
                              ><i class="ti ti-file-type-xls text-green me-1"></i>Export
                              as Excel
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <a
                      href="javascript:void(0);"
                      class="btn btn-primary"
                      data-bs-toggle="offcanvas"
                      data-bs-target="#offcanvas_add"
                      ><i class="ti ti-square-rounded-plus me-2"></i>Add Tickets</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <!-- /Search -->
            <div class="card-body">
              <!-- Filter -->
              <ticket-filter></ticket-filter>
              <!-- /Filter -->

              <!-- Tickets List -->
              <div class="table-responsive custom-table">
                <a-table
                  class="table thead-light"
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
                    <template v-else-if="column.key === 'Assigned'">
                      <h2 class="d-flex align-items-center">
                        <a href="#" class="avatar avatar-sm me-2"
                          ><img
                            class="w-auto h-auto"
                            :src="require(`@/assets/img/profiles/${record.Image}`)"
                            alt="User Image" /></a
                        ><a href="#">{{ record.Assigned }}</a>
                      </h2>
                    </template>
                    <template v-else-if="column.key === 'Assignee'">
                      <h2 class="d-flex align-items-center">
                        <a href="javascript:void(0);" class="avatar avatar-sm me-2"
                          ><img
                            class="w-auto h-auto"
                            :src="require(`@/assets/img/profiles/${record.Image1}`)"
                            alt="User Image" /></a
                        ><a href="javascript:void(0);" class="d-flex flex-column"
                          >{{ record.Assignee }}
                          <span class="text-default">{{ record.Posting }}</span></a
                        >
                      </h2>
                    </template>
                    <template v-else-if="column.key === 'Priority'">
                      <div>
                        <span :class="record.PriorityClass">{{ record.Priority }}</span>
                      </div>
                    </template>
                    <template v-else-if="column.key === 'Status'">
                      <span :class="record.StatusClass">{{ record.Status }}</span>
                    </template>
                    <template v-else-if="column.key === 'action'">
                      <div class="dropdown table-action">
                        <a
                          href="#"
                          class="action-icon"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                          ><i class="fa fa-ellipsis-v"></i
                        ></a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a
                            class="dropdown-item"
                            href="javascript:void(0);"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvas_edit"
                            ><i class="ti ti-edit text-blue"></i> Edit</a
                          ><a
                            class="dropdown-item"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#delete_contact"
                            ><i class="ti ti-trash text-danger"></i> Delete</a
                          >
                        </div>
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
              <!-- /Tickets List -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <ticket-modal></ticket-modal>
</template>
<script>
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
    title: "Ticket ID",
    dataIndex: "TicketID",
    sorter: {
      compare: (a, b) => {
        a = a.TicketID.toLowerCase();
        b = b.TicketID.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Subject",
    dataIndex: "Subject",
    sorter: {
      compare: (a, b) => {
        a = a.Subject.toLowerCase();
        b = b.Subject.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "  Assigned",
    dataIndex: "  Assigned",
    key: "Assigned",
    sorter: {
      compare: (a, b) => {
        a = a.Assigned.toLowerCase();
        b = b.Assigned.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Assigned Date",
    dataIndex: "AssignedDate",
    sorter: {
      compare: (a, b) => {
        a = a.AssignedDate.toLowerCase();
        b = b.AssignedDate.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Created On",
    dataIndex: "CreatedOn",
    sorter: {
      compare: (a, b) => {
        a = a.CreatedOn.toLowerCase();
        b = b.CreatedOn.toLowerCase();
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
    title: "Assignee",
    dataIndex: "Assignee",
    key: "Assignee",
    sorter: {
      compare: (a, b) => {
        a = a.Assignee.toLowerCase();
        b = b.Assignee.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Last Reply",
    dataIndex: "LastReply",
    key: "LastReply",
    sorter: {
      compare: (a, b) => {
        a = a.LastReply.toLowerCase();
        b = b.LastReply.toLowerCase();
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
const data = [
  {
    key: 1,
    TicketID: "#4987",
    Subject: "Support for theme",
    Assigned: "Richard",
    AssignedDate: "22 Sep 2023",
    CreatedOn: "25 Sep 2023, 12:12 pm",
    DueDate: "25 Dec 2023",
    Assignee: "Darlee Robertson",
    Posting: "Facility Manager",
    LastReply: "27 Sep 2023",
    Priority: "Medium",
    Image: "avatar-02.jpg",
    Image1: "avatar-19.jpg",
    PriorityClass: "badge badge-tag badge-warning-light",
    StatusClass: "badge badge-pill badge-status bg-success",
    Status: "Resolved",
  },
  {
    key: 2,
    TicketID: "#4988",
    Subject: "verify your email",
    Assigned: "Elizabeth",
    AssignedDate: "23 Sep 2023",
    CreatedOn: "26 Sep 2023, 12:12 pm",
    DueDate: "30 Dec 2023",
    Assignee: "Sharon Roy",
    Posting: "Installer",
    LastReply: "30 Sep 2023",
    Priority: "Low",
    Image: "avatar-01.jpg",
    Image1: "avatar-20.jpg",
    PriorityClass: "badge badge-tag badge-purple-light",
    StatusClass: "badge badge-pill badge-status bg-info",
    Status: "Closed",
  },
  {
    key: 3,
    TicketID: "#4989",
    Subject: "Calling for help",
    Assigned: "Michel",
    AssignedDate: "24 Sep 2023",
    CreatedOn: "27 Sep 2023, 12:12 pm",
    DueDate: "25 Jan 2024",
    Assignee: "Vaughan",
    Posting: "Senior Manager",
    LastReply: "01 Oct 2023",
    Priority: "High",
    Image: "avatar-04.jpg",
    Image1: "avatar-21.jpg",
    PriorityClass: "badge badge-tag badge-danger-light",
    StatusClass: "badge badge-pill badge-status bg-warning",
    Status: "Pending",
  },
  {
    key: 4,
    TicketID: "#4990",
    Subject: "Management",
    Assigned: "Esther",
    AssignedDate: "30 Sep 2023",
    CreatedOn: "05 Oct 2023, 11:10 pm",
    DueDate: "31 Jan 2023",
    Assignee: "Jessica",
    Posting: "Test Engineer",
    LastReply: "10 Oct 2023",
    Priority: "Medium",
    Image: "avatar-03.jpg",
    Image1: "avatar-23.jpg",
    PriorityClass: "badge badge-tag badge-warning-light",
    StatusClass: "badge badge-pill badge-status bg-success",
    Status: "Resolved",
  },
  {
    key: 5,
    TicketID: "#4991",
    Subject: "Calling for help",
    Assigned: "Wilson",
    AssignedDate: "22 Sep 2023",
    CreatedOn: "25 Sep 2023, 12:12 pm",
    DueDate: "25 Dec 2023",
    Assignee: "Carol Thomas",
    Posting: "UI /UX Designer",
    LastReply: "27 Sep 2023",
    Priority: "Low",
    Image: "avatar-05.jpg",
    Image1: "avatar-16.jpg",
    PriorityClass: "badge badge-tag badge-purple-light",
    StatusClass: "badge badge-pill badge-status bg-danger",
    Status: "Open",
  },
  {
    key: 6,
    TicketID: "#4992",
    Subject: "Support for theme",
    Assigned: "Walter",
    AssignedDate: "30 Sep 2023",
    CreatedOn: "05 Oct 2023, 12:12 pm",
    DueDate: "25 Dec 2023",
    Assignee: "Dawn Mercha",
    Posting: "Technician",
    LastReply: "07 Oct 2023",
    Priority: "High",
    Image: "avatar-02.jpg",
    Image1: "avatar-19.jpg",
    PriorityClass: "badge badge-tag badge-danger-light",
    StatusClass: "badge badge-pill badge-status bg-info",
    Status: "Closed",
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
      title: "Tickets",
      data,
      columns,
      rowSelection,
    };
  },
};
</script>

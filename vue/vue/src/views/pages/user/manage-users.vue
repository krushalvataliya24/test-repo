<template>
  <layouts-header></layouts-header>
  <layouts-sidebar></layouts-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- Page Header -->
          <div class="page-header">
            <div class="row align-items-center">
              <div class="col-8">
                <h4 class="page-title">User<span class="count-title">123</span></h4>
              </div>
              <div class="col-4 text-end">
                <div class="head-icons">
                  <router-link
                    to="/user/manage-users"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    data-bs-original-title="Refresh"
                    ><i class="ti ti-refresh-dot"></i
                  ></router-link>
                  <a
                    href="javascript:void(0);"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    data-bs-original-title="Collapse"
                    id="collapse-header"
                    ><i class="ti ti-chevrons-up"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <!-- /Page Header -->

          <div class="card">
            <!-- Search -->
            <div class="card-header">
              <!-- Search -->
              <div class="row align-items-center">
                <div class="col-sm-4">
                  <div class="icon-form mb-3 mb-sm-0">
                    <span class="form-icon"><i class="ti ti-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search User" />
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
                      ><i class="ti ti-square-rounded-plus me-2"></i>Add user</a
                    >
                  </div>
                </div>
              </div>
              <!-- /Search -->
            </div>
            <!-- /Search -->
            <div class="card-body">
              <!-- Filter -->
              <manage-filter></manage-filter>
              <!-- /Filter -->

              <!-- Manage Users List -->
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
                        <a href="javascript:void(0);" class="avatar avatar-sm me-2"
                          ><img
                            class="w-auto h-auto"
                            :src="require(`@/assets/img/profiles/${record.Image}`)"
                            alt="User Image" /></a
                        ><a href="javascript:void(0);" class="d-flex flex-column"
                          >{{ record.Name }}
                          <span class="text-default">{{ record.Posting }}</span></a
                        >
                      </h2>
                    </template>
                    <template v-else-if="column.key === 'Status'">
                      <span :class="record.Class">{{ record.Status }}</span>
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
              <!-- /Manage Users List -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <manage-users-modal></manage-users-modal>
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
    key: "Email",
    sorter: {
      compare: (a, b) => {
        a = a.Email.toLowerCase();
        b = b.Email.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Location",
    dataIndex: "Location",
    sorter: {
      compare: (a, b) => {
        a = a.Location.toLowerCase();
        b = b.Location.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Created",
    dataIndex: "Created",
    sorter: {
      compare: (a, b) => {
        a = a.Created.toLowerCase();
        b = b.Created.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Last Activity",
    dataIndex: "LastActivity",
    key: "LastActivity",
    sorter: {
      compare: (a, b) => {
        a = a.LastActivity.toLowerCase();
        b = b.LastActivity.toLowerCase();
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
    Name: "Darlee Robertson",
    Posting: "Facility Manager",
    Phone: "1234567890",
    Image: "avatar-19.jpg",
    Email: "robertson@example.com",
    Location: "Germany",
    Created: "25 Sep 2023, 12:12 pm",
    LastActivity: "2 mins ago",
    Class: "badge badge-pill badge-status bg-success",
    Status: "Active",
  },
  {
    key: 2,
    Name: "Sharon Roy",
    Posting: "Installer",
    Phone: "+1 989757485",
    Image: "avatar-20.jpg",
    Email: "sharon@example.com",
    Location: "USA",
    Created: "27 Sep 2023, 07:40 am",
    LastActivity: "5 mins ago",
    Class: "badge badge-pill badge-status bg-danger",
    Status: "Inactive",
  },
  {
    key: 3,
    Name: "Vaughan",
    Posting: "Senior Manager",
    Phone: "+1 546555455",
    Image: "avatar-21.jpg",
    Email: "vaughan12@example.com",
    Location: "Canada",
    Created: "29 Sep 2023, 08:20 am",
    LastActivity: "2 days ago",
    Class: "badge badge-pill badge-status bg-success",
    Status: "Active",
  },
  {
    key: 4,
    Name: "Jessica",
    Posting: "Test Engineer",
    Phone: "+1 454478787",
    Image: "avatar-23.jpg",
    Email: "jessica13@example.com",
    Location: "India",
    Created: "25 Sep 2023, 12:12 pm",
    LastActivity: "2 mins ago",
    Class: "badge badge-pill badge-status bg-success",
    Status: "Active",
  },
  {
    key: 5,
    Name: "Carol Thomas",
    Posting: "UI /UX Designer",
    Phone: "+1 124547845",
    Image: "avatar-16.jpg",
    Email: "caroltho3@example.com",
    Location: "China",
    Created: "02 Oct 2023, 10:10 am",
    LastActivity: "Online",
    Class: "badge badge-pill badge-status bg-success",
    Status: "Active",
  },
  {
    key: 6,
    Name: "Dawn Mercha",
    Posting: "Technician",
    Phone: "+1 478845447",
    Image: "avatar-22.jpg",
    Email: "dawnmercha@example.com",
    Location: "Japan",
    Created: "17 Oct 2023, 04:25 pm",
    LastActivity: "3 days ago",
    Class: "badge badge-pill badge-status bg-success",
    Status: "Active",
  },
  {
    key: 7,
    Name: "Rachel Hampton",
    Posting: "Software Developer",
    Phone: "+1 215544845",
    Image: "avatar-24.jpg",
    Email: "rachel@example.com",
    Location: "Indonesia",
    Created: "28 Oct 2023, 07:16 am",
    LastActivity: "10 days ago",
    Class: "badge badge-pill badge-status bg-success",
    Status: "Active",
  },
  {
    key: 8,
    Name: "Jonelle Curtiss",
    Posting: "Supervisor",
    Phone: "+1 121145471",
    Image: "avatar-25.jpg",
    Email: "jonelle@example.com",
    Location: "Cuba",
    Created: "08 Nov 2023, 06:10 am",
    LastActivity: "1 week go",
    Class: "badge badge-pill badge-status bg-success",
    Status: "Active",
  },
  {
    key: 9,
    Name: "Jonathan",
    Posting: "Team Lead Dev",
    Phone: "+1 321454789",
    Image: "avatar-26.jpg",
    Email: "jonathan@example.com",
    Location: "Isreal",
    Created: "15 Nov 2023, 11:50 am",
    LastActivity: "1 day ago",
    Class: "badge badge-pill badge-status bg-success",
    Status: "Active",
  },
  {
    key: 10,
    Name: "Brook",
    Posting: "Team Lead Dev",
    Phone: "+1 278907145",
    Image: "avatar-01.jpg",
    Email: "brook@example.com",
    Location: "Colombia",
    Created: "25 Nov 2023, 06:34 pm",
    LastActivity: "8 mins ago",
    Class: "badge badge-pill badge-status bg-success",
    Status: "Active",
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

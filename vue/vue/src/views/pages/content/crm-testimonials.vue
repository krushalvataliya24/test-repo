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
              <div class="row align-items-center">
                <div class="col-sm-4">
                  <div class="icon-form mb-3 mb-sm-0">
                    <span class="form-icon"><i class="ti ti-search"></i></span>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Search Testimonial"
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
                      data-bs-toggle="modal"
                      data-bs-target="#add_testimonials"
                      ><i class="ti ti-square-rounded-plus me-2"></i>Add Testimonial</a
                    >
                  </div>
                </div>
              </div>
              <!-- /Search -->
            </div>
            <!-- /Search -->
            <div class="card-body">
              <!-- Filter -->
              <testimonials-filter></testimonials-filter>
              <!-- /Filter -->

              <!-- Contact List -->
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
                    <template v-else-if="column.key === 'UserName'">
                      <h2 class="d-flex align-items-center">
                        <a href="#" class="avatar avatar-sm border me-2"
                          ><img
                            class="w-auto h-auto"
                            :src="require(`@/assets/img/profiles/${record.Image}`)"
                            alt="User Image" /></a
                        ><a href="javascript:void(0);" class="d-flex flex-column"
                          >{{ record.UserName
                          }}<span class="text-default">{{ record.Posting }} </span></a
                        >
                      </h2>
                    </template>
                    <template v-if="column.key === 'Rating'">
                      <div class="set-star rating-select filled">
                        <i class="fa fa-star me-1"></i><i class="fa fa-star me-1"></i
                        ><i class="fa fa-star me-1"></i><i class="fa fa-star me-1"></i
                        ><i class="fa fa-star me-1"></i>
                      </div>
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
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#edit_testimonials"
                            ><i class="ti ti-edit text-blue"></i> Edit</a
                          ><a
                            class="dropdown-item"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#delete_testimonials"
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
              <!-- /Contact List -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <testimonials-modal></testimonials-modal>
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
    title: "UserName",
    dataIndex: "UserName",
    key: "UserName",
    sorter: {
      compare: (a, b) => {
        a = a.UserName.toLowerCase();
        b = b.UserName.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Rating",
    dataIndex: "Rating",
    key: "Rating",
    sorter: {
      compare: (a, b) => {
        a = a.Rating.toLowerCase();
        b = b.Rating.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Content",
    dataIndex: "Content",
    sorter: {
      compare: (a, b) => {
        a = a.Content.toLowerCase();
        b = b.Content.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Created At",
    dataIndex: "CreatedAt",
    sorter: {
      compare: (a, b) => {
        a = a.CreatedAt.toLowerCase();
        b = b.CreatedAt.toLowerCase();
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
    UserName: "Darlee Robertson",
    Posting: "Facility Manager",
    Content: "Project was received ontime without any mistake",
    CreatedAt: "25 Sep 2023, 01:22pm",
    Image: "avatar-19.jpg",
    Class: "badge badge-pill badge-status bg-danger",
    Status: "Inactive",
  },
  {
    key: 2,
    UserName: "Sharon Roy",
    Posting: "Installer",
    Content: "It help us to manage, track & do more business",
    CreatedAt: "29 Sep 2023, 08:12 am",
    Image: "avatar-20.jpg",
    Class: "badge badge-pill badge-status bg-danger",
    Status: "Inactive",
  },
  {
    key: 3,
    UserName: "Vaughan",
    Posting: "Senior Manager",
    Content: "Brillant tool to manage leads & projects",
    CreatedAt: "02 Oct 2023, 10:15 am",
    Image: "avatar-21.jpg",
    Class: "badge badge-pill badge-status bg-success",
    Status: "Active",
  },
  {
    key: 4,
    UserName: "Jessica",
    Posting: "Test Engineer",
    Content: "Very responsive and accurate with suggestions",
    CreatedAt: "11 Oct 2023, 02:32 pm",
    Image: "avatar-23.jpg",
    Class: "badge badge-pill badge-status bg-success",
    Status: "Active",
  },
  {
    key: 5,
    UserName: "Carol Thomas",
    Posting: "UI /UX Designer",
    Content: "Happy with measurable on lead management",
    CreatedAt: "4 Nov 2023, 04:22 pm",
    Image: "avatar-16.jpg",
    Class: "badge badge-pill badge-status bg-danger",
    Status: "Inactive",
  },
  {
    key: 6,
    UserName: "Dawn Mercha",
    Posting: "Technician",
    Content: "Pipeline are great for tracking process",
    CreatedAt: "16 Nov 2023, 10:51 pm",
    Image: "avatar-22.jpg",
    Class: "badge badge-pill badge-status bg-success",
    Status: "Active",
  },
  {
    key: 7,
    UserName: "Rachel Hampton",
    Posting: "Software Developer",
    Content: "It have complete visiblity of clients & interactions",
    CreatedAt: "25 Nov 2023, 3:43 pm",
    Image: "avatar-24.jpg",
    Class: "badge badge-pill badge-status bg-success",
    Status: "Active",
  },
  {
    key: 8,
    UserName: "Jonelle Curtiss",
    Posting: "Supervisor",
    Content: "Give customer best possible service & support",
    CreatedAt: "07 Dec 2023, 11:22 am",
    Image: "avatar-25.jpg",
    Class: "badge badge-pill badge-status bg-success",
    Status: "Active",
  },
  {
    key: 9,
    UserName: "Jonathan",
    Posting: "Team Lead Dev",
    Content: "It give accurate and real time information",
    CreatedAt: "15 Dec 2023, 8:17 am",
    Image: "avatar-26.jpg",
    Class: "badge badge-pill badge-status bg-success",
    Status: "Active",
  },
  {
    key: 10,
    UserName: "Eric Adams",
    Posting: "HR Manager",
    Content: "Most efficient process, accurate & consistent data",
    CreatedAt: "29 Dec 2023, 1:22 pm",
    Image: "avatar-06.jpg",
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
      title: "Testimonials",
      data,
      columns,
      rowSelection,
    };
  },
};
</script>

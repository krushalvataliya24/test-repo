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
                    <input type="text" class="form-control" placeholder="Search FAQ" />
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
                      data-bs-target="#add_faq"
                      ><i class="ti ti-square-rounded-plus me-2"></i>Add FAQ</a
                    >
                  </div>
                </div>
              </div>
              <!-- /Search -->
            </div>
            <div class="card-body">
              <!-- Filter -->
              <faq-filter></faq-filter>
              <!-- /Filter -->

              <!-- Faq List -->
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
                    <template v-else-if="column.key === 'Status'">
                      <span class="badge badge-pill badge-status bg-success">{{
                        record.Status
                      }}</span>
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
                            data-bs-target="#edit_faq"
                            ><i class="ti ti-edit text-blue"></i> Edit</a
                          ><a
                            class="dropdown-item"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#delete_faq"
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
              <!-- /Faq List -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <faq-modal></faq-modal>
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
    title: "Questions",
    dataIndex: "Questions",
    key: "Questions",
    sorter: {
      compare: (a, b) => {
        a = a.Questions.toLowerCase();
        b = b.Questions.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Category",
    dataIndex: "Category",
    key: "Category",
    sorter: {
      compare: (a, b) => {
        a = a.Category.toLowerCase();
        b = b.Category.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Answers",
    dataIndex: "Answers",
    sorter: {
      compare: (a, b) => {
        a = a.Answers.toLowerCase();
        b = b.Answers.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "CreatedAt",
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
    Questions: "How can I book a service",
    Category: "Services",
    Answers: "Lorem ipsum dolor amet, adipiscing elit",
    CreatedAt: "25 Sep 2023, 01:22 pm",
    Status: "Active",
    Action: "Edit Delete",
  },
  {
    key: 2,
    Questions: "How can I book a service",
    Category: "Advertising",
    Answers: "Lorem ipsum dolor amet, adipiscing elit",
    CreatedAt: "29 Sep 2023, 08:12 am",
    Status: "Active",
    Action: "Edit Delete",
  },
  {
    key: 3,
    Questions: "How can I book a service",
    Category: "Services",
    Answers: "Lorem ipsum dolor amet, adipiscing elit",
    CreatedAt: "02 Oct 2023, 02:32 pm",
    Status: "Active",
    Action: "Edit Delete",
  },
  {
    key: 4,
    Questions: "How can I book a service",
    Category: "Services",
    Answers: "Lorem ipsum dolor amet, adipiscing elit",
    CreatedAt: "11 Oct 2023, 02:32 pm",
    Status: "Active",
    Action: "Edit Delete",
  },
  {
    key: 5,
    Questions: "How can I book a service",
    Category: "Media",
    Answers: "Lorem ipsum dolor amet, adipiscing elit",
    CreatedAt: "04 Nov 2023, 04:22 pm",
    Status: "Active",
    Action: "Edit Delete",
  },
  {
    key: 6,
    Questions: "How can I book a service",
    Category: "Content Marketing",
    Answers: "Lorem ipsum dolor amet, adipiscing elit",
    CreatedAt: "16 Nov 2023, 10:51 pm",
    Status: "Active",
    Action: "Edit Delete",
  },
  {
    key: 7,
    Questions: "How can I book a service",
    Category: "Health Care",
    Answers: "Lorem ipsum dolor amet, adipiscing elit",
    CreatedAt: "25 Nov 2023, 03:43 pm",
    Status: "Active",
    Action: "Edit Delete",
  },
  {
    key: 8,
    Questions: "How can I book a service",
    Category: "Services",
    Answers: "Lorem ipsum dolor amet, adipiscing elit",
    CreatedAt: "07 Dec 2023, 11:22 am",
    Status: "Active",
    Action: "Edit Delete",
  },
  {
    key: 9,
    Questions: "How can I book a service",
    Category: "Social Marketing",
    Answers: "Lorem ipsum dolor amet, adipiscing elit",
    CreatedAt: "15 Dec 2023, 08:17 am",
    Status: "Active",
    Action: "Edit Delete",
  },
  {
    key: 10,
    Questions: "How can I book a service",
    Category: "Media",
    Answers: "Lorem ipsum dolor amet, adipiscing elit",
    CreatedAt: "29 Dec 2023, 01:22 pm",
    Status: "Active",
    Action: "Edit Delete",
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
      title: "Faq",
      data,
      columns,
      rowSelection,
    };
  },
};
</script>

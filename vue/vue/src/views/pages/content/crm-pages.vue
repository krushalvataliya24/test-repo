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
                    <input type="text" class="form-control" placeholder="Search Pages" />
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
                      ><i class="ti ti-square-rounded-plus me-2"></i>Add New Page</a
                    >
                  </div>
                </div>
              </div>
              <!-- /Search -->
            </div>
            <!-- /Search -->
            <div class="card-body">
              <!-- Filter -->
              <pages-filter></pages-filter>
              <!-- /Filter -->

              <!-- Page List -->
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
                    <template v-else-if="column.key === 'Pages'"
                      ><span class="title-name">{{ record.Pages }}</span></template
                    >
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
                            data-bs-target="#delete_page"
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
              <!-- /Page List -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <pages-modal></pages-modal>
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
    title: "Pages",
    dataIndex: "Pages",
    key: "Pages",
    sorter: {
      compare: (a, b) => {
        a = a.Pages.toLowerCase();
        b = b.Pages.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Page Slug",
    dataIndex: "PageSlug",
    sorter: {
      compare: (a, b) => {
        a = a.PageSlug.toLowerCase();
        b = b.PageSlug.toLowerCase();
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
const data = [
  {
    key: 1,
    Pages: "Home",
    PageSlug: "home",
    Status: "Active",
    Class: "badge badge-pill badge-status bg-success",
  },
  {
    key: 2,
    Pages: "About Us",
    PageSlug: "about-us",
    Status: "Inactive",
    Class: "badge badge-pill badge-status bg-danger",
  },
  {
    key: 3,
    Pages: "FAQ",
    PageSlug: "faq",
    Status: "Active",
    Class: "badge badge-pill badge-status bg-success",
  },
  {
    key: 4,
    Pages: "Categories",
    PageSlug: "categories",
    Status: "Active",
    Class: "badge badge-pill badge-status bg-success",
  },
  {
    key: 5,
    Pages: "Terms & Conditions",
    PageSlug: "terms-conditions",
    Status: "Active",
    Class: "badge badge-pill badge-status bg-success",
  },
  {
    key: 6,
    Pages: "Privacy Policy",
    PageSlug: "privacy policy",
    Status: "Active",
    Class: "badge badge-pill badge-status bg-success",
  },
  {
    key: 7,
    Pages: "Contact US",
    PageSlug: "contact-us",
    Status: "Active",
    Class: "badge badge-pill badge-status bg-success",
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
      title: "Pages",
      data,
      columns,
      rowSelection,
    };
  },
};
</script>

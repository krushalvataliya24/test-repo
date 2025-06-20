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
                      placeholder="Search Countries"
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
                      data-bs-target="#add_country"
                      ><i class="ti ti-square-rounded-plus me-2"></i>Add Country</a
                    >
                  </div>
                </div>
              </div>
              <!-- /Search -->
            </div>
            <!-- /Search -->
            <div class="card-body">
              <!-- Filter -->
              <countires-filter></countires-filter>
              <!-- /Filter -->

              <!-- Countries List -->
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
                    <template v-else-if="column.key === 'CountryName'">
                      <a href="javascript:void(0);" class="table-imgname flag-image"
                        ><span class="location-flag-img"
                          ><img
                            :src="require(`@/assets/img/flags/${record.Image}`)"
                            class="img-fluid"
                            alt="img" /></span
                        ><span>{{ record.CountryName }}</span></a
                      >
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
                            data-bs-target="#edit_country"
                            ><i class="ti ti-edit text-blue"></i> Edit</a
                          ><a
                            class="dropdown-item"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#delete_country"
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
              <!-- /Countries List -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <countires-modal></countires-modal>
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
    title: "Country Code",
    dataIndex: "CountryCode",
    key: "CountryCode",
    sorter: {
      compare: (a, b) => {
        a = a.CountryCode.toLowerCase();
        b = b.CountryCode.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Country ID",
    dataIndex: "CountryID",
    sorter: {
      compare: (a, b) => {
        a = a.CountryID.toLowerCase();
        b = b.CountryID.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Country Name",
    dataIndex: "CountryName",
    key: "CountryName",
    sorter: {
      compare: (a, b) => {
        a = a.CountryName.toLowerCase();
        b = b.CountryName.toLowerCase();
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
    Image: "as.png",
    CountryCode: "AS",
    CountryID: "684",
    CountryName: "American Samoa (+684)",
    Action: "Edit Delete",
  },
  {
    key: 2,
    Image: "ad.png",
    CountryCode: "AD",
    CountryID: "376",
    CountryName: "Andorra (+376)",
    Action: "Edit Delete",
  },
  {
    key: 3,
    Image: "ao.png",
    CountryCode: "AO",
    CountryID: "244",
    CountryName: "Angalo (+244)",
    Action: "Edit Delete",
  },
  {
    key: 4,
    Image: "ai.png",
    CountryCode: "AI",
    CountryID: "1264",
    CountryName: "Anguilla (+1264)",
    Action: "Edit Delete",
  },
  {
    key: 5,
    Image: "qa.png",
    CountryCode: "AQ",
    CountryID: "672",
    CountryName: "Antarctica (+672)",
    Action: "Edit Delete",
  },
  {
    key: 6,
    Image: "ag.png",
    CountryCode: "AG",
    CountryID: "1268",
    CountryName: "Antigua & Barbuda (+1268)",
    Action: "Edit Delete",
  },
  {
    key: 7,
    Image: "ar.png",
    CountryCode: "AR",
    CountryID: "54",
    CountryName: "Argentina (+54)",
    Action: "Edit Delete",
  },
  {
    key: 8,
    Image: "au.png",
    CountryCode: "AU",
    CountryID: "61",
    CountryName: "Australia (+61)",
    Action: "Edit Delete",
  },
  {
    key: 9,
    Image: "at.png",
    CountryCode: "AT",
    CountryID: "43",
    CountryName: "Austria (+43)",
    Action: "Edit Delete",
  },
  {
    key: 10,
    Image: "az.png",
    CountryCode: "AZ",
    CountryID: "994",
    CountryName: "Azerbaijan (+994)",
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
      title: "Countries",
      data,
      columns,
      rowSelection,
    };
  },
};
</script>

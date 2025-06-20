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
                    <input type="text" class="form-control" placeholder="Search States" />
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
                      data-bs-target="#add_state"
                      ><i class="ti ti-square-rounded-plus me-2"></i>Add State</a
                    >
                  </div>
                </div>
              </div>
              <!-- /Search -->
            </div>
            <!-- /Search -->
            <div class="card-body">
              <!-- Filter -->
              <states-filter></states-filter>
              <!-- /Filter -->

              <!-- State List -->
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
                            data-bs-target="#edit_state"
                            ><i class="ti ti-edit text-blue"></i> Edit</a
                          ><a
                            class="dropdown-item"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#delete_state"
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
              <!-- /State List -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <states-modal></states-modal>
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
    title: "State Name",
    dataIndex: "StateName",
    key: "StateName",
    sorter: {
      compare: (a, b) => {
        a = a.StateName.toLowerCase();
        b = b.StateName.toLowerCase();
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
    CountryName: "American Samosa(+684)",
    StateName: "Swains Island",
  },
  {
    key: 2,
    Image: "ad.png",
    CountryCode: "AD",
    CountryName: "Andorra(+376)",
    StateName: "Andorra la Vella",
  },
  {
    key: 3,
    Image: "ao.png",
    CountryCode: "AO",
    CountryName: "Angola(+244)",
    StateName: "Benguella",
  },
  {
    key: 4,
    Image: "ai.png",
    CountryCode: "AI",
    CountryName: "Angulila(+1264)",
    StateName: "The Valley",
  },
  {
    key: 5,
    Image: "qa.png",
    CountryCode: "AQ",
    CountryName: "Antartica(+672)",
    StateName: "Victoria Land",
  },
  {
    key: 6,
    Image: "ag.png",
    CountryCode: "AG",
    CountryName: "Antigua & Barbuda(+1268)",
    StateName: "Saint Paul",
  },
  {
    key: 7,
    Image: "ar.png",
    CountryCode: "AR",
    CountryName: "Argentina(+54)",
    StateName: "Santa Fe",
  },
  {
    key: 8,
    Image: "au.png",
    CountryCode: "AU",
    CountryName: "Australia(+61)",
    StateName: "Queensland",
  },
  {
    key: 9,
    Image: "at.png",
    CountryCode: "AT",
    CountryName: "Austria(+43)",
    StateName: "Tyrol",
  },
  {
    key: 10,
    Image: "az.png",
    CountryCode: "AZ",
    CountryName: "Azerbaijan(+994)",
    StateName: "Karabakh",
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
      title: "States",
      data,
      columns,
      rowSelection,
    };
  },
};
</script>

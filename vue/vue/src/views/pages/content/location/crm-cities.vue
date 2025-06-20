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
                    <input type="text" class="form-control" placeholder="Search Cities" />
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
                      data-bs-target="#add_city"
                      ><i class="ti ti-square-rounded-plus me-2"></i>Add City</a
                    >
                  </div>
                </div>
              </div>
              <!-- /Search -->
            </div>
            <!-- /Search -->
            <div class="card-body">
              <!-- Filter -->
              <cities-filter></cities-filter>
              <!-- /Filter -->

              <!-- City List -->
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
                            data-bs-target="#edit_city"
                            ><i class="ti ti-edit text-blue"></i> Edit</a
                          ><a
                            class="dropdown-item"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#delete_city"
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
              <!-- /City List -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <cities-modal></cities-modal>
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
    title: "City Name",
    dataIndex: "CityName",
    key: "CityName",
    sorter: {
      compare: (a, b) => {
        a = a.CityName.toLowerCase();
        b = b.CityName.toLowerCase();
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
    CountryName: "American Samosa(+684)",
    Image: "as.png",
    StateName: "Swains Island",
    CityName: "Gandzasar",
  },
  {
    key: 2,
    CountryName: "Andorra(+376)",
    Image: "ad.png",
    StateName: "Andorra la Vella",
    CityName: "Escaldes-Engordany",
  },
  {
    key: 3,
    CountryName: "Angola(+244)",
    Image: "ao.png",
    StateName: "Benguella",
    CityName: "Chissamba",
  },
  {
    key: 4,
    CountryName: "Angulila(+1264)",
    Image: "ai.png",
    StateName: "The Valley",
    CityName: "Illinois",
  },
  {
    key: 5,
    CountryName: "Antartica(+672)",
    Image: "qa.png",
    StateName: "Victoria Land",
    CityName: "Melbourne",
  },
  {
    key: 6,
    CountryName: "Antigua & Barbuda(+1268)",
    Image: "ag.png",
    StateName: "Saint Paul",
    CityName: "Maplewood",
  },
  {
    key: 7,
    CountryName: "Argentina(+54)",
    Image: "ar.png",
    StateName: "Santa Fe",
    CityName: "Rosario",
  },
  {
    key: 8,
    CountryName: "Australia(+61)",
    Image: "au.png",
    StateName: "Queensland",
    CityName: "Atherton",
  },
  {
    key: 9,
    CountryName: "Austria(+43)",
    Image: "at.png",
    StateName: "Tyrol",
    CityName: "Mayrhofen",
  },
  {
    key: 10,
    CountryName: "Azerbaijan(+994)",
    Image: "az.png",
    StateName: "Karabakh",
    CityName: "Askeran",
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
      title: "Cities",
      data,
      columns,
      rowSelection,
    };
  },
};
</script>

<template>
  <layouts-header></layouts-header>
  <layouts-sidebar></layouts-sidebar>
  <!-- Page Wrapper -->
  <div class="page-wrapper">
    <div class="content">
      <!-- Breadcrumb -->
      <div
        class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3"
      >
        <breadcrumb :title="title" :text="text" :text1="text1" />
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
          <div class="dropdown">
            <a
              href="javascript:void(0);"
              class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
              data-bs-toggle="dropdown"
            >
              <i class="ti ti-file-export me-2"></i>
              Export
            </a>
            <ul class="dropdown-menu dropdown-menu-end p-3">
              <li>
                <a href="javascript:void(0);" class="dropdown-item rounded-1"
                  ><i class="ti ti-file-type-pdf me-1"></i>Export as PDF</a
                >
              </li>
              <li>
                <a href="javascript:void(0);" class="dropdown-item rounded-1"
                  ><i class="ti ti-file-type-xls me-1"></i>Export as Excel
                </a>
              </li>
            </ul>
          </div>
          <div class="ms-2 mb-0 head-icons">
            <a
              href="javascript:void(0);"
              class=""
              data-bs-toggle="tooltip"
              data-bs-placement="top"
              data-bs-original-title="Collapse"
              id="collapse-header"
              @click="toggleHeader"
            >
              <i class="ti ti-chevrons-up"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="card">
        <div
          class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3"
        >
          <h4>Projects</h4>
          <div class="d-flex align-items-center flex-wrap row-gap-3">
            <div class="avatar-list-stacked avatar-group-sm me-3">
              <span class="avatar avatar-rounded">
                <img
                  class="border border-white"
                  src="@/assets/img/profiles/avatar-19.jpg"
                  alt="img"
                />
              </span>
              <span class="avatar avatar-rounded">
                <img
                  class="border border-white"
                  src="@/assets/img/profiles/avatar-22.jpg"
                  alt="img"
                />
              </span>
              <span class="avatar avatar-rounded">
                <img
                  class="border border-white"
                  src="@/assets/img/profiles/avatar-16.jpg"
                  alt="img"
                />
              </span>
              <span class="avatar avatar-rounded bg-primary fs-12"> 1+ </span>
            </div>
            <div class="d-flex align-items-center me-3">
              <p class="mb-0 me-3 pe-3 border-end fs-14">
                Total Task : <span class="text-dark"> 55 </span>
              </p>
              <p class="mb-0 me-3 pe-3 border-end fs-14">
                Pending : <span class="text-dark"> 15 </span>
              </p>
              <p class="mb-0 fs-14">Completed : <span class="text-dark"> 40 </span></p>
            </div>
            <div class="input-icon-start position-relative">
              <span class="input-icon-addon">
                <i class="ti ti-search"></i>
              </span>
              <input type="text" class="form-control" placeholder="Search Project" />
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-4">
              <div class="d-flex align-items-center flex-wrap row-gap-3 mb-3">
                <h6 class="me-2">Priority</h6>
                <ul
                  class="nav nav-pills border d-inline-flex p-1 rounded bg-light todo-tabs"
                  id="pills-tab"
                  role="tablist"
                >
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link btn btn-sm btn-icon py-3 d-flex align-items-center justify-content-center w-auto active"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-home"
                      type="button"
                      role="tab"
                      aria-selected="true"
                    >
                      All
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link btn btn-sm btn-icon py-3 d-flex align-items-center justify-content-center w-auto"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-contact"
                      type="button"
                      role="tab"
                      aria-selected="false"
                    >
                      High
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link btn btn-sm btn-icon py-3 d-flex align-items-center justify-content-center w-auto"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-medium"
                      type="button"
                      role="tab"
                      aria-selected="false"
                    >
                      Medium
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link btn btn-sm btn-icon py-3 d-flex align-items-center justify-content-center w-auto"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-low"
                      type="button"
                      role="tab"
                      aria-selected="false"
                    >
                      Low
                    </button>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-8">
              <div
                class="d-flex align-items-center justify-content-lg-end flex-wrap row-gap-3 mb-3"
              >
                <div class="dropdown me-2">
                  <a
                    href="javascript:void(0);"
                    class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                    data-bs-toggle="dropdown"
                  >
                    Clients
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end p-3">
                    <li>
                      <a href="javascript:void(0);" class="dropdown-item rounded-1"
                        >Clients</a
                      >
                    </li>
                    <li>
                      <a href="javascript:void(0);" class="dropdown-item rounded-1"
                        >Sophie</a
                      >
                    </li>
                    <li>
                      <a href="javascript:void(0);" class="dropdown-item rounded-1"
                        >Cameron</a
                      >
                    </li>
                    <li>
                      <a href="javascript:void(0);" class="dropdown-item rounded-1"
                        >Doris</a
                      >
                    </li>
                  </ul>
                </div>
                <div class="input-icon w-120 position-relative me-2">
                  <span class="input-icon-addon">
                    <i class="ti ti-calendar text-gray-9"></i>
                  </span>
                  <date-picker
                    v-model="startdate"
                    class="form-control datetimepicker"
                    placeholder="dd/mm/yyyy"
                    :editable="true"
                    :clearable="false"
                    :input-format="dateFormat"
                  />
                </div>
                <div class="input-icon w-120 position-relative me-2">
                  <span class="input-icon-addon">
                    <i class="ti ti-calendar text-gray-9"></i>
                  </span>
                  <date-picker
                    v-model="startdateOne"
                    class="form-control datetimepicker"
                    placeholder="dd/mm/yyyy"
                    :editable="true"
                    :clearable="false"
                    :input-format="dateFormat"
                  />
                </div>
                <div class="dropdown me-2">
                  <a
                    href="javascript:void(0);"
                    class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                    data-bs-toggle="dropdown"
                  >
                    Select Status
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end p-3">
                    <li>
                      <a href="javascript:void(0);" class="dropdown-item rounded-1"
                        >Inprogress</a
                      >
                    </li>
                    <li>
                      <a href="javascript:void(0);" class="dropdown-item rounded-1"
                        >On-hold</a
                      >
                    </li>
                    <li>
                      <a href="javascript:void(0);" class="dropdown-item rounded-1"
                        >Completed</a
                      >
                    </li>
                  </ul>
                </div>
                <div class="d-flex align-items-center border p-2 rounded">
                  <span class="d-inline-flex me-2">Sort By : </span>
                  <div class="dropdown">
                    <a
                      href="javascript:void(0);"
                      class="dropdown-toggle btn btn-white d-inline-flex align-items-center border-0 bg-transparent p-0 text-dark"
                      data-bs-toggle="dropdown"
                    >
                      Created Date
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end p-3">
                      <li>
                        <a href="javascript:void(0);" class="dropdown-item rounded-1"
                          >Created Date</a
                        >
                      </li>
                      <li>
                        <a href="javascript:void(0);" class="dropdown-item rounded-1"
                          >Last 7 Days</a
                        >
                      </li>
                      <li>
                        <a href="javascript:void(0);" class="dropdown-item rounded-1"
                          >Due Date</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-content" id="pills-tabContent">
            <all-kanban></all-kanban>

            <high-kanban></high-kanban>

            <medium-kanban></medium-kanban>

            <low-kanban></low-kanban>
          </div>
        </div>
      </div>
    </div>
    <div
      class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3"
    >
      <p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
      <p>
        Designed &amp; Developed By
        <a href="javascript:void(0);" class="text-primary">Dreams</a>
      </p>
    </div>
  </div>
  <!-- /Page Wrapper -->
</template>
<script>
import { ref } from "vue";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
export default {
  data() {
    return {
      startdate: currentDate,
      startdateOne: currentDateOne,
      dateFormat: "dd-MM-yyyy",
      title: "Kanban View",
      text: "Applications",
      text1: "Kanban View",
    };
  },
  methods: {
    toggleHeader() {
      document.getElementById("collapse-header").classList.toggle("active");
      document.body.classList.toggle("header-collapse");
    },
  },
};
</script>

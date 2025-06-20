<template>
  <div class="card">
    <div class="card-header border-0 pb-0">
      <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
        <h4><i class="ti ti-grip-vertical me-1"></i>Recently Added Companies</h4>
        <div class="d-flex align-items-center flex-wrap row-gap-2">
          <div class="dropdown me-2">
            <a
              class="dropdown-toggle"
              data-bs-toggle="dropdown"
              href="javascript:void(0);"
            >
              Last 30 Days
            </a>
            <div class="dropdown-menu dropdown-menu-end">
              <a href="javascript:void(0);" class="dropdown-item"> Last 30 Days </a>
              <a href="javascript:void(0);" class="dropdown-item"> Last 15 Days </a>
              <a href="javascript:void(0);" class="dropdown-item"> Last 7 Days </a>
            </div>
          </div>
          <a
            href="#"
            class="btn btn-primary"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvas_add_2"
            ><i class="ti ti-square-rounded-plus me-2"></i> Add Company</a
          >
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table custom-table mb-0" id="analytic-company">
          <thead>
            <tr>
              <th>Company Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Created at</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="item in AnalyticsCompany" :key="item.id">
              <td>
                <h2 class="d-flex align-items-center">
                  <router-link
                    to="/crm/company-details"
                    class="avatar avatar-sm border me-2"
                    ><img
                      class="w-auto h-auto"
                      :src="require(`@/assets/img/icons/${item.lead_img}`)"
                      alt="User Image" /></router-link
                  ><router-link to="/crm/company-details">{{item.lead_name}}</router-link>
                </h2>
              </td>
              <td>{{ item.email }}</td>
              <td>{{ item.phone }}</td>
              <td>{{ item.date }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
import AnalyticsCompany from "@/assets/json/analytic-company.json";
export default {
  data() {
    return {
      AnalyticsCompany: AnalyticsCompany,
    };
  },
};
</script>

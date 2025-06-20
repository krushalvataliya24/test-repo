<template>
  <div class="card">
    <div class="card-header border-0 pb-0">
      <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
        <h4><i class="ti ti-grip-vertical me-1"></i>Recently Created Leads</h4>
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
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table custom-table mb-0" id="analytic-lead">
          <thead>
            <tr>
              <th>Lead Name</th>
              <th>Company Name</th>
              <th>Phone</th>
              <th>Lead Status</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="item in AnalyticsLeads" :key="item.id">
              <td>{{ item.name }}</td>
              <td>
                <h2 class="d-flex align-items-center">
                  <router-link
                    to="/crm/leads-details"
                    class="avatar avatar-sm border me-2"
                    ><img
                      class="w-auto h-auto"
                      :src="require(`@/assets/img/icons/${item.lead_img}`)"
                      alt="User Image" /></router-link
                  ><router-link to="/crm/leads-details" class="d-flex flex-column"
                    >{{ item.lead_name
                    }}<span class="text-default">{{ item.lead_city }}</span></router-link
                  >
                </h2>
              </td>
              <td>{{ item.phone }}</td>
              <td>
                <span :class="item.statusclass">{{ item.status }}</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
import AnalyticsLeads from "@/assets/json/analytic-lead.json";
export default {
  data() {
    return {
      AnalyticsLeads: AnalyticsLeads,
    };
  },
};
</script>

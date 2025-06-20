<template>
  <div class="card">
    <div class="card-header border-0 pb-0">
      <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
        <h4><i class="ti ti-grip-vertical me-1"></i>Recently Created Deals</h4>
        <div class="d-flex align-items-center flex-wrap row-gap-2">
          <div class="dropdown">
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
        <table class="table table-nowrap custom-table mb-0" id="analytic-deal">
          <thead>
            <tr>
              <th>Deal Name</th>
              <th>Stage</th>
              <th>Deal Value</th>
              <th>Probability</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="item in AnalyticsDeals" :key="item.id">
              <td>{{ item.name }}</td>
              <td>{{ item.stage }}</td>
              <td>{{ item.value }}</td>
              <td>{{ item.probability }}</td>
              <td>
                <span :class="item.statusclass"> {{ item.status }}</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
import AnalyticsDeals from "@/assets/json/analytic-deal.json";
export default {
  data() {
    return {
      AnalyticsDeals: AnalyticsDeals,
    };
  },
};
</script>

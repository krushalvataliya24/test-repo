<template>
  <div class="card">
    <div class="card-header border-0 pb-0">
      <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
        <h4><i class="ti ti-grip-vertical me-1"></i>Deals By Stage</h4>
        <div class="d-flex align-items-center flex-wrap row-gap-2">
          <div class="dropdown me-2">
            <a
              class="dropdown-toggle"
              data-bs-toggle="dropdown"
              href="javascript:void(0);"
            >
              Sales Pipeline
            </a>
            <div class="dropdown-menu dropdown-menu-end">
              <a href="javascript:void(0);" class="dropdown-item"> Marketing Pipeline </a>
              <a href="javascript:void(0);" class="dropdown-item"> Sales Pipeline </a>
              <a href="javascript:void(0);" class="dropdown-item"> Email </a>
              <a href="javascript:void(0);" class="dropdown-item"> Chats </a>
              <a href="javascript:void(0);" class="dropdown-item"> Operational </a>
            </div>
          </div>
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
      <div id="deals-chart">
        <apexchart
          type="bar"
          height="275"
          :options="dealsChatrt.chart"
          :series="dealsChatrt.series"
        ></apexchart>
      </div>
    </div>
  </div>
</template>

<script>
import { dealsChatrt } from "./data";
export default {
  data() {
    return {
      dealsChatrt: dealsChatrt,
    };
  },
};
</script>

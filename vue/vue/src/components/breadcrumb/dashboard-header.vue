<template>
  <div class="page-header">
    <div class="row align-items-center">
      <div class="col-md-4">
        <h3 class="page-title">{{ title }}</h3>
      </div>
      <div class="col-md-8 float-end ms-auto">
        <div class="d-flex title-head">
          <div class="daterange-picker d-flex align-items-center justify-content-center">
            <div class="form-sort me-2">
              <i class="ti ti-calendar"></i>
              <input type="text" class="form-control date-range bookingrange" ref="dateRangeInput" />
            </div>
            <div class="head-icons mb-0">
              <a href="javascript:void(0);" @click="toggleLoad" data-bs-toggle="tooltip" data-bs-placement="top"
                data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
              <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                data-bs-original-title="Collapse" @click="toggleHeader" id="collapse-header"><i
                  class="ti ti-chevrons-up"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import "daterangepicker/daterangepicker.css";
import "daterangepicker/daterangepicker.js";
import { ref } from "vue";
import { onMounted } from "vue";
import moment from "moment";
import DateRangePicker from "daterangepicker";

export default {
  data() {
    return {};
  },
  methods: {
    toggleHeader() {
      document.getElementById("collapse-header").classList.toggle("active");
      document.body.classList.toggle("header-collapse");
    },
    toggleLoad(){
      location.reload()
    }
  },
  props: {
    title: String,
  },
  setup() {
    const dateRangeInput = ref(null);

    // Move the function declaration outside of the onMounted callback
    function booking_range(start, end) {
      return start.format("M/D/YYYY") + " - " + end.format("M/D/YYYY");
    }

    onMounted(() => {
      if (dateRangeInput.value) {
        const start = moment().subtract(6, "days");
        const end = moment();

        new DateRangePicker(
          dateRangeInput.value,
          {
            startDate: start,
            endDate: end,
            ranges: {
              Today: [moment(), moment()],
              Yesterday: [moment().subtract(1, "days"), moment().subtract(1, "days")],
              "Last 7 Days": [moment().subtract(6, "days"), moment()],
              "Last 30 Days": [moment().subtract(29, "days"), moment()],
              "This Month": [moment().startOf("month"), moment().endOf("month")],
              "Last Month": [
                moment().subtract(1, "month").startOf("month"),
                moment().subtract(1, "month").endOf("month"),
              ],
            },
          },
          booking_range
        );

        booking_range(start, end);
      }
    });

    return {
      dateRangeInput,
    };
  },

};
</script>

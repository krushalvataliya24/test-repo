<template>
  <layouts-header></layouts-header>
  <layouts-sidebar></layouts-sidebar>

  <!-- Page Wrapper -->
  <div class="page-wrapper">
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- Page Header -->
          <page-header :title="title" />
          <!-- /Page Header -->
        </div>
      </div>

      <div class="row">
        <div class="col-xl-6">
          <analytics-contacts></analytics-contacts>

          <won-chart></won-chart>

          <analytics-deals></analytics-deals>

          <lost-chart></lost-chart>

          <leads-chart></leads-chart>

          <analytics-companies></analytics-companies>
        </div>
        <div class="col-xl-6">
          <deals-chart></deals-chart>

          <analytics-activity></analytics-activity>

          <lost-charts></lost-charts>

          <analytics-leads></analytics-leads>

          <analytics-campagin></analytics-campagin>
        </div>
      </div>
    </div>
  </div>
  <!-- /Page Wrapper -->
  <analytics-list-modal></analytics-list-modal>
</template>

<script>
export default {
  data() {
    return {
      title: "Analytics",
    };
  },
};
</script>

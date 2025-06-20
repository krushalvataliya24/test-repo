<template>
  <div class="col-xl-3 col-lg-12 theiaStickySidebar">
    <!-- Settings Sidebar -->
    <div class="card">
      <div class="card-body">
        <div class="settings-sidebar">
          <h4 class="fw-semibold mb-3">App Settings</h4>
          <div class="list-group list-group-flush settings-sidebar">
            <router-link to="/app-settings/invoice-settings" class="fw-medium"
              >Invoice Settings</router-link
            >
            <router-link to="/app-settings/printers" class="fw-medium"
              >Printer</router-link
            >
            <router-link to="/app-settings/custom-fields" class="fw-medium"
              >Custom Fields</router-link
            >
          </div>
        </div>
      </div>
    </div>
    <!-- /Settings Sidebar -->
  </div>
</template>

<template>
  <div class="col-xl-3 col-lg-12 theiaStickySidebar">
    <!-- Settings Sidebar -->
    <div class="card">
      <div class="card-body">
        <div class="settings-sidebar">
          <h4 class="fw-semibold mb-3">Other Settings</h4>
          <div class="list-group list-group-flush settings-sidebar">
            <router-link to="/other-settings/storage" class="fw-medium"
              >Storage</router-link
            >
            <router-link to="/other-settings/ban-ip-address" class="fw-medium"
              >Ban IP Address</router-link
            >
          </div>
        </div>
      </div>
    </div>
    <!-- /Settings Sidebar -->
  </div>
</template>

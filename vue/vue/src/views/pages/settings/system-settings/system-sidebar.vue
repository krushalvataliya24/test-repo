<template>
  <div class="col-xl-3 col-lg-12 theiaStickySidebar">
    <!-- Settings Sidebar -->
    <div class="card">
      <div class="card-body">
        <div class="settings-sidebar">
          <h4 class="fw-semibold mb-3">Other Settings</h4>
          <div class="list-group list-group-flush settings-sidebar">
            <router-link to="/system-settings/email-settings" class="fw-medium"
              >Email Settings</router-link
            >
            <router-link to="/system-settings/sms-gateways" class="fw-medium"
              >SMS Gateways</router-link
            >
            <router-link to="/system-settings/gdpr-cookies" class="fw-medium"
              >GDPR Cookies</router-link
            >
          </div>
        </div>
      </div>
    </div>
    <!-- /Settings Sidebar -->
  </div>
</template>

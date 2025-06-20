<template>
  <div class="col-xl-3 col-lg-12 theiaStickySidebar">
    <!-- Settings Sidebar -->
    <div class="card">
      <div class="card-body">
        <div class="settings-sidebar">
          <h4 class="fw-semibold mb-3">Website Settings</h4>
          <div class="list-group list-group-flush settings-sidebar">
            <router-link to="/website-settings/company-settings" class="fw-medium"
              >Company Settings</router-link
            >
            <router-link to="/website-settings/localization" class="fw-medium"
              >Localization</router-link
            >
            <router-link to="/website-settings/prefixes" class="fw-medium"
              >Prefixes</router-link
            >
            <router-link to="/website-settings/preference" class="fw-medium"
              >Preference</router-link
            >
            <router-link to="/website-settings/appearance" class="fw-medium"
              >Appearance</router-link
            >
            <router-link to="/website-settings/language" class="fw-medium"
              >Language</router-link
            >
          </div>
        </div>
      </div>
    </div>
    <!-- /Settings Sidebar -->
  </div>
</template>

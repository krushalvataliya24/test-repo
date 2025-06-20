<template>
  <div class="col-xl-3 col-lg-12 theiaStickySidebar">
    <!-- Settings Sidebar -->
    <div class="card">
      <div class="card-body">
        <div class="settings-sidebar">
          <h4 class="fw-semibold mb-3">General Settings</h4>
          <div class="list-group list-group-flush settings-sidebar">
            <router-link to="/settings/profile" class="fw-medium">Profile</router-link>
            <router-link to="/settings/security" class="fw-medium">Security</router-link>
            <router-link to="/settings/notifications" class="fw-medium"
              >Notifications</router-link
            >
            <router-link to="/settings/connected-apps" class="fw-medium"
              >Connected Apps</router-link
            >
          </div>
        </div>
      </div>
    </div>
    <!-- /Settings Sidebar -->
  </div>
</template>

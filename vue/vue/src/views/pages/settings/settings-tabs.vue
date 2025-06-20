<template>
  <div class="card">
    <div class="card-body pb-0 pt-2">
      <ul class="nav nav-tabs nav-tabs-bottom">
        <li class="nav-item me-3">
          <router-link
            v-bind:class="{
              'nav-link px-0': true,
              active:
                currentPath.includes('security') ||
                currentPath.includes('notifications') ||
                currentPath.includes('connected-apps'),
            }"
            to="/settings/profile"
          >
            <i class="ti ti-settings-cog me-2"></i> General Settings
          </router-link>
        </li>
        <li class="nav-item me-3">
          <router-link
            v-bind:class="{
              'nav-link px-0': true,
              active:
                currentPath.includes('localization') ||
                currentPath.includes('prefixes') ||
                currentPath.includes('preference') ||
                currentPath.includes('appearance') ||
                currentPath.includes('language') ||
                currentPath.includes('language-web'),
            }"
            to="/website-settings/company-settings"
          >
            <i class="ti ti-world-cog me-2"></i> Website Settings
          </router-link>
        </li>
        <li class="nav-item me-3">
          <router-link
            v-bind:class="{
              'nav-link px-0': true,
              active:
                currentPath.includes('printers') || currentPath.includes('custom-fields'),
            }"
            to="/app-settings/invoice-settings"
          >
            <i class="ti ti-apps me-2"></i> App Settings
          </router-link>
        </li>
        <li class="nav-item me-3">
          <router-link
            v-bind:class="{
              'nav-link px-0': true,
              active:
                currentPath.includes('sms-gateways') ||
                currentPath.includes('gdpr-cookies'),
            }"
            to="/system-settings/email-settings"
          >
            <i class="ti ti-device-laptop me-2"></i> System Settings
          </router-link>
        </li>
        <li class="nav-item me-3">
          <router-link
            v-bind:class="{
              'nav-link px-0': true,
              active:
                currentPath.includes('bank-accounts') ||
                currentPath.includes('tax-rates') ||
                currentPath.includes('currencies'),
            }"
            to="/financial-settings/payment-gateways"
          >
            <i class="ti ti-moneybag me-2"></i> Financial Settings
          </router-link>
        </li>
        <li class="nav-item">
          <router-link
            v-bind:class="{
              'nav-link px-0': true,
              active: currentPath.includes('ban-ip-address'),
            }"
            to="/other-settings/storage"
          >
            <i class="ti ti-flag-cog me-2"></i> Other Settings
          </router-link>
        </li>
      </ul>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      currentPath: this.$route.path,
    };
  },
};
</script>

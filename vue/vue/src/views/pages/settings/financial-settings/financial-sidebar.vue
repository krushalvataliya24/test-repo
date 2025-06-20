<template>
  <div class="col-xl-3 col-lg-12 theiaStickySidebar">
    <!-- Settings Sidebar -->
    <div class="card">
      <div class="card-body">
        <div class="settings-sidebar">
          <h4 class="fw-semibold mb-3">Financial Settings</h4>
          <div class="list-group list-group-flush settings-sidebar">
            <router-link to="/financial-settings/payment-gateways" class="fw-medium"
              >Payment Gateways</router-link
            >
            <router-link to="/financial-settings/bank-accounts" class="fw-medium"
              >Bank Accounts</router-link
            >
            <router-link to="/financial-settings/tax-rates" class="fw-medium"
              >Tax Rates</router-link
            >
            <router-link to="/financial-settings/currencies" class="fw-medium"
              >Currencies</router-link
            >
          </div>
        </div>
      </div>
    </div>
    <!-- /Settings Sidebar -->
  </div>
</template>

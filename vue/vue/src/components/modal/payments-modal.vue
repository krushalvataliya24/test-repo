<template>
  <!-- Preview Project -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
    <div class="offcanvas-header border-bottom justify-content-between">
      <h4>Payment for Invoice<span class="text-purple ms-2">#274738</span></h4>
      <div class="d-flex align-items-center">
        <div class="toggle-header-popup">
          <div class="dropdown table-action me-2">
            <a
              href="#"
              class="btn btn-dropdowns dropdown-toggle"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Download
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="#"> Download </a>
              <a class="dropdown-item" href="#"> Download PDF </a>
            </div>
          </div>
        </div>
        <button
          type="button"
          class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        >
          <i class="ti ti-x"></i>
        </button>
      </div>
    </div>
    <div class="offcanvas-body p-4">
      <form @submit.prevent="submitForm">
        <div class="card">
          <div class="card-body">
            <div class="details-propsal">
              <h4>Proposal From & To</h4>
              <div class="row">
                <div class="col-lg-6 col-12">
                  <div class="proposal-to">
                    <h3>CRMS</h3>
                    <span>3338 Marcus Street </span>
                    <span>Birmingham, AL 35211</span>
                    <span>Phone : +1 98789 78788 </span>
                    <span>Email : info@example.com</span>
                  </div>
                </div>
                <div class="col-lg-6 col-12">
                  <div class="proposal-to">
                    <h3>NovaWave LLC</h3>
                    <span>994 Martine Ranch Suite 900</span>
                    <span>Candacefort New Hampshire</span>
                    <span>Phone : +1 58478 74646</span>
                    <span>Email : info@example.net</span>
                  </div>
                </div>
              </div>
            </div>
            <hr />
            <div class="details-propsal details-propsals">
              <h4>Payment Details</h4>
              <ul>
                <li>
                  <h5>Payment Date</h5>
                  <h6>13 May 2024</h6>
                </li>
                <li>
                  <h5>Payment Method</h5>
                  <h6>Cash</h6>
                </li>
                <li>
                  <h5>Total Amount</h5>
                  <h6>$96</h6>
                </li>
              </ul>
            </div>
            <div class="details-propsal">
              <div class="d-flex align-items-center justify-content-between">
                <h4>Invoice Details</h4>
                <h6 class="d-flex">
                  <span class="text-danger"> Amount Due : </span> $100
                </h6>
              </div>
              <ul class="m-0 border-0">
                <li>
                  <h5>Invoice Number</h5>
                  <h6 class="mb-0">
                    <span class="badge badge-purple-light d-inline-flex">#1254057</span>
                  </h6>
                </li>
                <li>
                  <h5>Invoice Date</h5>
                  <h6 class="mb-0">13 May 2024</h6>
                </li>
                <li>
                  <h5>Invoice Amount</h5>
                  <h6 class="mb-0">$196</h6>
                </li>
                <li>
                  <h5>Payment Amount</h5>
                  <h6 class="mb-0">$96</h6>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- /Preview Project -->

  <!-- Delete Invoices -->
  <div class="modal custom-modal fade" id="delete_payments" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0 m-0 justify-content-end">
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <div class="success-message text-center">
            <div class="success-popup-icon">
              <i class="ti ti-trash-x"></i>
            </div>
            <h3>Remove Invoices?</h3>
            <p class="del-info">Are you sure you want to remove invoices you selected.</p>
            <div class="col-lg-12 text-center modal-btn">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <router-link
                to="/crm/invoices-list"
                class="btn btn-danger"
                data-bs-dismiss="modal"
                >Yes, Delete it</router-link
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Delete Invoices -->
</template>

<script>
export default {
  data() {
    return {};
  },
  methods: {
    submitForm() {
      this.$router.push("/crm/patments-list");
    },
  },
};
</script>

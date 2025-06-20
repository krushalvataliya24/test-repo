<template>
  <div class="modal custom-modal fade" id="download_report" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Download Report</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="mb-3">
              <label class="form-label"
                >File Type <span class="text-danger">*</span></label
              >
              <vue-select
                :options="Downcontact"
                id="downcontact"
                placeholder="Download as PDF"
              />
            </div>
            <div class="mb-3">
              <h5>Filters</h5>
            </div>
            <div class="mb-3">
              <label class="form-label"
                >File Type <span class="text-danger">*</span></label
              >
              <vue-select
                :options="Fieldscontact"
                id="fieldscontact"
                placeholder="All Fields"
              />
            </div>
            <div class="mb-3">
              <label class="form-label">Position<span class="text-danger">*</span></label>
              <vue-select
                :options="Positioncontact"
                id="positioncontact"
                placeholder="All Position"
              />
            </div>
            <div class="mb-3">
              <label class="form-label">Source<span class="text-danger">*</span></label>
              <vue-select
                :options="Sourcecontact"
                id="sourcecontact"
                placeholder="All Source"
              />
            </div>
            <div class="mb-3">
              <label class="form-label"
                >Select Year<span class="text-danger">*</span></label
              >
              <vue-select :options="Yearcontact" id="yearcontact" placeholder="2023" />
            </div>
            <div class="col-lg-12 text-end modal-btn">
              <button type="submit" class="btn btn-light" data-bs-dismiss="modal">
                Cancel
              </button>
              <button type="submit" class="btn btn-primary">Download Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      Downcontact: ["Download as PDF", "Download as Excel"],
      Fieldscontact: ["All Fields", "Name", "Position", "Company", "Industry", "Phone"],
      Positioncontact: [
        "All Position",
        "Installer",
        "Senior Manager",
        "Test Engineer",
        "UI /UX Designer",
      ],
      Sourcecontact: ["All Source", "Google", "Campaigns", "Referrals", "Paid Social"],
      Yearcontact: ["2023", "2022", "2021"],
    };
  },
};
</script>

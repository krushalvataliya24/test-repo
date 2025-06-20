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
                :options="DownDeal"
                id="downdeal"
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
                :options="FieldsDeal"
                id="fieldsdeal"
                placeholder="All Fields"
              />
            </div>
            <div class="mb-3">
              <label class="form-label">Position<span class="text-danger">*</span></label>
              <vue-select
                :options="PositionDeal"
                id="positiondeal"
                placeholder="All Position"
              />
            </div>
            <div class="mb-3">
              <label class="form-label">Source<span class="text-danger">*</span></label>
              <vue-select
                :options="SourceDeal"
                id="sourcedeal"
                placeholder="All Source"
              />
            </div>
            <div class="mb-3">
              <label class="form-label"
                >Select Year<span class="text-danger">*</span></label
              >
              <vue-select :options="YearDeal" id="yeardeal" placeholder="2023" />
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
      DownDeal: ["Download as PDF", "Download as Excel"],
      FieldsDeal: [
        "All Fields",
        "Name",
        "Position",
        "Owner",
        "Location",
        "Phone",
        "Date Created",
      ],
      PositionDeal: [
        "All Position",
        "Installer",
        "Senior Manager",
        "Test Engineer",
        "UI /UX Designer",
      ],
      SourceDeal: ["All Source", "Google", "Campaigns", "Referrals", "Paid Social"],
      YearDeal: ["2023", "2022", "2021"],
    };
  },
};
</script>

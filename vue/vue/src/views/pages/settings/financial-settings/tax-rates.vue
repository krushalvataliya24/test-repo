<template>
  <layouts-header></layouts-header>
  <layouts-sidebar></layouts-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- Page Header -->
          <page-header :title="title" />
          <!-- /Page Header -->

          <!-- Settings Menu -->
          <settings-tabs></settings-tabs>
          <!-- /Settings Menu -->

          <div class="row">
            <financial-sidebar></financial-sidebar>

            <div class="col-xl-9 col-lg-12">
              <!-- Settings Info -->
              <div class="card">
                <div class="card-body pb-0">
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <h4 class="fs-20">Tax Rates</h4>
                    <a
                      href="javascript:void(0)"
                      class="btn btn-sm btn-icon border rounded"
                      data-bs-toggle="modal"
                      data-bs-target="#add_tax"
                      ><i class="ti ti-plus"></i
                    ></a>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="mb-3">
                        <label class="col-form-label">VAT</label>
                        <div class="icon-form-end">
                          <a href="#" data-bs-toggle="modal" data-bs-target="#edit_tax">
                            <span class="form-icon"><i class="ti ti-edit"></i></span>
                          </a>
                          <input type="text" class="form-control" value="16%" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mb-3">
                        <label class="col-form-label">GST</label>
                        <div class="icon-form-end">
                          <a href="#" data-bs-toggle="modal" data-bs-target="#edit_tax">
                            <span class="form-icon"><i class="ti ti-edit"></i></span>
                          </a>
                          <input type="text" class="form-control" value="14%" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="mb-3">
                        <label class="col-form-label">HST</label>
                        <div class="icon-form-end">
                          <a href="#" data-bs-toggle="modal" data-bs-target="#edit_tax">
                            <span class="form-icon"><i class="ti ti-edit"></i></span>
                          </a>
                          <input type="text" class="form-control" value="12%" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Settings Info -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <tax-rates-modal></tax-rates-modal>
</template>
<script>
export default {
  data() {
    return {
      title: "Settings",
    };
  },
};
</script>

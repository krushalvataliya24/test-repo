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
            <website-sidebar></website-sidebar>

            <div class="col-xl-9 col-lg-12">
              <!-- Prefixes -->
              <div class="card">
                <div class="card-body">
                  <h4 class="fw-semibold mb-3">Prefixes</h4>
                  <form @submit.prevent="submitForm">
                    <div class="row">
                      <div class="col-md-3 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Products(SKU)</label>
                          <input type="text" class="form-control" value="SKU - " />
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Supplier</label>
                          <input type="text" class="form-control" value="SUP - " />
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Purchase</label>
                          <input type="text" class="form-control" value="PU - " />
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Purchase Return</label>
                          <input type="text" class="form-control" value="PR - " />
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Sales</label>
                          <input type="text" class="form-control" value="SA - " />
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Sales Return</label>
                          <input type="text" class="form-control" value="SR -  " />
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Customer</label>
                          <input type="text" class="form-control" value="CT - " />
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Expense</label>
                          <input type="text" class="form-control" value="EX - " />
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Stock Transfer</label>
                          <input type="text" class="form-control" value="ST -  " />
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Stock Adjustment</label>
                          <input type="text" class="form-control" value="SA -  " />
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Sales Order</label>
                          <input type="text" class="form-control" value="SO - " />
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Invoice</label>
                          <input type="text" class="form-control" value="INV -  " />
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Estimation</label>
                          <input type="text" class="form-control" value="EST - " />
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Transaction</label>
                          <input type="text" class="form-control" value="TRN - " />
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Employee</label>
                          <input type="text" class="form-control" value="EMP -  " />
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="mb-3">
                          <label class="form-label">Purchase Return</label>
                          <input type="text" class="form-control" value="PR -  " />
                        </div>
                      </div>
                    </div>
                    <div>
                      <a href="#" class="btn btn-light me-2">Cancel</a>
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /Prefixes -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      title: "Settings",
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/website-settings/prefixes");
    },
  },
};
</script>

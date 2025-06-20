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
                    <h4 class="fs-20">Bank Accounts</h4>
                    <a
                      href="javascript:void(0)"
                      class="btn btn-sm btn-icon rounded border"
                      data-bs-toggle="modal"
                      data-bs-target="#add_bank"
                      ><i class="ti ti-plus"></i
                    ></a>
                  </div>
                  <div class="row">
                    <!-- Bank Account -->
                    <div
                      v-for="(bank, index) in banks"
                      :key="index"
                      class="col-xxl-4 col-sm-6"
                    >
                      <div
                        :class="{ 'bank-box': true, active: bank.active }"
                        @click="makeActive(index)"
                      >
                        <div class="mb-4">
                          <h5 class="fw-semibold mb-1">{{ bank.name }}</h5>
                          <p class="fw-medium">{{ bank.cardNumber }}</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                          <div>
                            <h6 class="fw-medium mb-1">Holder Name</h6>
                            <p class="fs-12">{{ bank.holderName }}</p>
                          </div>
                          <div class="dropdown table-action">
                            <a
                              href="#"
                              class="action-icon"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                              ><i class="fa fa-ellipsis-v"></i
                            ></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a
                                class="dropdown-item"
                                href="#"
                                data-bs-toggle="modal"
                                data-bs-target="#edit_bank"
                                ><i class="fa-solid fa-pencil text-blue"></i> Edit</a
                              >
                              <a
                                class="dropdown-item"
                                href="#"
                                data-bs-toggle="modal"
                                data-bs-target="#delete_bank"
                                ><i class="fa-regular fa-trash-can text-danger"></i>
                                Delete</a
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /Bank Account -->
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
  <bank-modal></bank-modal>
</template>
<script>
export default {
  data() {
    return {
      title: "Settings",
      banks: [
        {
          name: "HDFC",
          cardNumber: "**** **** 4872",
          holderName: "Darlee Robertson",
          active: true,
        },
        {
          name: "SBI",
          cardNumber: "**** **** 2495",
          holderName: "Sharon Roy",
          active: false,
        },
        {
          name: "KVB",
          cardNumber: "**** **** 3948",
          holderName: "Vaughan",
          active: false,
        },
      ],
    };
  },
  methods: {
    makeActive(index) {
      this.banks.forEach((bank, i) => {
        bank.active = i === index;
      });
    },
  },
};
</script>

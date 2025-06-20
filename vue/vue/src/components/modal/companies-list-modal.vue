<template>
  <!-- Add Company -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Add New Company</h5>
      <button
        type="button"
        class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
        data-bs-dismiss="offcanvas"
        aria-label="Close"
      >
        <i class="ti ti-x"></i>
      </button>
    </div>
    <div class="offcanvas-body">
      <form @submit.prevent="submitForm">
        <div class="accordion" id="main_accordion">
          <!-- Basic Info -->
          <div class="accordion-item rounded mb-3">
            <div class="accordion-header">
              <a
                href="#"
                class="accordion-button accordion-custom-button bg-white rounded fw-medium text-dark"
                data-bs-toggle="collapse"
                data-bs-target="#basic"
              >
                <span class="avatar avatar-md rounded text-dark border me-2"
                  ><i class="ti ti-user-plus fs-20"></i
                ></span>
                Basic Info
              </a>
            </div>
            <div
              class="accordion-collapse collapse show"
              id="basic"
              data-bs-parent="#main_accordion"
            >
              <div class="accordion-body border-top">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                      <div class="profile-upload">
                        <div class="profile-upload-img">
                          <span><i class="ti ti-photo"></i></span>
                          <img
                            src="@/assets/img/profiles/avatar-20.jpg"
                            alt="img"
                            class="preview1"
                          />
                          <button type="button" class="profile-remove">
                            <i class="ti ti-x"></i>
                          </button>
                        </div>
                        <div class="profile-upload-content">
                          <label class="profile-upload-btn">
                            <i class="ti ti-file-broken"></i> Upload File
                            <input type="file" class="input-img" />
                          </label>
                          <p>JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label class="col-form-label">Company Name</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <div class="d-flex justify-content-between align-items-center">
                        <label class="col-form-label"
                          >Email <span class="text-danger">*</span></label
                        >
                        <div
                          class="status-toggle small-toggle-btn d-flex align-items-center"
                        >
                          <span class="me-2 label-text">Email Opt Out</span>
                          <input type="checkbox" id="user" class="check" checked="" />
                          <label for="user" class="checktoggle"></label>
                        </div>
                      </div>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Phone 1 <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Phone 2</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Fax</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Website <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Ratings</label>
                      <div class="icon-form-end">
                        <span class="form-icon"><i class="ti ti-star"></i></span>
                        <input type="text" class="form-control" placeholder="4.2" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="fmb-3">
                      <label class="col-form-label">Owner</label>
                      <vue-select
                        :options="JesSelOneCom"
                        id="jesSelonecom"
                        placeholder="Jerald"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Tags </label>
                      <vue3-tags-input
                        class="input-tags form-control"
                        placeholder=""
                        type="text"
                        data-role="tagsinput"
                        name="Label"
                        value="Tag1"
                        :tags="tags2"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <div class="d-flex align-items-center justify-content-between">
                        <label class="col-form-label">Deals</label>
                        <a
                          href="#"
                          class="label-add"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvas_add_2"
                          ><i class="ti ti-square-rounded-plus"></i>Add New</a
                        >
                      </div>
                      <vue-select :options="Schumm" id="schumm" placeholder="Choose" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Source <span class="text-danger">*</span></label
                      >
                      <vue-select
                        :options="Previous"
                        id="previous"
                        placeholder="Choose"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Industry <span class="text-danger">*</span></label
                      >
                      <vue-select :options="Retail" id="retails" placeholder="Choose" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label class="col-form-label">Contacts</label>
                      <vue-select
                        :options="VauSel"
                        id="vausel"
                        placeholder="Darlee Robertson"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Currency <span class="text-danger">*</span></label
                      >
                      <vue-select
                        :options="CompaniesCurren"
                        placeholder="Choose"
                        id="companiescurren"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Language <span class="text-danger">*</span></label
                      >
                      <vue-select :options="Lang" id="langarabic" placeholder="Choose" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-0">
                      <label class="col-form-label"
                        >Description <span class="text-danger">*</span></label
                      >
                      <textarea class="form-control" rows="5"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Basic Info -->

          <!-- Address Info -->
          <div class="accordion-item border-top rounded mb-3">
            <div class="accordion-header">
              <a
                href="#"
                class="accordion-button accordion-custom-button rounded bg-white fw-medium text-dark"
                data-bs-toggle="collapse"
                data-bs-target="#address"
              >
                <span class="avatar avatar-md rounded text-dark border me-2"
                  ><i class="ti ti-map-pin-cog fs-20"></i
                ></span>
                Address Info
              </a>
            </div>
            <div
              class="accordion-collapse collapse"
              id="address"
              data-bs-parent="#main_accordion"
            >
              <div class="accordion-body border-top">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label class="col-form-label">Street Address </label>
                      <input type="text" class="form-control" value="87 Griffin Street" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Country</label>
                      <vue-select
                        :options="compCountry"
                        id="compcoun"
                        placeholder="USA"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">State / Province </label>
                      <vue-select
                        :options="compStat"
                        id="compstat"
                        placeholder="California"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3 mb-md-0">
                      <label class="col-form-label">City </label>
                      <vue-select
                        :options="compCity"
                        id="compcity"
                        placeholder="Los Angeles"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-0">
                      <label class="col-form-label">Zipcode </label>
                      <input type="text" class="form-control" value="90001" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Address Info -->

          <!-- Social Profile -->
          <div class="accordion-item border-top rounded mb-3">
            <div class="accordion-header">
              <a
                href="#"
                class="accordion-button accordion-custom-button rounded bg-white fw-medium text-dark"
                data-bs-toggle="collapse"
                data-bs-target="#social"
              >
                <span class="avatar avatar-md rounded text-dark border me-2"
                  ><i class="ti ti-social fs-20"></i
                ></span>
                Social Profile
              </a>
            </div>
            <div
              class="accordion-collapse collapse"
              id="social"
              data-bs-parent="#main_accordion"
            >
              <div class="accordion-body border-top">
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Facebook</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Skype </label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Linkedin </label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Twitter</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3 mb-md-0">
                      <label class="col-form-label">Whatsapp</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-0">
                      <label class="col-form-label">Instagram</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Social Profile -->

          <!-- Access -->
          <div class="accordion-item border-top rounded mb-3">
            <div class="accordion-header">
              <a
                href="#"
                class="accordion-button accordion-custom-button rounded bg-white fw-medium text-dark"
                data-bs-toggle="collapse"
                data-bs-target="#access-info"
              >
                <span class="avatar avatar-md rounded text-dark border me-2"
                  ><i class="ti ti-accessible fs-20"></i
                ></span>
                Access
              </a>
            </div>
            <div
              class="accordion-collapse collapse"
              id="access-info"
              data-bs-parent="#main_accordion"
            >
              <div class="accordion-body border-top">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label class="col-form-label">Visibility</label>
                      <div class="d-flex flex-wrap">
                        <div class="me-2">
                          <input
                            type="radio"
                            class="status-radio"
                            id="public"
                            name="visible"
                          />
                          <label for="public">Public</label>
                        </div>
                        <div class="me-2">
                          <input
                            type="radio"
                            class="status-radio"
                            id="private"
                            name="visible"
                          />
                          <label for="private">Private</label>
                        </div>
                        <div data-bs-toggle="modal" data-bs-target="#access_view">
                          <input
                            type="radio"
                            class="status-radio"
                            id="people"
                            name="visible"
                          />
                          <label for="people">Select People</label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-0">
                      <label class="col-form-label">Status</label>
                      <div class="d-flex flex-wrap">
                        <div class="me-2">
                          <input
                            type="radio"
                            class="status-radio"
                            id="active"
                            name="status"
                            checked=""
                          />
                          <label for="active">Active</label>
                        </div>
                        <div>
                          <input
                            type="radio"
                            class="status-radio"
                            id="inactive"
                            name="status"
                          />
                          <label for="inactive">Inactive</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Access -->
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">
            Cancel
          </button>
          <button
            type="button"
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#create_success"
          >
            Create
          </button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Add Company -->

  <!-- Edit Company -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Edit Company</h5>
      <button
        type="button"
        class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
        data-bs-dismiss="offcanvas"
        aria-label="Close"
      >
        <i class="ti ti-x"></i>
      </button>
    </div>
    <div class="offcanvas-body">
      <form @submit.prevent="submitForm">
        <div class="accordion" id="main_accordion">
          <!-- Basic Info -->
          <div class="accordion-item rounded mb-3">
            <div class="accordion-header">
              <a
                href="#"
                class="accordion-button accordion-custom-button bg-white rounded fw-medium text-dark"
                data-bs-toggle="collapse"
                data-bs-target="#basic"
              >
                <span class="avatar avatar-md rounded text-dark border me-2"
                  ><i class="ti ti-user-plus fs-20"></i
                ></span>
                Basic Info
              </a>
            </div>
            <div
              class="accordion-collapse collapse show"
              id="basic"
              data-bs-parent="#main_accordion"
            >
              <div class="accordion-body border-top">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                      <div class="profile-upload">
                        <div class="profile-upload-img">
                          <span><i class="ti ti-photo"></i></span>
                          <img
                            src="@/assets/img/profiles/avatar-20.jpg"
                            alt="img"
                            class="preview1"
                          />
                          <button type="button" class="profile-remove">
                            <i class="ti ti-x"></i>
                          </button>
                        </div>
                        <div class="profile-upload-content">
                          <label class="profile-upload-btn">
                            <i class="ti ti-file-broken"></i> Upload File
                            <input type="file" class="input-img" />
                          </label>
                          <p>JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label class="col-form-label">Company Name</label>
                      <input type="text" class="form-control" value="NovaWave LLC" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <div class="d-flex justify-content-between align-items-center">
                        <label class="col-form-label"
                          >Email <span class="text-danger">*</span></label
                        >
                        <div
                          class="status-toggle small-toggle-btn d-flex align-items-center"
                        >
                          <span class="me-2 label-text">Email Opt Out</span>
                          <input type="checkbox" id="user" class="check" checked="" />
                          <label for="user" class="checktoggle"></label>
                        </div>
                      </div>
                      <input
                        type="text"
                        class="form-control"
                        value="robertson@example.com"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Phone 1 <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" value="1234567890" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Phone 2</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Fax <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Website <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Ratings</label>
                      <div class="icon-form-end">
                        <span class="form-icon"><i class="ti ti-star"></i></span>
                        <input type="text" class="form-control" placeholder="4.2" />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="fmb-3">
                      <label class="col-form-label">Owner</label>
                      <vue-select :options="SharSel" id="sharsel" placeholder="Jerald" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Tags </label>
                      <input
                        class="input-tags form-control"
                        type="text"
                        data-role="tagsinput"
                        name="Label"
                        value="Collab"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <div class="d-flex align-items-center justify-content-between">
                        <label class="col-form-label">Deals</label>
                        <a
                          href="#"
                          class="label-add"
                          data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvas_add_2"
                          ><i class="ti ti-square-rounded-plus"></i>Add New</a
                        >
                      </div>
                      <vue-select :options="Adams" id="adamsone" placeholder="Collins" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Source <span class="text-danger">*</span></label
                      >
                      <vue-select
                        :options="Purchases"
                        id="purchases"
                        placeholder="Phone Calls"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Industry <span class="text-danger">*</span></label
                      >
                      <vue-select
                        :options="Services"
                        id="serviceone"
                        placeholder="Banking"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label class="col-form-label">Contacts</label>
                      <vue-select
                        :options="RoySel"
                        id="roysel"
                        placeholder="Darlee Robertson"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Currency <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Language <span class="text-danger">*</span></label
                      >
                      <vue-select
                        :options="Lang"
                        id="languageslist"
                        placeholder="Englist"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-0">
                      <label class="col-form-label"
                        >Description <span class="text-danger">*</span></label
                      >
                      <textarea class="form-control" rows="5"></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Basic Info -->

          <!-- Address Info -->
          <div class="accordion-item border-top rounded mb-3">
            <div class="accordion-header">
              <a
                href="#"
                class="accordion-button accordion-custom-button rounded bg-white fw-medium text-dark"
                data-bs-toggle="collapse"
                data-bs-target="#address"
              >
                <span class="avatar avatar-md rounded text-dark border me-2"
                  ><i class="ti ti-map-pin-cog fs-20"></i
                ></span>
                Address Info
              </a>
            </div>
            <div
              class="accordion-collapse collapse"
              id="address"
              data-bs-parent="#main_accordion"
            >
              <div class="accordion-body border-top">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label class="col-form-label">Street Address </label>
                      <input type="text" class="form-control" value="22, Ave Street" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">City </label>
                      <input type="text" class="form-control" value="Denver" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">State / Province </label>
                      <input type="text" class="form-control" value="Colorado" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3 mb-md-0">
                      <label class="col-form-label">Country</label>
                      <vue-select
                        :options="Country"
                        id="choosecountry"
                        placeholder="USA"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-0">
                      <label class="col-form-label">Zipcode </label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Address Info -->

          <!-- Social Profile -->
          <div class="accordion-item border-top rounded mb-3">
            <div class="accordion-header">
              <a
                href="#"
                class="accordion-button accordion-custom-button rounded bg-white fw-medium text-dark"
                data-bs-toggle="collapse"
                data-bs-target="#social"
              >
                <span class="avatar avatar-md rounded text-dark border me-2"
                  ><i class="ti ti-social fs-20"></i
                ></span>
                Social Profile
              </a>
            </div>
            <div
              class="accordion-collapse collapse"
              id="social"
              data-bs-parent="#main_accordion"
            >
              <div class="accordion-body border-top">
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Facebook</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Skype </label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Linkedin </label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Twitter</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3 mb-md-0">
                      <label class="col-form-label">Whatsapp</label>
                      <input type="text" class="form-control" value="1234567890" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-0">
                      <label class="col-form-label">Instagram</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Social Profile -->

          <!-- Access -->
          <div class="accordion-item border-top rounded mb-3">
            <div class="accordion-header">
              <a
                href="#"
                class="accordion-button accordion-custom-button rounded bg-white fw-medium text-dark"
                data-bs-toggle="collapse"
                data-bs-target="#access-info"
              >
                <span class="avatar avatar-md rounded text-dark border me-2"
                  ><i class="ti ti-accessible fs-20"></i
                ></span>
                Access
              </a>
            </div>
            <div
              class="accordion-collapse collapse"
              id="access-info"
              data-bs-parent="#main_accordion"
            >
              <div class="accordion-body border-top">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label class="col-form-label">Visibility</label>
                      <div class="d-flex flex-wrap">
                        <div class="me-2">
                          <input
                            type="radio"
                            class="status-radio"
                            id="public"
                            name="visible"
                          />
                          <label for="public">Public</label>
                        </div>
                        <div class="me-2">
                          <input
                            type="radio"
                            class="status-radio"
                            id="private"
                            name="visible"
                          />
                          <label for="private">Private</label>
                        </div>
                        <div data-bs-toggle="modal" data-bs-target="#access_view">
                          <input
                            type="radio"
                            class="status-radio"
                            id="people"
                            name="visible"
                          />
                          <label for="people">Select People</label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-0">
                      <label class="col-form-label">Status</label>
                      <div class="d-flex flex-wrap">
                        <div class="me-2">
                          <input
                            type="radio"
                            class="status-radio"
                            id="active"
                            name="status"
                            checked=""
                          />
                          <label for="active">Active</label>
                        </div>
                        <div>
                          <input
                            type="radio"
                            class="status-radio"
                            id="inactive"
                            name="status"
                          />
                          <label for="inactive">Inactive</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Access -->
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">
            Cancel
          </button>
          <button type="button" class="btn btn-primary">Save Changes</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Edit Company -->

  <!-- Delete Company -->
  <div class="modal fade" id="delete_contact" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove Company?</h4>
            <p class="mb-0">
              Are you sure you want to remove <br />
              company you selected.
            </p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link
                to="/crm/companies-list"
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
  <!-- /Delete Company -->

  <!-- Create Company -->
  <div class="modal custom-modal fade" id="create_success" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0 m-0 justify-content-end">
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <div class="success-message text-center">
            <div class="success-popup-icon bg-light-blue">
              <i class="ti ti-building"></i>
            </div>
            <h3>Company Created Successfully!!!</h3>
            <p>View the details of company, created</p>
            <div class="col-lg-12 text-center modal-btn">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <router-link to="/crm/company-details" class="btn btn-primary"
                >View Details</router-link
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Create Company -->

  <!-- Create Deal -->
  <div class="modal custom-modal fade" id="create_success_1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0 m-0 justify-content-end">
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <div class="success-message text-center">
            <div class="success-popup-icon bg-light-blue">
              <i class="ti ti-medal"></i>
            </div>
            <h3>Deal Created Successfully!!!</h3>
            <p>View the details of deal, created</p>
            <div class="col-lg-12 text-center modal-btn">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <router-link to="/crm/deals-details" class="btn btn-primary"
                >View Details</router-link
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Create Deal -->

  <!-- Add New View -->
  <div class="modal custom-modal fade" id="save_view" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New View</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="mb-3">
              <label class="col-form-label">View Name</label>
              <input type="text" class="form-control" />
            </div>
            <div class="modal-btn text-end">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-danger">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add New View -->

  <!-- Access -->
  <div class="modal fade" id="access_view" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Access For</h5>
          <button
            class="btn-close custom-btn-close border p-1 me-0 text-dark"
            data-bs-dismiss="modal"
            aria-label="Close"
          >
            <i class="ti ti-x"></i>
          </button>
        </div>
        <form @submit.prevent="submitForm">
          <div class="modal-body">
            <div class="icon-form mb-3">
              <span class="form-icon"><i class="ti ti-search"></i></span>
              <input type="text" class="form-control" placeholder="Search" />
            </div>
            <div class="access-wrap mb-0">
              <ul>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/profiles/avatar-19.jpg" alt="" />
                      <a href="#">Darlee Robertson</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/profiles/avatar-20.jpg" alt="" />
                      <a href="#">Sharon Roy</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/profiles/avatar-21.jpg" alt="" />
                      <a href="#">Vaughan</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/profiles/avatar-01.jpg" alt="" />
                      <a href="#">Jessica</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/profiles/avatar-16.jpg" alt="" />
                      <a href="#">Carol Thomas</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/profiles/avatar-22.jpg" alt="" />
                      <a href="#">Dawn Mercha</a>
                    </span>
                  </label>
                </li>
              </ul>
            </div>
          </div>
          <div class="modal-footer">
            <div class="d-flex align-items-center justify-content-end m-0">
              <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">
                Cancel
              </button>
              <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /Access -->

  <!-- Add New Deals -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add_2">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Add New Deals</h5>
      <button
        type="button"
        class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
        data-bs-dismiss="offcanvas"
        aria-label="Close"
      >
        <i class="ti ti-x"></i>
      </button>
    </div>
    <div class="offcanvas-body">
      <form @submit.prevent="submitForm">
        <div class="row">
          <div class="col-md-12">
            <div class="mb-3">
              <label class="col-form-label"
                >Deal Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <div class="d-flex align-items-center justify-content-between">
                <label class="col-form-label"
                  >Pipeine <span class="text-danger">*</span></label
                >
              </div>
              <vue-select :options="Sales" id="salespipeline" placeholder="Choose" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Status <span class="text-danger">*</span></label
              >
              <vue-select :options="Won" id="wonstatuswon" placeholder="Choose" />
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Deal Value<span class="text-danger"> *</span></label
              >
              <input class="form-control" type="text" />
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Currency <span class="text-danger">*</span></label
              >
              <vue-select :options="Currency" id="selectcurrency" />
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Period <span class="text-danger">*</span></label
              >
              <vue-select :options="Period" id="perioddays" placeholder="Choose" />
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Period Value <span class="text-danger">*</span></label
              >
              <input class="form-control" type="text" />
            </div>
          </div>
          <div class="col-md-12">
            <div class="mb-3">
              <label class="col-form-label"
                >Contact <span class="text-danger">*</span></label
              >
              <vue-select
                :options="ThomSel"
                id="thomsel"
                placeholder="Darlee Robertson"
              />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Project <span class="text-danger">*</span></label
              >
              <vue-select :options="Project" id="uiforchat" placeholder="Devops Design" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Due Date <span class="text-danger">*</span></label
              >
              <div class="icon-form">
                <date-picker
                  v-model="startdateTwo"
                  value="29-02-2020"
                  class="datetimepicker form-control"
                  :editable="true"
                  :clearable="false"
                  :input-format="dateFormat"
                />
                <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Expected Closing Date <span class="text-danger">*</span></label
              >
              <div class="icon-form">
                <date-picker
                  v-model="startdate"
                  value="29-02-2020"
                  class="datetimepicker form-control"
                  :editable="true"
                  :clearable="false"
                  :input-format="dateFormat"
                />
                <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="mb-3">
              <label class="col-form-label"
                >Assignee <span class="text-danger">*</span></label
              >
              <vue-select
                :options="RobertSel"
                id="robertsel"
                placeholder="Darlee Robertson"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Follow Up Date <span class="text-danger">*</span></label
              >
              <div class="icon-form">
                <date-picker
                  v-model="startdateOne"
                  value="29-02-2020"
                  class="datetimepicker form-control"
                  :editable="true"
                  :clearable="false"
                  :input-format="dateFormat"
                />
                <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Source <span class="text-danger">*</span></label
              >
              <vue-select :options="Source" id="source" placeholder="Select" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Tags <span class="text-danger">*</span></label
              >
              <input
                class="input-tags form-control"
                type="text"
                data-role="tagsinput"
                name="Label"
                value="Collab, Rated"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Priority <span class="text-danger">*</span></label
              >
              <vue-select :options="Priority" id="mediumpriority" placeholder="Select" />
            </div>
          </div>
          <div class="col-lg-12">
            <div class="mb-3">
              <label class="col-form-label"
                >Description <span class="text-danger">*</span></label
              >
              <ckeditor
                :editor="editor"
                v-model="editorData"
                :config="editorConfig"
              ></ckeditor>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">
            Cancel
          </button>
          <button
            type="button"
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#create_success_1"
          >
            Create
          </button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Add New Deals -->
</template>

<script>
import { ref } from "vue";
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import Vue3TagsInput from "vue3-tags-input";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
const currentDateTwo = ref(new Date());
export default {
  components: {
    Vue3TagsInput,
  },
  data() {
    return {
      startdate: currentDate,
      startdateOne: currentDateOne,
      startdateTwo: currentDateTwo,
      dateFormat: "dd-MM-yyyy",
      Schumm: ["Choose", "Collins", "Konopelski", "Adams", "Schumm", "Wisozk"],
      Previous: [
        "Choose",
        "Phone Calls",
        "Social Media",
        "Referral Sites",
        "Web Analytics",
        "Previous Purchases",
      ],
      Retail: [
        "Choose",
        "Retail Industry",
        "Banking",
        "Hotels",
        "Financial Services",
        "Insurance",
      ],
      Lang: ["Choose", "English", "Arabic", "French", "German"],
      Country: ["Choose", "India", "USA", "France", "UK", "UAE"],
      Adams: ["Choose", "Collins", "Konopelski", "Adams", "Schumm", "Wisozk"],
      Purchases: [
        "Choose",
        "Phone Calls",
        "Social Media",
        "Referral Sites",
        "Web Analytics",
        "Previous Purchases",
      ],
      Services: [
        "Choose",
        "Retail Industry",
        "Banking",
        "Hotels",
        "Financial Services",
        "Insurance",
      ],
      Sales: ["Choose", "Sales", "Marketing", "Calls"],
      Won: ["Choose", "Open", "Lost", "Won"],
      Currency: ["Choose", "Dollar", "Euro", "Pound", "Rupee"],
      CompaniesCurren: ["Choose", "Dollar", "Euro", "Pound", "Rupee"],
      Period: ["Choose", "Days", "Month"],
      Project: ["Devops Design", "Margrate Design", "UI for Chat", "Web Chat"],
      Source: ["Select", "Google", "Social Media"],
      Priority: ["Select", "Highy", "Low", "Medium"],
      JesSelOneCom: ["Jerald", "Sharon Roy", "Vaughan", "Jessica", "Carol Thomas"],
      VauSel: ["Darlee Robertson", "Sharon Roy", "Vaughan", "Jessica", "Carol Thomas"],
      SharSel: ["Jerald", "Sharon Roy", "Vaughan", "Jessica", "Carol Thomas"],
      RoySel: ["Darlee Robertson", "Sharon Roy", "Vaughan", "Jessica", "Carol Thomas"],
      ThomSel: ["Darlee Robertson", "Sharon Roy", "Vaughan", "Jessica", "Carol Thomas"],
      RobertSel: ["Darlee Robertson", "Sharon Roy", "Vaughan", "Jessica", "Carol Thomas"],
      tags2: ["Collab"],
      editor: ClassicEditor,
      editorData: "Description",
      editorConfig: {},
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/crm/companies-list");
    },
  },
};
</script>

<template>
  <!-- Add Contact -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Add New Contact</h5>
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
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >First Name <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Last Name <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Job Title <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Company Name</label>
                      <vue-select
                        :options="Company"
                        placeholder="Choose"
                        id="companyname"
                      />
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
                      <vue-select :options="Choose" id="collins" placeholder="Choose" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Date of Birth</label>
                      <div class="icon-form-end">
                        <date-picker
                          v-model="startdate"
                          placeholder=""
                          class="datetimepicker form-control"
                          :editable="true"
                          :clearable="false"
                          :input-format="dateFormat"
                        />
                        <span class="form-icon"
                          ><i class="ti ti-calendar-event"></i
                        ></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Reviews </label>
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
                        :options="EspinosaSel"
                        id="espinosasel"
                        placeholder="Jerald"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Tags </label>
                      <vue3-tags-input
                        class="input-tags form-control"
                        type="text"
                        data-role="tagsinput"
                        name="Label"
                        value="Collab"
                        :tags="tags"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Source <span class="text-danger">*</span></label
                      >
                      <vue-select :options="Social" id="social" placeholder="Choose" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Industry <span class="text-danger">*</span></label
                      >
                      <vue-select :options="Retail" id="retail" placeholder="Choose" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Currency <span class="text-danger">*</span></label
                      >
                      <vue-select
                        :options="CompanyCurren"
                        placeholder="Choose"
                        id="companynamecurren"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Language <span class="text-danger">*</span></label
                      >
                      <vue-select
                        :options="Language"
                        id="langenglish"
                        placeholder="Choose"
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
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">City </label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">State / Province </label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3 mb-md-0">
                      <label class="col-form-label">Country</label>
                      <vue-select :options="Country" id="india" placeholder="Choose" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-0">
                      <label class="col-form-label">Zipcode </label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label class="col-form-label">Street Address </label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Country</label>
                      <vue-select
                        :options="contactCountry"
                        id="contactcoun"
                        placeholder="Choose"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">State / Province </label>
                      <vue-select
                        :options="contactStat"
                        id="contactstat"
                        placeholder="Choose"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3 mb-md-0">
                      <label class="col-form-label">City </label>
                      <vue-select
                        :options="contactCity"
                        id="contactcity"
                        placeholder="Choose"
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
  <!-- /Add Contact -->

  <!-- Edit Contact -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Edit Contact</h5>
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
        <div class="accordion" id="main_accordion_2">
          <!-- Basic Info -->
          <div class="accordion-item rounded mb-3">
            <div class="accordion-header">
              <a
                href="#"
                class="accordion-button accordion-custom-button bg-white rounded fw-medium text-dark"
                data-bs-toggle="collapse"
                data-bs-target="#basic-2"
              >
                <span class="avatar avatar-md rounded text-dark border me-2"
                  ><i class="ti ti-user-plus fs-20"></i
                ></span>
                Basic Info
              </a>
            </div>
            <div
              class="accordion-collapse collapse show"
              id="basic-2"
              data-bs-parent="#main_accordion_2"
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
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >First Name <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" value="Darlee" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Last Name <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" value="Robertson" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Job Title <span class="text-danger">*</span></label
                      >
                      <input type="text" class="form-control" value="Facility Manager" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Company Name</label>
                      <vue-select
                        :options="Novawave"
                        id="nove"
                        placeholder="NovaWave LLC"
                      />
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
                          <input
                            type="checkbox"
                            id="user2"
                            class="check"
                            checked=""
                            value="robertson@example.com"
                          />
                          <label for="user2" class="checktoggle"></label>
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
                      <input type="text" class="form-control" value="6234567890" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Phone 2</label>
                      <input type="text" class="form-control" value="7234567899" />
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
                      <vue-select :options="Choose" id="schum" placeholder="Collins" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Date of Birth</label>
                      <div class="icon-form-end">
                        <date-picker
                          v-model="startdateOne"
                          value="29-02-2020"
                          class="datetimepicker form-control"
                          :editable="true"
                          :clearable="false"
                          :input-format="dateFormat"
                        />
                        <span class="form-icon"
                          ><i class="ti ti-calendar-event"></i
                        ></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Reviews </label>
                      <div class="icon-form-end">
                        <span class="form-icon"><i class="ti ti-star"></i></span>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="4.2"
                          value="4.2"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="fmb-3">
                      <label class="col-form-label">Owner</label>
                      <vue-select
                        :options="TheresaSel"
                        id="Theresasel"
                        placeholder="Jerald"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">Tags </label>
                      <vue3-tags-input
                        class="input-tags form-control"
                        type="text"
                        id="inputBox"
                        data-role="tagsinput"
                        name="Label"
                        value="Collab"
                        :tags1="tags1"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Source <span class="text-danger">*</span></label
                      >
                      <vue-select
                        :options="Social"
                        id="phonecall"
                        placeholder="Phone Call"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Industry <span class="text-danger">*</span></label
                      >
                      <vue-select
                        :options="Retail"
                        id="insurance"
                        placeholder="Banking"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Currency <span class="text-danger">*</span></label
                      >
                      <vue-select
                        :options="EditCompanyCurren"
                        placeholder="Choose"
                        id="editcompanynamecurren"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Language <span class="text-danger">*</span></label
                      >
                      <vue-select
                        :options="Language"
                        id="choosehindi"
                        placeholder="English"
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
                data-bs-target="#address-2"
              >
                <span class="avatar avatar-md rounded text-dark border me-2"
                  ><i class="ti ti-map-pin-cog fs-20"></i
                ></span>
                Address Info
              </a>
            </div>
            <div
              class="accordion-collapse collapse"
              id="address-2"
              data-bs-parent="#main_accordion_2"
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
                        :options="contactCountry"
                        id="editcontactcoun"
                        placeholder="USA"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label">State / Province </label>
                      <vue-select
                        :options="contactStat"
                        id="editcontactstat"
                        placeholder="California"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3 mb-md-0">
                      <label class="col-form-label">City </label>
                      <vue-select
                        :options="contactCity"
                        id="editcontactcity"
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
                data-bs-target="#social-2"
              >
                <span class="avatar avatar-md rounded text-dark border me-2"
                  ><i class="ti ti-social fs-20"></i
                ></span>
                Social Profile
              </a>
            </div>
            <div
              class="accordion-collapse collapse"
              id="social-2"
              data-bs-parent="#main_accordion_2"
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
                data-bs-target="#access-info-2"
              >
                <span class="avatar avatar-md rounded text-dark border me-2"
                  ><i class="ti ti-accessible fs-20"></i
                ></span>
                Access
              </a>
            </div>
            <div
              class="accordion-collapse collapse"
              id="access-info-2"
              data-bs-parent="#main_accordion_2"
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
                            id="public2"
                            name="visible"
                          />
                          <label for="public2">Public</label>
                        </div>
                        <div class="me-2">
                          <input
                            type="radio"
                            class="status-radio"
                            id="private2"
                            name="visible"
                          />
                          <label for="private2">Private</label>
                        </div>
                        <div data-bs-toggle="modal" data-bs-target="#access_view">
                          <input
                            type="radio"
                            class="status-radio"
                            id="people2"
                            name="visible"
                          />
                          <label for="people2">Select People</label>
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
                            id="active2"
                            name="status"
                            checked=""
                          />
                          <label for="active2">Active</label>
                        </div>
                        <div>
                          <input
                            type="radio"
                            class="status-radio"
                            id="inactive2"
                            name="status"
                          />
                          <label for="inactive2">Inactive</label>
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
  <!-- /Edit Contact -->

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
              <vue-select :options="Pipeline" id="sales" placeholder="Choose" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Status <span class="text-danger">*</span></label
              >
              <vue-select :options="Status" id="statusone" placeholder="Choose" />
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
              <vue-select :options="Currency" id="currency" placeholder="Select" />
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Period <span class="text-danger">*</span></label
              >
              <vue-select :options="Period" id="chooseperiod" placeholder="Choose" />
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
                :options="ContSelM"
                id="contselm"
                placeholder="Darlee Robertson"
              />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Project <span class="text-danger">*</span></label
              >
              <vue-select
                :options="DevopsSel"
                id="devopssel"
                placeholder="Devops Design"
              />
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
                  placeholder=""
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
                  v-model="startdateThree"
                  placeholder=""
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
                :options="GuesonSel"
                id="guesonsel"
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
                  v-model="startdateFour"
                  placeholder=""
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
              <vue-select :options="Source" id="sourceone" placeholder="Select" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Tags <span class="text-danger">*</span></label
              >
              <vue3-tags-input
                class="input-tags form-control"
                type="text"
                data-role="tagsinput"
                name="Label"
                value="Collab, Rated"
                :tags2="tags2"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Priority <span class="text-danger">*</span></label
              >
              <vue-select :options="Priority" id="priority" placeholder="Select" />
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
            data-bs-target="#create_success_2"
          >
            Create
          </button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Add New Deals -->

  <!-- Delete Contact -->
  <div class="modal fade" id="delete_contact" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove Contacts?</h4>
            <p class="mb-0">
              Are you sure you want to remove <br />
              contact you selected.
            </p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link
                to="/crm/contacts-list"
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
  <!-- /Delete Contact -->

  <!-- Create Deal -->
  <div class="modal custom-modal fade" id="create_success_2" role="dialog">
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
              <a href="deals-details" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Create Deal -->

  <!-- Create Contact -->
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
              <i class="ti ti-user-plus"></i>
            </div>
            <h3>Contact Created Successfully!!!</h3>
            <p>View the details of contact, created</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Create Contact -->

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
</template>

<script>
import { ref } from "vue";
import Vue3TagsInput from "vue3-tags-input";
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
const currentDateTwo = ref(new Date());
const currentDateThree = ref(new Date());
const currentDateFour = ref(new Date());
export default {
  components: {
    Vue3TagsInput,
  },
  data() {
    return {
      startdate: currentDate,
      startdateOne: currentDateOne,
      startdateTwo: currentDateTwo,
      startdateThree: currentDateThree,
      startdateFour: currentDateFour,
      dateFormat: "dd-MM-yyyy",
      Company: [
        "Choose",
        "NovaWave LLC",
        "BlueSky Industries",
        "SilverHawk",
        "SummitPeak",
        "RiverStone Ventur",
      ],
      Choose: ["Choose", "Collins", "Konopelski", "Adams", "Schumm", "Wisozk"],
      Retail: [
        "Choose",
        "Retail Industry",
        "Banking",
        "Hotels",
        "Financial Services",
        "Insurance",
      ],
      Social: [
        "Choose",
        "Phone Calls",
        "Social Media",
        "Referral Sites",
        "Web Analytics",
        "Previous Purchases",
      ],
      Language: ["Choose", "English", "Arabic", "French", "German"],
      contactCity: ["Choose", "Los Angeles", "San Diego", "Fresno", "San Francisco"],
      contactStat: ["Choose", "California", "New York", "Texas", "Florida"],
      contactCountry: ["Choose", "USA", "Canda", "Germany", "France"],
      Country: ["Choose", "India", "USA", "France", "UK", "UAE"],
      Novawave: [
        "Choose",
        "NovaWave LLC",
        "BlueSky Industries",
        "SilverHawk",
        "SummitPeak",
        "RiverStone Ventur",
      ],
      Pipeline: ["Choose", "Sales", "Marketing", "Calls"],
      Status: ["Choose", "Open", "Lost", "Won"],
      Currency: ["Choose", "Dollar", "Euro", "Pound", "Rupee"],
      Period: ["Choose", "Days", "Month"],
      Source: ["Select", "Google", "Social Media"],
      Priority: ["Select", "Highy", "Low", "Medium"],
      EspinosaSel: ["Jerald", "Guillory", "Jami", "Theresa", "Espinosa"],
      TheresaSel: ["Jerald", "Guillory", "Jami", "Theresa", "Espinosa"],
      ContSelM: ["Darlee Robertson", "Sharon Roy", "Vaughan", "Jessica", "Carol Thomas"],
      DevopsSel: ["Devops Design", "MargrateDesign", "UI for Chat", "Web Chat"],
      GuesonSel: ["Darlee Robertson", "Sharon Roy", "Vaughan", "Jessica", "Carol Thomas"],
      CompanyCurren: ["Choose", "Dollar", "Euro", "Pound", "Rupee"],
      EditCompanyCurren: ["Choose", "Dollar", "Euro", "Pound", "Rupee"],
      tags: ["Collab"],
      tags1: ["Collab"],
      tags2: ["Collab", "Rated"],
      editor: ClassicEditor,
      editorData: "Description",
      editorConfig: {},
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/crm/contacts-list");
    },
  },
};
</script>

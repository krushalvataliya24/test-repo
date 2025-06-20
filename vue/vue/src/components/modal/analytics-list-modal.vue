<template>
  <!-- Add Company -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add_2">
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
                      <vue-select
                        :options="JeraldSelec"
                        id="jeraldselec"
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
                        value="Tag1"
                        :tags="tags"
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
                          data-bs-target="#offcanvas_add_3"
                          ><i class="ti ti-square-rounded-plus"></i>Add New</a
                        >
                      </div>
                      <vue-select
                        :options="SelChoAn"
                        id="selchoan"
                        placeholder="Choose"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Source <span class="text-danger">*</span></label
                      >
                      <vue-select
                        :options="SourceSel"
                        id="sourcesel"
                        placeholder="Choose"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Industry <span class="text-danger">*</span></label
                      >
                      <vue-select
                        :options="RetailSel"
                        id="retailsel"
                        placeholder="Choose"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label class="col-form-label">Contacts</label>
                      <vue-select :options="DarSel" id="darsel" placeholder="Choose" />
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
                      <vue-select :options="LanSel" id="Choose" placeholder="Choose" />
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
                      <vue-select :options="CounSel" id="counsel" placeholder="Choose" />
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
                        <input
                          type="radio"
                          class="status-radio"
                          id="people"
                          name="visible"
                        />
                        <label for="people">Select People</label>
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
          <button type="button" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Add Company -->

  <!-- Add New Pipeline -->
  <div
    class="offcanvas offcanvas-end offcanvas-large"
    tabindex="-1"
    id="offcanvas_pipeline"
  >
    <div class="offcanvas-header border-bottom">
      <h4>Add New Pipeline</h4>
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
        <div>
          <div class="mb-3">
            <label class="col-form-label"
              >Pipeline Name <span class="text-danger">*</span></label
            >
            <input class="form-control" type="text" />
          </div>
          <div class="mb-3">
            <div class="pipe-title d-flex align-items-center justify-content-between">
              <h5 class="form-title">Pipeline Stages</h5>
              <a
                href="#"
                class="add-stage"
                data-bs-toggle="modal"
                data-bs-target="#add_stage"
                ><i class="ti ti-square-rounded-plus"></i>Add New</a
              >
            </div>
            <div class="pipeline-listing">
              <div class="pipeline-item">
                <p><i class="ti ti-grip-vertical"></i> Inpipeline</p>
                <div class="action-pipeline">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"
                    ><i class="ti ti-edit text-blue"></i>Edit</a
                  >
                  <a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"
                    ><i class="ti ti-trash text-danger"></i>Delete</a
                  >
                </div>
              </div>
              <div class="pipeline-item">
                <p><i class="ti ti-grip-vertical"></i> Follow Up</p>
                <div class="action-pipeline">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"
                    ><i class="ti ti-edit text-blue"></i>Edit</a
                  >
                  <a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"
                    ><i class="ti ti-trash text-danger"></i>Delete</a
                  >
                </div>
              </div>
              <div class="pipeline-item">
                <p><i class="ti ti-grip-vertical"></i> Schedule Service</p>
                <div class="action-pipeline">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"
                    ><i class="ti ti-edit text-blue"></i>Edit</a
                  >
                  <a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"
                    ><i class="ti ti-trash text-danger"></i>Delete</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="mb-3">
            <h5 class="form-title">Access</h5>
            <div class="d-flex flex-wrap access-item nav">
              <div class="radio-btn" data-bs-toggle="tab" data-bs-target="#all">
                <input
                  type="radio"
                  class="status-radio"
                  id="all"
                  name="status"
                  checked=""
                />
                <label for="all">All</label>
              </div>
              <div class="radio-btn" data-bs-toggle="tab" data-bs-target="#select-person">
                <input type="radio" class="status-radio" id="select" name="status" />
                <label for="select">Select Person</label>
              </div>
            </div>
            <div class="tab-content">
              <div class="tab-pane fade" id="select-person">
                <div class="access-wrapper">
                  <div class="access-view">
                    <div class="access-img">
                      <img src="@/assets/img/profiles/avatar-21.jpg" alt="Image" />Vaughan
                    </div>
                    <a href="#">Remove</a>
                  </div>
                  <div class="access-view">
                    <div class="access-img">
                      <img src="@/assets/img/profiles/avatar-01.jpg" alt="Image" />Jessica
                    </div>
                    <a href="#">Remove</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">
            Cancel
          </button>
          <button type="button" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Add New Pipeline -->

  <!-- Add New Activity -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
      <h4>Add New Activity</h4>
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
        <div>
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Title <span class="text-danger">*</span></label
                >
                <input type="text" class="form-control" />
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Activity Type <span class="text-danger">*</span></label
                >
                <ul class="radio-activity">
                  <li>
                    <div class="active-type">
                      <input type="radio" id="call" name="status" checked="" />
                      <label for="call"><i class="ti ti-phone"></i>Calls</label>
                    </div>
                  </li>
                  <li>
                    <div class="active-type">
                      <input type="radio" id="mail" name="status" />
                      <label for="mail"><i class="ti ti-mail"></i>Email</label>
                    </div>
                  </li>
                  <li>
                    <div class="active-type">
                      <input type="radio" id="task" name="status" />
                      <label for="task"><i class="ti ti-subtask"></i>Task</label>
                    </div>
                  </li>
                  <li>
                    <div class="active-type">
                      <input type="radio" id="shares" name="status" />
                      <label for="shares"><i class="ti ti-user-share"></i>Meeting</label>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <label class="col-form-label"
                >Due Date <span class="text-danger">*</span></label
              >
              <div class="mb-3 icon-form">
                <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
                <date-picker
                  v-model="startdate"
                  value="29-02-2020"
                  class="datetimepicker form-control"
                  :editable="true"
                  :clearable="false"
                  :input-format="dateFormat"
                />
              </div>
            </div>
            <div class="col-md-6">
              <label class="col-form-label"
                >Time <span class="text-danger">*</span></label
              >
              <div class="mb-3 icon-form">
                <span class="form-icon"><i class="ti ti-clock-hour-10"></i></span>
                <a-time-picker
                  class="form-control datetimepicker-time"
                  placeholder="11:00 AM"
                  use12-hours
                  format="h:mm a"
                  type="time"
                />
              </div>
            </div>
            <div class="col-md-6">
              <label class="col-form-label"
                >Reminder <span class="text-danger">*</span></label
              >
              <div class="mb-3 icon-form">
                <span class="form-icon"><i class="ti ti-bell-ringing"></i></span>
                <input type="text" class="form-control" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex align-items-center">
                <div class="mb-3 w-100">
                  <label class="col-form-label">&nbsp;</label>
                  <vue-select :options="SelMin" id="selin" placeholder="Select" />
                </div>
                <div class="mb-3 time-text">
                  <label class="col-form-label">&nbsp;</label>
                  <p>Before Due</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Owner <span class="text-danger">*</span></label
                >
                <vue-select :options="SelectBrad" id="selectbrad" placeholder="Select" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="col-form-label"
                  >Guests <span class="text-danger">*</span></label
                >
                <vue-select
                  :options="CarSel"
                  id="carsel"
                  placeholder="Darlee Robertson"
                />
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="col-form-label"
                  >Description <span class="text-danger">*</span></label
                >
                <div class="summernote"></div>
              </div>
              <div class="mb-3">
                <div class="d-flex align-items-center justify-content-between">
                  <label class="col-form-label">Deals</label>
                  <a
                    href="#"
                    class="label-add"
                    data-bs-toggle="modal"
                    data-bs-target="#add_deal"
                    ><i class="ti ti-square-rounded-plus"></i>Add New</a
                  >
                </div>
                <vue-select :options="SelectAdms" id="selectadms" placeholder="Select" />
              </div>
              <div class="mb-3">
                <div class="d-flex align-items-center justify-content-between">
                  <label class="col-form-label">Contacts</label>
                  <a
                    href="#"
                    class="label-add"
                    data-bs-toggle="modal"
                    data-bs-target="#add_contacts"
                    ><i class="ti ti-square-rounded-plus"></i>Add New</a
                  >
                </div>
                <vue-select
                  :options="SelectNewAdd"
                  id="selectnewadd"
                  placeholder="Select"
                />
              </div>
              <div class="mb-3">
                <div class="d-flex align-items-center justify-content-between">
                  <label class="col-form-label">Companies</label>
                  <a
                    href="#"
                    class="label-add"
                    data-bs-toggle="modal"
                    data-bs-target="#add_company"
                    ><i class="ti ti-square-rounded-plus"></i>Add New</a
                  >
                </div>
                <vue-select :options="SelectComp" id="selectcomp" placeholder="Select" />
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-end">
          <button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">
            Cancel
          </button>
          <button type="button" class="btn btn-primary">Create</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Add New Activity -->

  <!-- Add Deals -->
  <div class="modal custom-modal fade" id="add_deal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Deals</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="mb-2 icon-form">
              <span class="form-icon"><i class="ti ti-search"></i></span>
              <input type="text" class="form-control" placeholder="Search" />
            </div>
            <div class="access-wrap">
              <ul>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <a href="#">Collins</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <a href="#">Konopelski</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <a href="#">Adams</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <a href="#">Schumm</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <a href="#">Wisozk</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <a href="#">Dawn Mercha</a>
                    </span>
                  </label>
                </li>
              </ul>
            </div>
            <div class="modal-btn text-end">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Deals -->

  <!-- Add Contacts -->
  <div class="modal custom-modal fade" id="add_contacts" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Contacts</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="mb-2 icon-form">
              <span class="form-icon"><i class="ti ti-search"></i></span>
              <input type="text" class="form-control" placeholder="Search" />
            </div>
            <div class="access-wrap">
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
            <div class="modal-btn text-end">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Contacts -->

  <!-- Add Company -->
  <div class="modal custom-modal fade" id="add_company" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Company</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="mb-2 icon-form">
              <span class="form-icon"><i class="ti ti-search"></i></span>
              <input type="text" class="form-control" placeholder="Search" />
            </div>
            <div class="access-wrap">
              <ul>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/icons/company-icon-01.svg" alt="" />
                      <a href="#">NovaWave LLC</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/icons/company-icon-02.svg" alt="" />
                      <a href="#">BlueSky Industries</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/icons/company-icon-03.svg" alt="" />
                      <a href="#">Silver Hawk</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/icons/company-icon-04.svg" alt="" />
                      <a href="#">Summit Peak</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/icons/company-icon-05.svg" alt="" />
                      <a href="#">RiverStone Ventur</a>
                    </span>
                  </label>
                </li>
                <li class="select-people-checkbox">
                  <label class="checkboxs">
                    <input type="checkbox" />
                    <span class="checkmarks"></span>
                    <span class="people-profile">
                      <img src="@/assets/img/icons/company-icon-06.svg" alt="" />
                      <a href="#">Bright Bridge Grp</a>
                    </span>
                  </label>
                </li>
              </ul>
            </div>
            <div class="modal-btn text-end">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-primary">Confirm</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Company -->

  <!-- Add New Deals -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add_3">
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
                  >Pipeline <span class="text-danger">*</span></label
                >
              </div>
              <vue-select :options="ChoosePip" id="choosepip" placeholder="Choose" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Status <span class="text-danger">*</span></label
              >
              <vue-select
                :options="ChooseStatus"
                id="choosestatus"
                placeholder="Choose"
              />
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
              <vue-select
                :options="CurrencySele"
                id="currencysele"
                placeholder="Select"
              />
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Period <span class="text-danger">*</span></label
              >
              <vue-select
                :options="PeriodChoose"
                id="periodchoose"
                placeholder="Choose"
              />
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
                :options="DareleeSelect"
                id="dareleeselect"
                placeholder="Darlee Robertson"
              />
            </div>
            <div class="mb-3">
              <label class="col-form-label"
                >Project <span class="text-danger">*</span></label
              >
              <vue-select
                :options="DevopsDesign"
                id="devopsdesign"
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
                <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
                <date-picker
                  v-model="startdate"
                  value="29-02-2020"
                  class="datetimepicker form-control"
                  :editable="true"
                  :clearable="false"
                  :input-format="dateFormat"
                />
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Expected Closing Date <span class="text-danger">*</span></label
              >
              <div class="icon-form">
                <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
                <date-picker
                  v-model="startdateOne"
                  value="29-02-2020"
                  class="datetimepicker form-control"
                  :editable="true"
                  :clearable="false"
                  :input-format="dateFormat"
                />
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="mb-3">
              <label class="col-form-label"
                >Assignee <span class="text-danger">*</span></label
              >
              <vue-select
                :options="DareleeSelectOne"
                id="dareleeselectone"
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
                <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
                <date-picker
                  v-model="startdateTwo"
                  value="29-02-2020"
                  class="datetimepicker form-control"
                  :editable="true"
                  :clearable="false"
                  :input-format="dateFormat"
                />
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Source <span class="text-danger">*</span></label
              >
              <vue-select :options="SocialMedia" id="socialmedia" placeholder="Select" />
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
                value="Tag1"
                :tags="tags"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Priority <span class="text-danger">*</span></label
              >
              <vue-select
                :options="PrioritySelec"
                id="priorityselec"
                placeholder="Select"
              />
            </div>
          </div>
          <div class="col-lg-12">
            <div class="mb-3">
              <label class="col-form-label"
                >Description <span class="text-danger">*</span></label
              >
              <div class="summernote"></div>
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
            data-bs-target="#create_success"
          >
            Create
          </button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Add New Deals -->

  <!-- Add New Stage -->
  <div class="modal custom-modal fade" id="add_stage" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add New Stage</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="mb-3">
              <label class="col-form-label">Stage Name *</label>
              <input type="text" class="form-control" />
            </div>
            <div class="modal-btn text-end">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-danger">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add New Stage -->

  <!-- Edit Stage -->
  <div class="modal custom-modal fade" id="edit_stage" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Stage</h5>
          <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="ti ti-x"></i>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="mb-3">
              <label class="col-form-label">Stage Name *</label>
              <input type="text" class="form-control" value="Inpipeline" />
            </div>
            <div class="modal-btn text-end">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <button type="submit" class="btn btn-danger">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Edit Stage -->

  <!-- Delete Stage -->
  <div class="modal fade" id="delete_stage" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove Stage?</h4>
            <p class="mb-0">
              Are you sure you want to remove <br />
              stage you selected.
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
  <!-- /Delete Stage -->
</template>
<script>
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import Vue3TagsInput from "vue3-tags-input";
import { ref } from "vue";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
const currentDateTwo = ref(new Date());
export default {
  components: {
    Vue3TagsInput,
  },
  data() {
    return {
      editor: ClassicEditor,
      editorData: "Description",
      editorConfig: {},
      startdate: currentDate,
      startdateOne: currentDateOne,
      startdateTwo: currentDateTwo,
      dateFormat: "dd-MM-yyyy",
      SelOwner: ["Jerald", "Guillory", "Jami", "Theresa", "Espinosa"],
      SelChoAn: ["Choose", "Collins", "Konopelsko", "Adams", "Schumm", "Wisozk"],
      SourceSel: [
        "Choose",
        "Phone Calls",
        "Social Media",
        "Refeeral Sites",
        "Web Analytics",
        "Previous Puruchases",
      ],
      RetailSel: [
        "Choose",
        "Retail Industry",
        "Banking",
        "Hotels",
        "Financial Services",
        "Insurance",
      ],
      DarSel: ["Choose", "Darlee Robertson", "Sharon Roy", "Vaughan", "Jessica"],
      LanSel: ["Choose", "English", "Arabic", "Chinese", "Hindi"],
      CounSel: ["Choose", "India", "USA", "France", "UK", "UAE"],
      SelMin: ["Select", "Minutes", "Hours"],
      SelectBrad: ["Select", "Hendry", "Bradtke", "Sally"],
      SelectAdms: ["Select", "Collins", "Konopelski", "Adams"],
      SelectNewAdd: ["Select", "Collins", "Konopelski", "Adams"],
      SelectComp: ["Select", "NovaWave", "SilverHawk", "HarborView"],
      CarSel: ["Darlee Robertson", "Sharon Roy", "Vaughan", "Jessica", "Carol Thomas"],
      SocialMedia: ["Select", "Google", "Social Media"],
      PrioritySelec: ["Select", "Highy", "Low", "Medium"],
      DareleeSelectOne: [
        "Darlee Robertson",
        "Sharon Roy",
        "Vaughan",
        "Jessica",
        "Carol Thomas",
      ],
      DevopsDesign: ["Devops Design", "MargrateDesign", "UI for Chat", "Web Chat"],
      DareleeSelect: [
        "Darlee Robertson",
        "Sharon Roy",
        "Vaughan",
        "Jessica",
        "Carol Thomas",
      ],
      CurrencySele: ["Choose", "Dollar", "Euro", "Pound", "Rupee"],
      PeriodChoose: ["Choose", "Days", "Month"],
      ChoosePip: ["Choose", "Sales", "Marketing", "Calls"],
      ChooseStatus: ["Choose", "Open", "Lost", "Won"],
      JeraldSelec: ["Jerald", "Guillory", "Jami", "Theresa", "Espinosa"],
      tags: ["Tag1"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/crm/analytics-list");
    },
  },
};
</script>

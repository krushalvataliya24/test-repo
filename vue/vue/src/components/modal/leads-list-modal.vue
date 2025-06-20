<template>
  <!-- Add Lead -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Add New Lead</h5>
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
                >Lead Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="col-md-12">
            <div class="mb-3">
              <div class="radio-wrap">
                <label class="col-form-label">Lead Type</label>
                <div class="d-flex flex-wrap">
                  <div class="me-2">
                    <input
                      type="radio"
                      class="status-radio"
                      id="person"
                      name="leave"
                      checked
                    />
                    <label for="person">Person</label>
                  </div>
                  <div>
                    <input
                      type="radio"
                      class="status-radio"
                      id="Organization"
                      name="leave"
                    />
                    <label for="Organization">Organization</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="mb-3">
              <div class="d-flex justify-content-between align-items-center">
                <label class="col-form-label">Company Name</label>
                <a
                  href=""
                  class="label-add"
                  data-bs-toggle="offcanvas"
                  data-bs-target="#offcanvas_add_2"
                >
                  <i class="ti ti-square-rounded-plus"></i>
                  Add New
                </a>
              </div>
              <vue-select :options="VenSel" id="vensel" placeholder="Choose" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Value<span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Currency <span class="text-danger">*</span></label
              >
              <vue-select :options="LeadsModal" id="leadsmodal" placeholder="Choose" />
            </div>
          </div>
          <div class="col-md-12">
            <div class="row align-items-end">
              <div class="col-md-8">
                <div class="mb-3">
                  <label class="col-form-label"
                    >Phone<span class="text-danger">*</span></label
                  >
                  <input type="text" class="form-control" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3 col-form-label mt-4">
                  <vue-select :options="WorkSel" id="worksel" placeholder="Choose" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Source <span class="text-danger">*</span></label
              >
              <vue-select :options="SocialSel" id="socialsel" placeholder="Choose" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Industry <span class="text-danger">*</span></label
              >
              <vue-select :options="InsuSel" id="insusel" placeholder="Choose" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label">Owner</label>
              <vue-select
                :options="GueSelowner"
                id="gueselowner"
                placeholder="Darlee Robertson"
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
                value="Rated"
                :tags="tags"
              />
            </div>
          </div>
          <div class="col-md-12">
            <div class="mb-3">
              <label class="col-form-label"
                >Description <span class="text-danger">*</span></label
              >
              <textarea class="form-control" rows="5"></textarea>
            </div>
          </div>
          <div class="col-md-12">
            <div class="mb-3">
              <label class="col-form-label">Visibility</label>
              <div class="d-flex flex-wrap">
                <div class="me-2">
                  <input type="radio" class="status-radio" id="public" name="visible" />
                  <label for="public">Public</label>
                </div>
                <div class="me-2">
                  <input type="radio" class="status-radio" id="private" name="visible" />
                  <label for="private">Private</label>
                </div>
                <div data-bs-toggle="modal" data-bs-target="#access_view">
                  <input type="radio" class="status-radio" id="people" name="visible" />
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
                  <input type="radio" class="status-radio" id="inactive" name="status" />
                  <label for="inactive">Inactive</label>
                </div>
              </div>
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
  <!-- /Add Lead -->

  <!-- Edit Lead -->
  <div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
    <div class="offcanvas-header border-bottom">
      <h5 class="fw-semibold">Edit Lead</h5>
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
                >Lead Name <span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="Collins" />
            </div>
          </div>
          <div class="col-md-12">
            <div class="mb-3">
              <div class="radio-wrap">
                <label class="col-form-label">Lead Type</label>
                <div class="d-flex flex-wrap">
                  <div class="me-2">
                    <input
                      type="radio"
                      class="status-radio"
                      id="person"
                      name="leave"
                      checked
                    />
                    <label for="person">Person</label>
                  </div>
                  <div>
                    <input
                      type="radio"
                      class="status-radio"
                      id="Organization"
                      name="leave"
                    />
                    <label for="Organization">Organization</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="mb-3">
              <div class="d-flex justify-content-between align-items-center">
                <label class="col-form-label">Company Name</label>
                <a
                  href=""
                  class="label-add"
                  data-bs-toggle="offcanvas"
                  data-bs-target="#offcanvas_add_2"
                >
                  <i class="ti ti-square-rounded-plus"></i>
                  Add New
                </a>
              </div>
              <vue-select
                :options="SilverSel"
                id="silversel"
                placeholder="NovaWave LLC"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Value<span class="text-danger">*</span></label
              >
              <input type="text" class="form-control" value="10" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Currency <span class="text-danger">*</span></label
              >
              <vue-select :options="CurrSel" id="currsel" placeholder="$" />
            </div>
          </div>
          <div class="col-md-12">
            <div class="row align-items-end">
              <div class="col-md-8">
                <div class="mb-3">
                  <label class="col-form-label"
                    >Phone<span class="text-danger">*</span></label
                  >
                  <input type="text" class="form-control" value="+1 875455453" />
                </div>
              </div>
              <div class="col-md-4">
                <div class="mb-3 d-flex align-items-center mt-4">
                  <vue-select :options="WoHomSel" id="wohomSel" placeholder="Work" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Source <span class="text-danger">*</span></label
              >
              <vue-select :options="WebSel" id="websel" placeholder="Phone Calls" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label"
                >Industry <span class="text-danger">*</span></label
              >
              <vue-select :options="HotSel" id="hotsel" placeholder="Banking" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label class="col-form-label">Owner</label>
              <vue-select
                :options="GueSelleads"
                id="gueselleads"
                placeholder="Darlee Robertson"
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
                value="Rated"
                :tags="tags"
              />
            </div>
          </div>
          <div class="col-md-12">
            <div class="mb-3">
              <label class="col-form-label"
                >Description <span class="text-danger">*</span></label
              >
              <textarea class="form-control" rows="5"></textarea>
            </div>
          </div>
          <div class="col-md-12">
            <div class="mb-3">
              <label class="col-form-label">Visibility</label>
              <div class="d-flex flex-wrap">
                <div class="me-2">
                  <input type="radio" class="status-radio" id="public" name="visible" />
                  <label for="public">Public</label>
                </div>
                <div class="me-2">
                  <input type="radio" class="status-radio" id="private" name="visible" />
                  <label for="private">Private</label>
                </div>
                <div data-bs-toggle="modal" data-bs-target="#access_view">
                  <input type="radio" class="status-radio" id="people" name="visible" />
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
                  <input type="radio" class="status-radio" id="inactive" name="status" />
                  <label for="inactive">Inactive</label>
                </div>
              </div>
            </div>
          </div>
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
  <!-- /Edit Lead -->

  <!-- Delete Lead -->
  <div class="modal fade" id="delete_lead" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="text-center">
            <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
              <i class="ti ti-trash-x fs-36 text-danger"></i>
            </div>
            <h4 class="mb-2">Remove Lead?</h4>
            <p class="mb-0">
              Are you sure you want to remove <br />
              lead you selected.
            </p>
            <div class="d-flex align-items-center justify-content-center mt-4">
              <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
              <router-link
                to="/crm/leads-list"
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
  <!-- /Delete Lead -->

  <!-- Create Lead -->
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
            <h3>Lead Created Successfully!!!</h3>
            <p>View the details of lead, created</p>
            <div class="col-lg-12 text-center modal-btn">
              <a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
              <router-link to="/crm/leads-details" class="btn btn-primary"
                >View Details</router-link
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Create Lead -->

  <!-- Create Company -->
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
  <div class="modal custom-modal fade" id="access_view" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Access For</h5>
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
  <!-- /Access -->

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
                      <vue-select :options="Jerald" id="jerald" placeholder="Jerald" />
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
                        :tags="tags1"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <div class="d-flex align-items-center justify-content-between">
                        <label class="col-form-label">Deals</label>
                      </div>
                      <vue-select
                        :options="Konopelski"
                        id="konopelski"
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
                        :options="Purchases"
                        id="purchases"
                        placeholder="Choose"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="col-form-label"
                        >Industry <span class="text-danger">*</span></label
                      >
                      <vue-select :options="Hotels" id="hotels" placeholder="Choose" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label class="col-form-label">Contacts</label>
                      <vue-select :options="Carol" id="carol" placeholder="Choose" />
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
                      <vue-select :options="Chinese" id="chinese" placeholder="Choose" />
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
                      <vue-select :options="Country" id="country" placeholder="Choose" />
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
            data-bs-target="#create_success_2"
          >
            Create
          </button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Add Company -->
</template>
<script>
import Vue3TagsInput from "vue3-tags-input";
export default {
  components: {
    Vue3TagsInput,
  },
  data() {
    return {
      VenSel: ["Choose", "NovaWave LLC", "SilverHawk", "SummitPeak", "RiverStone Ventur"],
      LeadsModal: ["Choose", "Dollar", "Euro", "Pound", "Rupee"],
      WorkSel: ["Choose", "Work", "Home"],
      SocialSel: [
        "Choose",
        "Phone Calls",
        "Socaial Media",
        "Referral Sites",
        "Web Analytics",
        "Previous Purchases",
      ],
      InsuSel: [
        "Choose",
        "Retail Industry",
        "Banking",
        "Hotels",
        "Financial Services",
        "Insurance",
      ],
      SilverSel: ["NovaWave LLC", "SilverHawk", "SummitPeak", "RiverStone Ventur"],
      CurrSel: ["Choose", "Dollar", "Euro", "Pound", "Rupee"],
      WoHomSel: ["Work", "Home"],
      WebSel: [
        "Phone Calls",
        "Social Media",
        "Referral Sites",
        "Web Analytics",
        "Previous Puruchases",
      ],
      HotSel: ["Banking", "Hotels", "Financial Services", "Insurance"],
      tags: ["Rated"],
      tags1: ["Collab"],
      GueSelleads: [
        "Darlee Robertson",
        "Sharon Roy",
        "Vaughan",
        "Jessica",
        "Carol Thomas",
      ],
      GueSelowner: [
        "Darlee Robertson",
        "Sharon Roy",
        "Vaughan",
        "Jessica",
        "Carol Thomas",
      ],
      Jerald: ["Jerald", "Guillory", "Jami", "Theresa", "Espinosa"],
      Konopelski: ["Choose", "Collins", "Konopelski", "Adams", "Schumm", "Wisozk"],
      Purchases: [
        "Choose",
        "Phone Calls",
        "Social Media",
        "Referral Sites",
        "Web Analytics",
        "Previous Purchases",
      ],
      Hotels: [
        "Choose",
        "Retail Industry",
        "Banking",
        "Hotels",
        "Financial Services",
        "Insurance",
      ],
      Carol: ["Darlee Robertson", "Sharon Roy", "Vaughan", "Jessica", "Carol Thomas"],
      Chinese: ["Choose", "English", "Arabic", "Chinese", "Hindi"],
      Country: ["Choose", "India", "USA", "France", "UK", "UAE"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/crm/leads-list");
    },
  },
};
</script>

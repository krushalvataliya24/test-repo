<template>
  <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-4">
    <div class="dropdown">
      <a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"
        ><i class="ti ti-sort-ascending-2 me-2"></i>Sort
      </a>
      <div class="dropdown-menu dropdown-menu-start">
        <ul>
          <li>
            <a href="javascript:void(0);" class="dropdown-item">
              <i class="ti ti-circle-chevron-right me-1"></i>Ascending
            </a>
          </li>
          <li>
            <a href="javascript:void(0);" class="dropdown-item">
              <i class="ti ti-circle-chevron-right me-1"></i>Descending
            </a>
          </li>
          <li>
            <a href="javascript:void(0);" class="dropdown-item">
              <i class="ti ti-circle-chevron-right me-1"></i>Recently Viewed
            </a>
          </li>
          <li>
            <a href="javascript:void(0);" class="dropdown-item">
              <i class="ti ti-circle-chevron-right me-1"></i>Recently Added
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="d-flex align-items-center flex-wrap row-gap-2">
      <div class="dropdown me-2">
        <a
          href="javascript:void(0);"
          class="btn bg-soft-purple text-purple"
          data-bs-toggle="dropdown"
          data-bs-auto-close="outside"
          ><i class="ti ti-columns-3 me-2"></i>Manage Columns</a
        >
        <div class="dropdown-menu dropdown-menu-md-end dropdown-md p-3">
          <h4 class="mb-2 fw-semibold">Want to manage datatables?</h4>
          <p class="mb-3">
            Please drag and drop your column to reorder your table and enable see option
            as you want.
          </p>
          <div class="border-top pt-3">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <p class="mb-0 d-flex align-items-center">
                <i class="ti ti-grip-vertical me-2"></i>User Name
              </p>
              <div class="status-toggle">
                <input type="checkbox" id="col-name" class="check" />
                <label for="col-name" class="checktoggle"></label>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <p class="mb-0 d-flex align-items-center">
                <i class="ti ti-grip-vertical me-2"></i>Rating
              </p>
              <div class="status-toggle">
                <input type="checkbox" id="col-phone" class="check" />
                <label for="col-phone" class="checktoggle"></label>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <p class="mb-0 d-flex align-items-center">
                <i class="ti ti-grip-vertical me-2"></i>Content
              </p>
              <div class="status-toggle">
                <input type="checkbox" id="col-email" class="check" checked />
                <label for="col-email" class="checktoggle"></label>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <p class="mb-0 d-flex align-items-center">
                <i class="ti ti-grip-vertical me-2"></i>Created at
              </p>
              <div class="status-toggle">
                <input type="checkbox" id="col-tag" class="check" />
                <label for="col-tag" class="checktoggle"></label>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <p class="mb-0 d-flex align-items-center">
                <i class="ti ti-grip-vertical me-2"></i>Status
              </p>
              <div class="status-toggle">
                <input type="checkbox" id="col-status" class="check" />
                <label for="col-status" class="checktoggle"></label>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mb-3">
              <p class="mb-0 d-flex align-items-center">
                <i class="ti ti-grip-vertical me-2"></i>Action
              </p>
              <div class="status-toggle">
                <input type="checkbox" id="col-action" class="check" />
                <label for="col-action" class="checktoggle"></label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-sorts dropdown">
        <a
          href="javascript:void(0);"
          data-bs-toggle="dropdown"
          data-bs-auto-close="outside"
          ><i class="ti ti-filter-share"></i>Filter</a
        >
        <div class="filter-dropdown-menu dropdown-menu dropdown-menu-md-end p-3">
          <div class="filter-set-view">
            <div class="filter-set-head">
              <h4><i class="ti ti-filter-share"></i>Filter</h4>
            </div>
            <div class="accordion" id="accordionExample">
              <div class="filter-set-content">
                <div class="filter-set-content-head">
                  <a
                    href="#"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="true"
                    aria-controls="collapseTwo"
                    >Owner</a
                  >
                </div>
                <div
                  class="filter-set-contents accordion-collapse collapse show"
                  id="collapseTwo"
                  data-bs-parent="#accordionExample"
                >
                  <div class="filter-content-list">
                    <div class="mb-2 icon-form">
                      <span class="form-icon"><i class="ti ti-search"></i></span>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Search Pages"
                      />
                    </div>
                    <ul>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox" />
                            <span class="checkmarks"></span>
                            Darlee Robertson
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox" />
                            <span class="checkmarks"></span>
                            Sharon Roy
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox" />
                            <span class="checkmarks"></span>
                            Vaughan
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox" />
                            <span class="checkmarks"></span>
                            Jessica
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox" />
                            <span class="checkmarks"></span>
                            Carol Thomas
                          </label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="filter-set-content">
                <div class="filter-set-content-head">
                  <a
                    href="#"
                    class="collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#owner"
                    aria-expanded="false"
                    aria-controls="owner"
                    >Status</a
                  >
                </div>
                <div
                  class="filter-set-contents accordion-collapse collapse"
                  id="owner"
                  data-bs-parent="#accordionExample"
                >
                  <div class="filter-content-list">
                    <div class="mb-2 icon-form">
                      <span class="form-icon"><i class="ti ti-search"></i></span>
                      <input type="text" class="form-control" placeholder="Search Slug" />
                    </div>
                    <ul>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox" checked />
                            <span class="checkmarks"></span>
                            Active
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox" />
                            <span class="checkmarks"></span>
                            Inactive
                          </label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="filter-set-content">
                <div class="filter-set-content-head">
                  <a
                    href="#"
                    class="collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#Status"
                    aria-expanded="false"
                    aria-controls="Status"
                    >Rating</a
                  >
                </div>
                <div
                  class="filter-set-contents accordion-collapse collapse"
                  id="Status"
                  data-bs-parent="#accordionExample"
                >
                  <div class="filter-content-list">
                    <ul>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox" checked />
                            <span class="checkmarks"></span>
                            <div class="rating">
                              <i class="fa fa-star filled"></i>
                              <i class="fa fa-star filled"></i>
                              <i class="fa fa-star filled"></i>
                              <i class="fa fa-star filled"></i>
                              <i class="fa fa-star filled"></i>
                              <span>5.0</span>
                            </div>
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox" />
                            <span class="checkmarks"></span>
                            <div class="rating">
                              <i class="fa fa-star filled"></i>
                              <i class="fa fa-star filled"></i>
                              <i class="fa fa-star filled"></i>
                              <i class="fa fa-star filled"></i>
                              <i class="fa fa-star"></i>
                              <span>4.0</span>
                            </div>
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox" />
                            <span class="checkmarks"></span>
                            <div class="rating">
                              <i class="fa fa-star filled"></i>
                              <i class="fa fa-star filled"></i>
                              <i class="fa fa-star filled"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <span>3.0</span>
                            </div>
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox" />
                            <span class="checkmarks"></span>
                            <div class="rating">
                              <i class="fa fa-star filled"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <span>1.0</span>
                            </div>
                          </label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="filter-set-content">
                <div class="filter-set-content-head">
                  <a
                    href="#"
                    class="collapsed"
                    data-bs-toggle="collapse"
                    data-bs-target="#Status"
                    aria-expanded="false"
                    aria-controls="Status"
                    >Created Date</a
                  >
                </div>
                <div
                  class="filter-set-contents accordion-collapse collapse"
                  id="Status"
                  data-bs-parent="#accordionExample"
                >
                  <div class="filter-content-list">
                    <ul>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox" checked />
                            <span class="checkmarks"></span>
                            25 Sep 2023, 01:22pm
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox" />
                            <span class="checkmarks"></span>
                            29 Sep 2023, 08:12 am
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox" />
                            <span class="checkmarks"></span>
                            02 Oct 2023, 10:15 am
                          </label>
                        </div>
                      </li>
                      <li>
                        <div class="filter-checks">
                          <label class="checkboxs">
                            <input type="checkbox" />
                            <span class="checkmarks"></span>
                            11 Oct 2023, 02:32 pm
                          </label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="filter-reset-btns">
              <div class="row">
                <div class="col-6">
                  <a href="#" class="btn btn-light">Reset</a>
                </div>
                <div class="col-6">
                  <router-link to="/content/testimonials" class="btn btn-primary"
                    >Filter</router-link
                  >
                </div>
              </div>
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
    return {};
  },
};
</script>

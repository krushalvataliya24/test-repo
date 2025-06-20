<template>
  <layouts-header></layouts-header>
  <layouts-sidebar></layouts-sidebar>

  <!-- Page Wrapper -->
  <div class="page-wrapper">
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- Page Header -->
          <page-header :title="title" />
          <!-- /Page Header -->

          <!-- Filter -->
          <div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2 mb-4">
            <div class="d-flex align-items-center flex-wrap row-gap-2">
              <div class="form-sorts dropdown me-2">
                <a href="javascript:void(0);" data-bs-toggle="dropdown"
                  data-bs-auto-close="outside"><i
                    class="ti ti-filter-share"></i>Filter</a>
                <div class="filter-dropdown-menu dropdown-menu  dropdown-menu-md-start p-3">
                  <div class="filter-set-view">
                    <div class="filter-set-head">
                      <h4><i class="ti ti-filter-share"></i>Filter</h4>
                    </div>
                    <div class="accordion" id="accordionExample">
                      <div class="filter-set-content">
                        <div class="filter-set-content-head">
                          <a href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="true"
                            aria-controls="collapseTwo">Deals Name</a>
                        </div>
                        <div class="filter-set-contents accordion-collapse collapse show"
                          id="collapseTwo" data-bs-parent="#accordionExample">
                          <div class="filter-content-list">
                            <div class="mb-2 icon-form">
                              <span class="form-icon"><i
                                  class="ti ti-search"></i></span>
                              <input type="text" class="form-control"
                                placeholder="Search Country">
                            </div>
                            <ul>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" checked>
                                    <span class="checkmarks"></span>
                                    Collins
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                    Konopelski
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                    Adams
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                    Gutkowski
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                    Walter
                                  </label>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="filter-set-content">
                        <div class="filter-set-content-head">
                          <a href="#" class="collapsed" data-bs-toggle="collapse"
                            data-bs-target="#owner" aria-expanded="false"
                            aria-controls="owner">Owner</a>
                        </div>
                        <div class="filter-set-contents accordion-collapse collapse"
                          id="owner" data-bs-parent="#accordionExample">
                          <div class="filter-content-list">
                            <div class="mb-2 icon-form">
                              <span class="form-icon"><i
                                  class="ti ti-search"></i></span>
                              <input type="text" class="form-control"
                                placeholder="Search Owner">
                            </div>
                            <ul>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" checked>
                                    <span class="checkmarks"></span>
                                    Hendry
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                    Guillory
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                    Jami
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                    Theresa
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                    Espinosa
                                  </label>
                                </div>
                              </li>

                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="filter-set-content">
                        <div class="filter-set-content-head">
                          <a href="#" class="collapsed" data-bs-toggle="collapse"
                            data-bs-target="#Status" aria-expanded="false"
                            aria-controls="Status">Status</a>
                        </div>
                        <div class="filter-set-contents accordion-collapse collapse"
                          id="Status" data-bs-parent="#accordionExample">
                          <div class="filter-content-list">
                            <ul>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" checked>
                                    <span class="checkmarks"></span>
                                    Won
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                    Open
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                    Lost
                                  </label>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="filter-set-content">
                        <div class="filter-set-content-head">
                          <a href="#" class="collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne">Rating</a>
                        </div>
                        <div class="filter-set-contents accordion-collapse collapse"
                          id="collapseOne" data-bs-parent="#accordionExample">
                          <div class="filter-content-list">
                            <ul>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" checked>
                                    <span class="checkmarks"></span>
                                    <span class="rating">
                                      <i
                                        class="fa fa-star filled"></i>
                                      <i
                                        class="fa fa-star filled"></i>
                                      <i
                                        class="fa fa-star filled"></i>
                                      <i
                                        class="fa fa-star filled"></i>
                                      <i
                                        class="fa fa-star filled"></i>
                                      <span>5.0</span>
                                    </span>
                                  </label>
                                </div>

                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                    <span class="rating">
                                      <i
                                        class="fa fa-star filled"></i>
                                      <i
                                        class="fa fa-star filled"></i>
                                      <i
                                        class="fa fa-star filled"></i>
                                      <i
                                        class="fa fa-star filled"></i>
                                      <i class="fa fa-star"></i>
                                      <span>4.0</span>
                                    </span>
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                    <span class="rating">
                                      <i
                                        class="fa fa-star filled"></i>
                                      <i
                                        class="fa fa-star filled"></i>
                                      <i
                                        class="fa fa-star filled"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <span>3.0</span>
                                    </span>
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                    <span class="rating">
                                      <i
                                        class="fa fa-star filled"></i>
                                      <i
                                        class="fa fa-star filled"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <span>2.0</span>
                                    </span>
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                    <span class="rating">
                                      <i
                                        class="fa fa-star filled"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <span>1.0</span>
                                    </span>
                                  </label>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="filter-set-content">
                        <div class="filter-set-content-head">
                          <a href="#" class="collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree"
                            aria-expanded="false"
                            aria-controls="collapseThree">Tags</a>
                        </div>
                        <div class="filter-set-contents accordion-collapse collapse"
                          id="collapseThree" data-bs-parent="#accordionExample">
                          <div class="filter-content-list">
                            <ul>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox" checked>
                                    <span class="checkmarks"></span>
                                    Promotion
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                    Rated
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                    Rejected
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                    Collab
                                  </label>
                                </div>
                              </li>
                              <li>
                                <div class="filter-checks">
                                  <label class="checkboxs">
                                    <input type="checkbox">
                                    <span class="checkmarks"></span>
                                    Calls
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
                          <router-link to="/crm/deals-kanban" class="btn btn-primary">Filter</router-link>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="icon-form mb-3 mb-sm-0">
                <span class="form-icon"><i class="ti ti-search"></i></span>
                <input type="text" class="form-control" placeholder="Search Deals">
              </div>
            </div>
            <div>
              <ul class="d-flex align-items-center">
                <li>
                  <div class="view-icons me-2">
                    <router-link to="/crm/deals-list"><i class="ti ti-list-tree"></i></router-link>
                    <router-link to="/crm/deals-kanban" class="active"><i class="ti ti-grid-dots"></i></router-link>
                  </div>
                </li>																	
                <li>
                  <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add"><i class="ti ti-square-rounded-plus me-2"></i>Add Deals</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- /Filter -->

          <!-- Deals Kanban -->
          <deals-board></deals-board>
          <!-- /Deals Kanban -->
        </div>
      </div>
    </div>
  </div>
  <!-- /Page Wrapper -->
  <deals-list-modal></deals-list-modal>
</template>

<script>
export default {
  data() {
    return {
      title: "Deals",
    };
  },
};
</script>
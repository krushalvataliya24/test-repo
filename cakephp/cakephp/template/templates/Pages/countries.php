<!DOCTYPE html>
<html lang="en">

<head>

	<?= $this->element('title-meta') ?>
	<!-- Title -->
	<title>Countries | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>

	<!-- Bootstrap Tagsinput CSS -->
	<?php echo $this->Html->css('plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') ?>

	<?= $this->element('head-css') ?>
</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<?= $this->element('header') ?>
		<?= $this->element('sidebar') ?>

	

<!-- Page Wrapper -->
<div class="page-wrapper">
<div class="content">

    <div class="row">
        <div class="col-md-12">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="page-title">Countries</h4>
                    </div>
                    <div class="col-4 text-end">
                        <div class="head-icons">
                            <a href="countries" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
                            <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-original-title="Collapse" id="collapse-header"><i
                                    class="ti ti-chevrons-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="card">

                <div class="card-header">
                    <!-- Search -->
                    <div class="row align-items-center">
                        <div class="col-sm-4">
                            <div class="icon-form mb-3 mb-sm-0">
                                <span class="form-icon"><i class="ti ti-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search Countries">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div
                                class="d-flex align-items-center flex-wrap row-gap-2 justify-content-sm-end">
                                <div class="dropdown me-2">
                                    <a href="javascript:void(0);" class="dropdown-toggle"
                                        data-bs-toggle="dropdown"><i
                                            class="ti ti-package-export me-2"></i>Export</a>
                                    <div class="dropdown-menu  dropdown-menu-end">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i
                                                        class="ti ti-file-type-pdf text-danger me-1"></i>Export
                                                    as PDF</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i
                                                        class="ti ti-file-type-xls text-green me-1"></i>Export
                                                    as Excel </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#add_country"><i
                                        class="ti ti-square-rounded-plus me-2"></i>Add Country</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Search -->
                </div>

                <div class="card-body">

                    <!-- Filter -->
                    <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-4">
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle"
                                data-bs-toggle="dropdown"><i class="ti ti-sort-ascending-2 me-2"></i>Sort
                            </a>
                            <div class="dropdown-menu  dropdown-menu-start">
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
                                <a href="javascript:void(0);" class="btn bg-soft-purple text-purple"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside"><i
                                        class="ti ti-columns-3 me-2"></i>Manage Columns</a>
                                <div class="dropdown-menu  dropdown-menu-md-end dropdown-md p-3">
                                    <h4 class="mb-2 fw-semibold">Want to manage datatables?</h4>
                                    <p class="mb-3">Please drag and drop your column to reorder your table
                                        and enable see option as you want.</p>
                                    <div class="border-top pt-3">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <p class="mb-0 d-flex align-items-center"><i
                                                    class="ti ti-grip-vertical me-2"></i>Country Code</p>
                                            <div class="status-toggle">
                                                <input type="checkbox" id="col-name" class="check">
                                                <label for="col-name" class="checktoggle"></label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <p class="mb-0 d-flex align-items-center"><i
                                                    class="ti ti-grip-vertical me-2"></i>Country ID</p>
                                            <div class="status-toggle">
                                                <input type="checkbox" id="col-phone" class="check">
                                                <label for="col-phone" class="checktoggle"></label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <p class="mb-0 d-flex align-items-center"><i
                                                    class="ti ti-grip-vertical me-2"></i>Country Name</p>
                                            <div class="status-toggle">
                                                <input type="checkbox" id="col-email" class="check" checked>
                                                <label for="col-email" class="checktoggle"></label>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <p class="mb-0 d-flex align-items-center"><i
                                                    class="ti ti-grip-vertical me-2"></i>Action</p>
                                            <div class="status-toggle">
                                                <input type="checkbox" id="col-tag" class="check">
                                                <label for="col-tag" class="checktoggle"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-sorts dropdown">
                                <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside"><i
                                        class="ti ti-filter-share"></i>Filter</a>
                                <div class="filter-dropdown-menu dropdown-menu  dropdown-menu-md-end p-3">
                                    <div class="filter-set-view">
                                        <div class="filter-set-head">
                                            <h4><i class="ti ti-filter-share"></i>Filter</h4>
                                        </div>
                                        <div class="accordion" id="accordionExample">
                                            <div class="filter-set-content">
                                                <div class="filter-set-content-head">
                                                    <a href="#" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo" aria-expanded="true"
                                                        aria-controls="collapseTwo">Country Code</a>
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
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        AS
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        AD
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        AO
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        AI
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        AQ
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
                                                        aria-controls="owner">Country ID</a>
                                                </div>
                                                <div class="filter-set-contents accordion-collapse collapse"
                                                    id="owner" data-bs-parent="#accordionExample">
                                                    <div class="filter-content-list">
                                                        <ul>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox" checked>
                                                                        <span class="checkmarks"></span>
                                                                        684
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        376
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
                                                        aria-controls="Status">Country Name</a>
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
                                                                        American Samoa
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        Andorra
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        Angalo
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        Anguilla
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="filter-checks">
                                                                    <label class="checkboxs">
                                                                        <input type="checkbox">
                                                                        <span class="checkmarks"></span>
                                                                        Antarctica
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
                                                    <a href="countries"
                                                        class="btn btn-primary">Filter</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Filter -->

                    <!-- Countries List -->
                    <div class="table-responsive custom-table">
                        <table class="table" id="countrieslist">
                            <thead class="thead-light">
                                <tr>
                                    <th class="no-sort">
                                        <label class="checkboxs">
                                            <input type="checkbox" id="select-all"><span
                                                class="checkmarks"></span>
                                        </label>
                                    </th>
                                    <th class="no-sort"></th>
                                    <th>Country Code</th>
                                    <th>Country ID</th>
                                    <th>Country Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="datatable-length"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="datatable-paginate"></div>
                        </div>
                    </div>
                    <!-- /Countries List -->

                </div>
            </div>
        </div>
    </div>

</div>
</div>
<!-- /Page Wrapper -->

<!-- Add country -->
<div class="modal fade" id="add_country" role="dialog">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Add Country</h5>
            <div class="d-flex align-items-center">
                <button class="btn-close custom-btn-close border p-1 me-0 text-dark" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
        </div>
        <form action="countries">
            <div class="modal-body">
                <div class="mb-3">
                    <label class="col-form-label">Country Code <span class="text-danger">*</span></label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Country ID <span class="text-danger">*</span></label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-0">
                    <label class="col-form-label">Country Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex align-items-center justify-content-end m-0">
                    <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<!-- /Add country  -->

<!-- Edit country  -->
<div class="modal fade" id="edit_country" role="dialog">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Edit Country</h5>
            <div class="d-flex align-items-center">
                <button class="btn-close custom-btn-close border p-1 me-0 text-dark" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
        </div>
        <form action="countries">
            <div class="modal-body">
                <div class="mb-3">
                    <label class="col-form-label">Country Code <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="AS">
                </div>
                <div class="mb-3">
                    <label class="col-form-label">Country ID <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="684">
                </div>
                <div class="mb-0">
                    <label class="col-form-label">Country Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="American Samoa(+684)">
                </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex align-items-center justify-content-end m-0">
                    <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<!-- /Edit country  -->

<!-- Delete Countries -->
<div class="modal fade" id="delete_country" role="dialog">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body">
            <div class="text-center">
                <div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
                    <i class="ti ti-trash-x fs-36 text-danger"></i>
                </div>
                <h4 class="mb-2">Remove Country?</h4>
                <p class="mb-0">Are you sure you want to remove it</p>
                <div class="d-flex align-items-center justify-content-center mt-4">
                    <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                    <a href="countries" class="btn btn-danger">Yes, Delete it</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /Delete Countries -->


        </div>
	<!-- /Main Wrapper -->

	<?= $this->element('vendor-scripts') ?>

	<!-- Bootstrap Tagsinput JS -->
	<?php echo $this->Html->script('plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') ?>


</body>

</html>
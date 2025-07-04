<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Invoice | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
	<?php include 'layouts/title-meta.php'; ?>

	<!-- Summernote CSS -->
	<link rel="stylesheet" href="assets/plugins/summernote/summernote-lite.min.css">

	<!-- Bootstrap Tagsinput CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

	<?php include 'layouts/head-css.php'; ?>
</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<?php include 'layouts/menu.php'; ?>

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content">

				<div class="row">
					<div class="col-md-12">

						<!-- Page Header -->
						<div class="page-header">
							<div class="row align-items-center">
								<div class="col-4">
									<h4 class="page-title">Invoices<span class="count-title">123</span></h4>
								</div>
								<div class="col-8 text-end">
									<div class="head-icons">
										<a href="invoices.php" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh">
											<i class="ti ti-refresh-dot"></i>
										</a>
										<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
											<i class="ti ti-chevrons-up"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Page Header -->

						<div class="card ">
							<div class="card-header">
								<!-- Search -->
								<div class="row align-items-center">
									<div class="col-sm-4">
										<div class="icon-form mb-3 mb-sm-0">
											<span class="form-icon"><i class="ti ti-search"></i></span>
											<input type="text" class="form-control" placeholder="Search Invoices">
										</div>
									</div>
									<div class="col-sm-8">
										<div class="d-flex align-items-center flex-wrap row-gap-2 justify-content-sm-end">
											<div class="dropdown me-2">
												<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="ti ti-package-export me-2"></i>Export</a>
												<div class="dropdown-menu  dropdown-menu-end">
													<ul>
														<li>
															<a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-file-type-pdf text-danger me-1"></i>Export as PDF</a>
														</li>
														<li>
															<a href="javascript:void(0);" class="dropdown-item"><i class="ti ti-file-type-xls text-green me-1"></i>Export as Excel </a>
														</li>
													</ul>
												</div>
											</div>
											<a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add"><i class="ti ti-square-rounded-plus me-2"></i>Add New Invoices</a>
										</div>
									</div>
								</div>
								<!-- /Search -->
							</div>
							<div class="card-body">
								<!-- Filter -->
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-4">
									<div class="d-flex align-items-center flex-wrap row-gap-2">
										<div class="sort-dropdown drop-down task-drops me-3">
											<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown">All Invoices </a>
											<div class="dropdown-menu  dropdown-menu-start">
												<ul>
													<li>
														<a href="#">
															<i class="ti ti-dots-vertical"></i>All Invoices
														</a>
													</li>
													<li>
														<a href="#">
															<i class="ti ti-dots-vertical"></i>Paid
														</a>
													</li>
													<li>
														<a href="#">
															<i class="ti ti-dots-vertical"></i>Partially Paid
														</a>
													</li>
													<li>
														<a href="#">
															<i class="ti ti-dots-vertical"></i>Overdue
														</a>
													</li>
													<li>
														<a href="#">
															<i class="ti ti-dots-vertical"></i>Unpaid
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="dropdown me-2">
											<a href="javascript:void(0);" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="ti ti-sort-ascending-2 me-2"></i>Sort </a>
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
										<div class="icon-form">
											<span class="form-icon"><i class="ti ti-calendar"></i></span>
											<input type="text" class="form-control bookingrange" placeholder="">
										</div>
									</div>
									<div class="d-flex align-items-center flex-wrap row-gap-2">
										<div class="dropdown me-2">
											<a href="javascript:void(0);" class="btn bg-soft-purple text-purple" data-bs-toggle="dropdown" data-bs-auto-close="outside"><i class="ti ti-columns-3 me-2"></i>Manage Columns</a>
											<div class="dropdown-menu  dropdown-menu-md-end dropdown-md p-3">
												<h4 class="mb-2 fw-semibold">Want to manage datatables?</h4>
												<p class="mb-3">Please drag and drop your column to reorder your table and enable see option as you want.</p>
												<div class="border-top pt-3">
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Estimations ID</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-name" class="check">
															<label for="col-name" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Client</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-phone" class="check">
															<label for="col-phone" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Project</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-email" class="check">
															<label for="col-email" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Due Date</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-tag" class="check">
															<label for="col-tag" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Amount</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-loc" class="check">
															<label for="col-loc" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Paid Amount</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-rate" class="check">
															<label for="col-rate" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Balance Amount</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-owner" class="check">
															<label for="col-owner" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Status</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-status" class="check">
															<label for="col-status" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between">
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Action</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-action" class="check">
															<label for="col-action" class="checktoggle"></label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-sorts dropdown me-2">
											<a href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"><i class="ti ti-filter-share"></i>Filter</a>
											<div class="filter-dropdown-menu dropdown-menu  dropdown-menu-md-end p-4">
												<div class="filter-set-view">
													<div class="filter-set-head">
														<h4><i class="ti ti-filter-share"></i>Filter</h4>
													</div>
													<div class="accordion" id="accordionExample">

														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#owner" aria-expanded="false" aria-controls="owner">Client</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse" id="owner" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<div class="mb-2 icon-form">
																		<span class="form-icon"><i class="ti ti-search"></i></span>
																		<input type="text" class="form-control" placeholder="Search Client">
																	</div>
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					NovaWave LLC
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Redwood Inc
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					HarborVie w
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					CoastalStar Co.
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					RiverStone Ventur
																				</label>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>


														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Project</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					Truelysell
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Dreamsports
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Best@laundry
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Doccure
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
																	data-bs-target="#collapsethree" aria-expanded="false"
																	aria-controls="collapsethree">Amount</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse"
																id="collapsethree" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<div class="mb-2 icon-form">
																		<span class="form-icon"><i class="ti ti-search"></i></span>
																		<input type="text" class="form-control" placeholder="Search Amount">
																	</div>
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					$2,15,000
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					$1,45,000
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					$2,15,000
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					$4,80,380
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					$2,12,000
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
																<a href="invoices.php" class="btn btn-primary">Filter</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="view-icons">
											<a href="invoices.php" class="active"><i class="ti ti-list-tree"></i></a>
											<a href="invoice-grid.php"><i class="ti ti-grid-dots"></i></a>
										</div>
									</div>
								</div>
								<!-- /Filter -->

								<!-- Projects List -->
								<div class="table-responsive custom-table">
									<table class="table datatable">
										<thead class="thead-light">
											<tr>
												<th class="no-sort">
													<label class="checkboxs"><input type="checkbox" id="select-all"><span class="checkmarks"></span></label>
												</th>
												<th></th>
												<th>Invoice ID</th>
												<th>Client</th>
												<th>Project</th>
												<th>Due Date</th>
												<th>Amount</th>
												<th>Paid Amount</th>
												<th>Balance Amount</th>
												<th>Status</th>
												<th class="text-end">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
												</td>
												<td>
													<div class="set-star rating-select"><i class="fa fa-star"></i></div>
												</td>
												<td><a href="#" class="title-name">#1254058</a></td>
												<td>
													<h2 class="d-flex align-items-center"><a href="company-details.php" class="avatar avatar-sm border me-2"><img
																class="w-auto h-auto" src="assets/img/icons/company-icon-01.svg" alt="User Image"></a><a
															href="company-details.php" class="d-flex flex-column">NovaWave LLC</a></h2>
												</td>
												<td>
													<h2 class="d-flex align-items-center"><a href="#" class="avatar avatar-sm border me-2"><img class="w-auto h-auto"
																src="assets/img/priority/truellysel.svg" alt="User Image"></a><a href="#"
															class="d-flex flex-column">Truelysell</a></h2>
												</td>
												<td>21 May 2024</td>
												<td>$2,15,000</td>
												<td>$2,15,000</td>
												<td>$0</td>
												<td><span class="badge badge-pill badge-status bg-warning">Partially Paid</span></td>
												<td>
													<div class="dropdown table-action">
														<a href="#" class="action-icon " data-bs-toggle="dropdown"
															aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices"><i class="ti ti-trash text-danger"></i>Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-clipboard-copy text-green"></i> View Invoices</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-checks text-success"></i> Mark as Paid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-file text-tertiary"></i> Mark as Partially Paid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-sticker text-blue"></i> Mark ad Unpaid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-printer text-info"></i> Print</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td><label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
												</td>
												<td>
													<div class="set-star rating-select"><i class="fa fa-star"></i></div>
												</td>
												<td><a href="#" class="title-name">#1254057</a></td>
												<td>
													<h2 class="d-flex align-items-center"><a href="company-details.php" class="avatar avatar-sm border me-2"><img
																class="w-auto h-auto" src="assets/img/icons/company-icon-10.svg" alt="User Image"></a><a
															href="company-details.php" class="d-flex flex-column">BlueSky Industries</a></h2>
												</td>
												<td>
													<h2 class="d-flex align-items-center"><a href="#" class="avatar avatar-sm border me-2"><img class="w-auto h-auto"
																src="assets/img/priority/project-01.svg" alt="User Image"></a><a href="#"
															class="d-flex flex-column">Dreamschat</a></h2>
												</td>
												<td>19 Oct 2023</td>
												<td>$1,45,000</td>
												<td>$1,45,000</td>
												<td>$0</td>
												<td><span class="badge badge-pill badge-status bg-success">Paid</span></td>
												<td>
													<div class="dropdown table-action">
														<a href="#" class="action-icon " data-bs-toggle="dropdown"
															aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices"><i class="ti ti-trash text-danger"></i>Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-clipboard-copy text-green"></i> View Invoices</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-checks text-success"></i> Mark as Paid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-file text-tertiary"></i> Mark as Partially Paid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-sticker text-blue"></i> Mark ad Unpaid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-printer text-info"></i> Print</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td><label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
												</td>
												<td>
													<div class="set-star rating-select"><i class="fa fa-star"></i></div>
												</td>
												<td><a href="#" class="title-name">#1254056</a></td>
												<td>
													<h2 class="d-flex align-items-center"><a href="company-details.php" class="avatar avatar-sm border me-2"><img
																class="w-auto h-auto" src="assets/img/icons/company-icon-08.svg" alt="User Image"></a><a
															href="company-details.php" class="d-flex flex-column">Silver Hawk</a></h2>
												</td>
												<td>
													<h2 class="d-flex align-items-center"><a href="#" class="avatar avatar-sm border me-2"><img class="w-auto h-auto"
																src="assets/img/priority/best.svg" alt="User Image"></a><a href="#"
															class="d-flex flex-column">Truelysell</a></h2>
												</td>
												<td>24 Oct 2023</td>
												<td>$2,15,000</td>
												<td>$1,00,000</td>
												<td>$1,15,000</td>
												<td><span class="badge badge-pill badge-status bg-warning">Partially Paid</span></td>
												<td>
													<div class="dropdown table-action">
														<a href="#" class="action-icon " data-bs-toggle="dropdown"
															aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices"><i class="ti ti-trash text-danger"></i>Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-clipboard-copy text-green"></i> View Invoices</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-checks text-success"></i> Mark as Paid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-file text-tertiary"></i> Mark as Partially Paid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-sticker text-blue"></i> Mark ad Unpaid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-printer text-info"></i> Print</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td><label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
												</td>
												<td>
													<div class="set-star rating-select"><i class="fa fa-star"></i></div>
												</td>
												<td><a href="#" class="title-name">#1254055</a></td>
												<td>
													<h2 class="d-flex align-items-center"><a href="company-details.php" class="avatar avatar-sm border me-2"><img
																class="w-auto h-auto" src="assets/img/icons/company-icon-07.svg" alt="User Image"></a><a
															href="company-details.php" class="d-flex flex-column">Summit Peak</a></h2>
												</td>
												<td>
													<h2 class="d-flex align-items-center"><a href="#" class="avatar avatar-sm border me-2"><img class="w-auto h-auto"
																src="assets/img/priority/project-02.svg" alt="User Image"></a><a href="#"
															class="d-flex flex-column">Servbook</a></h2>
												</td>
												<td>10 Nov 2023</td>
												<td>$4,80,380</td>
												<td>$4,80,380</td>
												<td>$0</td>
												<td><span class="badge badge-pill badge-status bg-success">Paid</span></td>
												<td>
													<div class="dropdown table-action">
														<a href="#" class="action-icon " data-bs-toggle="dropdown"
															aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices"><i class="ti ti-trash text-danger"></i>Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-clipboard-copy text-green"></i> View Invoices</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-checks text-success"></i> Mark as Paid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-file text-tertiary"></i> Mark as Partially Paid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-sticker text-blue"></i> Mark ad Unpaid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-printer text-info"></i> Print</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td><label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
												</td>
												<td>
													<div class="set-star rating-select"><i class="fa fa-star"></i></div>
												</td>
												<td><a href="#" class="title-name">#1254054</a></td>
												<td>
													<h2 class="d-flex align-items-center"><a href="company-details.php" class="avatar avatar-sm border me-2"><img
																class="w-auto h-auto" src="assets/img/icons/company-icon-05.svg" alt="User Image"></a><a
															href="company-details.php" class="d-flex flex-column">RiverStone Ventur</a></h2>
												</td>
												<td>
													<h2 class="d-flex align-items-center"><a href="#" class="avatar avatar-sm border me-2"><img class="w-auto h-auto"
																src="assets/img/priority/project-01.svg" alt="User Image"></a><a href="#"
															class="d-flex flex-column">DreamPOS</a></h2>
												</td>
												<td>18 Nov 2023</td>
												<td>$2,12,000</td>
												<td>$0</td>
												<td>$2,12,000</td>
												<td><span class="badge badge-pill badge-status bg-danger">Unpaid</span></td>
												<td>
													<div class="dropdown table-action">
														<a href="#" class="action-icon " data-bs-toggle="dropdown"
															aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices"><i class="ti ti-trash text-danger"></i>Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-clipboard-copy text-green"></i> View Invoices</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-checks text-success"></i> Mark as Paid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-file text-tertiary"></i> Mark as Partially Paid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-sticker text-blue"></i> Mark ad Unpaid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-printer text-info"></i> Print</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td><label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
												</td>
												<td>
													<div class="set-star rating-select"><i class="fa fa-star"></i></div>
												</td>
												<td><a href="#" class="title-name">#1254053</a></td>
												<td>
													<h2 class="d-flex align-items-center"><a href="company-details.php" class="avatar avatar-sm border me-2"><img
																class="w-auto h-auto" src="assets/img/icons/company-icon-04.svg" alt="User Image"></a><a
															href="company-details.php" class="d-flex flex-column">CoastalStar Co.</a></h2>
												</td>
												<td>
													<h2 class="d-flex align-items-center"><a href="#" class="avatar avatar-sm border me-2"><img class="w-auto h-auto"
																src="assets/img/priority/dream-pos.svg" alt="User Image"></a><a href="#"
															class="d-flex flex-column">Kofejob</a></h2>
												</td>
												<td>20 Nov 2023</td>
												<td>$3,50,000</td>
												<td>$1,50,000</td>
												<td>$2,00,000</td>
												<td><span class="badge badge-pill badge-status bg-warning">Partially Paid</span></td>
												<td>
													<div class="dropdown table-action">
														<a href="#" class="action-icon " data-bs-toggle="dropdown"
															aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices"><i class="ti ti-trash text-danger"></i>Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-clipboard-copy text-green"></i> View Invoices</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-checks text-success"></i> Mark as Paid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-file text-tertiary"></i> Mark as Partially Paid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-sticker text-blue"></i> Mark ad Unpaid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-printer text-info"></i> Print</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td><label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
												</td>
												<td>
													<div class="set-star rating-select"><i class="fa fa-star"></i></div>
												</td>
												<td><a href="#" class="title-name">#1254052</a></td>
												<td>
													<h2 class="d-flex align-items-center"><a href="company-details.php" class="avatar avatar-sm border me-2"><img
																class="w-auto h-auto" src="assets/img/icons/company-icon-03.svg" alt="User Image"></a><a
															href="company-details.php" class="d-flex flex-column">HarborView</a></h2>
												</td>
												<td>
													<h2 class="d-flex align-items-center"><a href="#" class="avatar avatar-sm border me-2"><img class="w-auto h-auto"
																src="assets/img/priority/servbook.svg" alt="User Image"></a><a href="#"
															class="d-flex flex-column">Doccure</a></h2>
												</td>
												<td>07 Dec 2023</td>
												<td>$1,23,000</td>
												<td>$1,23,000</td>
												<td>$1,23,000</td>
												<td><span class="badge badge-pill badge-status bg-violet">Overdue</span></td>
												<td>
													<div class="dropdown table-action">
														<a href="#" class="action-icon " data-bs-toggle="dropdown"
															aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices"><i class="ti ti-trash text-danger"></i>Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-clipboard-copy text-green"></i> View Invoices</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-checks text-success"></i> Mark as Paid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-file text-tertiary"></i> Mark as Partially Paid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-sticker text-blue"></i> Mark ad Unpaid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-printer text-info"></i> Print</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td><label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
												</td>
												<td>
													<div class="set-star rating-select"><i class="fa fa-star"></i></div>
												</td>
												<td><a href="#" class="title-name">#1254051</a></td>
												<td>
													<h2 class="d-flex align-items-center"><a href="company-details.php" class="avatar avatar-sm border me-2"><img
																class="w-auto h-auto" src="assets/img/icons/company-icon-02.svg" alt="User Image"></a><a
															href="company-details.php" class="d-flex flex-column">Golden Gate Ltd</a></h2>
												</td>
												<td>
													<h2 class="d-flex align-items-center"><a href="#" class="avatar avatar-sm border me-2"><img class="w-auto h-auto"
																src="assets/img/priority/truellysell.svg" alt="User Image"></a><a href="#"
															class="d-flex flex-column">Best@laundry</a></h2>
												</td>
												<td>14 Dec 2023</td>
												<td>$3,12,500</td>
												<td>$3,12,500</td>
												<td>$0</td>
												<td><span class="badge badge-pill badge-status bg-success">Paid</span></td>
												<td>
													<div class="dropdown table-action">
														<a href="#" class="action-icon " data-bs-toggle="dropdown"
															aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices"><i class="ti ti-trash text-danger"></i>Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-clipboard-copy text-green"></i> View Invoices</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-checks text-success"></i> Mark as Paid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-file text-tertiary"></i> Mark as Partially Paid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-sticker text-blue"></i> Mark ad Unpaid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-printer text-info"></i> Print</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td><label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
												</td>
												<td>
													<div class="set-star rating-select"><i class="fa fa-star"></i></div>
												</td>
												<td><a href="#" class="title-name">#1254050</a></td>
												<td>
													<h2 class="d-flex align-items-center"><a href="company-details.php" class="avatar avatar-sm border me-2"><img
																class="w-auto h-auto" src="assets/img/icons/company-icon-09.svg" alt="User Image"></a><a
															href="company-details.php" class="d-flex flex-column">Redwood Inc</a></h2>
												</td>
												<td>
													<h2 class="d-flex align-items-center"><a href="#" class="avatar avatar-sm border me-2"><img class="w-auto h-auto"
																src="assets/img/priority/dreamchat.svg" alt="User Image"></a><a href="#"
															class="d-flex flex-column">Dreamsports</a></h2>
												</td>
												<td>22 Dec 2023</td>
												<td>$4,18,000</td>
												<td>$0</td>
												<td>$4,18,000</td>
												<td><span class="badge badge-pill badge-status bg-danger">Unpaid</span></td>
												<td>
													<div class="dropdown table-action">
														<a href="#" class="action-icon " data-bs-toggle="dropdown"
															aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices"><i class="ti ti-trash text-danger"></i>Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-clipboard-copy text-green"></i> View Invoices</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-checks text-success"></i> Mark as Paid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-file text-tertiary"></i> Mark as Partially Paid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-sticker text-blue"></i> Mark ad Unpaid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-printer text-info"></i> Print</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td><label class="checkboxs"><input type="checkbox"><span class="checkmarks"></span></label>
												</td>
												<td>
													<div class="set-star rating-select"><i class="fa fa-star"></i></div>
												</td>
												<td><a href="#" class="title-name">#1254049</a></td>
												<td>
													<h2 class="d-flex align-items-center"><a href="company-details.php" class="avatar avatar-sm border me-2"><img
																class="w-auto h-auto" src="assets/img/icons/company-icon-01.svg" alt="User Image"></a><a
															href="company-details.php" class="d-flex flex-column">NovaWave LLC</a></h2>
												</td>
												<td>
													<h2 class="d-flex align-items-center"><a href="#" class="avatar avatar-sm border me-2"><img class="w-auto h-auto"
																src="assets/img/priority/dreamchat.svg" alt="User Image"></a><a href="#"
															class="d-flex flex-column">Truelysell</a></h2>
												</td>
												<td>28 Dec 2023</td>
												<td>$5,00,000</td>
												<td>$5,00,000</td>
												<td>$0</td>
												<td><span class="badge badge-pill badge-status bg-success">Paid</span></td>
												<td>
													<div class="dropdown table-action">
														<a href="#" class="action-icon " data-bs-toggle="dropdown"
															aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices"><i class="ti ti-trash text-danger"></i>Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-clipboard-copy text-green"></i> View Invoices</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-checks text-success"></i> Mark as Paid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-file text-tertiary"></i> Mark as Partially Paid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-sticker text-blue"></i> Mark ad Unpaid</a>
															<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-printer text-info"></i> Print</a>
														</div>
													</div>
												</td>
											</tr>
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
								<!-- /Projects List -->

							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add New Invoices -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
			<div class="offcanvas-header border-bottom">
				<h4>Add New Invoice</h4>
				<button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="invoices.php">
					<div>
						<div class="row">
							<div class="mb-3">
								<div class="d-flex align-items-center justify-content-between">
									<label class="col-form-label">Client</label>
									<a href="#" class="label-add" data-bs-toggle="modal" data-bs-target="#add_deal"><i class="ti ti-square-rounded-plus"></i>Add New</a>
								</div>
								<select class="select">
									<option>Choose</option>
									<option>NovaWave LLC</option>
									<option>BlueSky Industries</option>
									<option>ASilver Hawkdams</option>
								</select>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Bill To<span class="text-danger"> *</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Ship To<span class="text-danger"> *</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="mb-3">
								<div class="d-flex align-items-center justify-content-between">
									<label class="col-form-label">Project</label>
									<a href="#" class="label-add" data-bs-toggle="modal" data-bs-target="#add_deal"><i class="ti ti-square-rounded-plus"></i>Add New</a>
								</div>
								<select class="select">
									<option>Choose</option>
									<option>Truelysell</option>
									<option>Dreamschat</option>
									<option>Servbook</option>
								</select>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Amount<span class="text-danger"> *</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Currency</label>
									<select class="select2">
										<option>Choose</option>
										<option>$</option>
										<option>INR</option>
										<option>Euro</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Invoice Date <span class="text-danger">*</span></label>
									<div class="icon-form">
										<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
										<input type="text" class="form-control datetimepicker" placeholder="">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Due Date<span class="text-danger">*</span></label>
									<div class="icon-form">
										<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
										<input type="text" class="form-control datetimepicker" placeholder="">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Payment Method</label>
									<select class="select">
										<option>Choose</option>
										<option>Active</option>
										<option>Inactive</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Status</label>
									<select class="select">
										<option>Choose</option>
										<option>Active</option>
										<option>Inactive</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Description <span class="text-danger">*</span></label>
									<div class="summernote"></div>
								</div>
							</div>
							<div class="mb-3">
								<div class="d-flex align-items-center justify-content-between">
									<label class="col-form-label">Project</label>
									<a href="#" class="label-add" data-bs-toggle="modal" data-bs-target="#add_deal"><i class="ti ti-square-rounded-plus"></i>Add New</a>
								</div>
								<select class="select">
									<option>Choose</option>
									<option>NovaWave LLC</option>
									<option>BlueSky Industries</option>
									<option>ASilver Hawkdams</option>
								</select>
							</div>
							<div class="table-responsive">
								<table class="table table-view">
									<thead>
										<tr>
											<th>Item</th>
											<th>Quantity</th>
											<th>Price</th>
											<th>Discount</th>
											<th>Amount</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="input-table input-table-descripition">
													<input type="text">
												</div>
											</td>
											<td>
												<div class="input-table">
													<input type="text">
												</div>
											</td>
											<td>
												<div class="input-table">
													<input type="text">
												</div>
											</td>
											<td>
												<div class="input-table">
													<select>
														<option>%</option>
														<option>5%</option>
													</select>
												</div>
											</td>
											<td>
												<div class="input-table">
													<input type="text">
												</div>
											</td>
											<td>
												<a href="#" class="btn btn-success-light">
													<i class="ti ti-check"></i>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="subtotal-div mb-3">
								<ul class="mb-3">
									<li>
										<h5>Subtotal</h5>
										<h6>$0.00</h6>
									</li>
									<li>
										<h5>Discount 2%</h5>
										<h6>$0.00</h6>
									</li>
									<li>
										<h5>Extra Discount 0%</h5>
										<h6>$0.00</h6>
									</li>
									<li>
										<h5>Tax</h5>
										<h6>$0.00</h6>
									</li>
									<li>
										<h5>Total</h5>
										<h6>$0.00</h6>
									</li>
								</ul>
								<div class="row">
									<div class="mb-3">
										<label class="col-form-label">Signature Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="mb-3">
										<label class="col-form-label">Signature Image</label>
										<div class="upload-signature">
											<input type="file">
											<a href="#">Upload Signature</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Notes<span class="text-danger"> *</span></label>
									<textarea class="form-control" rows="5"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Terms & Conditions<span class="text-danger"> *</span></label>
									<textarea class="form-control" rows="5"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
						<button type="submit" class="btn btn-primary">Create</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Add New Invoices -->

		<!-- Edit Invoices -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
			<div class="offcanvas-header border-bottom">
				<h4>Edit Invoice</h4>
				<button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="invoices.php">
					<div>
						<div class="row">
							<div class="mb-3">
								<div class="d-flex align-items-center justify-content-between">
									<label class="col-form-label">Client</label>
									<a href="#" class="label-add" data-bs-toggle="modal" data-bs-target="#add_deal"><i class="ti ti-square-rounded-plus"></i>Add New</a>
								</div>
								<select class="select">
									<option>Choose</option>
									<option selected>NovaWave LLC</option>
									<option>BlueSky Industries</option>
									<option>ASilver Hawkdams</option>
								</select>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Bill To<span class="text-danger"> *</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Ship To<span class="text-danger"> *</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="mb-3">
								<div class="d-flex align-items-center justify-content-between">
									<label class="col-form-label">Project</label>
									<a href="#" class="label-add" data-bs-toggle="modal" data-bs-target="#add_deal"><i class="ti ti-square-rounded-plus"></i>Add New</a>
								</div>
								<select class="select">
									<option>Choose</option>
									<option selected>Truelysell</option>
									<option>Dreamschat</option>
									<option>Servbook</option>
								</select>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Amount<span class="text-danger"> *</span></label>
									<input class="form-control" type="text" value="2,15,000">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Currency</label>
									<select class="select2">
										<option>Choose</option>
										<option>$</option>
										<option>INR</option>
										<option>Euro</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Invoice Date <span class="text-danger">*</span></label>
									<div class="icon-form">
										<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
										<input type="text" class="form-control datetimepicker" value="15 Oct 2023">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Due Date<span class="text-danger">*</span></label>
									<div class="icon-form">
										<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
										<input type="text" class="form-control datetimepicker" value="20 Oct 2023">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Payment Method</label>
									<select class="select">
										<option>Choose</option>
										<option>Active</option>
										<option>Inactive</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Status</label>
									<select class="select">
										<option>Choose</option>
										<option>Active</option>
										<option>Inactive</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Description <span class="text-danger">*</span></label>
									<div class="summernote"></div>
								</div>
							</div>
							<div class="mb-3">
								<div class="d-flex align-items-center justify-content-between">
									<label class="col-form-label">Project</label>
									<a href="#" class="label-add" data-bs-toggle="modal" data-bs-target="#add_deal"><i class="ti ti-square-rounded-plus"></i>Add New</a>
								</div>
								<select class="select">
									<option>Choose</option>
									<option>NovaWave LLC</option>
									<option>BlueSky Industries</option>
									<option>ASilver Hawkdams</option>
								</select>
							</div>
							<div class="table-responsive">
								<table class="table table-view">
									<thead>
										<tr>
											<th>Item</th>
											<th>Quantity</th>
											<th>Price</th>
											<th>Discount</th>
											<th>Amount</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="input-table input-table-descripition">
													<input type="text">
												</div>
											</td>
											<td>
												<div class="input-table">
													<input type="text">
												</div>
											</td>
											<td>
												<div class="input-table">
													<input type="text">
												</div>
											</td>
											<td>
												<div class="input-table">
													<select>
														<option>%</option>
														<option>5%</option>
													</select>
												</div>
											</td>
											<td>
												<div class="input-table">
													<input type="text">
												</div>
											</td>
											<td>
												<a href="#" class="btn btn-success-light">
													<i class="ti ti-check"></i>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="table-responsive">
								<table class="table table-view">
									<thead>
										<tr>
											<th>Item</th>
											<th>Quantity</th>
											<th>Price</th>
											<th>Discount</th>
											<th>Amount</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="input-table input-table-descripition">
													<input type="text" value="Web Design">
												</div>
											</td>
											<td>
												<div class="input-table">
													<input type="text" value="1">
												</div>
											</td>
											<td>
												<div class="input-table">
													<input type="text" value="$200">
												</div>
											</td>
											<td>
												<div class="input-table">
													<select>
														<option>2%</option>
														<option>5%</option>
													</select>
												</div>
											</td>
											<td>
												<div class="input-table">
													<input type="text" value="$196">
												</div>
											</td>
											<td>
												<a href="#" class="btn btn-danger-light">
													<i class="ti ti-x"></i>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="subtotal-div mb-3">
								<ul class="mb-3">
									<li>
										<h5>Subtotal</h5>
										<h6>$196.00</h6>
									</li>
									<li>
										<h5>Discount 2%</h5>
										<h6>$4.00</h6>
									</li>
									<li>
										<h5>Extra Discount 0%</h5>
										<h6>$0.00</h6>
									</li>
									<li>
										<h5>Tax</h5>
										<h6>$0.00</h6>
									</li>
									<li>
										<h5>Total</h5>
										<h6>$192.00</h6>
									</li>
								</ul>
								<div class="row">
									<div class="mb-3">
										<label class="col-form-label">Signature Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="mb-0">
										<label class="col-form-label">Signature Image</label>
										<div class="upload-signature ">
											<input type="file">
											<a href="#" class="text-start">
												<img src="assets/img/signature.png" alt="img">
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Notes<span class="text-danger"> *</span></label>
									<textarea class="form-control" rows="5"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Terms & Conditions<span class="text-danger"> *</span></label>
									<textarea class="form-control" rows="5"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_success">Create</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Edit Invoices -->

		<!-- Delete Invoices -->
		<div class="modal fade" id="delete_invoices" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center">
							<div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
								<i class="ti ti-trash-x fs-36 text-danger"></i>
							</div>
							<h4 class="mb-2">Remove Invoice?</h4>
							<p class="mb-0">Are you sure you want to remove <br> invoice you selected.</p>
							<div class="d-flex align-items-center justify-content-center mt-4">
								<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="invoices.php" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Invoices -->

		<!-- Add New View -->
		<div class="modal custom-modal fade" id="add_deal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add</h5>
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="invoices.php">
							<div class="mb-3">
								<label class="col-form-label">Name</label>
								<input type="text" class="form-control" placeholder="Enter Name">
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

	</div>
	<!-- /Main Wrapper -->

	<!-- JAVASCRIPT -->
	<?php include 'layouts/vendor-scripts.php'; ?>
	<!-- Bootstrap Tagsinput JS -->
	<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

	<!-- Summernote JS -->
	<script src="assets/plugins/summernote/summernote-lite.min.js"></script>

</body>

</html>
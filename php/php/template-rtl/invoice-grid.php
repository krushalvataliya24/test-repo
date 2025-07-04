<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
	<title>Invoice Grid | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
	<?php include 'layouts/title-meta.php'; ?>

	<!-- Bootstrap Tagsinput CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

	<!-- Summernote CSS -->
	<link rel="stylesheet" href="assets/plugins/summernote/summernote-lite.min.css">

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
								<div class="col-8">
									<h4 class="page-title">Invoices<span class="count-title">123</span></h4>
								</div>
								<div class="col-4 text-end">
									<div class="head-icons">
										<a href="invoice-grid.php" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
										<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Page Header -->

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
										<a href="javascript:void(0);" class="dropdown-toggle bg-white" data-bs-toggle="dropdown"><i class="ti ti-package-export me-2"></i>Export</a>
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

						<!-- Filter -->
						<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 border-top mt-4 pt-4 mb-4">
							<div class="d-flex align-items-center flex-wrap row-gap-2">
								<div class="sort-dropdown drop-down task-drops me-3">
									<a href="javascript:void(0);" class="dropdown-toggle bg-transparent" data-bs-toggle="dropdown">All Invoices </a>
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
									<a href="javascript:void(0);" class="dropdown-toggle bg-white" data-bs-toggle="dropdown"><i class="ti ti-sort-ascending-2 me-2"></i>Sort </a>
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
																			<input type="checkbox" checked="">
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
																			<input type="checkbox" checked="">
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
														<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">Amount</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse" id="collapsethree" data-bs-parent="#accordionExample">
														<div class="filter-content-list">
															<div class="mb-2 icon-form">
																<span class="form-icon"><i class="ti ti-search"></i></span>
																<input type="text" class="form-control" placeholder="Search Amount">
															</div>
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox" checked="">
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
														<a href="invoice-grid.php" class="btn btn-primary">Filter</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="view-icons">
									<a href="invoices.php"><i class="ti ti-list-tree"></i></a>
									<a href="invoice-grid.php" class="active"><i class="ti ti-grid-dots"></i></a>
								</div>
							</div>
						</div>
						<!-- /Filter -->

						<!-- Invoice Grid -->
						<div class="row">
							<div class="col-xxl-3 col-xl-4 col-md-6">
								<div class="card border">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-3">
											<div class="users-profile">
												<span class="badge badge-warning">Partially Paid</span>
											</div>
											<div class="dropdown table-action">
												<a href="#" class="action-icon bg-white" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="fa fa-ellipsis-v"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
													<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices"><i class="ti ti-trash text-danger"></i> Delete</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-clipboard-copy text-green"></i> View Invoices</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-checks text-success"></i> Mark as Paid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-file text-tertiary"></i> Mark as Partially Paid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-sticker text-blue"></i> Mark ad Unpaid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-printer text-info"></i> Print</a>
												</div>
											</div>
										</div>
										<div class="d-block">
											<div class="d-flex align-items-center justify-content-between mb-3">
												<div class="d-flex align-items-center">
													<a href="javascript:void(0);" class="avatar avatar-sm border flex-shrink-0 me-2">
														<img src="assets/img/priority/truellysel.svg" class="w-auto h-auto" alt="Truelysell">
													</a>
													<div>
														<h6><a href="javascript:void(0);">Truelysell</a></h6>
													</div>
												</div>
												<div>
													<span class="badge badge-purple-light">#1254058</span>
												</div>
											</div>
											<div class="mb-3">
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-moneybag fs-12"></i></span>Total Value : $2,04,214</p>
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-event fs-12"></i></span>Due Date : 15 May 2024</p>
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-stats fs-12"></i></span>Paid Amount : 2,15,000</p>
												<p class="d-flex align-items-center"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-stats fs-12"></i></span>Balance Amount : 2,15,000</p>
											</div>
										</div>
										<div class="bg-light-400 rounded p-2">
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-sm bg-white border me-2">
													<img src="assets/img/icons/company-icon-01.svg" class="w-auto h-auto" alt="img">
												</a>
												<div class="d-flex flex-column">
													<span class="d-block">Client</span>
													<a href="javascript:void(0);" class="text-default">NovaWave LLC</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-4 col-md-6">
								<div class="card border">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-3">
											<div class="users-profile">
												<span class="badge badge-success">Paid</span>
											</div>
											<div class="dropdown table-action">
												<a href="#" class="action-icon bg-white" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="fa fa-ellipsis-v"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
													<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices"><i class="ti ti-trash text-danger"></i> Delete</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-clipboard-copy text-green"></i> View Invoices</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-checks text-success"></i> Mark as Paid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-file text-tertiary"></i> Mark as Partially Paid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-sticker text-blue"></i> Mark ad Unpaid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-printer text-info"></i> Print</a>
												</div>
											</div>
										</div>
										<div class="d-block">
											<div class="d-flex align-items-center justify-content-between mb-3">
												<div class="d-flex align-items-center">
													<a href="javascript:void(0);" class="avatar avatar-sm border flex-shrink-0 me-2">
														<img src="assets/img/priority/dreamchat.svg" class="w-auto h-auto" alt="DreamsChat">
													</a>
													<div>
														<h6><a href="javascript:void(0);">Dreamschat</a></h6>
													</div>
												</div>
												<div>
													<span class="badge badge-purple-light">#1254058</span>
												</div>
											</div>
											<div class="mb-3">
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-moneybag fs-12"></i></span>Total Value : $2,04,214</p>
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-event fs-12"></i></span>Due Date : 15 May 2024</p>
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-stats fs-12"></i></span>Paid Amount : 2,15,000</p>
												<p class="d-flex align-items-center"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-stats fs-12"></i></span>Balance Amount : 2,15,000</p>
											</div>
										</div>
										<div class="bg-light-400 rounded p-2">
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-sm bg-white border me-2">
													<img src="assets/img/icons/company-icon-02.svg" class="w-auto h-auto" alt="img">
												</a>
												<div class="d-flex flex-column">
													<span class="d-block">Client</span>
													<a href="javascript:void(0);" class="text-default">Silver Hawk</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-4 col-md-6">
								<div class="card border">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-3">
											<div class="users-profile">
												<span class="badge badge-warning">Partially Paid</span>
											</div>
											<div class="dropdown table-action">
												<a href="#" class="action-icon bg-white" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="fa fa-ellipsis-v"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
													<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices"><i class="ti ti-trash text-danger"></i> Delete</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-clipboard-copy text-green"></i> View Invoices</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-checks text-success"></i> Mark as Paid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-file text-tertiary"></i> Mark as Partially Paid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-sticker text-blue"></i> Mark ad Unpaid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-printer text-info"></i> Print</a>
												</div>
											</div>
										</div>
										<div class="d-block">
											<div class="d-flex align-items-center justify-content-between mb-3">
												<div class="d-flex align-items-center">
													<a href="javascript:void(0);" class="avatar avatar-sm border flex-shrink-0 me-2">
														<img src="assets/img/priority/truellysell.svg" class="w-auto h-auto" alt="Truelysell">
													</a>
													<div>
														<h6><a href="javascript:void(0);">Truelysell</a></h6>
													</div>
												</div>
												<div>
													<span class="badge badge-purple-light">#1254058</span>
												</div>
											</div>
											<div class="mb-3">
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-moneybag fs-12"></i></span>Total Value : $2,04,214</p>
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-event fs-12"></i></span>Due Date : 15 May 2024</p>
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-stats fs-12"></i></span>Paid Amount : 2,15,000</p>
												<p class="d-flex align-items-center"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-stats fs-12"></i></span>Balance Amount : 2,15,000</p>
											</div>
										</div>
										<div class="bg-light-400 rounded p-2">
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-sm bg-white border me-2">
													<img src="assets/img/icons/company-icon-03.svg" class="w-auto h-auto" alt="img">
												</a>
												<div class="d-flex flex-column">
													<span class="d-block">Client</span>
													<a href="javascript:void(0);" class="text-default">Summit Peak</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-4 col-md-6">
								<div class="card border">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-3">
											<div class="users-profile">
												<span class="badge badge-success">Paid</span>
											</div>
											<div class="dropdown table-action">
												<a href="#" class="action-icon bg-white" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="fa fa-ellipsis-v"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
													<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices"><i class="ti ti-trash text-danger"></i> Delete</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-clipboard-copy text-green"></i> View Invoices</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-checks text-success"></i> Mark as Paid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-file text-tertiary"></i> Mark as Partially Paid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-sticker text-blue"></i> Mark ad Unpaid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-printer text-info"></i> Print</a>
												</div>
											</div>
										</div>
										<div class="d-block">
											<div class="d-flex align-items-center justify-content-between mb-3">
												<div class="d-flex align-items-center">
													<a href="javascript:void(0);" class="avatar avatar-sm border flex-shrink-0 me-2">
														<img src="assets/img/priority/servbook.svg" class="w-auto h-auto" alt="Servbook">
													</a>
													<div>
														<h6><a href="javascript:void(0);">Servbook</a></h6>
													</div>
												</div>
												<div>
													<span class="badge badge-purple-light">#1254058</span>
												</div>
											</div>
											<div class="mb-3">
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-moneybag fs-12"></i></span>Total Value : $2,04,214</p>
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-event fs-12"></i></span>Due Date : 15 May 2024</p>
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-stats fs-12"></i></span>Paid Amount : 2,15,000</p>
												<p class="d-flex align-items-center"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-stats fs-12"></i></span>Balance Amount : 2,15,000</p>
											</div>
										</div>
										<div class="bg-light-400 rounded p-2">
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-sm bg-white border me-2">
													<img src="assets/img/icons/company-icon-04.svg" class="w-auto h-auto" alt="img">
												</a>
												<div class="d-flex flex-column">
													<span class="d-block">Client</span>
													<a href="javascript:void(0);" class="text-default">RiverStone Ventur</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-4 col-md-6">
								<div class="card border">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-3">
											<div class="users-profile">
												<span class="badge badge-danger">Unpaid</span>
											</div>
											<div class="dropdown table-action">
												<a href="#" class="action-icon bg-white" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="fa fa-ellipsis-v"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
													<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices"><i class="ti ti-trash text-danger"></i> Delete</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-clipboard-copy text-green"></i> View Invoices</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-checks text-success"></i> Mark as Paid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-file text-tertiary"></i> Mark as Partially Paid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-sticker text-blue"></i> Mark ad Unpaid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-printer text-info"></i> Print</a>
												</div>
											</div>
										</div>
										<div class="d-block">
											<div class="d-flex align-items-center justify-content-between mb-3">
												<div class="d-flex align-items-center">
													<a href="javascript:void(0);" class="avatar avatar-sm border flex-shrink-0 me-2">
														<img src="assets/img/priority/dream-pos.svg" class="w-auto h-auto" alt="DreamPOS">
													</a>
													<div>
														<h6><a href="javascript:void(0);">DreamPOS</a></h6>
													</div>
												</div>
												<div>
													<span class="badge badge-purple-light">#1254058</span>
												</div>
											</div>
											<div class="mb-3">
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-moneybag fs-12"></i></span>Total Value : $2,04,214</p>
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-event fs-12"></i></span>Due Date : 15 May 2024</p>
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-stats fs-12"></i></span>Paid Amount : 2,15,000</p>
												<p class="d-flex align-items-center"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-stats fs-12"></i></span>Balance Amount : 2,15,000</p>
											</div>
										</div>
										<div class="bg-light-400 rounded p-2">
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-sm bg-white border me-2">
													<img src="assets/img/icons/company-icon-05.svg" class="w-auto h-auto" alt="img">
												</a>
												<div class="d-flex flex-column">
													<span class="d-block">Client</span>
													<a href="javascript:void(0);" class="text-default">HarborView</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-4 col-md-6">
								<div class="card border">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-3">
											<div class="users-profile">
												<span class="badge badge-warning">Partially Paid</span>
											</div>
											<div class="dropdown table-action">
												<a href="#" class="action-icon bg-white" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="fa fa-ellipsis-v"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
													<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices"><i class="ti ti-trash text-danger"></i> Delete</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-clipboard-copy text-green"></i> View Invoices</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-checks text-success"></i> Mark as Paid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-file text-tertiary"></i> Mark as Partially Paid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-sticker text-blue"></i> Mark ad Unpaid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-printer text-info"></i> Print</a>
												</div>
											</div>
										</div>
										<div class="d-block">
											<div class="d-flex align-items-center justify-content-between mb-3">
												<div class="d-flex align-items-center">
													<a href="javascript:void(0);" class="avatar avatar-sm border flex-shrink-0 me-2">
														<img src="assets/img/priority/project-01.svg" class="w-auto h-auto" alt="Project">
													</a>
													<div>
														<h6><a href="javascript:void(0);">Kofejob</a></h6>
													</div>
												</div>
												<div>
													<span class="badge badge-purple-light">#1254058</span>
												</div>
											</div>
											<div class="mb-3">
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-moneybag fs-12"></i></span>Total Value : $2,04,214</p>
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-event fs-12"></i></span>Due Date : 15 May 2024</p>
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-stats fs-12"></i></span>Paid Amount : 2,15,000</p>
												<p class="d-flex align-items-center"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-stats fs-12"></i></span>Balance Amount : 2,15,000</p>
											</div>
										</div>
										<div class="bg-light-400 rounded p-2">
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-sm bg-white border me-2">
													<img src="assets/img/icons/company-icon-06.svg" class="w-auto h-auto" alt="img">
												</a>
												<div class="d-flex flex-column">
													<span class="d-block">Client</span>
													<a href="javascript:void(0);" class="text-default">HarborView</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-4 col-md-6">
								<div class="card border">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-3">
											<div class="users-profile">
												<span class="badge badge-pending">Overdue</span>
											</div>
											<div class="dropdown table-action">
												<a href="#" class="action-icon bg-white" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="fa fa-ellipsis-v"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
													<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices"><i class="ti ti-trash text-danger"></i> Delete</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-clipboard-copy text-green"></i> View Invoices</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-checks text-success"></i> Mark as Paid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-file text-tertiary"></i> Mark as Partially Paid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-sticker text-blue"></i> Mark ad Unpaid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-printer text-info"></i> Print</a>
												</div>
											</div>
										</div>
										<div class="d-block">
											<div class="d-flex align-items-center justify-content-between mb-3">
												<div class="d-flex align-items-center">
													<a href="javascript:void(0);" class="avatar avatar-sm border flex-shrink-0 me-2">
														<img src="assets/img/priority/project-02.svg" class="w-auto h-auto" alt="Project">
													</a>
													<div>
														<h6><a href="javascript:void(0);">Doccure</a></h6>
													</div>
												</div>
												<div>
													<span class="badge badge-purple-light">#1254058</span>
												</div>
											</div>
											<div class="mb-3">
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-moneybag fs-12"></i></span>Total Value : $2,04,214</p>
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-event fs-12"></i></span>Due Date : 15 May 2024</p>
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-stats fs-12"></i></span>Paid Amount : 2,15,000</p>
												<p class="d-flex align-items-center"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-stats fs-12"></i></span>Balance Amount : 2,15,000</p>
											</div>
										</div>
										<div class="bg-light-400 rounded p-2">
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-sm bg-white border me-2">
													<img src="assets/img/icons/company-icon-07.svg" class="w-auto h-auto" alt="img">
												</a>
												<div class="d-flex flex-column">
													<span class="d-block">Client</span>
													<a href="javascript:void(0);" class="text-default">Summit Peak</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-4 col-md-6">
								<div class="card border">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-3">
											<div class="users-profile">
												<span class="badge badge-success">Paid</span>
											</div>
											<div class="dropdown table-action">
												<a href="#" class="action-icon bg-white" data-bs-toggle="dropdown" aria-expanded="false">
													<i class="fa fa-ellipsis-v"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit"><i class="ti ti-edit text-blue"></i> Edit</a>
													<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices"><i class="ti ti-trash text-danger"></i> Delete</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-clipboard-copy text-green"></i> View Invoices</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-checks text-success"></i> Mark as Paid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-file text-tertiary"></i> Mark as Partially Paid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-sticker text-blue"></i> Mark ad Unpaid</a>
													<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-printer text-info"></i> Print</a>
												</div>
											</div>
										</div>
										<div class="d-block">
											<div class="d-flex align-items-center justify-content-between mb-3">
												<div class="d-flex align-items-center">
													<a href="javascript:void(0);" class="avatar avatar-sm border flex-shrink-0 me-2">
														<img src="assets/img/priority/best.svg" class="w-auto h-auto" alt="Project">
													</a>
													<div>
														<h6><a href="javascript:void(0);">Best@laundry</a></h6>
													</div>
												</div>
												<div>
													<span class="badge badge-purple-light">#1254058</span>
												</div>
											</div>
											<div class="mb-3">
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-moneybag fs-12"></i></span>Total Value : $2,04,214</p>
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-event fs-12"></i></span>Due Date : 15 May 2024</p>
												<p class="d-flex align-items-center mb-2"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-stats fs-12"></i></span>Paid Amount : 2,15,000</p>
												<p class="d-flex align-items-center"><span class="avatar avatar-xs border me-2 text-dark"><i class="ti ti-calendar-stats fs-12"></i></span>Balance Amount : 2,15,000</p>
											</div>
										</div>
										<div class="bg-light-400 rounded p-2">
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-sm bg-white border me-2">
													<img src="assets/img/icons/company-icon-08.svg" class="w-auto h-auto" alt="img">
												</a>
												<div class="d-flex flex-column">
													<span class="d-block">Client</span>
													<a href="javascript:void(0);" class="text-default">Best@laundry</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Invoice Grid -->

						<div class="load-btn text-center pb-4">
							<a href="javascript:void(0);" class="btn btn-primary">Load More Invoices<i class="ti ti-loader"></i></a>
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
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_success">Create</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Add New Project -->

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
								<a href="invoice-grid.php" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Invoices -->

		<!-- Create Invoices -->
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
								<i class="ti ti-atom-2"></i>
							</div>
							<h3>Invoices Created Successfully!!!</h3>
							<p>View the details of invoices, created</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="#" class="btn btn-primary">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Create Project -->

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

	<!-- Profile Upload JS -->
	<script src="assets/js/profile-upload.js"></script>

</body>

</html>
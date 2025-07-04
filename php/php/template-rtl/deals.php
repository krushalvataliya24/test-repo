<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Title -->
	<title>Deals | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>	
	
	<?php include 'layouts/title-meta.php'; ?>
	<!-- Bootstrap Tagsinput CSS -->
	<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
	<!-- Daterangepicker CSS -->
	<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
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
									<h4 class="page-title">Deals<span class="count-title">123</span></h4>
								</div>
								<div class="col-4 text-end">
									<div class="head-icons">
										<a href="deals.php" data-bs-toggle="tooltip" data-bs-placement="top"
											data-bs-original-title="Refresh">
											<i class="ti ti-refresh-dot"></i>
										</a>
										<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
											data-bs-original-title="Collapse" id="collapse-header">
											<i class="ti ti-chevrons-up"></i>
										</a>
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
											<input type="text" class="form-control" placeholder="Search Deals">
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
											<a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add"><i class="ti ti-square-rounded-plus me-2"></i>Add Deals</a>
										</div>
									</div>
								</div>
								<!-- /Search -->
							</div>
							<div class="card-body">
								<!-- Filter -->
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-4">
									<div class="d-flex align-items-center flex-wrap row-gap-2">
										<div class="dropdown me-2">
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
															<i class="ti ti-circle-chevron-right me-1"></i>Recently
															Viewed
														</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item">
															<i class="ti ti-circle-chevron-right me-1"></i>Recently
															Added
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
																class="ti ti-grip-vertical me-2"></i>Deal Name</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-name" class="check">
															<label for="col-name" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Stage</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-phone" class="check">
															<label for="col-phone" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Deal Value</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-email" class="check">
															<label for="col-email" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Tags</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-tag" class="check">
															<label for="col-tag" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Expected Closed
															Date</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-loc" class="check">
															<label for="col-loc" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Rating</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-rate" class="check">
															<label for="col-rate" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Owner</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-owner" class="check">
															<label for="col-owner" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Probability</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-contact" class="check"
																checked="">
															<label for="col-contact" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Status</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-status" class="check">
															<label for="col-status" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Action</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-action" class="check">
															<label for="col-action" class="checktoggle"></label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-sorts dropdown me-2">
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
																<a href="deals.php" class="btn btn-primary">Filter</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="view-icons">
											<a href="deals.php" class="active"><i class="ti ti-list-tree"></i></a>
											<a href="deals-kanban.php"><i class="ti ti-grid-dots"></i></a>
										</div>
									</div>
								</div>
								<!-- /Filter -->


								<!-- Contact List -->
								<div class="table-responsive custom-table">
									<table class="table" id="deal_list">
										<thead class="thead-light">
											<tr>
												<th class="no-sort">
													<label class="checkboxs"><input type="checkbox"
															id="select-all"><span class="checkmarks"></span></label>
												</th>
												<th class="no-sort"></th>
												<th>Deal Name</th>
												<th>Stage</th>
												<th>Deal Value</th>
												<th>Tags</th>
												<th>Expected Close Date</th>
												<th>Owner</th>
												<th>Probability </th>
												<th>Status</th>
												<th class="text-end">Action</th>
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
								<!-- /Contact List -->

							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add New Deals -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
			<div class="offcanvas-header border-bottom">
				<h5 class="fw-semibold">Add New Deals</h5>
				<button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="deals.php">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Deal Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<div class="d-flex align-items-center justify-content-between">
									<label class="col-form-label">Pipeine <span class="text-danger">*</span></label>
									<a href="" class="label-add " data-bs-toggle="offcanvas" data-bs-target="#offcanvas_pipeline">
										<i class="ti ti-square-rounded-plus"></i>
										Add New
									</a>
								</div>
								<select class="select2">
									<option>Choose</option>
									<option>Sales</option>
									<option>Marketing</option>
									<option>Calls</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Status <span class="text-danger">*</span></label>
								<select class="select2">
									<option>Choose</option>
									<option>Open</option>
									<option>Lost</option>
									<option>Won</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Deal Value<span class="text-danger"> *</span></label>
								<input class="form-control" type="text">
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Currency <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>$</option>
									<option>€</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Period <span class="text-danger">*</span></label>
								<select class="select">
									<option>Choose</option>
									<option>Days</option>
									<option>Month</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Period Value <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Contact <span class="text-danger">*</span></label>
								<select class="multiple-img" multiple="multiple">
									<option data-image="assets/img/profiles/avatar-19.jpg" selected>Darlee Robertson</option>
									<option data-image="assets/img/profiles/avatar-20.jpg">Sharon Roy</option>
									<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
									<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
									<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
								</select>
							</div>
							<div class="mb-3">
								<label class="col-form-label">Project <span class="text-danger">*</span></label>
								<select class="select" multiple="multiple">
									<option selected>Devops Design</option>
									<option selected>MargrateDesign</option>
									<option selected>UI for Chat</option>
									<option>Web Chat</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Expected Closing Date <span class="text-danger">*</span></label>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Assignee <span class="text-danger">*</span></label>
								<select class="multiple-img" multiple="multiple">
									<option data-image="assets/img/profiles/avatar-19.jpg">Darlee Robertson</option>
									<option data-image="assets/img/profiles/avatar-20.jpg" selected>Sharon Roy</option>
									<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
									<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
									<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Follow Up Date <span class="text-danger">*</span></label>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Source <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>Google</option>
									<option>Social Media</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Tags <span class="text-danger">*</span></label>
								<input class="input-tags form-control" type="text" data-role="tagsinput" name="Label" value="Collab, Rated">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Priority <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>Highy</option>
									<option>Low</option>
									<option>Medium</option>
								</select>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="mb-3">
								<label class="col-form-label">Description <span class="text-danger">*</span></label>
								<div class="summernote"></div>
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
		<!-- /Add New Deals -->

		<!-- Edit Deals -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
			<div class="offcanvas-header border-bottom">
				<h5 class="fw-semibold">Edit Deals</h5>
				<button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="deals.php">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Deal Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Collins">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<div class="d-flex align-items-center justify-content-between">
									<label class="col-form-label">Pipeine <span class="text-danger">*</span></label>
									<a href="" class="label-add " data-bs-toggle="offcanvas" data-bs-target="#offcanvas_pipeline">
										<i class="ti ti-square-rounded-plus"></i>
										Add New
									</a>
								</div>
								<select class="select2">
									<option>Choose</option>
									<option>Sales</option>
									<option>Marketing</option>
									<option>Calls</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Status <span class="text-danger">*</span></label>
								<select class="select2">
									<option>Choose</option>
									<option>Open</option>
									<option>Lost</option>
									<option>Won</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Deal Value<span class="text-danger"> *</span></label>
								<input class="form-control" type="text" value="$04,51,000">
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Currency <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>$</option>
									<option>€</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Period <span class="text-danger">*</span></label>
								<select class="select">
									<option>Choose</option>
									<option>Days</option>
									<option>Month</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Period Value <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Contact <span class="text-danger">*</span></label>
								<select class="multiple-img" multiple="multiple">
									<option data-image="assets/img/profiles/avatar-19.jpg" selected>Darlee Robertson</option>
									<option data-image="assets/img/profiles/avatar-20.jpg">Sharon Roy</option>
									<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
									<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
									<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
								</select>
							</div>
							<div class="mb-3">
								<label class="col-form-label">Project <span class="text-danger">*</span></label>
								<select class="select" multiple="multiple">
									<option selected>Devops Design</option>
									<option selected>MargrateDesign</option>
									<option selected>UI for Chat</option>
									<option>Web Chat</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Expected Closing Date <span class="text-danger">*</span></label>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Assignee <span class="text-danger">*</span></label>
								<select class="multiple-img" multiple="multiple">
									<option data-image="assets/img/profiles/avatar-19.jpg">Darlee Robertson</option>
									<option data-image="assets/img/profiles/avatar-20.jpg" selected>Sharon Roy</option>
									<option data-image="assets/img/profiles/avatar-21.jpg">Vaughan</option>
									<option data-image="assets/img/profiles/avatar-23.jpg">Jessica</option>
									<option data-image="assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Follow Up Date <span class="text-danger">*</span></label>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Source <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>Google</option>
									<option>Social Media</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Tags <span class="text-danger">*</span></label>
								<input class="input-tags form-control" type="text" data-role="tagsinput" name="Label" value="Collab, Rated">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Priority <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>Highy</option>
									<option>Low</option>
									<option>Medium</option>
								</select>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="mb-3">
								<label class="col-form-label">Description <span class="text-danger">*</span></label>
								<div class="summernote"></div>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
						<button type="button" class="btn btn-primary">Save Changes</button>

					</div>
				</form>
			</div>

		</div>
		<!-- /Edit Deals -->

		<!-- Delete Deal -->
		<div class="modal fade" id="delete_deal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center">
							<div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
								<i class="ti ti-trash-x fs-36 text-danger"></i>
							</div>
							<h4 class="mb-2">Remove Deal?</h4>
							<p class="mb-0">Are you sure you want to remove <br> deal you selected.</p>
							<div class="d-flex align-items-center justify-content-center mt-4">
								<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="deals.php" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Deal -->

		<!-- Create Deal -->
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
								<i class="ti ti-medal"></i>
							</div>
							<h3>Deal Created Successfully!!!</h3>
							<p>View the details of deal, created</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="deals-details.php" class="btn btn-primary">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Create Deal -->

		<!-- Add New Pipeline -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_pipeline">
			<div class="offcanvas-header border-bottom">
				<h4>Add New Pipeline</h4>
				<button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="deals.php">
					<div>
						<div class="mb-3">
							<label class="col-form-label">Pipeline Name <span class="text-danger">*</span></label>
							<input class="form-control" type="text">
						</div>
						<div class="mb-3">
							<div class="pipe-title d-flex align-items-center justify-content-between">
								<h5 class="form-title">Pipeline Stages</h5>
								<a href="#" class="add-stage" data-bs-toggle="modal" data-bs-target="#add_stage"><i
										class="ti ti-square-rounded-plus"></i>Add New</a>
							</div>
							<div class="pipeline-listing">
								<div class="pipeline-item">
									<p><i class="ti ti-grip-vertical"></i> Inpipeline</p>
									<div class="action-pipeline">
										<a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i class="ti ti-edit text-blue"></i>Edit</a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i class="ti ti-trash text-danger"></i>Delete</a>
									</div>
								</div>
								<div class="pipeline-item">
									<p><i class="ti ti-grip-vertical"></i> Follow Up</p>
									<div class="action-pipeline">
										<a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i class="ti ti-edit text-blue"></i>Edit</a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i class="ti ti-trash text-danger"></i>Delete</a>
									</div>
								</div>
								<div class="pipeline-item">
									<p><i class="ti ti-grip-vertical"></i> Schedule Service</p>
									<div class="action-pipeline">
										<a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i class="ti ti-edit text-blue"></i>Edit</a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i class="ti ti-trash text-danger"></i>Delete</a>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-3">
							<h5 class="form-title">Access</h5>
							<div class="d-flex flex-wrap access-item nav">
								<div class="radio-btn" data-bs-toggle="tab" data-bs-target="#all">
									<input type="radio" class="status-radio" id="all" name="status" checked="">
									<label for="all">All</label>
								</div>
								<div class="radio-btn" data-bs-toggle="tab" data-bs-target="#select-person">
									<input type="radio" class="status-radio" id="select" name="status">
									<label for="select">Select Person</label>
								</div>
							</div>
							<div class="tab-content mb-3">
								<div class="tab-pane fade" id="select-person">
									<div class="access-wrapper">
										<div class="access-view">
											<div class="access-img">
												<img src="assets/img/profiles/avatar-21.jpg" alt="Image">Vaughan
											</div>
											<a href="#">Remove</a>
										</div>
										<div class="access-view">
											<div class="access-img">
												<img src="assets/img/profiles/avatar-01.jpg" alt="Image">Jessica
											</div>
											<a href="#">Remove</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
						<button type="button" class="btn btn-primary">Create</button>
					</div>
				</form>
			</div>

		</div>
		<!-- /Add New Pipeline -->

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
							<p class="mb-0">Are you sure you want to remove <br> stage you selected.</p>
							<div class="d-flex align-items-center justify-content-center mt-4">
								<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="deals.php" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Stage -->

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
						<form action="deals.php">
							<div class="mb-3">
								<label class="col-form-label">Stage Name *</label>
								<input type="text" class="form-control">
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
						<form action="deals.php">
							<div class="mb-3">
								<label class="col-form-label">Stage Name *</label>
								<input type="text" class="form-control" value="Inpipeline">
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
						<form action="deals.php">
							<div class="mb-3">
								<label class="col-form-label">View Name</label>
								<input type="text" class="form-control">
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
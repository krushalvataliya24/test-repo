<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Title -->
	<title>Companies  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
		
<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
<!-- Summernote CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/summernote/summernote-lite.min.css">
</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">
<?= $this->include('partials/menu') ?>

<!-- Page Wrapper -->
<div class="page-wrapper">
			<div class="content">

				<div class="row">
					<div class="col-md-12">

					<?= $this->include('partials/page-title') ?>

						<div class="card ">
							<div class="card-header">
								<!-- Search -->
								<div class="row align-items-center">
									<div class="col-sm-4">
										<div class="icon-form mb-3 mb-sm-0">
											<span class="form-icon"><i class="ti ti-search"></i></span>
											<input type="text" class="form-control" placeholder="Search Companies">
										</div>							
									</div>		
									<div class="col-sm-8">					
										<div class="d-flex align-items-center flex-wrap row-gap-2 justify-content-sm-end">
											<div class="dropdown me-2">
												<a href="javascript:void(0);" class="dropdown-toggle"  data-bs-toggle="dropdown"><i class="ti ti-package-export me-2"></i>Export</a>
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
											<a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add"><i class="ti ti-square-rounded-plus me-2"></i>Add Company</a>
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
											<a href="javascript:void(0);" class="dropdown-toggle"  data-bs-toggle="dropdown"><i class="ti ti-sort-ascending-2 me-2"></i>Sort </a>
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
											<a href="javascript:void(0);" class="btn bg-soft-purple text-purple"  data-bs-toggle="dropdown"  data-bs-auto-close="outside"><i class="ti ti-columns-3 me-2"></i>Manage Columns</a>
											<div class="dropdown-menu  dropdown-menu-md-end dropdown-md p-3">
												<h4 class="mb-2 fw-semibold">Want to manage datatables?</h4>
												<p class="mb-3">Please drag and drop your column to reorder your table and enable see option as you want.</p>
												<div class="border-top pt-3">
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Name</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-name" class="check">
															<label for="col-name" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Phone</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-phone" class="check">
															<label for="col-phone" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Email</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-email" class="check">
															<label for="col-email" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Tags</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-tag" class="check">
															<label for="col-tag" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Location</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-loc" class="check">
															<label for="col-loc" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Rating</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-rate" class="check">
															<label for="col-rate" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Owner</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-owner" class="check">
															<label for="col-owner" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Contact</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-contact" class="check" checked="">
															<label for="col-contact" class="checktoggle"></label>
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
											<a href="javascript:void(0);" data-bs-toggle="dropdown"  data-bs-auto-close="outside"><i class="ti ti-filter-share"></i>Filter</a>
											<div class="filter-dropdown-menu dropdown-menu  dropdown-menu-md-end p-3">
												<div class="filter-set-view">
													<div class="filter-set-head">
														<h4><i class="ti ti-filter-share"></i>Filter</h4>
													</div>
													<div class="accordion" id="accordionExample">
														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Country</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse show" id="collapseTwo" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<div class="mb-2 icon-form">
																		<span class="form-icon"><i class="ti ti-search"></i></span>
																		<input type="text" class="form-control" placeholder="Search Country">
																	</div>
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					India
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					USA
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					France
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					United Kingdom
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					UAE
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Italy
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Japan
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Germany
																				</label>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#owner" aria-expanded="false" aria-controls="owner">Owner</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse" id="owner" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<div class="mb-2 icon-form">
																		<span class="form-icon"><i class="ti ti-search"></i></span>
																		<input type="text" class="form-control" placeholder="Search Owner">
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
																<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#Status" aria-expanded="false" aria-controls="Status">Status</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse" id="Status" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					Active
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
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
																<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Rating</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse" id="collapseOne" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					<span class="rating">
																						<i class="fa fa-star filled"></i>
																						<i class="fa fa-star filled"></i>
																						<i class="fa fa-star filled"></i>
																						<i class="fa fa-star filled"></i>
																						<i class="fa fa-star filled"></i>
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
																						<i class="fa fa-star filled"></i>
																						<i class="fa fa-star filled"></i>
																						<i class="fa fa-star filled"></i>
																						<i class="fa fa-star filled"></i>
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
																						<i class="fa fa-star filled"></i>
																						<i class="fa fa-star filled"></i>
																						<i class="fa fa-star filled"></i>
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
																						<i class="fa fa-star filled"></i>
																						<i class="fa fa-star filled"></i>
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
																						<i class="fa fa-star filled"></i>
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
																<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Tags</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionExample">
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
																<a href="<?php echo base_url();?>companies" class="btn btn-primary">Filter</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="view-icons">
											<a href="<?php echo base_url();?>companies" class="active"><i class="ti ti-list-tree"></i></a>
											<a href="<?php echo base_url();?>companies-grid"><i class="ti ti-grid-dots"></i></a>
										</div>
									</div>	
								</div>
								<!-- /Filter -->

								<!-- Contact List -->
								<div class="table-responsive custom-table">
									<table class="table" id="companieslist">
										<thead class="thead-light">
											<tr>
												<th class="no-sort">
													<label class="checkboxs"><input type="checkbox" id="select-all"><span class="checkmarks"></span></label>
												</th>
												<th class="no-sort"></th>
												<th>Name</th>
												<th>Phone</th>
												<th>Email</th>
												<th>Tags</th>
												<th>Location</th>
												<th>Rating</th>
												<th>Owner</th>
												<th>Contact </th>
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

		<!-- Add Company -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
			<div class="offcanvas-header border-bottom">
				<h5 class="fw-semibold">Add New Company</h5>
				<button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="<?php echo base_url();?>companies">	
					<div class="accordion" id="main_accordion">
						<!-- Basic Info -->
						<div class="accordion-item rounded mb-3">
							<div class="accordion-header">
								<a href="#" class="accordion-button accordion-custom-button bg-white rounded fw-medium text-dark" data-bs-toggle="collapse" data-bs-target="#basic">
									<span class="avatar avatar-md rounded text-dark border me-2"><i class="ti ti-user-plus fs-20"></i></span>
									Basic Info
								</a>
							</div>							
							<div class="accordion-collapse collapse show" id="basic" data-bs-parent="#main_accordion">
								<div class="accordion-body border-top">
									<div class="row">
										<div class="col-md-12">
											<div class="mb-3">
												<div class="profile-upload">
													<div class="profile-upload-img">
														<span><i class="ti ti-photo"></i></span>
														<img src="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" alt="img" class="preview1">
														<button type="button" class="profile-remove">
															<i class="ti ti-x"></i>
														</button>
													</div>
													<div class="profile-upload-content">
														<label class="profile-upload-btn">
															<i class="ti ti-file-broken"></i> Upload File 
															<input type="file" class="input-img">
														</label>
														<p>JPG, GIF or PNG. Max size of 800K</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<label class="col-form-label">Company Name</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<div class="d-flex justify-content-between align-items-center">
													<label class="col-form-label">Email <span class="text-danger">*</span></label>
													<div class="status-toggle small-toggle-btn d-flex align-items-center">
														<span class="me-2 label-text">Email Opt Out</span>
														<input type="checkbox" id="user" class="check" checked="">
														<label for="user" class="checktoggle"></label>
													</div>
												</div>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Phone 1 <span class="text-danger">*</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Phone 2</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Fax <span class="text-danger">*</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Website <span class="text-danger">*</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Ratings</label>
												<div class="icon-form-end">
													<span class="form-icon"><i class="ti ti-star"></i></span>
													<input type="text" class="form-control" placeholder="4.2">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="fmb-3">
												<label class="col-form-label">Owner</label>
												<select class="select-img">
													<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-14.jpg" selected>Jerald</option>
													<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-15.jpg">Guillory</option>
													<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-16.jpg">Jami</option>
													<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-13.jpg">Theresa</option>
													<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-24.jpg">Espinosa</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Tags </label>
												<input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="Collab" >	
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<div class="d-flex align-items-center justify-content-between">
													<label class="col-form-label">Deals</label>
													<a href="#" class="label-add" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add_2"><i class="ti ti-square-rounded-plus"></i>Add New</a>
												</div>
												<select class="select2">
													<option>Choose</option>
													<option>Collins</option>
													<option>Konopelski</option>
													<option>Adams</option>
													<option>Schumm</option>
													<option>Wisozk</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Source <span class="text-danger">*</span></label>
												<select class="select2">
													<option>Choose</option>
													<option>Phone Calls</option>
													<option>Social Media</option>
													<option>Referral Sites</option>
													<option>Web Analytics</option>
													<option>Previous Purchases</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Industry <span class="text-danger">*</span></label>
												<select class="select">
													<option>Choose</option>
													<option>Retail Industry</option>
													<option>Banking</option>
													<option>Hotels</option>
													<option>Financial Services</option>
													<option>Insurance</option>
												</select>
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<label class="col-form-label">Contacts</label>
												<select class="multiple-img" multiple="multiple">
													<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg">Darlee Robertson</option>
															<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" selected>Sharon Roy</option>
															<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-21.jpg">Vaughan</option>
															<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-23.jpg">Jessica</option>
															<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Currency <span class="text-danger">*</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Language <span class="text-danger">*</span></label>
												<select class="select">
													<option>Choose</option>
													<option>English</option>
													<option>Arabic</option>
													<option>Chinese</option>
													<option>Hindi</option>
												</select>
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-0">
												<label class="col-form-label">Description <span class="text-danger">*</span></label>
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
								<a href="#" class="accordion-button accordion-custom-button rounded bg-white fw-medium text-dark" data-bs-toggle="collapse" data-bs-target="#address">
									<span class="avatar avatar-md rounded text-dark border me-2"><i class="ti ti-map-pin-cog fs-20"></i></span>
									Address Info
								</a>
							</div>							
							<div class="accordion-collapse collapse" id="address" data-bs-parent="#main_accordion">
								<div class="accordion-body border-top">
									<div class="row">
										<div class="col-md-12">
											<div class="mb-3">
												<label class="col-form-label">Street Address </label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">City </label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">State / Province </label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3 mb-md-0">
												<label class="col-form-label">Country</label>
												<select class="select">
													<option>Choose</option>
													<option>India</option>
													<option>USA</option>
													<option>France</option>
													<option>UK</option>
													<option>UAE</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-0">
												<label class="col-form-label">Zipcode </label>
												<input type="text" class="form-control">
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
								<a href="#" class="accordion-button accordion-custom-button rounded bg-white fw-medium text-dark" data-bs-toggle="collapse" data-bs-target="#social">
									<span class="avatar avatar-md rounded text-dark border me-2"><i class="ti ti-social fs-20"></i></span>
									Social Profile
								</a>
							</div>							
							<div class="accordion-collapse collapse" id="social" data-bs-parent="#main_accordion">
								<div class="accordion-body border-top">
									<div class="row">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Facebook</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Skype </label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Linkedin </label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Twitter</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3 mb-md-0">
												<label class="col-form-label">Whatsapp</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-0">
												<label class="col-form-label">Instagram</label>
												<input type="text" class="form-control">
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
								<a href="#" class="accordion-button accordion-custom-button rounded bg-white fw-medium text-dark" data-bs-toggle="collapse" data-bs-target="#access-info">
									<span class="avatar avatar-md rounded text-dark border me-2"><i class="ti ti-accessible fs-20"></i></span>
									Access
								</a>
							</div>							
							<div class="accordion-collapse collapse" id="access-info" data-bs-parent="#main_accordion">
								<div class="accordion-body border-top">
									<div class="row">
										<div class="col-md-12">
											<div class="mb-3">
												<label class="col-form-label">Visibility</label>
												<div class="d-flex flex-wrap">
													<div class="me-2">
														<input type="radio" class="status-radio" id="public" name="visible">
														<label for="public">Public</label>
													</div>
													<div class="me-2">
														<input type="radio" class="status-radio" id="private" name="visible">
														<label for="private">Private</label>
													</div>
													<div data-bs-toggle="modal" data-bs-target="#access_view">
														<input type="radio" class="status-radio" id="people" name="visible">
														<label for="people">Select People</label>
													</div>
												</div>
											</div>
											<div class="mb-0">
												<label class="col-form-label">Status</label>
												<div class="d-flex flex-wrap">
													<div class="me-2">
														<input type="radio" class="status-radio" id="active" name="status" checked="">
														<label for="active">Active</label>
													</div>
													<div>
														<input type="radio" class="status-radio" id="inactive" name="status">
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
						<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_success">Create</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Add Company -->

		<!-- Edit Company -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
			<div class="offcanvas-header border-bottom">
				<h5 class="fw-semibold">Edit Company</h5>
				<button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="<?php echo base_url();?>companies">	
					<div class="accordion" id="main_accordion">
						<!-- Basic Info -->
						<div class="accordion-item rounded mb-3">
							<div class="accordion-header">
								<a href="#" class="accordion-button accordion-custom-button bg-white rounded fw-medium text-dark" data-bs-toggle="collapse" data-bs-target="#basic">
									<span class="avatar avatar-md rounded text-dark border me-2"><i class="ti ti-user-plus fs-20"></i></span>
									Basic Info
								</a>
							</div>							
							<div class="accordion-collapse collapse show" id="basic" data-bs-parent="#main_accordion">
								<div class="accordion-body border-top">
									<div class="row">
										<div class="col-md-12">
											<div class="mb-3">
												<div class="profile-upload">
													<div class="profile-upload-img">
														<span><i class="ti ti-photo"></i></span>
														<img src="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" alt="img" class="preview1">
														<button type="button" class="profile-remove">
															<i class="ti ti-x"></i>
														</button>
													</div>
													<div class="profile-upload-content">
														<label class="profile-upload-btn">
															<i class="ti ti-file-broken"></i> Upload File 
															<input type="file" class="input-img">
														</label>
														<p>JPG, GIF or PNG. Max size of 800K</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<label class="col-form-label">Company Name</label>
												<input type="text" class="form-control" value="NovaWave LLC">
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<div class="d-flex justify-content-between align-items-center">
													<label class="col-form-label">Email <span class="text-danger">*</span></label>
													<div class="status-toggle small-toggle-btn d-flex align-items-center">
														<span class="me-2 label-text">Email Opt Out</span>
														<input type="checkbox" id="user" class="check" checked="">
														<label for="user" class="checktoggle"></label>
													</div>
												</div>
												<input type="text" class="form-control" value="robertson@example.com">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Phone 1 <span class="text-danger">*</span></label>
												<input type="text" class="form-control" value="1234567890">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Phone 2</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Fax <span class="text-danger">*</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Website <span class="text-danger">*</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Ratings</label>
												<div class="icon-form-end">
													<span class="form-icon"><i class="ti ti-star"></i></span>
													<input type="text" class="form-control" placeholder="4.2">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="fmb-3">
												<label class="col-form-label">Owner</label>
												<select class="select-img">
													<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-14.jpg" selected>Jerald</option>
													<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-15.jpg">Guillory</option>
													<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-16.jpg">Jami</option>
													<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-13.jpg">Theresa</option>
													<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-24.jpg">Espinosa</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Tags </label>
												<input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="Collab" >	
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<div class="d-flex align-items-center justify-content-between">
													<label class="col-form-label">Deals</label>
													<a href="#" class="label-add" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add_2"><i class="ti ti-square-rounded-plus"></i>Add New</a>
												</div>
												<select class="select2">
													<option>Choose</option>
													<option>Collins</option>
													<option>Konopelski</option>
													<option>Adams</option>
													<option>Schumm</option>
													<option>Wisozk</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Source <span class="text-danger">*</span></label>
												<select class="select2">
													<option>Choose</option>
													<option>Phone Calls</option>
													<option>Social Media</option>
													<option>Referral Sites</option>
													<option>Web Analytics</option>
													<option>Previous Purchases</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Industry <span class="text-danger">*</span></label>
												<select class="select">
													<option>Choose</option>
													<option>Retail Industry</option>
													<option>Banking</option>
													<option>Hotels</option>
													<option>Financial Services</option>
													<option>Insurance</option>
												</select>
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-3">
												<label class="col-form-label">Contacts</label>
												<select class="multiple-img" multiple="multiple">
													<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg">Darlee Robertson</option>
															<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" selected>Sharon Roy</option>
															<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-21.jpg">Vaughan</option>
															<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-23.jpg">Jessica</option>
															<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Currency <span class="text-danger">*</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Language <span class="text-danger">*</span></label>
												<select class="select">
													<option>Choose</option>
													<option>English</option>
													<option>Arabic</option>
													<option>Chinese</option>
													<option>Hindi</option>
												</select>
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-0">
												<label class="col-form-label">Description <span class="text-danger">*</span></label>
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
								<a href="#" class="accordion-button accordion-custom-button rounded bg-white fw-medium text-dark" data-bs-toggle="collapse" data-bs-target="#address">
									<span class="avatar avatar-md rounded text-dark border me-2"><i class="ti ti-map-pin-cog fs-20"></i></span>
									Address Info
								</a>
							</div>							
							<div class="accordion-collapse collapse" id="address" data-bs-parent="#main_accordion">
								<div class="accordion-body border-top">
									<div class="row">
										<div class="col-md-12">
											<div class="mb-3">
												<label class="col-form-label">Street Address </label>
												<input type="text" class="form-control" value="22, Ave Street">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">City </label>
												<input type="text" class="form-control" value="Denver">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">State / Province </label>
												<input type="text" class="form-control" value="Colorado">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3 mb-md-0">
												<label class="col-form-label">Country</label>
												<select class="select">
													<option>Choose</option>
													<option>India</option>
													<option selected>USA</option>
													<option>France</option>
													<option>UK</option>
													<option>UAE</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-0">
												<label class="col-form-label">Zipcode </label>
												<input type="text" class="form-control">
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
								<a href="#" class="accordion-button accordion-custom-button rounded bg-white fw-medium text-dark" data-bs-toggle="collapse" data-bs-target="#social">
									<span class="avatar avatar-md rounded text-dark border me-2"><i class="ti ti-social fs-20"></i></span>
									Social Profile
								</a>
							</div>							
							<div class="accordion-collapse collapse" id="social" data-bs-parent="#main_accordion">
								<div class="accordion-body border-top">
									<div class="row">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Facebook</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Skype </label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Linkedin </label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="col-form-label">Twitter</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3 mb-md-0">
												<label class="col-form-label">Whatsapp</label>
												<input type="text" class="form-control" value="1234567890">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-0">
												<label class="col-form-label">Instagram</label>
												<input type="text" class="form-control">
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
								<a href="#" class="accordion-button accordion-custom-button rounded bg-white fw-medium text-dark" data-bs-toggle="collapse" data-bs-target="#access-info">
									<span class="avatar avatar-md rounded text-dark border me-2"><i class="ti ti-accessible fs-20"></i></span>
									Access
								</a>
							</div>							
							<div class="accordion-collapse collapse" id="access-info" data-bs-parent="#main_accordion">
								<div class="accordion-body border-top">
									<div class="row">
										<div class="col-md-12">
											<div class="mb-3">
												<label class="col-form-label">Visibility</label>
												<div class="d-flex flex-wrap">
													<div class="me-2">
														<input type="radio" class="status-radio" id="public" name="visible">
														<label for="public">Public</label>
													</div>
													<div class="me-2">
														<input type="radio" class="status-radio" id="private" name="visible">
														<label for="private">Private</label>
													</div>
													<div data-bs-toggle="modal" data-bs-target="#access_view">
														<input type="radio" class="status-radio" id="people" name="visible">
														<label for="people">Select People</label>
													</div>
												</div>
											</div>
											<div class="mb-0">
												<label class="col-form-label">Status</label>
												<div class="d-flex flex-wrap">
													<div class="me-2">
														<input type="radio" class="status-radio" id="active" name="status" checked="">
														<label for="active">Active</label>
													</div>
													<div>
														<input type="radio" class="status-radio" id="inactive" name="status">
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
						<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
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
							<p class="mb-0">Are you sure you want to remove <br> company you selected.</p>
							<div class="d-flex align-items-center justify-content-center mt-4">
								<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="<?php echo base_url();?>companies" class="btn btn-danger">Yes, Delete it</a>
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
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
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
								<a href="<?php echo base_url();?>company-details" class="btn btn-primary">View Details</a>
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
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
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
								<a href="<?php echo base_url();?>deals-details" class="btn btn-primary">View Details</a>
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
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url();?>companies">
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

		<!-- Access -->
		<div class="modal fade" id="access_view" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Access For</h5>
						<button class="btn-close custom-btn-close border p-1 me-0 text-dark" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="<?php echo base_url();?>companies">	
						<div class="modal-body">
							<div class="icon-form mb-3">
								<span class="form-icon"><i class="ti ti-search"></i></span>
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<div class="access-wrap mb-0">
								<ul>					
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">													
											<span class="checkmarks"></span>
											<span class="people-profile">
												<img src="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg" alt="">
												<a href="#">Darlee Robertson</a>
											</span>
										</label>
									</li>				
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">													
											<span class="checkmarks"></span>
											<span class="people-profile">
												<img src="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" alt="">
												<a href="#">Sharon Roy</a>
											</span>
										</label>
									</li>				
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">													
											<span class="checkmarks"></span>
											<span class="people-profile">
												<img src="<?php echo base_url();?>assets/img/profiles/avatar-21.jpg" alt="">
												<a href="#">Vaughan</a>
											</span>
										</label>
									</li>				
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">													
											<span class="checkmarks"></span>
											<span class="people-profile">
												<img src="<?php echo base_url();?>assets/img/profiles/avatar-01.jpg" alt="">
												<a href="#">Jessica</a>
											</span>
										</label>
									</li>				
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">													
											<span class="checkmarks"></span>
											<span class="people-profile">
												<img src="<?php echo base_url();?>assets/img/profiles/avatar-16.jpg" alt="">
												<a href="#">Carol Thomas</a>
											</span>
										</label>
									</li>				
									<li class="select-people-checkbox">
										<label class="checkboxs">
											<input type="checkbox">													
											<span class="checkmarks"></span>
											<span class="people-profile">
												<img src="<?php echo base_url();?>assets/img/profiles/avatar-22.jpg" alt="">
												<a href="#">Dawn Mercha</a>
											</span>
										</label>
									</li>
								</ul>
							</div>						
						</div>
						<div class="modal-footer">
							<div class="d-flex align-items-center justify-content-end m-0">
								<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
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
				<button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="<?php echo base_url();?>contacts">	
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
									<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg" selected>Darlee Robertson</option>
									<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg">Sharon Roy</option>
									<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-21.jpg">Vaughan</option>
									<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-23.jpg">Jessica</option>
									<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
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
									<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg">Darlee Robertson</option>
									<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" selected>Sharon Roy</option>
									<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-21.jpg">Vaughan</option>
									<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-23.jpg">Jessica</option>
									<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
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
								<input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="Collab, Rated" >
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
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_success_1">Create</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Add New Deals -->

</div>
<!-- /Main Wrapper -->

<?= $this->include('partials/vendor-scripts') ?>
<!-- Profile Upload JS -->
<script src="<?php echo base_url();?>assets/js/profile-upload.js"></script>
<!-- Summernote JS -->
<script src="<?php echo base_url();?>assets/plugins/summernote/summernote-lite.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Title -->
	<title>Manage users  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>	

<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
	<!-- Summernote CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/summernote/summernote-lite.min.css">

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

						<div class="card">

							<div class="card-header">
								<!-- Search -->
								<div class="row align-items-center">
									<div class="col-sm-4">
										<div class="icon-form mb-3 mb-sm-0">
											<span class="form-icon"><i class="ti ti-search"></i></span>
											<input type="text" class="form-control" placeholder="Search User">
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
											<a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add"><i class="ti ti-square-rounded-plus me-2"></i>Add user</a>
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
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Location</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-tag" class="check">
															<label for="col-tag" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Created Date</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-date" class="check">
															<label for="col-date" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Last Activity</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-activity" class="check">
															<label for="col-activity" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Status</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-status" class="check">
															<label for="col-status" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i class="ti ti-grip-vertical me-2"></i>Action</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-action" class="check">
															<label for="col-action" class="checktoggle"></label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-sorts dropdown">
											<a href="javascript:void(0);" data-bs-toggle="dropdown"  data-bs-auto-close="outside"><i class="ti ti-filter-share"></i>Filter</a>
											<div class="filter-dropdown-menu dropdown-menu  dropdown-menu-md-end p-3">
												<div class="filter-set-view">
													<div class="filter-set-head">
														<h4><i class="ti ti-filter-share"></i>Filter</h4>
													</div>
													<div class="accordion" id="accordionExample">
														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Name</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse show" id="collapseTwo" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<div class="mb-2 icon-form">
																		<span class="form-icon"><i class="ti ti-search"></i></span>
																		<input type="text" class="form-control" placeholder="Search Name">
																	</div>
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					Darlee Robertson
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Sharon Roy
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Vaughan
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Jessica
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
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
																<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#phone" aria-expanded="false" aria-controls="phone">Phone</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse" id="phone" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					+1 875455453
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					+1 989757485
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					+1 546555455
																				</label>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#email" aria-expanded="false" aria-controls="email">Email</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse" id="email" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					robertson@example.com
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					sharon@example.com
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					vaughan12@example.com
																				</label>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#location" aria-expanded="false" aria-controls="location">Location</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse" id="location" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					Germany
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
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
																					Canada
																				</label>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#owner" aria-expanded="false" aria-controls="owner">Created Date</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse" id="owner" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					25 Sep 2023, 12:12 pm
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					27 Sep 2023, 07:40 am
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					29 Sep 2023, 08:20 am
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					02 Oct 2023, 10:10 am
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					17 Oct 2023, 04:25 pm
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
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					Inactive
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
																<a href="<?php echo base_url();?>manage-users" class="btn btn-primary">Filter</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									
									</div>
								</div>
								<!-- /Filter -->

								<!-- Manage Users List -->
								<div class="table-responsive custom-table">
									<table class="table" id="manage-users-list">
										<thead class="thead-light">
											<tr>
												<th class="no-sort">
													<label class="checkboxs">
														<input type="checkbox" id="select-all"><span class="checkmarks"></span>
													</label>
												</th>
												<th class="no-sort"></th>
												<th>Name</th>
												<th>Phone</th>
												<th>Email</th>
												<th>Location</th>
												<th>Created</th>
												<th>Last Activity</th>
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
								<!-- /Manage Users List -->

							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add User -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
			<div class="offcanvas-header border-bottom">
				<h5 class="fw-semibold">Add New User</h5>
				<button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="<?php echo base_url();?>manage-users">							
					<div>
						<!-- Basic Info -->
						<div>
							<div class="row">
								<div class="col-md-12">
									<div class="profile-pic-upload">
										<div class="profile-pic">
											<span><i class="ti ti-photo"></i></span>
										</div>
										<div class="upload-content">
											<div class="upload-btn">
												<input type="file">
												<span>
													<i class="ti ti-file-broken"></i>Upload File
												</span>
											</div>
											<p>JPG, GIF or PNG. Max size of 800K</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label"> Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">User Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
								</div>										
								<div class="col-md-6">
									<div class="mb-3">
										<div class="d-flex justify-content-between align-items-center">
											<label class="col-form-label">Email <span class="text-danger">*</span></label>
											<div class="status-toggle small-toggle-btn d-flex align-items-center">
												<span class="me-2 label-text">Email Opt Out</span>
												<input type="checkbox" id="user1" class="check" checked="">
												<label for="user1" class="checktoggle"></label>
											</div>
										</div>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">Role <span class="text-danger">*</span></label>
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
										<label class="col-form-label">Password <span class="text-danger">*</span></label>
										<div class="icon-form-end">
											<span class="form-icon"><i class="ti ti-eye-off"></i></span>
											<input type="password" class="form-control">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">Repeat Password <span class="text-danger">*</span></label>
										<div class="icon-form-end">
											<span class="form-icon"><i class="ti ti-eye-off"></i></span>
											<input type="password" class="form-control">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">Location <span class="text-danger">*</span></label>
										<select class="select">
											<option>Choose</option>
											<option>Germany</option>
											<option>USA</option>
											<option>Canada</option>
											<option>India</option>
											<option>China</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="radio-wrap">
										<label class="col-form-label">Status</label>
										<div class="d-flex align-items-center">
											<div class="me-2">
												<input type="radio" class="status-radio" id="active1" name="status" checked="">
												<label for="active1">Active</label>
											</div>
											<div>
												<input type="radio" class="status-radio" id="inactive1" name="status">
												<label for="inactive1">Inactive</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Basic Info -->
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<a href="#" class="btn btn-light me-2" data-bs-dismiss="offcanvas">Cancel</a>
						<button type="submit" class="btn btn-primary">Create</button>
					</div>
				</form>
			</div>
			
		</div>
		<!-- /Add User -->

		<!-- Edit User -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
			<div class="offcanvas-header border-bottom">
				<h5 class="fw-semibold">Edit User</h5>
				<button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="<?php echo base_url();?>manage-users">							
					<div>
						<!-- Basic Info -->
						<div>
							<div class="row">
								<div class="col-md-12">
									<div class="profile-pic-upload">
										<div class="profile-pic">
											<span><i class="ti ti-photo"></i></span>
										</div>
										<div class="upload-content">
											<div class="upload-btn">
												<input type="file">
												<span>
													<i class="ti ti-file-broken"></i>Upload File
												</span>
											</div>
											<p>JPG, GIF or PNG. Max size of 800K</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label"> Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control" value="Darlee Robertson">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">User Name <span class="text-danger">*</span></label>
										<input type="text" class="form-control" value="Darlee Robertson">
									</div>
								</div>										
								<div class="col-md-6">
									<div class="mb-3">
										<div class="d-flex justify-content-between align-items-center">
											<label class="col-form-label">Email <span class="text-danger">*</span></label>
											<div class="status-toggle small-toggle-btn d-flex align-items-center">
												<span class="me-2 label-text">Email Opt Out</span>
												<input type="checkbox" id="user1" class="check" checked="">
												<label for="user1" class="checktoggle"></label>
											</div>
										</div>
										<input type="text" class="form-control" value="robertson@example.com">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">Role <span class="text-danger">*</span></label>
										<input type="text" class="form-control" value="Facility Manager">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">Phone 1 <span class="text-danger">*</span></label>
										<input type="text" class="form-control" value="	+1 989757485">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">Phone 2</label>
										<input type="text" class="form-control" value="	+1 989757485">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">Password <span class="text-danger">*</span></label>
										<div class="icon-form-end">
											<span class="form-icon"><i class="ti ti-eye-off"></i></span>
											<input type="password" class="form-control" value="****">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">Repeat Password <span class="text-danger">*</span></label>
										<div class="icon-form-end">
											<span class="form-icon"><i class="ti ti-eye-off"></i></span>
											<input type="password" class="form-control" value="****">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="col-form-label">Location <span class="text-danger">*</span></label>
										<select class="select">
											<option>Choose</option>
											<option selected>Germany</option>
											<option>USA</option>
											<option>Canada</option>
											<option>India</option>
											<option>China</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="radio-wrap">
										<label class="col-form-label">Status</label>
										<div class="d-flex align-items-center">
											<div class="me-2">
												<input type="radio" class="status-radio" id="active1" name="status" checked="">
												<label for="active1">Active</label>
											</div>
											<div>
												<input type="radio" class="status-radio" id="inactive1" name="status">
												<label for="inactive1">Inactive</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Basic Info -->
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<a href="#" class="btn btn-light me-2" data-bs-dismiss="offcanvas">Cancel</a>
						<button type="submit" class="btn btn-primary">Create</button>
					</div>
				</form>
			</div>
			
		</div>
		<!-- /Edit User -->

		<!-- Delete User -->
		<div class="modal fade" id="delete_contact" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center">
							<div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
								<i class="ti ti-trash-x fs-36 text-danger"></i>
							</div>
							<h4 class="mb-2">Remove users?</h4>
							<p class="mb-0">Are you sure you want to remove it</p>
							<div class="d-flex align-items-center justify-content-center mt-4">
								<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="<?php echo base_url();?>manage-users" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete User -->

	</div>
	<!-- /Main Wrapper -->

	<?= $this->include('partials/vendor-scripts') ?>

	<!-- Summernote JS -->
	<script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-lite.min.js"></script>

</body>
</html>
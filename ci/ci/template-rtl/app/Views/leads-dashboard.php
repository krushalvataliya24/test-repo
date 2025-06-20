<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Title -->
	<title>Leads Dashboard  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>	

<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
</head>
<body>
	
	<!-- Main Wrapper -->
	<div class="main-wrapper">
	<div class="preloader">
			<span class="loader"></span>
		</div>

	<?= $this->include('partials/menu') ?>

	<!-- Page Wrapper -->
	<div class="page-wrapper">
			<div class="content">

				<div class="row">
					<div class="col-md-12">
						<div class="page-header">
							<div class="row align-items-center ">
								<div class="col-md-4">
									<h3 class="page-title">Leads Dashboard</h3>
								</div>
								<div class="col-md-8 float-end ms-auto">
									<div class="d-flex title-head">
										<div class="daterange-picker d-flex align-items-center justify-content-center">
											<div class="form-sort me-2">
												<i class="ti ti-calendar"></i>
												<input type="text" class="form-control  date-range bookingrange">
											</div>
											<div class="head-icons mb-0">
												<a href="<?php echo base_url();?>leads-dashboard" data-bs-toggle="tooltip"
													data-bs-placement="top" data-bs-original-title="Refresh"><i
														class="ti ti-refresh-dot"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="tooltip"
													data-bs-placement="top" data-bs-original-title="Collapse"
													id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Recently Created Leads</h4>
									<div class="dropdown">
										<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
											<i class="ti ti-calendar-check me-2"></i>Last 30 days
										</a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="javascript:void(0);" class="dropdown-item">
												Last 15 days
											</a>
											<a href="javascript:void(0);" class="dropdown-item">
												Last 30 days
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive custom-table">
									<table class="table dataTable" id="lead-project">
										<thead class="thead-light">
											<tr>
												<th>Lead Name</th>
												<th>Company Name</th>
												<th>Phone</th>
												<th>Lead Status</th>
											</tr>
										</thead>
										<tbody>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5 d-flex">
						<div class="card w-100">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Projects By Stage</h4>
								<div class="dropdown">
									<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
										Last 30 Days
									</a>
									<div class="dropdown-menu dropdown-menu-end">
										<a href="javascript:void(0);" class="dropdown-item">
											Last 30 Days
										</a>
										<a href="javascript:void(0);" class="dropdown-item">
											Last 15 Days
										</a>
										<a href="javascript:void(0);" class="dropdown-item">
											Last 7 Days
										</a>
									</div>
								</div>
								</div>
							</div>
							<div class="card-body">

								<div id="leadpiechart"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 d-flex">
						<div class="card w-100">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Projects By Stage</h4>
									<div class="d-flex align-items-center flex-wrap row-gap-2">
										<div class="dropdown me-2">
											<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
												Sales Pipeline
											</a>
											<div class="dropdown-menu dropdown-menu-end">														
												<a href="javascript:void(0);" class="dropdown-item">
													Marketing Pipeline
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Sales Pipeline
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Email
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Chats
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Operational
												</a>
											</div>										
										</div>
										<div class="dropdown">
											<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
												Last 30 Days
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="javascript:void(0);" class="dropdown-item">
													Last 30 Days
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Last 15 Days
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Last 7 Days
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								
								<div id="contact-report"></div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Leads By Stage</h4>
									<div class="d-flex align-items-center flex-wrap row-gap-2">
										<div class="dropdown me-2">
											<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
												Marketing Pipeline
											</a>
											<div class="dropdown-menu dropdown-menu-end">														
												<a href="javascript:void(0);" class="dropdown-item">
													Marketing Pipeline
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Sales Pipeline
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Email
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Chats
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Operational
												</a>
											</div>										
										</div>
										<div class="dropdown">
											<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
												Last 3 months
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="javascript:void(0);" class="dropdown-item">
													Last 3 months
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Last 6 months
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Last 12 months
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div id="last-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
									<h4><i class="ti ti-grip-vertical me-1"></i>Won Deals Stage</h4>
									<div class="d-flex align-items-center flex-wrap row-gap-2">
										<div class="dropdown me-2">
											<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
												Marketing Pipeline
											</a>
											<div class="dropdown-menu dropdown-menu-end">														
												<a href="javascript:void(0);" class="dropdown-item">
													Marketing Pipeline
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Sales Pipeline
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Email
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Chats
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Operational
												</a>
											</div>										
										</div>
										<div class="dropdown">
											<a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
												Last 3 months
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="javascript:void(0);" class="dropdown-item">
													Last 3 months
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Last 6 months
												</a>
												<a href="javascript:void(0);" class="dropdown-item">
													Last 12 months
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body ">
								<div id="won-chart"></div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Delete Contact -->
		<div class="modal custom-modal fade" id="delete_contact" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header border-0 m-0 justify-content-end">
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<div class="success-message text-center">
							<div class="success-popup-icon">
								<i class="ti ti-trash-x"></i>
							</div>
							<h3>Remove Contacts?</h3>
							<p class="del-info">Are you sure you want to remove contact you selected.</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="<?php echo base_url();?>contacts" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Contact -->

		<!-- Create Contact -->
		<div class="modal custom-modal fade" id="create_contact" role="dialog">
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
								<i class="ti ti-user-plus"></i>
							</div>
							<h3>Contact Created Successfully!!!</h3>
							<p>View the details of contact, created</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="<?php echo base_url();?>contact-details" class="btn btn-primary">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Create Contact -->

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
						<form action="<?php echo base_url();?>contacts">
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
						<form action="<?php echo base_url();?>contacts">
							<div class="mb-2 icon-form">
								<span class="form-icon"><i class="ti ti-search"></i></span>
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<div class="access-wrap">
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

		<!-- Add Event Modal -->
		<div id="dwnld_report" class="modal custom-modal fade" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Download Report</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">×</span></button>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url();?>calendar">
							<div class="mb-3">
								<label class="form-label">File Type <span class="text-danger">*</span></label>
								<select class="select">
									<option>Download as PDF</option>
									<option>Download as Excel</option>
								</select>
							</div>
							<div class="mb-3">
								<h5>Filters</h5>
							</div>
							<div class="mb-3">
								<label class="form-label">File Type <span class="text-danger">*</span></label>
								<select class="select">
									<option>All Fields</option>
									<option>Name</option>
									<option>Position</option>
									<option>Owner</option>
									<option>Location</option>
									<option>Phone</option>
									<option>Date Created</option>
								</select>
							</div>
							<div class="mb-3">
								<label class="form-label">Position<span class="text-danger">*</span></label>
								<select class="select">
									<option>All Position</option>
									<option>Installer</option>
									<option>Senior Manager</option>
									<option>Test Engineer</option>
									<option>UI /UX Designer</option>
								</select>
							</div>
							<div class="mb-3">
								<label class="form-label">Source<span class="text-danger">*</span></label>
								<select class="select">
									<option>All Source</option>
									<option>Google</option>
									<option>Campaigns </option>
									<option>Referrals</option>
									<option>Paid Social</option>
								</select>
							</div>
							<div class="mb-3">
								<label class="form-label">Select Year<span class="text-danger">*</span></label>
								<select class="select">
									<option>2023</option>
									<option>2022</option>
									<option>2021</option>
								</select>
							</div>
							<div class="col-lg-12 text-end modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="#" class="btn btn-primary">Download Now</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Event Modal -->

	</div>
	<!-- /Main Wrapper -->

	<?= $this->include('partials/vendor-scripts') ?>

	<!-- Apexchart JS -->
	<script src="<?php echo base_url(); ?>assets/plugins/apexchart/apexcharts.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/apexchart/chart-data.js"></script>


</body>
</html>
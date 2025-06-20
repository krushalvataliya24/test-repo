<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- Title -->
	<title>Perference  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>	

<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
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

						<!-- Settings Menu -->
						<div class="card">
							<div class="card-body pb-0 pt-2">
								<ul class="nav nav-tabs nav-tabs-bottom">
									<li class="nav-item me-3">
										<a href="<?php echo base_url();?>profile" class="nav-link px-0">
											<i class="ti ti-settings-cog me-2"></i>General Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="<?php echo base_url();?>company-settings" class="nav-link px-0 active">
											<i class="ti ti-world-cog me-2"></i>Website Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="<?php echo base_url();?>invoice-settings" class="nav-link px-0">
											<i class="ti ti-apps me-2"></i>App Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="<?php echo base_url();?>email-settings" class="nav-link px-0">
											<i class="ti ti-device-laptop me-2"></i>System Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="<?php echo base_url();?>payment-gateways" class="nav-link px-0">
											<i class="ti ti-moneybag me-2"></i>Financial Settings
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo base_url();?>storage" class="nav-link px-0">
											<i class="ti ti-flag-cog me-2"></i>Other Settings
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /Settings Menu -->

						<div class="row">
							<div class="col-xl-3 col-lg-12 theiaStickySidebar">

								<!-- Settings Sidebar -->
								<div class="card">
									<div class="card-body">
										<div class="settings-sidebar">
											<h4 class="fw-semibold mb-3">Website Settings</h4>
											<div class="list-group list-group-flush settings-sidebar">
												<a href="<?php echo base_url();?>company-settings" class="fw-medium">Company Settings</a>
												<a href="<?php echo base_url();?>localization" class="fw-medium">Localization</a>
												<a href="<?php echo base_url();?>prefixes" class="fw-medium">Prefixes</a>
												<a href="<?php echo base_url();?>preference" class="fw-medium active">Preference</a>
												<a href="<?php echo base_url();?>appearance" class="fw-medium">Appearance</a>
												<a href="<?php echo base_url();?>language" class="fw-medium">Language</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Settings Sidebar -->

							</div>

							<div class="col-xl-9 col-lg-12">

								<!-- Prefixes -->
								<div class="card">
									<div class="card-body">
										<h4 class="fw-semibold mb-3">Preference</h4>
										<form action="<?php echo base_url();?>preference">							
											<div class="row">
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="<?php echo base_url();?>assets/img/icons/preference-01.svg" alt="">
																<h6 class="fw-semibold ms-3">Contact</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="<?php echo base_url();?>assets/img/icons/preference-02.svg" alt="">
																<h6 class="fw-semibold ms-3">Deals</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="<?php echo base_url();?>assets/img/icons/preference-03.svg" alt="">
																<h6 class="fw-semibold ms-3">Leads</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="<?php echo base_url();?>assets/img/icons/preference-04.svg" alt="">
																<h6 class="fw-semibold ms-3">Pipelines</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="<?php echo base_url();?>assets/img/icons/preference-02.svg" alt="">
																<h6 class="fw-semibold ms-3">Campaign</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="<?php echo base_url();?>assets/img/icons/preference-06.svg" alt="">
																<h6 class="fw-semibold ms-3">Projects</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="<?php echo base_url();?>assets/img/icons/preference-07.svg" alt="">
																<h6 class="fw-semibold ms-3">Tasks</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="<?php echo base_url();?>assets/img/icons/preference-08.svg" alt="">
																<h6 class="fw-semibold ms-3">Acivities</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="<?php echo base_url();?>assets/img/icons/preference-09.svg" alt="">
																<h6 class="fw-semibold ms-3">Company</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="<?php echo base_url();?>assets/img/icons/preference-10.svg" alt="">
																<h6 class="fw-semibold ms-3">Analytics</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="<?php echo base_url();?>assets/img/icons/preference-11.svg" alt="">
																<h6 class="fw-semibold ms-3">Clients</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-sm-6">
													<div class="card border mb-3">
														<div class="card-body d-flex align-items-center justify-content-between">
															<div class="d-flex align-items-center">
																<img src="<?php echo base_url();?>assets/img/icons/preference-12.svg" alt="">
																<h6 class="fw-semibold ms-3">Customers</h6>
															</div>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div>
												<a href="#" class="btn btn-light me-3">Cancel</a>
												<button type="submit" class="btn btn-primary">Save Changes</button>
											</div>
										</form>
									</div>
								</div>
								<!-- /Prefixes -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Wrapper -->

	</div>
	<!-- /Main Wrapper -->

	<?= $this->include('partials/vendor-scripts') ?>	
	<!-- Sticky Sidebar JS -->
    <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
</body>
</html>
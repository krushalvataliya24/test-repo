<!DOCTYPE html>
<html lang="en">
<head>
	 <!-- Title -->
	 <title>Connected Apps  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>	
	
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
										<a href="<?php echo base_url();?>profile" class="nav-link px-0 active">
											<i class="ti ti-settings-cog me-2"></i>General Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="<?php echo base_url();?>company-settings" class="nav-link px-0">
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
											<h4 class="fw-semibold mb-3">General Settings</h4>
											<div class="list-group list-group-flush settings-sidebar">
												<a href="<?php echo base_url();?>profile" class="fw-medium">Profile</a>
												<a href="<?php echo base_url();?>security" class="fw-medium">Security</a>
												<a href="<?php echo base_url();?>notifications" class="fw-medium">Notifications</a>
												<a href="<?php echo base_url();?>connected-apps" class="fw-medium active">Connected Apps</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Settings Sidebar -->

							</div>

							<div class="col-xl-9 col-lg-12">

								<!-- Settings Info -->
								<div class="card">
									<div class="card-body pb-0">
										<h4 class="fw-semibold mb-3">Connected Apps</h4>
										<div class="row">

											<!-- App -->
											<div class="col-md-4 col-sm-6">
												<div class="card border mb-3">
													<div class="card-body">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<img src="<?php echo base_url();?>assets/img/icons/integration-01.svg" alt="Icon">
															<div class="connect-btn">
																<a href="javascript:void(0);" class="badge badge-soft-success">Connected</a>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<p class="mb-0">Google Calendar</p>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- /App -->

											<!-- App -->
											<div class="col-md-4 col-sm-6">
												<div class="card border mb-3">
													<div class="card-body">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<img src="<?php echo base_url();?>assets/img/icons/integration-02.svg" alt="Icon">
															<div class="connect-btn">
																<a href="javascript:void(0);" class="badge border bg-white text-default">Connect</a>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<p class="mb-0">Figma</p>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- /App -->

											<!-- App -->
											<div class="col-md-4 col-sm-6">
												<div class="card border mb-3">
													<div class="card-body">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<img src="<?php echo base_url();?>assets/img/icons/integration-03.svg" alt="Icon">
															<div class="connect-btn">
																<a href="javascript:void(0);" class="badge badge-soft-success">Connected</a>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<p class="mb-0">Dropbox</p>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- /App -->

											<!-- App -->
											<div class="col-md-4 col-sm-6">
												<div class="card border mb-3">
													<div class="card-body">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<img src="<?php echo base_url();?>assets/img/icons/integration-04.svg" alt="Icon">
															<div class="connect-btn">
																<a href="javascript:void(0);" class="badge border bg-white text-default">Connect</a>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<p class="mb-0">Slack</p>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- /App -->

											<!-- App -->
											<div class="col-md-4 col-sm-6">
												<div class="card border mb-3">
													<div class="card-body">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<img src="<?php echo base_url();?>assets/img/icons/integration-05.svg" alt="Icon">
															<div class="connect-btn">
																<a href="javascript:void(0);" class="badge badge-soft-success">Connected</a>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<p class="mb-0">Gmail</p>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- /App -->

											<!-- App -->
											<div class="col-md-4 col-sm-6">
												<div class="card border mb-3">
													<div class="card-body">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<img src="<?php echo base_url();?>assets/img/icons/integration-06.svg" alt="Icon">
															<div class="connect-btn">
																<a href="javascript:void(0);" class="badge border bg-white text-default">Connect</a>
															</div>
														</div>
														<div class="d-flex align-items-center justify-content-between">
															<p class="mb-0">Github</p>
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" role="switch" checked>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- /App -->

										</div>
									</div>
								</div>
								<!-- /Settings Info -->

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
<!-- Profile Upload JS -->
<script src="<?php echo base_url();?>assets/js/profile-upload.js"></script>
<!-- Sticky Sidebar JS -->
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

</body>
</html>
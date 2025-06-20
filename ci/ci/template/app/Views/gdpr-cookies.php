<!DOCTYPE html>
<html lang="en">
<head>
<!-- Title -->
<title>gdpr cokkies  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>	
 		
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
										<a href="<?php echo base_url();?>email-settings" class="nav-link px-0 active">
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
											<h4 class="fw-semibold mb-3">Other Settings</h4>
											<div class="list-group list-group-flush settings-sidebar">
												<a href="<?php echo base_url();?>email-settings" class="fw-medium">Email Settings</a>
												<a href="<?php echo base_url();?>sms-gateways" class="fw-medium">SMS Gateways</a>
												<a href="<?php echo base_url();?>gdpr-cookies" class="fw-medium active">GDPR Cookies</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Settings Sidebar -->
							</div>
							<div class="col-xl-9 col-lg-12">

								<!-- GDPR Cookies -->
								<div class="card">
									<div class="card-body">
										<div class="mb-3">
											<h4 class="fs-20">GDPR Cookies</h4>
										</div>
										<form action="<?php echo base_url();?>gdpr-cookies">
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3">
														<h6 class="fw-medium">Cookies Content Text</h6>
														<p class="fs-12">You can configure the text here</p>
													</div>
												</div>
												<div class="col-md-6">
													<div class="mb-3">
														<div class="summernote"></div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3">
														<h6 class="fw-medium">Cookies Position</h6>
														<p class="fs-12">You can configure the type</p>
													</div>
												</div>
												<div class="col-md-4">
													<div class="mb-3">
														<select class="select">
															<option selected>Right</option>
															<option>Left</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3">
														<h6 class="fw-medium">Agree Button Text</h6>
														<p class="fs-12">You can configure the text here</p>
													</div>
												</div>
												<div class="col-md-4">
													<div class="mb-3">
														<input type="text" class="form-control" value="Manage">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3">
														<h6 class="fw-medium">Decline Button Text</h6>
														<p class="fs-12">You can configure the text here</p>
													</div>
												</div>
												<div class="col-md-4">
													<div class="mb-3">
														<input type="text" class="form-control" value="Manage">
													</div>
												</div>
											</div>
											<div class="row align-items-center">
												<div class="col-md-6">
													<div class="mb-3">
														<h6 class="fw-medium">Show Decline Button</h6>
														<p class="fs-12">To display decline button</p>
													</div>
												</div>
												<div class="col-md-4">
													<div class="mb-3">
														<div class="status-toggle">
															<input type="checkbox" id="sms1" class="check" checked="">
															<label for="sms1" class="checktoggle">	</label>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="mb-3">
														<h6 class="fw-medium">Link for Cookies Page</h6>
														<p class="fs-12">You can configure the link here</p>
													</div>
												</div>
												<div class="col-md-4">
													<div class="mb-3">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<a href="#" class="btn btn-light me-2">Cancel</a>
												<button type="submit" class="btn btn-primary">Save Changes</button>
											</div>
										</form>
									</div>
								</div>
								<!-- /GDPR Cookies -->

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
    <!-- Summernote JS -->
<script src="<?php echo base_url();?>assets/plugins/summernote/summernote-lite.min.js"></script>
<!-- Sticky Sidebar JS -->
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

</body>
</html>
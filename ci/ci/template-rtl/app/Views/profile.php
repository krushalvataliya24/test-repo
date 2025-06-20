<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Title -->
	<title>Profile  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>	

<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/feather.css">


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
												<a href="<?php echo base_url();?>profile" class="fw-medium active">Profile</a>
												<a href="<?php echo base_url();?>security" class="fw-medium">Security</a>
												<a href="<?php echo base_url();?>notifications" class="fw-medium">Notifications</a>
												<a href="<?php echo base_url();?>connected-apps" class="fw-medium">Connected Apps</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Settings Sidebar -->

							</div>

							<div class="col-xl-9 col-lg-12">

								<!-- Settings Info -->
								<div class="card">
									<div class="card-body">
										<h4 class="fw-semibold mb-3">Profile Settings</h4>
										<form action="<?php echo base_url();?>profile">
											<div class="border-bottom mb-3 pb-3">
												<h5 class="fw-semibold mb-1">Employee Information</h5>
												<p>Provide the information below</p>
											</div>
											<div class="mb-3">
												<div class="profile-upload">
													<div class="profile-upload-img">
														<span><i class="ti ti-photo"></i></span>
														<img id="ImgPreview" src="<?php echo base_url();?>assets/img/profiles/avatar-02.jpg" alt="img" class="preview1">
														<button type="button" id="removeImage1" class="profile-remove">
															<i class="feather-x"></i>
														</button>
													</div>
													<div class="profile-upload-content">
														<label class="profile-upload-btn">
															<i class="ti ti-file-broken"></i> Upload File 
															<input type="file" id="imag" class="input-img">
														</label>
														<p>JPG, GIF or PNG. Max size of 800K</p>
													</div>
												</div>
											</div>
											<div class="border-bottom mb-3">
												<div class="row">
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">
																First Name  <span class="text-danger">*</span>
															</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">
																Last Name  <span class="text-danger">*</span>
															</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">
																User Name  <span class="text-danger">*</span>
															</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">
																Phone Number  <span class="text-danger">*</span>
															</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">
																Email  <span class="text-danger">*</span>
															</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="border-bottom mb-3 pb-3">
												<h5 class="fw-semibold mb-1">Address</h5>
												<p>Please enter the address details</p>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div class="mb-3">
														<label class="form-label">
															Address  <span class="text-danger">*</span>
														</label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 col-md-6">
													<div class="mb-3">
														<label class="form-label">
															Country <span class="text-danger">*</span>
														</label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 col-md-6">
													<div class="mb-3">
														<label class="form-label">
															State / Province <span class="text-danger">*</span>
														</label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 col-md-6">
													<div class="mb-3">
														<label class="form-label">
															City <span class="text-danger">*</span>
														</label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-lg-3 col-md-6">
													<div class="mb-3">
														<label class="form-label">
															Postal Code <span class="text-danger">*</span>
														</label>
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div>
												<a href="#" class="btn btn-light me-2">Cancel</a>
												<button type="submit" class="btn btn-primary">Save Changes</button>
											</div>
										</form>
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
	<script src="<?php echo base_url(); ?>assets/js/profile-upload.js"></script>
	
	<!-- Sticky Sidebar JS -->
    <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
</body>
</html>
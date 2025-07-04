<!DOCTYPE html>
<html lang="en">
<head>
	 <!-- Title -->
	 <title>Company Settings  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>	
	
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
												<a href="<?php echo base_url();?>company-settings" class="fw-medium active">Company Settings</a>
												<a href="<?php echo base_url();?>localization" class="fw-medium">Localization</a>
												<a href="<?php echo base_url();?>prefixes" class="fw-medium">Prefixes</a>
												<a href="<?php echo base_url();?>preference" class="fw-medium">Preference</a>
												<a href="<?php echo base_url();?>appearance" class="fw-medium">Appearance</a>
												<a href="<?php echo base_url();?>language" class="fw-medium">Language</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Settings Sidebar -->

							</div>

							<div class="col-xl-9 col-lg-12">

								<!-- Company Settings -->
								<div class="card">
									<div class="card-body">
										<h4 class="fw-semibold mb-3">Company Settings</h4>
										<form action="<?php echo base_url();?>company-settings">	
											<div class="border-bottom mb-3 pb-3">
												<h5 class="fw-semibold mb-1">Company Information</h5>
												<p>Provide the company information below</p>
											</div>			
											<div class="border-bottom mb-3 ">			
												<div class="row">
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">Company Name </label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">Company Email Address</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">Phone Number</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">Fax</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<label class="form-label">Website</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="border-bottom mb-3 pb-3">
												<h5 class="fw-semibold mb-1">Company Images</h5>
												<p>Provide the company images</p>
											</div>			
											<div class="border-bottom mb-3">			
												<div class="row">
													<div class="col-md-6">
														<div class="mb-3">
															<div class="profile-upload">
																<div class="profile-upload-img">
																	<span><i class="ti ti-photo"></i></span>
																	<img src="<?php echo base_url();?>assets/img/icons/company-icon-03.svg" alt="img" class="preview1">
		    														<button type="button" class="profile-remove">
		    															<i class="feather-x"></i>
		    														</button>
																</div>
																<div class="profile-upload-content">
																	<label class="profile-upload-btn">
																		<i class="ti ti-file-broken"></i> Upload File 
																		<input type="file" class="input-img">
																	</label>
																	<p>Upload Logo of your company to display in website. JPG or PNG. Max size of 800K</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="mb-3">
															<div class="profile-upload">
																<div class="profile-upload-img">
																	<span><i class="ti ti-photo"></i></span>
																	<img src="<?php echo base_url();?>assets/img/icons/company-icon-03.svg" alt="img" class="preview1">
		    														<button type="button" class="profile-remove">
		    															<i class="feather-x"></i>
		    														</button>
																</div>
																<div class="profile-upload-content">
																	<label class="profile-upload-btn">
																		<i class="ti ti-file-broken"></i> Upload File 
																		<input type="file" class="input-img">
																	</label>
																	<p>Upload Logo of your company to display in website. JPG or PNG. Max size of 800K</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="mb-3">
															<div class="profile-upload">
																<div class="profile-upload-img">
																	<span><i class="ti ti-photo"></i></span>
																	<img src="<?php echo base_url();?>assets/img/icons/company-icon-03.svg" alt="img" class="preview1">
		    														<button type="button" class="profile-remove">
		    															<i class="feather-x"></i>
		    														</button>
																</div>
																<div class="profile-upload-content">
																	<label class="profile-upload-btn">
																		<i class="ti ti-file-broken"></i> Upload File 
																		<input type="file" class="input-img">
																	</label>
																	<p>Upload Logo of your company to display in website. JPG or PNG. Max size of 800K</p>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="mb-3">
															<div class="profile-upload">
																<div class="profile-upload-img">
																	<span><i class="ti ti-photo"></i></span>
																	<img src="<?php echo base_url();?>assets/img/icons/company-icon-03.svg" alt="img" class="preview1">
		    														<button type="button" class="profile-remove">
		    															<i class="feather-x"></i>
		    														</button>
																</div>
																<div class="profile-upload-content">
																	<label class="profile-upload-btn">
																		<i class="ti ti-file-broken"></i> Upload File 
																		<input type="file" class="input-img">
																	</label>
																	<p>Upload Logo of your company to display in website. JPG or PNG. Max size of 800K</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="border-bottom mb-3 pb-3">
												<h5 class="fw-semibold mb-1">Address</h5>
												<p>Please enter the company address details</p>
											</div>			
											<div class="border-bottom mb-3">			
												<div class="row">
													<div class="col-md-12">
														<div class="mb-3">
															<label class="form-label">Address</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-xl-3 col-md-4">
														<div class="mb-3">
															<label class="form-label">Country</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-xl-3 col-md-4">
														<div class="mb-3">
															<label class="form-label">State / Province</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-xl-3 col-md-4">
														<div class="mb-3">
															<label class="form-label">Fax</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-xl-3 col-md-4">
														<div class="mb-3">
															<label class="form-label">Postal Code</label>
															<input type="text" class="form-control">
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
								<!-- /Company Settings -->

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
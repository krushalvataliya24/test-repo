<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Title -->
    <title>Appearance | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
		
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
										<a href="invoice-settings" class="nav-link px-0">
											<i class="ti ti-apps me-2"></i>App Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="email-settings" class="nav-link px-0">
											<i class="ti ti-device-laptop me-2"></i>System Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="payment-gateways" class="nav-link px-0">
											<i class="ti ti-moneybag me-2"></i>Financial Settings
										</a>
									</li>
									<li class="nav-item">
										<a href="storage" class="nav-link px-0">
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
												<a href="<?php echo base_url();?>preference" class="fw-medium">Preference</a>
												<a href="<?php echo base_url();?>appearance" class="fw-medium active">Appearance</a>
												<a href="<?php echo base_url();?>language" class="fw-medium">Language</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Settings Sidebar -->

							</div>

							<div class="col-xl-9 col-lg-12">

								<!-- Appearance -->
								<div class="card">
									<div class="card-body">
										<h4 class="fw-semibold mb-3">Appearance</h4>
										<form action="<?php echo base_url();?>appearance">
											<div class="mb-0">
												<div class="row">
													<div class="col-md-4">
														<div class="mb-3">
															<h6 class="fw-medium">Select Theme</h6>
															<p>Select theme of the website</p>
														</div>
													</div>
													<div class="col-md-8">
														<div class="mb-3 mb-0">
															<div class="theme-type-images d-flex align-items-center">
																<div class="theme-image active">
																	<div class="theme-image-set">
																		<img src="<?php echo base_url();?>assets/img/theme/theme-01.jpg" alt="">
																	</div>
																	<span>Light</span>
																</div>
																<div class="theme-image">
																	<div class="theme-image-set">
																		<img src="<?php echo base_url();?>assets/img/theme/theme-02.jpg" alt="">
																	</div>
																	<span>Dark</span>
																</div>
																<div class="theme-image">
																	<div class="theme-image-set">
																		<img src="<?php echo base_url();?>assets/img/theme/theme-03.jpg" alt="">
																	</div>
																	<span>Automatic</span>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="mb-3">
															<h6 class="fw-medium">Accent Color</h6>
															<p>Select accent color of website</p>
														</div>
													</div>
													<div class="col-md-8">
														<div class="mb-3">
															<div class="theme-colors">
																<ul>
																	<li>
																		<span class="themecolorset defaultcolor active"></span>
																	</li>
																	<li>
																		<span class="themecolorset theme-secondary"></span>
																	</li>
																	<li>
																		<span class="themecolorset theme-violet"></span>
																	</li>
																	<li>
																		<span class="themecolorset theme-blue"></span>
																	</li>
																	<li>
																		<span class="themecolorset theme-brown"></span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="mb-3">
															<h6 class="fw-medium">Expand Sidebar</h6>
															<p>To display in all the pages</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<div class="form-check form-switch">
																<input class="form-check-input" type="checkbox" checked>
															</div>
														</div>
													</div>
												</div>			
												<div class="row">
													<div class="col-md-4">
														<div class="mb-3">
															<h6 class="fw-medium">Sidebar Size</h6>
															<p>Select size of sidebar to display</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<select class="select">
																<option selected>Large - 250px</option>
																<option>Small - 85px</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="mb-3">
															<h6 class="fw-medium">Font Family</h6>
															<p>Select font family of website</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<select class="select">
																<option selected>Noto Sans</option>
																<option>Nunito</option>
															</select>
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
								<!-- /Appearance -->

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
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="<?php echo base_url();?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

</body>
</html>
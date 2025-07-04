<!DOCTYPE html>
<html lang="en">

<head>

	<?= $this->element('title-meta') ?>
	<!-- Title -->
	<title>Sms Gateways | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
<!-- Feathericon CSS -->
<?php echo $this->Html->css('feather.css') ?>
	<?= $this->element('head-css') ?>
</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<?= $this->element('header') ?>
		<?= $this->element('sidebar') ?>

<!-- Page Wrapper -->
<div class="page-wrapper">
			<div class="content">
				<div class="row">
					<div class="col-md-12">

						<!-- Page Header -->
						<div class="page-header">
							<div class="row align-items-center">
								<div class="col-8">
									<h4 class="page-title">Settings</h4>
								</div>
								<div class="col-4 text-end">
									<div class="head-icons">
										<a href="sms_gateways" data-bs-toggle="tooltip" data-bs-placement="top"
											data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
										<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
											data-bs-original-title="Collapse" id="collapse-header"><i
												class="ti ti-chevrons-up"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Page Header -->

						<!-- Settings Menu -->
						<div class="card">
							<div class="card-body pb-0 pt-2">
								<ul class="nav nav-tabs nav-tabs-bottom">
									<li class="nav-item me-3">
										<a href="profile" class="nav-link px-0">
											<i class="ti ti-settings-cog me-2"></i>General Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="company_settings" class="nav-link px-0">
											<i class="ti ti-world-cog me-2"></i>Website Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="invoice_settings" class="nav-link px-0">
											<i class="ti ti-apps me-2"></i>App Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="email_settings" class="nav-link px-0 active">
											<i class="ti ti-device-laptop me-2"></i>System Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="payment_gateways" class="nav-link px-0">
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
											<h4 class="fw-semibold mb-3">Other Settings</h4>
											<div class="list-group list-group-flush settings-sidebar">
												<a href="email_settings" class="fw-medium">Email Settings</a>
												<a href="sms_gateways" class="fw-medium active">SMS Gateways</a>
												<a href="gdpr_cookies" class="fw-medium">GDPR Cookies</a>
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
										<div class="mb-4">
											<h4 class="fs-20">SMS Gateways</h4>
										</div>
										<div class="row">

											<!-- Gateway Wrap -->
											<div class="col-xxl-4 col-sm-6">
												<div
													class="border rounded d-flex align-items-center justify-content-between p-3 mb-3">
													<div>
														
                                                        <?php echo $this->Html->image('icons/gateway-01.svg', ['alt' => '']); ?>

													</div>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" data-bs-toggle="modal"
															data-bs-target="#add_nexmo"><i
																class="ti ti-settings fs-20"></i></a>
														<div class="status-toggle ms-3">
															<input type="checkbox" id="sms" class="check" checked="">
															<label for="sms" class="checktoggle"> </label>
														</div>
													</div>
												</div>
											</div>
											<!-- /Gateway Wrap -->

											<!-- Gateway Wrap -->
											<div class="col-xxl-4 col-sm-6">
												<div
													class="border rounded d-flex align-items-center justify-content-between p-3 mb-3">
													<div>
													
                                                        <?php echo $this->Html->image('icons/gateway-02.svg', ['alt' => '']); ?>

													</div>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" data-bs-toggle="modal"
															data-bs-target="#add_factor"><i
																class="ti ti-settings fs-20"></i></a>
														<div class="status-toggle ms-3">
															<input type="checkbox" id="sms1" class="check" checked="">
															<label for="sms1" class="checktoggle"> </label>
														</div>
													</div>
												</div>
											</div>
											<!-- /Gateway Wrap -->

											<!-- Gateway Wrap -->
											<div class="col-xxl-4 col-sm-6">
												<div
													class="border rounded d-flex align-items-center justify-content-between p-3 mb-3">
													<div>
														
                                                        <?php echo $this->Html->image('icons/gateway-03.svg', ['alt' => '']); ?>

													</div>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" data-bs-toggle="modal"
															data-bs-target="#add_twilio"><i
																class="ti ti-settings fs-20"></i></a>
														<div class="status-toggle ms-3">
															<input type="checkbox" id="loc" class="check" checked="">
															<label for="loc" class="checktoggle"> </label>
														</div>
													</div>
												</div>
											</div>
											<!-- /Gateway Wrap -->

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

		<!-- Nexmo -->
		<div class="modal custom-modal fade" id="add_nexmo" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Nexmo</h5>
						<div class="d-flex align-items-center mod-toggle">
							<div class="status-toggle">
								<input type="checkbox" id="toggle" class="check" checked="">
								<label for="toggle" class="checktoggle"></label>
							</div>
							<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<i class="ti ti-x"></i>
							</button>
						</div>
					</div>
					<div class="modal-body">
						<form action="sms_gateways">
							<div class="mb-3">
								<label class="col-form-label">API Key <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3">
								<label class="col-form-label">API Secret Key <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Sender ID <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Nexmo -->

		<!-- Add 2Factor -->
		<div class="modal custom-modal fade" id="add_factor" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">2Factor</h5>
						<div class="d-flex align-items-center mod-toggle">
							<div class="status-toggle">
								<input type="checkbox" id="toggle1" class="check" checked="">
								<label for="toggle1" class="checktoggle"></label>
							</div>
							<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<i class="ti ti-x"></i>
							</button>
						</div>
					</div>
					<div class="modal-body">
						<form action="sms_gateways">
							<div class="mb-3">
								<label class="col-form-label">API Key <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3">
								<label class="col-form-label">API Secret Key <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Sender ID <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add 2Factor -->

		<!-- Add Twilio -->
		<div class="modal custom-modal fade" id="add_twilio" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Twilio</h5>
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="sms_gateways">
							<div class="mb-3">
								<label class="col-form-label">API Key <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3">
								<label class="col-form-label">API Secret Key <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3">
								<label class="col-form-label">Sender ID <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Twilio -->



        </div>
	<!-- /Main Wrapper -->

	<?= $this->element('vendor-scripts') ?>

	<!-- Sticky Sidebar JS -->
	<?php echo $this->Html->script('plugins/theia-sticky-sidebar/ResizeSensor.js')?>
	<?php echo $this->Html->script('plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')?>
    <!-- Profile Upload JS -->
	<?php echo $this->Html->script('profile-upload.js')?>

</body>

</html>

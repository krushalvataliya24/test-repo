<!DOCTYPE html>
<html lang="en">

<head>

	<?= $this->element('title-meta') ?>
	<!-- Title -->
	<title>Prefixes | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
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
										<a href="prefixes" data-bs-toggle="tooltip" data-bs-placement="top"
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
										<a href="company_settings" class="nav-link px-0 active">
											<i class="ti ti-world-cog me-2"></i>Website Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="invoice_settings" class="nav-link px-0">
											<i class="ti ti-apps me-2"></i>App Settings
										</a>
									</li>
									<li class="nav-item me-3">
										<a href="email_settings" class="nav-link px-0">
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
											<h4 class="fw-semibold mb-3">Website Settings</h4>
											<div class="list-group list-group-flush settings-sidebar">
												<a href="company_settings" class="fw-medium">Company Settings</a>
												<a href="localization" class="fw-medium">Localization</a>
												<a href="prefixes" class="fw-medium active">Prefixes</a>
												<a href="preference" class="fw-medium">Preference</a>
												<a href="appearance" class="fw-medium">Appearance</a>
												<a href="language" class="fw-medium">Language</a>
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
										<h4 class="fw-semibold mb-3">Prefixes</h4>
										<form action="prefixes">
											<div class="row">
												<div class="col-md-3 col-sm-6">
													<div class="mb-3">
														<label class="form-label">Products(SKU)</label>
														<input type="text" class="form-control" value="SKU - ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="mb-3">
														<label class="form-label">Supplier</label>
														<input type="text" class="form-control" value="SUP - ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="mb-3">
														<label class="form-label">Purchase</label>
														<input type="text" class="form-control" value="PU - ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="mb-3">
														<label class="form-label">Purchase Return</label>
														<input type="text" class="form-control" value="PR - ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="mb-3">
														<label class="form-label">Sales</label>
														<input type="text" class="form-control" value="SA - ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="mb-3">
														<label class="form-label">Sales Return</label>
														<input type="text" class="form-control" value="SR -  ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="mb-3">
														<label class="form-label">Customer</label>
														<input type="text" class="form-control" value="CT - ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="mb-3">
														<label class="form-label">Expense</label>
														<input type="text" class="form-control" value="EX - ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="mb-3">
														<label class="form-label">Stock Transfer</label>
														<input type="text" class="form-control" value="ST -  ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="mb-3">
														<label class="form-label">Stock Adjustment</label>
														<input type="text" class="form-control" value="SA -  ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="mb-3">
														<label class="form-label">Sales Order</label>
														<input type="text" class="form-control" value="SO - ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="mb-3">
														<label class="form-label">Invoice</label>
														<input type="text" class="form-control" value="INV -  ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="mb-3">
														<label class="form-label">Estimation</label>
														<input type="text" class="form-control" value="EST - ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="mb-3">
														<label class="form-label">Transaction</label>
														<input type="text" class="form-control" value="TRN - ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="mb-3">
														<label class="form-label">Employee</label>
														<input type="text" class="form-control" value="EMP -  ">
													</div>
												</div>
												<div class="col-md-3 col-sm-6">
													<div class="mb-3">
														<label class="form-label">Purchase Return</label>
														<input type="text" class="form-control" value="PR -  ">
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
								<!-- /Prefixes -->

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add Translation -->
		<div class="modal custom-modal fade" id="add_translation" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Translation</h5>
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="language">
							<div class="mb-3">
								<label class="form-label">Language <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3">
								<label class="form-label">Code <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
							<div class="mb-3">
								<label class="form-label">Status</label>
								<div class="radio-wrap">
									<div class="d-flex flex-wrap">
										<div class="radio-btn">
											<input type="radio" class="status-radio" id="add-active" name="status"
												checked="">
											<label for="add-active">Active</label>
										</div>
										<div class="radio-btn">
											<input type="radio" class="status-radio" id="add-inactive" name="status">
											<label for="add-inactive">Inactive</label>
										</div>
									</div>
								</div>
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
		<!-- /Add Translation -->

		<!-- Edit Translation -->
		<div class="modal custom-modal fade" id="edit_translation" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Translation</h5>
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="language">
							<div class="mb-3">
								<label class="form-label">Language <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="English">
							</div>
							<div class="mb-3">
								<label class="form-label">Code <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="en">
							</div>
							<div class="mb-3">
								<label class="form-label">Status</label>
								<div class="radio-wrap">
									<div class="d-flex flex-wrap">
										<div class="radio-btn">
											<input type="radio" class="status-radio" id="edit-active" name="status"
												checked="">
											<label for="edit-active">Active</label>
										</div>
										<div class="radio-btn">
											<input type="radio" class="status-radio" id="edit-inactive" name="status">
											<label for="edit-inactive">Inactive</label>
										</div>
									</div>
								</div>
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
		<!-- /Edit Translation -->

		<!-- Import Sample -->
		<div class="modal custom-modal fade" id="import_sample" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Import Sample</h5>
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="language">
							<div class="mb-3">
								<label class="form-label">File <span class="text-danger">*</span></label>
								<select class="select">
									<option>Inventory</option>
									<option>Expense</option>
									<option>Product</option>
								</select>
							</div>
							<div class="mb-3">
								<label class="form-label">Language <span class="text-danger">*</span></label>
								<select class="select">
									<option>English</option>
									<option>Hindi</option>
									<option>Chinese</option>
								</select>
							</div>
							<div class="mb-3">
								<div class="drag-attach">
									<input type="file">
									<div class="img-upload">
										<i class="ti ti-file-broken"></i>Upload File
									</div>
								</div>
							</div>
							<div class="mb-3">
								<label class="form-label">Uploaded Files</label>
								<div class="upload-file">
									<h6>Projectneonals teyys.xls</h6>
									<p>4.25 MB</p>
									<div class="progress">
										<div class="progress-bar bg-success" role="progressbar" style="width: 25%"
											aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<p class="black-text">45%</p>
								</div>
								<div class="upload-file upload-list">
									<div>
										<h6>tes.txt</h6>
										<p>4.25 MB</p>
									</div>
									<a href="javascript:void(0);" class="text-danger"><i class="ti ti-trash-x"></i></a>
								</div>
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
		<!-- /Import Sample -->

		<!-- Delete Translation -->
		<div class="modal custom-modal fade" id="delete_translation" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header border-0 m-0 justify-content-end">
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="language">
							<div class="success-message text-center">
								<div class="success-popup-icon">
									<i class="ti ti-trash-x"></i>
								</div>
								<h3>Remove Translation?</h3>
								<p class="del-info">Are you sure you want to remove it.</p>
								<div class="col-lg-12 text-center modal-btn">
									<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
									<button type="submit" class="btn btn-danger">Yes, Delete it</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Translation -->




        </div>
	<!-- /Main Wrapper -->

	<?= $this->element('vendor-scripts') ?>

	<!-- Sticky Sidebar JS -->
	<?php echo $this->Html->script('plugins/theia-sticky-sidebar/ResizeSensor.js')?>
	<?php echo $this->Html->script('plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')?>

</body>

</html>
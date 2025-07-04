<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Title -->
	<title>Managership Plans  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>	

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

						<!-- Page Header -->
						<div class="page-header">
							<div class="row align-items-center">
								<div class="col-8">
									<h4 class="page-title">Membership Plans</h4>
								</div>
								<div class="col-4 text-end">
									<div class="head-icons">
										<a href="<?php echo base_url();?>membership-plans" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
										<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Page Header -->

						<div class="card">
							<div class="card-body">

								<!-- Search -->
								<div class="row gy-3">
									<div class="col-md-5 col-sm-4">
										<div class="icon-form">
											<span class="form-icon"><i class="ti ti-search"></i></span>
											<input type="text" class="form-control" placeholder="Search Membership">
										</div>							
									</div>		
									<div class="col-md-7 col-sm-8">					
										<div class="text-sm-end">
											<a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add"><i class="ti ti-square-rounded-plus me-1"></i>Add Membership</a>
										</div>
									</div>
								</div>
								<!-- /Search -->							

							</div>
						</div>
						<div class="d-block">
							<div class="d-flex align-items-center justify-content-center mb-4">
								<h4 class="text-default">Monthly</h4>
								<div class="status-toggle mx-3">
									<input id="two_factor" class="check" type="checkbox">
									<label for="two_factor" class="checktoggle">checkbox</label>
								</div>
								<h4 class="text-default">Annually</h4>
							</div>
							<div class="row justify-content-center">
								<div class="col-lg-4 col-md-6">
									<div class="card border">
										<div class="card-body">
											<div class="text-center border-bottom pb-3 mb-3">
												<span>Basic</span>
												<h2 class="d-flex align-items-end justify-content-center mt-1">$50 <span class="fs-14 fw-medium ms-2">/ month</span></h2>
											</div>
											<div class="d-block">
												<div>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark mb-2">
														<span class="bg-success d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-check"></i>
														</span>10 Contacts
													</p>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark mb-2">
														<span class="bg-success d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-check"></i>
														</span>10 Leads
													</p>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark mb-2">
														<span class="bg-success d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-check"></i>
														</span>20 Companies
													</p>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark mb-2">
														<span class="bg-success d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-check"></i>
														</span>50 Compaigns
													</p>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark mb-2">
														<span class="bg-success d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-check"></i>
														</span>100 Projects
													</p>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark mb-2">
														<span class="bg-danger d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-x"></i>
														</span>Deals
													</p>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark mb-2">
														<span class="bg-danger d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-x"></i>
														</span>Tasks
													</p>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark">
														<span class="bg-danger d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-x"></i>
														</span>Pipelines
													</p>
												</div>
												<div class="text-center mt-3">
													<a href="#" class="btn btn-primary">Choose</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="card border">
										<div class="card-body">
											<div class="text-center border-bottom pb-3 mb-3">
												<span>Business</span>
												<h2 class="d-flex align-items-end justify-content-center mt-1">$200
													<span class="fs-14 fw-medium ms-2">/ month</span>
												</h2>
											</div>
											<div class="d-block">
												<div>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark mb-2">
														<span class="bg-success d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-check"></i>
														</span>20 Contacts
													</p>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark mb-2">
														<span class="bg-success d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-check"></i>
														</span>20 Leads
													</p>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark mb-2">
														<span class="bg-success d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-check"></i>
														</span>50 Companies
													</p>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark mb-2">
														<span class="bg-success d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-check"></i>
														</span>Unlimited Compaigns
													</p>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark mb-2">
														<span class="bg-success d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-check"></i>
														</span>Unlimited Projects
													</p>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark mb-2">
														<span class="bg-danger d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-x"></i>
														</span>Deals
													</p>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark mb-2">
														<span class="bg-danger d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-x"></i>
														</span>Tasks
													</p>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark">
														<span class="bg-danger d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-x"></i>
														</span>Pipelines
													</p>
												</div>
												<div class="text-center mt-3">
													<a href="#" class="btn btn-primary">Choose</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="card border">
										<div class="card-body">
											<div class="text-center border-bottom pb-3 mb-3">
												<span>Enterprise</span>
												<h2 class="d-flex align-items-end justify-content-center mt-1">$400
													<span class="fs-14 fw-medium ms-2">/ month</span>
												</h2>
											</div>
											<div class="d-block">
												<div>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark mb-2">
														<span class="bg-success d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-check"></i>
														</span>Unlimited Contacts
													</p>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark mb-2">
														<span class="bg-success d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-check"></i>
														</span>Unlimited Leads
													</p>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark mb-2">
														<span class="bg-success d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-check"></i>
														</span>Unlimited Companies
													</p>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark mb-2">
														<span class="bg-success d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-check"></i>
														</span>Unlimited Compaigns
													</p>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark mb-2">
														<span class="bg-success d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-check"></i>
														</span>Unlimited Projects
													</p>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark mb-2">
														<span class="bg-success d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-check"></i>
														</span>Deals
													</p>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark mb-2">
														<span class="bg-success d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-check"></i>
														</span>Tasks
													</p>
													<p class="d-flex align-items-center fs-16 fw-medium text-dark">
														<span class="bg-success d-flex align-items-center justify-content-center fs-12 wh-14 me-1 rounded"><i class="ti ti-check"></i>
														</span>Pipelines
													</p>
												</div>
												<div class="text-center mt-3">
													<a href="#" class="btn btn-primary">Choose</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>					
					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add Plan -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
			<div class="offcanvas-header border-bottom">
				<h5 class="fw-semibold">Add New Plan</h5>
				<button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="<?php echo base_url();?>membership-plans">							
					<div>
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label"> Plan Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Plan Type <span class="text-danger">*</span></label>
									<select class="select">
										<option>Choose</option>
										<option>Basic</option>
										<option>Business</option>
										<option>Enterprise</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<div class="d-flex justify-content-between align-items-center">
										<label class="col-form-label">Plan Price <span class="text-danger">*</span></label>
										<span class="text-danger"><i class="ti ti-info-circle me-2"></i>Set 0 for free</span>
									</div>
									<select class="select">
										<option>Choose</option>
										<option>$50</option>
										<option>$200</option>
										<option>$400</option>
									</select>
								</div>
							</div>		
							<div class="col-md-12">
								<h5 class="mb-3">Plan Settings</h5>
							</div>								
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Contacts <span class="text-danger">*</span></label>
									<div class="d-flex align-items-center">
										<input type="text" class="form-control" value="0-100">
										<div class="status-toggle ms-3">
											<input id="mem-tog-1" class="check" type="checkbox">
											<label for="mem-tog-1" class="checktoggle">checkbox</label>
										</div>
									</div>
									<label class="checkboxs mt-2"><input type="checkbox"><span class="checkmarks mem-plane-check"></span>Unlimited</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Leads <span class="text-danger">*</span></label>
									<div class="d-flex align-items-center">
										<input type="text" class="form-control" value="0-100">
										<div class="status-toggle ms-3">
											<input id="mem-tog-2" class="check" type="checkbox">
											<label for="mem-tog-2" class="checktoggle">checkbox</label>
										</div>
									</div>
									<label class="checkboxs mt-2"><input type="checkbox"><span class="checkmarks mem-plane-check"></span>Unlimited</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Companies <span class="text-danger">*</span></label>
									<div class="d-flex align-items-center">
										<input type="text" class="form-control" value="0-100">
										<div class="status-toggle ms-3">
											<input id="mem-tog-3" class="check" type="checkbox">
											<label for="mem-tog-3" class="checktoggle">checkbox</label>
										</div>
									</div>
									<label class="checkboxs mt-2"><input type="checkbox"><span class="checkmarks mem-plane-check"></span>Unlimited</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Compaigns <span class="text-danger">*</span></label>
									<div class="d-flex align-items-center">
										<input type="text" class="form-control" value="0-100">
										<div class="status-toggle ms-3">
											<input id="mem-tog-4" class="check" type="checkbox">
											<label for="mem-tog-4" class="checktoggle">checkbox</label>
										</div>
									</div>
									<label class="checkboxs mt-2"><input type="checkbox"><span class="checkmarks mem-plane-check"></span>Unlimited</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Projects <span class="text-danger">*</span></label>
									<div class="d-flex align-items-center">
										<input type="text" class="form-control" value="0-100">
										<div class="status-toggle ms-3">
											<input id="mem-tog-5" class="check" type="checkbox">
											<label for="mem-tog-5" class="checktoggle">checkbox</label>
										</div>
									</div>
									<label class="checkboxs mt-2"><input type="checkbox"><span class="checkmarks mem-plane-check"></span>Unlimited</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Deals <span class="text-danger">*</span></label>
									<div class="d-flex align-items-center">
										<input type="text" class="form-control" value="0-100">
										<div class="status-toggle ms-3">
											<input id="mem-tog-6" class="check" type="checkbox">
											<label for="mem-tog-6" class="checktoggle">checkbox</label>
										</div>
									</div>
									<label class="checkboxs mt-2"><input type="checkbox"><span class="checkmarks mem-plane-check"></span>Unlimited</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Tasks <span class="text-danger">*</span></label>
									<div class="d-flex align-items-center">
										<input type="text" class="form-control" value="0-100">
										<div class="status-toggle ms-3">
											<input id="mem-tog-7" class="check" type="checkbox">
											<label for="mem-tog-7" class="checktoggle">checkbox</label>
										</div>
									</div>
									<label class="checkboxs mt-2"><input type="checkbox"><span class="checkmarks mem-plane-check"></span>Unlimited</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Pipelines <span class="text-danger">*</span></label>
									<div class="d-flex align-items-center">
										<input type="text" class="form-control" value="0-100">
										<div class="status-toggle ms-3">
											<input id="mem-tog-8" class="check" type="checkbox">
											<label for="mem-tog-8" class="checktoggle">checkbox</label>
										</div>
									</div>
									<label class="checkboxs mt-2"><input type="checkbox"><span class="checkmarks mem-plane-check"></span>Unlimited</label>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<a href="#" class="btn btn-light me-2">Cancel</a>
						<button type="submit" class="btn btn-primary">Create</button>
					</div>
				</form>
			</div>			
		</div>
		<!-- /Add Plan -->

	</div>
	<!-- /Main Wrapper -->

	<?= $this->include('partials/vendor-scripts') ?>

	<!-- Summernote JS -->
	<script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-lite.min.js"></script>
</body>
</html>
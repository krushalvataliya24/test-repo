<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Title -->
	<title>Project Details  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>	

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

					<?= $this->include('partials/page-title') ?>

					</div>
				</div>

				<div class="row">
					<div class="col-md-12">

						<!-- Project User -->
						<div class="contact-head">
							<div class="row align-items-center">
								<div class="col-sm-6">
									<ul class="contact-breadcrumb">
										<li><a href="<?php echo base_url();?>projects"><i class="ti ti-arrow-narrow-left"></i>Project</a></li>
										<li>Kofejob</li>
									</ul>
								</div>
								<div class="col-sm-6 text-sm-end">
									<div class="contact-pagination">
										<p>1 of 40</p>
										<ul>
											<li>
												<a href="<?php echo base_url();?>project-details"><i class="ti ti-chevron-left"></i></a>
											</li>
											<li>
												<a href="<?php echo base_url();?>project-details"><i class="ti ti-chevron-right"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-body pb-2">
								<div class="d-flex align-items-center justify-content-between flex-wrap">
									<div class="d-flex align-items-center mb-2">
										<div class="avatar avatar-xxl me-3 flex-shrink-0 border p-2">								
											<img src="<?php echo base_url();?>assets/img/priority/project-03.svg" alt="Image">
										</div>
										<div>
											<h5 class="mb-1">Kofejob</h5>
											<p class="mb-2">Project Id :154454887</p>
											<span class="priority badge badge-tag badge-danger-light"><i class="ti ti-square-rounded-filled"></i>High</span>
											<span class="badge badge-pill badge-status bg-success">Active</span>
										</div>
									</div>
									<div class="contacts-action">
										<span class="badge badge-light"><i class="ti ti-lock"></i>Private</span>
										<div class="dropdown action-drops">
											<a href="#" class="bg-success py-1 px-2" data-bs-toggle="dropdown" aria-expanded="false">
												<i class="ti ti-thumb-up me-2"></i>Completed<i class="ti ti-chevron-down ms-2"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="javascript:void(0);"><span>Completed</span></a>
												<a class="dropdown-item" href="javascript:void(0);"><span>Develop</span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Project User -->

					</div>

					<!-- Project Sidebar -->
					<div class="col-xl-3 theiaStickySidebar">
						<div class="card">
							<div class="card-body p-3">
								<h6 class="mb-3 fw-semibold">Project Information</h6>
								<ul>
									<li class="row mb-3"><span class="col-6">Start Date</span><span class="col-6">27 Sep 2023, 11:45 pm</span></li>
									<li class="row mb-3"><span class="col-6">Due Date</span><span class="col-6">27 Sep 2024,  11:45 pm</span></li>
									<li class="row mb-3"><span class="col-6">Value</span><span class="col-6">$25,11,145</span></li>
									<li class="row mb-3"><span class="col-6">Project Type</span><span class="col-6">Mobile Application</span></li>
									<li class="row mb-3"><span class="col-6">Project Timing</span><span class="col-6">Hourly</span></li>
								</ul>	
								<hr>	
								<div class="d-flex align-items-center justify-content-between flex-wrap">
									<h6 class="mb-3 fw-semibold">Client</h6>
									<a href="javascript:void(0);" class="link-purple mb-3"><i class="ti ti-circle-plus me-1"></i>Add New</a>
								</div>
								<ul class="company-info com-info">
									<li>
										<span>
											<img src="<?php echo base_url();?>assets/img/icons/company-icon-08.svg" alt="Image">
										</span>
										<div>
											<p>Harbor View</p>
										</div>
									</li>
								</ul>	
								<hr>	
								<div class="d-flex align-items-center justify-content-between flex-wrap">
									<h6 class="mb-3 fw-semibold">Responsible Persons</h6>
									<a href="javascript:void(0);" class="link-purple mb-3" data-bs-toggle="modal" data-bs-target="#access_view"><i class="ti ti-circle-plus me-1"></i>Add New</a>
								</div>
								<ul class="project-mem">
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/profiles/avatar-03.jpg" alt="img">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/profiles/avatar-05.jpg" alt="img">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>assets/img/profiles/avatar-06.jpg" alt="img">
										</a>
									</li>
									<li class="more-set">
										<a href="#">+05</a>
									</li>
								</ul>
								<hr>	
								<div class="d-flex align-items-center justify-content-between flex-wrap">
									<h6 class="mb-3 fw-semibold">Team Leader</h6>
									<a href="javascript:void(0);" class="link-purple mb-3" data-bs-toggle="modal" data-bs-target="#owner">Change</a>
								</div>
								<div class="d-flex align-items-center mb-3">
									<div class="avatar avatar-md me-2">
										<img src="<?php echo base_url();?>assets/img/profiles/avatar-21.jpg" alt="Image">
									</div>
									<p>Vaughan</p>
								</div>	
								<hr>	
								<div class="d-flex align-items-center justify-content-between flex-wrap">
									<h6 class="mb-3 fw-semibold">Priority</h6>
									<span class="priority badge badge-tag badge-danger-light mb-3"><i class="ti ti-square-rounded-filled"></i>High</span>
								</div>
								<hr class="mt-0">
								<div class="d-flex align-items-center justify-content-between flex-wrap">
									<h6 class="mb-3 fw-semibold">Pipeline</h6>
									<h6 class="mb-3"><i class="ti ti-timeline-event-text me-1"></i>Marketing Pipeline</h6>
								</div>
								<hr class="mt-0">						
								<ul>
									<li class="row mb-3"><span class="col-6">Last Modified</span><span class="col-6">10 Jan 2024, 10:00 am</span></li>
									<li class="row mb-0"><span class="col-6">Modified By</span>
										<span class="col-6">
											<span class="avatar avatar-xs me-1"><img src="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg" class="avatar-xs" alt="img"></span>Darlee Robertson
										</span>
									</li>
								</ul>	
							</div>
						</div>
					</div>
					<!-- /Project Sidebar -->

					<!-- Project Details -->
					<div class="col-xl-9">

						<div class="card mb-3">
							<div class="card-body pb-0">
								<div class="pipeline-list">
									<ul>
										<li><a href="javascript:void(0);" class="bg-pending">Plan</a></li>
										<li><a href="javascript:void(0);" class="bg-warning">Design</a></li>
										<li><a href="javascript:void(0);" class="bg-gray">Development</a></li>
										<li><a href="javascript:void(0);" class="bg-gray">Completed</a></li>
									</ul>
								</div>
								<ul class="nav nav-tabs nav-tabs-bottom" role="tablist">
									<li class="nav-item" role="presentation">
										<a href="#" data-bs-toggle="tab" data-bs-target="#tasks" class="nav-link active"><i class="ti ti-subtask me-1"></i>Tasks</a>
									</li>
									<li class="nav-item" role="presentation">
										<a href="#" data-bs-toggle="tab" data-bs-target="#activities" class="nav-link"><i class="ti ti-alarm-minus me-1"></i>Activities</a>
									</li>
									<li class="nav-item" role="presentation">
										<a href="#" data-bs-toggle="tab" data-bs-target="#notes" class="nav-link"><i class="ti ti-notes me-1"></i>Notes</a>
									</li>
									<li class="nav-item" role="presentation">
										<a href="#" data-bs-toggle="tab" data-bs-target="#calls" class="nav-link"><i class="ti ti-phone me-1"></i>Calls</a>
									</li>
									<li class="nav-item" role="presentation">
										<a href="#" data-bs-toggle="tab" data-bs-target="#files" class="nav-link"><i class="ti ti-file me-1"></i>Files</a>
									</li>
									<li class="nav-item" role="presentation">
										<a href="#" data-bs-toggle="tab" data-bs-target="#email" class="nav-link"><i class="ti ti-mail-check me-1"></i>Email</a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Tab Content -->
						<div class="tab-content pt-0">

							<!-- Tasks -->
							<div  class="tab-pane active show" id="tasks">
								<div class="card">
									<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
										<h4 class="fw-semibold">All Tasks</h4>
										<div class="d-inline-flex align-items-center text-end">
											<div class="form-sort mt-0 me-2">
												<i class="ti ti-sort-ascending-2"></i>
												<select class="select">
													<option>Sort By Date</option>
													<option>Ascending</option>
													<option>Descending</option>
												</select>
											</div>
											<a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add"><i class="ti ti-circle-plus me-1"></i>Add New Task</a>
										</div>
									</div>
									<div class="card-body">
										<div class="tasks-activity">
											<div class="card border border-end-0 border-top-0 border-bottom-0 border-start border-3 border-danger mb-3">
												<div class="card-body pb-2">
													<div class="row align-items-center">
														<div class="col-md-6">
															<div class="d-flex align-items-center flex-wrap">
																<p class="mb-2 me-3 text-gray-9"><i class="ti ti-grip-vertical me-2"></i>Add a form to Update Task</p>
																<span class="badge badge-pill badge-status bg-green mb-2 me-2"><i class="ti ti-phone me-1"></i>Calls</span>
																<span class="priority badge badge-tag badge-danger-light mb-2"><i class="ti ti-square-rounded-filled me-1"></i>High</span>
															</div>
														</div>
														<div class="col-md-6">
															<div class="d-flex align-items-center flex-wrap float-md-end">
																<div class="d-flex align-items-center text-gray-9 mb-2 me-3">
																	<i class="ti ti-clock-record me-1"></i>25 Hrs
																</div>
																<div class="d-flex align-items-center text-gray-9 mb-2 me-3">
																	<i class="ti ti-calendar-exclamation me-1"></i>25 Oct 2023 
																</div>
																<div class="d-flex align-items-center mb-2">
																	<div class="avatar avatar-sm me-2">
																		<img src="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" class="rounded-circle" alt="img">
																	</div>
																	<div class="dropdown table-action">
																		<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
																			<i class="fa fa-ellipsis-v"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
																			<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_task"><i class="ti ti-trash text-danger"></i> Delete</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card border border-end-0 border-top-0 border-bottom-0 border-start border-3 border-danger mb-3">
												<div class="card-body pb-2">
													<div class="row align-items-center">
														<div class="col-md-6">
															<div class="d-flex align-items-center flex-wrap">
																<p class="mb-2 me-3 text-gray-9"><i class="ti ti-grip-vertical me-2"></i>Make all strokes thinner</p>
																<span class="badge badge-pill badge-status bg-green mb-2 me-2"><i class="ti ti-phone me-1"></i>Calls</span>
																<span class="priority badge badge-tag badge-danger-light mb-2"><i class="ti ti-square-rounded-filled me-1"></i>High</span>
															</div>
														</div>
														<div class="col-md-6">
															<div class="d-flex align-items-center flex-wrap float-md-end">
																<div class="d-flex align-items-center text-gray-9 mb-2 me-3">
																	<i class="ti ti-clock-record me-1"></i>25 Hrs
																</div>
																<div class="d-flex align-items-center text-gray-9 mb-2 me-3">
																	<i class="ti ti-calendar-exclamation me-1"></i>25 Oct 2023 
																</div>
																<div class="d-flex align-items-center mb-2">
																	<div class="avatar avatar-sm me-2">
																		<img src="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" class="rounded-circle" alt="img">
																	</div>
																	<div class="dropdown table-action">
																		<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
																			<i class="fa fa-ellipsis-v"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
																			<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_task"><i class="ti ti-trash text-danger"></i> Delete</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card border border-end-0 border-top-0 border-bottom-0 border-start border-3 border-danger mb-3">
												<div class="card-body pb-2">
													<div class="row align-items-center">
														<div class="col-md-6">
															<div class="d-flex align-items-center flex-wrap">
																<p class="mb-2 me-3 text-gray-9"><i class="ti ti-grip-vertical me-2"></i>Update orginal content</p>
																<span class="badge badge-pill badge-status bg-green mb-2 me-2"><i class="ti ti-phone me-1"></i>Calls</span>
																<span class="priority badge badge-tag badge-danger-light mb-2"><i class="ti ti-square-rounded-filled me-1"></i>High</span>
															</div>
														</div>
														<div class="col-md-6">
															<div class="d-flex align-items-center flex-wrap float-md-end">
																<div class="d-flex align-items-center text-gray-9 mb-2 me-3">
																	<i class="ti ti-clock-record me-1"></i>25 Hrs
																</div>
																<div class="d-flex align-items-center text-gray-9 mb-2 me-3">
																	<i class="ti ti-calendar-exclamation me-1"></i>25 Oct 2023 
																</div>
																<div class="d-flex align-items-center mb-2">
																	<div class="avatar avatar-sm me-2">
																		<img src="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" class="rounded-circle" alt="img">
																	</div>
																	<div class="dropdown table-action">
																		<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
																			<i class="fa fa-ellipsis-v"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
																			<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_task"><i class="ti ti-trash text-danger"></i> Delete</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card border border-end-0 border-top-0 border-bottom-0 border-start border-3 border-danger mb-3">
												<div class="card-body pb-2">
													<div class="row align-items-center">
														<div class="col-md-6">
															<div class="d-flex align-items-center flex-wrap">
																<p class="mb-2 me-3 text-gray-9"><i class="ti ti-grip-vertical me-2"></i>Use only component colours</p>
																<span class="badge badge-pill badge-status bg-green mb-2 me-2"><i class="ti ti-phone me-1"></i>Calls</span>
																<span class="priority badge badge-tag badge-danger-light mb-2"><i class="ti ti-square-rounded-filled me-1"></i>High</span>
															</div>
														</div>
														<div class="col-md-6">
															<div class="d-flex align-items-center flex-wrap float-md-end">
																<div class="d-flex align-items-center text-gray-9 mb-2 me-3">
																	<i class="ti ti-clock-record me-1"></i>25 Hrs
																</div>
																<div class="d-flex align-items-center text-gray-9 mb-2 me-3">
																	<i class="ti ti-calendar-exclamation me-1"></i>25 Oct 2023 
																</div>
																<div class="d-flex align-items-center mb-2">
																	<div class="avatar avatar-sm me-2">
																		<img src="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" class="rounded-circle" alt="img">
																	</div>
																	<div class="dropdown table-action">
																		<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
																			<i class="fa fa-ellipsis-v"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
																			<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_task"><i class="ti ti-trash text-danger"></i> Delete</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card border border-end-0 border-top-0 border-bottom-0 border-start border-3 border-danger mb-3">
												<div class="card-body pb-2">
													<div class="row align-items-center">
														<div class="col-md-6">
															<div class="d-flex align-items-center flex-wrap">
																<p class="mb-2 me-3 text-gray-9"><i class="ti ti-grip-vertical me-2"></i>Add images to the cards section</p>
																<span class="badge badge-pill badge-status bg-green mb-2 me-2"><i class="ti ti-phone me-1"></i>Calls</span>
																<span class="priority badge badge-tag badge-danger-light mb-2"><i class="ti ti-square-rounded-filled me-1"></i>High</span>
															</div>
														</div>
														<div class="col-md-6">
															<div class="d-flex align-items-center flex-wrap float-md-end">
																<div class="d-flex align-items-center text-gray-9 mb-2 me-3">
																	<i class="ti ti-clock-record me-1"></i>25 Hrs
																</div>
																<div class="d-flex align-items-center text-gray-9 mb-2 me-3">
																	<i class="ti ti-calendar-exclamation me-1"></i>25 Oct 2023 
																</div>
																<div class="d-flex align-items-center mb-2">
																	<div class="avatar avatar-sm me-2">
																		<img src="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" class="rounded-circle" alt="img">
																	</div>
																	<div class="dropdown table-action">
																		<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
																			<i class="fa fa-ellipsis-v"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
																			<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_task"><i class="ti ti-trash text-danger"></i> Delete</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>	
											<div class="card border border-end-0 border-top-0 border-bottom-0 border-start border-3 border-danger mb-3">
												<div class="card-body pb-2">
													<div class="row align-items-center">
														<div class="col-md-6">
															<div class="d-flex align-items-center flex-wrap">
																<p class="mb-2 me-3 text-gray-9"><i class="ti ti-grip-vertical me-2"></i>Design description banner & landing page</p>
																<span class="badge badge-pill badge-status bg-green mb-2 me-2"><i class="ti ti-phone me-1"></i>Calls</span>
																<span class="priority badge badge-tag badge-danger-light mb-2"><i class="ti ti-square-rounded-filled me-1"></i>High</span>
															</div>
														</div>
														<div class="col-md-6">
															<div class="d-flex align-items-center flex-wrap float-md-end">
																<div class="d-flex align-items-center text-gray-9 mb-2 me-3">
																	<i class="ti ti-clock-record me-1"></i>25 Hrs
																</div>
																<div class="d-flex align-items-center text-gray-9 mb-2 me-3">
																	<i class="ti ti-calendar-exclamation me-1"></i>25 Oct 2023 
																</div>
																<div class="d-flex align-items-center mb-2">
																	<div class="avatar avatar-sm me-2">
																		<img src="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" class="rounded-circle" alt="img">
																	</div>
																	<div class="dropdown table-action">
																		<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
																			<i class="fa fa-ellipsis-v"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
																			<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_task"><i class="ti ti-trash text-danger"></i> Delete</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card border border-end-0 border-top-0 border-bottom-0 border-start border-3 border-danger mb-0">
												<div class="card-body pb-2">
													<div class="row align-items-center">
														<div class="col-md-6">
															<div class="d-flex align-items-center flex-wrap">
																<p class="mb-2 me-3 text-gray-9"><i class="ti ti-grip-vertical me-2"></i>Make sure all the padding should be 24px</p>
																<span class="badge badge-pill badge-status bg-green mb-2 me-2"><i class="ti ti-phone me-1"></i>Calls</span>
																<span class="priority badge badge-tag badge-danger-light mb-2"><i class="ti ti-square-rounded-filled me-1"></i>High</span>
															</div>
														</div>
														<div class="col-md-6">
															<div class="d-flex align-items-center flex-wrap float-md-end">
																<div class="d-flex align-items-center text-gray-9 mb-2 me-3">
																	<i class="ti ti-clock-record me-1"></i>25 Hrs
																</div>
																<div class="d-flex align-items-center text-gray-9 mb-2 me-3">
																	<i class="ti ti-calendar-exclamation me-1"></i>25 Oct 2023 
																</div>
																<div class="d-flex align-items-center mb-2">
																	<div class="avatar avatar-sm me-2">
																		<img src="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" class="rounded-circle" alt="img">
																	</div>
																	<div class="dropdown table-action">
																		<a href="#" class="action-icon " data-bs-toggle="dropdown" aria-expanded="false">
																			<i class="fa fa-ellipsis-v"></i>
																		</a>
																		<div class="dropdown-menu dropdown-menu-right">
																			<a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_edit" href="#"><i class="ti ti-edit text-blue"></i> Edit</a>
																			<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_task"><i class="ti ti-trash text-danger"></i> Delete</a>
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
							</div>
							<!-- /Tasks -->

							<!-- Activities -->
							<div  class="tab-pane fade" id="activities">
								<div class="card">
									<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
										<h4 class="fw-semibold">Activities</h4>
										<div>
											<div class="form-sort mt-0">
												<i class="ti ti-sort-ascending-2"></i>
												<select class="select">
													<option>Sort By Date</option>
													<option>Ascending</option>
													<option>Descending</option>
												</select>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="contact-activity">
											<div class="badge badge-soft-purple fs-14 fw-normal shadow-none mb-3"><i class="ti ti-calendar-check me-1"></i>29 Aug 2023</div>
											<div class="card border shadow-none mb-3">
												<div class="card-body p-3">
													<div class="d-flex">
														<span class="avatar avatar-md flex-shrink-0 rounded me-2 bg-pending">
															<i class="ti ti-mail-code"></i>
														</span>
														<div>
															<h6 class="fw-medium mb-1">You sent 1 Message to the contact.</h6>
															<p>10:25 pm</p>
														</div>
													</div>
												</div>
											</div>
											<div class="card border shadow-none mb-3">
												<div class="card-body p-3">
													<div class="d-flex">
														<span class="avatar avatar-md flex-shrink-0 rounded me-2 bg-secondary-success">
															<i class="ti ti-phone"></i>
														</span>
														<div>
															<h6 class="fw-medium mb-1">Denwar responded to your appointment schedule question by call at 09:30pm.</h6>
															<p>09:25 pm</p>
														</div>
													</div>
												</div>
											</div>
											<div class="card border shadow-none mb-3">
												<div class="card-body p-3">
													<div class="d-flex">
														<span class="avatar avatar-md flex-shrink-0 rounded me-2 bg-orange">
															<i class="ti ti-notes"></i>
														</span>
														<div>
															<h6 class="fw-medium mb-1">Notes added by Antony</h6>
															<p class="mb-1">Please accept my apologies for the inconvenience caused. It would be much appreciated if it's possible to reschedule to 6:00 PM, or any other day that week.</p>
															<p>10.00 pm</p>
														</div>
													</div>
												</div>
											</div>
											<div class="badge badge-soft-purple fs-14 fw-normal shadow-none mb-3"><i class="ti ti-calendar-check me-1"></i>28 Feb 2024</div>
											<div class="card border shadow-none mb-3">
												<div class="card-body p-3">
													<div class="d-flex">
														<span class="avatar avatar-md flex-shrink-0 rounded me-2 bg-info">
															<i class="ti ti-user-pin"></i>
														</span>
														<div>
															<h6 class="fw-medium mb-1 d-inline-flex align-items-center flex-wrap">Meeting With <span class="avatar avatar-xs mx-2"><img src="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg" alt="img"></span> Abraham</h6>
															<p>Schedueled  on 05:00 pm</p>
														</div>
													</div>
												</div>
											</div>
											<div class="card border shadow-none mb-3">
												<div class="card-body p-3">
													<div class="d-flex">
														<span class="avatar avatar-md flex-shrink-0 rounded me-2 bg-secondary-success">
															<i class="ti ti-notes"></i>
														</span>
														<div>
															<h6 class="fw-medium mb-1">Drain responded to your appointment schedule question.</h6>
															<p>09:25 pm</p>
														</div>
													</div>
												</div>
											</div>	
											<div class="badge badge-soft-purple fs-14 fw-normal shadow-none mb-3"><i class="ti ti-calendar-check me-1"></i>Upcoming Activity</div>
											<div class="card border shadow-none mb-0">
												<div class="card-body p-3">
													<div class="d-flex">
														<span class="avatar avatar-md flex-shrink-0 rounded me-2 bg-info">
															<i class="ti ti-user-pin"></i>
														</span>
														<div>
															<h6 class="fw-medium mb-1">Product Meeting</h6>
															<p class="mb-1">A product team meeting is a gathering of the cross-functional product team — ideally including team members from product, engineering, marketing, and customer support.</p>
															<p>25 Jul 2023, 05:00 pm</p>
															<div class="upcoming-info">
																<div class="row">
																	<div class="col-sm-4">
																		<p>Reminder</p>
																		<div class="dropdown">
																			<a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-clock-edit me-1"></i>Reminder<i class="ti ti-chevron-down ms-1"></i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="javascript:void(0);">Remainder</a>
																				<a class="dropdown-item" href="javascript:void(0);">1 hr</a>
																				<a class="dropdown-item" href="javascript:void(0);">10 hr</a>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-4">
																		<p>Task Priority</p>
																		<div class="dropdown">
																			<a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-square-rounded-filled me-1 text-danger circle"></i>High<i class="ti ti-chevron-down ms-1"></i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="javascript:void(0);">
																					<i class="ti ti-square-rounded-filled me-1 text-danger circle"></i>High
																				</a>
																				<a class="dropdown-item" href="javascript:void(0);">
																					<i class="ti ti-square-rounded-filled me-1 text-success circle"></i>Low
																				</a>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-4">
																		<p>Assigned to</p>
																		<div class="dropdown">
																			<a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><img src="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg" alt="img" class="avatar-xs">John<i class="ti ti-chevron-down ms-1"></i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="javascript:void(0);">
																					<img src="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg" alt="img" class="avatar-xs">John
																				</a>
																				<a class="dropdown-item" href="javascript:void(0);">
																					<img src="<?php echo base_url();?>assets/img/profiles/avatar-15.jpg" alt="img" class="avatar-xs">Peter
																				</a>
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
								</div>
							</div>
							<!-- /Activities -->

							<!-- Notes -->
							<div  class="tab-pane fade" id="notes">
								<div class="card">
									<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
										<h4 class="fw-semibold">Notes</h4>
										<div class="d-inline-flex align-items-center">
											<div class="form-sort me-3 mt-0">
												<i class="ti ti-sort-ascending-2"></i>
												<select class="select">
													<option>Sort By Date</option>
													<option>Ascending</option>
													<option>Descending</option>
												</select>
											</div>
											<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_notes" class="link-purple fw-medium"><i class="ti ti-circle-plus me-1"></i>Add New</a>
										</div>
									</div>
									<div class="card-body">
										<div class="notes-activity">
											<div class="card mb-3">
												<div class="card-body">
													<div class="d-flex align-items-center justify-content-between pb-2">
														<div class="d-inline-flex align-items-center mb-2">
															<span class="avatar avatar-md me-2 flex-shrink-0">
																<img src="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg" alt="img">
															</span>
															<div>
																<h6 class="fw-medium mb-1">Darlee Robertson</h6>
																<p class="mb-0">15 Sep 2023, 12:10 pm</p>
															</div>
														</div>
														<div class="mb-2">
															<div class="dropdown">
																<a href="#" class="p-0 btn btn-icon btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-edit text-blue me-1"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash text-danger me-1"></i>Delete</a>
																</div>
															</div>
														</div>
													</div>		
													<h5 class="fw-medium mb-1">Notes added by Antony</h5>							
													<p>A project review evaluates the success of an initiative and identifies areas for improvement. It can also evaluate a current project to determine whether it's on the right track. Or, it can determine the success of a completed project. </p>
													<div class="d-inline-flex align-items-center flex-wrap">
														<div class="note-download me-3">
															<div class="note-info">
																<span class="note-icon bg-secondary-success">
																	<i class="ti ti-file-spreadsheet"></i>
																</span>
																<div>
																	<h6 class="fw-medium mb-1">Project Specs.xls</h6>
																	<p>365 KB</p>
																</div>
															</div>
															<a href="javascript:void(0);"><i class="ti ti-arrow-down"></i></a>
														</div>
														<div class="note-download">
															<div class="note-info">
																<span class="note-icon">
																	<img src="<?php echo base_url();?>assets/img/media/media-35.jpg" alt="img">
																</span>
																<div>
																	<h6 class="fw-medium mb-1">090224.jpg</h6>
																	<p>365 KB</p>
																</div>
															</div>
															<a href="javascript:void(0);"><i class="ti ti-arrow-down"></i></a>
														</div>	
													</div>
													<div class="notes-editor">
														<div class="note-edit-wrap">
															<div class="summernote">Write a new comment, send your team notification by typing @ followed by their name</div>
															<div class="text-end note-btns">
																<a href="javascript:void(0);" class="btn btn-light add-cancel">Cancel</a>
																<a href="javascript:void(0);" class="btn btn-primary">Save</a>
															</div>
														</div>
														<div class="text-end">
															<a href="javascript:void(0);" class="add-comment link-purple fw-medium"><i class="ti ti-square-plus me-1"></i>Add Comment</a>
														</div>
													</div>
												</div>
											</div>	
											<div class="card mb-3">
												<div class="card-body">
													<div class="d-flex align-items-center justify-content-between pb-2">
														<div class="d-inline-flex align-items-center mb-2">
															<span class="avatar avatar-md me-2 flex-shrink-0">
																<img src="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" alt="img">
															</span>
															<div>
																<h6 class="fw-medium mb-1">Sharon Roy</h6>
																<p class="mb-0">18 Sep 2023, 09:52 am</p>
															</div>
														</div>
														<div class="mb-2">
															<div class="dropdown">
																<a href="#" class="p-0 btn btn-icon btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-edit text-blue me-1"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash text-danger me-1"></i>Delete</a>
																</div>
															</div>
														</div>
													</div>	
													<h5 class="fw-medium mb-1">Notes added by Antony</h5>								
													<p>A project plan typically contains a list of the essential elements of a project, such as stakeholders, scope, timelines, estimated cost and communication methods. The project manager typically lists the information based on the assignment.</p>
													<div class="d-inline-flex align-items-center flex-wrap">
														<div class="note-download me-3">
															<div class="note-info">
																<span class="note-icon bg-secondary-success">
																	<i class="ti ti-file-text"></i>
																</span>
																<div>
																	<h6 class="fw-medium mb-1">Andrewpass.txt</h6>
																	<p>365 KB</p>
																</div>
															</div>
															<a href="javascript:void(0);"><i class="ti ti-arrow-down"></i></a>
														</div>
													</div>
													<div class="reply-box">
														<p>The best way to get a project done faster is to start sooner. A goal without a timeline is just a dream.The goal you set must be challenging. At the same time, it should be realistic and attainable, not impossible to reach.</p>
														<p>Commented by <span class="text-purple">Aeron</span> on 15 Sep 2023, 11:15 pm</p>
														<a href="#" class="btn"><i class="ti ti-arrow-back-up-double"></i>Reply</a>
													</div>
													<div class="notes-editor">
														<div class="note-edit-wrap">
															<div class="summernote">Write a new comment, send your team notification by typing @ followed by their name</div>
															<div class="text-end note-btns">
																<a href="javascript:void(0);" class="btn btn-light add-cancel">Cancel</a>
																<a href="javascript:void(0);" class="btn btn-primary">Save</a>
															</div>
														</div>
														<div class="text-end">
															<a href="javascript:void(0);" class="add-comment link-purple fw-medium"><i class="ti ti-square-plus me-1"></i>Add Comment</a>
														</div>
													</div>
												</div>
											</div>	
											<div class="card mb-0">
												<div class="card-body">
													<div class="d-flex align-items-center justify-content-between pb-2">
														<div class="d-inline-flex align-items-center mb-2">
															<span class="avatar avatar-md me-2 flex-shrink-0">
																<img src="<?php echo base_url();?>assets/img/profiles/avatar-21.jpg" alt="img">
															</span>
															<div>
																<h6 class="fw-medium mb-1">Vaughan</h6>
																<p class="mb-0">20 Sep 2023, 10:26 pm</p>
															</div>
														</div>
														<div class="mb-2">
															<div class="dropdown">
																<a href="#" class="p-0 btn btn-icon btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-edit text-blue me-1"></i>Edit</a>
																	<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash text-danger me-1"></i>Delete</a>
																</div>
															</div>
														</div>
													</div>									
													<p>Projects play a crucial role in the success of organizations, and their importance cannot be overstated. Whether it's launching a new product, improving an existing</p>
													<div class="notes-editor">
														<div class="note-edit-wrap">
															<div class="summernote">Write a new comment, send your team notification by typing @ followed by their name</div>
															<div class="text-end note-btns">
																<a href="javascript:void(0);" class="btn btn-light add-cancel">Cancel</a>
																<a href="javascript:void(0);" class="btn btn-primary">Save</a>
															</div>
														</div>
														<div class="text-end">
															<a href="javascript:void(0);" class="add-comment link-purple fw-medium"><i class="ti ti-square-plus me-1"></i>Add Comment</a>
														</div>
													</div>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
							<!-- /Notes -->

							<!-- Calls -->
							<div  class="tab-pane fade" id="calls">
								<div class="card">
									<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
										<h4 class="fw-semibold">Calls</h4>
										<div class="d-inline-flex align-items-center">
											<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#create_call" class="link-purple fw-medium"><i class="ti ti-circle-plus me-1"></i>Add New</a>
										</div>
									</div>
									<div class="card-body">
										<div class="card mb-3">
											<div class="card-body">
												<div class="d-sm-flex align-items-center justify-content-between pb-2">
													<div class="d-flex align-items-center mb-2">
														<span class="avatar avatar-md me-2 flex-shrink-0">
															<img src="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg" alt="img">
														</span>
														<p><span class="text-dark fw-medium">Darlee Robertson</span> logged a call on 23 Jul 2023, 10:00 pm</p>
													</div>
													<div class="d-inline-flex align-items-center mb-2">
														<div class="dropdown me-2">
															<a href="#" class="bg-danger py-1" data-bs-toggle="dropdown" aria-expanded="false">Busy<i class="ti ti-chevron-down ms-2"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0);">Busy</a>
																<a class="dropdown-item" href="javascript:void(0);">No Answer</a>
																<a class="dropdown-item" href="javascript:void(0);">Unavailable</a>
																<a class="dropdown-item" href="javascript:void(0);">Wrong Number</a>
																<a class="dropdown-item" href="javascript:void(0);">Left Voice Message</a>
																<a class="dropdown-item" href="javascript:void(0);">Moving Forward</a>
															</div>
														</div>
														<div class="dropdown">
															<a href="#" class="p-0 btn btn-icon btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-edit text-blue me-1"></i>Edit</a>
																<a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash text-danger me-1"></i>Delete</a>
															</div>
														</div>
													</div>
												</div>										
												<p>A project review evaluates the success of an initiative and identifies areas for improvement. It can also evaluate a current project to determine whether it's on the right track. Or, it can determine the success of a completed project. </p>
											</div>
										</div>	
										<div class="card mb-3">
											<div class="card-body">
												<div class="d-sm-flex align-items-center justify-content-between pb-2">
													<div class="d-flex align-items-center mb-2">
														<span class="avatar avatar-md me-2 flex-shrink-0">
															<img src="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" alt="img">
														</span>
														<p><span class="text-dark fw-medium">Sharon Roy</span> logged a call on 28 Jul 2023, 09:00 pm</p>
													</div>
													<div class="d-inline-flex align-items-center mb-2">
														<div class="dropdown me-2">
															<a href="#" class="bg-pending py-1" data-bs-toggle="dropdown" aria-expanded="false">No Answer<i class="ti ti-chevron-down ms-2"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0);">Busy</a>
																<a class="dropdown-item" href="javascript:void(0);">No Answer</a>
																<a class="dropdown-item" href="javascript:void(0);">Unavailable</a>
																<a class="dropdown-item" href="javascript:void(0);">Wrong Number</a>
																<a class="dropdown-item" href="javascript:void(0);">Left Voice Message</a>
																<a class="dropdown-item" href="javascript:void(0);">Moving Forward</a>
															</div>
														</div>
														<div class="dropdown">
															<a href="#" class="p-0 btn btn-icon btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0);">
																	<i class="ti ti-edit text-blue me-1"></i>Edit
																</a>
																<a class="dropdown-item" href="javascript:void(0);">
																	<i class="ti ti-trash text-danger me-1"></i>Delete
																</a>
															</div>
														</div>
													</div>
												</div>										
												<p>A project plan typically contains a list of the essential elements of a project, such as stakeholders, scope, timelines, estimated cost and communication methods. The project manager typically lists the information based on the assignment.</p>
											</div>	
										</div>
										<div class="card mb-0">
											<div class="card-body">
												<div class="d-sm-flex align-items-center justify-content-between pb-2">
													<div class="d-flex align-items-center mb-2">
														<span class="avatar avatar-md me-2 flex-shrink-0">
															<img src="<?php echo base_url();?>assets/img/profiles/avatar-21.jpg" alt="img">
														</span>
														<p><span class="text-dark fw-medium">Vaughan</span> logged a call on 30 Jul 2023, 08:00 pm</p>
													</div>
													<div class="d-inline-flex align-items-center mb-2">
														<div class="dropdown me-2">
															<a href="#" class="bg-pending py-1" data-bs-toggle="dropdown" aria-expanded="false">No Answer<i class="ti ti-chevron-down ms-2"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0);">Busy</a>
																<a class="dropdown-item" href="javascript:void(0);">No Answer</a>
																<a class="dropdown-item" href="javascript:void(0);">Unavailable</a>
																<a class="dropdown-item" href="javascript:void(0);">Wrong Number</a>
																<a class="dropdown-item" href="javascript:void(0);">Left Voice Message</a>
																<a class="dropdown-item" href="javascript:void(0);">Moving Forward</a>
															</div>
														</div>
														<div class="dropdown">
															<a href="#" class="p-0 btn btn-icon btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a class="dropdown-item" href="javascript:void(0);">
																	<i class="ti ti-edit text-blue me-1"></i>Edit
																</a>
																<a class="dropdown-item" href="javascript:void(0);">
																	<i class="ti ti-trash text-danger me-1"></i>Delete
																</a>
															</div>
														</div>
													</div>
												</div>										
												<p>Projects play a crucial role in the success of organizations, and their importance cannot be overstated. Whether it's launching a new product, improving an existing</p>
											</div>	
										</div>
									</div>
								</div>
							</div>
							<!-- /Calls -->

							<!-- Files -->
							<div  class="tab-pane fade" id="files">
								<div class="card">
									<div class="card-header">
										<h4 class="fw-semibold">Files</h4>
									</div>
									<div class="card-body">
										<div class="card border mb-3">
											<div class="card-body pb-0">	
												<div class="row align-items-center">										
													<div class="col-md-8">											
														<div class="mb-3">												
															<h4 class="fw-medium mb-1">Manage Documents</h4>
															<p>Send customizable quotes, proposals and contracts to close deals faster.</p>
														</div>
													</div>										
													<div class="col-md-4 text-md-end">	
														<div class="mb-3">		
															<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#new_file">Create Document</a>
														</div>
													</div>		
												</div>
											</div>
										</div>
										<div class="card border shadow-none mb-3">
											<div class="card-body pb-0">	
												<div class="row align-items-center">										
													<div class="col-md-8">											
														<div class="mb-3">												
															<h4 class="fw-medium mb-1">Collier-Turner Proposal</h4>
															<p>Send customizable quotes, proposals and contracts to close deals faster.</p>
															<div class="d-flex align-items-center">
																<span class="avatar avatar-md me-2 flex-shrink-0">
																	<img src="<?php echo base_url();?>assets/img/profiles/avatar-21.jpg" alt="img" class="rounded-circle">
																</span>
																<div>
																	<span class="fs-12">Owner</span>
																	<p>Vaughan</p>
																</div>
															</div>
														</div>
													</div>										
													<div class="col-md-4 text-md-end">	
														<div class="mb-3 d-inline-flex align-items-center">		
															<span class="badge badge-danger-light me-1">Proposal</span>
															<span class="badge bg-pending priority-badge me-1">Draft</span>
															<div class="dropdown">
																<a href="#" class="p-0 btn btn-icon btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="javascript:void(0);">
																		<i class="ti ti-edit text-blue me-1"></i>Edit
																	</a>
																	<a class="dropdown-item" href="javascript:void(0);">
																		<i class="ti ti-trash text-danger me-1"></i>Delete
																	</a>
																	<a class="dropdown-item" href="javascript:void(0);">
																		<i class="ti ti-download text-info me-1"></i>Download
																	</a>
																</div>
															</div>
														</div>
													</div>		
												</div>
											</div>
										</div>
										<div class="card border shadow-none mb-3">
											<div class="card-body pb-0">	
												<div class="row align-items-center">										
													<div class="col-md-8">											
														<div class="mb-3">												
															<h4 class="fw-medium mb-1">Collier-Turner Proposal</h4>
															<p>Send customizable quotes, proposals and contracts to close deals faster.</p>
															<div class="d-flex align-items-center">
																<span class="avatar avatar-md me-2 flex-shrink-0">
																	<img src="<?php echo base_url();?>assets/img/profiles/avatar-01.jpg" alt="img" class="rounded-circle">
																</span>
																<div>
																	<span class="fs-12">Owner</span>
																	<p>Jessica</p>
																</div>
															</div>
														</div>
													</div>										
													<div class="col-md-4 text-md-end">	
														<div class="mb-3 d-inline-flex align-items-center">		
															<span class="badge badge-purple-light me-1">Quote</span>
															<span class="badge bg-success me-1">Sent</span>
															<div class="dropdown">
																<a href="#" class="p-0 btn btn-icon btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="javascript:void(0);">
																		<i class="ti ti-edit text-blue me-1"></i>Edit
																	</a>
																	<a class="dropdown-item" href="javascript:void(0);">
																		<i class="ti ti-trash text-danger me-1"></i>Delete
																	</a>
																	<a class="dropdown-item" href="javascript:void(0);">
																		<i class="ti ti-download text-info me-1"></i>Download
																	</a>
																</div>
															</div>
														</div>
													</div>		
												</div>
											</div>
										</div>
										<div class="card border shadow-none mb-0">
											<div class="card-body pb-0">	
												<div class="row align-items-center">										
													<div class="col-md-8">											
														<div class="mb-3">												
															<h4 class="fw-medium mb-1">Collier-Turner Proposal</h4>
															<p>Send customizable quotes, proposals and contracts to close deals faster.</p>
															<div class="d-flex align-items-center">
																<span class="avatar avatar-md me-2 flex-shrink-0">
																	<img src="<?php echo base_url();?>assets/img/profiles/avatar-22.jpg" alt="img" class="rounded-circle">
																</span>
																<div>
																	<span class="fs-12">Owner</span>
																	<p>Dawn Merhca</p>
																</div>
															</div>
														</div>
													</div>										
													<div class="col-md-4 text-md-end">	
														<div class="mb-3 d-inline-flex align-items-center">		
															<span class="badge badge-danger-light me-1">Proposal</span>
															<span class="badge bg-pending priority-badge me-1">Draft</span>
															<div class="dropdown">
																<a href="#" class="p-0 btn btn-icon btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical"></i></a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="javascript:void(0);">
																		<i class="ti ti-edit text-blue me-1"></i>Edit
																	</a>
																	<a class="dropdown-item" href="javascript:void(0);">
																		<i class="ti ti-trash text-danger me-1"></i>Delete
																	</a>
																	<a class="dropdown-item" href="javascript:void(0);">
																		<i class="ti ti-download text-info me-1"></i>Download
																	</a>
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
							<!-- /Files -->

							<!-- Email -->
							<div  class="tab-pane fade" id="email">
								<div class="card">
									<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
										<h4 class="fw-semibold">Email</h4>
										<div class="d-inline-flex align-items-center">
											<a href="javascript:void(0);" class="link-purple fw-medium" data-bs-toggle="tooltip"  data-bs-placement="left" data-bs-custom-class="tooltip-dark" data-bs-original-title="There are no email accounts configured, Please configured your email account in order to Send/ Create EMails"><i class="ti ti-circle-plus me-1"></i>Create Email</a>
										</div>
									</div>
									<div class="card-body">
										<div class="card border mb-0">
											<div class="card-body pb-0">	
												<div class="row align-items-center">										
													<div class="col-md-8">											
														<div class="mb-3">												
															<h4 class="fw-medium mb-1">Manage Emails</h4>
															<p>You can send and reply to emails directly via this section.</p>
														</div>
													</div>										
													<div class="col-md-4 text-md-end">	
														<div class="mb-3">		
															<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_email" >Connect Account</a>
														</div>
													</div>		
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Email -->

						</div>
						<!-- /Tab Content -->

					</div>
					<!-- /Project Details -->
					
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Delete Project -->
		<div class="modal fade" id="delete_task" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center">
							<div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
								<i class="ti ti-trash-x fs-36 text-danger"></i>
							</div>
							<h4 class="mb-2">Remove Project?</h4>
							<p class="mb-0">Are you sure you want to remove <br> project you selected.</p>
							<div class="d-flex align-items-center justify-content-center mt-4">
								<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="<?php echo base_url();?>project-details" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Project -->

		<!-- Add Note -->
		<div class="modal custom-modal fade modal-padding" id="add_notes" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add New Notes</h5>
						<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url();?>project-details">
							<div class="mb-3">
								<label class="col-form-label">Title <span class="text-danger"> *</span></label>
								<input class="form-control" type="text">
							 </div>
							 <div class="mb-3">
								<label class="col-form-label">Note <span class="text-danger"> *</span></label>
								<textarea class="form-control" rows="4"></textarea>
							 </div>
							 <div class="mb-3">
								<label class="col-form-label">Attachment <span class="text-danger"> *</span></label>
								<div class="drag-attach">
									<input type="file">
									<div class="img-upload">											
										<i class="ti ti-file-broken"></i>Upload File
									</div>
								</div>
							 </div>
							 <div class="mb-3">
								<label class="col-form-label">Uploaded Files</label>
								<div class="upload-file">
									<h6>Projectneonals teyys.xls</h6>
									<p>4.25 MB</p>
									<div class="progress">
										<div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
							 <div class="col-lg-12 text-end modal-btn">
								<a class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button class="btn btn-primary" type="submit">Confirm</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Note -->

		<!-- Edit Project -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
			<div class="offcanvas-header border-bottom">
				<h4>Edit Project</h4>
				<button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="<?php echo base_url();?>projects">
					<div>
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Project ID<span class="text-danger"> *</span></label>
									<input class="form-control" type="text" value="12">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Project Type <span class="text-danger">*</span></label>
									<select class="select2">
										<option>Choose</option>
										<option>Mobile App</option>
										<option selected>Meeting</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Client <span class="text-danger">*</span></label>
									<select class="select">
										<option>Select</option>
										<option selected>NovaWave LLC</option>
										<option>Silver Hawk</option>
										<option>Harbor View</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Category <span class="text-danger">*</span></label>
									<select class="select">
										<option>Select</option>
										<option selected>Harbor View</option>
										<option>LLC</option>
									</select>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Project Timing <span class="text-danger">*</span></label>
									<select class="select">
										<option>Select</option>
										<option selected>Hourly</option>
										<option>Weekly</option>
										<option>Monthly</option>
										<option>Less than 1 Month</option>
										<option>Less than 3 months</option>
									</select>
								</div>
							</div>	
							<div class="col-lg-3 col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Price <span class="text-danger">*</span></label>
									<input class="form-control" type="text">
								</div>
							</div>	
							<div class="col-lg-3 col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Amount <span class="text-danger">*</span></label>
									<input class="form-control" type="text">
								</div>
							</div>	
							<div class="col-lg-3 col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Total <span class="text-danger">*</span></label>
									<input class="form-control" type="text">
								</div>
							</div>	
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Responsible Persons <span class="text-danger">*</span></label>
									<select class="multiple-img" multiple="multiple">
										<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg" selected>Darlee Robertson</option>
										<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg">Sharon Roy</option>
										<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-21.jpg">Vaughan</option>
										<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-23.jpg">Jessica</option>
										<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Team Leader  <span class="text-danger">*</span></label>
									<select class="multiple-img" multiple="multiple">
										<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg">Darlee Robertson</option>
										<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg" selected>Sharon Roy</option>
										<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-21.jpg">Vaughan</option>
										<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-23.jpg">Jessica</option>
										<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Start Date <span class="text-danger">*</span></label>
									<div class="icon-form">
										<span class="form-icon"><i class="ti ti-calendar-event"></i></span>
										<input type="text" class="form-control datetimepicker" value="29-02-2020">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
									<div class="icon-form">
										<span class="form-icon"><i class="ti ti-calendar-event"></i></span>
										<input type="text" class="form-control datetimepicker" value="29-02-2020">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Priority</label>
									<select class="select">
										<option>Select</option>
										<option selected>High</option>
										<option>Low</option>
										<option>Medium</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Status</label>
									<select class="select">
										<option>Select</option>
										<option selected>Active</option>
										<option>Inactive</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Description <span class="text-danger">*</span></label>
									<textarea class="form-control" rows="4"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
						<button type="button" class="btn btn-primary" >Save Changes</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Edit Project -->

		<!-- Create Call Log -->
		<div class="modal custom-modal fade modal-padding" id="create_call" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Create Call Log</h5>
						<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url();?>project-details">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="col-form-label">Status <span class="text-danger"> *</span></label>
										<select class="select">
											<option>Busy</option>
											<option>Unavailable</option>
											<option>No Answer</option>
											<option>Wrong Number</option>
											<option>Left Voice Message</option>
											<option>Moving Forward</option>
										</select>
									</div>
									<div class="mb-3">
										<label class="col-form-label">Follow Up Date <span class="text-danger"> *</span></label>
										<div class="icon-form">
  											<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
  											<input type="text" class="form-control datetimepicker" placeholder="">
  										</div>
									</div>						
									<div class="mb-3">
										<label class="col-form-label">Note <span class="text-danger"> *</span></label>
										<textarea class="form-control" rows="4" placeholder="Add text"></textarea>
									</div>
									<div class="mb-3">
									 	<label class="checkboxs">
  											<input type="checkbox">
  											<span class="checkmarks"></span> Create a followup task
  										</label>
									</div>	
									<div class="text-end modal-btn">
										<a class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
										<button class="btn btn-primary" type="submit">Confirm</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Create Call Log -->

		<!-- Add File -->
		<div class="modal custom-modal fade custom-modal-two modal-padding" id="new_file" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Create New File</h5>
						<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">	
						<div class="add-info-fieldset">

							<div class="add-details-wizard">
								<ul class="progress-bar-wizard">
									<li class="active">
										<span><i class="ti ti-file"></i></span>
										<div class="multi-step-info">
											<h6>Basic Info</h6>
										</div>
									</li>
									<li>									
										<span><i class="ti ti-circle-plus"></i></span>
										<div class="multi-step-info">
											<h6>Add Recipient</h6>
										</div>
									</li>
								</ul>
							</div>
							<fieldset id="first-field-file">
								<form action="<?php echo base_url();?>project-details">
									<div class="contact-input-set">
										<div class="row">
											<div class="col-md-12">
												<div class="mb-3">
													<label class="col-form-label">Choose Deal <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select</option>
														<option>Collins</option>
														<option>Wisozk</option>
														<option>Walter</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="col-form-label">Document Type <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select</option>
														<option>Contract</option>
														<option>Proposal</option>
														<option>Quote</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="col-form-label">Owner <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select</option>
														<option>Admin</option>
														<option>Jackson Daniel</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="col-form-label">Title <span class="text-danger"> *</span></label>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="col-form-label">Locale <span class="text-danger">*</span></label>
													<select class="select">
														<option>Select</option>
														<option>en</option>
														<option>es</option>
														<option>ru</option>
													</select>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="signature-wrap">
													<h4>Signature</h4>
													<ul class="nav sign-item">
														<li class="nav-item">
															<span class=" mb-0" data-bs-toggle="tab" data-bs-target="#nosign">
															<input type="radio" class="status-radio" id="sign1" name="email">
															<label for="sign1"><span class="sign-title">No Signature</span>This document does not require a signature before acceptance.</label>
														</span>
														</li>
														<li class="nav-item">
															<span class="active mb-0" data-bs-toggle="tab" data-bs-target="#use-esign">		
																<input type="radio" class="status-radio" id="sign2" name="email" checked>
																<label for="sign2"><span class="sign-title">Use e-signature</span>This document require e-signature before acceptance.</label>
															</span>
														</li>
													</ul>
													<div class="tab-content">
														<div class="tab-pane show active" id="use-esign">
															<div class="input-block mb-0">
																<label class="col-form-label">Document Signers <span class="text-danger">*</span></label>
															</div>
															<div class="sign-content">
																<div class="row">
																	<div class="col-md-6">
																		<div class="mb-3">
																			<input class="form-control" type="text" placeholder="Enter Name">
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="d-flex align-items-center">
																			<div class="float-none mb-3 me-3 w-100">
																				<input class="form-control" type="text" placeholder="Email Address">
																			</div>
																			<div class="input-btn mb-3">
																				<a href="javascript:void(0);" class="add-sign"><i class="ti ti-circle-plus"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="input-block mb-3">
													<label class="col-form-label">Content <span class="text-danger"> *</span></label>
													<textarea class="form-control" rows="3" placeholder="Add Content"></textarea>
												</div>
											</div>
											<div class="col-lg-12 text-end form-wizard-button modal-btn">
												<button class="btn btn-light" type="reset">Reset</button>
												<button class="btn btn-primary wizard-next-btn" type="button">Next</button>
											</div>
										</div>									
									</div>
								</form>
							</fieldset>
							<fieldset>
								<form action="<?php echo base_url();?>project-details">
									<div class="contact-input-set">
										<div class="row">
											<div class="col-lg-12">
												<div class="signature-wrap">
													<h4 class="mb-2">Send the document to following signers</h4>
													<p>In order to send the document to the signers</p>
													<div class="input-block mb-0">
														<label class="col-form-label">Recipients (Additional recipients)</label>
													</div>
													<div class="sign-content">
														<div class="row">
															<div class="col-md-6">
																<div class="mb-3">
																	<input class="form-control" type="text" placeholder="Enter Name">
																</div>
															</div>
															<div class="col-md-6">
																<div class="d-flex align-items-center">
																	<div class="float-none mb-3 me-3 w-100">
																		<input class="form-control" type="text" placeholder="Email Address">
																	</div>
																	<div class="input-btn mb-3">
																		<a href="javascript:void(0);" class="add-sign"><i class="ti ti-circle-plus"></i></a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="mb-3">
													<label class="col-form-label">Message Subject <span class="text-danger"> *</span></label>
													<input class="form-control" type="text" placeholder="Enter Subject">
												</div>
												<div class="mb-3">
													<label class="col-form-label">Message Text <span class="text-danger"> *</span></label>
													<textarea class="form-control" rows="3" placeholder="Your document is ready"></textarea>
												</div>
												<button class="btn btn-light mb-3">Send Now</button>
												<div class="send-success">
													<p><i class="ti ti-circle-check"></i>  Document sent successfully to the selected recipients</p>
												</div>
											</div>
											<div class="col-lg-12 text-end form-wizard-button modal-btn">
												<button class="btn btn-light" type="reset">Cancel</button>
												<button class="btn btn-primary" type="button" data-bs-dismiss="modal">Save & Next</button>
											</div>
										</div>									
									</div>
								</form>
							</fieldset>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add File -->

		<!-- Connect Account -->
		<div class="modal custom-modal fade" id="create_email" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Connect Account</h5>
						<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="mb-3">
							<label class="col-form-label">Account type <span class="text-danger"> *</span></label>
							<select class="select">
								<option>Gmail</option>
								<option>Outlook</option>
								<option>Imap</option>
							</select>
						</div>
						<div class="mb-3">
							<h5 class="form-title">Sync emails from</h5>
							<div class="sync-radio">
								<div class="radio-item">
									<input type="radio" class="status-radio" id="test1" name="radio-group" checked="">
									<label for="test1">Now</label>
								</div>
								<div class="radio-item">
									<input type="radio" class="status-radio" id="test2" name="radio-group">
									<label for="test2">1 Month Ago</label>
								</div>
								<div class="radio-item">
									<input type="radio" class="status-radio" id="test3" name="radio-group">
									<label for="test3">3 Month Ago</label>
								</div>
								<div class="radio-item">
									<input type="radio" class="status-radio" id="test4" name="radio-group">
									<label for="test4">6 Month Ago</label>
								</div>
							</div>
						</div>
						<div class="col-lg-12 text-end modal-btn">
							<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
							<button class="btn btn-primary"  data-bs-target="#success_mail" data-bs-toggle="modal" data-bs-dismiss="modal" >Connect Account</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Connect Account -->

		<!-- Success Email -->
		<div class="modal custom-modal fade" id="success_mail" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">				
					<div class="modal-header border-0 m-0 justify-content-end">
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<div class="success-message text-center">
							<div class="success-popup-icon bg-light-blue">
								<i class="ti ti-mail-opened"></i>
							</div>
							<h3>Email Connected Successfully!!!</h3>
							<p >Email Account is configured with “example@example.com”. Now you can access email.</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="<?php echo base_url();?>project-details" class="btn btn-primary">Go to email</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Success Company -->
		
		<!-- Access -->
		<div class="modal custom-modal fade" id="access_view" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Responsible Persons</h5>
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url();?>project-details">	
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

		<!-- Add Compose -->
		<div class="modal custom-modal fade" id="add_compose" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Compose</h5>
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body p-0">
						<form action="#">
							<div class="mb-3">
								<input type="email" placeholder="To" class="form-control">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<input type="email" placeholder="Cc" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<input type="email" placeholder="Bcc" class="form-control">
									</div>
								</div>
							</div>
							<div class="mb-3">
								<input type="text" placeholder="Subject" class="form-control">
							</div>
							<div class="mb-3">
								<div class="summernote"></div>
							</div>
							<div class="mb-3">
								<div class="text-center">
									<button class="btn btn-primary"><span>Send</span><i class="fa-solid fa-paper-plane ms-1"></i></button>
									<button class="btn btn-primary" type="button"><span>Draft</span> <i class="fa-regular fa-floppy-disk ms-1"></i></button>
									<button class="btn btn-primary" type="button"><span>Delete</span> <i class="fa-regular fa-trash-can ms-1"></i></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Compose -->

		<!-- Add New Task -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
			<div class="offcanvas-header border-bottom">
				<h4>Add New Task</h4>
				<button type="button" class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="<?php echo base_url();?>tasks">
					<div>
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Title <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>
								<div class="mb-3">
									<label class="col-form-label">Category</label>
									<select class="select">
										<option>Choose</option>
										<option>Calls</option>
										<option>Email</option>
										<option>Email</option>
										<option>Meeting</option>
									</select>
								</div>
								<div class="mb-3">
									<label class="col-form-label">Responsible Persons <span class="text-danger">*</span></label>
									<select class="multiple-img" multiple="multiple">
										<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-19.jpg" selected>Darlee Robertson</option>
										<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-20.jpg">Sharon Roy</option>
										<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-21.jpg">Vaughan</option>
										<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-23.jpg">Jessica</option>
										<option data-image="<?php echo base_url();?>assets/img/profiles/avatar-16.jpg">Carol Thomas</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<label class="col-form-label">Start Date <span class="text-danger">*</span></label>
								<div class="mb-3 icon-form">
									  <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									   <input type="text" class="form-control datetimepicker">
								   </div>
							</div>
							<div class="col-md-6">
								<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
								<div class="mb-3 icon-form">
									  <span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									   <input type="text" class="form-control datetimepicker">
								   </div>
							</div>
							<div class="col-md-12">									
								<div class="mb-3">
									<label class="col-form-label">Tags <span class="text-danger">*</span></label>
									<input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="Promotion, Collab" >
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Priority</label>
									<div class="select-priority">
										<span class="select-icon"><i class="ti ti-square-rounded-filled"></i></span>
										<select class="select">
											<option>Select</option>
											<option>High</option>
											<option>Low</option>
											<option>Medium</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Status</label>
									<select class="select">
										<option selected>Active</option>
										<option>Inactive</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="col-form-label">Description <span class="text-danger">*</span></label>
									<div class="summernote"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_success">Create</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Add New Tasks -->

		<!-- Create task -->
		<div class="modal custom-modal fade" id="create_success" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header border-0 m-0 justify-content-end">
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">	
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<div class="success-message text-center">
							<div class="success-popup-icon bg-light-blue">
								<i class="ti ti-medal"></i>
							</div>
							<h3>Task Created Successfully!!!</h3>
							<p>View the details of task, created</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="<?php echo base_url();?>project-details" class="btn btn-primary">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Create Task -->	

	</div>
	<!-- /Main Wrapper -->
	<?= $this->include('partials/vendor-scripts') ?>

	<!-- Summernote JS -->
	<script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-lite.min.js"></script>
		
	<!-- Sticky Sidebar JS -->
    <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>


</body>
</html>
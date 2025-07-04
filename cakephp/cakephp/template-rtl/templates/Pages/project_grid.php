<!DOCTYPE html>
<html lang="en">

<head>

	<?= $this->element('title-meta') ?>

	<!-- Title -->
	<title>Project Grid | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>

	<!-- Summernote CSS -->
	<?php echo $this->Html->css('plugins/summernote/summernote-lite.min.css') ?>

	<!-- Bootstrap Tagsinput CSS -->
	<?php echo $this->Html->css('plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') ?>

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
								<div class="col-4">
									<h4 class="page-title">Projects<span class="count-title">123</span></h4>
								</div>
								<div class="col-8 text-end">
									<div class="head-icons">
										<a href="project_grid" data-bs-toggle="tooltip" data-bs-placement="top"
											data-bs-original-title="Refresh">
											<i class="ti ti-refresh-dot"></i>
										</a>
										<a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
											data-bs-original-title="Collapse" id="collapse-header">
											<i class="ti ti-chevrons-up"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Page Header -->

						<div class="card">
							<div class="card-header">
								<!-- Search -->

								<div class="row align-items-center">
									<div class="col-sm-4">
										<div class="icon-form mb-3 mb-sm-0">
											<span class="form-icon"><i class="ti ti-search"></i></span>
											<input type="text" class="form-control" placeholder="Search Pipeline">
										</div>
									</div>
									<div class="col-sm-8">
										<div
											class="d-flex align-items-center flex-wrap row-gap-2 justify-content-sm-end">
											<div class="dropdown me-2">
												<a href="javascript:void(0);" class="dropdown-toggle"
													data-bs-toggle="dropdown"><i
														class="ti ti-package-export me-2"></i>Export</a>
												<div class="dropdown-menu  dropdown-menu-end">
													<ul>
														<li>
															<a href="javascript:void(0);" class="dropdown-item"><i
																	class="ti ti-file-type-pdf text-danger me-1"></i>Export
																as PDF</a>
														</li>
														<li>
															<a href="javascript:void(0);" class="dropdown-item"><i
																	class="ti ti-file-type-xls text-green me-1"></i>Export
																as Excel </a>
														</li>
													</ul>
												</div>
											</div>
											<a href="javascript:void(0);" class="btn btn-primary"
												data-bs-toggle="offcanvas" data-bs-target="#offcanvas_add"><i
													class="ti ti-square-rounded-plus me-2"></i>Add New Project</a>
										</div>
									</div>
								</div>
								<!-- /Search -->
							</div>
							<div class="card-body">
								<!-- Filter -->
								<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2 mb-4">
									<div class="d-flex align-items-center flex-wrap row-gap-2">
										<div class="dropdown me-2">
											<a href="javascript:void(0);" class="dropdown-toggle"
												data-bs-toggle="dropdown"><i
													class="ti ti-sort-ascending-2 me-2"></i>Sort
											</a>
											<div class="dropdown-menu  dropdown-menu-start">
												<ul>
													<li>
														<a href="javascript:void(0);" class="dropdown-item">
															<i class="ti ti-circle-chevron-right me-1"></i>Ascending
														</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item">
															<i class="ti ti-circle-chevron-right me-1"></i>Descending
														</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item">
															<i class="ti ti-circle-chevron-right me-1"></i>Recently
															Viewed
														</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item">
															<i class="ti ti-circle-chevron-right me-1"></i>Recently
															Added
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="icon-form">
											<span class="form-icon"><i class="ti ti-calendar"></i></span>
											<input type="text" class="form-control bookingrange" placeholder="">
										</div>

									</div>
									<div class="d-flex align-items-center flex-wrap row-gap-2">
										<div class="dropdown me-2">
											<a href="javascript:void(0);" class="btn bg-soft-purple text-purple"
												data-bs-toggle="dropdown" data-bs-auto-close="outside"><i
													class="ti ti-columns-3 me-2"></i>Manage Columns</a>
											<div class="dropdown-menu  dropdown-menu-md-end dropdown-md p-3">
												<h4 class="mb-2 fw-semibold">Want to manage datatables?</h4>
												<p class="mb-3">Please drag and drop your column to reorder your table
													and enable see option as you want.</p>
												<div class="border-top pt-3">
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Name</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-name" class="check">
															<label for="col-name" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Client</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-phone" class="check">
															<label for="col-phone" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Priority</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-email" class="check">
															<label for="col-email" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Start Date</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-tag" class="check">
															<label for="col-tag" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Due Date</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-loc" class="check">
															<label for="col-loc" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Type</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-rate" class="check">
															<label for="col-rate" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Pipeline Stage</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-rate2" class="check">
															<label for="col-rate2" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Status</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-rate3" class="check"
																checked="">
															<label for="col-rate3" class="checktoggle"></label>
														</div>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<p class="mb-0 d-flex align-items-center"><i
																class="ti ti-grip-vertical me-2"></i>Action</p>
														<div class="status-toggle">
															<input type="checkbox" id="col-rate4" class="check">
															<label for="col-rate4" class="checktoggle"></label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-sorts dropdown me-2">
											<a href="javascript:void(0);" data-bs-toggle="dropdown"
												data-bs-auto-close="outside"><i
													class="ti ti-filter-share"></i>Filter</a>
											<div class="filter-dropdown-menu dropdown-menu  dropdown-menu-md-end p-3">
												<div class="filter-set-view">
													<div class="filter-set-head">
														<h4><i class="ti ti-filter-share"></i>Filter</h4>
													</div>
													<div class="accordion" id="accordionExample">
														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" data-bs-toggle="collapse"
																	data-bs-target="#collapseTwo" aria-expanded="true"
																	aria-controls="collapseTwo">Project Name</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse show"
																id="collapseTwo" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<div class="mb-2 icon-form">
																		<span class="form-icon"><i
																				class="ti ti-search"></i></span>
																		<input type="text" class="form-control"
																			placeholder="Search Name">
																	</div>
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					Truelysell
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Dreamschat
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Servbook
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Doccure
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Dreamsports
																				</label>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" class="collapsed" data-bs-toggle="collapse"
																	data-bs-target="#client" aria-expanded="false"
																	aria-controls="client">Client Name</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse"
																id="client" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<div class="mb-2 icon-form">
																		<span class="form-icon"><i
																				class="ti ti-search"></i></span>
																		<input type="text" class="form-control"
																			placeholder="Search Client">
																	</div>
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					NovaWave LLC
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					BlueSky Industries
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Silver Hawk
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Summit Peak
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					CoastalStar Co.
																				</label>
																			</div>
																		</li>

																	</ul>
																</div>
															</div>
														</div>
														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" class="collapsed" data-bs-toggle="collapse"
																	data-bs-target="#type" aria-expanded="false"
																	aria-controls="type">Type</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse"
																id="type" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					Web App
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Meeting
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Mobile App
																				</label>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" class="collapsed" data-bs-toggle="collapse"
																	data-bs-target="#collapseOne" aria-expanded="false"
																	aria-controls="collapseOne">Start Date</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse"
																id="collapseOne" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																				</label>
																			</div>
																			<div class="collapse-inside-text">
																				<h5>25 Sep 2023</h5>
																			</div>

																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																				</label>
																			</div>
																			<div class="collapse-inside-text">
																				<h5>29 Sep 2023</h5>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																				</label>
																			</div>
																			<div class="collapse-inside-text">
																				<h5>29 Sep 2023</h5>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																				</label>
																			</div>
																			<div class="collapse-inside-text">
																				<h5>14 Oct 2023</h5>
																			</div>
																		</li>

																	</ul>
																</div>
															</div>
														</div>
														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" class="collapsed" data-bs-toggle="collapse"
																	data-bs-target="#collapsetwo" aria-expanded="false"
																	aria-controls="collapsetwo">End Date</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse"
																id="collapsetwo" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																				</label>
																			</div>
																			<div class="collapse-inside-text">
																				<h5>19 Oct 2023</h5>
																			</div>

																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																				</label>
																			</div>
																			<div class="collapse-inside-text">
																				<h5>23 Nov 2023</h5>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																				</label>
																			</div>
																			<div class="collapse-inside-text">
																				<h5>14 Dec 2023</h5>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																				</label>
																			</div>
																			<div class="collapse-inside-text">
																				<h5>09 Dec 2023</h5>
																			</div>
																		</li>

																	</ul>
																</div>
															</div>
														</div>
														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" class="collapsed" data-bs-toggle="collapse"
																	data-bs-target="#Stage" aria-expanded="false"
																	aria-controls="Stage">Pipeline Stage</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse"
																id="Stage" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					Plan
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Develop
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Completed
																				</label>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="filter-set-content">
															<div class="filter-set-content-head">
																<a href="#" class="collapsed" data-bs-toggle="collapse"
																	data-bs-target="#Status" aria-expanded="false"
																	aria-controls="Status">Status</a>
															</div>
															<div class="filter-set-contents accordion-collapse collapse"
																id="Status" data-bs-parent="#accordionExample">
																<div class="filter-content-list">
																	<ul>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox" checked>
																					<span class="checkmarks"></span>
																					Active
																				</label>
																			</div>
																		</li>
																		<li>
																			<div class="filter-checks">
																				<label class="checkboxs">
																					<input type="checkbox">
																					<span class="checkmarks"></span>
																					Inactive
																				</label>
																			</div>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<div class="filter-reset-btns">
														<div class="row">
															<div class="col-6">
																<a href="#" class="btn btn-light">Reset</a>
															</div>
															<div class="col-6">
																<a href="project_grid"
																	class="btn btn-primary">Filter</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="view-icons">
											<a href="projects"><i class="ti ti-list-tree"></i></a>
											<a href="project_grid" class="active"><i
													class="ti ti-grid-dots"></i></a>
										</div>
									</div>
								</div>
								<!-- /Filter -->

								<!-- Projects List -->
								<div class="row">
									<div class="col-xxl-3 col-xl-4 col-md-6">
										<div class="card border">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between mb-3">
													<div class="d-flex align-items-center">
														<span
															class="badge badge-tag badge-danger-light pe-4 text-dark me-2"><i
																class="ti ti-square-rounded-filled text-danger fs-8 me-1"></i>High</span>
														<span class="badge bg-success">Active</span>
													</div>
													<span class="avatar avatar-xs rounded-circle border">
														<i class="fa-solid fa-star text-warning"></i>
													</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
													<div class="d-flex align-items-center">
														<a href="project_details"
															class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
															<?php echo $this->Html->image('priority/truellysel.svg', [
																'alt' => 'img',
																'class' => 'w-auto h-auto'
															]); ?>
														</a>
														<div>
															<h5 class="fw-semibold"><a
																	href="project_details">Truelysell</a></h5>
															<p>Web App</p>
														</div>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon bg-white"
															data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fa fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
																data-bs-target="#offcanvas_edit"><i
																	class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal"
																data-bs-target="#delete_project"><i
																	class="ti ti-trash text-danger"></i> Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-clipboard-copy text-green"></i> Clone
																this Project</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-printer text-info"></i> Print</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-subtask"></i> Add New Task</a>
														</div>
													</div>
												</div>
												<div class="d-block">
													<p class="mb-3">Kofejob is a freelancers marketplace where you can
														post projects &amp; get instant help.</p>
													<div class="mb-3">
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-forbid-2 me-2"></i>Project ID : #12145</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-report-money me-2"></i>Value : $03,50,000
														</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-calendar-exclamation me-2"></i>Due Date :
															15 Oct 2023</p>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<div class="avatar-list-stacked avatar-group-xs">
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-14.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-15.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-16.jpg', [
																	'alt' => 'img'
																]); ?>
															</span>
															<a class="avatar text-default bg-white border avatar-rounded fs-12"
																href="javascript:void(0);">
																+05
															</a>
														</div>
														<div class="d-flex align-items-center">
															<span class="avatar avatar-sm border flex-shrink-0 me-2">
																<?php echo $this->Html->image('icons/company-icon-01.svg', [
																	'alt' => 'img',
																	'class' => 'w-auto h-auto'
																]); ?>
															</span>
															<p>NovaWave LLC</p>
														</div>
													</div>
												</div>
												<div
													class="d-flex justify-content-between align-items-center pt-3 border-top">
													<span class="badge badge-sm bg-soft-purple text-purple"><i
															class="ti ti-clock-stop me-2"></i>Total Hours : 100</span>
													<div class="d-flex align-items-center">
														<span class="d-inline-flex align-items-center me-2"><i
																class="ti ti-brand-wechat me-1"></i>02</span>
														<span class="d-inline-flex align-items-center"><i
																class="ti ti-subtask me-1"></i>04</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-md-6">
										<div class="card border">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between mb-3">
													<div class="d-flex align-items-center">
														<span
															class="badge badge-tag badge-danger-light pe-4 text-dark me-2"><i
																class="ti ti-square-rounded-filled text-danger fs-8 me-1"></i>High</span>
														<span class="badge bg-success">Active</span>
													</div>
													<span class="avatar avatar-xs rounded-circle border">
														<i class="fa-solid fa-star text-warning"></i>
													</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
													<div class="d-flex align-items-center">
														<a href="project_details"
															class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
															<?php echo $this->Html->image('priority/dreamchat.svg', [
																'alt' => 'img',
																'class' => 'w-auto h-auto'
															]); ?>
														</a>
														<div>
															<h5 class="fw-semibold"><a
																	href="project_details">Dreamschat</a></h5>
															<p>Web App</p>
														</div>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon bg-white"
															data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fa fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
																data-bs-target="#offcanvas_edit"><i
																	class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal"
																data-bs-target="#delete_project"><i
																	class="ti ti-trash text-danger"></i> Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-clipboard-copy text-green"></i> Clone
																this Project</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-printer text-info"></i> Print</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-subtask"></i> Add New Task</a>
														</div>
													</div>
												</div>
												<div class="d-block">
													<p class="mb-3">Kofejob is a freelancers marketplace where you can
														post projects &amp; get instant help.</p>
													<div class="mb-3">
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-forbid-2 me-2"></i>Project ID : #12145</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-report-money me-2"></i>Value : $02,15,000
														</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-calendar-exclamation me-2"></i>Due Date :
															19 Oct 2023</p>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<div class="avatar-list-stacked avatar-group-xs">
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-01.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-02.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-03.jpg', [
																	'alt' => 'img'
																]); ?>
															</span>
															<a class="avatar text-default bg-white border avatar-rounded fs-12"
																href="javascript:void(0);">
																+04
															</a>
														</div>
														<div class="d-flex align-items-center">
															<span class="avatar avatar-sm border flex-shrink-0 me-2">
																<?php echo $this->Html->image('icons/company-icon-02.svg', [
																	'alt' => 'img',
																	'class' => 'w-auto h-auto'
																]); ?>
															</span>
															<p>BlueSky Industries</p>
														</div>
													</div>
												</div>
												<div
													class="d-flex justify-content-between align-items-center pt-3 border-top">
													<span class="badge badge-sm bg-soft-purple text-purple"><i
															class="ti ti-clock-stop me-2"></i>Total Hours : 80</span>
													<div class="d-flex align-items-center">
														<span class="d-inline-flex align-items-center me-2"><i
																class="ti ti-brand-wechat me-1"></i>02</span>
														<span class="d-inline-flex align-items-center"><i
																class="ti ti-subtask me-1"></i>04</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-md-6">
										<div class="card border">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between mb-3">
													<div class="d-flex align-items-center">
														<span
															class="badge badge-tag badge-danger-light pe-4 text-dark me-2"><i
																class="ti ti-square-rounded-filled text-danger fs-8 me-1"></i>High</span>
														<span class="badge bg-success">Active</span>
													</div>
													<span class="avatar avatar-xs rounded-circle border">
														<i class="fa-solid fa-star text-warning"></i>
													</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
													<div class="d-flex align-items-center">
														<a href="project_details"
															class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
															<?php echo $this->Html->image('priority/truellysell.svg', [
																'alt' => 'img',
																'class' => 'w-auto h-auto'
															]); ?>
														</a>
														<div>
															<h5 class="fw-semibold"><a
																	href="project_details">Truelysell</a></h5>
															<p>Web App</p>
														</div>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon bg-white"
															data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fa fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
																data-bs-target="#offcanvas_edit"><i
																	class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal"
																data-bs-target="#delete_project"><i
																	class="ti ti-trash text-danger"></i> Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-clipboard-copy text-green"></i> Clone
																this Project</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-printer text-info"></i> Print</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-subtask"></i> Add New Task</a>
														</div>
													</div>
												</div>
												<div class="d-block">
													<p class="mb-3">Kofejob is a freelancers marketplace where you can
														post projects &amp; get instant help.</p>
													<div class="mb-3">
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-forbid-2 me-2"></i>Project ID : #12147</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-report-money me-2"></i>Value : $01,45,000
														</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-calendar-exclamation me-2"></i>Due Date :
															12 Oct 2023</p>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<div class="avatar-list-stacked avatar-group-xs">
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-04.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-05.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-06.jpg', [
																	'alt' => 'img'
																]); ?>
															</span>
															<a class="avatar text-default bg-white border avatar-rounded fs-12"
																href="javascript:void(0);">
																+04
															</a>
														</div>
														<div class="d-flex align-items-center">
															<span class="avatar avatar-sm border flex-shrink-0 me-2">
																<?php echo $this->Html->image('icons/company-icon-03.svg', [
																	'alt' => 'img',
																	'class' => 'w-auto h-auto'
																]); ?>
															</span>
															<p>SilverHawk</p>
														</div>
													</div>
												</div>
												<div
													class="d-flex justify-content-between align-items-center pt-3 border-top">
													<span class="badge badge-sm bg-soft-purple text-purple"><i
															class="ti ti-clock-stop me-2"></i>Total Hours : 75</span>
													<div class="d-flex align-items-center">
														<span class="d-inline-flex align-items-center me-2"><i
																class="ti ti-brand-wechat me-1"></i>02</span>
														<span class="d-inline-flex align-items-center"><i
																class="ti ti-subtask me-1"></i>04</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-md-6">
										<div class="card border">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between mb-3">
													<div class="d-flex align-items-center">
														<span
															class="badge badge-tag badge-danger-light pe-4 text-dark me-2"><i
																class="ti ti-square-rounded-filled text-danger fs-8 me-1"></i>High</span>
														<span class="badge bg-success">Active</span>
													</div>
													<span class="avatar avatar-xs rounded-circle border">
														<i class="fa-solid fa-star text-warning"></i>
													</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
													<div class="d-flex align-items-center">
														<a href="project_details"
															class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
															<?php echo $this->Html->image('priority/servbook.svg', [
																'alt' => 'img',
																'class' => 'w-auto h-auto'
															]); ?>
														</a>
														<div>
															<h5 class="fw-semibold"><a
																	href="project_details">Servbook</a></h5>
															<p>Web App</p>
														</div>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon bg-white"
															data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fa fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
																data-bs-target="#offcanvas_edit"><i
																	class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal"
																data-bs-target="#delete_project"><i
																	class="ti ti-trash text-danger"></i> Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-clipboard-copy text-green"></i> Clone
																this Project</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-printer text-info"></i> Print</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-subtask"></i> Add New Task</a>
														</div>
													</div>
												</div>
												<div class="d-block">
													<p class="mb-3">Kofejob is a freelancers marketplace where you can
														post projects &amp; get instant help.</p>
													<div class="mb-3">
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-forbid-2 me-2"></i>Project ID : #12148</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-report-money me-2"></i>Value : $02,15,000
														</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-calendar-exclamation me-2"></i>Due Date :
															24 Oct 2023</p>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<div class="avatar-list-stacked avatar-group-xs">
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-07.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-08.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-09.jpg', [
																	'alt' => 'img'
																]); ?>
															</span>
															<a class="avatar text-default bg-white border avatar-rounded fs-12"
																href="javascript:void(0);">
																+04
															</a>
														</div>
														<div class="d-flex align-items-center">
															<span class="avatar avatar-sm border flex-shrink-0 me-2">
																<?php echo $this->Html->image('icons/company-icon-04.svg', [
																	'alt' => 'img',
																	'class' => 'w-auto h-auto'
																]); ?>
															</span>
															<p>SilverHawk</p>
														</div>
													</div>
												</div>
												<div
													class="d-flex justify-content-between align-items-center pt-3 border-top">
													<span class="badge badge-sm bg-soft-purple text-purple"><i
															class="ti ti-clock-stop me-2"></i>Total Hours : 75</span>
													<div class="d-flex align-items-center">
														<span class="d-inline-flex align-items-center me-2"><i
																class="ti ti-brand-wechat me-1"></i>02</span>
														<span class="d-inline-flex align-items-center"><i
																class="ti ti-subtask me-1"></i>04</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-md-6">
										<div class="card border">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between mb-3">
													<div class="d-flex align-items-center">
														<span
															class="badge badge-tag badge-danger-light pe-4 text-dark me-2"><i
																class="ti ti-square-rounded-filled text-danger fs-8 me-1"></i>High</span>
														<span class="badge bg-success">Active</span>
													</div>
													<span class="avatar avatar-xs rounded-circle border">
														<i class="fa-solid fa-star text-warning"></i>
													</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
													<div class="d-flex align-items-center">
														<a href="project_details"
															class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
															<?php echo $this->Html->image('priority/dream-pos.svg', [
																'alt' => 'img',
																'class' => 'w-auto h-auto'
															]); ?>
														</a>
														<div>
															<h5 class="fw-semibold"><a
																	href="project_details">DreamPOS</a></h5>
															<p>Web App</p>
														</div>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon bg-white"
															data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fa fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
																data-bs-target="#offcanvas_edit"><i
																	class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal"
																data-bs-target="#delete_project"><i
																	class="ti ti-trash text-danger"></i> Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-clipboard-copy text-green"></i> Clone
																this Project</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-printer text-info"></i> Print</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-subtask"></i> Add New Task</a>
														</div>
													</div>
												</div>
												<div class="d-block">
													<p class="mb-3">Kofejob is a freelancers marketplace where you can
														post projects &amp; get instant help.</p>
													<div class="mb-3">
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-forbid-2 me-2"></i>Project ID : #12149</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-report-money me-2"></i>Value : $03,64,000
														</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-calendar-exclamation me-2"></i>Due Date :
															22 Oct 2023</p>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<div class="avatar-list-stacked avatar-group-xs">
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-10.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-11.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-12.jpg', [
																	'alt' => 'img'
																]); ?>
															</span>
															<a class="avatar text-default bg-white border avatar-rounded fs-12"
																href="javascript:void(0);">
																+03
															</a>
														</div>
														<div class="d-flex align-items-center">
															<span class="avatar avatar-sm border flex-shrink-0 me-2">
																<?php echo $this->Html->image('icons/company-icon-05.svg', [
																	'alt' => 'img',
																	'class' => 'w-auto h-auto'
																]); ?>
															</span>
															<p>RiverStone Ventur</p>
														</div>
													</div>
												</div>
												<div
													class="d-flex justify-content-between align-items-center pt-3 border-top">
													<span class="badge badge-sm bg-soft-purple text-purple"><i
															class="ti ti-clock-stop me-2"></i>Total Hours : 60</span>
													<div class="d-flex align-items-center">
														<span class="d-inline-flex align-items-center me-2"><i
																class="ti ti-brand-wechat me-1"></i>02</span>
														<span class="d-inline-flex align-items-center"><i
																class="ti ti-subtask me-1"></i>04</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-md-6">
										<div class="card border">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between mb-3">
													<div class="d-flex align-items-center">
														<span
															class="badge badge-tag badge-danger-light pe-4 text-dark me-2"><i
																class="ti ti-square-rounded-filled text-danger fs-8 me-1"></i>High</span>
														<span class="badge bg-success">Active</span>
													</div>
													<span class="avatar avatar-xs rounded-circle border">
														<i class="fa-solid fa-star text-warning"></i>
													</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
													<div class="d-flex align-items-center">
														<a href="project_details"
															class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
															<?php echo $this->Html->image('priority/project-01.svg', [
																'alt' => 'img',
																'class' => 'w-auto h-auto'
															]); ?>
														</a>
														<div>
															<h5 class="fw-semibold"><a
																	href="project_details">Kofejob</a></h5>
															<p>Meeting</p>
														</div>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon bg-white"
															data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fa fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
																data-bs-target="#offcanvas_edit"><i
																	class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal"
																data-bs-target="#delete_project"><i
																	class="ti ti-trash text-danger"></i> Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-clipboard-copy text-green"></i> Clone
																this Project</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-printer text-info"></i> Print</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-subtask"></i> Add New Task</a>
														</div>
													</div>
												</div>
												<div class="d-block">
													<p class="mb-3">Kofejob is a freelancers marketplace where you can
														post projects &amp; get instant help.</p>
													<div class="mb-3">
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-forbid-2 me-2"></i>Project ID : #12150</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-report-money me-2"></i>Value : $02,12,000
														</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-calendar-exclamation me-2"></i>Due Date :
															09 Dec 2023</p>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<div class="avatar-list-stacked avatar-group-xs">
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-15.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-16.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-17.jpg', [
																	'alt' => 'img'
																]); ?>
															</span>
															<a class="avatar text-default bg-white border avatar-rounded fs-12"
																href="javascript:void(0);">
																+03
															</a>
														</div>
														<div class="d-flex align-items-center">
															<span class="avatar avatar-sm border flex-shrink-0 me-2">
																<?php echo $this->Html->image('icons/company-icon-06.svg', [
																	'alt' => 'img',
																	'class' => 'w-auto h-auto'
																]); ?>
															</span>
															<p>CoastalStar Co.</p>
														</div>
													</div>
												</div>
												<div
													class="d-flex justify-content-between align-items-center pt-3 border-top">
													<span class="badge badge-sm bg-soft-purple text-purple"><i
															class="ti ti-clock-stop me-2"></i>Total Hours : 96</span>
													<div class="d-flex align-items-center">
														<span class="d-inline-flex align-items-center me-2"><i
																class="ti ti-brand-wechat me-1"></i>02</span>
														<span class="d-inline-flex align-items-center"><i
																class="ti ti-subtask me-1"></i>04</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-md-6">
										<div class="card border">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between mb-3">
													<div class="d-flex align-items-center">
														<span
															class="badge badge-tag badge-danger-light pe-4 text-dark me-2"><i
																class="ti ti-square-rounded-filled text-danger fs-8 me-1"></i>High</span>
														<span class="badge bg-success">Active</span>
													</div>
													<span class="avatar avatar-xs rounded-circle border">
														<i class="fa-solid fa-star text-warning"></i>
													</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
													<div class="d-flex align-items-center">
														<a href="project_details"
															class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
															<?php echo $this->Html->image('priority/project-01.svg', [
																'alt' => 'img',
																'class' => 'w-auto h-auto'
															]); ?>
														</a>
														<div>
															<h5 class="fw-semibold"><a
																	href="project_details">Doccure</a></h5>
															<p>Web App</p>
														</div>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon bg-white"
															data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fa fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
																data-bs-target="#offcanvas_edit"><i
																	class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal"
																data-bs-target="#delete_project"><i
																	class="ti ti-trash text-danger"></i> Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-clipboard-copy text-green"></i> Clone
																this Project</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-printer text-info"></i> Print</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-subtask"></i> Add New Task</a>
														</div>
													</div>
												</div>
												<div class="d-block">
													<p class="mb-3">Kofejob is a freelancers marketplace where you can
														post projects &amp; get instant help.</p>
													<div class="mb-3">
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-forbid-2 me-2"></i>Project ID : #12151</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-report-money me-2"></i>Value : $04,18,000
														</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-calendar-exclamation me-2"></i>Due Date :
															16 Dec 2023</p>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<div class="avatar-list-stacked avatar-group-xs">
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-18.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-19.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-20.jpg', [
																	'alt' => 'img'
																]); ?>
															</span>
															<a class="avatar text-default bg-white border avatar-rounded fs-12"
																href="javascript:void(0);">
																+03
															</a>
														</div>
														<div class="d-flex align-items-center">
															<span class="avatar avatar-sm border flex-shrink-0 me-2">
																<?php echo $this->Html->image('icons/company-icon-07.svg', [
																	'alt' => 'img',
																	'class' => 'w-auto h-auto'
																]); ?>
															</span>
															<p>HarborView</p>
														</div>
													</div>
												</div>
												<div
													class="d-flex justify-content-between align-items-center pt-3 border-top">
													<span class="badge badge-sm bg-soft-purple text-purple"><i
															class="ti ti-clock-stop me-2"></i>Total Hours : 80</span>
													<div class="d-flex align-items-center">
														<span class="d-inline-flex align-items-center me-2"><i
																class="ti ti-brand-wechat me-1"></i>02</span>
														<span class="d-inline-flex align-items-center"><i
																class="ti ti-subtask me-1"></i>04</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-md-6">
										<div class="card border">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between mb-3">
													<div class="d-flex align-items-center">
														<span
															class="badge badge-tag badge-danger-light pe-4 text-dark me-2"><i
																class="ti ti-square-rounded-filled text-danger fs-8 me-1"></i>High</span>
														<span class="badge bg-success">Active</span>
													</div>
													<span class="avatar avatar-xs rounded-circle border">
														<i class="fa-solid fa-star text-warning"></i>
													</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
													<div class="d-flex align-items-center">
														<a href="project_details"
															class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
															<?php echo $this->Html->image('priority/best.svg', [
																'alt' => 'img',
																'class' => 'w-auto h-auto'
															]); ?>
														</a>
														<div>
															<h5 class="fw-semibold"><a
																	href="project_details">Best@laundry</a></h5>
															<p>Meeting</p>
														</div>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon bg-white"
															data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fa fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
																data-bs-target="#offcanvas_edit"><i
																	class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal"
																data-bs-target="#delete_project"><i
																	class="ti ti-trash text-danger"></i> Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-clipboard-copy text-green"></i> Clone
																this Project</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-printer text-info"></i> Print</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-subtask"></i> Add New Task</a>
														</div>
													</div>
												</div>
												<div class="d-block">
													<p class="mb-3">Kofejob is a freelancers marketplace where you can
														post projects &amp; get instant help.</p>
													<div class="mb-3">
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-forbid-2 me-2"></i>Project ID : #12152</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-report-money me-2"></i>Value : $01,23,000
														</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-calendar-exclamation me-2"></i>Due Date :
															13 Jan 2024</p>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<div class="avatar-list-stacked avatar-group-xs">
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-21.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-22.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-23.jpg', [
																	'alt' => 'img'
																]); ?>
															</span>
															<a class="avatar text-default bg-white border avatar-rounded fs-12"
																href="javascript:void(0);">
																+02
															</a>
														</div>
														<div class="d-flex align-items-center">
															<span class="avatar avatar-sm border flex-shrink-0 me-2">
																<?php echo $this->Html->image('icons/company-icon-08.svg', [
																	'alt' => 'img',
																	'class' => 'w-auto h-auto'
																]); ?>
															</span>
															<p>Golden Gate Ltd</p>
														</div>
													</div>
												</div>
												<div
													class="d-flex justify-content-between align-items-center pt-3 border-top">
													<span class="badge badge-sm bg-soft-purple text-purple"><i
															class="ti ti-clock-stop me-2"></i>Total Hours : 65</span>
													<div class="d-flex align-items-center">
														<span class="d-inline-flex align-items-center me-2"><i
																class="ti ti-brand-wechat me-1"></i>02</span>
														<span class="d-inline-flex align-items-center"><i
																class="ti ti-subtask me-1"></i>04</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-md-6">
										<div class="card border">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between mb-3">
													<div class="d-flex align-items-center">
														<span
															class="badge badge-tag badge-danger-light pe-4 text-dark me-2"><i
																class="ti ti-square-rounded-filled text-danger fs-8 me-1"></i>High</span>
														<span class="badge bg-success">Active</span>
													</div>
													<span class="avatar avatar-xs rounded-circle border">
														<i class="fa-solid fa-star text-warning"></i>
													</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
													<div class="d-flex align-items-center">
														<a href="project_details"
															class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
															<?php echo $this->Html->image('priority/dream-pos.svg', [
																'alt' => 'img',
																'class' => 'w-auto h-auto'
															]); ?>
														</a>
														<div>
															<h5 class="fw-semibold"><a
																	href="project_details">POS</a></h5>
															<p>Web App</p>
														</div>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon bg-white"
															data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fa fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
																data-bs-target="#offcanvas_edit"><i
																	class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal"
																data-bs-target="#delete_project"><i
																	class="ti ti-trash text-danger"></i> Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-clipboard-copy text-green"></i> Clone
																this Project</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-printer text-info"></i> Print</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-subtask"></i> Add New Task</a>
														</div>
													</div>
												</div>
												<div class="d-block">
													<p class="mb-3">Kofejob is a freelancers marketplace where you can
														post projects &amp; get instant help.</p>
													<div class="mb-3">
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-forbid-2 me-2"></i>Project ID : #12153</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-report-money me-2"></i>Value : $03,64,000
														</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-calendar-exclamation me-2"></i>Due Date :
															11 Jan 2024</p>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<div class="avatar-list-stacked avatar-group-xs">
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-24.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-25.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-26.jpg', [
																	'alt' => 'img'
																]); ?>
															</span>
															<a class="avatar text-default bg-white border avatar-rounded fs-12"
																href="javascript:void(0);">
																+02
															</a>
														</div>
														<div class="d-flex align-items-center">
															<span class="avatar avatar-sm border flex-shrink-0 me-2">
																<?php echo $this->Html->image('icons/company-icon-09.svg', [
																	'alt' => 'img',
																	'class' => 'w-auto h-auto'
																]); ?>
															</span>
															<p>CoastalStar Inc</p>
														</div>
													</div>
												</div>
												<div
													class="d-flex justify-content-between align-items-center pt-3 border-top">
													<span class="badge badge-sm bg-soft-purple text-purple"><i
															class="ti ti-clock-stop me-2"></i>Total Hours : 65</span>
													<div class="d-flex align-items-center">
														<span class="d-inline-flex align-items-center me-2"><i
																class="ti ti-brand-wechat me-1"></i>02</span>
														<span class="d-inline-flex align-items-center"><i
																class="ti ti-subtask me-1"></i>04</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-md-6">
										<div class="card border">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between mb-3">
													<div class="d-flex align-items-center">
														<span
															class="badge badge-tag badge-danger-light pe-4 text-dark me-2"><i
																class="ti ti-square-rounded-filled text-danger fs-8 me-1"></i>High</span>
														<span class="badge bg-success">Active</span>
													</div>
													<span class="avatar avatar-xs rounded-circle border">
														<i class="fa-solid fa-star text-warning"></i>
													</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
													<div class="d-flex align-items-center">
														<a href="project_details"
															class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
															<?php echo $this->Html->image('priority/servebook.svg', [
																'alt' => 'img',
																'class' => 'w-auto h-auto'
															]); ?>
														</a>
														<div>
															<h5 class="fw-semibold"><a
																	href="project_details">Servbook</a></h5>
															<p>Meeting</p>
														</div>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon bg-white"
															data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fa fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
																data-bs-target="#offcanvas_edit"><i
																	class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal"
																data-bs-target="#delete_project"><i
																	class="ti ti-trash text-danger"></i> Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-clipboard-copy text-green"></i> Clone
																this Project</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-printer text-info"></i> Print</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-subtask"></i> Add New Task</a>
														</div>
													</div>
												</div>
												<div class="d-block">
													<p class="mb-3">Kofejob is a freelancers marketplace where you can
														post projects &amp; get instant help.</p>
													<div class="mb-3">
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-forbid-2 me-2"></i>Project ID : #12153</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-report-money me-2"></i>Value : $04,10,000
														</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-calendar-exclamation me-2"></i>Due Date :
															29 Jan 2024</p>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<div class="avatar-list-stacked avatar-group-xs">
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-27.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-28.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-05.jpg', [
																	'alt' => 'img'
																]); ?>
															</span>
															<a class="avatar text-default bg-white border avatar-rounded fs-12"
																href="javascript:void(0);">
																+02
															</a>
														</div>
														<div class="d-flex align-items-center">
															<span class="avatar avatar-sm border flex-shrink-0 me-2">
																<?php echo $this->Html->image('icons/company-icon-10.svg', [
																	'alt' => 'img',
																	'class' => 'w-auto h-auto'
																]); ?>
															</span>
															<p>Redwood Inc</p>
														</div>
													</div>
												</div>
												<div
													class="d-flex justify-content-between align-items-center pt-3 border-top">
													<span class="badge badge-sm bg-soft-purple text-purple"><i
															class="ti ti-clock-stop me-2"></i>Total Hours : 56</span>
													<div class="d-flex align-items-center">
														<span class="d-inline-flex align-items-center me-2"><i
																class="ti ti-brand-wechat me-1"></i>02</span>
														<span class="d-inline-flex align-items-center"><i
																class="ti ti-subtask me-1"></i>04</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-md-6">
										<div class="card border">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between mb-3">
													<div class="d-flex align-items-center">
														<span
															class="badge badge-tag badge-danger-light pe-4 text-dark me-2"><i
																class="ti ti-square-rounded-filled text-danger fs-8 me-1"></i>High</span>
														<span class="badge bg-success">Active</span>
													</div>
													<span class="avatar avatar-xs rounded-circle border">
														<i class="fa-solid fa-star text-warning"></i>
													</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
													<div class="d-flex align-items-center">
														<a href="project_details"
															class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
															<?php echo $this->Html->image('priority/dreamchat.svg', [
																'alt' => 'img',
																'class' => 'w-auto h-auto'
															]); ?>
														</a>
														<div>
															<h5 class="fw-semibold"><a
																	href="project_details">Dreamchat</a></h5>
															<p>Meeting</p>
														</div>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon bg-white"
															data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fa fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
																data-bs-target="#offcanvas_edit"><i
																	class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal"
																data-bs-target="#delete_project"><i
																	class="ti ti-trash text-danger"></i> Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-clipboard-copy text-green"></i> Clone
																this Project</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-printer text-info"></i> Print</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-subtask"></i> Add New Task</a>
														</div>
													</div>
												</div>
												<div class="d-block">
													<p class="mb-3">Kofejob is a freelancers marketplace where you can
														post projects &amp; get instant help.</p>
													<div class="mb-3">
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-forbid-2 me-2"></i>Project ID : #12154</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-report-money me-2"></i>Value : $04,10,000
														</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-calendar-exclamation me-2"></i>Due Date :
															30 Jan 2024</p>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<div class="avatar-list-stacked avatar-group-xs">
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-08.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-12.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-15.jpg', [
																	'alt' => 'img'
																]); ?>
															</span>
															<a class="avatar text-default bg-white border avatar-rounded fs-12"
																href="javascript:void(0);">
																+02
															</a>
														</div>
														<div class="d-flex align-items-center">
															<span class="avatar avatar-sm border flex-shrink-0 me-2">
																<?php echo $this->Html->image('icons/company-icon-01.svg', [
																	'alt' => 'img',
																	'class' => 'w-auto h-auto'
																]); ?>
															</span>
															<p>Ventur</p>
														</div>
													</div>
												</div>
												<div
													class="d-flex justify-content-between align-items-center pt-3 border-top">
													<span class="badge badge-sm bg-soft-purple text-purple"><i
															class="ti ti-clock-stop me-2"></i>Total Hours : 60</span>
													<div class="d-flex align-items-center">
														<span class="d-inline-flex align-items-center me-2"><i
																class="ti ti-brand-wechat me-1"></i>02</span>
														<span class="d-inline-flex align-items-center"><i
																class="ti ti-subtask me-1"></i>04</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 col-xl-4 col-md-6">
										<div class="card border">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between mb-3">
													<div class="d-flex align-items-center">
														<span
															class="badge badge-tag badge-danger-light pe-4 text-dark me-2"><i
																class="ti ti-square-rounded-filled text-danger fs-8 me-1"></i>High</span>
														<span class="badge bg-success">Active</span>
													</div>
													<span class="avatar avatar-xs rounded-circle border">
														<i class="fa-solid fa-star text-warning"></i>
													</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between bg-light-200 rounded p-2 mb-3">
													<div class="d-flex align-items-center">
														<a href="project_details"
															class="avatar avatar-lg border bg-white flex-shrink-0 me-2">
															<?php echo $this->Html->image('priority/sports.svg', [
																'alt' => 'img',
																'class' => 'w-auto h-auto'
															]); ?>
														</a>
														<div>
															<h5 class="fw-semibold"><a
																	href="project_details">Sports</a></h5>
															<p>Web App</p>
														</div>
													</div>
													<div class="dropdown table-action">
														<a href="#" class="action-icon bg-white"
															data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fa fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
																data-bs-target="#offcanvas_edit"><i
																	class="ti ti-edit text-blue"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal"
																data-bs-target="#delete_project"><i
																	class="ti ti-trash text-danger"></i> Delete</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-clipboard-copy text-green"></i> Clone
																this Project</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-printer text-info"></i> Print</a>
															<a class="dropdown-item" href="javascript:void(0);"><i
																	class="ti ti-subtask"></i> Add New Task</a>
														</div>
													</div>
												</div>
												<div class="d-block">
													<p class="mb-3">Kofejob is a freelancers marketplace where you can
														post projects &amp; get instant help.</p>
													<div class="mb-3">
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-forbid-2 me-2"></i>Project ID : #12155</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-report-money me-2"></i>Value : $04,10,000
														</p>
														<p class="d-flex align-items-center mb-2"><i
																class="ti ti-calendar-exclamation me-2"></i>Due Date :
															31 Jan 2024</p>
													</div>
													<div class="d-flex align-items-center justify-content-between mb-3">
														<div class="avatar-list-stacked avatar-group-xs">
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-08.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-12.jpg', [
																	'alt' => 'img',
																	'class' => 'border border-white'
																]); ?>
															</span>
															<span class="avatar avatar-rounded">
																<?php echo $this->Html->image('profiles/avatar-15.jpg', [
																	'alt' => 'img'
																]); ?>
															</span>
															<a class="avatar text-default bg-white border avatar-rounded fs-12"
																href="javascript:void(0);">
																+02
															</a>
														</div>
														<div class="d-flex align-items-center">
															<span class="avatar avatar-sm border flex-shrink-0 me-2">
																<?php echo $this->Html->image('icons/company-icon-02.svg', [
																	'alt' => 'img',
																	'class' => 'w-auto h-auto'
																]); ?>
															</span>
															<p>SilverHawk</p>
														</div>
													</div>
												</div>
												<div
													class="d-flex justify-content-between align-items-center pt-3 border-top">
													<span class="badge badge-sm bg-soft-purple text-purple"><i
															class="ti ti-clock-stop me-2"></i>Total Hours : 60</span>
													<div class="d-flex align-items-center">
														<span class="d-inline-flex align-items-center me-2"><i
																class="ti ti-brand-wechat me-1"></i>02</span>
														<span class="d-inline-flex align-items-center"><i
																class="ti ti-subtask me-1"></i>04</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Projects List -->

								<div class="load-btn text-center">
									<a href="javascript:void(0);" class="btn btn-primary">Load More Projects<i
											class="ti ti-loader"></i></a>
								</div>

							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add New Project -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
			<div class="offcanvas-header border-bottom">
				<h4>Add New Project</h4>
				<button type="button"
					class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
					data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="projects">
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
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Project Type <span
											class="text-danger">*</span></label>
									<select class="select2">
										<option>Choose</option>
										<option>Mobile App</option>
										<option>Meeting</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Client <span class="text-danger">*</span></label>
									<select class="select">
										<option>Select</option>
										<option>NovaWave LLC</option>
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
										<option>Harbor View</option>
										<option>LLC</option>
									</select>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Project Timing <span
											class="text-danger">*</span></label>
									<select class="select">
										<option>Select</option>
										<option>Hourly</option>
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
									<label class="col-form-label">Responsible Persons <span
											class="text-danger">*</span></label>
									<select class="multiple-img" multiple="multiple">
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-19.jpg'); ?>"
											selected>
											Darlee Robertson
										</option>
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-20.jpg'); ?>">
											Sharon Roy
										</option>
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-21.jpg'); ?>">
											Vaughan
										</option>
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-23.jpg'); ?>">
											Jessica
										</option>
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-16.jpg'); ?>">
											Carol Thomas
										</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Team Leader <span class="text-danger">*</span></label>
									<select class="multiple-img" multiple="multiple">
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-19.jpg'); ?>"
											selected>
											Darlee Robertson
										</option>
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-20.jpg'); ?>">
											Sharon Roy
										</option>
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-21.jpg'); ?>">
											Vaughan
										</option>
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-23.jpg'); ?>">
											Jessica
										</option>
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-16.jpg'); ?>">
											Carol Thomas
										</option>
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
										<option>High</option>
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
										<option>Active</option>
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
						<button type="button" class="btn btn-primary" data-bs-toggle="modal"
							data-bs-target="#create_project">Create</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Add New Project -->

		<!-- Edit Project -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
			<div class="offcanvas-header border-bottom">
				<h4>Edit Project</h4>
				<button type="button"
					class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
					data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="projects">
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
									<label class="col-form-label">Project Type <span
											class="text-danger">*</span></label>
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
									<label class="col-form-label">Project Timing <span
											class="text-danger">*</span></label>
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
									<label class="col-form-label">Responsible Persons <span
											class="text-danger">*</span></label>
									<select class="multiple-img" multiple="multiple">
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-19.jpg'); ?>"
											selected>
											Darlee Robertson
										</option>
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-20.jpg'); ?>">
											Sharon Roy
										</option>
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-21.jpg'); ?>">
											Vaughan
										</option>
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-23.jpg'); ?>">
											Jessica
										</option>
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-16.jpg'); ?>">
											Carol Thomas
										</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="col-form-label">Team Leader <span class="text-danger">*</span></label>
									<select class="multiple-img" multiple="multiple">
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-19.jpg'); ?>"
											selected>
											Darlee Robertson
										</option>
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-20.jpg'); ?>">
											Sharon Roy
										</option>
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-21.jpg'); ?>">
											Vaughan
										</option>
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-23.jpg'); ?>">
											Jessica
										</option>
										<option
											data-image="<?php echo $this->Url->image('profiles/avatar-16.jpg'); ?>">
											Carol Thomas
										</option>
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
						<button type="button" class="btn btn-primary">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Edit Project -->

		<!-- Delete Project -->
		<div class="modal fade" id="delete_project" role="dialog">
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
								<a href="project_grid" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Project -->

		<!-- Create Project -->
		<div class="modal custom-modal fade" id="create_project" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header border-0 m-0 justify-content-end">
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<div class="success-message text-center">
							<div class="success-popup-icon bg-light-blue">
								<i class="ti ti-atom-2"></i>
							</div>
							<h3>Project Created Successfully!!!</h3>
							<p>View the details of project, created</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="project_details" class="btn btn-primary">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Create Project -->

		<!-- Add New View -->
		<div class="modal custom-modal fade" id="save_view" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add New View</h5>
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="projects">
							<div class="mb-3">
								<label class="col-form-label">View Name</label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-btn text-end">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-danger">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add New View -->

	</div>
	<!-- /Main Wrapper -->

	<?= $this->element('vendor-scripts') ?>

	<!-- Bootstrap Tagsinput JS -->
	<?php echo $this->Html->script('plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') ?>

	<!-- Summernote JS -->
	<?php echo $this->Html->script('plugins/summernote/summernote-lite.min.js') ?>

</body>

</html>
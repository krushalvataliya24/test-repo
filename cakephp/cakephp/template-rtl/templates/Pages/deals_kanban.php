<!DOCTYPE html>
<html lang="en">

<head>

	<?= $this->element('title-meta') ?>

	<!-- Title -->
	<title>Deal Kanban | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>

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
								<div class="col-8">
									<h4 class="page-title">Deals<span class="count-title">123</span></h4>
								</div>
								<div class="col-4 text-end">
									<div class="head-icons">
										<a href="deals_kanban" data-bs-toggle="tooltip" data-bs-placement="top"
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

						<!-- Filter -->
						<div class="d-flex justify-content-between align-items-center flex-wrap row-gap-2 mb-4">
							<div class="d-flex align-items-center flex-wrap row-gap-2">
								<div class="form-sorts dropdown me-2">
									<a href="javascript:void(0);" data-bs-toggle="dropdown"
										data-bs-auto-close="outside"><i class="ti ti-filter-share"></i>Filter</a>
									<div class="filter-dropdown-menu dropdown-menu  dropdown-menu-md-start p-3">
										<div class="filter-set-view">
											<div class="filter-set-head">
												<h4><i class="ti ti-filter-share"></i>Filter</h4>
											</div>
											<div class="accordion" id="accordionExample">
												<div class="filter-set-content">
													<div class="filter-set-content-head">
														<a href="#" data-bs-toggle="collapse"
															data-bs-target="#collapseTwo" aria-expanded="true"
															aria-controls="collapseTwo">Deals Name</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse show"
														id="collapseTwo" data-bs-parent="#accordionExample">
														<div class="filter-content-list">
															<div class="mb-2 icon-form">
																<span class="form-icon"><i
																		class="ti ti-search"></i></span>
																<input type="text" class="form-control"
																	placeholder="Search Country">
															</div>
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox" checked>
																			<span class="checkmarks"></span>
																			Collins
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Konopelski
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Adams
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Gutkowski
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Walter
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
															data-bs-target="#owner" aria-expanded="false"
															aria-controls="owner">Owner</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse"
														id="owner" data-bs-parent="#accordionExample">
														<div class="filter-content-list">
															<div class="mb-2 icon-form">
																<span class="form-icon"><i
																		class="ti ti-search"></i></span>
																<input type="text" class="form-control"
																	placeholder="Search Owner">
															</div>
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox" checked>
																			<span class="checkmarks"></span>
																			Hendry
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Guillory
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Jami
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Theresa
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Espinosa
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
																			Won
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Open
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Lost
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
															aria-controls="collapseOne">Rating</a>
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
																			<span class="rating">
																				<i class="fa fa-star filled"></i>
																				<i class="fa fa-star filled"></i>
																				<i class="fa fa-star filled"></i>
																				<i class="fa fa-star filled"></i>
																				<i class="fa fa-star filled"></i>
																				<span>5.0</span>
																			</span>
																		</label>
																	</div>

																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			<span class="rating">
																				<i class="fa fa-star filled"></i>
																				<i class="fa fa-star filled"></i>
																				<i class="fa fa-star filled"></i>
																				<i class="fa fa-star filled"></i>
																				<i class="fa fa-star"></i>
																				<span>4.0</span>
																			</span>
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			<span class="rating">
																				<i class="fa fa-star filled"></i>
																				<i class="fa fa-star filled"></i>
																				<i class="fa fa-star filled"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<span>3.0</span>
																			</span>
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			<span class="rating">
																				<i class="fa fa-star filled"></i>
																				<i class="fa fa-star filled"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<span>2.0</span>
																			</span>
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			<span class="rating">
																				<i class="fa fa-star filled"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<span>1.0</span>
																			</span>
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
															data-bs-target="#collapseThree" aria-expanded="false"
															aria-controls="collapseThree">Tags</a>
													</div>
													<div class="filter-set-contents accordion-collapse collapse"
														id="collapseThree" data-bs-parent="#accordionExample">
														<div class="filter-content-list">
															<ul>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox" checked>
																			<span class="checkmarks"></span>
																			Promotion
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Rated
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Rejected
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Collab
																		</label>
																	</div>
																</li>
																<li>
																	<div class="filter-checks">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																			Calls
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
														<a href="deals_kanban" class="btn btn-primary">Filter</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="icon-form mb-3 mb-sm-0">
									<span class="form-icon"><i class="ti ti-search"></i></span>
									<input type="text" class="form-control" placeholder="Search Deals">
								</div>
							</div>
							<div>
								<ul class="d-flex align-items-center">
									<li>
										<div class="view-icons me-2">
											<a href="deals"><i class="ti ti-list-tree"></i></a>
											<a href="deals_kanban" class="active"><i
													class="ti ti-grid-dots"></i></a>
										</div>
									</li>
									<li>
										<a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="offcanvas"
											data-bs-target="#offcanvas_add"><i
												class="ti ti-square-rounded-plus me-2"></i>Add Deals</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /Filter -->

						<!-- Deals Kanban -->
						<div class="d-flex overflow-x-auto align-items-start mb-4">
							<div class="kanban-list-items">
								<div class="card mb-0">
									<div class="card-body">
										<div class="d-flex justify-content-between align-items-center">
											<div>
												<h4 class="fw-semibold d-flex align-items-center mb-1"><i
														class="ti ti-circle-filled fs-8 text-success me-2"></i>Qualify
													To Buy</h4>
												<span class="fw-medium text-default">45 Leads - $15,44,540</span>
											</div>
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="text-purple"><i
														class="ti ti-plus"></i></a>
												<div class="dropdown table-action ms-2">
													<a href="#" class="action-icon dropdown-toggle bg-white"
														data-bs-toggle="dropdown" aria-expanded="false"><i
															class="fa fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
															data-bs-target="#offcanvas_edit"><i
																class="fa-solid fa-pencil text-blue"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal"
															data-bs-target="#delete_deal"><i
																class="fa-regular fa-trash-can text-danger"></i>
															Delete</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="kanban-drag-wrap pt-4">
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-purple border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="deals_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">HT</span></a>
														<h6 class="fw-medium"><a href="deals_details">Howell,
																Tremblay <br> and Rath</a></h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$03,50,000
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														darleeo@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 12445-47878
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														Newyork, United States
													</p>
												</div>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);"
															class="avatar avatar-md flex-shrink-0 me-2">
															<?php echo $this->Html->image('profiles/avatar-19.jpg', [
																'alt' => 'Image'
															]); ?></a>
														<a href="javascript:void(0);" class="text-default">Darlee
															Robertson</a>
													</div>
													<span class="badge badge-sm text-white bg-blue"><i
															class="ti ti-progress me-1"></i>85%</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span><i class="ti ti-calendar-due"></i> 10 Jan 2024</span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-warning border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="deals_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">RJ</span></a>
														<h6 class="fw-medium"><a href="deals_details">Robert, John
																and <br> Carlos</a></h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$02,10,000
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														sheron@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 12445-47878
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														Exeter, United States
													</p>
												</div>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);"
															class="avatar avatar-md flex-shrink-0 me-2">
															<?php echo $this->Html->image('profiles/avatar-20.jpg', [
																'alt' => 'Image'
															]); ?></a>
														<a href="javascript:void(0);" class="text-default">Sharon
															Roy</a>
													</div>
													<span class="badge badge-sm text-white bg-blue"><i
															class="ti  me-1"></i>15%</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span><i class="ti ti-calendar-due"></i> 12 Jan 2024</span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-success border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="deals_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">WS</span></a>
														<h6 class="fw-medium"><a href="deals_details">Wendy, Star
																and <br> David</a></h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$04,22,000
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														vau@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 12445-47878
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														Phoenix, United States
													</p>
												</div>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);"
															class="avatar avatar-md flex-shrink-0 me-2">
															<?php echo $this->Html->image('profiles/avatar-21.jpg', [
																'alt' => 'Image'
															]); ?></a>
														<a href="javascript:void(0);" class="text-default">Vaughan</a>
													</div>
													<span class="badge badge-sm text-white bg-blue"><i
															class="ti ti-progress me-1"></i>95%</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span><i class="ti ti-calendar-due"></i> 14 Jan 2024</span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kanban-list-items">
								<div class="card mb-0">
									<div class="card-body">
										<div class="d-flex justify-content-between align-items-center">
											<div>
												<h4 class="fw-semibold d-flex align-items-center mb-1"><i
														class="ti ti-circle-filled fs-8 text-info me-2"></i>Contact Made
												</h4>
												<span class="fw-medium text-default">30 Leads - $19,94,938</span>
											</div>
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="text-purple"><i
														class="ti ti-plus"></i></a>
												<div class="dropdown table-action ms-2">
													<a href="#" class="action-icon dropdown-toggle bg-white"
														data-bs-toggle="dropdown" aria-expanded="false"><i
															class="fa fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
															data-bs-target="#offcanvas_edit"><i
																class="fa-solid fa-pencil text-blue"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal"
															data-bs-target="#delete_deal"><i
																class="fa-regular fa-trash-can text-danger"></i>
															Delete</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="kanban-drag-wrap pt-4">
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-success border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="deals_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">BR</span></a>
														<h6 class="fw-medium"><a href="deals_details">Byron, Roman
																and <br> Bailey</a></h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$02,45,000
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														jessica13@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 89351-90346
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														Chester, United States
													</p>
												</div>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);"
															class="avatar avatar-md flex-shrink-0 me-2">
															<?php echo $this->Html->image('profiles/avatar-01.jpg', [
																'alt' => 'Image'
															]); ?></a>
														<a href="javascript:void(0);" class="text-default">Jessica</a>
													</div>
													<span class="badge badge-sm text-white bg-blue"><i
															class="ti ti-progress me-1"></i>47%</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span><i class="ti ti-calendar-due"></i> 06 Feb 2024</span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-purple border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="deals_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">RJ</span></a>
														<h6 class="fw-medium"><a href="deals_details">Robert, John
																and <br> Carlos</a></h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$01,17,000
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														caroltho3@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 78982-09163
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														Charlotte, United States
													</p>
												</div>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);"
															class="avatar avatar-md flex-shrink-0 me-2">
															<?php echo $this->Html->image('profiles/avatar-16.jpg', [
																'alt' => 'Image'
															]); ?></a>
														<a href="javascript:void(0);" class="text-default">Carol
															Thomas</a>
													</div>
													<span class="badge badge-sm text-white bg-blue"><i
															class="ti ti-progress me-1"></i>98%</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span><i class="ti ti-calendar-due"></i> 15 Jan 2024</span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-danger border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="deals_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">IC</span></a>
														<h6 class="fw-medium"><a href="deals_details">Irene,
																Charles and <br> Wilston</a></h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$02,12,000
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														dawnmercha@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 27691-89246
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														Bristol, United States
													</p>
												</div>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);"
															class="avatar avatar-md flex-shrink-0 me-2">
															<?php echo $this->Html->image('profiles/avatar-22.jpg', [
																'alt' => 'Image'
															]); ?></a>
														<a href="javascript:void(0);" class="text-default">Dawn
															Mercha</a>
													</div>
													<span class="badge badge-sm text-white bg-blue"><i
															class="ti ti-progress me-1"></i>95%</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span><i class="ti ti-calendar-due"></i> 25 Jan 2024</span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kanban-list-items">
								<div class="card mb-0">
									<div class="card-body">
										<div class="d-flex justify-content-between align-items-center">
											<div>
												<h4 class="fw-semibold d-flex align-items-center mb-1"><i
														class="ti ti-circle-filled fs-8 text-warning me-2"></i>Presentation
												</h4>
												<span class="fw-medium text-default">25 Leads - $10,36.390</span>
											</div>
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="text-purple"><i
														class="ti ti-plus"></i></a>
												<div class="dropdown table-action ms-2">
													<a href="#" class="action-icon dropdown-toggle bg-white"
														data-bs-toggle="dropdown" aria-expanded="false"><i
															class="fa fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-bs-toggle="offcanvas"
															data-bs-target="#offcanvas_edit"><i
																class="fa-solid fa-pencil text-blue"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal"
															data-bs-target="#delete_deal"><i
																class="fa-regular fa-trash-can text-danger"></i>
															Delete</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="kanban-drag-wrap pt-4">
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-warning border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="deals_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">HT</span></a>
														<h6 class="fw-medium"><a href="deals_details">Jody, Powell
																and <br> Cecil</a></h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$01,84,043
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														rachel@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 17839-93617
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														Baltimore, United States
													</p>
												</div>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);"
															class="avatar avatar-md flex-shrink-0 me-2">
															<?php echo $this->Html->image('profiles/avatar-23.jpg', [
																'alt' => 'Image'
															]); ?></a>
														<a href="javascript:void(0);" class="text-default">Rachel
															Hampton</a>
													</div>
													<span class="badge badge-sm text-white bg-blue"><i
															class="ti ti-progress me-1"></i>25%</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span><i class="ti ti-calendar-due"></i> 18 Mar 2024</span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-success border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="deals_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">BL</span></a>
														<h6 class="fw-medium"><a href="deals_details">Bonnie, Linda
																and <br> Mullin</a></h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$09,35,189
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														jonelle@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 16739-47193
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														Coventry, United States
													</p>
												</div>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);"
															class="avatar avatar-md flex-shrink-0 me-2">
															<?php echo $this->Html->image('profiles/avatar-24.jpg', [
																'alt' => 'Image'
															]); ?></a>
														<a href="javascript:void(0);" class="text-default">Jonelle
															Curtiss</a>
													</div>
													<span class="badge badge-sm text-white bg-blue"><i
															class="ti ti-progress me-1"></i>70%</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span><i class="ti ti-calendar-due"></i> 15 Feb 2024</span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-purple border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="deals_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">CJ</span></a>
														<h6 class="fw-medium"><a href="deals_details">Carlos, Jones
																and <br> Jim</a></h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$04,27,940
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														jonathan@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 18390-37153
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														Seattle
													</p>
												</div>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);"
															class="avatar avatar-md flex-shrink-0 me-2">
															<?php echo $this->Html->image('profiles/avatar-25.jpg', [
																'alt' => 'Image'
															]); ?>
														</a>
														<a href="javascript:void(0);" class="text-default">Jonathan</a>
													</div>
													<span class="badge badge-sm text-white bg-blue"><i
															class="ti ti-progress me-1"></i>45%</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span><i class="ti ti-calendar-due"></i> 30 Jan 2024</span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="kanban-list-items">
								<div class="card mb-0">
									<div class="card-body">
										<div class="d-flex justify-content-between align-items-center">
											<div>
												<h4 class="fw-semibold d-flex align-items-center mb-1"><i
														class="ti ti-circle-filled fs-8 text-purple me-2"></i>Proposal
													Made</h4>
												<span class="fw-medium text-default">50 Leads - $18,83,013</span>
											</div>
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="text-purple"><i
														class="ti ti-plus"></i></a>
												<div class="dropdown table-action ms-2">
													<a href="#" class="action-icon dropdown-toggle bg-white"
														data-bs-toggle="dropdown" aria-expanded="false"><i
															class="fa fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item " href="#" data-bs-toggle="offcanvas"
															data-bs-target="#offcanvas_edit"><i
																class="fa-solid fa-pencil text-blue"></i> Edit</a>
														<a class="dropdown-item" href="#" data-bs-toggle="modal"
															data-bs-target="#delete_deal"><i
																class="fa-regular fa-trash-can text-danger"></i>
															Delete</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="kanban-drag-wrap pt-4">
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-danger border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="deals_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">FJ</span></a>
														<h6 class="fw-medium"><a
																href="deals_details">Freda,Jennfier and <br>
																Thompson</a></h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$04,17,593
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														sidney@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 11739-38135
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														London, United States
													</p>
												</div>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);"
															class="avatar avatar-md flex-shrink-0 me-2">
															<?php echo $this->Html->image('profiles/avatar-17.jpg', [
																'alt' => 'Image'
															]); ?></a>
														<a href="javascript:void(0);" class="text-default">Sidney
															Franks</a>
													</div>
													<span class="badge badge-sm text-white bg-blue"><i
															class="ti ti-progress me-1"></i>59%</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span><i class="ti ti-calendar-due"></i> 11 Apr 2024</span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-purple border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="deals_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">BF</span></a>
														<h6 class="fw-medium"><a href="deals_details">Bruce,
																Faulkner and <br> Lela</a></h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$08,81,389
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														brook@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 19302-91043
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														Detroit, United State
													</p>
												</div>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);"
															class="avatar avatar-md flex-shrink-0 me-2">
															<?php echo $this->Html->image('profiles/avatar-26.jpg', [
																'alt' => 'Image'
															]); ?></a>
														<a href="javascript:void(0);" class="text-default">Brook</a>
													</div>
													<span class="badge badge-sm text-white bg-blue"><i
															class="ti ti-progress me-1"></i>72%</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span><i class="ti ti-calendar-due"></i> 17 Apr 2024</span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div>
										<div class="card kanban-card border">
											<div class="card-body">
												<div class="d-block">
													<div class="bg-warning border border-2 mb-3"></div>
													<div class="d-flex align-items-center mb-3">
														<a href="deals_details"
															class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
																class="avatar-title text-dark">LP</span></a>
														<h6 class="fw-medium"><a href="deals_details">Lawrence,
																Patrick and <br> Vandorn</a></h6>
													</div>
												</div>
												<div class="mb-3 d-flex flex-column">
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-report-money text-dark me-1"></i>
														$09,27,193
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-mail text-dark me-1"></i>
														mickey@example.com
													</p>
													<p class="text-default d-inline-flex align-items-center mb-2">
														<i class="ti ti-phone text-dark me-1"></i>
														+1 17280-92016
													</p>
													<p class="text-default d-inline-flex align-items-center">
														<i class="ti ti-map-pin-pin text-dark me-1"></i>
														Manchester, United States
													</p>
												</div>
												<div class="d-flex justify-content-between align-items-center">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);"
															class="avatar avatar-md flex-shrink-0 me-2">
															<?php echo $this->Html->image('profiles/avatar-15.jpg', [
																'alt' => 'Image'
															]); ?></a>
														<a href="javascript:void(0);" class="text-default">Mickey</a>
													</div>
													<span class="badge badge-sm text-white bg-blue"><i
															class="ti ti-progress me-1"></i>20%</span>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
													<span><i class="ti ti-calendar-due"></i> 10 Feb 2024</span>
													<div class="icons-social d-flex align-items-center">
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-phone-check"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center me-1"><i
																class="ti ti-message-circle-2"></i></a>
														<a href="#"
															class="d-flex align-items-center justify-content-center"><i
																class="ti ti-color-swatch"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Deals Kanban -->
					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add New Deals -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_add">
			<div class="offcanvas-header border-bottom">
				<h5 class="fw-semibold">Add New Deals</h5>
				<button type="button"
					class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
					data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="contacts">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Deal Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<div class="d-flex align-items-center justify-content-between">
									<label class="col-form-label">Pipeine <span class="text-danger">*</span></label>
									<a href="" class="label-add " data-bs-toggle="offcanvas"
										data-bs-target="#offcanvas_pipeline">
										<i class="ti ti-square-rounded-plus"></i>
										Add New
									</a>
								</div>
								<select class="select2">
									<option>Choose</option>
									<option>Sales</option>
									<option>Marketing</option>
									<option>Calls</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Status <span class="text-danger">*</span></label>
								<select class="select2">
									<option>Choose</option>
									<option>Open</option>
									<option>Lost</option>
									<option>Won</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Deal Value<span class="text-danger"> *</span></label>
								<input class="form-control" type="text">
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Currency <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>$</option>
									<option>€</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Period <span class="text-danger">*</span></label>
								<select class="select">
									<option>Choose</option>
									<option>Days</option>
									<option>Month</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Period Value <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Contact <span class="text-danger">*</span></label>
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
							<div class="mb-3">
								<label class="col-form-label">Project <span class="text-danger">*</span></label>
								<select class="select" multiple="multiple">
									<option selected>Devops Design</option>
									<option selected>Margrate Design</option>
									<option selected>UI for Chat</option>
									<option>Web Chat</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Expected Closing Date <span
										class="text-danger">*</span></label>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Assignee <span class="text-danger">*</span></label>
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
								<label class="col-form-label">Follow Up Date <span class="text-danger">*</span></label>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Source <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>Google</option>
									<option>Social Media</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Tags <span class="text-danger">*</span></label>
								<input class="input-tags form-control" type="text" data-role="tagsinput" name="Label"
									value="Collab, Rated">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Priority <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>Highy</option>
									<option>Low</option>
									<option>Medium</option>
								</select>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="mb-3">
								<label class="col-form-label">Description <span class="text-danger">*</span></label>
								<div class="summernote"></div>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
						<button type="button" class="btn btn-primary" data-bs-toggle="modal"
							data-bs-target="#create_success">Create</button>
					</div>
				</form>
			</div>

		</div>
		<!-- /Add New Deals -->

		<!-- Edit Deals -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_edit">
			<div class="offcanvas-header border-bottom">
				<h5 class="fw-semibold">Edit Deals</h5>
				<button type="button"
					class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
					data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="contacts">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Deal Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" value="Collins">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<div class="d-flex align-items-center justify-content-between">
									<label class="col-form-label">Pipeine <span class="text-danger">*</span></label>
									<a href="" class="label-add " data-bs-toggle="offcanvas"
										data-bs-target="#offcanvas_pipeline">
										<i class="ti ti-square-rounded-plus"></i>
										Add New
									</a>
								</div>
								<select class="select2">
									<option>Choose</option>
									<option>Sales</option>
									<option>Marketing</option>
									<option>Calls</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Status <span class="text-danger">*</span></label>
								<select class="select2">
									<option>Choose</option>
									<option>Open</option>
									<option>Lost</option>
									<option>Won</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Deal Value<span class="text-danger"> *</span></label>
								<input class="form-control" type="text" value="$04,51,000">
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Currency <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>$</option>
									<option>€</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Period <span class="text-danger">*</span></label>
								<select class="select">
									<option>Choose</option>
									<option>Days</option>
									<option>Month</option>
								</select>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Period Value <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Contact <span class="text-danger">*</span></label>
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
							<div class="mb-3">
								<label class="col-form-label">Project <span class="text-danger">*</span></label>
								<select class="select" multiple="multiple">
									<option selected>Devops Design</option>
									<option selected>Margrate Design</option>
									<option selected>UI for Chat</option>
									<option>Web Chat</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Due Date <span class="text-danger">*</span></label>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Expected Closing Date <span
										class="text-danger">*</span></label>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="col-form-label">Assignee <span class="text-danger">*</span></label>
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
								<label class="col-form-label">Follow Up Date <span class="text-danger">*</span></label>
								<div class="icon-form">
									<span class="form-icon"><i class="ti ti-calendar-check"></i></span>
									<input type="text" class="form-control datetimepicker" placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Source <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>Google</option>
									<option>Social Media</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Tags <span class="text-danger">*</span></label>
								<input class="input-tags form-control" type="text" data-role="tagsinput" name="Label"
									value="Collab, Rated">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="col-form-label">Priority <span class="text-danger">*</span></label>
								<select class="select">
									<option>Select</option>
									<option>Highy</option>
									<option>Low</option>
									<option>Medium</option>
								</select>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="mb-3">
								<label class="col-form-label">Description <span class="text-danger">*</span></label>
								<div class="summernote"></div>
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
		<!-- /Edit Deals -->

		<!-- Add New Pipeline -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="offcanvas_pipeline">
			<div class="offcanvas-header border-bottom">
				<h4>Add New Pipeline</h4>
				<button type="button"
					class="btn-close custom-btn-close border p-1 me-0 d-flex align-items-center justify-content-center rounded-circle"
					data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<form action="deals">
					<div>
						<div class="mb-3">
							<label class="col-form-label">Pipeline Name <span class="text-danger">*</span></label>
							<input class="form-control" type="text">
						</div>
						<div class="mb-3">
							<div class="pipe-title d-flex align-items-center justify-content-between">
								<h5 class="form-title">Pipeline Stages</h5>
								<a href="#" class="add-stage" data-bs-toggle="modal" data-bs-target="#add_stage"><i
										class="ti ti-square-rounded-plus"></i>Add New</a>
							</div>
							<div class="pipeline-listing">
								<div class="pipeline-item">
									<p><i class="ti ti-grip-vertical"></i> Inpipeline</p>
									<div class="action-pipeline">
										<a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i
												class="ti ti-edit text-blue"></i>Edit</a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i
												class="ti ti-trash text-danger"></i>Delete</a>
									</div>
								</div>
								<div class="pipeline-item">
									<p><i class="ti ti-grip-vertical"></i> Follow Up</p>
									<div class="action-pipeline">
										<a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i
												class="ti ti-edit text-blue"></i>Edit</a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i
												class="ti ti-trash text-danger"></i>Delete</a>
									</div>
								</div>
								<div class="pipeline-item">
									<p><i class="ti ti-grip-vertical"></i> Schedule Service</p>
									<div class="action-pipeline">
										<a href="#" data-bs-toggle="modal" data-bs-target="#edit_stage"><i
												class="ti ti-edit text-blue"></i>Edit</a>
										<a href="#" data-bs-toggle="modal" data-bs-target="#delete_stage"><i
												class="ti ti-trash text-danger"></i>Delete</a>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-3">
							<h5 class="form-title">Access</h5>
							<div class="d-flex flex-wrap access-item nav">
								<div class="radio-btn" data-bs-toggle="tab" data-bs-target="#all">
									<input type="radio" class="status-radio" id="all" name="status" checked="">
									<label for="all">All</label>
								</div>
								<div class="radio-btn" data-bs-toggle="tab" data-bs-target="#select-person">
									<input type="radio" class="status-radio" id="select" name="status">
									<label for="select">Select Person</label>
								</div>
							</div>
							<div class="tab-content mb-3">
								<div class="tab-pane fade" id="select-person">
									<div class="access-wrapper">
										<div class="access-view">
											<div class="access-img">
												<?php echo $this->Html->image('profiles/avatar-21.jpg', [
													'alt' => 'Image'
												]); ?>Vaughan
											</div>
											<a href="#">Remove</a>
										</div>
										<div class="access-view">
											<div class="access-img">
												<?php echo $this->Html->image('profiles/avatar-01.jpg', [
													'alt' => 'Image'
												]); ?>Jessica
											</div>
											<a href="#">Remove</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-end">
						<button type="button" data-bs-dismiss="offcanvas" class="btn btn-light me-2">Cancel</button>
						<button type="button" class="btn btn-primary">Create</button>
					</div>
				</form>
			</div>

		</div>
		<!-- /Add New Pipeline -->

		<!-- Delete Deal -->
		<div class="modal fade" id="delete_deal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center">
							<div class="avatar avatar-xl bg-danger-light rounded-circle mb-3">
								<i class="ti ti-trash-x fs-36 text-danger"></i>
							</div>
							<h4 class="mb-2">Remove Deal?</h4>
							<p class="mb-0">Are you sure you want to remove <br> deal you selected.</p>
							<div class="d-flex align-items-center justify-content-center mt-4">
								<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="deals_kanban" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Deal -->

		<!-- Create Deal -->
		<div class="modal custom-modal fade" id="create_success" role="dialog">
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
								<i class="ti ti-medal"></i>
							</div>
							<h3>Deal Created Successfully!!!</h3>
							<p>View the details of deal, created</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="deals_details" class="btn btn-primary">View Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Create Deal -->

		<!-- Delete Stage -->
		<div class="modal custom-modal fade" id="delete_stage" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header border-0 m-0 justify-content-end">
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<div class="success-message text-center">
							<div class="success-popup-icon">
								<i class="ti ti-trash-x"></i>
							</div>
							<h3>Remove Stage?</h3>
							<p class="del-info">Are you sure you want to remove it.</p>
							<div class="col-lg-12 text-center modal-btn">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<a href="deals" class="btn btn-danger">Yes, Delete it</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Stage -->

		<!-- Add New Stage -->
		<div class="modal custom-modal fade" id="add_stage" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add New Stage</h5>
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="deals">
							<div class="mb-3">
								<label class="col-form-label">Stage Name *</label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-btn text-end">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-danger">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add New Stage -->

		<!-- Edit Stage -->
		<div class="modal custom-modal fade" id="edit_stage" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Stage</h5>
						<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body">
						<form action="deals">
							<div class="mb-3">
								<label class="col-form-label">Stage Name *</label>
								<input type="text" class="form-control" value="Inpipeline">
							</div>
							<div class="modal-btn text-end">
								<a href="#" class="btn btn-light" data-bs-dismiss="modal">Cancel</a>
								<button type="submit" class="btn btn-danger">Save Changes</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Stage -->

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
						<form action="deals_kanban">
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
	<!-- Drag Card -->
	<?php echo $this->Html->script('jquery-ui.min.js') ?>
	<?php echo $this->Html->script('jquery.ui.touch-punch.min.js') ?>

	<!-- Bootstrap Tagsinput JS -->
	<?php echo $this->Html->script('plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') ?>

	<!-- Summernote JS -->
	<?php echo $this->Html->script('plugins/summernote/summernote-lite.min.js') ?>

</body>

</html>
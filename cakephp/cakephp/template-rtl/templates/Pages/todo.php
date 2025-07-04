<!DOCTYPE html>
<html lang="en">

<head>
	<?= $this->element('title-meta') ?>
	<!-- Title -->
	<title>Todo| CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
	<!-- Summernote CSS -->
	<?php echo $this->Html->css('plugins/summernote/summernote-bs4.min.css');?>
   	<!-- Owl Carousel -->
	<?php echo $this->Html->css('owl.carousel.min.css');?>

	<?= $this->element('head-css') ?>
</head>

<body>
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<?= $this->element('header') ?>
		<?= $this->element('sidebar') ?>

		<div class="page-wrapper notes-page-wrapper">
			<div class="content">


				<div class="page-header page-add-notes">
					<div class="add-item d-flex">
						<div class="page-title">
							<h4>Todo</h4>
							<h6>Manage your tasks</h6>
						</div>
						<a id="toggle_btn2" class="notes-tog" href="javascript:void(0);">
							<i class="fas fa-chevron-left"></i>
						</a>
					</div>
					<div class="d-flex flex-sm-row flex-column align-items-sm-center align-items-start">
						<div class="input-block add-lists todo-inbox-check">
							<label class="checkboxs">
								<input type="checkbox" checked>
								<span class="checkmarks"></span>Mark all as Complete
							</label>
						</div>
						<div class="form-sort me-2 mb-sm-0 mb-3">
							<i data-feather="sliders" class="info-img"></i>
							<select class="select">
								<option>Sort by Date</option>
								<option>Ascending </option>
								<option>Descending</option>
								<option>Recently Viewed </option>
								<option>Recently Added</option>
								<option>Creation Date </option>
							</select>
						</div>
						<div class="page-btn">
							<a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#note-units"><i
									data-feather="plus-circle" class="me-2"></i> Add Task </a>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-3 col-md-12 sidebars-right theiaStickySidebar section-bulk-widget">
						<div class="notes-dash">
							<div class="notes-top-head">
								<h5> <i data-feather="file-text" class="feather-file-text"></i> Todo List</h5>
							</div>
							<div class="notes-top-head-submenu">
								<div class="nav flex-column nav-pills todo-inbox" id="v-pills-tab" role="tablist"
									aria-orientation="vertical">
									<button class="nav-link todo-tab todo-inbox active" id="v-pills-profile-tab"
										data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab"
										aria-controls="v-pills-profile" aria-selected="true"> <i data-feather="inbox"
											class="feather-inbox"></i>Inbox <span class="ms-2">1</span></button>
									<button class="nav-link todo-tab todo-inbox" id="v-pills-home-tab"
										data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab"
										aria-controls="v-pills-home" aria-selected="false"> <i
											data-feather="check-circle" class="feather-check-circle"></i>Done</button>
									<button class="nav-link todo-tab-btn todo-inbox" id="v-pills-messages-tab"
										data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button"
										role="tab" aria-controls="v-pills-messages" aria-selected="false"> <i
											data-feather="star" class="feather-star"></i> Important</button>
									<button class="nav-link todo-tab todo-inbox mb-0" id="v-pills-settings-tab"
										data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button"
										role="tab" aria-controls="v-pills-settings" aria-selected="false"> <i
											data-feather="trash-2" class="feather-trash-2"></i>Trash</button>
								</div>
							</div>
							<div class="content-submenu-tag">
								<h6>Tags</h6>
								<ul class="tags-list">
									<li class="personal">
										<a href="javascript:void(0);">
											<span><i class="fas fa-square"></i></span>
											Pending
										</a>
									</li>
									<li class="social">
										<a href="javascript:void(0);">
											<span><i class="fas fa-square"></i></span>
											Onhold
										</a>
									</li>
									<li class="public">
										<a href="javascript:void(0);">
											<span><i class="fas fa-square"></i></span>
											Inprogress
										</a>
									</li>

									<li class="work">
										<a href="javascript:void(0);">
											<span><i class="fas fa-square"></i></span>
											Done
										</a>
									</li>

								</ul>


								<h6>Priority</h6>
								<ul class="priority-list">
									<li class="medium">
										<a href="javascript:void(0);">
											<span><i class="fas fa-square"></i></span>
											Medium
										</a>
									</li>
									<li class="high">
										<a href="javascript:void(0);">
											<span><i class="fas fa-square"></i></span>
											High
										</a>
									</li>
									<li class="low">
										<a href="javascript:void(0);">
											<span><i class="fas fa-square"></i></span>
											Low
										</a>
									</li>

								</ul>
							</div>
						</div>
					</div>

					<div class="col-xl-9 budget-role-notes">
						<div class="section-bulk-wrap">
							<div class="bulk-action-type">
								<div class="form-sort select-bluk">
									<select class="select">
										<option>Bulk Actions</option>
										<option>Delete Marked</option>
										<option>Unmark All</option>
										<option>Mark All</option>
									</select>
								</div>
								<a href="" class="btn btn-added ">Apply</a>
								<div class="search-set">
									<div class="search-input">
										<a href="" class="btn btn-searchset"><i data-feather="search"
												class="feather-search"></i></a>
										<div id="DataTables_Table_0_filter" class="dataTables_filter">
											<label> <input type="search" class="form-control form-control-sm"
													placeholder="Search"></label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-sort">
								<i data-feather="filter" class="feather-filter"></i>
								<select class="select">
									<option>Recent</option>
									<option>Last Modified</option>
									<option>Last Modified by me</option>
								</select>
							</div>
						</div>
						<div class="tab-content" id="v-pills-tabContent">
							<div class="tab-pane fade active show" id="v-pills-profile" role="tabpanel"
								aria-labelledby="v-pills-profile-tab">
								<div class="sections-notes-slider">
									<div class="row">
										<div class="col-lg-12">
											<div class="accordion-card-one accordion todo-accordion"
												id="accordionExample">
												<div class="accordion-item">
													<div class="accordion-header" id="headingOne">
														<div class="accordion-button" data-bs-toggle="collapse"
															data-bs-target="#collapseOne" aria-controls="collapseOne">
															<div class="notes-content todo-today-content">
																<div class="notes-header todo-today-header">
																	<span><i data-feather="calendar"
																			class="feather-calendar"></i></span>
																	<h3>Today</h3>
																	<h6>1</h6>
																</div>
															</div>
															<div class="todo-drop-down">
																<a href="javascript:void(0);">
																	<span><i class="fas fa-chevron-down"></i></span>
																</a>
															</div>
														</div>
													</div>
													<div id="collapseOne" class="accordion-collapse collapse show"
														aria-labelledby="headingOne" data-bs-parent="#accordionExample">
														<div class="accordion-body">
															<div class="todo-widget">
																<div class="todo-wrapper-list">
																	<div
																		class="input-block add-lists todo-inbox-check todo-inbox-check-list">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																		<div class="todo-wrapper-list-content">
																			<h4>Meeting with Shaun Park at 4:50pm</h4>
																			<p>Discuss about new project</p>
																		</div>
																	</div>
																	<div
																		class="notes-card-body d-flex align-items-center">
																		<p
																			class="badge bg-outline-danger badge-lg me-2 mb-0">
																			<i class="fas fa-circle"></i> High</p>
																		<p
																			class="badge bg-outline-secondary badge-lg me-2 mb-0">
																			New</p>
																	</div>
																	<div
																		class=" todo-profile d-flex align-items-center">
																		
																			<?php echo $this->Html->image('users/user-24.jpg', ['alt' => 'Img','class'=>'img-fluid']); ?>
																		<a href="#" data-bs-toggle="dropdown"
																			aria-expanded="false">
																			<i class="fas fa-ellipsis-v"></i>
																		</a>
																		<div
																			class="dropdown-menu notes-menu dropdown-menu-end">
																			<a href="#" class="dropdown-item"
																				data-bs-toggle="modal"
																				data-bs-target="#edit-note-units"><span><i
																						data-feather="edit"></i></span>Edit</a>
																			<a href="#" class="dropdown-item"
																				data-bs-toggle="modal"
																				data-bs-target="#delete-note-units"><span><i
																						data-feather="trash-2"></i></span>Delete</a>
																			<a href="#" class="dropdown-item"><span><i
																						data-feather="star"></i></span>Not
																				Important</a>
																			<a href="#" class="dropdown-item"
																				data-bs-toggle="modal"
																				data-bs-target="#view-note-units"><span><i
																						data-feather="eye"></i></span>View</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="accordion-card-one accordion todo-accordion"
												id="accordionExample2">
												<div class="accordion-item">
													<div class="accordion-header" id="headingTwo">
														<div class="accordion-button" data-bs-toggle="collapse"
															data-bs-target="#collapseTwo" aria-controls="collapseTwo">
															<div class="notes-content todo-today-content">
																<div class="notes-header todo-today-header">
																	<span><i data-feather="calendar"
																			class="feather-calendar"></i></span>
																	<h3>Yesterday</h3>
																</div>
																<div class="todo-drop-down">
																	<a href="javascript:void(0);">
																		<span><i class="fas fa-chevron-down"></i></span>
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div id="collapseTwo" class="accordion-collapse collapse show"
														aria-labelledby="headingTwo"
														data-bs-parent="#accordionExample2">
														<div class="accordion-body">
															<div class="todo-widget">
																<div class="todo-wrapper-list">
																	<div
																		class="input-block add-lists todo-inbox-check todo-inbox-check-list">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																		<div class="todo-wrapper-list-content">
																			<h4>Team meet at Starbucks</h4>
																			<p>Identify the implementation team</p>
																		</div>
																	</div>
																	<div
																		class="notes-card-body d-flex align-items-center">
																		<p
																			class="badge bg-outline-danger badge-lg me-2 mb-0">
																			<i class="fas fa-circle"></i> High</p>
																		<p
																			class="badge bg-outline-info badge-lg me-2 mb-0">
																			Pending</p>
																	</div>
																	<div
																		class=" todo-profile d-flex align-items-center">
																		<a href="#" class="todo-star star-todo-inbox">
																			<span>
																				<i data-feather="star"
																					class="feather-star me-3"></i>
																			</span>
																		</a>
																		
																			<?php echo $this->Html->image('profiles/avatar-02.jpg', ['alt' => 'Img','class'=>'img-fluid']); ?>
																		<a href="#" data-bs-toggle="dropdown"
																			aria-expanded="false">
																			<i class="fas fa-ellipsis-v"></i>
																		</a>
																		<div
																			class="dropdown-menu notes-menu dropdown-menu-end">
																			<a href="#" class="dropdown-item"
																				data-bs-toggle="modal"
																				data-bs-target="#edit-note-units"><span><i
																						data-feather="edit"></i></span>Edit</a>
																			<a href="#" class="dropdown-item"
																				data-bs-toggle="modal"
																				data-bs-target="#delete-note-units"><span><i
																						data-feather="trash-2"></i></span>Delete</a>
																			<a href="#" class="dropdown-item"><span><i
																						data-feather="star"></i></span>Not
																				Important</a>
																			<a href="#" class="dropdown-item"
																				data-bs-toggle="modal"
																				data-bs-target="#view-note-units"><span><i
																						data-feather="eye"></i></span>View</a>
																		</div>
																	</div>
																</div>
																<div class="todo-wrapper-list">
																	<div
																		class="input-block add-lists todo-inbox-check todo-inbox-check-list">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																		<div class="todo-wrapper-list-content">
																			<h4>Meet Lisa to discuss project details
																			</h4>
																			<p>Discuss about additional features</p>
																		</div>
																	</div>
																	<div
																		class="notes-card-body d-flex align-items-center">
																		<p
																			class="badge bg-outline-secondary badge-lg me-2 mb-0">
																			<i class="fas fa-circle"></i> Medium</p>
																		<p
																			class="badge bg-outline-warning badge-lg me-2 mb-0">
																			InProgress</p>
																	</div>
																	<div
																		class=" todo-profile d-flex align-items-center">
																		
																			<?php echo $this->Html->image('users/user-11.jpg', ['alt' => 'Img','class'=>'img-fluid']); ?>
																		<a href="#" data-bs-toggle="dropdown"
																			aria-expanded="false">
																			<i class="fas fa-ellipsis-v"></i>
																		</a>
																		<div
																			class="dropdown-menu notes-menu dropdown-menu-end">
																			<a href="#" class="dropdown-item"
																				data-bs-toggle="modal"
																				data-bs-target="#edit-note-units"><span><i
																						data-feather="edit"></i></span>Edit</a>
																			<a href="#" class="dropdown-item"
																				data-bs-toggle="modal"
																				data-bs-target="#delete-note-units"><span><i
																						data-feather="trash-2"></i></span>Delete</a>
																			<a href="#" class="dropdown-item"><span><i
																						data-feather="star"></i></span>Not
																				Important</a>
																			<a href="#" class="dropdown-item"
																				data-bs-toggle="modal"
																				data-bs-target="#view-note-units"><span><i
																						data-feather="eye"></i></span>View</a>
																		</div>
																	</div>
																</div>
																<div class="todo-wrapper-list">
																	<div
																		class="input-block add-lists todo-inbox-check todo-inbox-check-list">
																		<label class="checkboxs">
																			<input type="checkbox" checked>
																			<span class="checkmarks"></span>
																		</label>
																		<div
																			class="todo-wrapper-list-content todo-strike-content">
																			<h4>Download Complete</h4>
																			<p>Install console machines and prerequiste
																				softwares</p>
																		</div>
																	</div>
																	<div
																		class="notes-card-body d-flex align-items-center">
																		<p
																			class="badge bg-outline-warning badge-lg me-2 mb-0">
																			<i class="fas fa-circle"></i> Low</p>
																		<p
																			class="badge bg-outline-success badge-lg me-2 mb-0">
																			Completed</p>
																	</div>
																	<div
																		class=" todo-profile d-flex align-items-center">
																		
																			<?php echo $this->Html->image('users/user-02.jpg', ['alt' => 'Img','class'=>'img-fluid']); ?>
																		<a href="#" data-bs-toggle="dropdown"
																			aria-expanded="false">
																			<i class="fas fa-ellipsis-v"></i>
																		</a>
																		<div
																			class="dropdown-menu notes-menu dropdown-menu-end">
																			<a href="#" class="dropdown-item"
																				data-bs-toggle="modal"
																				data-bs-target="#edit-note-units"><span><i
																						data-feather="edit"></i></span>Edit</a>
																			<a href="#" class="dropdown-item"
																				data-bs-toggle="modal"
																				data-bs-target="#delete-note-units"><span><i
																						data-feather="trash-2"></i></span>Delete</a>
																			<a href="#" class="dropdown-item"><span><i
																						data-feather="star"></i></span>Not
																				Important</a>
																			<a href="#" class="dropdown-item"
																				data-bs-toggle="modal"
																				data-bs-target="#view-note-units"><span><i
																						data-feather="eye"></i></span>View</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="accordion-card-one accordion todo-accordion"
												id="accordionExample4">
												<div class="accordion-item">
													<div class="accordion-header" id="headingFour">
														<div class="accordion-button" data-bs-toggle="collapse"
															data-bs-target="#collapseFour" aria-controls="collapseFour">
															<div class="notes-content todo-today-content">
																<div class="notes-header todo-today-header">
																	<span><i data-feather="calendar"
																			class="feather-calendar"></i></span>
																	<h3>25/07/2023</h3>
																</div>
																<div class="todo-drop-down">
																	<a href="javascript:void(0);">
																		<span><i class="fas fa-chevron-down"></i></span>
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div id="collapseFour" class="accordion-collapse collapse show"
														aria-labelledby="headingFour"
														data-bs-parent="#accordionExample4">
														<div class="accordion-body">
															<div class="todo-widget">
																<div class="todo-wrapper-list">
																	<div
																		class="input-block add-lists todo-inbox-check todo-inbox-check-list">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																		<div class="todo-wrapper-list-content">
																			<h4>New User Registered</h4>
																			<p>Add new user</p>
																		</div>
																	</div>
																	<div
																		class="notes-card-body d-flex align-items-center">
																		<p
																			class="badge bg-outline-danger badge-lg me-2 mb-0">
																			<i class="fas fa-circle"></i> High</p>
																		<p
																			class="badge bg-outline-info badge-lg me-2 mb-0">
																			Pending</p>
																	</div>
																	<div
																		class=" todo-profile d-flex align-items-center">
																		
																			<?php echo $this->Html->image('users/user-25.jpg', ['alt' => 'Img','class'=>'img-fluid']); ?>
																		<a href="#" data-bs-toggle="dropdown"
																			aria-expanded="false">
																			<i class="fas fa-ellipsis-v"></i>
																		</a>
																		<div
																			class="dropdown-menu notes-menu dropdown-menu-end">
																			<a href="#" class="dropdown-item"
																				data-bs-toggle="modal"
																				data-bs-target="#edit-note-units"><span><i
																						data-feather="edit"></i></span>Edit</a>
																			<a href="#" class="dropdown-item"
																				data-bs-toggle="modal"
																				data-bs-target="#delete-note-units"><span><i
																						data-feather="trash-2"></i></span>Delete</a>
																			<a href="#" class="dropdown-item"><span><i
																						data-feather="star"></i></span>Not
																				Important</a>
																			<a href="#" class="dropdown-item"
																				data-bs-toggle="modal"
																				data-bs-target="#view-note-units"><span><i
																						data-feather="eye"></i></span>View</a>
																		</div>
																	</div>
																</div>
																<div class="todo-wrapper-list">
																	<div
																		class="input-block add-lists todo-inbox-check todo-inbox-check-list">
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																		<div class="todo-wrapper-list-content">
																			<h4>Fix issues in new project</h4>
																			<p>Unit test had done and bug fixed</p>
																		</div>
																	</div>
																	<div
																		class="notes-card-body d-flex align-items-center">
																		<p
																			class="badge bg-outline-danger badge-lg me-2 mb-0">
																			<i class="fas fa-circle"></i> High</p>
																		<p
																			class="badge bg-outline-warning badge-lg me-2 mb-0">
																			InProgress</p>
																	</div>
																	<div
																		class=" todo-profile d-flex align-items-center">
																		
																			<?php echo $this->Html->image('users/user-04.jpg', ['alt' => 'Img','class'=>'img-fluid']); ?>
																		<a href="#" data-bs-toggle="dropdown"
																			aria-expanded="false">
																			<i class="fas fa-ellipsis-v"></i>
																		</a>
																		<div
																			class="dropdown-menu notes-menu dropdown-menu-end">
																			<a href="#" class="dropdown-item"
																				data-bs-toggle="modal"
																				data-bs-target="#edit-note-units"><span><i
																						data-feather="edit"></i></span>Edit</a>
																			<a href="#" class="dropdown-item"
																				data-bs-toggle="modal"
																				data-bs-target="#delete-note-units"><span><i
																						data-feather="trash-2"></i></span>Delete</a>
																			<a href="#" class="dropdown-item"><span><i
																						data-feather="star"></i></span>Not
																				Important</a>
																			<a href="#" class="dropdown-item"
																				data-bs-toggle="modal"
																				data-bs-target="#view-note-units"><span><i
																						data-feather="eye"></i></span>View</a>
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
							<div class="tab-pane fade " id="v-pills-home" role="tabpanel"
								aria-labelledby="v-pills-home-tab">
								<div class="sections-notes-slider">
									<div class="row">
										<div class="todo-widget">
											<div class="todo-wrapper-list">
												<div
													class="input-block add-lists todo-inbox-check todo-inbox-check-list">
													<label class="checkboxs">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
													<div class="todo-wrapper-list-content">
														<h4>Team meet at Starbucks</h4>
														<p>Identify the implementation team</p>
													</div>
												</div>
												<div class="notes-card-body d-flex align-items-center">
													<p class="badge bg-outline-danger badge-lg me-2 mb-0"><i
															class="fas fa-circle"></i> High</p>
													<p class="badge bg-outline-info badge-lg me-2 mb-0"> Pending</p>
												</div>
												<div class=" todo-profile d-flex align-items-center">
												
														<?php echo $this->Html->image('users/user-03.jpg', ['alt' => 'Img','class'=>'img-fluid']); ?>
													<a href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fas fa-ellipsis-v"></i>
													</a>
													<div class="dropdown-menu notes-menu dropdown-menu-end">
														<a href="#" class="dropdown-item" data-bs-toggle="modal"
															data-bs-target="#edit-note-units"><span><i
																	data-feather="edit"></i></span>Edit</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal"
															data-bs-target="#delete-note-units"><span><i
																	data-feather="trash-2"></i></span>Delete</a>
														<a href="#" class="dropdown-item"><span><i
																	data-feather="star"></i></span>Not Important</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal"
															data-bs-target="#view-note-units"><span><i
																	data-feather="eye"></i></span>View</a>
													</div>
												</div>
											</div>
											<div class="todo-wrapper-list">
												<div
													class="input-block add-lists todo-inbox-check todo-inbox-check-list">
													<label class="checkboxs">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
													<div class="todo-wrapper-list-content">
														<h4>Meet Lisa to discuss project details</h4>
														<p>Discuss about additional features</p>
													</div>
												</div>
												<div class="notes-card-body d-flex align-items-center">
													<p class="badge bg-outline-secondary badge-lg me-2 mb-0"><i
															class="fas fa-circle"></i> Medium</p>
													<p class="badge bg-outline-warning badge-lg me-2 mb-0"> InProgress
													</p>
												</div>
												<div class=" todo-profile d-flex align-items-center">
												
														<?php echo $this->Html->image('users/user-04.jpg', ['alt' => 'Img','class'=>'img-fluid']); ?>
													<a href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fas fa-ellipsis-v"></i>
													</a>
													<div class="dropdown-menu notes-menu dropdown-menu-end">
														<a href="#" class="dropdown-item" data-bs-toggle="modal"
															data-bs-target="#edit-note-units"><span><i
																	data-feather="edit"></i></span>Edit</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal"
															data-bs-target="#delete-note-units"><span><i
																	data-feather="trash-2"></i></span>Delete</a>
														<a href="#" class="dropdown-item"><span><i
																	data-feather="star"></i></span>Not Important</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal"
															data-bs-target="#view-note-units"><span><i
																	data-feather="eye"></i></span>View</a>
													</div>
												</div>
											</div>
											<div class="todo-wrapper-list">
												<div
													class="input-block add-lists todo-inbox-check todo-inbox-check-list">
													<label class="checkboxs active">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
													<div class="todo-wrapper-list-content todo-strike-content">
														<h4>Download Complete</h4>
														<p>Install console machines and prerequiste softwares</p>
													</div>
												</div>
												<div class="notes-card-body d-flex align-items-center">
													<p class="badge bg-outline-warning badge-lg me-2 mb-0"><i
															class="fas fa-circle"></i> Low</p>
													<p class="badge bg-outline-success badge-lg me-2 mb-0"> Completed
													</p>
												</div>
												<div class=" todo-profile d-flex align-items-center">
												
														<?php echo $this->Html->image('users/user-05.jpg', ['alt' => 'Img','class'=>'img-fluid me-0']); ?>
													<a href="#" class="inbox-call-profile">
														Calls
													</a>
													<a href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fas fa-ellipsis-v"></i>
													</a>
													<div class="dropdown-menu notes-menu dropdown-menu-end">
														<a href="#" class="dropdown-item" data-bs-toggle="modal"
															data-bs-target="#edit-note-units"><span><i
																	data-feather="edit"></i></span>Edit</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal"
															data-bs-target="#delete-note-units"><span><i
																	data-feather="trash-2"></i></span>Delete</a>
														<a href="#" class="dropdown-item"><span><i
																	data-feather="star"></i></span>Not Important</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal"
															data-bs-target="#view-note-units"><span><i
																	data-feather="eye"></i></span>View</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
								aria-labelledby="v-pills-messages-tab">
								<div class="sections-notes-slider">
									<div class="row">
										<div class="todo-widget">
											<div class="todo-wrapper-list">
												<div
													class="input-block add-lists todo-inbox-check todo-inbox-check-list">
													<label class="checkboxs">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
													<div class="todo-wrapper-list-content">
														<h4>Team meet at Starbucks</h4>
														<p>Identify the implementation team</p>
													</div>
												</div>
												<div class="notes-card-body d-flex align-items-center">
													<p class="badge bg-outline-danger badge-lg me-2 mb-0"><i
															class="fas fa-circle"></i> High</p>
													<p class="badge bg-outline-info badge-lg me-2 mb-0"> Pending</p>
												</div>
												<div class=" todo-profile d-flex align-items-center">
													<a href="#" class="todo-star">
														<span>
															<i class="fas fa-star me-3"></i>
														</span>
													</a>
												
														<?php echo $this->Html->image('users/user-05.jpg', ['alt' => 'Img','class'=>'img-fluid']); ?>
													<a href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fas fa-ellipsis-v"></i>
													</a>
													<div class="dropdown-menu notes-menu dropdown-menu-end">
														<a href="#" class="dropdown-item" data-bs-toggle="modal"
															data-bs-target="#edit-note-units"><span><i
																	data-feather="edit"></i></span>Edit</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal"
															data-bs-target="#delete-note-units"><span><i
																	data-feather="trash-2"></i></span>Delete</a>
														<a href="#" class="dropdown-item"><span><i
																	data-feather="star"></i></span>Not Important</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal"
															data-bs-target="#view-note-units"><span><i
																	data-feather="eye"></i></span>View</a>
													</div>
												</div>
											</div>
											<div class="todo-wrapper-list">
												<div
													class="input-block add-lists todo-inbox-check todo-inbox-check-list">
													<label class="checkboxs">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
													<div class="todo-wrapper-list-content">
														<h4>Meet Lisa to discuss project details</h4>
														<p>Discuss about additional features</p>
													</div>
												</div>
												<div class="notes-card-body d-flex align-items-center">
													<p class="badge bg-outline-secondary badge-lg me-2 mb-0"><i
															class="fas fa-circle"></i> Medium</p>
													<p class="badge bg-outline-warning badge-lg me-2 mb-0"> InProgress
													</p>
												</div>
												<div class=" todo-profile d-flex align-items-center">
													
														<?php echo $this->Html->image('users/user-06.jpg', ['alt' => 'Img','class'=>'img-fluid']); ?>
													<a href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fas fa-ellipsis-v"></i>
													</a>
													<div class="dropdown-menu notes-menu dropdown-menu-end">
														<a href="#" class="dropdown-item" data-bs-toggle="modal"
															data-bs-target="#edit-note-units"><span><i
																	data-feather="edit"></i></span>Edit</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal"
															data-bs-target="#delete-note-units"><span><i
																	data-feather="trash-2"></i></span>Delete</a>
														<a href="#" class="dropdown-item"><span><i
																	data-feather="star"></i></span>Not Important</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal"
															data-bs-target="#view-note-units"><span><i
																	data-feather="eye"></i></span>View</a>
													</div>
												</div>
											</div>
											<div class="todo-wrapper-list">
												<div
													class="input-block add-lists todo-inbox-check todo-inbox-check-list">
													<label class="checkboxs active">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
													<div class="todo-wrapper-list-content todo-strike-content">
														<h4>Download Complete</h4>
														<p>Install console machines and prerequiste softwares</p>
													</div>
												</div>
												<div class="notes-card-body d-flex align-items-center">
													<p class="badge bg-outline-warning badge-lg me-2 mb-0"><i
															class="fas fa-circle"></i> Low</p>
													<p class="badge bg-outline-success badge-lg me-2 mb-0"> Completed
													</p>
												</div>
												<div class=" todo-profile d-flex align-items-center">
													
														<?php echo $this->Html->image('users/user-07.jpg', ['alt' => 'Img','class'=>'img-fluid']); ?>
													<a href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fas fa-ellipsis-v"></i>
													</a>
													<div class="dropdown-menu notes-menu dropdown-menu-end">
														<a href="#" class="dropdown-item" data-bs-toggle="modal"
															data-bs-target="#edit-note-units"><span><i
																	data-feather="edit"></i></span>Edit</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal"
															data-bs-target="#delete-note-units"><span><i
																	data-feather="trash-2"></i></span>Delete</a>
														<a href="#" class="dropdown-item"><span><i
																	data-feather="star"></i></span>Not Important</a>
														<a href="#" class="dropdown-item" data-bs-toggle="modal"
															data-bs-target="#view-note-units"><span><i
																	data-feather="eye"></i></span>View</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
								aria-labelledby="v-pills-settings-tab">
								<div class="sections-notes-slider">
									<div class="row">
										<div class="todo-widget">
											<div class="todo-wrapper-list">
												<div
													class="input-block add-lists todo-inbox-check todo-inbox-check-list">
													<label class="checkboxs">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
													<div class="todo-wrapper-list-content">
														<h4>Team meet at Starbucks</h4>
														<p>Identify the implementation team</p>
													</div>
												</div>
												<div class="notes-card-body d-flex align-items-center">
													<p class="badge bg-outline-danger badge-lg me-2 mb-0"><i
															class="fas fa-circle"></i> High</p>
													<p class="badge bg-outline-info badge-lg me-2 mb-0"> Pending</p>
												</div>
												<div class=" todo-profile d-flex align-items-center">
													
														<?php echo $this->Html->image('users/user-08.jpg', ['alt' => 'Img','class'=>'img-fluid']); ?>
													<a href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fas fa-ellipsis-v"></i>
													</a>
													<div class="dropdown-menu notes-menu dropdown-menu-end">
														<a href="#" class="dropdown-item"><span><i
																	data-feather="edit"></i></span>Permanent Delete</a>
														<a href="#" class="dropdown-item"><span><i
																	data-feather="trash-2"></i></span>Restore Task</a>
													</div>
												</div>
											</div>
											<div class="todo-wrapper-list">
												<div
													class="input-block add-lists todo-inbox-check todo-inbox-check-list">
													<label class="checkboxs">
														<input type="checkbox">
														<span class="checkmarks"></span>
													</label>
													<div class="todo-wrapper-list-content">
														<h4>Meet Lisa to discuss project details</h4>
														<p>Discuss about additional features</p>
													</div>
												</div>
												<div class="notes-card-body d-flex align-items-center">
													<p class="badge bg-outline-secondary badge-lg me-2 mb-0"><i
															class="fas fa-circle"></i> Medium</p>
													<p class="badge bg-outline-warning badge-lg me-2 mb-0"> InProgress
													</p>
												</div>
												<div class=" todo-profile d-flex align-items-center">
												
														<?php echo $this->Html->image('users/user-09.jpg', ['alt' => 'Img','class'=>'img-fluid']); ?>
													<a href="#" data-bs-toggle="dropdown" aria-expanded="false">
														<i class="fas fa-ellipsis-v"></i>
													</a>
													<div class="dropdown-menu notes-menu dropdown-menu-end">
														<a href="#" class="dropdown-item"><span><i
																	data-feather="edit"></i></span>Permanent Delete</a>
														<a href="#" class="dropdown-item"><span><i
																	data-feather="trash-2"></i></span>Restore Task</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row custom-pagination">
							<div class="col-md-12">
								<div class="paginations d-flex justify-content-end">
									<span><i class="fas fa-chevron-left"></i></span>
									<ul class="d-flex align-items-center page-wrap">
										<li>
											<a href="javascript:void(0);" class="active">
												1
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
												2
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
												3
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
												4
											</a>
										</li>
									</ul>
									<span><i class="fas fa-chevron-right"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



        </div>
	<!-- /Main Wrapper -->
	 <!-- Add Note -->
	<div class="modal fade" id="note-units">
		<div class="modal-dialog modal-dialog-centered custom-modal">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header custom-modal-header">
							<div class="page-title">
								<h4>Add Todo</h4>
							</div>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<form action="todo.html">
								<div class="row">
									<div class="col-12">
										<div class="mb-3">
											<label class="form-label">Todo Title</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-12">
										<div class="mb-3">
											<label class="form-label">Assignee</label>
											<select class="select">
												<option>Choose</option>
												<option>Recent1</option>
												<option>Recent2</option>
											</select>
										</div>
									</div>
									<div class="col-6">
										<div class="mb-3">
											<label class="form-label">Tag</label>
											<select class="select">
												<option>Select</option>
												<option>Recent1</option>
												<option>Recent2</option>
											</select>
										</div>
									</div>
									<div class="col-6">
										<div class="mb-3">
											<label class="form-label">Priority</label>
											<select class="select">
												<option>Select</option>
												<option>Recent1</option>
												<option>Recent2</option>
											</select>
										</div>
									</div>
									<div class="col-6">
										<div class="input-blocks todo-calendar">
											<label class="form-label">Due Date</label>
											<div class="input-groupicon calender-input">
												<input type="text" class="form-control  date-range bookingrange"
													placeholder="Select" value="13 Aug 1992">
											</div>
										</div>
									</div>
									<div class="col-6">
										<div class="mb-3">
											<label class="form-label">Status</label>
											<select class="select">
												<option>Select</option>
												<option>Recent1</option>
												<option>Recent2</option>
											</select>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3 summer-description-box notes-summernote">
											<label class="form-label">Descriptions</label>
											<div id="summernote"></div>
											<p>Maximum 60 Characters</p>
										</div>
									</div>
								</div>
								<div class="modal-footer-btn">
									<button type="button" class="btn btn-cancel me-2"
										data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-submit">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Note -->

	<!-- Edit Note -->
	<div class="modal fade" id="edit-note-units">
		<div class="modal-dialog modal-dialog-centered custom-modal">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header custom-modal-header">
							<div class="page-title">
								<h4>Todo Title</h4>
							</div>
							<div class=" edit-note-head d-flex align-items-center">
								<a href="javascript:void(0);" class="me-2">
									<span>
										<i data-feather="trash-2"></i>
									</span>
								</a>
								<a href="javascript:void(0);" class="me-2">
									<span>
										<i data-feather="star"></i>
									</span>
								</a>
								<a href="javascript:void(0);" class="me-2">
									<span>
										<i data-feather="eye"></i>
									</span>
								</a>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</div>
						<div class="modal-body custom-modal-body">
							<form action="todo.html">
								<div class="row">
									<div class="col-12">
										<div class="mb-3">
											<label class="form-label">Note Title</label>
											<input type="text" class="form-control"
												placeholder="Meet Lisa to discuss project details">
										</div>
									</div>
									<div class="col-12">
										<div class="input-blocks">
											<label class="form-label">Assignee</label>
											<select class="select">
												<option>Choose</option>
												<option>Recent1</option>
												<option>Recent2</option>
											</select>
										</div>
									</div>
									<div class="col-6">
										<div class="mb-3">
											<label class="form-label">Tag</label>
											<select class="select">
												<option>Onhold</option>
												<option>Onhold</option>
												<option>Onhold</option>
											</select>
										</div>
									</div>
									<div class="col-6">
										<div class="mb-3">
											<label class="form-label">Priority</label>
											<select class="select">
												<option>High</option>
												<option>Medium</option>
												<option>Low</option>
											</select>
										</div>
									</div>
									<div class="col-6">
										<div class="mb-3 input-blocks todo-calendar">
											<label class="form-label">Due Date</label>
											<div class="input-groupicon calender-input">
												<input type="text" class="form-control date-range bookingrange"
													placeholder="Select" value="13 Aug 1992">
											</div>
										</div>
									</div>
									<div class="col-6">
										<div class="mb-3">
											<label class="form-label">Status</label>
											<select class="select">
												<option>Select</option>
												<option>Recent1</option>
												<option>Recent2</option>
											</select>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="mb-3 summer-description-box notes-summernote">
											<label class="form-label">Descriptions</label>
											<div id="summernote2"></div>
											<p>Maximum 60 Characters</p>
										</div>
									</div>

								</div>
								<div class="modal-footer-btn">
									<button type="button" class="btn btn-cancel me-2"
										data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-submit">Save Changes</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Edit Note -->

	<!-- Delete Note -->
	<div class="modal fade" id="delete-note-units">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="delete-popup">
							<div class="delete-image text-center mx-auto">
							
								<?php echo $this->Html->image('icons/close-circle.png', ['alt' => 'Img','class'=>'img-fluid']); ?>
							</div>
							<div class="delete-heads">
								<h4>Are You Sure?</h4>
								<p>Do you really want to delete this item, This process cannot be undone.</p>
							</div>
							<div class="modal-footer-btn delete-footer mt-3">
								<a href="" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="" class="btn btn-submit">Delete</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Delete Note -->

	<!-- View Note -->
	<div class="modal fade" id="view-note-units">
		<div class="modal-dialog modal-dialog-centered custom-modal">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header custom-modal-header">
							<div class="page-title edit-page-title">
								<h4>Todo</h4>
								<p>Personal</p>
							</div>
							<div class=" edit-noted-head d-flex align-items-center">
								<a href="javascript:void(0);">
									<span>
										<i data-feather="trash-2"></i>
									</span>
								</a>
								<a href="javascript:void(0);" class="me-2">
									<span>
										<i data-feather="star"></i>
									</span>
								</a>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</div>
						<div class="modal-body custom-modal-body">
							<div class="row">
								<div class="col-12">
									<div class="edit-head-view">
										<h6>Meet Lisa to discuss project details</h6>
										<p>Hiking is a long, vigorous walk, usually on trails or footpaths in the
											countryside.
											Walking for pleasure developed in Europe during the eighteenth century.
											Religious pilgrimages have existed much longer but they involve walking long
											distances for a spiritual purpose associated with specific religions and
											also
											we achieve inner peace while we hike at a local park.</p>

										<p class="badged high"><i class="fas fa-circle"></i> High</p>
									</div>
									<div class="modal-footer-btn edit-footer-menu">
										<a href="" class="btn btn-cancel me-2" data-bs-dismiss="modal">Close</a>
									</div>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /View Note -->

	<?= $this->element('vendor-scripts') ?>
<!-- Summernote JS -->
<?php echo $this->Html->script('plugins/summernote/summernote-bs4.min.js');?>

<!-- Sticky-sidebar -->
<?php echo $this->Html->script('plugins/theia-sticky-sidebar/ResizeSensor.js');?>
<?php echo $this->Html->script('plugins/theia-sticky-sidebar/theia-sticky-sidebar.js');?>

</body>

</html>
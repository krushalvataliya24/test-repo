<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Title -->
	<title>Call History | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
		
<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
</head>
<body>


<div id="global-loader" >
			<div class="whirly-loader"> </div>
		</div>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			
        <?= $this->include('partials/menu') ?>
			
		<div class="page-wrapper">
				<div class="content">
					<div class="page-header">
						<div class="page-header menu">
							<div class="page-title">
								<h4>Call History</h4>
								<h6>Manage your products</h6>
							</div>
						</div>
					</div>

					<!-- /product list -->
					<div class="card">
						<div class="card-body">
							<!-- /Filter -->
							<div class="table-responsive  custom-table">
								<table class="table  datatable">
									<thead class="thead-light">
										<tr>
											<th class="no-sort">
												<label class="checkboxs">
													<input type="checkbox" id="select-all">
													<span class="checkmarks"></span>
												</label>
											</th>
											<th>Username</th>
											<th>Phone Number</th>
											<th>Call Type</th>
											<th>Duration</th>
											<th>Date & Time</th>
											<th class="no-sort">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>
												<div class="userimgname">
													<a href="javascript:void(0);" class="product-img">
														<img src="<?php echo base_url();?>assets/img/users/user-01.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">Arroon</a>
												</div>
											</td>
											<td>+1 25182 94528</td>
											<td class="phone-call-icon"><i data-feather="phone" class="income-calls me-1"></i><i data-feather="arrow-down-left" class="income-success me-1"></i>Incoming Call</td>
											<td>00.25</td>
											<td>19 Jan 2023 - 01:16 PM</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-3 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#user-profile-new">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>
												<div class="userimgname">
													<a href="javascript:void(0);" class="product-img">
														<img src="<?php echo base_url();?>assets/img/users/user-02.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">Rose</a>
												</div>
											</td>
											<td>+1 93016 81932</td>
											<td class="phone-call-icon"><i data-feather="phone" class="income-calls me-1"></i><i data-feather="arrow-up-right" class="income-success-missed me-1"></i>Missed Call</td>
											<td>00.00</td>
											<td>24 Jan 2023 - 02:50 PM</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-3 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#user-profile-new">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>
												<div class="userimgname">
													<a href="javascript:void(0);" class="product-img">
														<img src="<?php echo base_url();?>assets/img/users/user-03.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">Benjamin</a>
												</div>
											</td>
											<td>+1 25182 94528</td>
											<td class="phone-call-icon"><i data-feather="video" class="income-calls me-1"></i><i data-feather="arrow-down-left" class="income-success me-1"></i>Incoming Call</td>
											<td>00.15</td>
											<td>03 Feb 2023 - 10:37 AM</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-3 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#user-profile-new">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>
												<div class="userimgname">
													<a href="javascript:void(0);" class="product-img">
														<img src="<?php echo base_url();?>assets/img/users/user-04.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">Kaitlin</a>
												</div>
											</td>
											<td>+1 70328 96042</td>
											<td class="phone-call-icon"><i data-feather="phone" class="income-calls me-1"></i><i data-feather="arrow-down-left" class="income-success-missed me-1"></i>Missed Call</td>
											<td>00.00</td>
											<td>17 Feb 2023 - 11:25 AM</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-3 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#user-profile-new">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>
												<div class="userimgname">
													<a href="javascript:void(0);" class="product-img">
														<img src="<?php echo base_url();?>assets/img/users/user-05.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">Lilly</a>
												</div>
											</td>
											<td>+1 83610 45175</td>
											<td class="phone-call-icon"><i data-feather="video" class="income-calls me-1"></i><i data-feather="arrow-up-right" class="income-success me-1"></i>Outgoing Call</td>
											<td>00.45</td>
											<td>14 Mar 2023 - 09:12 AM</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-3 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#user-profile-new">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>
												<div class="userimgname">
													<a href="javascript:void(0);" class="product-img">
														<img src="<?php echo base_url();?>assets/img/users/user-08.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">Freda</a>
												</div>
											</td>
											<td>+1 46217 84294</td>
											<td class="phone-call-icon"><i data-feather="phone" class="income-calls me-1"></i><i data-feather="arrow-down-left" class="income-success me-1"></i>Incoming Call</td>
											<td>00.30</td>
											<td>27 Mar 2023 - 04:32 PM</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-3 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#user-profile-new">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>
												<div class="userimgname">
													<a href="javascript:void(0);" class="product-img">
														<img src="<?php echo base_url();?>assets/img/users/user-06.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">Alwin</a>
												</div>
											</td>
											<td>+1 62573 84301</td>
											<td class="phone-call-icon"><i data-feather="phone" class="income-calls me-1"></i><i data-feather="arrow-up-right" class="income-success me-1"></i>Outgoing Call</td>
											<td>01.17</td>
											<td>13 Apr 2023 - 02:46 PM</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-3 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#user-profile-new">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>
												<div class="userimgname">
													<a href="javascript:void(0);" class="product-img">
														<img src="<?php echo base_url();?>assets/img/users/user-07.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">Maybelle</a>
												</div>
											</td>
											<td>+1 14693 63826</td>
											<td class="phone-call-icon"><i data-feather="video" class="income-calls me-1"></i><i data-feather="arrow-down-left" class="income-success-missed me-1"></i>Missed Call</td>
											<td>00.00</td>
											<td>11 Apr 2023 - 10:29 AM</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-3 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#user-profile-new">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>
												<div class="userimgname">
													<a href="javascript:void(0);" class="product-img">
														<img src="<?php echo base_url();?>assets/img/users/user-10.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">Ellen</a>
												</div>
											</td>
											<td>+1 83710 43827</td>
											<td class="phone-call-icon"><i data-feather="phone" class="income-calls me-1"></i><i data-feather="arrow-down-left" class="income-success me-1"></i>Incoming Call</td>
											<td>00.50</td>
											<td>14 May 2023 - 03:06 PM</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-3 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#user-profile-new">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<label class="checkboxs">
													<input type="checkbox">
													<span class="checkmarks"></span>
												</label>
											</td>
											<td>
												<div class="userimgname">
													<a href="javascript:void(0);" class="product-img">
														<img src="<?php echo base_url();?>assets/img/users/user-12.jpg" alt="product">
													</a>
													<a href="javascript:void(0);">Grace</a>
												</div>
											</td>
											<td>+1 42695 07322</td>
											<td class="phone-call-icon"><i data-feather="video" class="income-calls me-1"></i><i data-feather="arrow-down-left" class="income-success-missed me-1"></i>Missed Call</td>
											<td>00.00</td>
											<td>29 May 2023 - 11:23 AM</td>
											<td class="action-table-data">
												<div class="edit-delete-action">
													<a class="me-3 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#user-profile-new">
														<i data-feather="eye" class="feather-eye"></i>
													</a>
													<a class="confirm-text p-2" href="javascript:void(0);">
														<i data-feather="trash-2" class="feather-trash-2"></i>
													</a>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="row align-items-center">
									<div class="col-md-6">
										<div class="datatable-length"></div>
									</div>
									<div class="col-md-6">
										<div class="datatable-paginate"></div>
									</div>
								</div>
						</div>
					</div>
					<!-- /product list -->
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->

		<!-- details popup -->
		<div class="modal fade" id="user-profile-new">
			<div class="modal-dialog history-modal-profile">
				<div class="modal-content">
					<div class="page-wrapper details-blk">
						<div class="content">
							<div class="text-center right-sidebar-profile mb-3">
								<figure class="avatar">
									<img src="<?php echo base_url();?>assets/img/users/user-23.jpg" alt="image">
								</figure>
								<div class="chat-options chat-option-profile">
									<ul class="list-inline">
										<li class="list-inline-item">
											<a href="<?php echo base_url();?>audio-call" class="btn btn-outline-light " data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Voice Call">
												<i class="bx bx-phone"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a href="<?php echo base_url();?>chat" class="btn btn-outline-light" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Chat">
												<i class="bx bx-message-square-dots"></i>
											</a>
										</li>
										<li class="list-inline-item ">
											<a href="<?php echo base_url();?>video-call" class="btn btn-outline-light profile-open" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Video Call">
												<i class="bx bx-video"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="modal-profile-detail">
								<div class="row">
									<div class="col-lg-6">
										<div class="modal-userlist">
											<ul>
												<li>Name<span>Thomas</span></li>
												<li>Phone<span>+1 25182 94528</span></li>
												<li>Email<span>thomas@example.com</span></li>
											</ul>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="modal-userlist d-flex justify-content-center">
											<ul>
												<li>Total Calls<span>20</span></li>
												<li>Average Call Timing<span>0.30</span></li>
												<li>Average Waiting Time<span>00.5</span></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /details popup -->
<?= $this->include('partials/vendor-scripts') ?>
</body>
</html>
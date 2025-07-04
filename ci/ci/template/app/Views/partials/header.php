		<!-- Header -->
		<div class="header">

			<!-- Logo -->
			<div class="header-left active">
				<a href="<?php echo base_url(); ?>deals-dashboard" class="logo logo-normal">
                    <img src="<?php echo base_url(); ?>assets/img/logo.svg" alt="Logo">
                    <img src="<?php echo base_url(); ?>assets/img/white-logo.svg" class="white-logo" alt="Logo">
                </a>
				<a href="<?php echo base_url(); ?>deals-dashboard" class="logo-small">
					<img src="<?php echo base_url(); ?>assets/img/logo-small.svg" alt="Logo">
				</a>
				<a id="toggle_btn" href="javascript:void(0);">
					<i class="ti ti-arrow-bar-to-left"></i>
				</a>
			</div>
			<!-- /Logo -->

			<a id="mobile_btn" class="mobile_btn" href="#sidebar">
				<span class="bar-icon">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</a>

			<div class="header-user">
				<ul class="nav user-menu">
					
					<!-- Search -->
					<li class="nav-item nav-search-inputs me-auto">
						<div class="top-nav-search">
							<a href="javascript:void(0);" class="responsive-search">
								<i class="fa fa-search"></i>
							</a>
							<form action="#" class="dropdown">
								<div class="searchinputs" id="dropdownMenuClickable">
									<input type="text" placeholder="Search">
									<div class="search-addon">
										<button type="submit"><i class="ti ti-command"></i></button>
									</div>
								</div>
							</form>
						</div>
					</li>
					<!-- /Search -->

					<!-- Nav List -->
					<li class="nav-item nav-list">
						<ul class="nav">
							<li class="dark-mode-list">
								<a href="javascript:void(0);" id="dark-mode-toggle" class="dark-mode-toggle">
									<i class="ti ti-sun light-mode active"></i>
									<i class="ti ti-moon dark-mode"></i>
								</a>
							</li>
							<li class="nav-item dropdown">
								<a href="javascript:void(0);" class="btn btn-header-list" data-bs-toggle="dropdown">
									<i class="ti ti-layout-grid-add"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end menus-info">
									<div class="row">
										<div class="col-md-6">
											<ul class="menu-list">
												<li>
													<a href="<?php echo base_url(); ?>contacts">
														<div class="menu-details">
															<span class="menu-list-icon bg-violet">
																<i class="ti ti-user-up"></i>
															</span>
															<div class="menu-details-content">
																<p>Contacts</p>
																<span>Add New Contact</span>
															</div>
														</div>
													</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>pipeline">
														<div class="menu-details">
															<span class="menu-list-icon bg-green">
																<i class="ti ti-timeline-event-exclamation"></i>
															</span>
															<div class="menu-details-content">
																<p>Pipline</p>
																<span>Add New Pipline</span>
															</div>
														</div>
													</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>activities">
														<div class="menu-details">
															<span class="menu-list-icon bg-pink">
																<i class="ti ti-bounce-right"></i>
															</span>
															<div class="menu-details-content">
																<p>Activities</p>
																<span>Add New Activity</span>
															</div>
														</div>
													</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>analytics">
														<div class="menu-details">
															<span class="menu-list-icon bg-info">
																<i class="ti ti-analyze"></i>
															</span>
															<div class="menu-details-content">
																<p>Analytics</p>
																<span>Shows All Information</span>
															</div>
														</div>
													</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>projects">
														<div class="menu-details">
															<span class="menu-list-icon bg-danger">
																<i class="ti ti-atom-2"></i>
															</span>
															<div class="menu-details-content">
																<p>Projects</p>
																<span>Add New Project</span>
															</div>
														</div>
													</a>
												</li>
											</ul>
										</div>
										<div class="col-md-6">
											<ul class="menu-list">
												<li>
													<a href="<?php echo base_url(); ?>deals">
														<div class="menu-details">
															<span class="menu-list-icon bg-info">
																<i class="ti ti-medal"></i>
															</span>
															<div class="menu-details-content">
																<p>Deals</p>
																<span>Add New Deals</span>
															</div>
														</div>
													</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>leads">
														<div class="menu-details">
															<span class="menu-list-icon bg-secondary">
																<i class="ti ti-chart-arcs"></i>
															</span>
															<div class="menu-details-content">
																<p>Leads</p>
																<span>Add New Leads</span>
															</div>
														</div>
													</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>companies">
														<div class="menu-details">
															<span class="menu-list-icon bg-tertiary">
																<i class="ti ti-building-community"></i>
															</span>
															<div class="menu-details-content">
																<p>Company</p>
																<span>Add New Company</span>
															</div>
														</div>
													</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>tasks">
														<div class="menu-details">
															<span class="menu-list-icon bg-success">
																<i class="ti ti-list-check"></i>
															</span>
															<div class="menu-details-content">
																<p>Tasks</p>
																<span>Add New Task</span>
															</div>
														</div>
													</a>
												</li>
												<li>
													<a href="<?php echo base_url(); ?>campaign">
														<div class="menu-details">
															<span class="menu-list-icon bg-purple">
																<i class="ti ti-brand-campaignmonitor"></i>
															</span>
															<div class="menu-details-content">
																<p>Campaign</p>
																<span>Add New Campaign</span>
															</div>
														</div>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url(); ?>faq" class="btn btn-help">
									<i class="ti ti-help-hexagon"></i>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo base_url(); ?>lead-reports" class="btn btn-chart-pie">
									<i class="ti ti-chart-pie"></i>
								</a>
							</li>
						</ul>
					</li>
					<!-- /Nav List -->
					
					<!-- Email -->
					<li class="nav-item nav-item-email nav-item-box">
						<a href="<?php echo base_url(); ?>email">
							<i class="ti ti-message-circle-exclamation"></i>
							<span class="badge rounded-pill">14</span>
						</a>
					</li>
					<!-- /Email -->

					<!-- Notifications -->
					<li class="nav-item dropdown nav-item-box">
						<a href="javascript:void(0);" class="nav-link" data-bs-toggle="dropdown">
							<i class="ti ti-bell"></i>
							<span class="badge rounded-pill">13</span>
						</a>
						<div class="dropdown-menu dropdown-menu-end notification-dropdown">
							<div class="topnav-dropdown-header">
								<h4 class="notification-title">Notifications</h4>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="<?php echo base_url(); ?>activities">
											<div class="media d-flex">
												<span class="avatar flex-shrink-0">
													<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-02.jpg" alt="Profile">
													<span class="badge badge-info rounded-pill"></span>
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details">Ray Arnold left 6 comments on Isla Nublar SOC2 compliance report</p>
													<p class="noti-time">Last Wednesday at 9:42 am</p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="<?php echo base_url(); ?>activities">
											<div class="media d-flex">
												<span class="avatar flex-shrink-0">
													<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-03.jpg" alt="Profile">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details">Denise Nedry replied to Anna Srzand</p>
													<p class="noti-sub-details">“Oh, I finished de-bugging the phones, but the system's compiling for eighteen minutes, or twenty.  So, some minor systems may go on and off for a while.”</p>
													<p class="noti-time">Last Wednesday at 9:42 am</p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="<?php echo base_url(); ?>activities">
											<div class="media d-flex">
												<span class="avatar flex-shrink-0">
													<img alt="" src="<?php echo base_url(); ?>assets/img/profiles/avatar-06.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details">John Hammond attached a file to Isla Nublar SOC2 compliance report</p>
													<div class="noti-pdf">
														<div class="noti-pdf-icon">
															<span><i class="ti ti-chart-pie"></i></span>
														</div>
														<div class="noti-pdf-text">
															<p>EY_review.pdf</p>
															<span>2mb</span>
														</div>
													</div>
													<p class="noti-time">Last Wednesday at 9:42 am</p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="<?php echo base_url(); ?>activities" class="view-link">View all</a>
								<a href="javascript:void(0);" class="clear-link">Clear all</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->

					<!-- Profile Dropdown -->
					<li class="nav-item dropdown has-arrow main-drop">
						<a href="javascript:void(0);" class="nav-link userset" data-bs-toggle="dropdown">
							<span class="user-info">
								<span class="user-letter">
									<img src="<?php echo base_url(); ?>assets/img/profiles/avatar-20.jpg" alt="Profile">
								</span>
								<span class="badge badge-success rounded-pill"></span>
							</span>
						</a>
						<div class="dropdown-menu menu-drop-user">
							<div class="profilename">
								<a class="dropdown-item" href="<?php echo base_url(); ?>deals-dashboard">
									<i class="ti ti-layout-2"></i> Dashboard
								</a>
								<a class="dropdown-item" href="<?php echo base_url(); ?>profile">
									<i class="ti ti-user-pin"></i> My Profile
								</a>
								<a class="dropdown-item" href="<?php echo base_url(); ?>login">
									<i class="ti ti-lock"></i> Logout
								</a>
							</div>
						</div>
					</li>
					<!-- /Profile Dropdown -->

				</ul>
			</div>

			<!-- Mobile Menu -->
			<div class="dropdown mobile-user-menu">
				<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="<?php echo base_url(); ?>deals-dashboard">
						<i class="ti ti-layout-2"></i> Dashboard
					</a>
					<a class="dropdown-item" href="<?php echo base_url(); ?>profile">
						<i class="ti ti-user-pin"></i> My Profile
					</a>
					<a class="dropdown-item" href="<?php echo base_url(); ?>login">
						<i class="ti ti-lock"></i> Logout
					</a>
				</div>
			</div>
			<!-- /Mobile Menu -->

		</div>
		<!-- /Header -->
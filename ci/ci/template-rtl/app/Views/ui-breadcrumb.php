<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Title -->
	<title>UI Breadcrumb | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>

<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>
			<!-- animation CSS -->
			<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
	
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
							<div class="page-title">
								<h4>Breadcrumb</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-6">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title">Default Breadcrumb</h5>
									</div>
									<div class="card-body">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb">
												<li class="breadcrumb-item active" aria-current="page">Home</li>
											</ol>
										</nav>

										<nav aria-label="breadcrumb">
											<ol class="breadcrumb">
												<li class="breadcrumb-item"><a href="#">Home</a></li>
												<li class="breadcrumb-item active" aria-current="page">Library</li>
											</ol>
										</nav>

										<nav aria-label="breadcrumb">
											<ol class="breadcrumb mb-0">
												<li class="breadcrumb-item"><a href="#">Home</a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
									</div>
								</div>
							</div>
							
							<div class="col-xl-6">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title">Arrow Style</h5>
									</div>
									<div class="card-body">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-arrow">
												<li class="breadcrumb-item active" aria-current="page">Home</li>
											</ol>
										</nav>

										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-arrow">
												<li class="breadcrumb-item"><a href="#">Home</a></li>
												<li class="breadcrumb-item active" aria-current="page">Library</li>
											</ol>
										</nav>

										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-arrow mb-0">
												<li class="breadcrumb-item"><a href="#">Home</a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
									</div>
								</div>
							</div>
							
							<div class="col-xl-6">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title">Pipe Style</h5>
									</div>
									<div class="card-body">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-pipe">
												<li class="breadcrumb-item active" aria-current="page">Home</li>
											</ol>
										</nav>

										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-pipe">
												<li class="breadcrumb-item"><a href="#">Home</a></li>
												<li class="breadcrumb-item active" aria-current="page">Library</li>
											</ol>
										</nav>

										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-pipe mb-0">
												<li class="breadcrumb-item"><a href="#">Home</a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
									</div>
								</div>
							</div>
							
							<div class="col-xl-6">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title">Line Style</h5>
									</div>
									<div class="card-body">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-line">
												<li class="breadcrumb-item active" aria-current="page">Home</li>
											</ol>
										</nav>

										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-line">
												<li class="breadcrumb-item"><a href="#">Home</a></li>
												<li class="breadcrumb-item active" aria-current="page">Library</li>
											</ol>
										</nav>

										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-line mb-0">
												<li class="breadcrumb-item"><a href="#">Home</a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
									</div>
								</div>
							</div>
							
							<div class="col-xl-6">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title">Dot Style</h5>
									</div>
									<div class="card-body">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-dot">
												<li class="breadcrumb-item active" aria-current="page">Home</li>
											</ol>
										</nav>

										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-dot">
												<li class="breadcrumb-item"><a href="#">Home</a></li>
												<li class="breadcrumb-item active" aria-current="page">Library</li>
											</ol>
										</nav>

										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-dot mb-0">
												<li class="breadcrumb-item"><a href="#">Home</a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
									</div>
								</div>
							</div>
							
							<div class="col-xl-6">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title">Dividers</h5>
									</div>
									<div class="card-body">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-divide">
												<li class="breadcrumb-item active" aria-current="page">Home</li>
											</ol>
										</nav>

										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-divide">
												<li class="breadcrumb-item"><a href="#">Home</a></li>
												<li class="breadcrumb-item active" aria-current="page">Library</li>
											</ol>
										</nav>

										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-divide mb-0">
												<li class="breadcrumb-item"><a href="#">Home</a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
									</div>
								</div>
							</div>
							
							<div class="col-xl-6">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title">Breadcrumb with Icon</h5>
									</div>
									<div class="card-body">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb">
												<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-home"></i></li>
											</ol>
										</nav>

										<nav aria-label="breadcrumb">
											<ol class="breadcrumb">
												<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
												<li class="breadcrumb-item active" aria-current="page">Library</li>
											</ol>
										</nav>

										<nav aria-label="breadcrumb">
											<ol class="breadcrumb mb-0">
												<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
									</div>
								</div>
							</div>
							
							<div class="col-xl-6">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title">Without Separator</h5>
									</div>
									<div class="card-body">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-separatorless">
												<li class="breadcrumb-item active" aria-current="page"><i class="fas fa-home"></i></li>
											</ol>
										</nav>

										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-separatorless">
												<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
												<li class="breadcrumb-item active" aria-current="page">Library</li>
											</ol>
										</nav>

										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-separatorless mb-0">
												<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
									</div>
								</div>
							</div>
							
							<div class="col-xl-6">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title">Colored Breadcrumb</h5>
									</div>
									<div class="card-body">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-colored bg-primary">
												<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-colored bg-secondary">
												<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-colored bg-success">
												<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-colored bg-info">
												<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-colored bg-warning">
												<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-colored bg-danger">
												<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-colored bg-dark mb-0">
												<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
									</div>
								</div>
							</div>
							
							<div class="col-xl-6">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title">Light Colored Breadcrumb</h5>
									</div>
									<div class="card-body">
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-colored bg-soft-primary">
												<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-colored bg-soft-secondary">
												<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-colored bg-soft-success">
												<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-colored bg-soft-info">
												<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-colored bg-soft-warning">
												<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-colored bg-soft-danger">
												<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
										<nav aria-label="breadcrumb">
											<ol class="breadcrumb breadcrumb-colored bg-soft-dark mb-0">
												<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#">Library</a></li>
												<li class="breadcrumb-item active" aria-current="page">Data</li>
											</ol>
										</nav>
									</div>
								</div>
							</div>

						
						</div>
					</div>
				</div>
				
			</div>
			<!-- /Main Wrapper -->
	
			<?= $this->include('partials/vendor-scripts') ?>
			<!-- Chart JS -->
			<script src="<?php echo base_url(); ?>assets/plugins/apexchart/apexcharts.min.js"></script>
			<script src="<?php echo base_url(); ?>assets/plugins/apexchart/chart-data.js"></script>
			
		   
		</body>
	</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Title -->
	<title>UI Rating | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>

<?= $this->include('partials/title-meta') ?>
<?= $this->include('partials/head-css') ?>	
        <!-- Rangeslider CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css">

    </head>
    <body>
        <div id="global-loader" >
            <div class="whirly-loader"> </div>
        </div>
        <!-- Main Wrapper -->
        <div class="main-wrapper">
		<?= $this->include('partials/menu') ?>

            <div class="page-wrapper cardhead">
                <div class="content">
                
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">Rating</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
					<div class="row">
						<div class="col-xxl-4 col-xl-6">
							<div class="card custom-card">
								<div class="card-header">
								<div class="card-title">
										Basic Rater
								</div> 
								</div>
								<div class="card-body">
									<div class="d-flex flex-wrap align-items-center justify-content-between">
										<p class="fs-14 mb-0 fw-semibold">Show Some <span class="text-danger">&#10084;</span> with rating :</p>
										<div id="rater-basic"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-xl-6">
							<div class="card custom-card">
								<div class="card-header">
									<div class="card-title">
										5 star rater with steps
									</div> 
								</div>
								<div class="card-body">
									<div class="d-flex flex-wrap align-items-center justify-content-between">
										<p class="fs-14 mb-0 fw-semibold">Dont forget to rate the product :</p>
										<div id="rater-steps"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-xl-12">
							<div class="card custom-card">
								<div class="card-header">
									<div class="card-title">
										Custom messages
									</div> 
								</div>
								<div class="card-body">
									<div class="d-flex flex-wrap align-items-center justify-content-between">
										<p class="fs-14 mb-0 fw-semibold">Your rating is much appreciated&#128079; :</p>
										<div id="custom-messages"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-6 col-xl-6">
							<div class="card custom-card">
								<div class="card-header">
									<div class="card-title">
										Unlimited number of stars readOnly
									</div> 
								</div>
								<div class="card-body">
									<div class="d-flex flex-wrap align-items-center justify-content-between">
										<p class="fs-14 mb-0 fw-semibold">Thanks for rating :</p>
										<div id="stars-unlimited"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-6 col-xl-6">
							<div class="card custom-card">
								<div class="card-header">
									<div class="card-title">
										5 Star rater with custom isBusyText and simulated backend
									</div> 
								</div>
								<div class="card-body">
									<div class="d-flex flex-wrap align-items-center justify-content-between">
										<p class="fs-14 mb-0 fw-semibold">Thanks for rating :</p>
										<div id="stars-busytext"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-xl-6">
							<div class="card custom-card">
								<div class="card-header">
									<div class="card-title">
										On hover event
									</div> 
								</div>
								<div class="card-body">
									<div class="d-flex flex-wrap align-items-center justify-content-between">
										<p class="fs-14 mb-0 fw-semibold">Please give your valuable rating :</p>
										<div class="d-flex flex-wrap align-items-center">
											<div id="stars-hover"></div>
											<span class="live-rating badge bg-success-transparent ms-3">
												1
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-xl-6">
							<div class="card custom-card">
								<div class="card-header">
									<div class="card-title">
										Clear/reset rater
									</div> 
								</div>
								<div class="card-body">
									<div class="d-flex flex-wrap align-items-center justify-content-between">
										<p class="fs-14 mb-0 fw-semibold">Thank You so much for your support :</p>
										<div class="d-flex flex-wrap align-items-center">
											<div id="rater-reset"></div>
											<button class="btn btn-icon btn-sm  ms-3 " id="rater-reset-button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Reset">
												<i data-feather="rotate-cw" class="feather-16"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                
                </div>			
            </div>
        </div>
        <!-- /Main Wrapper -->
		
		
		<?= $this->include('partials/vendor-scripts') ?>
		<!-- Rater JS -->
		<script src="<?php echo base_url(); ?>assets/plugins/rater-js/index.js"></script>

		<!-- Internal Ratings JS -->
		<script src="<?php echo base_url(); ?>assets/js/ratings.js"></script>


    </body>
</html>
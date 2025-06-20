<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	
		<!-- Title -->
		<title>Chart Morris | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
		
	
	<?php include 'layouts/title-meta.php'; ?>
	<?php include 'layouts/head-css.php'; ?>

</head>

<body>
<div id="global-loader" >
            <div class="whirly-loader"> </div>
        </div>
	<!-- Main Wrapper -->
	<div class="main-wrapper">
		<?php include 'layouts/menu.php'; ?>
        <div class="page-wrapper cardhead">
                <div class="content">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Morris Chart</h3>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
					
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Bar Chart</div>
								</div>
								<div class="card-body">
									<div id="morrisBar1" class="chart-set"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Stacked Bar Chart </div>
								</div>
								<div class="card-body">
									<div id="morrisBar3" class="chart-set"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
									<div class="card-header">
										<div class="card-title">Line Chart</div>
									</div>
									<div class="card-body">
										<div id="morrisLine1" class="chart-set"></div>
									</div>
								</div>
						</div>
						<!-- /Chart -->
						
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
									<div class="card-header">
										<div class="card-title">Area Chart</div>
									</div>
									<div class="card-body">
										<div id="morrisArea1" class="chart-set"></div>
									</div>
								</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Line Chart</div>
								</div>
								<div class="card-body">
									<div id="morrisBar6" class="chart-set"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Line Chart</div>
								</div>
								<div class="card-body">
									<div id="morrisBar7" class="chart-set"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Donut Chart</div>
								</div>
								<div class="card-body">
									<div id="morrisDonut1" class="chart-set"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
					</div>
				
				</div>		
            </div>



        </div>
	<!-- /Main Wrapper -->

	<!-- JAVASCRIPT -->
	<?php include 'layouts/vendor-scripts.php'; ?>
 <!-- Chart JS -->
 <script src="assets/plugins/morris/raphael-min.js"></script>
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/morris/chart-data.js"></script>
        
             
</body>

</html>
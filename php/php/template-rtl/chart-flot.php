<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Title -->
	<title>Chart Flot | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
		
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
                <div class="content ">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Flot Charts</h3>
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
								<div class="card-body  chart-set">
									<div class="h-250" id="flotBar1"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Bar Chart</div>
								</div>
								<div class="card-body chart-set">
									<div  class="h-250" id="flotBar2"></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Line  Chart</div>
								</div>
								<div class="card-body chart-set">
									<div  class="h-250" id="flotLine1" ></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Line ChartPOints</div>
								</div>
								<div class="card-body chart-set">
									<div class="h-250" id="flotLine2" ></div>
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
								<div class="card-body chart-set">
									<div class="h-250" id="flotArea1" ></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Area Chart Points</div>
								</div>
								<div class="card-body chart-set">
									<div class="h-250" id="flotArea2" ></div>
								</div>
							</div>
						</div>
						<!-- /Chart -->
						
						<!-- Chart -->
						<div class="col-md-6">	
							<div class="card">
								<div class="card-header">
									<div class="card-title">Pie Chart</div>
								</div>
								<div class="card-body chart-set">
									<div class="h-250" id="flotPie1" ></div>
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
								<div class="card-body chart-set">
									<div class="h-250" id="flotPie2"></div>
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
 <script src="assets/plugins/flot/jquery.flot.js"></script>
		<script src="assets/plugins/flot/jquery.flot.fillbetween.js"></script>
		<script src="assets/plugins/flot/jquery.flot.pie.js"></script>
		<script src="assets/plugins/flot/chart-data.js"></script>
</body>

</html>
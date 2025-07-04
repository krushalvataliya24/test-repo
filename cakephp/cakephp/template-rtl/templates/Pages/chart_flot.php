<!DOCTYPE html>
<html lang="en">

<head>
	<?= $this->element('title-meta') ?>
	<!-- Title -->
	<title>Chart Flot | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
	<?= $this->element('head-css') ?>
</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<?= $this->element('header') ?>
		<?= $this->element('sidebar') ?>

		<!-- Page Wrapper -->
		<div class="page-wrapper cardhead">
			<div class="content">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">Flot Chart</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="home">Dashboard</a></li>
								<li class="breadcrumb-item active">Flot Charts</li>
							</ul>
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
								<div class="h-250" id="flotBar2"></div>
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
							<div class="card-body chart-set">
								<div class="h-250" id="flotLine1"></div>
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
								<div class="h-250" id="flotLine2"></div>
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
								<div class="h-250" id="flotArea1"></div>
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
								<div class="h-250" id="flotArea2"></div>
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
								<div class="h-250" id="flotPie1"></div>
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
		<!-- /Page Wrapper -->

	</div>
	<!-- /Main Wrapper -->

	<?= $this->element('vendor-scripts') ?>
	<!-- Chart JS -->
	<?php echo $this->Html->script('plugins/flot/jquery.flot.js'); ?>'
	<?php echo $this->Html->script('plugins/flot/jquery.flot.fillbetween.js'); ?>'
	<?php echo $this->Html->script('plugins/flot/jquery.flot.pie.js'); ?>'
	<?php echo $this->Html->script('plugins/flot/chart-data.js'); ?>'


</body>

</html>
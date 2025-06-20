<!DOCTYPE html>
<html lang="en">

<head>
	<?= $this->element('title-meta') ?>
	<!-- Title -->
	<title>Chart Morris | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
	<!-- Morris CSS -->
	<?php echo $this->Html->css('plugins/morris/morris.css'); ?>

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
					<div class="col-md-6 d-flex">
						<div class="card flex-fill">
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
					<div class="col-md-6 d-flex">
						<div class="card flex-fill">
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
					<div class="col-md-6 d-flex">
						<div class="card flex-fill">
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
					<div class="col-md-6 d-flex">
						<div class="card flex-fill">
							<div class="card-header">
								<div class="card-title">Donut Chart</div>
							</div>
							<div class="card-body">
								<div id="morrisDonut1" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

					<!-- Chart -->
					<div class="col-md-6 d-flex">
						<div class="card flex-fill">
							<div class="card-header">
								<div class="card-title">Line Chart</div>
							</div>
							<div class="card-body">
								<div id="morrisline" class="chart-set"></div>
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
	<?php echo $this->Html->script('plugins/morris/raphael-min.js'); ?>
	<?php echo $this->Html->script('plugins/morris/morris.min.js'); ?>
	<?php echo $this->Html->script('plugins/morris/chart-data.js'); ?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<?= $this->element('title-meta') ?>
	<!-- Title -->
	<title>Chart Apex | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
	<?= $this->element('head-css') ?>
</head>

<body>
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<?= $this->element('header') ?>
		<?= $this->element('sidebar') ?>

		<div class="page-wrapper cardhead">
			<div class="content ">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">Charts</h3>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">

					<!-- Chart -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Apex Simple</h5>
							</div>
							<div class="card-body">
								<div id="s-line" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

					<!-- Chart -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Area Chart</h5>
							</div>
							<div class="card-body">
								<div id="s-line-area" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

					<!-- Chart -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Column Chart</h5>
							</div>
							<div class="card-body">
								<div id="s-col" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

					<!-- Chart -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Column Stacked Chart</h5>
							</div>
							<div class="card-body">
								<div id="s-col-stacked" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->


					<!-- Chart -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Bar Chart</h5>
							</div>
							<div class="card-body">
								<div id="s-bar" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

					<!-- Chart -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Mixed Chart</h5>
							</div>
							<div class="card-body">
								<div id="mixed-chart" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

					<!-- Chart -->
					<div class="col-md-6 d-flex">
						<div class="card w-100">
							<div class="card-header">
								<h5 class="card-title">Donut Chart</h5>
							</div>
							<div class="card-body">
								<div id="donut-chart" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

					<!-- Chart -->
					<div class="col-md-6 d-flex">
						<div class="card w-100">
							<div class="card-header">
								<h5 class="card-title">Radial Chart</h5>
							</div>
							<div class="card-body">
								<div id="radial-chart" class="chart-set"></div>
							</div>
						</div>
					</div>
					<!-- /Chart -->

				</div>
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->

	<?= $this->element('vendor-scripts') ?>
</body>

</html>
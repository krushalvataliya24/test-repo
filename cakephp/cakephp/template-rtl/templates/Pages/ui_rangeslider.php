<!DOCTYPE html>
<html lang="en">

<head>
	<?= $this->element('title-meta') ?>
	<!-- Title -->
	<title>UI Rangeslider | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
	<!-- Rangeslider CSS -->
	<?php echo $this->Html->css('plugins/ion-rangeslider/css/ion.rangeSlider.min.css'); ?>

	<?= $this->element('head-css') ?>

</head>

<body>
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<?= $this->element('header') ?>
		<?= $this->element('sidebar') ?>

		<!-- Page Wrapper -->
		<div class="page-wrapper cardhead">
			<div class="content ">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">Range Slider</h3>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">

					<!-- Rangeslider -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Default</h5>
							</div>
							<div class="card-body">
								<input type="text" id="range_01">
							</div>
						</div>
					</div>
					<!-- /Rangeslider -->

					<!-- Rangeslider -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Min-Max</h5>
							</div>
							<div class="card-body">
								<input type="text" id="range_02">
							</div>
						</div>
					</div>
					<!-- /Rangeslider -->

					<!-- Rangeslider -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Prefix</h5>
							</div>
							<div class="card-body">
								<input type="text" id="range_03">
							</div>
						</div>
					</div>
					<!-- /Rangeslider -->

					<!-- Rangeslider -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Range</h5>
							</div>
							<div class="card-body">
								<input type="text" id="range_04">
							</div>
						</div>
					</div>
					<!-- /Rangeslider -->

					<!-- Rangeslider -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Step</h5>
							</div>
							<div class="card-body">
								<input type="text" id="range_05">
							</div>
						</div>
					</div>
					<!-- /Rangeslider -->

					<!-- Rangeslider -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Custom Values</h5>
							</div>
							<div class="card-body">
								<input type="text" id="range_06">
							</div>
						</div>
					</div>
					<!-- /Rangeslider -->

					<!-- Rangeslider -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Modern skin</h5>
							</div>
							<div class="card-body">
								<input type="text" id="range_13">
							</div>
						</div>
					</div>
					<!-- /Rangeslider -->

					<!-- Rangeslider -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Sharp Skin</h5>
							</div>
							<div class="card-body">
								<input type="text" id="range_14">
							</div>
						</div>
					</div>
					<!-- /Rangeslider -->

					<!-- Rangeslider -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Round skin</h5>
							</div>
							<div class="card-body">
								<input type="text" id="range_15">
							</div>
						</div>
					</div>
					<!-- /Rangeslider -->

					<!-- Rangeslider -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Square Skin</h5>
							</div>
							<div class="card-body">
								<input type="text" id="range_16">
							</div>
						</div>
					</div>
					<!-- /Rangeslider -->

				</div>
			</div>
		</div>
		<!-- /Page Wrapper -->

	</div>
	<!-- /Main Wrapper -->

	<?= $this->element('vendor-scripts') ?>
	<!-- Rangeslider JS -->
	<?php echo $this->Html->script('plugins/ion-rangeslider/js/ion.rangeSlider.min.js'); ?>
	<?php echo $this->Html->script('plugins/ion-rangeslider/js/custom-rangeslider.js'); ?>
</body>

</html>
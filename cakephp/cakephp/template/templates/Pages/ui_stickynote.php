<!DOCTYPE html>
<html lang="en">

<head>
	<?= $this->element('title-meta') ?>
	<!-- Title -->
	<title>UI Stickynote | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
	<!-- Sticky CSS -->
	<?php echo $this->Html->css('plugins/stickynote/sticky.css'); ?>
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
							<h3 class="page-title">Sticky Note</h3>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">

					<!-- Sticky -->
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Sticky Note <a class="btn btn-primary float-sm-end m-l-10" id="add_new" href="javascript:void(0);">Add New Note</a></h5>
							</div>
							<div class="card-body">
								<div class="sticky-note" id="board"></div>
							</div>
						</div>
					</div>
					<!-- /Sticky -->

				</div>

			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->

	<?= $this->element('vendor-scripts') ?>
	<!-- Stickynote JS -->
	<?php echo $this->Html->script('jquery-ui.min.js'); ?>
	<?php echo $this->Html->script('plugins/stickynote/sticky.js'); ?>
</body>

</html>
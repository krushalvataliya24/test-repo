<!DOCTYPE html>
<html lang="en">

<head>
	<?= $this->element('title-meta') ?>
	<!-- Title -->
	<title>UI Text Editor | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
	<!-- Summernote CSS -->
	<?php echo $this->Html->css('plugins/summernote/summernote-bs4.min.css'); ?>
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
							<h3 class="page-title">Text Editor</h3>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">

					<!-- Editor -->
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Editor</h5>
							</div>
							<div class="card-body">
								<div id="summernote2"></div>
							</div>
						</div>
					</div>
					<!-- /Editor -->

				</div>
			</div>
		</div>
	</div>

	<!-- /Main Wrapper -->

	<?= $this->element('vendor-scripts') ?>
	<!-- Summernote JS -->
	<?php echo $this->Html->script('plugins/summernote/summernote-bs4.min.js'); ?>


</body>

</html>
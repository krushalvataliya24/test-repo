<!DOCTYPE html>
<html lang="en">

<head>
	<?= $this->element('title-meta') ?>
	<!-- Title -->
	<title>UI Lightbox | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
	<?php echo $this->Html->css('plugins/lightbox/glightbox.min.css'); ?>

	<?= $this->element('head-css') ?>

</head>

<body>


	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<?= $this->element('header') ?>
		<?= $this->element('sidebar') ?>
		<div class="page-wrapper">
			<div class="content">
				<div class="page-header">
					<div class="page-title">
						<h3>Light Box</h3>
					</div>
				</div>
				<div class="row">

					<!-- Lightbox -->
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Single Image Lightbox</h5>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-md-4 mb-2 mb-md-0">
										<?php echo $this->Html->link(
											$this->Html->image('img-01.jpg', ['class' => 'img-fluid', 'alt' => 'image']),
											'/img/img-01.jpg',
											['class' => 'image-popup', 'escape' => false]
										); ?>
									</div>
									<div class="col-md-4 mb-2 mb-md-0">
										<?php echo $this->Html->link(
											$this->Html->image('img-02.jpg', ['class' => 'img-fluid', 'alt' => 'image']),
											'/img/img-02.jpg',
											['class' => 'image-popup', 'escape' => false]
										); ?>
									</div>

								</div>
							</div>
						</div>
					</div>
					<!-- /Lightbox -->

					<!-- Lightbox -->
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Image with Description</h5>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-md-4 mb-2 mb-md-0">
										<?php echo $this->Html->link(
											$this->Html->image('img-03.jpg', ['class' => 'img-fluid', 'alt' => 'work-thumbnail']),
											'/img/img-03.jpg',
											['class' => 'image-popup-desc', 'data-title' => 'Title 01', 'data-description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'escape' => false]
										); ?>
									</div>
									<div class="col-md-4 mb-2 mb-md-0">
										<?php echo $this->Html->link(
											$this->Html->image('img-04.jpg', ['class' => 'img-fluid', 'alt' => 'work-thumbnail']),
											'/img/img-04.jpg',
											['class' => 'image-popup-desc', 'data-title' => 'Title 02', 'data-description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'escape' => false]
										); ?>
									</div>
									<div class="col-md-4 mb-2 mb-md-0">
										<?php echo $this->Html->link(
											$this->Html->image('img-05.jpg', ['class' => 'img-fluid', 'alt' => 'work-thumbnail']),
											'/img/img-05.jpg',
											['class' => 'image-popup-desc', 'data-title' => 'Title 03', 'data-description' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit', 'escape' => false]
										); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Lightbox -->

				</div>
			</div>
		</div>


	</div>
	<!-- /Main Wrapper -->

	<!-- Alertify JS -->
	<?php echo $this->Html->script('plugins/lightbox/glightbox.min.js'); ?>
	<?php echo $this->Html->script('plugins/lightbox/lightbox.js'); ?>

	<?= $this->element('vendor-scripts') ?>

</body>

</html>
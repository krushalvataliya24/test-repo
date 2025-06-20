<!DOCTYPE html>
<html lang="en">

<head>
	<?= $this->element('title-meta') ?>
	<!-- Title -->
	<title>UI Images | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
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
						<h3>Images</h3>
					</div>
				</div>

				<div class="row">

					<!-- Images Shapes -->
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">Images Shapes</div>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-xl-12">
										<p>
											Add classes to an <code>&lt;img&gt;</code> element to easily style
											images in any project.
										</p>

										<div class="row">
											<div class="col-sm-3">
												<?php echo $this->Html->image('img-4.jpg', ['class' => 'img-fluid rounded', 'alt' => 'image', 'width' => '200']); ?>
												<p class="mb-0">
													<code>.rounded</code>
												</p>
											</div>

											<div class="col-sm-3">
												<?php echo $this->Html->image('profiles/avatar-03.jpg', ['class' => 'img-fluid rounded-circle', 'alt' => 'image', 'width' => '133']); ?>
												<p class="mb-0">
													<code>.rounded-circle</code>
												</p>
											</div>

											<div class="col-sm-3">
												<?php echo $this->Html->image('img-1.jpg', ['class' => 'img-fluid img-thumbnai', 'alt' => 'image', 'width' => '200']); ?>
												<p class="mb-0">
													<code>.img-thumbnail</code>
												</p>
											</div>

											<div class="col-sm-3">
												<?php echo $this->Html->image('profiles/avatar-02.jpg', ['class' => 'img-fluid rounded-pill', 'alt' => 'image', 'width' => '133']); ?>
												<p class="mb-0">
													<code>.rounded-pill</code>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Images Shapes -->

				</div>

				<div class="row">

					<!-- Image Left Align -->
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">Image Left Align</div>

							</div>
							<div class="card-body">
								<?php echo $this->Html->image('img-1.jpg', ['class' => 'rounded float-start', 'alt' => '...', 'width' => '200']); ?>
							</div>

						</div>
					</div>
					<!-- /Image Left Align -->

					<!-- Image Center Align -->
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">Image Center Align</div>
							</div>
							<div class="card-body">
								<?php echo $this->Html->image('img-1.jpg', ['class' => 'rounded mx-auto d-block', 'alt' => '...', 'width' => '200']); ?>
							</div>
						</div>
					</div>
					<!-- /Image Center Align -->

					<!-- Image Right Align -->
					<div class="col-xl-4">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">Image Right Align</div>
							</div>
							<div class="card-body">
								<?php echo $this->Html->image('img-1.jpg', ['class' => 'rounded float-end', 'alt' => '...', 'width' => '200']); ?>
							</div>
						</div>
					</div>
					<!-- /Image Right Align -->

					<!-- Figures -->
					<div class="col-xl-6">
						<div class="card">
							<div class="card-header justify-content-between">
								<div class="card-title">
									Figures
								</div>
							</div>
							<div class="card-body d-flex justify-content-between gap-2">
								<figure class="figure">
									<?php echo $this->Html->image('img-1.jpg', ['class' => 'bd-placeholder-img figure-img img-fluid rounded card-img', 'alt' => '...']); ?>
									<figcaption class="figure-caption">A caption for the above image.</figcaption>
								</figure>
								<figure class="figure float-end">
									<?php echo $this->Html->image('img-1.jpg', ['class' => 'bd-placeholder-img figure-img img-fluid rounded card-img', 'alt' => '...']); ?>
									<figcaption class="figure-caption text-end">A caption for the above image.
									</figcaption>
								</figure>
							</div>
						</div>
					</div>
					<!-- /Figures -->

				</div>
			</div>
		</div>

	</div>
	<!-- /Main Wrapper -->

	<?= $this->element('vendor-scripts') ?>

</body>

</html>
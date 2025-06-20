<!DOCTYPE html>
<html lang="en">

<head>

	<?= $this->element('title-meta') ?>

	<!-- Title -->
	<title>Blank Page  | CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>

	<?= $this->element('head-css') ?>
</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

    <?= $this->element('header') ?>
	<?= $this->element('sidebar') ?>

<!-- Page Wrapper -->
<div class="page-wrapper">
			<div class="content">

				<div class="row">
					<div class="col-md-12">
						<div class="page-header">
							<div class="row align-items-center ">
								<div class="col-8">
									<h3 class="page-title">Blank Page</h3>
								</div>
								<div class="col-4 text-sm-end">
									<div class="title-head">
										<div class="head-icons">
											<a href="blank_page" data-bs-toggle="tooltip" data-bs-placement="top"
												data-bs-original-title="Refresh"><i class="ti ti-refresh-dot"></i></a>
											<a href="javascript:void(0);" data-bs-toggle="tooltip"
												data-bs-placement="top" data-bs-original-title="Collapse"
												id="collapse-header"><i class="ti ti-chevrons-up"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->



    </div>
	<!-- /Main Wrapper -->

	<?= $this->element('vendor-scripts') ?>
</body>

</html>

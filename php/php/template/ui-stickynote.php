<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>UI Stickynote| CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
	<?php include 'layouts/title-meta.php'; ?>

	<!-- Sticky CSS -->
	<link rel="stylesheet" href="assets/plugins/stickynote/sticky.css">

	<?php include 'layouts/head-css.php'; ?>
</head>

<body>
	<div class="main-wrapper">
		<?php include 'layouts/menu.php'; ?>
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
								<h5 class="card-title">Sticky Note <a class="btn btn-primary float-sm-end m-l-10"
										id="add_new" href="javascript:void(0);">Add New Note</a></h5>
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

	<!-- JAVASCRIPT -->
	<?php include 'layouts/vendor-scripts.php'; ?>
	<!-- Stickynote JS -->
	<script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/plugins/stickynote/sticky.js"></script>
</body>

</html>
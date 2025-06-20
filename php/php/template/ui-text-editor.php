<?php include 'layouts/session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>UI Text Editor| CRMS - Advanced Bootstrap 5 Admin Template for Customer Management</title>
	<?php include 'layouts/title-meta.php'; ?>

	<!-- Summernote CSS -->
	<link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">

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
								<div id="summernote"></div>
							</div>
						</div>
					</div>
					<!-- /Editor -->

				</div>
			</div>
		</div>

	</div>

	<!-- /Main Wrapper -->

	<!-- JAVASCRIPT -->
	<?php include 'layouts/vendor-scripts.php'; ?>
	<!-- Summernote JS -->
	<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
</body>

</html>